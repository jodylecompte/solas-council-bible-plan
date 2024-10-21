<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatechismSeeder extends Seeder
{
    public function run()
    {
        // Truncate the table to avoid duplicate entries
        DB::table('catechisms')->truncate();

        $dataset = [
            [
                'name' => 'Westminster Shorter Catechism: 1-3',
                'resource_url' => 'https://reformedstandards.com/westminster/wsc.html?a=question-1',
            ],
            [
                'name' => 'Westminster Shorter Catechism: 4-6',
                'resource_url' => 'https://reformedstandards.com/westminster/wsc.html?a=question-4',
            ],
            [
                'name' => 'Westminster Shorter Catechism: 7-9',
                'resource_url' => 'https://reformedstandards.com/westminster/wsc.html?a=question-7',
            ],
            [
                'name' => 'Westminster Shorter Catechism: 10-12',
                'resource_url' => 'https://reformedstandards.com/westminster/wsc.html?a=question-10',
            ],
            [
                'name' => 'Westminster Shorter Catechism: 13-16',
                'resource_url' => 'https://reformedstandards.com/westminster/wsc.html?a=question-13',
            ],
            [
                'name' => 'Westminster Shorter Catechism: 17-19',
                'resource_url' => 'https://reformedstandards.com/westminster/wsc.html?a=question-17',
            ],
            [
                'name' => 'Westminster Shorter Catechism: 20-22',
                'resource_url' => 'https://reformedstandards.com/westminster/wsc.html?a=question-20',
            ],
            [
                'name' => 'Westminster Shorter Catechism: 23-25',
                'resource_url' => 'https://reformedstandards.com/westminster/wsc.html?a=question-23',
            ],
            [
                'name' => 'Westminster Shorter Catechism: 26-28',
                'resource_url' => 'https://reformedstandards.com/westminster/wsc.html?a=question-26',
            ],
            [
                'name' => 'Westminster Shorter Catechism: 29-31',
                'resource_url' => 'https://reformedstandards.com/westminster/wsc.html?a=question-29',
            ],
            [
                'name' => 'Westminster Shorter Catechism: 32-34',
                'resource_url' => 'https://reformedstandards.com/westminster/wsc.html?a=question-32',
            ],
            [
                'name' => 'Westminster Shorter Catechism: 35-37',
                'resource_url' => 'https://reformedstandards.com/westminster/wsc.html?a=question-35',
            ],
            [
                'name' => 'Westminster Shorter Catechism: 38-40',
                'resource_url' => 'https://reformedstandards.com/westminster/wsc.html?a=question-38',
            ],
            [
                'name' => 'Westminster Shorter Catechism: 41-43',
                'resource_url' => 'https://reformedstandards.com/westminster/wsc.html?a=question-41',
            ],
            [
                'name' => 'Westminster Shorter Catechism: 44-46',
                'resource_url' => 'https://reformedstandards.com/westminster/wsc.html?a=question-44',
            ],
            [
                'name' => 'Westminster Shorter Catechism: 47-49',
                'resource_url' => 'https://reformedstandards.com/westminster/wsc.html?a=question-47',
            ],
            [
                'name' => 'Westminster Shorter Catechism: 50-52',
                'resource_url' => 'https://reformedstandards.com/westminster/wsc.html?a=question-50',
            ],
            [
                'name' => 'Westminster Shorter Catechism: 53-55',
                'resource_url' => 'https://reformedstandards.com/westminster/wsc.html?a=question-53',
            ],
            [
                'name' => 'Westminster Shorter Catechism: 56-58',
                'resource_url' => 'https://reformedstandards.com/westminster/wsc.html?a=question-56',
            ],
            [
                'name' => 'Westminster Shorter Catechism: 59-61',
                'resource_url' => 'https://reformedstandards.com/westminster/wsc.html?a=question-59',
            ],
            [
                'name' => 'Westminster Shorter Catechism: 62-64',
                'resource_url' => 'https://reformedstandards.com/westminster/wsc.html?a=question-62',
            ],
            [
                'name' => 'Westminster Shorter Catechism: 65-67',
                'resource_url' => 'https://reformedstandards.com/westminster/wsc.html?a=question-65',
            ],
            [
                'name' => 'Westminster Shorter Catechism: 68-70',
                'resource_url' => 'https://reformedstandards.com/westminster/wsc.html?a=question-68',
            ],
            [
                'name' => 'Westminster Shorter Catechism: 71-73',
                'resource_url' => 'https://reformedstandards.com/westminster/wsc.html?a=question-71',
            ],
            [
                'name' => 'Westminster Shorter Catechism: 74-76',
                'resource_url' => 'https://reformedstandards.com/westminster/wsc.html?a=question-74',
            ],
            [
                'name' => 'Westminster Shorter Catechism: 77-79',
                'resource_url' => 'https://reformedstandards.com/westminster/wsc.html?a=question-77',
            ],
            [
                'name' => 'Westminster Shorter Catechism: 80-82',
                'resource_url' => 'https://reformedstandards.com/westminster/wsc.html?a=question-80',
            ],
            [
                'name' => 'Westminster Shorter Catechism: 83-85',
                'resource_url' => 'https://reformedstandards.com/westminster/wsc.html?a=question-83',
            ],
            [
                'name' => 'Westminster Shorter Catechism: 86-88',
                'resource_url' => 'https://reformedstandards.com/westminster/wsc.html?a=question-86',
            ],
            [
                'name' => 'Westminster Shorter Catechism: 89-91',
                'resource_url' => 'https://reformedstandards.com/westminster/wsc.html?a=question-89',
            ],
            [
                'name' => 'Westminster Shorter Catechism: 92-94',
                'resource_url' => 'https://reformedstandards.com/westminster/wsc.html?a=question-92',
            ],
            [
                'name' => 'Westminster Shorter Catechism: 95-97',
                'resource_url' => 'https://reformedstandards.com/westminster/wsc.html?a=question-95',
            ],
            [
                'name' => 'Westminster Shorter Catechism: 98-100',
                'resource_url' => 'https://reformedstandards.com/westminster/wsc.html?a=question-98',
            ],
            [
                'name' => 'Westminster Shorter Catechism: 101-103',
                'resource_url' => 'https://reformedstandards.com/westminster/wsc.html?a=question-101',
            ],
            [
                'name' => 'Westminster Shorter Catechism: 104-107',
                'resource_url' => 'https://reformedstandards.com/westminster/wsc.html?a=question-104',
            ],
            [
                'name' => 'Westminster Longer Catechism: 1-3',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-1',
            ],
            [
                'name' => 'Westminster Longer Catechism: 4-6',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-4',
            ],
            [
                'name' => 'Westminster Longer Catechism: 7-9',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-7',
            ],
            [
                'name' => 'Westminster Longer Catechism: 10-12',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-10',
            ],
            [
                'name' => 'Westminster Longer Catechism: 13-16',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-13',
            ],
            [
                'name' => 'Westminster Longer Catechism: 17-19',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-17',
            ],
            [
                'name' => 'Westminster Longer Catechism: 20-22',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-20',
            ],
            [
                'name' => 'Westminster Longer Catechism: 23-25',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-23',
            ],
            [
                'name' => 'Westminster Longer Catechism: 26-28',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-26',
            ],
            [
                'name' => 'Westminster Longer Catechism: 29-31',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-29',
            ],
            [
                'name' => 'Westminster Longer Catechism: 32-34',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-32',
            ],
            [
                'name' => 'Westminster Longer Catechism: 35-37',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-35',
            ],
            [
                'name' => 'Westminster Longer Catechism: 38-40',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-38',
            ],
            [
                'name' => 'Westminster Longer Catechism: 41-43',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-41',
            ],
            [
                'name' => 'Westminster Longer Catechism: 44-46',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-44',
            ],
            [
                'name' => 'Westminster Longer Catechism: 47-49',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-47',
            ],
            [
                'name' => 'Westminster Longer Catechism: 50-52',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-50',
            ],
            [
                'name' => 'Westminster Longer Catechism: 53-55',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-53',
            ],
            [
                'name' => 'Westminster Longer Catechism: 56-58',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-56',
            ],
            [
                'name' => 'Westminster Longer Catechism: 59-61',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-59',
            ],
            [
                'name' => 'Westminster Longer Catechism: 62-64',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-62',
            ],
            [
                'name' => 'Westminster Longer Catechism: 65-67',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-65',
            ],
            [
                'name' => 'Westminster Longer Catechism: 68-70',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-68',
            ],
            [
                'name' => 'Westminster Longer Catechism: 71-73',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-71',
            ],
            [
                'name' => 'Westminster Longer Catechism: 74-76',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-74',
            ],
            [
                'name' => 'Westminster Longer Catechism: 77-79',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-77',
            ],
            [
                'name' => 'Westminster Longer Catechism: 80-82',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-80',
            ],
            [
                'name' => 'Westminster Longer Catechism: 83-85',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-83',
            ],
            [
                'name' => 'Westminster Longer Catechism: 86-88',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-86',
            ],
            [
                'name' => 'Westminster Longer Catechism: 89-91',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-89',
            ],
            [
                'name' => 'Westminster Longer Catechism: 92-94',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-92',
            ],
            [
                'name' => 'Westminster Longer Catechism: 95-97',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-95',
            ],
            [
                'name' => 'Westminster Longer Catechism: 98-100',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-98',
            ],
            [
                'name' => 'Westminster Longer Catechism: 101-103',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-101',
            ],
            [
                'name' => 'Westminster Longer Catechism: 104-107',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-104',
            ],
            [
                'name' => 'Westminster Longer Catechism: 108-110',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-108',
            ],
            [
                'name' => 'Westminster Longer Catechism: 111-113',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-111',
            ],
            [
                'name' => 'Westminster Longer Catechism: 114-116',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-114',
            ],
            [
                'name' => 'Westminster Longer Catechism: 117-119',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-117',
            ],
            [
                'name' => 'Westminster Longer Catechism: 120-122',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-120',
            ],
            [
                'name' => 'Westminster Longer Catechism: 123-125',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-123',
            ],
            [
                'name' => 'Westminster Longer Catechism: 126-128',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-126',
            ],
            [
                'name' => 'Westminster Longer Catechism: 129-131',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-129',
            ],
            [
                'name' => 'Westminster Longer Catechism: 132-135',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-132',
            ],
            [
                'name' => 'Westminster Longer Catechism: 136-138',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-136',
            ],
            [
                'name' => 'Westminster Longer Catechism: 139-141',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-139',
            ],
            [
                'name' => 'Westminster Longer Catechism: 142-145',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-142',
            ],
            [
                'name' => 'Westminster Longer Catechism: 146-148',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-146',
            ],
            [
                'name' => 'Westminster Longer Catechism: 149-151',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-149',
            ],
            [
                'name' => 'Westminster Longer Catechism: 152-154',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-152',
            ],
            [
                'name' => 'Westminster Longer Catechism: 155-157',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-155',
            ],
            [
                'name' => 'Westminster Longer Catechism: 159-160',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-159',
            ],
            [
                'name' => 'Westminster Longer Catechism: 161-163',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-161',
            ],
            [
                'name' => 'Westminster Longer Catechism: 164-166',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-164',
            ],
            [
                'name' => 'Westminster Longer Catechism: 167-169',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-167',
            ],
            [
                'name' => 'Westminster Longer Catechism: 170-172',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-170',
            ],
            [
                'name' => 'Westminster Longer Catechism: 173-175',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-173',
            ],
            [
                'name' => 'Westminster Longer Catechism: 176-178',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-176',
            ],
            [
                'name' => 'Westminster Longer Catechism: 179-181',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-179',
            ],
            [
                'name' => 'Westminster Longer Catechism: 182-185',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-182',
            ],
            [
                'name' => 'Westminster Longer Catechism: 186-188',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-186',
            ],
            [
                'name' => 'Westminster Longer Catechism: 189-191',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-189',
            ],
            [
                'name' => 'Westminster Longer Catechism: 192-194',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-192',
            ],
            [
                'name' => 'Westminster Longer Catechism: 195-196',
                'resource_url' => 'https://reformedstandards.com/westminster/wlc.html?a=question-195',
            ],
            [
                'name' => 'Calvin\'s Catechism - Faith: 1-3',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-1-faith/',
            ],
            [
                'name' => 'Calvin\'s Catechism - Faith: 4-6',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-1-faith/',
            ],
            [
                'name' => 'Calvin\'s Catechism - Faith: 7-9',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-1-faith/',
            ],
            [
                'name' => 'Calvin\'s Catechism - Faith: 10-12',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-1-faith/',
            ],
            [
                'name' => 'Calvin\'s Catechism - Faith: 13-16',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-1-faith/',
            ],
            [
                'name' => 'Calvin\'s Catechism - Faith: 17-19',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-1-faith/',
            ],
            [
                'name' => 'Calvin\'s Catechism - Faith: 20-22',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-1-faith/',
            ],
            [
                'name' => 'Calvin\'s Catechism - Faith: 23-25',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-1-faith/',
            ],
            [
                'name' => 'Calvin\'s Catechism - Faith: 26-28',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-1-faith/',
            ],
            [
                'name' => 'Calvin\'s Catechism - Faith: 29-31',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-1-faith/',
            ],
            [
                'name' => 'Calvin\'s Catechism - Faith: 32-34',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-1-faith/',
            ],
            [
                'name' => 'Calvin\'s Catechism - Faith: 35-37',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-1-faith/',
            ],
            [
                'name' => 'Calvin\'s Catechism - Faith: 38-40',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-1-faith/',
            ],
            [
                'name' => 'Calvin\'s Catechism - Faith: 41-43',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-1-faith/',
            ],
            [
                'name' => 'Calvin\'s Catechism - Faith: 44-46',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-1-faith/',
            ],
            [
                'name' => 'Calvin\'s Catechism - Faith: 47-49',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-1-faith/',
            ],
            [
                'name' => 'Calvin\'s Catechism - Faith: 50-52',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-1-faith/',
            ],
            [
                'name' => 'Calvin\'s Catechism - Faith: 53-55',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-1-faith/',
            ],
            [
                'name' => 'Calvin\'s Catechism - Faith: 56-58',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-1-faith/',
            ],
            [
                'name' => 'Calvin\'s Catechism - Faith: 59-61',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-1-faith/',
            ],
            [
                'name' => 'Calvin\'s Catechism - Faith: 62-64',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-1-faith/',
            ],
            [
                'name' => 'Calvin\'s Catechism - Faith: 65-67',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-1-faith/',
            ],
            [
                'name' => 'Calvin\'s Catechism - Faith: 68-70',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-1-faith/',
            ],
            [
                'name' => 'Calvin\'s Catechism - Faith: 71-73',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-1-faith/',
            ],
            [
                'name' => 'Calvin\'s Catechism - Faith: 74-76',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-1-faith/',
            ],
            [
                'name' => 'Calvin\'s Catechism - Faith: 77-79',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-1-faith/',
            ],
            [
                'name' => 'Calvin\'s Catechism - Faith: 80-82',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-1-faith/',
            ],
            [
                'name' => 'Calvin\'s Catechism - Faith: 83-85',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-1-faith/',
            ],
            [
                'name' => 'Calvin\'s Catechism - Faith: 86-88',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-1-faith/',
            ],
            [
                'name' => 'Calvin\'s Catechism - Faith: 89-91',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-1-faith/',
            ],
            [
                'name' => 'Calvin\'s Catechism - Faith: 92-94',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-1-faith/',
            ],
            [
                'name' => 'Calvin\'s Catechism - Faith: 95-97',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-1-faith/',
            ],
            [
                'name' => 'Calvin\'s Catechism - Faith: 98-100',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-1-faith/',
            ],
            [
                'name' => 'Calvin\'s Catechism - Faith: 101-103',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-1-faith/',
            ],
            [
                'name' => 'Calvin\'s Catechism - Faith: 104-107',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-1-faith/',
            ],
            [
                'name' => 'Calvin\'s Catechism - Faith: 108-110',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-1-faith/',
            ],
            [
                'name' => 'Calvin\'s Catechism - Faith: 111-113',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-1-faith/',
            ],
            [
                'name' => 'Calvin\'s Catechism - Faith: 114-116',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-1-faith/',
            ],
            [
                'name' => 'Calvin\'s Catechism - Faith: 117-119',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-1-faith/',
            ],
            [
                'name' => 'Calvin\'s Catechism - Faith: 120-122',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-1-faith/',
            ],
            [
                'name' => 'Calvin\'s Catechism - Faith: 123-125',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-1-faith/',
            ],
            [
                'name' => 'Calvin\'s Catechism - Faith: 126-128',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-1-faith/',
            ],
            [
                'name' => 'Calvin\'s Catechism - Faith: 129-130',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-1-faith/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Law: 131-135',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-2-the-law/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Law: 136-138',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-2-the-law/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Law: 139-141',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-2-the-law/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Law: 142-145',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-2-the-law/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Law: 146-148',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-2-the-law/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Law: 149-151',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-2-the-law/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Law: 152-154',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-2-the-law/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Law: 155-157',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-2-the-law/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Law: 158-160',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-2-the-law/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Law: 161-163 ',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-2-the-law/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Law: 164-166',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-2-the-law/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Law: 167-169',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-2-the-law/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Law: 170-172',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-2-the-law/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Law: 173-175',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-2-the-law/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Law: 176-178',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-2-the-law/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Law: 179-181',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-2-the-law/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Law: 182-185',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-2-the-law/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Law: 186-188',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-2-the-law/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Law: 189-191',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-2-the-law/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Law: 192-194',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-2-the-law/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Law: 195-196',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-2-the-law/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Law: 197-199',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-2-the-law/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Law: 200-202',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-2-the-law/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Law: 203-205',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-2-the-law/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Law: 206-208',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-2-the-law/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Law: 209-211',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-2-the-law/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Law: 212-215',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-2-the-law/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Law: 216-218',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-2-the-law/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Law: 219-221',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-2-the-law/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Law: 222-224',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-2-the-law/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Law: 225-227',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-2-the-law/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Law: 228-230',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-2-the-law/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Law: 231-232 ',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-2-the-law/',
            ],

            [
                'name' => 'Calvin\'s Catechism - The Prayer: 233-236',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-3-prayer/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Prayer: 237-239',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-3-prayer/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Prayer: 240-242',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-3-prayer/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Prayer: 243-245',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-3-prayer/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Prayer: 246-248',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-3-prayer/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Prayer: 249-251',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-3-prayer/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Prayer: 252-254',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-3-prayer/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Prayer: 255-257',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-3-prayer/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Prayer: 258-260',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-3-prayer/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Prayer: 261-263',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-3-prayer/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Prayer: 264-266',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-3-prayer/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Prayer: 267-269',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-3-prayer/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Prayer: 270-272',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-3-prayer/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Prayer: 273-275',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-3-prayer/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Prayer: 276-278',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-3-prayer/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Prayer: 279-281',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-3-prayer/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Prayer: 282-284',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-3-prayer/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Prayer: 285-287',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-3-prayer/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Prayer: 288-290',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-3-prayer/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Prayer: 291-293',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-3-prayer/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Prayer: 294-295',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-3-prayer/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Word and Sacraments - 296-299',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-4-the-word-and-sacraments/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Word and Sacraments - 300-302',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-4-the-word-and-sacraments/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Word and Sacraments - 303-305',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-4-the-word-and-sacraments/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Word and Sacraments - 306-308',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-4-the-word-and-sacraments/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Word and Sacraments - 309-311',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-4-the-word-and-sacraments/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Word and Sacraments - 312-314',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-4-the-word-and-sacraments/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Word and Sacraments - 315-317',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-4-the-word-and-sacraments/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Word and Sacraments - 318-321',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-4-the-word-and-sacraments/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Word and Sacraments - 322-324',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-4-the-word-and-sacraments/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Word and Sacraments - 325-327',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-4-the-word-and-sacraments/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Word and Sacraments - 328-330',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-4-the-word-and-sacraments/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Word and Sacraments - 331-333',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-4-the-word-and-sacraments/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Word and Sacraments - 334-336',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-4-the-word-and-sacraments/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Word and Sacraments - 337-339',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-4-the-word-and-sacraments/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Word and Sacraments - 340-342',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-4-the-word-and-sacraments/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Word and Sacraments - 343-345',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-4-the-word-and-sacraments/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Word and Sacraments - 346-348',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-4-the-word-and-sacraments/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Word and Sacraments - 349-351',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-4-the-word-and-sacraments/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Word and Sacraments - 352-354',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-4-the-word-and-sacraments/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Word and Sacraments - 355-357',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-4-the-word-and-sacraments/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Word and Sacraments - 358-360',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-4-the-word-and-sacraments/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Word and Sacraments - 361-363',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-4-the-word-and-sacraments/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Word and Sacraments - 364-366',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-4-the-word-and-sacraments/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Word and Sacraments - 367-369',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-4-the-word-and-sacraments/',
            ],
            [
                'name' => 'Calvin\'s Catechism - The Word and Sacraments - 370-373',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/calvins-catechism-by-dr-john-calvin/calvins-catechism-part-4-the-word-and-sacraments/',
            ],
            [
                'name' => 'Keach\'s Catechism: 1-3',
                'resource_url' => 'https://reformedstandards.com/second-london/keach.html?a=question-1',
            ],
            [
                'name' => 'Keach\'s Catechism: 4-6',
                'resource_url' => 'https://reformedstandards.com/second-london/keach.html?a=question-4',
            ],
            [
                'name' => 'Keach\'s Catechism: 7-9',
                'resource_url' => 'https://reformedstandards.com/second-london/keach.html?a=question-7',
            ],
            [
                'name' => 'Keach\'s Catechism: 10-12',
                'resource_url' => 'https://reformedstandards.com/second-london/keach.html?a=question-10',
            ],
            [
                'name' => 'Keach\'s Catechism: 13-16',
                'resource_url' => 'https://reformedstandards.com/second-london/keach.html?a=question-13',
            ],
            [
                'name' => 'Keach\'s Catechism: 17-19',
                'resource_url' => 'https://reformedstandards.com/second-london/keach.html?a=question-17',
            ],
            [
                'name' => 'Keach\'s Catechism: 20-22',
                'resource_url' => 'https://reformedstandards.com/second-london/keach.html?a=question-20',
            ],
            [
                'name' => 'Keach\'s Catechism: 23-25',
                'resource_url' => 'https://reformedstandards.com/second-london/keach.html?a=question-23',
            ],
            [
                'name' => 'Keach\'s Catechism: 26-28',
                'resource_url' => 'https://reformedstandards.com/second-london/keach.html?a=question-26',
            ],
            [
                'name' => 'Keach\'s Catechism: 29-31',
                'resource_url' => 'https://reformedstandards.com/second-london/keach.html?a=question-29',
            ],
            [
                'name' => 'Keach\'s Catechism: 32-34',
                'resource_url' => 'https://reformedstandards.com/second-london/keach.html?a=question-32',
            ],
            [
                'name' => 'Keach\'s Catechism: 35-37',
                'resource_url' => 'https://reformedstandards.com/second-london/keach.html?a=question-35',
            ],
            [
                'name' => 'Keach\'s Catechism: 38-40',
                'resource_url' => 'https://reformedstandards.com/second-london/keach.html?a=question-38',
            ],
            [
                'name' => 'Keach\'s Catechism: 41-43',
                'resource_url' => 'https://reformedstandards.com/second-london/keach.html?a=question-41',
            ],
            [
                'name' => 'Keach\'s Catechism: 43-46',
                'resource_url' => 'https://reformedstandards.com/second-london/keach.html?a=question-43',
            ],
            [
                'name' => 'Keach\'s Catechism: 47-49',
                'resource_url' => 'https://reformedstandards.com/second-london/keach.html?a=question-47',
            ],
            [
                'name' => 'Keach\'s Catechism: 50-52',
                'resource_url' => 'https://reformedstandards.com/second-london/keach.html?a=question-50',
            ],
            [
                'name' => 'Keach\'s Catechism: 53-55',
                'resource_url' => 'https://reformedstandards.com/second-london/keach.html?a=question-53',
            ],
            [
                'name' => 'Keach\'s Catechism: 56-58',
                'resource_url' => 'https://reformedstandards.com/second-london/keach.html?a=question-56',
            ],
            [
                'name' => 'Keach\'s Catechism: 59-61',
                'resource_url' => 'https://reformedstandards.com/second-london/keach.html?a=question-59',
            ],
            [
                'name' => 'Keach\'s Catechism: 62-64',
                'resource_url' => 'https://reformedstandards.com/second-london/keach.html?a=question-62',
            ],
            [
                'name' => 'Keach\'s Catechism: 65-67',
                'resource_url' => 'https://reformedstandards.com/second-london/keach.html?a=question-65',
            ],
            [
                'name' => 'Keach\'s Catechism: 68-70',
                'resource_url' => 'https://reformedstandards.com/second-london/keach.html?a=question-68',
            ],
            [
                'name' => 'Keach\'s Catechism: 71-73',
                'resource_url' => 'https://reformedstandards.com/second-london/keach.html?a=question-71',
            ],
            [
                'name' => 'Keach\'s Catechism: 74-76',
                'resource_url' => 'https://reformedstandards.com/second-london/keach.html?a=question-74',
            ],
            [
                'name' => 'Keach\'s Catechism: 77-79',
                'resource_url' => 'https://reformedstandards.com/second-london/keach.html?a=question-77',
            ],
            [
                'name' => 'Keach\'s Catechism: 80-82',
                'resource_url' => 'https://reformedstandards.com/second-london/keach.html?a=question-80',
            ],
            [
                'name' => 'Keach\'s Catechism: 83-85',
                'resource_url' => 'https://reformedstandards.com/second-london/keach.html?a=question-83',
            ],
            [
                'name' => 'Keach\'s Catechism: 86-88',
                'resource_url' => 'https://reformedstandards.com/second-london/keach.html?a=question-86',
            ],
            [
                'name' => 'Keach\'s Catechism: 89-91',
                'resource_url' => 'https://reformedstandards.com/second-london/keach.html?a=question-89',
            ],
            [
                'name' => 'Keach\'s Catechism: 92-94',
                'resource_url' => 'https://reformedstandards.com/second-london/keach.html?a=question-92',
            ],
            [
                'name' => 'Keach\'s Catechism: 95-97',
                'resource_url' => 'https://reformedstandards.com/second-london/keach.html?a=question-95',
            ],
            [
                'name' => 'Keach\'s Catechism: 98-100',
                'resource_url' => 'https://reformedstandards.com/second-london/keach.html?a=question-98',
            ],
            [
                'name' => 'Keach\'s Catechism: 101-103',
                'resource_url' => 'https://reformedstandards.com/second-london/keach.html?a=question-101',
            ],
            [
                'name' => 'Keach\'s Catechism: 104-107',
                'resource_url' => 'https://reformedstandards.com/second-london/keach.html?a=question-104',
            ],
            [
                'name' => 'Keach\'s Catechism: 108-110',
                'resource_url' => 'https://reformedstandards.com/second-london/keach.html?a=question-108',
            ],
            [
                'name' => 'Keach\'s Catechism: 111-113',
                'resource_url' => 'https://reformedstandards.com/second-london/keach.html?a=question-111',
            ],
            [
                'name' => 'Keach\'s Catechism: 114-116',
                'resource_url' => 'https://reformedstandards.com/second-london/keach.html?a=question-114',
            ],
            [
                'name' => 'Keach\'s Catechism: 117-118',
                'resource_url' => 'https://reformedstandards.com/second-london/keach.html?a=question-117',
            ],
            [
                'name' => 'Young Communicant\'s Catechism: 1',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/the-young-communicants-catechism-by-john-willison/',
            ],
            [
                'name' => 'Young Communicant\'s Catechism: 2',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/the-young-communicants-catechism-by-john-willison/',
            ],
            [
                'name' => 'Young Communicant\'s Catechism: 3',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/the-young-communicants-catechism-by-john-willison/',
            ],
            [
                'name' => 'Young Communicant\'s Catechism: 4',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/the-young-communicants-catechism-by-john-willison/',
            ],
            [
                'name' => 'Young Communicant\'s Catechism: 5',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/the-young-communicants-catechism-by-john-willison/',
            ],
            [
                'name' => 'Young Communicant\'s Catechism: 6',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/the-young-communicants-catechism-by-john-willison/',
            ],
            [
                'name' => 'Young Communicant\'s Catechism: 7',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/the-young-communicants-catechism-by-john-willison/',
            ],
            [
                'name' => 'Young Communicant\'s Catechism: 8',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/the-young-communicants-catechism-by-john-willison/',
            ],
            [
                'name' => 'Young Communicant\'s Catechism: 9',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/the-young-communicants-catechism-by-john-willison/',
            ],
            [
                'name' => 'Young Communicant\'s Catechism: 10',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/the-young-communicants-catechism-by-john-willison/',
            ],
            [
                'name' => 'Young Communicant\'s Catechism: 11',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/the-young-communicants-catechism-by-john-willison/',
            ],
            [
                'name' => 'Young Communicant\'s Catechism: 12',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/the-young-communicants-catechism-by-john-willison/',
            ],
            [
                'name' => 'Young Communicant\'s Catechism: 13',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/the-young-communicants-catechism-by-john-willison/',
            ],
            [
                'name' => 'Young Communicant\'s Catechism: 14',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/the-young-communicants-catechism-by-john-willison/',
            ],
            [
                'name' => 'Young Communicant\'s Catechism: 15',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/the-young-communicants-catechism-by-john-willison/',
            ],
            [
                'name' => 'Young Communicant\'s Catechism: 16',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/the-young-communicants-catechism-by-john-willison/',
            ],
            [
                'name' => 'Young Communicant\'s Catechism: 17',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/the-young-communicants-catechism-by-john-willison/',
            ],
            [
                'name' => 'Young Communicant\'s Catechism: 18',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/the-young-communicants-catechism-by-john-willison/',
            ],
            [
                'name' => 'Young Communicant\'s Catechism: 19',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/the-young-communicants-catechism-by-john-willison/',
            ],
            [
                'name' => 'Young Communicant\'s Catechism: 20',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/the-young-communicants-catechism-by-john-willison/',
            ],
            [
                'name' => 'Young Communicant\'s Catechism: 21',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/the-young-communicants-catechism-by-john-willison/',
            ],
            [
                'name' => 'Young Communicant\'s Catechism: 22',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/the-young-communicants-catechism-by-john-willison/',
            ],
            [
                'name' => 'Young Communicant\'s Catechism: 23',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/the-young-communicants-catechism-by-john-willison/',
            ],
            [
                'name' => 'Young Communicant\'s Catechism: 24',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/the-young-communicants-catechism-by-john-willison/',
            ],
            [
                'name' => 'Young Communicant\'s Catechism: 25',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/the-young-communicants-catechism-by-john-willison/',
            ],
            [
                'name' => 'Young Communicant\'s Catechism: 26',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/the-young-communicants-catechism-by-john-willison/',
            ],
            [
                'name' => 'Young Communicant\'s Catechism: 27',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/the-young-communicants-catechism-by-john-willison/',
            ],
            [
                'name' => 'Young Communicant\'s Catechism: 28',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/the-young-communicants-catechism-by-john-willison/',
            ],
            [
                'name' => 'Young Communicant\'s Catechism: 29',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/the-young-communicants-catechism-by-john-willison/',
            ],
            [
                'name' => 'Young Communicant\'s Catechism: 30',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/the-young-communicants-catechism-by-john-willison/',
            ],
            [
                'name' => 'Young Communicant\'s Catechism: 31',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/the-young-communicants-catechism-by-john-willison/',
            ],
            [
                'name' => 'Young Communicant\'s Catechism: 32',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/the-young-communicants-catechism-by-john-willison/',
            ],
            [
                'name' => 'Young Communicant\'s Catechism: 33',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/the-young-communicants-catechism-by-john-willison/',
            ],
            [
                'name' => 'Young Communicant\'s Catechism: 34',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/the-young-communicants-catechism-by-john-willison/',
            ],
            [
                'name' => 'Young Communicant\'s Catechism: 35',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/the-young-communicants-catechism-by-john-willison/',
            ],
            [
                'name' => 'Young Communicant\'s Catechism: 36',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/the-young-communicants-catechism-by-john-willison/',
            ],
            [
                'name' => 'Young Communicant\'s Catechism: 37',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/the-young-communicants-catechism-by-john-willison/',
            ],
            [
                'name' => 'Young Communicant\'s Catechism: 38',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/the-young-communicants-catechism-by-john-willison/',
            ],
            [
                'name' => 'Young Communicant\'s Catechism: 39',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/the-young-communicants-catechism-by-john-willison/',
            ],
            [
                'name' => 'Young Communicant\'s Catechism: 40',
                'resource_url' => 'https://www.apuritansmind.com/creeds-and-confessions/the-young-communicants-catechism-by-john-willison/',
            ],
            // Lord's Day will be placed on Sundays 
            [
                'name' => "Heidelberg Catechism: Lord's Day 1",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 2",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 3",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 4",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 5",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 6",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 7",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 8",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 9",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 10",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 11",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 12",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 13",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 14",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 15",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 16",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 17",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 18",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 19",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 20",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 21",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 22",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 23",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 24",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 25",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 26",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 27",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 28",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 29",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 30",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 31",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 32",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 33",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 34",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 35",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 36",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 37",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 38",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 39",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 40",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 41",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 42",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 43",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 44",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 45",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 46",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 47",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 48",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 49",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 50",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 51",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],
            [
                'name' => "Heidelberg Catechism: Lord's Day 52",
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/heidelberg-catechism',
            ],

        ];

        DB::table('catechisms')->insert($dataset);
    }
}
