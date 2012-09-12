<?php

	class Vote_Controller extends Base_Controller
	{
		// public $restful = true;
		public $error = false;
		public $restful = true;

		public function get_index()
		{
			return View::make('login.elections.elections');
		}

		public function get_details()
		{
			$user = Auth::user();
			$details = array(
					'name' => $user->first_name.' '.$user->middle_name.' '.$user->last_name,
					'hostel' => $user->hostel,
					'batch' => $user->batch,
					'gender' => $user->sex,
					'voted' => $user->voted
				);
			// print_r($user);
			// print_r(json_encode($details));
			return json_encode($details);
		}

		public function get_options()
		{
			$user = Auth::user();
			$options = $user;
			return json_encode($options->to_array());
		}

		public function post_vote()
		{
			//
		}

		public function get_check()
		{
			//
		}
	}
