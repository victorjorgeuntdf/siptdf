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
        Schema::create('persestudios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('persona_id')->nullable(false);
            $table->foreign('persona_id')->references('id')->on('personas')->onDelete('cascade');
            $table->unsignedBigInteger('estudio_id')->nullable(false);
            $table->foreign('estudio_id')->references('id')->on('estudios')->onDelete('cascade');
            $table->unsignedBigInteger('estadoestudio_id')->nullable(false);
            $table->foreign('estadoestudio_id')->references('id')->on('estadoestudios')->onDelete('cascade');
            $table->unsignedBigInteger('establecimiento_id')->nullable(false);
            $table->foreign('establecimiento_id')->references('id')->on('establecimientos')->onDelete('cascade');
            $table->unsignedBigInteger('nivelestudio_id')->nullable(false);
            $table->foreign('nivelestudio_id')->references('id')->on('nivelestudios')->onDelete('cascade');
            $table->date('fechaInicio')->nullable();
            $table->date('fechaFin')->nullable();
            $table->string('titulo', 100)->nullable()->charset('utf8mb4')->collation('utf8mb4_general_ci');
            $table->string('motivoAbandono', 255)->nullable()->charset('utf8mb4')->collation('utf8mb4_general_ci');
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
        Schema::dropIfExists('persestudios');
    }
};
