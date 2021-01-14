<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nomeproduct');
            $table->string('descr')->unique();
            $table->string('cfop')->unique();
            $table->string('cst')->unique();
            $table->string('ncm')->unique();
            $table->longText('imgproduto');
            $table->decimal('preco_unit', 10, 2)->nullable();
            $table->decimal('preco_custo', 10, 2)->nullable();
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
