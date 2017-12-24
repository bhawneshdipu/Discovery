<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->bigInteger('mobile')->unique();
            $table->string('gov_id');
            $table->string('gov_id_type');
            $table->unsignedInteger('manager_id');
            $table->string('desc');
            $table->string('is_super');
            $table->timestamp('last_login');
            $table->foreign("manager_id")
                    ->references("id")
                    ->on("employees")
                    ->onDelete("CASCADE");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
