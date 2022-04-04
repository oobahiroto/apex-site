<?php

use Illuminate\Database\Seeder;

class RepliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('replies')->insert([
    [
        'id' => 50,
        'body' => '',
        'user_id'=>1,
        ],
        ]);
    }
}
