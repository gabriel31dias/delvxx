<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Deliveryman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliverymans', function (Blueprint $table) {
            $table->id();
            $table->string('nomeentregador')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('whatsapp2')->nullable();
            $table->string('disponivel')->nullable();
            $table->rememberToken();
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
        //
    }
}
