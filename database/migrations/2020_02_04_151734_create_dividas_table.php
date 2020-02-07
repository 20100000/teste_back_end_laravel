<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDividasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dividas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('descricao');
            $table->float('valor',15);
            $table->date('data_vencimento');
            $table->unsignedBigInteger('devedor_id')->nullable();
            $table->foreign('devedor_id')->references('id')->on('devedores' )->onDelete('cascade');
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
        Schema::dropIfExists('dividas');
    }
}
