<?php

class Create_Subject_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('subjects', function($table)
			{
				$table->increments('id')->unsigned();

				// Name
				$table->string('subject');

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
		Schema::drop('subjects');
	}

}