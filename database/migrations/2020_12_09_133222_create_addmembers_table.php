<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddmembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addmembers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('age');
            $table->string('phone');
            $table->string('gender');
            $table->string('dateofbirth');
            $table->string('religion');
            $table->string('email');
            $table->string('occupation');
            $table->string('country');
            $table->string('bloodgroup');
            $table->float('hight');
            $table->string('address');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('addmembers');
    }
}
