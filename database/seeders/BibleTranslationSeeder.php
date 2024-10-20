<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BibleTranslation;

class BibleTranslationSeeder extends Seeder
{
    public function run()
    {
        $translations = [
            ['short_name' => 'AMP', 'full_name' => 'Amplified Bible'],
            ['short_name' => 'CSB', 'full_name' => 'Christian Standard Bible'],
            ['short_name' => 'ESV', 'full_name' => 'English Standard Version'],
            ['short_name' => 'KJV', 'full_name' => 'King James Version'],
            ['short_name' => 'LSB', 'full_name' => 'Legacy Standard Bible'],
            ['short_name' => 'NASB95', 'full_name' => 'New American Standard Bible 1995'],
            ['short_name' => 'NASB2020', 'full_name' => 'New American Standard Bible 2020'],
            ['short_name' => 'NIV', 'full_name' => 'New International Version'],
            ['short_name' => 'NKJV', 'full_name' => 'New King James Version'],
            ['short_name' => 'NLT', 'full_name' => 'New Living Translation'],
            ['short_name' => 'NRSV', 'full_name' => 'New Revised Standard Version'],
            ['short_name' => 'RSV', 'full_name' => 'Revised Standard Version'],
        ];

        foreach ($translations as $translation) {
            BibleTranslation::create($translation);
        }
    }
}
