<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('om_id');
            $table->foreign('om_id')->references('id')->on('oms')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('fracao_id');
            $table->foreign('fracao_id')->references('id')->on('fracoes')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nome_guerra')->nullable();
            $table->string('cpf')->nullable();
            $table->string('idt')->nullable();
            $table->enum('sexo', ['m', 'f'])->nullable();
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
        Schema::dropIfExists('details');
    }
}
