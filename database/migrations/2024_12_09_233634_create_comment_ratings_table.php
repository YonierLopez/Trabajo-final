<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentRatingsTable extends Migration
{
// database/migrations/xxxx_xx_xx_create_comment_ratings_table.php
// database/migrations/xxxx_xx_xx_create_comment_ratings_table.php
public function up()
{
    Schema::create('comment_ratings', function (Blueprint $table) {
        $table->unsignedBigInteger('user_id')->nullable();  // Añadir user_id, con nullable si no siempre se tiene que asociar a un usuario
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        $table->text('comment');
        $table->integer('rating');
        $table->timestamps();
    });
}


    public function down()
    {
        Schema::dropIfExists('comment_ratings');
    }
}
