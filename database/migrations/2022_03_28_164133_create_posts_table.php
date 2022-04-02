<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('posts', function (Blueprint $table) {
            $table->increments("id");
            $table->string('recruitment_pattern',10);
            $table->string('kinds_of_machines',10);
            $table->string('game_mode',10);
            $table->string('game_style',10);
            $table->string('rank',10);
            $table->string('condition',200);
            $table->timestamps();
            $table->softDeletes();
            $table->integer('user_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
