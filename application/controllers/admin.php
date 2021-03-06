<?php

class Admin_Controller extends Base_Controller {

	public $restful = true;

	function __construct()
	{
		parent::__construct();
		$this->filter('before', 'auth2');
	}

	public function get_index()
	{
		return $this->get_settings();
	}

	public function get_settings()
	{
		return View::make('admin.settings');
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
		}
		else
		{
			print("Failed");
		}
	}

	public function post_slist()
	{
		$columns = array('id','first_name','middle_name','last_name','hostel','batch','sex','reg_no','subject');
		$users=Student::with('subject')->where('role','=','0')->get($columns);
		foreach ($users as $user)
		{
			$user = $user->attributes;
			if($user['middle_name'] == NULL)
			{
				$user['middle_name'] = ' ';
			}
			if($user['sex'] == 0)
			{
				$user['sex'] = 'Female';
			}
			if($user['sex'] == 1)
			{
				$user['sex'] = 'Male';
			}

			$user['hostel'] = Hostel::find($user['hostel'])->hostel;
			$user['batch'] = Batch::find($user['batch'])->batch;
			$user['subject'] = Subject::find($user['subject'])->subject;
			$user_ref[]=$user;
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
		$sex = 0;
		$par = $input->sexes;
		foreach($par as $p)
		{
			if($p->select==true)
			{
				if($p->name == "Male")
				{
					$sex=$sex+2;
				}
				if($p->name == "Female")
				{
					$sex=$sex+1;
				}
			}
		}
		$post->hostel()->sync($hostel);
		$post->batch()->sync($batch);
		$post->subject()->sync($subject);
		$post->sex = $sex;
		$post->number = $input->number;
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
			$data['sexes'] = array(
					array(
							'name' => 'Male',
							'select' => false
						),
					array(
							'name' => 'Female',
							'select' => false
						)
				);
			if(($post->sex == 2)||($post->sex == 3))
			{
				$data['sexes'][0]['select'] = true;
			}
			if(($post->sex == 1)||($post->sex == 3))
			{
				$data['sexes'][1]['select'] = true;
			}
			$data['number'] = $post->number;
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
		$sex = 0;
		$par = $input->sexes;
		foreach($par as $p)
		{
			if($p->select==true)
			{
				if($p->name == "Male")
				{
					$sex=$sex+2;
				}
				if($p->name == "Female")
				{
					$sex=$sex+1;
				}
			}
		}
		$post->hostel()->sync($hostel);
		$post->batch()->sync($batch);
		$post->subject()->sync($subject);
		$post->sex = $sex;
		$post->number = $input->number;
		$post->save();
		return "Success";
	}

	public function post_pdel()
	{
		$input = Input::get('id');
		$post = Post::find($input);
		$post->delete();
		return "Removed Successfully";
	}

	public function post_add()
	{
		if($user = Student::where('reg_no','=',Input::get('reg_no'))->first())
		{
			Nominee::create(
				array(
					'student_id' => $user->id,
					'post_id' => Input::get('post')
				)
			);
			return "Nomination Added Successfully";
		}
		else
		{
			return "Failed: Nomination Not Added";
		}
	}

	public function get_list()
	{
		$nomin = Nominee::all();
		$n = array();
		foreach($nomin as $nom)
		{
			$post = Post::find($nom->post_id);
			$stu = Student::find($nom->student_id);
			$data = array(
				'id' => $nom->id,
				'name' => $stu->first_name.' '.$stu->middle_name.' '.$stu->last_name,
				'reg_no' => $stu->reg_no,
				'post' => $post->post
				);
			$n[] = $data;
		}
		return json_encode($n);
	}

	public function post_del()
	{
		if($nomin = Nominee::find(Input::get('id')))
		{
			$nomin->delete();
			return "Nomination Delete Successful";
		}
		else
		{
			return "Nomination Delete Failed";
		}
	}

	public function get_res()
	{
		$posts = Post::all();
		$nom = Nominee::with(array('post_id','student_id'))->all();
		$d = array();
		foreach($posts as $post)
		{
			$count = 0;
			$data = array();
			foreach($nom as $n)
			{
				if($n->post_id == $post->id)
				{
					$num = Votec::where('post_id','=',$post->id)->where('nominee_id','=',$n->id)->count();
					$student = Student::find($n->student_id);
					$data[] = array(
							'label' => $student->first_name.' '.$student->middle_name.' '.$student->last_name,
							'value' => $num
						);
					$count = $count + $num;
				}
			}
			$total = Votec::where('post_id','=',$post->id)->count();
			$data[] = array(
					'label' => 'Abstane',
					'value' => ($total - $count)
				);
			$d[] = array(
					'title' => $post->post,
					'data' => $data,
					'total' => $total
				);
		}
		return json_encode($d);
	}

	public function get_pass()
	{
		$str = '<html><head><title>Passwords | NaveenTantra</title></head><body><h1>Passwords</h1><table style:"border:1"><tr><th>Name</th><th>Registration Number</th><th>Password</th></tr>';
		$students = Student::where('role','=','0')->get();
		foreach($students as $student)
		{
			$pass = Hash::make($student->reg_no);
			$pass = substr($pass,10,5);
			$student->password = Hash::make($pass);
			$student->save();
			$str = $str.'<tr><td>'.$student->first_name.' '.$student->middle_name.' '.$student->last_name.'</td><td>'.$student->reg_no.'</td><td>'.$pass.'</td></tr>';
		}
		$str = $str.'</table></body></html>';
		return $str;
	}
}

