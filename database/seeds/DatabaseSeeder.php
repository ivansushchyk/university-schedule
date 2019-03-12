<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()

    {

        DB::table('lessons')->insert([
            'subj_id' => rand(1, 5),
            'week' => 'В',
            'day_number' => rand(1, 5),
            'pair_number' => rand(1, 5),
            'room_id' => rand(1, 5),
            'group_id' => rand(1, 3),
            'type' => 'П',
            'teacher_id' => rand(1, 6),

        ]);
    }
}