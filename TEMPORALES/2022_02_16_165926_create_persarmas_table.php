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
        Schema::create('persarmas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('persona_id')->nullable(false);
            $table->foreign('persona_id')->references('id')->on('personas')->onDelete('cascade');
            $table->unsignedBigInteger('arma_id')->nullable(false);
            $table->foreign('arma_id')->references('id')->on('armas')->onDelete('cascade');
            $table->unsignedBigInteger('colore_id')->nullable(false);
            $table->foreign('colore_id')->references('id')->on('colores')->onDelete('cascade');
            $table->string('nroSerie', 50)->nullable()->charset('utf8mb4')->collation('utf8mb4_general_ci');
            $table->string('licencia', 50)->nullable()->charset('utf8mb4')->collation('utf8mb4_general_ci');
            $table->string('legitimoUsuario', 50)->nullable()->charset('utf8mb4')->collation('utf8mb4_general_ci');
            $table->string('observacion', 255)->nullable()->charset('utf8mb4')->collation('utf8mb4_general_ci');
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
        Schema::dropIfExists('persarmas');
    }
};
