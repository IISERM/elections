<?php

class Create_Votesmachine {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('votec', function($table)
				{
					$table->increments('id')->unsigned();

					// Post
					$table->string('post_id');

					// Nominee
					$table->string('nominee_id');

					// Votes
					$table->integer('votes_id');
	
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
		//
	}

}