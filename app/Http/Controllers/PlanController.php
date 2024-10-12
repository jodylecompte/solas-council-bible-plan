<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
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
                'creed' => $plan->creed->name,  // Assuming the creed relationship
            ]
        ]);
    }
}
