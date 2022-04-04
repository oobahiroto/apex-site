<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('posts')->insert([
            [
                'id' => 30,
                'recruitment_pattern' =>'野良',
                'kinds_of_machines' =>'PS',
                'game_mode' =>'バトロワ',
                'game_style'=> 'カジュアル',
                'rank'=> 'シルバー',
                'condition'=> '楽しくやりましょう！',
                'user_id'=> 1,
                ],
            [
                'id' => 40,
                'recruitment_pattern' =>'フレンド',
                'kinds_of_machines' =>'PC',
                'game_mode' =>'バトロワ',
                'game_style'=> 'ランク',
                'rank'=> 'マスター',
                'condition'=> '勝ちましょう',
                'user_id'=> 2,
                ],
                ]);
        //
    }
}
