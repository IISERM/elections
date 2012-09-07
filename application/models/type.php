<?php

	class Type extends Eloquent
	{
		public static $table = 'types';
		public static $timestamps = true;

		public function categories()
		{
			return $this->has_many_and_belongs_to('Post');
		}
	}