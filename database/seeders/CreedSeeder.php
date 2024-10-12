<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Creed;

class CreedSeeder extends Seeder
{
    private $dataset = [
        ['name' => 'Nicene'],
        ['name' => 'Athanasian'],
        ['name' => "Apostle's"],
    ];

    public function run(): void
    {
        foreach ($this->dataset as $data) {
            Creed::create($data);
        }
    }
}
