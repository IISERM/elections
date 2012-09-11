<?php

class Admin_Controller extends Base_Controller {

	public function action_settings()
	{
		return View::make('admin.settings');
	}

	public function action_result()
	{
		return View::make('admin.results');
	}

	public function action_supdate()
	{
		$user = Student::find(Input::get('id'));
		if($user)
		{
			print("Yes");
		}
		if(Input::get('reg_no')==$user->reg_no)
		{
			print("Maybe");
		}
		if(Input::get('hostel'))
		{
			print("hostel");
		}
		if(Input::get('batch'))
		{
			print("batch");
		}
		if(Input::get('sex'))
		{
			print("sex");
		}
		if($user&&Input::has('hostel')&&Input::has('batch')&&Input::has('sex')&&Input::has('subject')&&Input::get('reg_no')==$user->reg_no)
		{
			$user->hostel = Input::get('hostel');
			$user->batch = Input::get('batch');
			$user->sex = Input::get('sex');
			$user->subject = Input::get('subject');
			$user->save();
			print("Success");
			print_r(Input::all());
			print_r($user);
		}
		else
		{
			print("Failed");
			print_r(Input::all());
		}
	}

	public function action_slist()
	{
		$columns = array('id','first_name','middle_name','last_name','hostel','batch','sex','reg_no','subject');
		$users=Student::with('subject')->get($columns);
		foreach ($users as $user)
		{
			$user = $user->attributes;
			if($user['middle_name'] == NULL)
			{
				$user['middle_name'] = ' ';
			}
			if($user['hostel'] == 1)
			{
				$user['hostel'] = 7;
			}
			if($user['hostel'] == 2)
			{
				$user['hostel'] = 5;
			}
			if($user['batch'] == 1)
			{
				$user['batch'] = 'MS07';
			}
			if($user['batch'] == 2)
			{
				$user['batch'] = 'MS08';
			}
			if($user['batch'] == 3)
			{
				$user['batch'] = 'MS09';
			}
			if($user['batch'] == 4)
			{
				$user['batch'] = 'MS10';
			}
			if($user['batch'] == 5)
			{
				$user['batch'] = 'MS11';
			}
			if($user['batch'] == 6)
			{
				$user['batch'] = 'MS12';
			}
			if($user['sex'] == 0)
			{
				$user['sex'] = 'Female';
			}
			if($user['sex'] == 1)
			{
				$user['sex'] = 'Male';
			}
			$user['subject'] = Subject::find($user['subject'])->subject;
			// print_r($user);
			$user_ref[]=$user;
/*			$u = array(
					'id' => $user->id,
				);
*/		}
		return json_encode($user_ref);
	}

}