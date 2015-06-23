<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('books', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->integer('user_id')->unsigned;
                        $table->string('title');
                        $table->string('author');
                        $table->integer('rating');
                        $table->string('comments');
                        $table->string('genre');
			$table->timestamps();
                        $table->timestamp('read_at');
                        
                        $table->foreign('user_id')
                              ->references('id')
                              ->on('users')
                              ->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('books');
	}

}
