<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersEstablishment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establishment_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('establishment_id');
            $table->integer('user_id');
            $table->string('comentarios')->nullable();
            $table->boolean('lfavorito')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('establishment_user');
    }
}
