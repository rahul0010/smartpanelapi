<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->date('date_of_birth');
            $table->string('photo');
            $table->decimal('phone',10);
            $table->string('email');
            $table->longText('address');
            $table->decimal('aadhar_no',12);
            $table->integer('batch_id')->unsigned();
            $table->date('admission_date')->useCurrent();
            $table->integer('faculty_id')->unsigned();
            $table->timestamps();

            $table->foreign('batch_id')->references('id')->on('batches');
            $table->foreign('faculty_id')->references('id')->on('faculties');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
