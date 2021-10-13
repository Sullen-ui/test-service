<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->integer('archive')->default(0);
            $table->timestamps();
            $table->string('sname');
            $table->string('name');
            $table->string('lname');
            $table->string('gender');
            $table->string('bdate');
            $table->string('phone');
            $table->string('snils');
            $table->string('document');
            $table->string('dserial');
            $table->string('dnumber');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
