<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\File;
use App\Models\Plan;

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
        $oldTestament = File::get(resource_path('data/old_testament.json'));
        $newTestament = File::get(resource_path('data/new_testament.json'));

        $oldTestament = json_decode($oldTestament, true);
        $newTestament = json_decode($newTestament, true);

        $planData = [];

        for ($i = 0; $i <= 364; $i++) {
            $planData[] = [
                'day' => $i + 1,
                'ot' => $oldTestament[$i + 1],
                'nt' => $newTestament[$i + 1]
            ];
        }

        return response()->json(['data' => $planData]);
    }


}
