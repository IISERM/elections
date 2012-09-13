<?php

class Create_Student_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// Creating Students table for Login Page
		Schema::create('students', function($table)
		{
			// Autoincrement ID
			$table->increments('id')->unsigned();

			// Name
			$table->string('first_name');
			$table->string('middle_name')->nullable();
			$table->string('last_name')->nullable();

			// Registration Number
			$table->string('reg_no')->unique();

			// Role
			$table->integer('role');

			// Role (1 - Monkey, 0 - Human)
			$table->integer('voted')->boolean();

			// Hostel
			$table->integer('hostel')->length(1);

			// Batch
			$table->integer('batch')->length(4);

			// Subject
			$table->integer('subject')->default(5);

			// Sex
			$table->integer('sex')->length(1)->default(1);

			// Email ID and Password
			$table->string('password')->nullable()->length(64);

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
		// Dropping Students table to go back to Stone Age
		Schema::drop('students');
	}

}