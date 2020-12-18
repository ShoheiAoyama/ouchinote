<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOuchiUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ouchi_user', function (Blueprint $table) {
//            $table->bigIncrements('id');
            $table->unsignedBigInteger('ouchi_id');
            $table->unsignedBigInteger('user_id');
            $table->primary(['ouchi_id', 'user_id']);

            //外部キー制約
            $table->foreign('ouchi_id')
                ->references('id')
                ->on('ouchis')
                ->onDelete('cascade');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ouchi_user');
    }
}
