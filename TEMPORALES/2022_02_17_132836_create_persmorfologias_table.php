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
        Schema::create('persmorfologias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('persona_id')->nullable(false);
            $table->foreign('persona_id')->references('id')->on('personas')->onDelete('cascade');
            $table->unsignedBigInteger('disidencia_id')->nullable(false);
            $table->foreign('disidencia_id')->references('id')->on('disidencias')->onDelete('cascade');
            $table->unsignedBigInteger('cuti_id')->nullable(false);
            $table->foreign('cuti_id')->references('id')->on('cutis')->onDelete('cascade');
            $table->unsignedBigInteger('barbatamanio_id')->nullable(false);
            $table->foreign('barbatamanio_id')->references('id')->on('barbatamanios')->onDelete('cascade');
            $table->unsignedBigInteger('barbaforma_id')->nullable(false);
            $table->foreign('barbaforma_id')->references('id')->on('barbaformas')->onDelete('cascade');
            $table->unsignedBigInteger('frenteinsercione_id')->nullable(false);
            $table->foreign('frenteinsercione_id')->references('id')->on('frenteinserciones')->onDelete('cascade');
            $table->unsignedBigInteger('frentehorizontale_id')->nullable(false);
            $table->foreign('frentehorizontale_id')->references('id')->on('frentehorizontales')->onDelete('cascade');
            $table->unsignedBigInteger('frenteverticale_id')->nullable(false);
            $table->foreign('frenteverticale_id')->references('id')->on('frenteverticales')->onDelete('cascade');
            $table->unsignedBigInteger('frenteforma_id')->nullable(false);
            $table->foreign('frenteforma_id')->references('id')->on('frenteformas')->onDelete('cascade');
            $table->unsignedBigInteger('parpadoabertura_id')->nullable(false);
            $table->foreign('parpadoabertura_id')->references('id')->on('parpadoaberturas')->onDelete('cascade');
            $table->unsignedBigInteger('parpadomodelado_id')->nullable(false);
            $table->foreign('parpadomodelado_id')->references('id')->on('parpadomodelados')->onDelete('cascade');
            $table->unsignedBigInteger('bocatamanio_id')->nullable(false);
            $table->foreign('bocatamanio_id')->references('id')->on('bocatamanios')->onDelete('cascade');
            $table->unsignedBigInteger('bocacomisura_id')->nullable(false);
            $table->foreign('bocacomisura_id')->references('id')->on('bocacomisuras')->onDelete('cascade');            
            $table->unsignedBigInteger('cuerpo_id')->nullable(false);
            $table->foreign('cuerpo_id')->references('id')->on('cuerpos')->onDelete('cascade');
            $table->unsignedBigInteger('cabellotipo_id')->nullable(false);
            $table->foreign('cabellotipo_id')->references('id')->on('cabellotipos')->onDelete('cascade');
            $table->unsignedBigInteger('cabellolongitude_id')->nullable(false);
            $table->foreign('cabellolongitude_id')->references('id')->on('cabellolongitudes')->onDelete('cascade');
            $table->unsignedBigInteger('ojosforma_id')->nullable(false);
            $table->foreign('ojosforma_id')->references('id')->on('ojosformas')->onDelete('cascade');
            $table->unsignedBigInteger('ojoscromatico_id')->nullable(false);
            $table->foreign('ojoscromatico_id')->references('id')->on('ojoscromaticos')->onDelete('cascade');
            $table->unsignedBigInteger('ojosestrabismo_id')->nullable(false);
            $table->foreign('ojosestrabismo_id')->references('id')->on('ojosestrabismos')->onDelete('cascade');
            $table->unsignedBigInteger('narizraice_id')->nullable(false);
            $table->foreign('narizraice_id')->references('id')->on('narizraices')->onDelete('cascade');
            $table->unsignedBigInteger('narizdorso_id')->nullable(false);
            $table->foreign('narizdorso_id')->references('id')->on('narizdorsos')->onDelete('cascade');
            $table->unsignedBigInteger('narizbase_id')->nullable(false);
            $table->foreign('narizbase_id')->references('id')->on('narizbases')->onDelete('cascade');
            $table->unsignedBigInteger('nariztamanio_id')->nullable(false);
            $table->foreign('nariztamanio_id')->references('id')->on('nariztamanios')->onDelete('cascade');
            $table->unsignedBigInteger('mentonforma_id')->nullable(false);
            $table->foreign('mentonforma_id')->references('id')->on('mentonformas')->onDelete('cascade');
            $table->unsignedBigInteger('mentonaltura_id')->nullable(false);
            $table->foreign('mentonaltura_id')->references('id')->on('mentonalturas')->onDelete('cascade');
            $table->unsignedBigInteger('mentonpart_id')->nullable(false);
            $table->foreign('mentonpart_id')->references('id')->on('mentonparts')->onDelete('cascade');
            $table->unsignedBigInteger('orejatamanio_id')->nullable(false);
            $table->foreign('orejatamanio_id')->references('id')->on('orejatamanios')->onDelete('cascade');
            $table->unsignedBigInteger('orejaforma_id')->nullable(false);
            $table->foreign('orejaforma_id')->references('id')->on('orejaformas')->onDelete('cascade');
            $table->unsignedBigInteger('orejahelix_id')->nullable(false);
            $table->foreign('orejahelix_id')->references('id')->on('orejahelixs')->onDelete('cascade');
            $table->unsignedBigInteger('rostro_id')->nullable(false);
            $table->foreign('rostro_id')->references('id')->on('rostros')->onDelete('cascade');
            $table->unsignedBigInteger('cejasforma_id')->nullable(false);
            $table->foreign('cejasforma_id')->references('id')->on('cejasformas')->onDelete('cascade');
            $table->unsignedBigInteger('cejaspilosidade_id')->nullable(false);
            $table->foreign('cejaspilosidade_id')->references('id')->on('cejaspilosidades')->onDelete('cascade');
            $table->unsignedBigInteger('cejasubicacione_id')->nullable(false);
            $table->foreign('cejasubicacione_id')->references('id')->on('cejasubicaciones')->onDelete('cascade');
            $table->unsignedBigInteger('cejascromatica_id')->nullable(false);
            $table->foreign('cejascromatica_id')->references('id')->on('cejascromaticas')->onDelete('cascade');
            $table->unsignedBigInteger('orejalobulo_id')->nullable(false);
            $table->foreign('orejalobulo_id')->references('id')->on('orejalobulos')->onDelete('cascade');
            $table->unsignedBigInteger('narizorificio_id')->nullable(false);
            $table->foreign('narizorificio_id')->references('id')->on('narizorificios')->onDelete('cascade');
            $table->unsignedBigInteger('narizpunta_id')->nullable(false);
            $table->foreign('narizpunta_id')->references('id')->on('narizpuntas')->onDelete('cascade');
            $table->unsignedBigInteger('nariztabique_id')->nullable(false);
            $table->foreign('nariztabique_id')->references('id')->on('nariztabiques')->onDelete('cascade');
            $table->unsignedBigInteger('mejillaforma_id')->nullable(false);
            $table->foreign('mejillaforma_id')->references('id')->on('mejillaformas')->onDelete('cascade');
            $table->unsignedBigInteger('mejillatamanio_id')->nullable(false);
            $table->foreign('mejillatamanio_id')->references('id')->on('mejillatamanios')->onDelete('cascade');
            $table->unsignedBigInteger('bocaphiltrum_id')->nullable(false);
            $table->foreign('bocaphiltrum_id')->references('id')->on('bocaphiltrums')->onDelete('cascade');
            $table->unsignedBigInteger('labiosSupTamanio_id')->nullable(false);
            $table->foreign('labiosSupTamanio_id')->references('id')->on('labiostamanios')->onDelete('cascade');
            $table->unsignedBigInteger('labiosInfTamanio_id')->nullable(false);
            $table->foreign('labiosInfTamanio_id')->references('id')->on('labiostamanios')->onDelete('cascade');
            $table->unsignedBigInteger('labiosSupProminente_id')->nullable(false);
            $table->foreign('labiosSupProminente_id')->references('id')->on('labiosprominentes')->onDelete('cascade');
            $table->unsignedBigInteger('labiosInfProminente_id')->nullable(false);
            $table->foreign('labiosInfProminente_id')->references('id')->on('labiosprominentes')->onDelete('cascade');
            $table->unsignedBigInteger('labiosforma_id')->nullable(false);
            $table->foreign('labiosforma_id')->references('id')->on('labiosformas')->onDelete('cascade');
            $table->unsignedBigInteger('barbacolore_id')->nullable(false);
            $table->foreign('barbacolore_id')->references('id')->on('barbacolores')->onDelete('cascade');
            $table->unsignedBigInteger('bigotetamanio_id')->nullable(false);
            $table->foreign('bigotetamanio_id')->references('id')->on('bigotetamanios')->onDelete('cascade');
            $table->unsignedBigInteger('bigoteforma_id')->nullable(false);
            $table->foreign('bigoteforma_id')->references('id')->on('bigoteformas')->onDelete('cascade');
            $table->unsignedBigInteger('bigotecolore_id')->nullable(false);
            $table->foreign('bigotecolore_id')->references('id')->on('bigotecolores')->onDelete('cascade');         
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
        Schema::dropIfExists('persmorfologias');
    }
};
