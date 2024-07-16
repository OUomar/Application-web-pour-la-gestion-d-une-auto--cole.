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
        Schema::create('moniteurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom_prenom');
            $table->string('user_name');
            $table->string('cin')->unique();
            $table->string('email')->unique();
            $table->string('adresse');
            $table->string('N_telephone');
            $table->date('date_naissance');
            $table->string('password');
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
        Schema::dropIfExists('moniteurs');
    }
};
