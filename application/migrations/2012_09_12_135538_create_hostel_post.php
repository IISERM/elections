<?php

class Create_Hostel_Post {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hostel_post', function($table)
				{
					$table->increments('id')->unsigned();

					// Post
					$table->string('post_id');

					// Subject
					$table->string('hostel_id');
	
					// Timestamps
					$table->timestamps();
				}
			);
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hostel_post');
	}


// 

}