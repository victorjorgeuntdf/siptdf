<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perscabellocolores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('persona_id')->nullable(false);
            $table->foreign('persona_id')->references('id')->on('personas')->onDelete('cascade');
            $table->unsignedBigInteger('cabellocolore_id')->nullable(false);
            $table->foreign('cabellocolore_id')->references('id')->on('cabellocolores')->onDelete('cascade');
            $table->unsignedBigInteger('tonalidade_id')->nullable(false);
            $table->foreign('tonalidade_id')->references('id')->on('tonalidades')->onDelete('cascade');
            $table->unsignedBigInteger('tenido_id')->nullable(false);
            $table->foreign('tenido_id')->references('id')->on('tenidos')->onDelete('cascade');
            $table->unsignedBigInteger('mac_id')->nullable(false);
            $table->foreign('mac_id')->references('id')->on('macs')->onDelete('cascade');
            $table->unsignedBigInteger('user_id')->nullable(false);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('regEstado_id')->nullable(false);
            $table->foreign('regEstado_id')->references('id')->on('regestados')->onDelete('cascade');
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
        Schema::dropIfExists('perscabellocolores');
    }
};
