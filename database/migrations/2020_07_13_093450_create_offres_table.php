<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateOffresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offres', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('type')->nullable();
            $table->double('prix')->nullable();
            $table->integer('superficie')->nullable();
            $table->integer('capacite')->nullable();
            $table->text('commentaire')->nullable();
            $table->string('suplementaire')->nullable();
            $table->string('tele')->nullable();
            $table->double('adresseX');
            $table->double('adresseY');
            $table->dateTime('dateOffre')->default(DB::raw('CURRENT_TIMESTAMP'))->nullable();
            $table->string('image');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('offres');
    }
}
