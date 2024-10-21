<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\File;
use App\Models\Plan;
use App\Models\Confession;
use App\Models\Creed;
use App\Models\User;
use App\Models\Catechism;
use Illuminate\Support\Carbon;

class PlanController extends Controller
{
    public function show($day)
    {
        // Ensure the day is between 1 and 365
        if ($day < 1 || $day > 365) {
            abort(404, 'Day must be between 1 and 365.');
        }

        // Fetch the plan for the given day
        $plan = Plan::where('day', $day)->with('creed')->firstOrFail();

        // Return the plan data to the Inertia view
        return Inertia::render('Plan', [
            'planData' => [
                'day' => $plan->day,
                'nt_reading' => $plan->nt_reading,
                'ot_reading' => $plan->ot_reading,
                'creed' => $plan->creed->name,
                'creed_url' => $plan->creed->url,
            ]
        ]);
    }

    public function startPlan(Request $request)
    {
        $startDate = Carbon::now('America/Chicago')->startOfDay();

        $oldTestament = json_decode(File::get(resource_path('data/old_testament.json')), true);
        $newTestament = json_decode(File::get(resource_path('data/new_testament.json')), true);

        $catechisms = Catechism::where('name', 'not like', '%Heidelberg%')->get();
        $lordsDays = Catechism::where('name', 'like', '%Heidelberg%')->get();
        $confessions = Confession::all();

        $planData = [];
        $catechismIndex = 0;
        $lordsDayIndex = 0;

        for ($i = 0; $i <= 364; $i++) {
            $currentDate = $startDate->copy()->addDays($i);
            $isSunday = $currentDate->isSunday();

            if ($isSunday) {
                $catechismId = $lordsDays[$lordsDayIndex % $lordsDays->count()]->id;
                $lordsDayIndex++;
            } else {
                $catechismId = $catechismIndex < $catechisms->count()
                    ? $catechisms[$catechismIndex]->id
                    : null;
                $catechismIndex++;
            }

            $planData[] = [
                'day' => $i + 1,
                'date' => $currentDate->toDateString(),
                'ot' => $oldTestament[$i + 1] ?? null,
                'nt' => $newTestament[$i + 1] ?? null,
                'catechism_id' => $catechismId,
                'confession_id' => $i % $confessions->count(),
                'creed_id' => ($i % 3) + 1,
            ];
        }

        return response()->json(['data' => $planData]);
    }
}
