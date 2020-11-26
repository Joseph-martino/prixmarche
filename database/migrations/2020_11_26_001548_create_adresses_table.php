<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adresses', function (Blueprint $table) {
            $table->id();
            $table->string('adress');
            $table->string('city');
            $table->integer('zip_code');
            $table->timestamps();
        });
        Schema::table('adresses', function (Blueprint $table) {
            $table->foreignId('users_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('adresses', function (Blueprint $table) {
            $table->dropForeign(['users_id'])->references('id')->on('users');
        });
        Schema::dropIfExists('adresses');
    }
}
