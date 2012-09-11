<?php

	class Vote_Controller extends Base_Controller
	{
		// public $restful = true;
		public $error = false;

		public function action_index()
		{
			return View::make('login.elections.elections');
		}

		public function action_details()
		{
			$user = Auth::user();
			$details = array(
					'name' => $user->first_name.' '.$user->middle_name.' '.$user->last_name,
					'hostel' => $user->hostel(),
					'batch' => $user->batch(),
					'gender' => $user->sex(),
					'voted' => $user->voted
				);
			return json_encode($details);
		}

		public function action_options()
		{
			$user = Auth::user();
			$options = $user;
			return json_encode($options->to_array());
		}

		public function action_vote()
		{
			//
		}

		public function action_check()
		{
			//
		}
	}
