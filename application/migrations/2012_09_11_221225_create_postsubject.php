<?php

class Create_Postsubject {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('post_subject', function($table)
				{
					$table->increments('id')->unsigned();

					// Post
					$table->string('post_id');

					// Subject
					$table->string('subject_id');
	
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
		Schema::drop('post_subject');
	}

}