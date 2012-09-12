<?php

	class Post extends Eloquent
	{
		public static $table = 'posts';
		public static $timestamps = true;

		public function nominees()
		{
			return $this->has_many('Nominee');
		}

		public function subject()
		{
			return $this->has_many_and_belongs_to('Subject','post_subject');
		}

		public function batch()
		{
			return $this->has_many_and_belongs_to('Batch','batch_post');
		}

		public function hostel()
		{
			return $this->has_many_and_belongs_to('Hostel','hostel_post')->with('id','hostel');
		}

	}