<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BibleTranslation;

class BibleTranslationSeeder extends Seeder
{
    public function run()
    {
        $translations = [
            ['short_name' => 'AMP', 'full_name' => 'Amplified Bible', 'site_id' => 1588],
            ['short_name' => 'CSB', 'full_name' => 'Christian Standard Bible', 'site_id' => 1713],
            ['short_name' => 'ESV', 'full_name' => 'English Standard Version', 'site_id' => 59],
            ['short_name' => 'KJV', 'full_name' => 'King James Version', 'site_id' => 1],
            ['short_name' => 'LSB', 'full_name' => 'Legacy Standard Bible', 'site_id' => 3345],
            ['short_name' => 'NASB95', 'full_name' => 'New American Standard Bible 1995', 'site_id' => 100],
            ['short_name' => 'NASB2020', 'full_name' => 'New American Standard Bible 2020', 'site_id' => 2692],
            ['short_name' => 'NIV', 'full_name' => 'New International Version', 'site_id' => 111],
            ['short_name' => 'NKJV', 'full_name' => 'New King James Version', 'site_id' => 114],
            ['short_name' => 'NLT', 'full_name' => 'New Living Translation', 'site_id' => 116],
            ['short_name' => 'NRSV', 'full_name' => 'New Revised Standard Version', 'site_id' => 2016],
            ['short_name' => 'RSV', 'full_name' => 'Revised Standard Version', 'site_id' => 2020],
        ];

        foreach ($translations as $translation) {
            BibleTranslation::create($translation);
        }
    }
}
