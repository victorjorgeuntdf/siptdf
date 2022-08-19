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
        Schema::create('persextrajeros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('persona_id')->nullable(false);
            $table->foreign('persona_id')->references('id')->on('personas')->onDelete('cascade');
            $table->unsignedBigInteger('categoriaingreso_id')->nullable(false);
            $table->foreign('categoriaingreso_id')->references('id')->on('categoriaingresos')->onDelete('cascade');
            $table->unsignedBigInteger('radicado_id')->nullable(false);
            $table->foreign('radicado_id')->references('id')->on('radicados')->onDelete('cascade');
            $table->unsignedBigInteger('nacionalizado_id')->nullable(false);
            $table->foreign('nacionalizado_id')->references('id')->on('nacionalizados')->onDelete('cascade');
            $table->string('procedenciaPais', 100)->nullable()->charset('utf8mb4')->collation('utf8mb4_general_ci');
            $table->string('medioArriboPais', 100)->nullable()->charset('utf8mb4')->collation('utf8mb4_general_ci');
            $table->datetime('fechaIngresoPais')->nullable();
            $table->string('procedenciaPcia', 100)->nullable()->charset('utf8mb4')->collation('utf8mb4_general_ci');
            $table->string('medioArriboPcia', 100)->nullable()->charset('utf8mb4')->collation('utf8mb4_general_ci');
            $table->datetime('fechaIngresoPcia')->nullable();
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
        Schema::dropIfExists('persextrajeros');
    }
};
