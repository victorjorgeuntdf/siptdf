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
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('persona_id')->after('profile_photo_path')->nullable();
            $table->foreign('persona_id')->references('id')->on('personas')->onDelete('cascade');
            $table->unsignedBigInteger('nivelacceso_id')->after('persona_id')->nullable();
            $table->foreign('nivelacceso_id')->references('id')->on('nivelaccesos')->onDelete('cascade');
            $table->string('descripcion', 255)->after('nivelacceso_id')->nullable()->charset('utf8mb4')->collation('utf8mb4_general_ci');
            $table->dateTime('fechaInicio', 0)->after('descripcion')->nullable();
            $table->dateTime('fechaExpiracion', 0)->after('fechaInicio')->nullable();
            $table->unsignedBigInteger('mac_id')->after('fechaExpiracion')->nullable();
            $table->foreign('mac_id')->references('id')->on('macs')->onDelete('cascade');
            $table->unsignedBigInteger('user_id')->after('mac_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('regEstado_id')->after('user_id')->nullable();
            $table->foreign('regEstado_id')->references('id')->on('regestados')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('persona_id', 'nivelacceso_id', 'mac_id', 'user_id', 'regEstado_id');
            $table->dropColumn('persona_id', 'nivelacceso_id', 'descripcion', 'fechaInicio', 'fechaExpiracion', 'mac_id', 'user_id', 'regEstado_id');
        });
    }
};
