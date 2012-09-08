<?php

class Create_Votes_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('votes', function($table)
			{
				$table->increments('id')->unsigned();

				// Name
				$table->string('vote');

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
		Schema::drop('votes');
	}

}