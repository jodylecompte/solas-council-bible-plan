<?php

namespace Database\Seeders;

use App\Models\Confession;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConfessionSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('confessions')->truncate();


        $articles39Url = 'https://www.the39articles.com/#article-';
        $wcfUrl = 'https://thewestminsterstandard.org/the-westminster-confession/';
        $dataset = [
            [
                'label' => 'Westminster Confession of Faith: Chapter 1',
                'resource_url' => $wcfUrl . '#1'
            ],
            [
                'label' => 'Westminster Confession of Faith: Chapter 2',
                'resource_url' => $wcfUrl . '#Chapter II'
            ],
            [
                'label' => 'Westminster Confession of Faith: Chapter 3',
                'resource_url' => $wcfUrl . '#Chapter III'
            ],
            [
                'label' => 'Westminster Confession of Faith: Chapter 4',
                'resource_url' => $wcfUrl . '#Chapter IV'
            ],
            [
                'label' => 'Westminster Confession of Faith: Chapter 5',
                'resource_url' => $wcfUrl . '#Chapter V'
            ],
            [
                'label' => 'Westminster Confession of Faith: Chapter 6',
                'resource_url' => $wcfUrl . '#Chapter VI'
            ],
            [
                'label' => '39 Articles of Religion: Article 1',
                'resource_url' => $articles39Url + '1',
            ],
            [
                'label' => 'Westminster Confession of Faith: Chapter 7',
                'resource_url' => $wcfUrl . '#Chapter VII'
            ],
            [
                'label' => 'Westminster Confession of Faith: Chapter 8',
                'resource_url' => $wcfUrl . '#Chapter VIII'
            ],
            [
                'label' => 'Westminster Confession of Faith: Chapter 9',
                'resource_url' => $wcfUrl . '#Chapter IX'
            ],
            [
                'label' => 'Westminster Confession of Faith: Chapter 10',
                'resource_url' => $wcfUrl . '#Chapter X'
            ],
            [
                'label' => 'Westminster Confession of Faith: Chapter 11',
                'resource_url' => $wcfUrl . '#Chapter XI'
            ],
            [
                'label' => 'Westminster Confession of Faith: Chapter 12',
                'resource_url' => $wcfUrl . '#Chapter XII'
            ],
            [
                'label' => '39 Articles of Religion: Article 2',
                'resource_url' => $articles39Url + '2',
            ],
            [
                'label' => 'Westminster Confession of Faith: Chapter 13',
                'resource_url' => $wcfUrl . '#Chapter XIII'
            ],
            [
                'label' => 'Westminster Confession of Faith: Chapter 14',
                'resource_url' => $wcfUrl . '#Chapter XIV'
            ],
            [
                'label' => 'Westminster Confession of Faith: Chapter 15',
                'resource_url' => $wcfUrl . '#Chapter XV'
            ],
            [
                'label' => 'Westminster Confession of Faith: Chapter 16',
                'resource_url' => $wcfUrl . '#Chapter XVI'
            ],
            [
                'label' => 'Westminster Confession of Faith: Chapter 17',
                'resource_url' => $wcfUrl . '#Chapter XVII'
            ],
            [
                'label' => 'Westminster Confession of Faith: Chapter 18',
                'resource_url' => $wcfUrl . '#Chapter XVIII'
            ],
            [
                'label' => '39 Articles of Religion: Article 3',
                'resource_url' => $articles39Url + '3',
            ],
            [
                'label' => 'Westminster Confession of Faith: Chapter 19',
                'resource_url' => $wcfUrl . '#Chapter XIX'
            ],
            [
                'label' => 'Westminster Confession of Faith: Chapter 20',
                'resource_url' => $wcfUrl . '#Chapter XX'
            ],
            [
                'label' => 'Westminster Confession of Faith: Chapter 21',
                'resource_url' => $wcfUrl . '#Chapter XXI'
            ],
            [
                'label' => 'Westminster Confession of Faith: Chapter 22',
                'resource_url' => $wcfUrl . '#Chapter XXII'
            ],
            [
                'label' => 'Westminster Confession of Faith: Chapter 23',
                'resource_url' => $wcfUrl . '#Chapter XXIII'
            ],
            [
                'label' => 'Westminster Confession of Faith: Chapter 24',
                'resource_url' => $wcfUrl . '#Chapter XXIV'
            ],
            [
                'label' => '39 Articles of Religion: Article 4',
                'resource_url' => $articles39Url + '4',
            ],
            [
                'label' => 'Westminster Confession of Faith: Chapter 25',
                'resource_url' => $wcfUrl . '#Chapter XXV'
            ],
            [
                'label' => 'Westminster Confession of Faith: Chapter 26',
                'resource_url' => $wcfUrl . '#Chapter XXVI'
            ],
            [
                'label' => 'Westminster Confession of Faith: Chapter 27',
                'resource_url' => $wcfUrl . '#Chapter XXVII'
            ],
            [
                'label' => 'Westminster Confession of Faith: Chapter 28',
                'resource_url' => $wcfUrl . '#Chapter XXVIII'
            ],
            [
                'label' => 'Westminster Confession of Faith: Chapter 29',
                'resource_url' => $wcfUrl . '#Chapter XXIX'
            ],
            [
                'label' => 'Westminster Confession of Faith: Chapter 30',
                'resource_url' => $wcfUrl . '#Chapter XXX'
            ],
            [
                'label' => '39 Articles of Religion: Article 5',
                'resource_url' => $articles39Url + '5',
            ],
            [
                'label' => 'Westminster Confession of Faith: Chapter 31',
                'resource_url' => $wcfUrl . '#Chapter XXXI'
            ],
            [
                'label' => 'Westminster Confession of Faith: Chapter 32',
                'resource_url' => $wcfUrl . '#Chapter XXXII'
            ],
            [
                'label' => 'Westminster Confession of Faith: Chapter 33',
                'resource_url' => $wcfUrl . '#Chapter XXXIII'
            ],
            [
                'label' => 'Directory for the Publick Worship of God: Preface - Of Prayer after Sermon.',
                'resource_url' => 'https://thewestminsterstandard.org/directory-for-the-publick-worship-of-god/#1',
            ],
            [
                'label' => 'Directory for the Publick Worship of God: Of the Sacrament of Baptism - Of the Burial of the Dead',
                'resource_url' => 'https://thewestminsterstandard.org/directory-for-the-publick-worship-of-god/#7'
            ],
            [
                'label' => 'Directory for the Publick Worship of God: Of Publick Solemn Fasting - An Appendix touching Days and places of Publick Worship',
                'resource_url' => 'https://thewestminsterstandard.org/directory-for-the-publick-worship-of-god/#13'
            ],
            [
                'label' => '39 Articles of Religion: Article 6',
                'resource_url' => $articles39Url + '6',
            ],
            [
                'label' => 'Directory for Family Worship: Preface ',
                'resource_url' => 'https://thewestminsterstandard.org/directory-for-family-worship/',
            ],
            [
                'label' => 'Directory for Family Worship: 1 - 3 ',
                'resource_url' => 'https://thewestminsterstandard.org/directory-for-family-worship/',
            ],
            [
                'label' => 'Directory for Family Worship: 4 - 6 ',
                'resource_url' => 'https://thewestminsterstandard.org/directory-for-family-worship/',
            ],
            [
                'label' => 'Directory for Family Worship: 7 - 10',
                'resource_url' => 'https://thewestminsterstandard.org/directory-for-family-worship/',
            ],
            [
                'label' => 'Directory for Family Worship: 10 - 14',
                'resource_url' => 'https://thewestminsterstandard.org/directory-for-family-worship/',
            ],
            [
                'label' => 'Martin Luther\'s 95 Theses',
                'resource_url' => 'https://www.uncommon-travel-germany.com/martin-luther-95-theses.html',
            ],
            [
                'label' => '39 Articles of Religion: Article 7',
                'resource_url' => $articles39Url + '7',
            ],
            [
                'label' => 'The Sum of Saving Knowledge: The Sum of Saving Knowledge',
                'resource_url' => 'https://thewestminsterstandard.org/the-sum-of-saving-knowledge/#1'
            ],
            [
                'label' => 'The Sum of Saving Knowledge: The Practical Use of Saving Knowledge',
                'resource_url' => 'https://thewestminsterstandard.org/the-sum-of-saving-knowledge/#2',
            ],
            [
                'label' => 'The Sum of Saving Knowledge: Warrants and Motives to Believe',
                'resource_url' => 'https://thewestminsterstandard.org/the-sum-of-saving-knowledge/#3',
            ],
            [
                'label' => 'The Sum of Saving Knowledge: Evidences of the Truth',
                'resource_url' => 'https://thewestminsterstandard.org/the-sum-of-saving-knowledge/#4',
            ],
            [
                'label' => 'The Solemn League and Covenant',
                'resource_url' => 'https://thewestminsterstandard.org/the-solemn-league-and-covenant/',
            ],
            [
                'label' => 'Chalcedonian Definition ',
                'resource_url' => 'https://thewestminsterstandard.org/the-chalcedonian-creed/',
            ],
            [
                'label' => '39 Articles of Religion: Article 8',
                'resource_url' => $articles39Url + '8',
            ],
            [
                'label' => 'Forms of Presbyterial Church-Government: Preface - Of the Church',
                'resource_url' => 'https://thewestminsterstandard.org/form-of-presbyterial-church-government/#1'
            ],
            [
                'label' => 'Forms of Presbyterial Church-Government: Of the Officers of the Church - Deacons',
                'resource_url' => 'https://thewestminsterstandard.org/form-of-presbyterial-church-government/#3'
            ],
            [
                'label' => 'Forms of Presbyterial Church-Government: Of Particular Congregations - Of the Ordinances in a Particular Congregation ',
                'resource_url' => 'https://thewestminsterstandard.org/form-of-presbyterial-church-government/#7'
            ],
            [
                'label' => 'Forms of Presbyterial Church-Government: Of Church-government, and the several sorts of Assemblies for the same - Of Congregational Assemblies,
that is, the Meeting of the ruling Officers of a particular
congregation, for the government thereof',
                'resource_url' => 'https://thewestminsterstandard.org/form-of-presbyterial-church-government/#10'
            ],
            [
                'label' => 'Forms of Presbyterial Church-Government: Of Classical Assemblies - Of Ordination of Ministers',
                'resource_url' => 'https://thewestminsterstandard.org/form-of-presbyterial-church-government/#13'
            ],
            [
                'label' => 'Forms of Presbyterial Church-Government: Touching the Doctrine of Ordination - The Directory
for the Ordination of Ministers ',
                'resource_url' => 'https://thewestminsterstandard.org/form-of-presbyterial-church-government/#16'
            ],
            [
                'label' => '39 Articles of Religion: Article 9',
                'resource_url' => $articles39Url + '9',
            ],
            [
                'label' => 'Baptist Confession of Faith: Chapter 1',
                'resource_url' => 'https://1689.com/'
            ],
            [
                'label' => 'Baptist Confession of Faith: Chapter 2',
                'resource_url' => 'https://1689.com/'
            ],
            [
                'label' => 'Baptist Confession of Faith: Chapter 3',
                'resource_url' => 'https://1689.com/'
            ],
            [
                'label' => 'Baptist Confession of Faith: Chapter 4',
                'resource_url' => 'https://1689.com/'
            ],
            [
                'label' => 'Baptist Confession of Faith: Chapter 5',
                'resource_url' => 'https://1689.com/'
            ],
            [
                'label' => 'Baptist Confession of Faith: Chapter 6',
                'resource_url' => 'https://1689.com/'
            ],
            [
                'label' => '39 Articles of Religion: Article 10',
                'resource_url' => $articles39Url + '10',
            ],
            [
                'label' => 'Baptist Confession of Faith: Chapter 7',
                'resource_url' => 'https://1689.com/'
            ],
            [
                'label' => 'Baptist Confession of Faith: Chapter 8',
                'resource_url' => 'https://1689.com/'
            ],
            [
                'label' => 'Baptist Confession of Faith: Chapter 9',
                'resource_url' => 'https://1689.com/'
            ],
            [
                'label' => 'Baptist Confession of Faith: Chapter 10',
                'resource_url' => 'https://1689.com/'
            ],
            [
                'label' => 'Baptist Confession of Faith: Chapter 11',
                'resource_url' => 'https://1689.com/'
            ],
            [
                'label' => 'Baptist Confession of Faith: Chapter 12',
                'resource_url' => 'https://1689.com/'
            ],
            [
                'label' => '39 Articles of Religion: Article 11',
                'resource_url' => $articles39Url + '11',
            ],
            [
                'label' => 'Baptist Confession of Faith: Chapter 13',
                'resource_url' => 'https://1689.com/'
            ],
            [
                'label' => 'Baptist Confession of Faith: Chapter 14',
                'resource_url' => 'https://1689.com/'
            ],
            [
                'label' => 'Baptist Confession of Faith: Chapter 15',
                'resource_url' => 'https://1689.com/'
            ],
            [
                'label' => 'Baptist Confession of Faith: Chapter 16',
                'resource_url' => 'https://1689.com/'
            ],
            [
                'label' => 'Baptist Confession of Faith: Chapter 17',
                'resource_url' => 'https://1689.com/'
            ],
            [
                'label' => 'Baptist Confession of Faith: Chapter 18',
                'resource_url' => 'https://1689.com/'
            ],
            [
                'label' => '39 Articles of Religion: Article 12',
                'resource_url' => $articles39Url + '12',
            ],
            [
                'label' => 'Baptist Confession of Faith: Chapter 19',
                'resource_url' => 'https://1689.com/'
            ],
            [
                'label' => 'Baptist Confession of Faith: Chapter 20',
                'resource_url' => 'https://1689.com/'
            ],
            [
                'label' => 'Baptist Confession of Faith: Chapter 21',
                'resource_url' => 'https://1689.com/'
            ],
            [
                'label' => 'Baptist Confession of Faith: Chapter 22',
                'resource_url' => 'https://1689.com/'
            ],
            [
                'label' => 'Baptist Confession of Faith: Chapter 23',
                'resource_url' => 'https://1689.com/'
            ],
            [
                'label' => 'Baptist Confession of Faith: Chapter 24',
                'resource_url' => 'https://1689.com/'
            ],
            [
                'label' => '39 Articles of Religion: Article 13',
                'resource_url' => $articles39Url + '13',
            ],
            [
                'label' => 'Baptist Confession of Faith: Chapter 25',
                'resource_url' => 'https://1689.com/'
            ],
            [
                'label' => 'Baptist Confession of Faith: Chapter 26',
                'resource_url' => 'https://1689.com/'
            ],
            [
                'label' => 'Baptist Confession of Faith: Chapter 27',
                'resource_url' => 'https://1689.com/'
            ],
            [
                'label' => 'Baptist Confession of Faith: Chapter 28',
                'resource_url' => 'https://1689.com/'
            ],
            [
                'label' => 'Baptist Confession of Faith: Chapter 29',
                'resource_url' => 'https://1689.com/'
            ],
            [
                'label' => 'Baptist Confession of Faith: Chapter 30',
                'resource_url' => 'https://1689.com/'
            ],
            [
                'label' => '39 Articles of Religion: Article 14',
                'resource_url' => $articles39Url + '14',
            ],
            [
                'label' => 'Baptist Confession of Faith: Chapter 31',
                'resource_url' => 'https://1689.com/'
            ],
            [
                'label' => 'Baptist Confession of Faith: Chapter 32',
                'resource_url' => 'https://1689.com/'
            ],
            [
                'label' => 'Belgic Confession of Faith: Article 1',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/belgic-confession#toc-article-1-the-only-god'
            ],
            [
                'label' => 'Belgic Confession of Faith: Article 2',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/belgic-confession#toc-article-2-the-means-by-which-we-know-god'
            ],
            [
                'label' => 'Belgic Confession of Faith: Article 3',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/belgic-confession#toc-article-3-the-written-word-of-god'
            ],
            [
                'label' => 'Belgic Confession of Faith: Article 4',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/belgic-confession#toc-article-4-the-canonical-books'
            ],
            [
                'label' => '39 Articles of Religion: Article 15',
                'resource_url' => $articles39Url + '15',
            ],
            [
                'label' => 'Belgic Confession of Faith: Article 5',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/belgic-confession#toc-article-5-the-authority-of-scripture'
            ],
            [
                'label' => 'Belgic Confession of Faith: Article 6',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/belgic-confession#toc-article-6-the-difference-between-canonical-and-apocryphal-books'
            ],
            [
                'label' => 'Belgic Confession of Faith: Article 7',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/belgic-confession#toc-article-7-the-sufficiency-of-scripture'
            ],
            [
                'label' => 'Belgic Confession of Faith: Article 8',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/belgic-confession#toc-article-8-the-trinity'
            ],
            [
                'label' => 'Belgic Confession of Faith: Article 9',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/belgic-confession#toc-article-9-the-scriptural-witness-on-the-trinity'
            ],
            [
                'label' => 'Belgic Confession of Faith: Article 10',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/belgic-confession#toc-article-10-the-deity-of-christ'
            ],
            [
                'label' => '39 Articles of Religion: Article 16',
                'resource_url' => $articles39Url + '16',
            ],
            [
                'label' => 'Belgic Confession of Faith: Article 11',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/belgic-confession#toc-article-11-the-deity-of-the-holy-spirit'
            ],
            [
                'label' => 'Belgic Confession of Faith: Article 12',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/belgic-confession#toc-article-12-the-creation-of-all-things'
            ],
            [
                'label' => 'Belgic Confession of Faith: Article 13',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/belgic-confession#toc-article-13-the-doctrine-of-god-s-providence'
            ],
            [
                'label' => 'Belgic Confession of Faith: Article 14',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/belgic-confession#toc-article-14-the-creation-and-fall-of-humanity'
            ],
            [
                'label' => 'Belgic Confession of Faith: Article 15',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/belgic-confession#toc-article-15-the-doctrine-of-original-sin'
            ],
            [
                'label' => 'Belgic Confession of Faith: Article 16',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/belgic-confession#toc-article-16-the-doctrine-of-election'
            ],
            [
                'label' => '39 Articles of Religion: Article 17',
                'resource_url' => $articles39Url + '17',
            ],
            [
                'label' => 'Belgic Confession of Faith: Article 17 ',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/belgic-confession#toc-article-17-the-recovery-of-fallen-humanity'
            ],
            [
                'label' => 'Belgic Confession of Faith: Article 18',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/belgic-confession#toc-article-18-the-incarnation'
            ],
            [
                'label' => 'Belgic Confession of Faith: Article 19',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/belgic-confession#toc-article-19-the-two-natures-of-christ'
            ],
            [
                'label' => 'Belgic Confession of Faith: Article 20',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/belgic-confession#toc-article-20-the-justice-and-mercy-of-god-in-christ'
            ],
            [
                'label' => 'Belgic Confession of Faith: Article 21',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/belgic-confession#toc-article-21-the-atonement'
            ],
            [
                'label' => 'Belgic Confession of Faith: Article 22',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/belgic-confession#toc-article-22-the-righteousness-of-faith'
            ],
            [
                'label' => '39 Articles of Religion: Article 18',
                'resource_url' => $articles39Url + '18',
            ],
            [
                'label' => 'Belgic Confession of Faith: Article 23',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/belgic-confession#toc-article-23-the-justification-of-sinners'
            ],
            [
                'label' => 'Belgic Confession of Faith: Article 24',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/belgic-confession#toc-article-24-the-sanctification-of-sinners'
            ],
            [
                'label' => 'Belgic Confession of Faith: Article 25',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/belgic-confession#toc-article-25-the-fulfillment-of-the-law'
            ],
            [
                'label' => 'Belgic Confession of Faith: Article 26',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/belgic-confession#toc-article-26-the-intercession-of-christ'
            ],
            [
                'label' => 'Belgic Confession of Faith: Article 27',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/belgic-confession#toc-article-27-the-holy-catholic-church'
            ],
            [
                'label' => 'Belgic Confession of Faith: Article 28',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/belgic-confession#toc-article-28-the-obligations-of-church-members'
            ],
            [
                'label' => '39 Articles of Religion: Article 19',
                'resource_url' => $articles39Url + '19',
            ],
            [
                'label' => 'Belgic Confession of Faith: Article 29',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/belgic-confession#toc-article-29-the-marks-of-the-true-church'
            ],
            [
                'label' => 'Belgic Confession of Faith: Article 30',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/belgic-confession#toc-article-30-the-government-of-the-church'
            ],
            [
                'label' => 'Belgic Confession of Faith: Article 31',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/belgic-confession#toc-article-31-the-officers-of-the-church'
            ],
            [
                'label' => 'Belgic Confession of Faith: Article 32',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/belgic-confession#toc-article-32-the-order-and-discipline-of-the-church'
            ],
            [
                'label' => 'Belgic Confession of Faith: Article 33',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/belgic-confession#toc-article-33-the-sacraments'
            ],
            [
                'label' => 'Belgic Confession of Faith: Article 34',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/belgic-confession#toc-article-34-the-sacrament-of-baptism'
            ],
            [
                'label' => '39 Articles of Religion: Article 20',
                'resource_url' => $articles39Url + '20',
            ],
            [
                'label' => 'Belgic Confession of Faith: Article 35',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/belgic-confession#toc-article-35-the-sacrament-of-the-lord-s-supper'
            ],
            [
                'label' => 'Belgic Confession of Faith: Article 36',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/belgic-confession#toc-article-36-the-civil-government'
            ],
            [
                'label' => 'Belgic Confession of Faith: Article 37',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/belgic-confession#toc-article-37-the-last-judgement'
            ],
            [
                'label' => 'The Canons of Dort: The First Main Point of Doctrine Articles 1-4',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/canons-dort#toc-the-first-main-point-of-doctrine'
            ],
            [
                'label' => 'The Canons of Dort: The First Main Point of Doctrine Articles 5-7',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/canons-dort#toc-the-first-main-point-of-doctrine'
            ],
            [
                'label' => 'The Canons of Dort: The First Main Point of Doctrine Articles 8-12',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/canons-dort#toc-the-first-main-point-of-doctrine'
            ],
            [
                'label' => '39 Articles of Religion: Article 21',
                'resource_url' => $articles39Url + '21',
            ],
            [
                'label' => 'The Canons of Dort: The First Main Point of Doctrine Articles 13-15',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/canons-dort#toc-the-first-main-point-of-doctrine'
            ],
            [
                'label' => 'The Canons of Dort: The First Main Point of Doctrine Articles 16-18',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/canons-dort#toc-the-first-main-point-of-doctrine'
            ],
            [
                'label' => 'The Canons of Dort: The First Main Point of Doctrine Rejectiions 1-3',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/canons-dort#toc-the-first-main-point-of-doctrine'
            ],
            [
                'label' => 'The Canons of Dort: The First Main Point of Doctrine Rejections 4-6',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/canons-dort#toc-the-first-main-point-of-doctrine'
            ],
            [
                'label' => 'The Canons of Dort: The First Main Point of Doctrine Rejections 7-9',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/canons-dort#toc-the-first-main-point-of-doctrine'
            ],
            [
                'label' => 'The Canons of Dort: The Second Main Point of Doctrine Articles 1-3',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/canons-dort#toc-the-second-main-point-of-doctrine'
            ],
            [
                'label' => '39 Articles of Religion: Article 22',
                'resource_url' => $articles39Url + '22',
            ],
            [
                'label' => 'The Canons of Dort: The Second Main Point of Doctrine Articles 4-7',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/canons-dort#toc-the-second-main-point-of-doctrine'
            ],
            [
                'label' => 'The Canons of Dort: The Second Main Point of Doctrine Articles 8-9',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/canons-dort#toc-the-second-main-point-of-doctrine'
            ],
            [
                'label' => 'The Canons of Dort: The Second Main Point of Doctrine Rejections 1-3',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/canons-dort#toc-the-second-main-point-of-doctrine'
            ],
            [
                'label' => 'The Canons of Dort: The Second Main Point of Doctrine Rejections 1-3',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/canons-dort#toc-the-second-main-point-of-doctrine'
            ],
            [
                'label' => 'The Canons of Dort: The The Third and Fourth Main Points of Doctrine Articles 1-4',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/canons-dort#toc-the-third-and-fourth-main-points-of-doctrine'
            ],
            [
                'label' => 'The Canons of Dort: The The Third and Fourth Main Points of Doctrine Articles 5-8',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/canons-dort#toc-the-third-and-fourth-main-points-of-doctrine'
            ],
            [
                'label' => '39 Articles of Religion: Article 23',
                'resource_url' => $articles39Url + '23',
            ],
            [
                'label' => 'The Canons of Dort: The Third and Fourth Main Points of Doctrine Articles 9-11',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/canons-dort#toc-the-third-and-fourth-main-points-of-doctrine'
            ],
            [
                'label' => 'The Canons of Dort: The Third and Fourth Main Points of Doctrine Articles 12-14',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/canons-dort#toc-the-third-and-fourth-main-points-of-doctrine'
            ],
            [
                'label' => 'The Canons of Dort: The Third and Fourth Main Points of Doctrine Articles 15-17',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/canons-dort#toc-the-third-and-fourth-main-points-of-doctrine'
            ],
            [
                'label' => 'The Canons of Dort: The Third and Fourth Main Points of Doctrine Rejections 1-3',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/canons-dort#toc-the-third-and-fourth-main-points-of-doctrine'
            ],
            [
                'label' => 'The Canons of Dort: The Third and Fourth Main Points of Doctrine Rejections 4-6',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/canons-dort#toc-the-third-and-fourth-main-points-of-doctrine'
            ],
            [
                'label' => 'The Canons of Dort: The Third and Fourth Main Points of Doctrine Rejections 7-9',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/canons-dort#toc-the-third-and-fourth-main-points-of-doctrine'
            ],
            [
                'label' => '39 Articles of Religion: Article 24',
                'resource_url' => $articles39Url + '24',
            ],
            [
                'label' => 'The Canons of Dort: The Fifth Main Point of Doctrine Articles 1-3',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/canons-dort#toc-the-fifth-main-point-of-doctrine',
            ],
            [
                'label' => 'The Canons of Dort: The Fifth Main Point of Doctrine Articles 4-6',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/canons-dort#toc-the-fifth-main-point-of-doctrine',
            ],
            [
                'label' => 'The Canons of Dort: The Fifth Main Point of Doctrine Articles 7-9',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/canons-dort#toc-the-fifth-main-point-of-doctrine',
            ],
            [
                'label' => 'The Canons of Dort: The Fifth Main Point of Doctrine Articles 10-12',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/canons-dort#toc-the-fifth-main-point-of-doctrine',
            ],
            [
                'label' => 'The Canons of Dort: The Fifth Main Point of Doctrine Articles 13-15',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/canons-dort#toc-the-fifth-main-point-of-doctrine',
            ],
            [
                'label' => 'The Canons of Dort: The Fifth Main Point of Doctrine Rejections 1-3',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/canons-dort#toc-the-fifth-main-point-of-doctrine',
            ],
            [
                'label' => '39 Articles of Religion: Article 35',
                'resource_url' => $articles39Url + '25',
            ],
            [
                'label' => 'The Canons of Dort: The Fifth Main Point of Doctrine Rejections 4-6',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/canons-dort#toc-the-fifth-main-point-of-doctrine',
            ],
            [
                'label' => 'The Canons of Dort: The Fifth Main Point of Doctrine Rejections 7-9',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/canons-dort#toc-the-fifth-main-point-of-doctrine',
            ],
            [
                'label' => 'The Canon of Dorts: Conclusion ',
                'resource_url' => 'https://www.crcna.org/welcome/beliefs/confessions/canons-dort#toc-conclusion',
            ],
            [
                'label' => 'The Synod of Dort on Sabbath Observance',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/dort-sabbath.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 1',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 2',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => '39 Articles of Religion: Article 26',
                'resource_url' => $articles39Url + '26',
            ],
            [
                'label' => 'Church Order of Dort: Article 3',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 4',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 5',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 6',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 7',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 8',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => '39 Articles of Religion: Article 27',
                'resource_url' => $articles39Url + '27',
            ],
            [
                'label' => 'Church Order of Dort: Article 9',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 10',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 11',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 12',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 13',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 14',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => '39 Articles of Religion: Article 28',
                'resource_url' => $articles39Url + '29',
            ],
            [
                'label' => 'Church Order of Dort: Article 15',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 16',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 17',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 18',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 19',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 20',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => '39 Articles of Religion: Article 29',
                'resource_url' => $articles39Url + '29',
            ],
            [
                'label' => 'Church Order of Dort: Article 21',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 22',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 23',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 24',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 25',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 26',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => '39 Articles of Religion: Article 30',
                'resource_url' => $articles39Url + '30',
            ],
            [
                'label' => 'Church Order of Dort: Article 27',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 28',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 29',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 30',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 31',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 32',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],

            [
                'label' => '39 Articles of Religion: Article 31',
                'resource_url' => $articles39Url + '31',
            ],
            [
                'label' => 'Church Order of Dort: Article 33',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 34',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 35',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 36',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 37',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 38',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => '39 Articles of Religion: Article 32',
                'resource_url' => $articles39Url + '32',
            ],
            [
                'label' => 'Church Order of Dort: Article 39',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 40',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 41',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 42',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 43',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 44',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => '39 Articles of Religion: Article 33',
                'resource_url' => $articles39Url + '33',
            ],
            [
                'label' => 'Church Order of Dort: Article 45',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 46',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 47',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 48',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 49',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 50',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => '39 Articles of Religion: Article 34',
                'resource_url' => $articles39Url + '34',
            ],
            [
                'label' => 'Church Order of Dort: Article 51',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 52',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 53',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 54',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 55',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 56',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => '39 Articles of Religion: Article 35',
                'resource_url' => $articles39Url + '35',
            ],
            [
                'label' => 'Church Order of Dort: Article 57',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 58',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 59',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 60',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 61',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 62',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => '39 Articles of Religion: Article 36',
                'resource_url' => $articles39Url + '36',
            ],
            [
                'label' => 'Church Order of Dort: Article 63',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 64',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 65',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 66',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 67',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 68',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => '39 Articles of Religion: Article 37',
                'resource_url' => $articles39Url + '37',
            ],
            [
                'label' => 'Church Order of Dort: Article 69',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 70',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 71',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 72',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 73',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 74',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => '39 Articles of Religion: Article 38',
                'resource_url' => $articles39Url + '38',
            ],
            [
                'label' => 'Church Order of Dort: Article 75',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 76',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 77',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 78',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 79',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 80',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => '39 Articles of Religion: Article 39',
                'resource_url' => $articles39Url + '39',
            ],
            [
                'label' => 'Church Order of Dort: Article 81',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 82',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 83',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 84',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 85',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Church Order of Dort: Article 86',
                'resource_url' => 'https://reformedstandards.com/three-forms-of-unity/church-order-dort.html',
            ],
            [
                'label' => 'Abstract Principles of 1858: Article 1-2',
                'resource_url' => 'https://reformedstandards.com/second-london/1858-abstract-of-principles.html#chapter-1',
            ],
            [
                'label' => 'The Scots Confession: Article 1',
                'resource_url' => '',
            ],
            [
                'label' => 'The Scots Confession: Article 2',
                'resource_url' => '',
            ],
            [
                'label' => 'The Scots Confession: Article 3',
                'resource_url' => '',
            ],
            [
                'label' => 'The Scots Confession: Article 4',
                'resource_url' => '',
            ],
            [
                'label' => 'The Scots Confession: Article 5',
                'resource_url' => '',
            ],
            [
                'label' => 'The Scots Confession: Article 6',
                'resource_url' => '',
            ],
            [
                'label' => 'Abstract Principles of 1858: Article 3-4',
                'resource_url' => 'https://reformedstandards.com/second-london/1858-abstract-of-principles.html#chapter-3',
            ],
            [
                'label' => 'The Scots Confession: Article 7',
                'resource_url' => '',
            ],
            [
                'label' => 'The Scots Confession: Article 8',
                'resource_url' => '',
            ],
            [
                'label' => 'The Scots Confession: Article 9',
                'resource_url' => '',
            ],
            [
                'label' => 'The Scots Confession: Article 10',
                'resource_url' => '',
            ],
            [
                'label' => 'The Scots Confession: Article 11',
                'resource_url' => '',
            ],
            [
                'label' => 'The Scots Confession: Article 12',
                'resource_url' => '',
            ],
            [
                'label' => 'Abstract Principles of 1858: Article 5-6',
                'resource_url' => 'https://reformedstandards.com/second-london/1858-abstract-of-principles.html#chapter-5',
            ],
            [
                'label' => 'The Scots Confession: Article 13',
                'resource_url' => '',
            ],
            [
                'label' => 'The Scots Confession: Article 14',
                'resource_url' => '',
            ],
            [
                'label' => 'The Scots Confession: Article 15',
                'resource_url' => '',
            ],
            [
                'label' => 'The Scots Confession: Article 16',
                'resource_url' => '',
            ],
            [
                'label' => 'The Scots Confession: Article 17',
                'resource_url' => '',
            ],
            [
                'label' => 'The Scots Confession: Article 18',
                'resource_url' => '',
            ],
            [
                'label' => 'Abstract Principles of 1858: Article 7-8',
                'resource_url' => 'https://reformedstandards.com/second-london/1858-abstract-of-principles.html#chapter-7',
            ],
            [
                'label' => 'The Scots Confession: Article 19',
                'resource_url' => '',
            ],
            [
                'label' => 'The Scots Confession: Article 20',
                'resource_url' => '',
            ],
            [
                'label' => 'The Scots Confession: Article 21',
                'resource_url' => '',
            ],
            [
                'label' => 'The Scots Confession: Article 22',
                'resource_url' => '',
            ],
            [
                'label' => 'The Scots Confession: Article 23',
                'resource_url' => '',
            ],
            [
                'label' => 'The Scots Confession: Article 24',
                'resource_url' => '',
            ],
            [
                'label' => 'Abstract Principles of 1858: Article 9-10',
                'resource_url' => 'https://reformedstandards.com/second-london/1858-abstract-of-principles.html#chapter-9',
            ],
            [
                'label' => 'The Scots Confession: Article 25',
                'resource_url' => '',
            ],
            [
                'label' => 'The Second Helvetic Confession: Chapter 1',
                'resource_url' => 'https://www.ccel.org/creeds/helvetic.htm',
            ],
            [
                'label' => 'The Second Helvetic Confession: Chapter 2',
                'resource_url' => 'https://www.ccel.org/creeds/helvetic.htm',
            ],
            [
                'label' => 'The Second Helvetic Confession: Chapter 3',
                'resource_url' => 'https://www.ccel.org/creeds/helvetic.htm',
            ],
            [
                'label' => 'The Second Helvetic Confession: Chapter 4',
                'resource_url' => 'https://www.ccel.org/creeds/helvetic.htm',
            ],
            [
                'label' => 'The Second Helvetic Confession: Chapter 5',
                'resource_url' => 'https://www.ccel.org/creeds/helvetic.htm',
            ],
            [
                'label' => 'Abstract Principles of 1858: Article 11-12',
                'resource_url' => 'https://reformedstandards.com/second-london/1858-abstract-of-principles.html#chapter-9',
            ],
            [
                'label' => 'The Second Helvetic Confession: Chapter 6',
                'resource_url' => 'https://www.ccel.org/creeds/helvetic.htm',
            ],
            [
                'label' => 'The Second Helvetic Confession: Chapter 7',
                'resource_url' => 'https://www.ccel.org/creeds/helvetic.htm',
            ],
            [
                'label' => 'The Second Helvetic Confession: Chapter 8',
                'resource_url' => 'https://www.ccel.org/creeds/helvetic.htm',
            ],
            [
                'label' => 'The Second Helvetic Confession: Chapter 9',
                'resource_url' => 'https://www.ccel.org/creeds/helvetic.htm',
            ],
            [
                'label' => 'The Second Helvetic Confession: Chapter 10',
                'resource_url' => 'https://www.ccel.org/creeds/helvetic.htm',
            ],
            [
                'label' => 'The Second Helvetic Confession: Chapter 11',
                'resource_url' => 'https://www.ccel.org/creeds/helvetic.htm',
            ],
            [
                'label' => 'Abstract Principles of 1858: Article 13-14',
                'resource_url' => 'https://reformedstandards.com/second-london/1858-abstract-of-principles.html#chapter-9',
            ],
            [
                'label' => 'The Second Helvetic Confession: Chapter 12',
                'resource_url' => 'https://www.ccel.org/creeds/helvetic.htm',
            ],
            [
                'label' => 'The Second Helvetic Confession: Chapter 13',
                'resource_url' => 'https://www.ccel.org/creeds/helvetic.htm',
            ],
            [
                'label' => 'The Second Helvetic Confession: Chapter 14',
                'resource_url' => 'https://www.ccel.org/creeds/helvetic.htm',
            ],
            [
                'label' => 'The Second Helvetic Confession: Chapter 15',
                'resource_url' => 'https://www.ccel.org/creeds/helvetic.htm',
            ],
            [
                'label' => 'The Second Helvetic Confession: Chapter 16',
                'resource_url' => 'https://www.ccel.org/creeds/helvetic.htm',
            ],
            [
                'label' => 'The Second Helvetic Confession: Chapter 17',
                'resource_url' => 'https://www.ccel.org/creeds/helvetic.htm',
            ],
            [
                'label' => 'Abstract Principles of 1858: Article 15-16',
                'resource_url' => 'https://reformedstandards.com/second-london/1858-abstract-of-principles.html#chapter-9',
            ],
            [
                'label' => 'The Second Helvetic Confession: Chapter 18',
                'resource_url' => 'https://www.ccel.org/creeds/helvetic.htm',
            ],
            [
                'label' => 'The Second Helvetic Confession: Chapter 19',
                'resource_url' => 'https://www.ccel.org/creeds/helvetic.htm',
            ],
            [
                'label' => 'The Second Helvetic Confession: Chapter 20',
                'resource_url' => 'https://www.ccel.org/creeds/helvetic.htm',
            ],
            [
                'label' => 'The Second Helvetic Confession: Chapter 21',
                'resource_url' => 'https://www.ccel.org/creeds/helvetic.htm',
            ],
            [
                'label' => 'The Second Helvetic Confession: Chapter 22',
                'resource_url' => 'https://www.ccel.org/creeds/helvetic.htm',
            ],
            [
                'label' => 'The Second Helvetic Confession: Chapter 23',
                'resource_url' => 'https://www.ccel.org/creeds/helvetic.htm',
            ],
            [
                'label' => 'Abstract Principles of 1858: Article 17-18',
                'resource_url' => 'https://reformedstandards.com/second-london/1858-abstract-of-principles.html#chapter-9',
            ],
            [
                'label' => 'The Second Helvetic Confession: Chapter 24',
                'resource_url' => 'https://www.ccel.org/creeds/helvetic.htm',
            ],
            [
                'label' => 'The Second Helvetic Confession: Chapter 25',
                'resource_url' => 'https://www.ccel.org/creeds/helvetic.htm',
            ],
            [
                'label' => 'The Second Helvetic Confession: Chapter 26',
                'resource_url' => 'https://www.ccel.org/creeds/helvetic.htm',
            ],
            [
                'label' => 'The Second Helvetic Confession: Chapter 27',
                'resource_url' => 'https://www.ccel.org/creeds/helvetic.htm',
            ],
            [
                'label' => 'The Second Helvetic Confession: Chapter 28',
                'resource_url' => 'https://www.ccel.org/creeds/helvetic.htm',
            ],
            [
                'label' => 'The Second Helvetic Confession: Chapter 29',
                'resource_url' => 'https://www.ccel.org/creeds/helvetic.htm',
            ],
            [
                'label' => 'Abstract Principles of 1858: Article 19-20',
                'resource_url' => 'https://reformedstandards.com/second-london/1858-abstract-of-principles.html#chapter-9',
            ],
            [
                'label' => 'The Second Helvetic Confession: Chapter 30',
                'resource_url' => 'https://www.ccel.org/creeds/helvetic.htm',
            ],
            [
                'label' => 'The Augsburg Confession: Article 1-2',
                'resource_url' => 'https://thebookofconcord.org/augsburg-confession/article-i/',
            ],
            [
                'label' => 'The Augsburg Confession: Article 3-4',
                'resource_url' => 'https://thebookofconcord.org/augsburg-confession/article-iii/',
            ],
            [
                'label' => 'The Augsburg Confession: Article 5-6',
                'resource_url' => 'https://thebookofconcord.org/augsburg-confession/article-v/',
            ],
            [
                'label' => 'The Augsburg Confession: Article 7-8',
                'resource_url' => 'https://thebookofconcord.org/augsburg-confession/article-vii/',
            ],
            [
                'label' => 'The Augsburg Confession: Article 9',
                'resource_url' => 'https://thebookofconcord.org/augsburg-confession/article-ix/',
            ],
            [
                'label' => 'The Augsburg Confession: Article 10-11',
                'resource_url' => 'https://thebookofconcord.org/augsburg-confession/article-x/',
            ],
            [
                'label' => 'The Augsburg Confession: Article 12-13',
                'resource_url' => 'https://thebookofconcord.org/augsburg-confession/article-xii/',
            ],
            [
                'label' => 'The Augsburg Confession: Article 14-15',
                'resource_url' => 'https://thebookofconcord.org/augsburg-confession/article-xiv/',
            ],
            [
                'label' => 'The Augsburg Confession: Article 16-17',
                'resource_url' => 'https://thebookofconcord.org/augsburg-confession/article-xvi/',
            ],
            [
                'label' => 'The Augsburg Confession: Article 18-19',
                'resource_url' => 'https://thebookofconcord.org/augsburg-confession/article-xviii/',
            ],
            [
                'label' => 'The Augsburg Confession: Article 20',
                'resource_url' => 'https://thebookofconcord.org/augsburg-confession/article-xx/',
            ],
            [
                'label' => 'The Augsburg Confession: Article 21',
                'resource_url' => 'https://thebookofconcord.org/augsburg-confession/article-xxi/',
            ],
            [
                'label' => 'The Augsburg Confession: Article 22',
                'resource_url' => 'https://thebookofconcord.org/augsburg-confession/article-xxii/',
            ],
            [
                'label' => 'The Augsburg Confession: Article 23',
                'resource_url' => 'https://thebookofconcord.org/augsburg-confession/article-xxiii/',
            ],
            [
                'label' => 'The Augsburg Confession: Article 24',
                'resource_url' => 'https://thebookofconcord.org/augsburg-confession/article-xxiv/',
            ],
            [
                'label' => 'The Augsburg Confession: Article 24',
                'resource_url' => 'https://thebookofconcord.org/augsburg-confession/article-xxiv/',
            ],
            [
                'label' => 'The Augsburg Confession: Article 25',
                'resource_url' => 'https://thebookofconcord.org/augsburg-confession/article-xxv/',
            ],
            [
                'label' => 'The Augsburg Confession: Article 26',
                'resource_url' => 'https://thebookofconcord.org/augsburg-confession/article-xxvi/',
            ],
            [
                'label' => 'The Augsburg Confession: Article 27',
                'resource_url' => 'https://thebookofconcord.org/augsburg-confession/article-xxvii/',
            ],
            [
                'label' => 'The Augsburg Confession: Article 28',
                'resource_url' => 'https://thebookofconcord.org/augsburg-confession/article-xxviii/',
            ],
            [
                'label' => 'The Augsburg Confession: Conclusion',
                'resource_url' => 'https://thebookofconcord.org/augsburg-confession/conclusion/',
            ],

        ];

        foreach ($dataset as $data) {
            Confession::create($data);
        }
    }
}
