<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('half_price');
            $table->string('full_price');
            $table->string('desc');
            $table->string('pic');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('manager_id');
            $table->boolean('active')->default(1);
            $table->foreign("manager_id")
                ->references("id")
                ->on("employees")
                ->onDelete("CASCADE");

            $table->foreign("category_id")
                ->references("id")
                ->on("categories")
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
        Schema::dropIfExists('items');
    }
}
