<?php

	class Student extends Eloquent
	{
		public static $table = 'students';
		public static $timestamps = true;

		public function hostel()
		{
			return $this->has_one('Hostel','hostel');
		}

		public function batch()
		{
			return $this->has_one('Batch','batch');
		}

		public function subject()
		{
			return $this->has_one('Subject','subject');
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

		public function page()
		{
			$this->data = array(
				'id' => $user->id,
				'first_name' => $user->first_name,
				'middle_name' => $user->middle_name,
				'last_name' => $user->last_name,
				// 'hostel' = $user->hostel()->name,
				);
			return $this->data;
		}
	}