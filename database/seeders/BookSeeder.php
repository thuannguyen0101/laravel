<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('books')->truncate();
        DB::table('books')->insert([
            [
                'bookid' => 1,
                'authorid' => 1,
                'title' => 'Ngành Kinh tế có gì?',
                'ISBN' => '9786047787999',
                'pub_year' => 2019,
                'available' => 1,
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],
            [
                'bookid' => 2,
                'authorid' => 2,
                'title' => 'IT + DevUP',
                'ISBN' => '89312121212',
                'pub_year' => 2020,
                'available' => 1,
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],
            [
                'bookid' => 3,
                'authorid' => 3,
                'title' => 'Sách Mùi Mẹ',
                'ISBN' => '9786047784202',
                'pub_year' => 2018,
                'available' => 1,
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],
            [
                'bookid' => 4,
                'authorid' => 4,
                'title' => 'Tủ sách hướng nghiệp',
                'ISBN' => '9786047791866',
                'pub_year' => 2013,
                'available' => 1,
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],
            [
                'bookid' => 5,
                'authorid' => 5,
                'title' => 'Seneca: Những Bức Thư',
                'ISBN' => '9786047794348',
                'pub_year' => 2017,
                'available' => 1,
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],
            [
                'bookid' => 6,
                'authorid' => 6,
                'title' => 'Vũ Trụ Trong Vỏ Hạt Dẻ',
                'ISBN' => '9786047787311',
                'pub_year' => 2018,
                'available' => 1,
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],
            [
                'bookid' => 7,
                'authorid' => 7,
                'title' => 'Muôn Kiếp Nhân Sinh',
                'ISBN' => '9786047787104',
                'pub_year' => 2012,
                'available' => 1,
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],
            [
                'bookid' => 8,
                'authorid' => 8,
                'title' => 'Cây Cam Ngọt Của Tôi',
                'ISBN' => '9786047787702',
                'pub_year' => 2010,
                'available' => 1,
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],
            [
                'bookid' => 9,
                'authorid' => 9,
                'title' => 'Chiến Binh Cầu Vồng',
                'ISBN' => '9786047787708',
                'pub_year' => 2020,
                'available' => 1,
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],
            [
                'bookid' => 10,
                'authorid' => 10,
                'title' => 'Luật Tâm Thức',
                'ISBN' => '9786047787999',
                'pub_year' => 2015,
                'available' => 1,
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}

