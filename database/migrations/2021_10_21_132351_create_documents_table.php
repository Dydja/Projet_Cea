<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('file');
            $table->foreignId('gerant_id')->constrained('gerants');
            $table->string('status')->default('en attente');
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
        Schema::table('documents',function(Blueprint $table){
            $table->dropForeign(['user_id']);
        });

        Schema::table('gerants',function(Blueprint $table){
            $table->dropForeign(['gerant_id']);
        });
        Schema::dropIfExists('documents');
    }
}
