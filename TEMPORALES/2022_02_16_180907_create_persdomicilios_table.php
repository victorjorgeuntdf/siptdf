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
        Schema::create('persdomicilios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('persona_id')->nullable(false);
            $table->foreign('persona_id')->references('id')->on('personas')->onDelete('cascade');
            $table->unsignedBigInteger('tiposdomicilio_id')->nullable(false);
            $table->foreign('tiposdomicilio_id')->references('id')->on('tiposdomicilios')->onDelete('cascade');
            $table->unsignedBigInteger('paise_id')->nullable(false);
            $table->foreign('paise_id')->references('id')->on('paises')->onDelete('cascade');
            $table->unsignedBigInteger('provincia_id')->nullable(false);
            $table->foreign('provincia_id')->references('id')->on('provincias')->onDelete('cascade');
            $table->unsignedBigInteger('ciudade_id')->nullable(false);
            $table->foreign('ciudade_id')->references('id')->on('ciudades')->onDelete('cascade');
            $table->string('calle', 100)->nullable()->charset('utf8mb4')->collation('utf8mb4_general_ci');
            $table->string('nroCalle', 10)->nullable()->charset('utf8mb4')->collation('utf8mb4_general_ci');
            $table->string('dpto', 5)->nullable()->charset('utf8mb4')->collation('utf8mb4_general_ci');
            $table->string('tira', 5)->nullable()->charset('utf8mb4')->collation('utf8mb4_general_ci');
            $table->string('piso', 5)->nullable()->charset('utf8mb4')->collation('utf8mb4_general_ci');
            $table->string('barrio', 100)->nullable()->charset('utf8mb4')->collation('utf8mb4_general_ci');
            $table->dateTime('fecha')->nullable();
            $table->boolean('bEsDNI')->nullable();
            $table->boolean('bHabitual')->nullable();
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
        Schema::dropIfExists('persdomicilios');
    }
};
