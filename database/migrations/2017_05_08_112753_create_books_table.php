<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
    		$table->increments('id');
		$table->string('isbn',100)->unique();
    		$table->string('title',200);
    		$table->string('author',200);
    		$table->string('publisher',200);
    		$table->string('image',45);
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
        Schema::dropIfExists('users');
    }
}
