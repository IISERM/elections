<?php

class Create_Batch_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('batches', function($table)
			{
				$table->increments('id')->unsigned();

				// Name
				$table->string('batch');

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
		Schema::drop('batches');
	}

}