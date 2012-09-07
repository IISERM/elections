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

			// 0 - All; 5 - 5, 7 - 7

			// Batch
			$table->integer('batch')->length(4);

			// 0000 - ALL
			// 2011 - MS 11
			// 2012 - MS 12
			// 5001 - MS PHY
			// 5002 - MS MTH
			// 5003 - MS BIO
			// 5004 - MS CHM
			// 9001 - PHD PHY
			// 9002 - PHD MTH
			// 9003 - PHD BIO
			// 9004 - PHD CHM

			$table->boolean('male');

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