<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Emailmigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


            Schema::create('contact', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('subject');
                $table->string('people');
                $table->string('message');
                $table->string('time');
                $table->rememberToken();
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

        {
            Schema::dropIfExists('contact');
        }
    }
}
