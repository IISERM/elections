<?php

class Create_Types {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('types', function($table)
			{
				$table->increments('id')->unsigned();
				$table->integer('voted')->boolean();
				$table->integer('hostel')->length(1);
				$table->integer('batch')->length(4);
				$table->integer('sex')->length(1);
			});

		Schema::create('post_type', function($table)
			{
				$table->increments('id')->unsigned();
				$table->integer('post_id')->unsigned();
				$table->integer('type_id')->unsigned();
			});

		Schema::create('nominee_post', function($table)
			{
				$table->increments('id')->unsigned();
				$table->integer('post_id')->unsigned();
				$table->integer('nominee_id')->unsigned();
			});

	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('types');
		Schema::drop('post_type');
		Schema::drop('nominee_post');
	}

}