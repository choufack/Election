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
        Schema::create('participants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('CNI',100);
            $table->string('Nom',100);
            $table->string('Prenom',100);
            $table->integer('Age');
            $table->char('Sexe',1)-> default('M');
            $table->string('Status',1)-> default('E');
            $table->unsignedInteger('id_region');
            $table->foreign('id_region')-> references('id') ->on ('region') -> onDelete('cascade');
            $table->string('Login',30);
            $table->string('Mdp',100);
            $table->string('Etat',1)->default('0');
            $table->string('Email',30)->nullable();
            $table->string('Telephone',15)->nullable();
            $table->unsignedInteger('id_votes');
            $table->foreign('id_votes')-> references('id') ->on ('votes') -> onDelete('cascade');
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
