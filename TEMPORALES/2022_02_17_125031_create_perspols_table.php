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
        Schema::create('perspols', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('persona_id')->nullable(false);
            $table->foreign('persona_id')->references('id')->on('personas')->onDelete('cascade');
            $table->unsignedInteger('legajo')->nullable(false);
            $table->unsignedInteger('legajoHistorico')->nullable(false);
            $table->unsignedInteger('nroVacante')->nullable(false);
            $table->datetime('fechaIngreso', 0)->nullable();
            $table->datetime('fechaEgreso', 0)->nullable();
            $table->unsignedBigInteger('ingresoley_id')->nullable(false);
            $table->foreign('ingresoley_id')->references('id')->on('ingresoleys')->onDelete('cascade');
            $table->unsignedBigInteger('escalafone_id')->nullable(false);
            $table->foreign('escalafone_id')->references('id')->on('escalafones')->onDelete('cascade');
            $table->datetime('fechaUlt5DGRH', 0)->nullable();
            $table->datetime('fechaNombramiento', 0)->nullable();
            $table->unsignedBigInteger('jerarquia_id')->nullable(false);
            $table->foreign('jerarquia_id')->references('id')->on('jerarquiasxescalafons')->onDelete('cascade');
            $table->unsignedBigInteger('cargo_id')->nullable(false);
            $table->foreign('cargo_id')->references('id')->on('cargos')->onDelete('cascade');
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
        Schema::dropIfExists('perspols');
    }
};
