<?php

class Admin_Controller extends Base_Controller {

	public $restful = true;

	public function get_settings()
	{
		return View::make('admin.settings');
	}

	public function get_result()
	{
		return View::make('admin.results');
	}

	public function post_supdate()
	{
		$user = Student::find(Input::get('id'));
		if($user&&Input::has('hostel')&&Input::has('batch')&&Input::has('sex')&&Input::has('subject')&&Input::has('reg_no')&&Input::has('ajax'))
		{
			$user->hostel = Input::get('hostel');
			$user->batch = Input::get('batch');
			$user->sex = Input::get('sex');
			$user->subject = Input::get('subject');
			$user->reg_no = Input::get('reg_no');
			$user->save();
			print("Success");
			// print_r(Input::all());
			// print_r($user);
		}
		else
		{
			print("Failed");
			// print_r(Input::all());
		}
	}

	public function post_slist()
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
			/*$u = array(
					'id' => $user->id,
				);*/
		}
		return json_encode($user_ref);
	}

	public function post_sadd()
	{
		$user = new Student;
		$user->first_name = Input::get('first_name');
		$user->middle_name = Input::get('middle_name');
		$user->last_name = Input::get('last_name');
		$user->batch = Input::get('batch');
		$user->hostel = Input::get('hostel');
		$user->sex = Input::get('sex');
		$user->reg_no = Input::get('reg_no');
		if($user->save())
			return 'Success';
		else
			return 'fail';
	}

	public function post_sdel()
	{
		$user = Student::find(Input::get('id'));
		if($user->delete())
			return 'Success';
		else
			return 'fail';
	}

	public function post_padd()
	{
		$input = json_decode((Input::get('post')));
		$post = new Post(array('post' => $input->name));
		$post->save();
		$hostel = array();
		$batch = array();
		$subject = array();
		$par = $input->hostels;
		foreach ($par as $p)
		{
			if($p->select==true)
			{
				$hostel[] = Hostel::where('hostel', '=', $p->name)->first()->id;
			}
		}
		$par = $input->batches;
		foreach ($par as $p)
		{
			if($p->select==true)
			{
				$batch[] = Batch::where('batch', '=', $p->name)->first()->id;
			}
		}
		$par = $input->subjects;
		foreach ($par as $p)
		{
			if($p->select==true)
			{
				$subject[] = Subject::where('subject', '=', $p->name)->first()->id;
			}
		}
		$post->hostel()->sync($hostel);
		$post->batch()->sync($batch);
		$post->subject()->sync($subject);
		$post->save();
		return 'Success';
	}

	public function post_plist()
	{
		$posts = Post::with(array('hostel','batch','subject'))->all();
		// print_r($posts);
		$d = array();
		$data = array();
		$hostels = Hostel::all();
		$batches = Batch::all();
		$subjects = Subject::all();
		foreach ($posts as $post)
		{
			$data = array(
					'id' => $post->id,
					'name' => $post->post,
					'number' => $post->number
				);
			$h = array();
			foreach ($hostels as $hostel)
			{
				$v = $post->hostel()->pivot()->where('post_id','=',$post->id)->where('hostel_id','=',$hostel->id)->count();
				$val = ($v == 1);
				$h[] = array(
						'select' => $val,
						'name' => $hostel->hostel
					);
			}
			$data['hostels'] = $h;
			$b = array();
			foreach ($batches as $batch)
			{
				$v = $post->batch()->pivot()->where('post_id','=',$post->id)->where('batch_id','=',$batch->id)->count();
				$val = ($v == 1);
				$b[] = array(
						'select' => $val,
						'name' => $batch->batch
					);
			}
			$data['batches'] = $b;
			$s = array();
			foreach ($subjects as $subject)
			{
				$v = $post->subject()->pivot()->where('post_id','=',$post->id)->where('subject_id','=',$subject->id)->count();
				$val = ($v == 1);
				$s[] = array(
						'select' => $val,
						'name' => $subject->subject
					);
			}
			$data['subjects'] = $s;
			$d[] = $data;
		}
	print_r(json_encode($d));
	}

	public function post_pupdate()
	{
		$input = json_decode((Input::get('post')));
		$post = Post::find($input->id);
		$post->post = $input->name;
		$post->save();
		$hostel = array();
		$batch = array();
		$subject = array();
		$par = $input->hostels;
		foreach ($par as $p)
		{
			if($p->select==true)
			{
				$hostel[] = Hostel::where('hostel', '=', $p->name)->first()->id;
			}
		}
		$par = $input->batches;
		foreach ($par as $p)
		{
			if($p->select==true)
			{
				$batch[] = Batch::where('batch', '=', $p->name)->first()->id;
			}
		}
		$par = $input->subjects;
		foreach ($par as $p)
		{
			if($p->select==true)
			{
				$subject[] = Subject::where('subject', '=', $p->name)->first()->id;
			}
		}
		$post->hostel()->sync($hostel);
		$post->batch()->sync($batch);
		$post->subject()->sync($subject);
		$post->save();
		return "Success";
	}

	public function post_pdel()
	{
		$input = Input::get('id');
		$post = Post::find($input);
		$post->delete();
	}
}

