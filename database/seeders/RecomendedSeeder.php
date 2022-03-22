<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecomendedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("recomended")->insert(["user_id"=> 1, "recomended_user_id" => 1, "refiral_status" => 1]);
        DB::table("recomended")->insert(["user_id"=> 2, "recomended_user_id" => 1, "refiral_status" => 2]);
        DB::table("recomended")->insert(["user_id"=> 3, "recomended_user_id" => 2, "refiral_status" => 2]);
        DB::table("recomended")->insert(["user_id"=> 4, "recomended_user_id" => 3, "refiral_status" => 3]);
        DB::table("recomended")->insert(["user_id"=> 5, "recomended_user_id" => 4, "refiral_status" => 4]);
        DB::table("recomended")->insert(["user_id"=> 6, "recomended_user_id" => 5, "refiral_status" => 5]);
        DB::table("recomended")->insert(["user_id"=> 7, "recomended_user_id" => 6, "refiral_status" => 6]);
        DB::table("recomended")->insert(["user_id"=> 8, "recomended_user_id" => 7, "refiral_status" => 7]);
        DB::table("recomended")->insert(["user_id"=> 9, "recomended_user_id" => 8, "refiral_status" => 8]);
        DB::table("recomended")->insert(["user_id"=> 10, "recomended_user_id" => 9, "refiral_status" => 9]);
        DB::table("recomended")->insert(["user_id"=> 11, "recomended_user_id" => 10, "refiral_status" => 10]);
    }
}
