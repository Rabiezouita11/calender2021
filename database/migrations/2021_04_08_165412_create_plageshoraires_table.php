<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlageshorairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plageshoraires', function (Blueprint $table) {
            $table->id();
            $table->string('jour');
            $table->string('heure_debut');
            $table->string('heure_fin');
            $table->date('date');
            $table->integer('nmbreprof')->default(0);
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
       
    }
}
