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
        Schema::create('persjudiciales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('persona_id')->nullable(false);
            $table->foreign('persona_id')->references('id')->on('personas')->onDelete('cascade');
            $table->unsignedBigInteger('estadosoficio_id')->nullable(false);
            $table->foreign('estadosoficio_id')->references('id')->on('estadosoficios')->onDelete('cascade');           
            $table->unsignedBigInteger('tiposjudiciale_id')->nullable(false);
            $table->foreign('tiposjudiciale_id')->references('id')->on('tiposjudiciales')->onDelete('cascade');           
            $table->string('nroCausa', 10)->nullable()->charset('utf8mb4')->collation('utf8mb4_general_ci');
            $table->unsignedInteger('anioCausa')->nullable();
            $table->string('siglas', 10)->nullable()->charset('utf8mb4')->collation('utf8mb4_general_ci');
            $table->datetime('fecha')->nullable();
            $table->string('clave', 100)->nullable()->charset('utf8mb4')->collation('utf8mb4_general_ci');
            $table->string('juzgado', 255)->nullable()->charset('utf8mb4')->collation('utf8mb4_general_ci');
            $table->longText('caratula')->nullable()->charset('utf8mb4')->collation('utf8mb4_general_ci');
            $table->longText('extracto')->nullable()->charset('utf8mb4')->collation('utf8mb4_general_ci');
            $table->datetime('fechaIngreso')->nullable();
            $table->datetime('fechaPresentacion')->nullable();
            $table->string('motivo', 255)->nullable()->charset('utf8mb4')->collation('utf8mb4_general_ci');
            $table->string('nroDiligencia', 10)->nullable()->charset('utf8mb4')->collation('utf8mb4_general_ci');
            $table->datetime('fechaDiligencia')->nullable();
            $table->string('orden', 10)->nullable()->charset('utf8mb4')->collation('utf8mb4_general_ci');
            $table->string('presentacion', 255)->nullable()->charset('utf8mb4')->collation('utf8mb4_general_ci');
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
        Schema::dropIfExists('persjudiciales');
    }
};
