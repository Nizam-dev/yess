<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmbasadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ambasadors', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('foto');
            $table->string('nama');
            $table->string('note');
            $table->string('email');
            $table->text('alamat');
            $table->string('provinsi');
            $table->longText('content');
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
        Schema::dropIfExists('ambasadors');
    }
}
