<?php

	class Subject extends Eloquent
	{
		public static $table = 'subjects';
		public static $timestamps = true;

		public function batch()
		{
			return $this->has_many_and_belongs_to('Batch');
		}

		public function students()
		{
			return $this->has_many('Students');
		}
	}