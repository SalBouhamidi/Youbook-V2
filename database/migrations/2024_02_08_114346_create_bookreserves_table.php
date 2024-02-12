<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookreserves', function (Blueprint $table) {
            // $table->timestamps();
            $table->engine = "InnoDB";
            $table->increments('id'); 
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->integer('livres_id')->unsigned();
            $table->foreign('livres_id')->references('id')->on('livres')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->date('start_date');
            $table->date('end_date');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('bookreserves');
    }
};
