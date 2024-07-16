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
    {Schema::disableForeignKeyConstraints();
        Schema::create('groupes', function (Blueprint $table) {
            $table->id();
            $table->string('name_groupe')->unique();
            $table->unsignedBigInteger('id_moniteur');
            $table->foreign('id_moniteur')
            ->references('id')
            ->on('vehicules')
            ->onDelete('cascade')
            ->onUpdate('cascade');
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
        Schema::dropIfExists('groupes');
    }
};