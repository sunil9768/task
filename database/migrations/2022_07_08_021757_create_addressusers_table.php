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
        Schema::create('addressusers', function (Blueprint $table) {
              $table->increments('id');
             $table->unsignedInteger('loginuser_id'); 
             $table->LongText('address'); 
              
             $table->foreign('loginuser_id')->references('id')->on('loginusers')->onDelete('cascade');
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
        Schema::dropIfExists('addressusers');
    }
};
