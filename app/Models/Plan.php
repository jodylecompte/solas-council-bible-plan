<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Confession;
use App\Models\Creed;
use App\Models\User;
use App\Models\Catechism;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Carbon;
class Plan extends Model
{
    use HasFactory;

    public function creed()
    {
        return $this->belongsTo(Creed::class);
    }

    public function confession()
    {
        return $this->belongsTo(Confession::class);
    }

    public function catechism()
    {
        return $this->belongsTo(Catechism::class);
    }

    public static function createNewPlan($userId)
    {
        $startDate = Carbon::now('America/Chicago')->startOfDay();

        // Load the JSON files
        $oldTestament = json_decode(File::get(resource_path('data/old_testament.json')), true);
        $newTestament = json_decode(File::get(resource_path('data/new_testament.json')), true);

        // Fetch required data
        $catechisms = Catechism::where('name', 'not like', '%Heidelberg%')->get();
        $lordsDays = Catechism::where('name', 'like', '%Heidelberg%')->get();
        $confessions = Confession::all();

        $planData = [];
        $catechismIndex = 0;
        $lordsDayIndex = 0;

        for ($i = 0; $i <= 364; $i++) {
            $currentDate = $startDate->copy()->addDays($i);
            $isSunday = $currentDate->isSunday();

            $catechismId = $isSunday
                ? $lordsDays[$lordsDayIndex++ % $lordsDays->count()]->id
                : ($catechismIndex < $catechisms->count() ? $catechisms[$catechismIndex++]->id : null);

            $planData[] = [
                'user_id' => $userId,
                'day' => $i + 1,
                'ot_reading' => $oldTestament[$i + 1] ?? null,
                'nt_reading' => $newTestament[$i + 1] ?? null,
                'catechism_id' => $catechismId,
                'confession_id' => $confessions[$i % $confessions->count()]->id,
                'creed_id' => ($i % 3) + 1,
                'progress_ot' => 0,
                'progress_nt' => 0,
                'progress_creed' => 0,
                'progress_catechism' => 0,
                'progress_confession' => 0,
                'progress_day' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        try {
            // Perform a batch insert
            Log::info("Inserting plan data for user {$userId}.");
            self::insert($planData);
            Log::info("Plan data successfully inserted for user {$userId}.");
        } catch (\Exception $e) {
            Log::error("Failed to insert plan for user {$userId}: {$e->getMessage()}");
            throw $e; // Re-throw the exception for further handling if needed
        }
    }
}
