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
    {    Schema::disableForeignKeyConstraints();
        Schema::create('cours', function (Blueprint $table) {
            $table->id();
            $table->date('dateCours');
            $table->integer('nbreCours');
            $table->string('name_groupe');
            $table->string('type');
            $table->foreign('name_groupe')
                ->references('name_groupe')
                ->on('groupes')
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
        Schema::dropIfExists('cours');
    }
};
