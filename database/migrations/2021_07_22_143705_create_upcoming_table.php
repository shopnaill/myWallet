<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpcomingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upcoming', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('start_at')->nullable();
            $table->float('amount')->nullable();
            $table->string('info')->nullable();
            $table->integer('type')->nullable();
            $table->integer('state')->nullable();

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('upcoming');
    }
}
