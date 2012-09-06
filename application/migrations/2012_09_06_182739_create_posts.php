<?php

class Create_Posts {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function($table)
		{
			// Autoincrement ID
			$table->increments('id')->unsigned();

			// Post
			$table->string('post');

			// Hostels
			$table->integer('hostel')->length(1);

			// Batch
			$table->integer('batch')->length(4);

			// Timestamps
			$table->timestamps();
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posts');
	}

}