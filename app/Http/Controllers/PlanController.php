<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Log;
use App\Models\Plan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;

class PlanController extends Controller
{
    public function show($day)
    {
        if ($day < 1 || $day > 365) {
            abort(404, 'Day must be between 1 and 365.');
        }

        $plan = Plan::where('day', $day)
            ->with(['creed', 'confession', 'catechism'])
            ->firstOrFail();

        $user = Auth::user();


        $preferredTranslation = $user?->preferredTranslation()
            ->with('translation') // Eager-load the related translation
            ->first()?->translation;

        return Inertia::render('Plan', [
            'planData' => $plan,
            'preferredTranslation' => $preferredTranslation,
        ]);
    }

    public function startPlan(Request $request)
    {
        $userId = Auth::id();

        // Step 1: Check if the user already has any plan records
        $hasPlan = Plan::where('user_id', $userId)->exists();

        if ($hasPlan) {
            // If the user has a plan, find the last completed progress day
            $lastProgressDay = Plan::where('user_id', $userId)
                ->where('progress_day', 1)
                ->max('day');

            $nextDay = $lastProgressDay ? $lastProgressDay + 1 : 1;  // Default to day 1 if no progress
            Log::info("Redirecting user {$userId} to day {$nextDay}");
            return redirect()->route('plan.show', ['day' => $nextDay]);
        }

        // Step 2: If no plan exists, generate a new plan for the user
        Log::info("Generating a new plan for user {$userId}");
        try {
            Plan::createNewPlan($userId);  // Call the static method to generate the plan
            Log::info("New plan successfully created for user {$userId}");
        } catch (\Exception $e) {
            Log::error("Failed to create a new plan for user {$userId}: {$e->getMessage()}");
            return redirect()->back()->with('error', 'Failed to create your plan. Please try again.');
        }

        // Step 3: Redirect to day 1 after the plan is created
        Log::info("Redirecting user {$userId} to day 1");
        return redirect()->route('plan.show', ['day' => 1]);
    }

    public function markDayComplete(Request $request)
    {
        $validated = $request->validate([
            'day' => 'required|integer',
        ]);

        $plan = Plan::where('day', $validated['day'])->first();

        if (!$plan) {
            return redirect()->back()->with('error', 'Plan not found.');
        }

        $plan->progress_day = 1;
        $plan->save();

        return redirect()->route('plan.show', ['day' => $validated['day'] + 1])
            ->with('success', 'Day marked as complete!');
    }

}
