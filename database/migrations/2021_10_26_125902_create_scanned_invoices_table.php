<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScannedInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scanned_invoices', function (Blueprint $table) {
            $table->id();
            $table->string('scanned');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::table('scanned_invoices',function(Blueprint $table){
            $table->dropForeign(['user_id']);
        });
        Schema::dropIfExists('scanned_invoices');
    }
}
