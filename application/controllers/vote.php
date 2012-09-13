<?php

	class Vote_Controller extends Base_Controller
	{
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
					'hostel' => Hostel::find($user->hostel)->hostel,
					'batch' => Batch::find($user->batch)->batch,
					'gender' => ($user->sex == 1) ? 'Male' : 'Female',
					'voted' => $user->voted
				);
			return json_encode($details);
		}

		public function get_options()
		{
			$user = Auth::user();
			$options = Post::all();
			$nom = Nominee::all();
			$data = array();
			foreach($options as $option)
			{
				$op = array();
				if($option->hostel()->pivot()->where('hostel_id','=',$user->hostel)->count() == 1)
				{
					if($option->batch()->pivot()->where('batch_id','=',$user->batch)->count() == 1)
					{
						if($option->subject()->pivot()->where('subject_id','=',$user->subject)->count() == 1)
						{
							foreach($nom as $n)
							{
								if($n->post_id == $option->id)
								{
									$student = Student::find($n->student_id);
									$name = $student->first_name.' '.$student->middle_name.' '.$student->last_name;
									$op[] = array(
											'id' => $n->id,
											'name' => $name,
											'link' => $student->reg_no.'.jpg',
											'reg_no' => $student->reg_no
										);
								}
							}
							$data[] = array(
									'id' => $option->id,
									'title' => $option->post,
									'selected' => array('id' => -1),
									'list' => $op
								);
							$op = array();
						}
					}
				}
			}
			return json_encode($data);
		}

		public function post_vote()
		{
			$user = Auth::user();

			// if($user->voted == 0)
			// {
			// 	$votes = Input::json_decode(Input::get('vote'));
			// 	$name = Crypter::encrypt($user->password);
			// 	$voter = new Vote;
			// 	$voter->vote = $name;
			// 	$voter->save();
			// 	foreach($votes as $vote)
			// 	{
			// 		$votec = Votec::create(
			// 				array(
			// 						'post_id' => $vote->id,
			// 						'nominee_id' => $vote->selected->id,
			// 						'votes_id' => $voter->id
			// 					)
			// 			);
			// 		$votec->save();
			// 	}
			// 	$user->voted = 1;
			// 	return "Your vote has been casted. Your pseudo name is: ".$name;
			// }
			// else
			// {
			// 	return "Already Voted";
			// }
		}

		public function get_check()
		{
			//
		}
	}
