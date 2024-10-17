<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConfessionSeeder extends Seeder
{
    private $articles39Url = 'https://www.anglicancommunion.org/media/109014/Thirty-Nine-Articles-of-Religion.pdf';
    private $wcfUrl = 'https://thewestminsterstandard.org/the-westminster-confession/';
    private $dataset = [
        [
            'name' => 'Westminster Confession of Faith: Chapter 1',
            'resource_url' => $this->wcfUrl . '#1'
        ],
        [
            'name' => 'Westminster Confession of Faith: Chapter 2',
            'resource_url' => $this->wcfUrl . '#Chapter II'
        ],
        [
            'name' => 'Westminster Confession of Faith: Chapter 3',
            'resource_url' => $this->wcfUrl . '#Chapter III'
        ],
        [
            'name' => 'Westminster Confession of Faith: Chapter 4',
            'resource_url' => $this->wcfUrl . '#Chapter IV'
        ],
        [
            'name' => 'Westminster Confession of Faith: Chapter 5',
            'resource_url' => $this->wcfUrl . '#Chapter V'
        ],
        [
            'name' => 'Westminster Confession of Faith: Chapter 6',
            'resource_url' => $this->wcfUrl . '#Chapter VI'
        ],
        [
            'name' => '39 Articles of Religion: Article 1',
            'resource_url' => $this->articles39Url,
        ],
        [
            'name' => 'Westminster Confession of Faith: Chapter 7',
            'resource_url' => $this->wcfUrl . '#Chapter VII'
        ],
        [
            'name' => 'Westminster Confession of Faith: Chapter 8',
            'resource_url' => $this->wcfUrl . '#Chapter VIII'
        ],
        [
            'name' => 'Westminster Confession of Faith: Chapter 9',
            'resource_url' => $this->wcfUrl . '#Chapter IX'
        ],
        [
            'name' => 'Westminster Confession of Faith: Chapter 10',
            'resource_url' => $this->wcfUrl . '#Chapter X'
        ],
        [
            'name' => 'Westminster Confession of Faith: Chapter 11',
            'resource_url' => $this->wcfUrl . '#Chapter XI'
        ],
        [
            'name' => 'Westminster Confession of Faith: Chapter 12',
            'resource_url' => $this->wcfUrl . '#Chapter XII'
        ],
        [
            'name' => '39 Articles of Religion: Article 2',
            'resource_url' => $this->articles39Url,
        ],
        [
            'name' => 'Westminster Confession of Faith: Chapter 13',
            'resource_url' => $this->wcfUrl . '#Chapter XIII'
        ],
        [
            'name' => 'Westminster Confession of Faith: Chapter 14',
            'resource_url' => $this->wcfUrl . '#Chapter XIV'
        ],
        [
            'name' => 'Westminster Confession of Faith: Chapter 15',
            'resource_url' => $this->wcfUrl . '#Chapter XV'
        ],
        [
            'name' => 'Westminster Confession of Faith: Chapter 16',
            'resource_url' => $this->wcfUrl . '#Chapter XVI'
        ],
        [
            'name' => 'Westminster Confession of Faith: Chapter 17',
            'resource_url' => $this->wcfUrl . '#Chapter XVII'
        ],
        [
            'name' => 'Westminster Confession of Faith: Chapter 18',
            'resource_url' => $this->wcfUrl . '#Chapter XVIII'
        ],
        [
            'name' => '39 Articles of Religion: Article 3',
            'resource_url' => $this->articles39Url,
        ],
        [
            'name' => 'Westminster Confession of Faith: Chapter 19',
            'resource_url' => $this->wcfUrl . '#Chapter XIX'
        ],
        [
            'name' => 'Westminster Confession of Faith: Chapter 20',
            'resource_url' => $this->wcfUrl . '#Chapter XX'
        ],
        [
            'name' => 'Westminster Confession of Faith: Chapter 21',
            'resource_url' => $this->wcfUrl . '#Chapter XXI'
        ],
        [
            'name' => 'Westminster Confession of Faith: Chapter 22',
            'resource_url' => $this->wcfUrl . '#Chapter XXII'
        ],
        [
            'name' => 'Westminster Confession of Faith: Chapter 23',
            'resource_url' => $this->wcfUrl . '#Chapter XXIII'
        ],
        [
            'name' => 'Westminster Confession of Faith: Chapter 24',
            'resource_url' => $this->wcfUrl . '#Chapter XXIV'
        ],
        [
            'name' => '39 Articles of Religion: Article 4',
            'resource_url' => $this->articles39Url,
        ],
        [
            'name' => 'Westminster Confession of Faith: Chapter 25',
            'resource_url' => $this->wcfUrl . '#Chapter XXV'
        ],
        [
            'name' => 'Westminster Confession of Faith: Chapter 26',
            'resource_url' => $this->wcfUrl . '#Chapter XXVI'
        ],
        [
            'name' => 'Westminster Confession of Faith: Chapter 27',
            'resource_url' => $this->wcfUrl . '#Chapter XXVII'
        ],
        [
            'name' => 'Westminster Confession of Faith: Chapter 28',
            'resource_url' => $this->wcfUrl . '#Chapter XXVIII'
        ],
        [
            'name' => 'Westminster Confession of Faith: Chapter 29',
            'resource_url' => $this->wcfUrl . '#Chapter XXIX'
        ],
        [
            'name' => 'Westminster Confession of Faith: Chapter 30',
            'resource_url' => $this->wcfUrl . '#Chapter XXX'
        ],
        [
            'name' => '39 Articles of Religion: Article 5',
            'resource_url' => $this->articles39Url,
        ],
        [
            'name' => 'Westminster Confession of Faith: Chapter 31',
            'resource_url' => $this->wcfUrl . '#Chapter XXXI'
        ],
        [
            'name' => 'Westminster Confession of Faith: Chapter 32',
            'resource_url' => $this->wcfUrl . '#Chapter XXXII'
        ],
        [
            'name' => 'Westminster Confession of Faith: Chapter 33',
            'resource_url' => $this->wcfUrl . '#Chapter XXXIII'
        ],
        [
            'name' => 'Directory for the Publick Worship of God: Preface - Of Prayer after Sermon.',
            'resource_url' => 'https://thewestminsterstandard.org/directory-for-the-publick-worship-of-god/#1',
        ],
        [
            'name' => 'Directory for the Publick Worship of God: Of the Sacrament of Baptism - Of the Burial of the Dead',
            'resource_url' => 'https://thewestminsterstandard.org/directory-for-the-publick-worship-of-god/#7'
        ],
        [
            'name' => 'Directory for the Publick Worship of God: Of Publick Solemn Fasting - An Appendix touching Days and places of Publick Worship',
            'resource_url' => 'https://thewestminsterstandard.org/directory-for-the-publick-worship-of-god/#13'
        ],
        [
            'name' => '39 Articles of Religion: Article 6',
            'resource_url' => $this->articles39Url,
        ],
        [
            'name' => 'Directory for Family Worship: Preface ',
            'resource_url' => 'https://thewestminsterstandard.org/directory-for-family-worship/',
        ],
        [
            'name' => 'Directory for Family Worship: 1 - 3 ',
            'resource_url' => 'https://thewestminsterstandard.org/directory-for-family-worship/',
        ],
        [
            'name' => 'Directory for Family Worship: 4 - 6 ',
            'resource_url' => 'https://thewestminsterstandard.org/directory-for-family-worship/',
        ],
        [
            'name' => 'Directory for Family Worship: 7 - 10',
            'resource_url' => 'https://thewestminsterstandard.org/directory-for-family-worship/',
        ],
        [
            'name' => 'Directory for Family Worship: 10 - 14',
            'resource_url' => 'https://thewestminsterstandard.org/directory-for-family-worship/',
        ],
        [
            'name' => 'Martin Luther\'s 95 Theses',
            'resource_url' => 'https://www.uncommon-travel-germany.com/martin-luther-95-theses.html',
        ],
        [
            'name' => '39 Articles of Religion: Article 7',
            'resource_url' => $this->articles39Url,
        ],
        [
            'name' => 'The Sum of Saving Knowledge: The Sum of Saving Knowledge',
            'resource_url' => 'https://thewestminsterstandard.org/the-sum-of-saving-knowledge/#1'
        ],
        [
            'name' => 'The Sum of Saving Knowledge: The Practical Use of Saving Knowledge',
            'resource_url' => 'https://thewestminsterstandard.org/the-sum-of-saving-knowledge/#2',
        ],
        [
            'name' => 'The Sum of Saving Knowledge: Warrants and Motives to Believe',
            'resource_url' => 'https://thewestminsterstandard.org/the-sum-of-saving-knowledge/#3',
        ],
        [
            'name' => 'The Sum of Saving Knowledge: Evidences of the Truth',
            'resource_url' => 'https://thewestminsterstandard.org/the-sum-of-saving-knowledge/#4',
        ],
        [
            'name' => 'The Solemn League and Covenant',
            'resource_url' => 'https://thewestminsterstandard.org/the-solemn-league-and-covenant/',
        ],
        [
            'name' => 'Chalcedonian Definition ',
            'resource_url' => 'https://thewestminsterstandard.org/the-chalcedonian-creed/',
        ],
        [
            'name' => '39 Articles of Religion: Article 8',
            'resource_url' => $this->articles39Url,
        ],
        [
            'name' => 'Forms of Presbyterial Church-Government: Preface - Of the Church',
            'resource_url' => 'https://thewestminsterstandard.org/form-of-presbyterial-church-government/#1'
        ],
        [
            'name' => 'Forms of Presbyterial Church-Government: Of the Officers of the Church - Deacons',
            'resource_url' => 'https://thewestminsterstandard.org/form-of-presbyterial-church-government/#3'
        ],
        [
            'name' => 'Forms of Presbyterial Church-Government: Of Particular Congregations - Of the Ordinances in a Particular Congregation ',
            'resource_url' => 'https://thewestminsterstandard.org/form-of-presbyterial-church-government/#7'
        ],
        [
            'name' => 'Forms of Presbyterial Church-Government: Of Church-government, and the several sorts of Assemblies for the same - Of Congregational Assemblies,
that is, the Meeting of the ruling Officers of a particular
congregation, for the government thereof',
            'resource_url' => 'https://thewestminsterstandard.org/form-of-presbyterial-church-government/#10'
        ],
        [
            'name' => 'Forms of Presbyterial Church-Government: Of Classical Assemblies - Of Ordination of Ministers',
            'resource_url' => 'https://thewestminsterstandard.org/form-of-presbyterial-church-government/#13'
        ],
        [
            'name' => 'Forms of Presbyterial Church-Government: Touching the Doctrine of Ordination - The Directory
for the Ordination of Ministers ',
            'resource_url' => 'https://thewestminsterstandard.org/form-of-presbyterial-church-government/#16'
        ]


    ];


    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
    }
}
