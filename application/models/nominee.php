<?php

	class Nominee extends Eloquent
	{
		public static $table = 'nominees';
		public static $timestamps = true;

		public function post()
		{
			$this->has_one('Post','post');
		}
	}