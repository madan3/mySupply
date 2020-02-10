<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCriteriaItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('criteria_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('item_name');
            $table->unsignedBigInteger('criteria_id')->unsigned()->index();
            $table->foreign('criteria_id')->references('id')->on('criterias')->onDelete('cascade');
            $table->double('item_value_percentage', 10, 2);
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
        Schema::dropIfExists('criteria_items');
    }
}
