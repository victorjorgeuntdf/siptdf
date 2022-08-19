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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100)->nullable(false)->charset('utf8mb4')->collation('utf8mb4_general_ci');
            $table->string('apellido', 100)->nullable(false)->charset('utf8mb4')->collation('utf8mb4_general_ci');
            $table->unsignedBigInteger('nroProntuario')->nullable();
            $table->dateTime('fechaNac')->nullable();
            $table->unsignedBigInteger('sexobio_id')->nullable(false);
            $table->foreign('sexobio_id')->references('id')->on('sexobios')->onDelete('cascade');
            $table->unsignedBigInteger('expresiongenero_id')->nullable(false);
            $table->foreign('expresiongenero_id')->references('id')->on('expresiongeneros')->onDelete('cascade');
            $table->unsignedBigInteger('estadoscivile_id')->nullable(false);
            $table->foreign('estadoscivile_id')->references('id')->on('estadosciviles')->onDelete('cascade');
            $table->string('email', 100)->nullable()->charset('utf8mb4')->collation('utf8mb4_general_ci');
            $table->dateTime('fechaDesceso')->nullable();
            $table->unsignedBigInteger('ciudadIdent_id')->nullable(false);
            $table->foreign('ciudadIdent_id')->references('id')->on('ciudades')->onDelete('cascade');
            $table->dateTime('fechaIdentif')->nullable();
            $table->unsignedBigInteger('gruposanguineo_id')->nullable(false);
            $table->foreign('gruposanguineo_id')->references('id')->on('gruposanguineos')->onDelete('cascade');
            $table->unsignedInteger('nroCalzado')->nullable();
            $table->unsignedBigInteger('lente_id')->nullable(false);
            $table->foreign('lente_id')->references('id')->on('lentes')->onDelete('cascade');
            $table->unsignedInteger('cuil0')->nullable();
            $table->unsignedInteger('cuil1')->nullable();
            $table->float('peso', 3,2)->nullable();
            $table->float('estatura', 2,2)->nullable();
            $table->dateTime('fechaAlta')->nullable();
            $table->dateTime('fechaModif')->nullable();
            $table->unsignedBigInteger('nacPais_id')->nullable(false);
            $table->foreign('nacPais_id')->references('id')->on('paises')->onDelete('cascade');
            $table->unsignedBigInteger('nacProv_id')->nullable(false);
            $table->foreign('nacProv_id')->references('id')->on('provincias')->onDelete('cascade');
            $table->unsignedBigInteger('nacCiudad_id')->nullable(false);
            $table->foreign('nacCiudad_id')->references('id')->on('ciudades')->onDelete('cascade');
            $table->unsignedBigInteger('lateralidade_id')->nullable(false);
            $table->foreign('lateralidade_id')->references('id')->on('lateralidades')->onDelete('cascade');
            $table->string('identidadDactiloscopica', 50)->nullable()->charset('utf8mb4')->collation('utf8mb4_general_ci');
            $table->string('cbu', 50)->nullable()->charset('utf8mb4')->collation('utf8mb4_general_ci');
            $table->unsignedBigInteger('usuarioIdentif_id')->nullable(false);
            $table->foreign('usuarioIdentif_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('observaciones', 255)->nullable()->charset('utf8mb4')->collation('utf8mb4_general_ci');
            $table->string('motivoIngPcia', 255)->nullable()->charset('utf8mb4')->collation('utf8mb4_general_ci');
            $table->string('catLicCond', 10)->nullable()->charset('utf8mb4')->collation('utf8mb4_general_ci');
            $table->string('nroLicCond', 20)->nullable()->charset('utf8mb4')->collation('utf8mb4_general_ci');
            $table->string('expXLicCond', 100)->nullable()->charset('utf8mb4')->collation('utf8mb4_general_ci');
            $table->date('fechaExpLicCond')->nullable();
            $table->unsignedBigInteger('usoarmasfuego_id')->nullable(false);
            $table->foreign('usoarmasfuego_id')->references('id')->on('usoarmasfuegos')->onDelete('cascade');
            $table->unsignedBigInteger('vive_id')->nullable(false);
            $table->foreign('vive_id')->references('id')->on('vives')->onDelete('cascade');
            $table->string('motivoIdentificacion', 100)->nullable()->charset('utf8mb4')->collation('utf8mb4_general_ci');
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
        Schema::dropIfExists('personas');
    }
};
