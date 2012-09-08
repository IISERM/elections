<?php

	class Student extends Eloquent
	{
		public static $table = 'students';
		public static $timestamps = true;

		public function hostel()
		{
			return $this->has_one('Hostel');
		}

		public function batch()
		{
			return $this->has_one('Batch');
		}

		public function subject()
		{
			return $this->has_one('Subject');
		}

		public function sex()
		{
			if($this->sex == 1)
			{
				return 'male';
			}
			else
			{
				return 'female';
			}
		}
	}