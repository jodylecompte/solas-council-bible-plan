<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Creed;

class CreedSeeder extends Seeder
{
    private $dataset = [
        ['name' => 'Nicene', 'url' => 'https://reformedstandards.com/ancient-church/nicene-creed.html'],
        ['name' => 'Athanasian', 'url' => 'https://reformedstandards.com/ancient-church/apostles-creed.html'],
        ['name' => "Apostle's", 'url' => 'https://reformedstandards.com/ancient-church/apostles-creed.html'],
    ];

    public function run(): void
    {
        foreach ($this->dataset as $data) {
            Creed::create($data);
        }
    }
}
