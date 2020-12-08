<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCampos1ToDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('details', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->after('id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('om_id')->after('user_id');
            $table->foreign('om_id')->references('id')->on('oms')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('fracao_id')->after('om_id');
            $table->foreign('fracao_id')->references('id')->on('fracoes')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nome_guerra')->nullable()->after('fracao_id');
            $table->string('cpf')->nullable()->after('nome_guerra');
            $table->string('idt')->nullable()->after('cpf');
            $table->enum('sexo', ['m', 'f'])->nullable()->after('idt');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('details', function (Blueprint $table) {
            //
        });
    }
}
