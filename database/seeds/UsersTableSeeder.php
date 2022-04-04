<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        \DB::table('users')->insert([
            [
                'name'=> '山田 太郎',
                'level'=>100,
                'rank'=>'シルバー',
                'sex'=>'男',
                'age'=>20,
                'profile'=>'楽しくやりたいです！',
                'email'=>'aaaaa',
                'password'=>'aiueo',
                ],
                [
                'name'=> '田中 二郎',
                'level'=>200,
                'rank'=>'マスター',
                'sex'=>'男',
                'age'=>25,
                'profile'=>'ランクガチでやりましょう',
                'email'=>'bbbbb', 
                'password'=>'aiueo',
                ],
                ]);
        //
    }
}
