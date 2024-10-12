<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;

class PlanSeeder extends Seeder
{
    private $planData = [
        [
            'day' => 1,
            'nt_reading' => 'Matthew 1, Acts 1',
            'ot_reading' => 'Genesis 1, Ezra 1',
            'creed_id' => 1, 
        ],
        [
            'day' => 2,
            'nt_reading' => 'Matthew 2, Acts 2',
            'ot_reading' => 'Genesis 2, Ezra 2',
            'creed_id' => 2,
        ],
        [
            'day' => 3,
            'nt_reading' => 'Matthew 3, Acts 3',
            'ot_reading' => 'Genesis 3, Ezra 3',
            'creed_id' => 3, 
        ],
        [
            'day' => 4,
            'nt_reading' => 'Matthew 4, Acts 4',
            'ot_reading' => 'Genesis 4, Ezra 4',
            'creed_id' => 1,
        ],
        [
            'day' => 5,
            'nt_reading' => 'Matthew 5, Acts 5',
            'ot_reading' => 'Genesis 5, Ezra 5',
            'creed_id' => 2, 
        ],
        [
            'day' => 6,
            'nt_reading' => 'Matthew 6, Acts 6',
            'ot_reading' => 'Genesis 6, Ezra 6',
            'creed_id' => 3,
        ],
        [
            'day' => 7,
            'nt_reading' => 'Matthew 7, Acts 7',
            'ot_reading' => 'Genesis 7, Ezra 7',
            'creed_id' => 1, 
        ],
        [
            'day' => 8,
            'nt_reading' => 'Matthew 8, Acts 8',
            'ot_reading' => 'Genesis 8, Ezra 8',
            'creed_id' => 2,
        ],
        [
            'day' => 9,
            'nt_reading' => 'Matthew 9, Acts 9',
            'ot_reading' => 'Genesis 9-10, Ezra 9',
            'creed_id' => 3, 
        ],
        [
            'day' => 10,
            'nt_reading' => 'Matthew 10, Acts 10',
            'ot_reading' => 'Genesis 11, Ezra 10',
            'creed_id' => 1,
        ],
    ];

    public function run(): void
    {
        foreach ($this->planData as $data) {
            Plan::create($data);
        }
    }
}
