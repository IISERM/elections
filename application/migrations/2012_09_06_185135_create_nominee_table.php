<?php

class Create_Nominee_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nominees',function($table)
		{
			// Autoincrement ID
			$table->increments('id')->unsigned();

			// Name
			$table->string('student_id');

			// Post
			$table->integer('post_id');

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
		Schema::drop('nominees');
	}

}