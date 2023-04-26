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
        Schema::create('participant', function (Blueprint $table) {
            $table->increments('id');
            $table->string('CNI',100);
            $table->string('Nom',100);
            $table->string('Prenom',100);
            $table->integer('Age');
            $table->char('Sexe',1)-> default('M');
            $table->String('Status',1)-> default('E');
            $table->unsignedInteger('id_region');
            $table->foreign('id_region')-> references('id') ->on ('region') -> onDelete('cascade');
            $table->string('Login',30);
            $table->string('Mdp',100);
            $table->boolean('Etat',1)->default('0');
            $table->string('Email')->nullable();
            $table->string('Telephone')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participants');
    }
};
