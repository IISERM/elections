<?php

	class Batch extends Eloquent
	{
		public static $table = 'batches';
		public static $timestamps = true;

		public function students()
		{
			return $this->has_many('Student');
		}

		public function posts()
		{
			return $this->has_many_and_belongs_to('Post');
		}

		public function subject()
		{
			return $this->has_one('Subject','subject');
		}
	}