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
        Schema::create('persidentificaciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('persona_id')->nullable(false);
            $table->foreign('persona_id')->references('id')->on('personas')->onDelete('cascade');
            $table->unsignedBigInteger('tiposidentificacione_id')->nullable(false);
            $table->foreign('tiposidentificacione_id')->references('id')->on('tiposidentificaciones')->onDelete('cascade');           
            $table->string('nroDocumento', 50)->nullable()->charset('utf8mb4')->collation('utf8mb4_general_ci');
            $table->unsignedBigInteger('ente_id')->nullable(false);
            $table->foreign('ente_id')->references('id')->on('entes')->onDelete('cascade');
            $table->datetime('fechaEmision')->nullable();
            $table->datetime('fechaCaducidad')->nullable();
            $table->string('ejemplar', 5)->nullable()->charset('utf8mb4')->collation('utf8mb4_general_ci');
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
        Schema::dropIfExists('persidentificaciones');
    }
};
