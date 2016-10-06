<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('users')) Schema::drop('users');
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pseudo')->unique();
            $table->string('password');
            $table->string('name');
            $table->string('firstname');
            $table->string('email')->unique();
            $table->integer('phone');
            $table->string('address');
            $table->string('city');
            $table->integer('zipcode');
            $table->binary('image')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        if(Schema::hasTable('contributor')) Schema::drop('contributor');
        Schema::create('contributor',function (Blueprint $table){
            $table->increments('id');
            $table->integer('userid')->unsigned();
            $table->foreign('userid')->references('id')->on('users');
            $table->string('device');
            $table->string('experience',200);
        });


        if(Schema::hasTable('service')) Schema::drop('service');
        Schema::create('service',function (Blueprint $table){
            $table->increments('id');
            $table->enum('choices', array('computer', 'cloud','box','periph','smartphone','connect','smarttv'))->nullable(false)->change();

        });


        if(Schema::hasTable('avis')) Schema::drop('avis');
        Schema::create('avis', function (Blueprint $table){
            $table->increments('id');
            $table->integer('contributorid')->unsigned();
            $table->foreign('contributorid')->references('id')->on('contributor');
            $table->string('message');
            $table->integer('mark')->nullable(false)->change();
        });


        if(Schema::hasTable('operation')) Schema::drop('operation');
        Schema::create('operation',function (Blueprint $table){
            $table->increments('id');
            $table->integer('serviceid')->unsigned();

            $table->foreign('serviceid')->references('id')->on('service');
            $table->timestamp('timestamp');
            $table->enum('choices', array('pending', 'accepted','processing','done','cancelled'))->nullable(false)->change();
            $table->string('message',500);
            $table->integer('customer')->unsigned();
            $table->foreign('customer')->references('id')->on('users');
            $table->integer('contributorid')->unsigned();
            $table->foreign('contributorid')->references('id')->on('contributor');
            $table->integer('avisid')->unsigned();

            $table->foreign('avisid')->references('id')->on('avis');
            $table->double('prix');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
        Schema::drop('contributor');
        Schema::drop('service');
        Schema::drop('avis');
        Schema::drop('operation');
    }
}
