<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cases')->insert([
            'suggestion_store' => 'ラブラブステーション',
            'decided_store' => 'ラブラブステーション',
            'decided_flg' => 1,
            'done_flg' => 0,
            'user_id' => 22,
            'cast_id' => 13,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
