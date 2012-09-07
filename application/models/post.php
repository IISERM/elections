<?php

	class Post extends Eloquent
	{
		public static $table = 'posts';
		public static $timestamps = true;

		public function nominees()
		{
			return $this->has_many_and_belongs_to('nominees');
		}
	}