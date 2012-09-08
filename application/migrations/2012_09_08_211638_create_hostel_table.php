<?php

class Create_Hostel_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hostels', function($table)
			{
				$table->increments('id')->unsigned();

				// Name
				$table->string('hostel');

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
		Schema::drop('hostels');
	}

}