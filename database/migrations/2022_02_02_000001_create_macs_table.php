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
        Schema::create('macs', function (Blueprint $table) {
            $table->id();
            $table->string('mac', 17)->nullable(false)->charset('utf8mb4')->collation('utf8mb4_general_ci');
            $table->string('ipv4', 15)->nullable(false)->charset('utf8mb4')->collation('utf8mb4_general_ci');
            $table->string('ipv6', 39)->nullable()->charset('utf8mb4')->collation('utf8mb4_general_ci');
            $table->string('equipo', 50)->nullable()->charset('utf8mb4')->collation('utf8mb4_general_ci');
            $table->string('descripcion', 255)->nullable()->charset('utf8mb4')->collation('utf8mb4_general_ci');
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
        Schema::dropIfExists('macs');
    }
};
