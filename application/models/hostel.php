<?php

	class Hostel extends Eloquent
	{
		public static $table = 'hostels';
		public static $timestamps = true;

		public function students()
		{
			return $this->belongs_to('Student','hostel');
		}

		public function posts()
		{
			return $this->has_many_and_belongs_to('Post','');
		}
	}