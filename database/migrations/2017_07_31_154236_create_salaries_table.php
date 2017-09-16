<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salaries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('designation_id');
            $table->integer('department_id');
            $table->string('employment_type');
            $table->string('employee_name');
            $table->integer('basic_salary');
            $table->float('transport');
            $table->float('housing');
            $table->float('dressing');
            $table->float('domestic');
            $table->float('education');
            $table->float('furniture');
            $table->float('utilities');
            $table->float('lunch');
            $table->float('tax');
            $table->float('gsm');
            $table->float('nhf');
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
        Schema::dropIfExists('salaries');
    }
}
