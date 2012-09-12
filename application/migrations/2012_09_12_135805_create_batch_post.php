<?php

class Create_Batch_Post {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('batch_post', function($table)
				{
					$table->increments('id')->unsigned();

					// Post
					$table->string('post_id');

					// Subject
					$table->string('batch_id');
	
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
		Schema::drop('batch_post');
	}

}