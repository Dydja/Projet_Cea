<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturesTable extends Migration
{
    /**
     * Run the migrations.
     * user_id ici represente le gerant
     * @return void
     */
    public function up()
    {
        Schema::create('factures', function (Blueprint $table) {
            $table->id();
            $table->string('cout_prestation');
            $table->string('frais_dossier');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('clients');
            $table->string('amount_total');
            $table->timestamps();
        });

         /**
         * Activons les clÃ©s etrangeres
         *
         * @return void
         */
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('factures',function(Blueprint $table){
            $table->dropForeign(['user_id']);

        });
        Schema::dropIfExists('factures');
    }
}
