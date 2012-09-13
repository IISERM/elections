<?php
	
	class Add_Students_Task
	{

		public function seed()
		{

			DB::query('TRUNCATE TABLE hostels');

			Hostel::create(array(
				'hostel' => '7'
			));

			Hostel::create(array(
				'hostel' => '5'
			));

			DB::query('TRUNCATE TABLE batches');

			Batch::create(array(
				'batch' => 'MS07'
			));

			Batch::create(array(
				'batch' => 'MS08'
			));

			Batch::create(array(
				'batch' => 'MS09'
			));

			Batch::create(array(
				'batch' => 'MS10'
			));

			Batch::create(array(
				'batch' => 'MS11'
			));

			Batch::create(array(
				'batch' => 'MS12'
			));

			DB::query('TRUNCATE TABLE subjects');

			Subject::create(array(
				'subject' => 'Physics'
			));

			Subject::create(array(
				'subject' => 'Mathematics'
			));

			Subject::create(array(
				'subject' => 'Chemistry'
			));

			Subject::create(array(
				'subject' => 'Biology'
			));

			Subject::create(array(
				'subject' => 'Undeclared'
			));

			DB::query('TRUNCATE TABLE students');
			
			Student::create(array(
				'role' => 0,
				'first_name' => 'Achyut',
				'middle_name' => 'Priya',
				'last_name' => 'Shukla',
				'reg_no' => 'MS07002',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Amita',
				'last_name' => 'Agrawal',
				'reg_no' => 'MS07003',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Amol',
				'middle_name' => 'A',
				'last_name' => 'Deshmukh',
				'reg_no' => 'MS07004',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Amol',
				'last_name' => 'Ratnaparkhe',
				'reg_no' => 'MS07005',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Anurag',
				'last_name' => 'Kanaujia',
				'reg_no' => 'MS07006',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Bharat',
				'last_name' => 'Kohli',
				'reg_no' => 'M07007',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Chandan',
				'last_name' => 'Kumar',
				'reg_no' => 'MS07008',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Chandan',
				'last_name' => 'Kumar',
				'reg_no' => 'MS07009',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Dharmendra',
				'middle_name' => 'K',
				'last_name' => 'Singh',
				'reg_no' => 'MS07010',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Kirandeep',
				'last_name' => 'Kaur',
				'reg_no' => 'MS07011',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Mrinal',
				'last_name' => 'Shekhar',
				'reg_no' => 'MS07012',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Mohit',
				'middle_name' => 'Satish',
				'last_name' => 'Tanga',
				'reg_no' => 'MS07013',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Naveen',
				'last_name' => 'Kumar',
				'reg_no' => 'MS07014',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Parul',
				'last_name' => 'Gupta',
				'reg_no' => 'MS07016',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Prashant',
				'last_name' => 'Mishra',
				'reg_no' => 'MS07017',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Rajni',
				'last_name' => 'Ranjan',
				'reg_no' => 'MS07018',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Rishi',
				'middle_name' => 'Raj',
				'last_name' => 'Trivedi',
				'reg_no' => 'MS07019',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Sajan',
				'last_name' => 'Gupta',
				'reg_no' => 'MS07020',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Sameep',
				'last_name' => 'Chandel',
				'reg_no' => 'MS07021',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Shalender',
				'last_name' => 'Jain',
				'reg_no' => 'MS07022',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Singamsetti',
				'last_name' => 'Srinivasulu',
				'reg_no' => 'MS07023',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Tishu',
				'last_name' => 'Nandan',
				'reg_no' => 'MS07026',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Varun',
				'last_name' => 'Singh',
				'reg_no' => 'MS07028',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Vinit',
				'last_name' => 'Kumar',
				'reg_no' => 'MS07029',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Rakesh',
				'last_name' => 'Kumar',
				'reg_no' => 'MS07030',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Apurv',
				'last_name' => 'Saxena',
				'reg_no' => 'MS08031T',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Abhilasha',
				'last_name' => 'Joshi',
				'reg_no' => 'MS08001',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Abhishek',
				'last_name' => 'Goswami',
				'reg_no' => 'MS08003',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Amit',
				'last_name' => 'Kumar',
				'reg_no' => 'MS08006',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Ankit',
				'last_name' => 'Kumar',
				'reg_no' => 'MS08007',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Anshu',
				'last_name' => 'Gupta',
				'reg_no' => 'MS08008',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Anuj',
				'last_name' => 'Shukla',
				'reg_no' => 'MS08010',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Arashdeep',
				'last_name' => 'Singh',
				'reg_no' => 'MS08011',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Asif',
				'last_name' => 'Equbal',
				'reg_no' => 'MS08014',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Deepansh',
				'last_name' => 'Srivastava',
				'reg_no' => 'MS08016',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Devesh',
				'last_name' => 'Gokul',
				'reg_no' => 'MS08017',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Dilraj',
				'last_name' => 'Singh',
				'reg_no' => 'MS08018',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Gade',
				'middle_name' => 'Vinay',
				'last_name' => 'Krishna',
				'reg_no' => 'MS08020',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Gagan',
				'middle_name' => 'Preet',
				'last_name' => 'Singh',
				'reg_no' => 'MS08021',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Gaurav',
				'last_name' => 'Kumar',
				'reg_no' => 'MS08022',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Himanshu',
				'last_name' => 'Sachan',
				'reg_no' => 'MS08024',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Jagmohan',
				'last_name' => 'Solanki',
				'reg_no' => 'MS08025',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Jithin',
				'middle_name' => 'Paul',
				'last_name' => 'M',
				'reg_no' => 'MS08026',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Kapil',
				'last_name' => 'Dave',
				'reg_no' => 'MS08027',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Karishma',
				'last_name' => 'Bhasne',
				'reg_no' => 'MS08028',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Kasturi',
				'last_name' => 'Banerjee',
				'reg_no' => 'MS08029',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Keshav',
				'last_name' => 'Aggarwal',
				'reg_no' => 'MS08030',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Manish',
				'last_name' => 'Pareek',
				'reg_no' => 'MS08031',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Manmeet',
				'last_name' => 'Singh',
				'reg_no' => 'MS08032',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Mehreen',
				'last_name' => 'Khaleel',
				'reg_no' => 'MS08033',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Neelam',
				'last_name' => 'Singh',
				'reg_no' => 'MS08034',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Nikhil',
				'last_name' => 'Kumar',
				'reg_no' => 'MS08035',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Nilmani',
				'last_name' => 'Singh',
				'reg_no' => 'MS08036',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Nishant',
				'last_name' => 'Singh',
				'reg_no' => 'MS08037',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Nitish',
				'last_name' => 'Sharma',
				'reg_no' => 'MS08039',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Nitish',
				'last_name' => 'Tayal',
				'reg_no' => 'MS08040',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Prabhanjan',
				'middle_name' => 'Ramesh',
				'last_name' => 'Borwankar',
				'reg_no' => 'MS08041',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Shashank',
				'last_name' => 'Yadav',
				'reg_no' => 'MS08046',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Shivam',
				'last_name' => 'Bharadwaj',
				'reg_no' => 'MS08047',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Sumit',
				'last_name' => 'Mittal',
				'reg_no' => 'MS08049',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Suraj',
				'middle_name' => 'Singh',
				'last_name' => 'Khurana',
				'reg_no' => 'MS08050',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Surajeet',
				'middle_name' => 'Kumar',
				'last_name' => 'Das',
				'reg_no' => 'MS08051',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Vikesh',
				'last_name' => 'Siddhu',
				'reg_no' => 'MS08053',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Vikram',
				'last_name' => 'Singh',
				'reg_no' => 'MS08054',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Vinod',
				'last_name' => 'Kumar',
				'reg_no' => 'MS08055',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Vivek',
				'last_name' => 'Singh',
				'reg_no' => 'MS08056',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Aakash',
				'last_name' => 'Sharawat',
				'reg_no' => 'MS09001',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Abhijit',
				'last_name' => 'Pant',
				'reg_no' => 'MS09002',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Abhishek',
				'last_name' => 'Anand',
				'reg_no' => 'MS09003',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Abhishek',
				'last_name' => 'Kumar',
				'reg_no' => 'MS09004',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Abhishek',
				'last_name' => 'Mishra',
				'reg_no' => 'MS09005',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Adhikar',
				'last_name' => 'Bansiwal',
				'reg_no' => 'MS09007',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Aditya',
				'last_name' => ' ',
				'reg_no' => 'MS09008',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Aditya',
				'last_name' => 'Verma',
				'reg_no' => 'MS09009',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Agastya',
				'middle_name' => 'P',
				'last_name' => 'Bhati',
				'reg_no' => 'MS09010',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Akansha',
				'last_name' => 'Sharma',
				'reg_no' => 'MS09011',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Akash',
				'middle_name' => 'Kumar',
				'last_name' => 'Sharma',
				'reg_no' => 'MS09012',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Alok',
				'last_name' => 'Kumar',
				'reg_no' => 'MS09013',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Amit',
				'last_name' => 'Ranjan',
				'reg_no' => 'MS09014',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Anil',
				'middle_name' => 'Kumar',
				'last_name' => 'Jhingonia',
				'reg_no' => 'MS09015',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Anjali',
				'last_name' => 'Gupta',
				'reg_no' => 'MS09016',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Ankush',
				'last_name' => 'Checkervarty',
				'reg_no' => 'MS09018',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Anuj',
				'last_name' => 'Jakhar',
				'reg_no' => 'MS09020',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Anurag',
				'last_name' => 'Kulshrestha',
				'reg_no' => 'MS09022',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Arushi',
				'last_name' => 'Khattri',
				'reg_no' => 'MS09024',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Aseem',
				'last_name' => 'Tyagi',
				'reg_no' => 'MS09025',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Ashima',
				'last_name' => 'Arora',
				'reg_no' => 'MS09026',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Ashish',
				'last_name' => 'Verma',
				'reg_no' => 'MS09029',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Ashutosh',
				'last_name' => 'Tripathi',
				'reg_no' => 'MS09031',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Atul',
				'last_name' => 'Mantri',
				'reg_no' => 'MS09033',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Atul',
				'last_name' => 'Verma',
				'reg_no' => 'MS09034',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Bharat',
				'middle_name' => 'Kumar',
				'last_name' => 'Gehlot',
				'reg_no' => 'MS09036',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Bia',
				'last_name' => 'Roy',
				'reg_no' => 'MS09037',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Chaman',
				'middle_name' => 'Lal',
				'last_name' => 'Mahawar',
				'reg_no' => 'MS09038',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Chandrakala',
				'last_name' => 'Meena',
				'reg_no' => 'MS09039',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Danish',
				'last_name' => 'Shamoon',
				'reg_no' => 'MS09041',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Debdatta',
				'middle_name' => 'Sinha',
				'last_name' => 'Roy',
				'reg_no' => 'MS09042',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Debi',
				'middle_name' => 'Prasad',
				'last_name' => 'Kar',
				'reg_no' => 'MS09043',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Deep',
				'middle_name' => 'Raj',
				'last_name' => 'Meena',
				'reg_no' => 'MS09044',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Deepak',
				'last_name' => 'Saroha',
				'reg_no' => 'MS09045',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Deepak',
				'last_name' => 'Verma',
				'reg_no' => 'MS09046',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Devender',
				'last_name' => 'Kumar',
				'reg_no' => 'MS09049',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Dhirendra',
				'middle_name' => 'Pratap',
				'last_name' => 'Singh',
				'reg_no' => 'MS09050',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Gaurav',
				'last_name' => 'Aggarwal',
				'reg_no' => 'MS09051',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Gaurav',
				'last_name' => 'Verma',
				'reg_no' => 'MS09053',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Gursharanjeet',
				'last_name' => 'Sandhu',
				'reg_no' => 'MS09055',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Harjit',
				'middle_name' => 'Singh',
				'last_name' => 'Sandhu',
				'reg_no' => 'MS09056',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Harsh',
				'last_name' => 'Katyayan',
				'reg_no' => 'MS09057',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Himanshu',
				'last_name' => ' ',
				'reg_no' => 'MS09058',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Himanshu',
				'last_name' => 'Nagpal',
				'reg_no' => 'MS09059',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Hitesh',
				'last_name' => 'Gakhar',
				'reg_no' => 'MS09060',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Indrajeet',
				'last_name' => ' ',
				'reg_no' => 'MS09062',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Indu',
				'last_name' => 'Verma',
				'reg_no' => 'MS09063',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Jithin',
				'last_name' => 'Bhagavathi',
				'reg_no' => 'MS09064',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Jugal',
				'last_name' => 'Pant',
				'reg_no' => 'MS09065',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Jyoti',
				'last_name' => 'Saini',
				'reg_no' => 'MS09066',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Kanwal',
				'middle_name' => 'Puneet',
				'last_name' => 'Kaur',
				'reg_no' => 'MS09068',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Kapil',
				'last_name' => 'Bharti',
				'reg_no' => 'MS09069',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Karan',
				'middle_name' => 'Pratap Singh',
				'last_name' => 'Yadav',
				'reg_no' => 'MS09070',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Karandeep',
				'last_name' => 'Singh',
				'reg_no' => 'MS09071',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Kritika',
				'last_name' => 'Singhal',
				'reg_no' => 'MS09072',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Kuldeep',
				'middle_name' => 'Singh',
				'last_name' => 'Tomar',
				'reg_no' => 'MS09075',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Kumar',
				'last_name' => 'Gaurav',
				'reg_no' => 'MS09076',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Lokesh',
				'last_name' => 'Kumar',
				'reg_no' => 'MS09078',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Mayank',
				'last_name' => 'Chugh',
				'reg_no' => 'MS09081',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Mayank',
				'last_name' => 'Mishra',
				'reg_no' => 'MS09082',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Meenakshi',
				'last_name' => 'Bagadia',
				'reg_no' => 'MS09083',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Nancy',
				'last_name' => 'Mathur',
				'reg_no' => 'MS09086',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Narendra',
				'middle_name' => 'Pal',
				'last_name' => 'Singh',
				'reg_no' => 'MS09087',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Neeraj',
				'last_name' => ' ',
				'reg_no' => 'MS09089',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Nishtha',
				'last_name' => 'Agarwal',
				'reg_no' => 'MS09091',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Nitin',
				'last_name' => 'Serwa',
				'reg_no' => 'MS09092',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Prateek',
				'last_name' => 'Gupta',
				'reg_no' => 'MS09096',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Priyanka',
				'last_name' => 'Dogra',
				'reg_no' => 'MS09097',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Rahul',
				'last_name' => 'Kumar',
				'reg_no' => 'MS09101',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Rahul',
				'middle_name' => 'Kumar',
				'last_name' => 'Choudhary',
				'reg_no' => 'MS09102',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Rahul',
				'middle_name' => 'Kumar',
				'last_name' => 'Yadav',
				'reg_no' => 'MS09103',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Rajveer',
				'last_name' => 'Nehra',
				'reg_no' => 'MS09104',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Ravi',
				'last_name' => 'Yadav',
				'reg_no' => 'MS09105',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Rishi',
				'last_name' => 'Raj',
				'reg_no' => 'MS09108',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Saksham',
				'last_name' => 'Singh',
				'reg_no' => 'MS09111',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Sampat',
				'middle_name' => 'Kumar',
				'last_name' => 'Sharma',
				'reg_no' => 'MS09112',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Sapna',
				'last_name' => 'Meena',
				'reg_no' => 'MS09114',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Shambhu',
				'last_name' => 'Yadav',
				'reg_no' => 'MS09117',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Shiv',
				'middle_name' => 'Charan',
				'last_name' => 'Dudi',
				'reg_no' => 'MS09119',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Shivpal',
				'middle_name' => 'Singh',
				'last_name' => 'Kang',
				'reg_no' => 'MS09120',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Sonika',
				'last_name' => ' ',
				'reg_no' => 'MS09123',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Soniya',
				'last_name' => 'Sharma',
				'reg_no' => 'MS09124',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Srishti',
				'last_name' => 'Batra',
				'reg_no' => 'MS09126',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Sudeep',
				'last_name' => 'Maheshwari',
				'reg_no' => 'MS09127',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Titiksh',
				'last_name' => 'Gupta',
				'reg_no' => 'MS09131',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Uttam',
				'middle_name' => 'Kumar',
				'last_name' => 'Saini',
				'reg_no' => 'MS09133',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Vidit',
				'last_name' => 'Agrawal',
				'reg_no' => 'MS09134',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Vikash',
				'last_name' => 'Dhindhwal',
				'reg_no' => 'MS09135',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Vrinda',
				'middle_name' => 'Ravi',
				'last_name' => 'Kumar',
				'reg_no' => 'MS09137',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Yash',
				'last_name' => 'Maurya',
				'reg_no' => 'MS09138',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Yatendra',
				'middle_name' => 'Singh',
				'last_name' => 'Arya',
				'reg_no' => 'MS09139',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Mariyam',
				'last_name' => 'Fatima',
				'reg_no' => 'MS09140(T)',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'D',
				'middle_name' => 'Jeiyendira',
				'last_name' => 'Pradeep',
				'reg_no' => 'MS10001',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'H',
				'middle_name' => 'Rajanikanta',
				'last_name' => 'Sharma',
				'reg_no' => 'MS10002',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Pranay',
				'middle_name' => 'Deep',
				'last_name' => 'Rungta',
				'reg_no' => 'MS10004',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Prashant',
				'last_name' => 	' ',
				'reg_no' => 'MS10005',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Pratip',
				'last_name' => 'Chakraborty',
				'reg_no' => 'MS10006',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Upakul',
				'last_name' => 'Sharma',
				'reg_no' => 'MS10008',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Prachi',
				'middle_name' => 'Madhukar',
				'last_name' => 'Dabhade',
				'reg_no' => 'MS10009',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Shahanaz',
				'last_name' => 'Nazar',
				'reg_no' => 'MS10010',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Sharmi',
				'last_name' => 'Sen',
				'reg_no' => 'MS10012',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Shachikanta',
				'last_name' => 'Nongthombam',
				'reg_no' => 'MS10013',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Ananya',
				'last_name' => 'Rastogi',
				'reg_no' => 'MS10015',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Debanjana',
				'last_name' => 'Kundu',
				'reg_no' => 'MS10017',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Nidhi',
				'last_name' => 'Kaihnsa',
				'reg_no' => 'MS10020',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Geetananda',
				'last_name' => 'Thingujam',
				'reg_no' => 'MS10022',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Ane',
				'middle_name' => 'Nishitha',
				'last_name' => 'V',
				'reg_no' => 'MS10023',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Preetha',
				'last_name' => 'Saha',
				'reg_no' => 'MS10024',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Prerna',
				'last_name' => 'Paliwal',
				'reg_no' => 'MS10025',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Aneeshma',
				'last_name' => 'Peter',
				'reg_no' => 'MS10026',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Ajeet',
				'middle_name' => 'Kumar',
				'last_name' => 'Choudhri',
				'reg_no' => 'MS10027',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Irfana',
				'last_name' => 'Saleem',
				'reg_no' => 'MS10028',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Cigole',
				'last_name' => 'Thomas',
				'reg_no' => 'MS10029',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Jagadish',
				'middle_name' => 'Prasad',
				'last_name' => 'Hazra',
				'reg_no' => 'MS10031',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Jagdale',
				'middle_name' => 'Gargi',
				'last_name' => 'Satishraj',
				'reg_no' => 'MS10032',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Mahendra',
				'last_name' => 'Singh',
				'reg_no' => 'MS10033',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Ushasi',
				'last_name' => 'Dutta',
				'reg_no' => 'MS10035',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Akhil',
				'middle_name' => 'V',
				'last_name' => 'Gopal',
				'reg_no' => 'MS10036',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Abhishek',
				'last_name' => 'Gaurav',
				'reg_no' => 'MS10037',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Rahul',
				'last_name' => 'Chajwa',
				'reg_no' => 'MS10038',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Kshitiz',
				'last_name' => 'Mohan',
				'reg_no' => 'MS10039',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Asha',
				'last_name' => 'Raju',
				'reg_no' => 'MS10040',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Ashwani',
				'last_name' => 'Tomar',
				'reg_no' => 'MS10042',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Ashish',
				'last_name' => 'Kumar',
				'reg_no' => 'MS10043',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Shivam',
				'last_name' => 'Umarvaishya',
				'reg_no' => 'MS10044',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Shiji',
				'middle_name' => 'L',
				'last_name' => 'V',
				'reg_no' => 'MS10045',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Shivprasad',
				'middle_name' => 'Gangadhar',
				'last_name' => 'Patil',
				'reg_no' => 'MS10047',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Shivprajval',
				'last_name' => 'Divakar',
				'reg_no' => 'MS10048',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Priyanka',
				'middle_name' => 'Jeeth D',
				'last_name' => 'P',
				'reg_no' => 'MS10049',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Aniket',
				'last_name' => 'Gaur',
				'reg_no' => 'MS10050',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Krishna',
				'middle_name' => 'K',
				'last_name' => 'Das',
				'reg_no' => 'MS10051',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Rajat',
				'last_name' => 'Garg',
				'reg_no' => 'MS10053',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Tejinder',
				'middle_name' => 'Singh',
				'last_name' => 'Chechi',
				'reg_no' => 'MS10054',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Vikram',
				'last_name' => 'Sharma',
				'reg_no' => 'MS10055',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Ankur',
				'middle_name' => 'Kr',
				'last_name' => 'Gupta',
				'reg_no' => 'MS10056',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Ankit',
				'middle_name' => 'Kumar',
				'last_name' => 'Agrawal',
				'reg_no' => 'MS10057',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Sekhar',
				'middle_name' => 'M',
				'last_name' => 'A',
				'reg_no' => 'MS10058',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Sukriti',
				'last_name' => ' ',
				'reg_no' => 'MS10059',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Sukanya',
				'middle_name' => 'V',
				'last_name' => 'S',
				'reg_no' => 'MS10060',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Lilit',
				'last_name' => 'Jacob',
				'reg_no' => 'MS10061',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Pallavi',
				'last_name' => ' ',
				'reg_no' => 'MS10062',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Ramadasu',
				'last_name' => 'Swathi',
				'reg_no' => 'MS10063',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Samant',
				'middle_name' => 'Manas',
				'last_name' => 'Arun',
				'reg_no' => 'MS10064',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Sumit',
				'middle_name' => 'Chandra',
				'last_name' => 'mishra',
				'reg_no' => 'MS10065',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Tanya',
				'middle_name' => 'Kaushal',
				'last_name' => 'Srivastava',
				'reg_no' => 'MS10066',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Gunidhar',
				'last_name' => 'Yengkhom',
				'reg_no' => 'MS10067',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Soniya',
				'last_name' => 'Rani',
				'reg_no' => 'MS10068',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Monika',
				'last_name' => ' ',
				'reg_no' => 'MS10069',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Anoop',
				'last_name' => 'Kumar',
				'reg_no' => 'MS10071',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Vipin',
				'middle_name' => 'T',
				'last_name' => 'Raj',
				'reg_no' => 'MS10073',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Rupali',
				'last_name' => 'Chawla',
				'reg_no' => 'MS10074',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Harshita',
				'last_name' => 'Pawar',
				'reg_no' => 'MS10075',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Tara',
				'last_name' => 'George',
				'reg_no' => 'MS10076',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Parvathy',
				'last_name' => 'Ramesh',
				'reg_no' => 'MS10077',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Karande',
				'middle_name' => 'Kranti',
				'last_name' => 'Yuvaraj',
				'reg_no' => 'MS10078',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Nishant',
				'last_name' => 'Agrawal',
				'reg_no' => 'MS10079',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Haseeb',
				'last_name' => 'Hakkim',
				'reg_no' => 'MS10081',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Nishant',
				'last_name' => ' ',
				'reg_no' => 'MS10083',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Pushkal',
				'last_name' => 'Srivastava',
				'reg_no' => 'MS10084',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Deshmukh',
				'middle_name' => 'Neeraj',
				'last_name' => 'Ravindra',
				'reg_no' => 'MS10085',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Reshma',
				'last_name' => 'Murali',
				'reg_no' => 'MS10086',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Nitesh',
				'last_name' => 'Bhardwaj',
				'reg_no' => 'MS10087',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Nitish',
				'last_name' => 'Kumar',
				'reg_no' => 'MS10088',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Nitin',
				'middle_name' => 'Kumar',
				'last_name' => 'Singh',
				'reg_no' => 'MS10089',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Anubhav',
				'last_name' => ' ',
				'reg_no' => 'MS10091',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Anu',
				'last_name' => 'Yadav',
				'reg_no' => 'MS10092',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Lourembam',
				'last_name' => 'Thoithoi',
				'reg_no' => 'MS10094',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Arul',
				'middle_name' => 'Ganesh',
				'last_name' => 'S S',
				'reg_no' => 'MS10096',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Anubhuti',
				'last_name' => 'Singh',
				'reg_no' => 'MS10097',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Raut',
				'middle_name' => 'Akshay',
				'last_name' => 'Hemant',
				'reg_no' => 'MS10098',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Divya',
				'last_name' => 'Sharma',
				'reg_no' => 'MS10099',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Vivek',
				'middle_name' => 'B',
				'last_name' => 'Raina',
				'reg_no' => 'MS10100',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Aaveg',
				'last_name' => 'Aggarwal',
				'reg_no' => 'MS10101',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Ravi',
				'last_name' => 'Ranjan',
				'reg_no' => 'MS10102',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Ravinder',
				'last_name' => 'Singh',
				'reg_no' => 'MS10103',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Shweta',
				'last_name' => 'kumari',
				'reg_no' => 'MS10104',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Sayali',
				'middle_name' => 'Rangarao',
				'last_name' => 'Chougale',
				'reg_no' => 'MS10105',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Piyush',
				'last_name' => 'Mishra',
				'reg_no' => 'MS10106',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Arya',
				'middle_name' => 'J',
				'last_name' => 'S',
				'reg_no' => 'MS10107',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Manpreet',
				'last_name' => 'Kaler',
				'reg_no' => 'MS10108',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Mahima',
				'last_name' => ' ',
				'reg_no' => 'MS10109',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Bharti',
				'last_name' => 'Kumari',
				'reg_no' => 'MS10110',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Nirdosh',
				'last_name' => 'Dadwal',
				'reg_no' => 'MS10111',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Ashima',
				'middle_name' => 'Valentina',
				'last_name' => 'Minj',
				'reg_no' => 'MS10112',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Monish',
				'middle_name' => 'Kr`',
				'last_name' => 'Babbar',
				'reg_no' => 'MS10113',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Bangal',
				'middle_name' => 'Yogesh',
				'last_name' => 'Manga',
				'reg_no' => 'MS10114',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Navdeep',
				'last_name' => 'Singh',
				'reg_no' => 'MS10116',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Athira',
				'middle_name' => 'J',
				'last_name' => 'Nair',
				'reg_no' => 'MS11001',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Arpit',
				'last_name' => 'Porwal',
				'reg_no' => 'MS11002',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Atul',
				'middle_name' => 'Singh',
				'last_name' => 'Arora',
				'reg_no' => 'MS11003',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Biplob',
				'middle_name' => 'Kumar',
				'last_name' => 'Nandy',
				'reg_no' => 'MS11004',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Saumya',
				'last_name' => 'Gupta',
				'reg_no' => 'MS11005',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Srijit',
				'last_name' => 'Mukherjee',
				'reg_no' => 'MS11006',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Kirti',
				'last_name' => 'Singh',
				'reg_no' => 'MS11007',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Abhishek',
				'last_name' => ' ',
				'reg_no' => 'MS11009',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Joydeep',
				'last_name' => 'Chakravarthy',
				'reg_no' => 'MS11010',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Love',
				'last_name' => 'Grover',
				'reg_no' => 'MS11011',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Garima',
				'last_name' => 'Singh',
				'reg_no' => 'MS11012',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Neha',
				'last_name' => 'Sharma',
				'reg_no' => 'MS11014',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Devwrat',
				'last_name' => 'Dube',
				'reg_no' => 'MS11015',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Kishor',
				'last_name' => 'Bharti',
				'reg_no' => 'MS11016',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Vivek',
				'last_name' => 'Sagar',
				'reg_no' => 'MS11017',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Rajendra',
				'middle_name' => 'Singh',
				'last_name' => 'Bhati',
				'reg_no' => 'MS11019',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Deepanshu',
				'last_name' => ' ',
				'reg_no' => 'MS11020',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Prashansa',
				'last_name' => 'Gupta',
				'reg_no' => 'MS11021',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Diksha',
				'last_name' => 'Jain',
				'reg_no' => 'MS11022',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Shiven',
				'last_name' => 'Dhiman',
				'reg_no' => 'MS11023',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Akshey',
				'last_name' => 'Sandhu',
				'reg_no' => 'MS11024',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Ritu',
				'middle_name' => 'Roy',
				'last_name' => 'Choudhury',
				'reg_no' => 'MS11025',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Abhinav',
				'last_name' => 'Kala',
				'reg_no' => 'MS11026',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Jopaul',
				'last_name' => 'Mathew',
				'reg_no' => 'MS11027',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Akhilrag',
				'last_name' => 'K',
				'reg_no' => 'MS11028',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Athira',
				'middle_name' => 'T',
				'last_name' => 'John',
				'reg_no' => 'MS11029',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Akhil',
				'last_name' => 'Francis',
				'reg_no' => 'MS11030',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Anooja',
				'last_name' => 'Jayaraj',
				'reg_no' => 'MS11031',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Shubham',
				'last_name' => 'Chauhan',
				'reg_no' => 'MS11032',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Manu',
				'last_name' => 'J',
				'reg_no' => 'MS11033',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Sruthi',
				'last_name' => 'Mohan',
				'reg_no' => 'MS11034',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Evelyn',
				'last_name' => 'Abraham',
				'reg_no' => 'MS11035',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Manisha',
				'last_name' => ' ',
				'reg_no' => 'MS11036',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Amritha',
				'last_name' => 'Sreekumar',
				'reg_no' => 'MS11037',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Sandhya',
				'last_name' => ' ',
				'reg_no' => 'MS11038',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Justin',
				'middle_name' => 'K',
				'last_name' => 'Thomas',
				'reg_no' => 'MS11039',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Aakanksha',
				'last_name' => 'Rawat',
				'reg_no' => 'MS11040',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Varun',
				'last_name' => 'Kumar',
				'reg_no' => 'MS11041',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Yashpal',
				'last_name' => 'Singh',
				'reg_no' => 'MS11042',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Gaikwad',
				'middle_name' => 'Akshay',
				'last_name' => 'Ramdas',
				'reg_no' => 'MS11043',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Manvendra',
				'last_name' => 'Singh',
				'reg_no' => 'MS11044',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Shwetha',
				'last_name' => 'S',
				'reg_no' => 'MS11045',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Tess',
				'last_name' => 'George',
				'reg_no' => 'MS11046',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Gobbilla',
				'middle_name' => 'Sai',
				'last_name' => 'Kumar',
				'reg_no' => 'MS11047',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Thapasya',
				'last_name' => 'Vijayan',
				'reg_no' => 'MS11048',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Partha',
				'middle_name' => 'Sankar',
				'last_name' => 'R P S',
				'reg_no' => 'MS11049',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Priyanka',
				'middle_name' => 'Sudheendra',
				'last_name' => 'Jamadagni',
				'reg_no' => 'MS11050',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Biswajit',
				'last_name' => 'Panda',
				'reg_no' => 'MS11051',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Raminder',
				'last_name' => 'Singh',
				'reg_no' => 'MS11052',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Saurabh',
				'last_name' => 'Thapliyal',
				'reg_no' => 'MS11053',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Sabari',
				'last_name' => 'R',
				'middle_name' => 'V',
				'reg_no' => 'MS11054',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Teke',
				'middle_name' => 'Nakul',
				'last_name' => 'Kushabhau',
				'reg_no' => 'MS1105',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Abhinay',
				'last_name' => 'Vardhan',
				'reg_no' => 'MS11057',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Gyanendra',
				'last_name' => 'Yadav',
				'reg_no' => 'MS11058',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Rashmi',
				'last_name' => 'Jain',
				'reg_no' => 'MS11059',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Yosman',
				'middle_name' => 'Bapat',
				'last_name' => 'Dhar',
				'reg_no' => 'MS11060',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Jagdeep',
				'last_name' => 'Singh',
				'reg_no' => 'MS11061',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Rohit',
				'middle_name' => 'Kumar',
				'last_name' => 'Patidar',
				'reg_no' => 'MS11062',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Aiswarya',
				'middle_name' => 'Joy',
				'last_name' => 'M',
				'reg_no' => 'MS11063',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Lakshmi',
				'middle_name' => 'Bhai',
				'last_name' => 'N V',
				'reg_no' => 'MS11064',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Deepthi',
				'middle_name' => 'Krishna',
				'last_name' => 'P',
				'reg_no' => 'MS11065',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Harikrishnan',
				'middle_name' => 'P',
				'last_name' => 'S',
				'reg_no' => 'MS11066',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Vivek',
				'last_name' => 'Singh',
				'reg_no' => 'MS1106',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Arsila',
				'middle_name' => 'Ashraf',
				'last_name' => 'P K',
				'reg_no' => 'MS11068',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Gursimranjeet',
				'last_name' => 'Singh',
				'reg_no' => 'MS11070',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Aman',
				'middle_name' => 'Kumar',
				'last_name' => 'Bhonsle',
				'reg_no' => 'MS11071',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Barun',
				'last_name' => 'Khaidem',
				'reg_no' => 'MS11072',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Arjit',
				'middle_name' => 'Kant',
				'last_name' => 'Gupta',
				'reg_no' => 'MS11073',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Vaishali',
				'last_name' => ' ',
				'reg_no' => 'MS11074',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Saneedh',
				'last_name' => 'Anand',
				'reg_no' => 'MS11075',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Santosh',
				'last_name' => 'Kumari',
				'reg_no' => 'MS11076',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Anjali',
				'last_name' => 'Mahadevan',
				'reg_no' => 'MS11077',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Manmohan',
				'last_name' => ' ',
				'reg_no' => 'MS11078',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Ruchika',
				'last_name' => ' ',
				'reg_no' => 'MS11079',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Manvendra',
				'middle_name' => 'Pratap',
				'last_name' => 'Rajvanshi',
				'reg_no' => 'MS11080',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Ankita',
				'last_name' => 'Verma',
				'reg_no' => 'MS11082',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Dhanya',
				'middle_name' => 'Ann',
				'last_name' => 'Thomas',
				'reg_no' => 'MS11083',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Rashmi',
				'last_name' => 'Sinha',
				'reg_no' => 'MS11084',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Yengkhom',
				'last_name' => 'Sunanda',
				'reg_no' => 'MS11085',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Manu',
				'last_name' => 'S',
				'reg_no' => 'MS11086',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
		
		}

		public function seed07()
		{
			DB::query('TRUNCATE TABLE students');
			
			Student::create(array(
				'role' => 0,
				'first_name' => 'Achyut',
				'middle_name' => 'Priya',
				'last_name' => 'Shukla',
				'reg_no' => 'MS07002',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Amita',
				'last_name' => 'Agrawal',
				'reg_no' => 'MS07003',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Amol',
				'middle_name' => 'A',
				'last_name' => 'Deshmukh',
				'reg_no' => 'MS07004',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Amol',
				'last_name' => 'Ratnaparkhe',
				'reg_no' => 'MS07005',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Anurag',
				'last_name' => 'Kanaujia',
				'reg_no' => 'MS07006',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Bharat',
				'last_name' => 'Kohli',
				'reg_no' => 'M07007',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Chandan',
				'last_name' => 'Kumar',
				'reg_no' => 'MS07008',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Chandan',
				'last_name' => 'Kumar',
				'reg_no' => 'MS07009',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Dharmendra',
				'middle_name' => 'K',
				'last_name' => 'Singh',
				'reg_no' => 'MS07010',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Kirandeep',
				'last_name' => 'Kaur',
				'reg_no' => 'MS07011',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Mrinal',
				'last_name' => 'Shekhar',
				'reg_no' => 'MS07012',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Mohit',
				'middle_name' => 'Satish',
				'last_name' => 'Tanga',
				'reg_no' => 'MS07013',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Naveen',
				'last_name' => 'Kumar',
				'reg_no' => 'MS07014',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Parul',
				'last_name' => 'Gupta',
				'reg_no' => 'MS07016',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Prashant',
				'last_name' => 'Mishra',
				'reg_no' => 'MS07017',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Rajni',
				'last_name' => 'Ranjan',
				'reg_no' => 'MS07018',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Rishi',
				'middle_name' => 'Raj',
				'last_name' => 'Trivedi',
				'reg_no' => 'MS07019',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Sajan',
				'last_name' => 'Gupta',
				'reg_no' => 'MS07020',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Sameep',
				'last_name' => 'Chandel',
				'reg_no' => 'MS07021',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Shalender',
				'last_name' => 'Jain',
				'reg_no' => 'MS07022',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Singamsetti',
				'last_name' => 'Srinivasulu',
				'reg_no' => 'MS07023',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Tishu',
				'last_name' => 'Nandan',
				'reg_no' => 'MS07026',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Varun',
				'last_name' => 'Singh',
				'reg_no' => 'MS07028',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Vinit',
				'last_name' => 'Kumar',
				'reg_no' => 'MS07029',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Rakesh',
				'last_name' => 'Kumar',
				'reg_no' => 'MS07030',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Apurv',
				'last_name' => 'Saxena',
				'reg_no' => 'MS08031T',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));

		}

		public function seed08()
		{
			DB::query('TRUNCATE TABLE students');
			
			Student::create(array(
				'role' => 0,
				'first_name' => 'Gagan',
				'middle_name' => 'Preet',
				'last_name' => 'Singh',
				'reg_no' => 'MS08021',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));

			Student::create(array(
				'role' => 0,
				'first_name' => 'Abhilasha',
				'last_name' => 'Joshi',
				'reg_no' => 'MS08001',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Abhishek',
				'last_name' => 'Goswami',
				'reg_no' => 'MS08003',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Amit',
				'last_name' => 'Kumar',
				'reg_no' => 'MS08006',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Ankit',
				'last_name' => 'Kumar',
				'reg_no' => 'MS08007',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Anshu',
				'last_name' => 'Gupta',
				'reg_no' => 'MS08008',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Anuj',
				'last_name' => 'Shukla',
				'reg_no' => 'MS08010',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Arashdeep',
				'last_name' => 'Singh',
				'reg_no' => 'MS08011',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Asif',
				'last_name' => 'Equbal',
				'reg_no' => 'MS08014',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Deepansh',
				'last_name' => 'Srivastava',
				'reg_no' => 'MS08016',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Devesh',
				'last_name' => 'Gokul',
				'reg_no' => 'MS08017',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Dilraj',
				'last_name' => 'Singh',
				'reg_no' => 'MS08018',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Gade',
				'middle_name' => 'Vinay',
				'last_name' => 'Krishna',
				'reg_no' => 'MS08020',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Gagan',
				'middle_name' => 'Preet',
				'last_name' => 'Singh',
				'reg_no' => 'MS08021',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Gaurav',
				'last_name' => 'Kumar',
				'reg_no' => 'MS08022',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Himanshu',
				'last_name' => 'Sachan',
				'reg_no' => 'MS08024',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Jagmohan',
				'last_name' => 'Solanki',
				'reg_no' => 'MS08025',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Jithin',
				'middle_name' => 'Paul',
				'last_name' => 'M',
				'reg_no' => 'MS08026',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Kapil',
				'last_name' => 'Dave',
				'reg_no' => 'MS08027',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Karishma',
				'last_name' => 'Bhasne',
				'reg_no' => 'MS08028',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Kasturi',
				'last_name' => 'Banerjee',
				'reg_no' => 'MS08029',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Keshav',
				'last_name' => 'Aggarwal',
				'reg_no' => 'MS08030',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Manish',
				'last_name' => 'Pareek',
				'reg_no' => 'MS08031',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Manmeet',
				'last_name' => 'Singh',
				'reg_no' => 'MS08032',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Mehreen',
				'last_name' => 'Khaleel',
				'reg_no' => 'MS08033',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Neelam',
				'last_name' => 'Singh',
				'reg_no' => 'MS08034',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Nikhil',
				'last_name' => 'Kumar',
				'reg_no' => 'MS08035',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Nilmani',
				'last_name' => 'Singh',
				'reg_no' => 'MS08036',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Nishant',
				'last_name' => 'Singh',
				'reg_no' => 'MS08037',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Nitish',
				'last_name' => 'Sharma',
				'reg_no' => 'MS08039',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Nitish',
				'last_name' => 'Tayal',
				'reg_no' => 'MS08040',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Prabhanjan',
				'middle_name' => 'Ramesh',
				'last_name' => 'Borwankar',
				'reg_no' => 'MS08041',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Shashank',
				'last_name' => 'Yadav',
				'reg_no' => 'MS08046',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Shivam',
				'last_name' => 'Bharadwaj',
				'reg_no' => 'MS08047',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Sumit',
				'last_name' => 'Mittal',
				'reg_no' => 'MS08049',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Suraj',
				'middle_name' => 'Singh',
				'last_name' => 'Khurana',
				'reg_no' => 'MS08050',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Surajeet',
				'middle_name' => 'Kumar',
				'last_name' => 'Das',
				'reg_no' => 'MS08051',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Vikesh',
				'last_name' => 'Siddhu',
				'reg_no' => 'MS08053',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Vikram',
				'last_name' => 'Singh',
				'reg_no' => 'MS08054',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Vinod',
				'last_name' => 'Kumar',
				'reg_no' => 'MS08055',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Vivek',
				'last_name' => 'Singh',
				'reg_no' => 'MS08056',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));

		}

		public function seed09()
		{
			DB::query('TRUNCATE TABLE students');
			
			Student::create( array(
				'first_name' => 'Aakash',
				'last_name' => 'Sharawat',
				'reg_no' => 'MS09001',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Abhijit',
				'last_name' => 'Pant',
				'reg_no' => 'MS09002',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Abhishek',
				'last_name' => 'Anand',
				'reg_no' => 'MS09003',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Abhishek',
				'last_name' => 'Kumar',
				'reg_no' => 'MS09004',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Abhishek',
				'last_name' => 'Mishra',
				'reg_no' => 'MS09005',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Adhikar',
				'last_name' => 'Bansiwal',
				'reg_no' => 'MS09007',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Aditya',
				'last_name' => ' ',
				'reg_no' => 'MS09008',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Aditya',
				'last_name' => 'Verma',
				'reg_no' => 'MS09009',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Agastya',
				'middle_name' => 'P',
				'last_name' => 'Bhati',
				'reg_no' => 'MS09010',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Akansha',
				'last_name' => 'Sharma',
				'reg_no' => 'MS09011',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Akash',
				'middle_name' => 'Kumar',
				'last_name' => 'Sharma',
				'reg_no' => 'MS09012',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Alok',
				'last_name' => 'Kumar',
				'reg_no' => 'MS09013',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Amit',
				'last_name' => 'Ranjan',
				'reg_no' => 'MS09014',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Anil',
				'middle_name' => 'Kumar',
				'last_name' => 'Jhingonia',
				'reg_no' => 'MS09015',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Anjali',
				'last_name' => 'Gupta',
				'reg_no' => 'MS09016',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Ankush',
				'last_name' => 'Checkervarty',
				'reg_no' => 'MS09018',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Anuj',
				'last_name' => 'Jakhar',
				'reg_no' => 'MS09020',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Anurag',
				'last_name' => 'Kulshrestha',
				'reg_no' => 'MS09022',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Arushi',
				'last_name' => 'Khattri',
				'reg_no' => 'MS09024',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Aseem',
				'last_name' => 'Tyagi',
				'reg_no' => 'MS09025',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Ashima',
				'last_name' => 'Arora',
				'reg_no' => 'MS09026',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Ashish',
				'last_name' => 'Verma',
				'reg_no' => 'MS09029',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Ashutosh',
				'last_name' => 'Tripathi',
				'reg_no' => 'MS09031',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Atul',
				'last_name' => 'Mantri',
				'reg_no' => 'MS09033',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Atul',
				'last_name' => 'Verma',
				'reg_no' => 'MS09034',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Bharat',
				'middle_name' => 'Kumar',
				'last_name' => 'Gehlot',
				'reg_no' => 'MS09036',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Bia',
				'last_name' => 'Roy',
				'reg_no' => 'MS09037',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Chaman',
				'middle_name' => 'Lal',
				'last_name' => 'Mahawar',
				'reg_no' => 'MS09038',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Chandrakala',
				'last_name' => 'Meena',
				'reg_no' => 'MS09039',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Danish',
				'last_name' => 'Shamoon',
				'reg_no' => 'MS09041',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Debdatta',
				'middle_name' => 'Sinha',
				'last_name' => 'Roy',
				'reg_no' => 'MS09042',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Debi',
				'middle_name' => 'Prasad',
				'last_name' => 'Kar',
				'reg_no' => 'MS09043',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Deep',
				'middle_name' => 'Raj',
				'last_name' => 'Meena',
				'reg_no' => 'MS09044',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Deepak',
				'last_name' => 'Saroha',
				'reg_no' => 'MS09045',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Deepak',
				'last_name' => 'Verma',
				'reg_no' => 'MS09046',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Devender',
				'last_name' => 'Kumar',
				'reg_no' => 'MS09049',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Dhirendra',
				'middle_name' => 'Pratap',
				'last_name' => 'Singh',
				'reg_no' => 'MS09050',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Gaurav',
				'last_name' => 'Aggarwal',
				'reg_no' => 'MS09051',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Gaurav',
				'last_name' => 'Verma',
				'reg_no' => 'MS09053',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Gursharanjeet',
				'last_name' => 'Sandhu',
				'reg_no' => 'MS09055',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Harjit',
				'middle_name' => 'Singh',
				'last_name' => 'Sandhu',
				'reg_no' => 'MS09056',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Harsh',
				'last_name' => 'Katyayan',
				'reg_no' => 'MS09057',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Himanshu',
				'last_name' => ' ',
				'reg_no' => 'MS09058',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Himanshu',
				'last_name' => 'Nagpal',
				'reg_no' => 'MS09059',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Hitesh',
				'last_name' => 'Gakhar',
				'reg_no' => 'MS09060',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Indrajeet',
				'last_name' => ' ',
				'reg_no' => 'MS09062',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Indu',
				'last_name' => 'Verma',
				'reg_no' => 'MS09063',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Jithin',
				'last_name' => 'Bhagavathi',
				'reg_no' => 'MS09064',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Jugal',
				'last_name' => 'Pant',
				'reg_no' => 'MS09065',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Jyoti',
				'last_name' => 'Saini',
				'reg_no' => 'MS09066',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Kanwal',
				'middle_name' => 'Puneet',
				'last_name' => 'Kaur',
				'reg_no' => 'MS09068',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Kapil',
				'last_name' => 'Bharti',
				'reg_no' => 'MS09069',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Karan',
				'middle_name' => 'Pratap Singh',
				'last_name' => 'Yadav',
				'reg_no' => 'MS09070',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Karandeep',
				'last_name' => 'Singh',
				'reg_no' => 'MS09071',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Kritika',
				'last_name' => 'Singhal',
				'reg_no' => 'MS09072',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Kuldeep',
				'middle_name' => 'Singh',
				'last_name' => 'Tomar',
				'reg_no' => 'MS09075',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Kumar',
				'last_name' => 'Gaurav',
				'reg_no' => 'MS09076',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Lokesh',
				'last_name' => 'Kumar',
				'reg_no' => 'MS09078',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Mayank',
				'last_name' => 'Chugh',
				'reg_no' => 'MS09081',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Mayank',
				'last_name' => 'Mishra',
				'reg_no' => 'MS09082',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Meenakshi',
				'last_name' => 'Bagadia',
				'reg_no' => 'MS09083',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Nancy',
				'last_name' => 'Mathur',
				'reg_no' => 'MS09086',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Narendra',
				'middle_name' => 'Pal',
				'last_name' => 'Singh',
				'reg_no' => 'MS09087',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Neeraj',
				'last_name' => ' ',
				'reg_no' => 'MS09089',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Nishtha',
				'last_name' => 'Agarwal',
				'reg_no' => 'MS09091',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Nitin',
				'last_name' => 'Serwa',
				'reg_no' => 'MS09092',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Prateek',
				'last_name' => 'Gupta',
				'reg_no' => 'MS09096',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Priyanka',
				'last_name' => 'Dogra',
				'reg_no' => 'MS09097',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Rahul',
				'last_name' => 'Kumar',
				'reg_no' => 'MS09101',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Rahul',
				'middle_name' => 'Kumar',
				'last_name' => 'Choudhary',
				'reg_no' => 'MS09102',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Rahul',
				'middle_name' => 'Kumar',
				'last_name' => 'Yadav',
				'reg_no' => 'MS09103',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Rajveer',
				'last_name' => 'Nehra',
				'reg_no' => 'MS09104',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Ravi',
				'last_name' => 'Yadav',
				'reg_no' => 'MS09105',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Rishi',
				'last_name' => 'Raj',
				'reg_no' => 'MS09108',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Saksham',
				'last_name' => 'Singh',
				'reg_no' => 'MS09111',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Sampat',
				'middle_name' => 'Kumar',
				'last_name' => 'Sharma',
				'reg_no' => 'MS09112',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Sapna',
				'last_name' => 'Meena',
				'reg_no' => 'MS09114',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Shambhu',
				'last_name' => 'Yadav',
				'reg_no' => 'MS09117',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Shiv',
				'middle_name' => 'Charan',
				'last_name' => 'Dudi',
				'reg_no' => 'MS09119',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Shivpal',
				'middle_name' => 'Singh',
				'last_name' => 'Kang',
				'reg_no' => 'MS09120',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Sonika',
				'last_name' => ' ',
				'reg_no' => 'MS09123',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Soniya',
				'last_name' => 'Sharma',
				'reg_no' => 'MS09124',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Srishti',
				'last_name' => 'Batra',
				'reg_no' => 'MS09126',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Sudeep',
				'last_name' => 'Maheshwari',
				'reg_no' => 'MS09127',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Titiksh',
				'last_name' => 'Gupta',
				'reg_no' => 'MS09131',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Uttam',
				'middle_name' => 'Kumar',
				'last_name' => 'Saini',
				'reg_no' => 'MS09133',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Vidit',
				'last_name' => 'Agrawal',
				'reg_no' => 'MS09134',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Vikash',
				'last_name' => 'Dhindhwal',
				'reg_no' => 'MS09135',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Vrinda',
				'middle_name' => 'Ravi',
				'last_name' => 'Kumar',
				'reg_no' => 'MS09137',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Yash',
				'last_name' => 'Maurya',
				'reg_no' => 'MS09138',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Yatendra',
				'middle_name' => 'Singh',
				'last_name' => 'Arya',
				'reg_no' => 'MS09139',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create( array(
				'first_name' => 'Mariyam',
				'last_name' => 'Fatima',
				'reg_no' => 'MS09140(T)',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
		
		}

		public function seed10()
		{
			DB::query('TRUNCATE TABLE students');
			
			Student::create(array(
				'role' => 0,
				'first_name' => 'D',
				'middle_name' => 'Jeiyendira',
				'last_name' => 'Pradeep',
				'reg_no' => 'MS10001',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'H',
				'middle_name' => 'Rajanikanta',
				'last_name' => 'Sharma',
				'reg_no' => 'MS10002',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Pranay',
				'middle_name' => 'Deep',
				'last_name' => 'Rungta',
				'reg_no' => 'MS10004',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Prashant',
				'last_name' => 	' ',
				'reg_no' => 'MS10005',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Pratip',
				'last_name' => 'Chakraborty',
				'reg_no' => 'MS10006',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Upakul',
				'last_name' => 'Sharma',
				'reg_no' => 'MS10008',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Prachi',
				'middle_name' => 'Madhukar',
				'last_name' => 'Dabhade',
				'reg_no' => 'MS10009',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Shahanaz',
				'last_name' => 'Nazar',
				'reg_no' => 'MS10010',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Sharmi',
				'last_name' => 'Sen',
				'reg_no' => 'MS10012',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Shachikanta',
				'last_name' => 'Nongthombam',
				'reg_no' => 'MS10013',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Ananya',
				'last_name' => 'Rastogi',
				'reg_no' => 'MS10015',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Debanjana',
				'last_name' => 'Kundu',
				'reg_no' => 'MS10017',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Nidhi',
				'last_name' => 'Kaihnsa',
				'reg_no' => 'MS10020',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Geetananda',
				'last_name' => 'Thingujam',
				'reg_no' => 'MS10022',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Ane',
				'middle_name' => 'Nishitha',
				'last_name' => 'V',
				'reg_no' => 'MS10023',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Preetha',
				'last_name' => 'Saha',
				'reg_no' => 'MS10024',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Prerna',
				'last_name' => 'Paliwal',
				'reg_no' => 'MS10025',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Aneeshma',
				'last_name' => 'Peter',
				'reg_no' => 'MS10026',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Ajeet',
				'middle_name' => 'Kumar',
				'last_name' => 'Choudhri',
				'reg_no' => 'MS10027',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Irfana',
				'last_name' => 'Saleem',
				'reg_no' => 'MS10028',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Cigole',
				'last_name' => 'Thomas',
				'reg_no' => 'MS10029',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Jagadish',
				'middle_name' => 'Prasad',
				'last_name' => 'Hazra',
				'reg_no' => 'MS10031',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Jagdale',
				'middle_name' => 'Gargi',
				'last_name' => 'Satishraj',
				'reg_no' => 'MS10032',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Mahendra',
				'last_name' => 'Singh',
				'reg_no' => 'MS10033',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Ushasi',
				'last_name' => 'Dutta',
				'reg_no' => 'MS10035',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Akhil',
				'middle_name' => 'V',
				'last_name' => 'Gopal',
				'reg_no' => 'MS10036',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Abhishek',
				'last_name' => 'Gaurav',
				'reg_no' => 'MS10037',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Rahul',
				'last_name' => 'Chajwa',
				'reg_no' => 'MS10038',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Kshitiz',
				'last_name' => 'Mohan',
				'reg_no' => 'MS10039',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Asha',
				'last_name' => 'Raju',
				'reg_no' => 'MS10040',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Ashwani',
				'last_name' => 'Tomar',
				'reg_no' => 'MS10042',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Ashish',
				'last_name' => 'Kumar',
				'reg_no' => 'MS10043',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Shivam',
				'last_name' => 'Umarvaishya',
				'reg_no' => 'MS10044',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Shiji',
				'middle_name' => 'L',
				'last_name' => 'V',
				'reg_no' => 'MS10045',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Shivprasad',
				'middle_name' => 'Gangadhar',
				'last_name' => 'Patil',
				'reg_no' => 'MS10047',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Shivprajval',
				'last_name' => 'Divakar',
				'reg_no' => 'MS10048',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Priyanka',
				'middle_name' => 'Jeeth D',
				'last_name' => 'P',
				'reg_no' => 'MS10049',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Aniket',
				'last_name' => 'Gaur',
				'reg_no' => 'MS10050',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Krishna',
				'middle_name' => 'K',
				'last_name' => 'Das',
				'reg_no' => 'MS10051',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Rajat',
				'last_name' => 'Garg',
				'reg_no' => 'MS10053',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Tejinder',
				'middle_name' => 'Singh',
				'last_name' => 'Chechi',
				'reg_no' => 'MS10054',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Vikram',
				'last_name' => 'Sharma',
				'reg_no' => 'MS10055',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Ankur',
				'middle_name' => 'Kr',
				'last_name' => 'Gupta',
				'reg_no' => 'MS10056',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Ankit',
				'middle_name' => 'Kumar',
				'last_name' => 'Agrawal',
				'reg_no' => 'MS10057',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Sekhar',
				'middle_name' => 'M',
				'last_name' => 'A',
				'reg_no' => 'MS10058',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Sukriti',
				'last_name' => ' ',
				'reg_no' => 'MS10059',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Sukanya',
				'middle_name' => 'V',
				'last_name' => 'S',
				'reg_no' => 'MS10060',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Lilit',
				'last_name' => 'Jacob',
				'reg_no' => 'MS10061',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Pallavi',
				'last_name' => ' ',
				'reg_no' => 'MS10062',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Ramadasu',
				'last_name' => 'Swathi',
				'reg_no' => 'MS10063',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Samant',
				'middle_name' => 'Manas',
				'last_name' => 'Arun',
				'reg_no' => 'MS10064',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Sumit',
				'middle_name' => 'Chandra',
				'last_name' => 'mishra',
				'reg_no' => 'MS10065',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Tanya',
				'middle_name' => 'Kaushal',
				'last_name' => 'Srivastava',
				'reg_no' => 'MS10066',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Gunidhar',
				'last_name' => 'Yengkhom',
				'reg_no' => 'MS10067',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Soniya',
				'last_name' => 'Rani',
				'reg_no' => 'MS10068',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Monika',
				'last_name' => ' ',
				'reg_no' => 'MS10069',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Anoop',
				'last_name' => 'Kumar',
				'reg_no' => 'MS10071',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Vipin',
				'middle_name' => 'T',
				'last_name' => 'Raj',
				'reg_no' => 'MS10073',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Rupali',
				'last_name' => 'Chawla',
				'reg_no' => 'MS10074',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Harshita',
				'last_name' => 'Pawar',
				'reg_no' => 'MS10075',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Tara',
				'last_name' => 'George',
				'reg_no' => 'MS10076',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Parvathy',
				'last_name' => 'Ramesh',
				'reg_no' => 'MS10077',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Karande',
				'middle_name' => 'Kranti',
				'last_name' => 'Yuvaraj',
				'reg_no' => 'MS10078',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Nishant',
				'last_name' => 'Agrawal',
				'reg_no' => 'MS10079',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Haseeb',
				'last_name' => 'Hakkim',
				'reg_no' => 'MS10081',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Nishant',
				'last_name' => ' ',
				'reg_no' => 'MS10083',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Pushkal',
				'last_name' => 'Srivastava',
				'reg_no' => 'MS10084',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Deshmukh',
				'middle_name' => 'Neeraj',
				'last_name' => 'Ravindra',
				'reg_no' => 'MS10085',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Reshma',
				'last_name' => 'Murali',
				'reg_no' => 'MS10086',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Nitesh',
				'last_name' => 'Bhardwaj',
				'reg_no' => 'MS10087',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Nitish',
				'last_name' => 'Kumar',
				'reg_no' => 'MS10088',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Nitin',
				'middle_name' => 'Kumar',
				'last_name' => 'Singh',
				'reg_no' => 'MS10089',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Anubhav',
				'last_name' => ' ',
				'reg_no' => 'MS10091',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Anu',
				'last_name' => 'Yadav',
				'reg_no' => 'MS10092',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Lourembam',
				'last_name' => 'Thoithoi',
				'reg_no' => 'MS10094',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Arul',
				'middle_name' => 'Ganesh',
				'last_name' => 'S S',
				'reg_no' => 'MS10096',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Anubhuti',
				'last_name' => 'Singh',
				'reg_no' => 'MS10097',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Raut',
				'middle_name' => 'Akshay',
				'last_name' => 'Hemant',
				'reg_no' => 'MS10098',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => ' Divya',
				'last_name' => 'Sharma',
				'reg_no' => 'MS10099',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Vivek',
				'middle_name' => 'B',
				'last_name' => 'Raina',
				'reg_no' => 'MS10100',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Aaveg',
				'last_name' => 'Aggarwal',
				'reg_no' => 'MS10101',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Ravi',
				'last_name' => 'Ranjan',
				'reg_no' => 'MS10102',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Ravinder',
				'last_name' => 'Singh',
				'reg_no' => 'MS10103',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Shweta',
				'last_name' => 'kumari',
				'reg_no' => 'MS10104',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Sayali',
				'middle_name' => 'Rangarao',
				'last_name' => 'Chougale',
				'reg_no' => 'MS10105',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Piyush',
				'last_name' => 'Mishra',
				'reg_no' => 'MS10106',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Arya',
				'middle_name' => 'J',
				'last_name' => 'S',
				'reg_no' => 'MS10107',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Manpreet',
				'last_name' => 'Kaler',
				'reg_no' => 'MS10108',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Mahima',
				'last_name' => ' ',
				'reg_no' => 'MS10109',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Bharti',
				'last_name' => 'Kumari',
				'reg_no' => 'MS10110',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Nirdosh',
				'last_name' => 'Dadwal',
				'reg_no' => 'MS10111',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Ashima',
				'middle_name' => 'Valentina',
				'last_name' => 'Minj',
				'reg_no' => 'MS10112',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Monish',
				'middle_name' => 'Kr`',
				'last_name' => 'Babbar',
				'reg_no' => 'MS10113',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Bangal',
				'middle_name' => 'Yogesh',
				'last_name' => 'Manga',
				'reg_no' => 'MS10114',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Navdeep',
				'last_name' => 'Singh',
				'reg_no' => 'MS10116',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));

		}

		public function seed11()
		{
			DB::query('TRUNCATE TABLE students');
			
			Student::create(array(
				'role' => 0,
				'first_name' => 'Athira',
				'middle_name' => 'J',
				'last_name' => 'Nair',
				'reg_no' => 'MS11001',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Arpit',
				'last_name' => 'Porwal',
				'reg_no' => 'MS11002',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Atul',
				'middle_name' => 'Singh',
				'last_name' => 'Arora',
				'reg_no' => 'MS11003',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Biplob',
				'middle_name' => 'Kumar',
				'last_name' => 'Nandy',
				'reg_no' => 'MS11004',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Saumya',
				'last_name' => 'Gupta',
				'reg_no' => 'MS11005',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Srijit',
				'last_name' => 'Mukherjee',
				'reg_no' => 'MS11006',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Kirti',
				'last_name' => 'Singh',
				'reg_no' => 'MS11007',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Abhishek',
				'last_name' => ' ',
				'reg_no' => 'MS11009',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Joydeep',
				'last_name' => 'Chakravarthy',
				'reg_no' => 'MS11010',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Love',
				'last_name' => 'Grover',
				'reg_no' => 'MS11011',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Garima',
				'last_name' => 'Singh',
				'reg_no' => 'MS11012',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Neha',
				'last_name' => 'Sharma',
				'reg_no' => 'MS11014',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Devwrat',
				'last_name' => 'Dube',
				'reg_no' => 'MS11015',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Kishor',
				'last_name' => 'Bharti',
				'reg_no' => 'MS11016',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Vivek',
				'last_name' => 'Sagar',
				'reg_no' => 'MS11017',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Rajendra',
				'middle_name' => 'Singh',
				'last_name' => 'Bhati',
				'reg_no' => 'MS11019',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Deepanshu',
				'last_name' => ' ',
				'reg_no' => 'MS11020',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Prashansa',
				'last_name' => 'Gupta',
				'reg_no' => 'MS11021',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Diksha',
				'last_name' => 'Jain',
				'reg_no' => 'MS11022',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Shiven',
				'last_name' => 'Dhiman',
				'reg_no' => 'MS11023',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Akshey',
				'last_name' => 'Sandhu',
				'reg_no' => 'MS11024',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Ritu',
				'middle_name' => 'Roy',
				'last_name' => 'Choudhury',
				'reg_no' => 'MS11025',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Abhinav',
				'last_name' => 'Kala',
				'reg_no' => 'MS11026',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Jopaul',
				'last_name' => 'Mathew',
				'reg_no' => 'MS11027',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Akhilrag',
				'last_name' => 'K',
				'reg_no' => 'MS11028',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Athira',
				'middle_name' => 'T',
				'last_name' => 'John',
				'reg_no' => 'MS11029',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Akhil',
				'last_name' => 'Francis',
				'reg_no' => 'MS11030',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Anooja',
				'last_name' => 'Jayaraj',
				'reg_no' => 'MS11031',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Shubham',
				'last_name' => 'Chauhan',
				'reg_no' => 'MS11032',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Manu',
				'last_name' => 'J',
				'reg_no' => 'MS11033',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Sruthi',
				'last_name' => 'Mohan',
				'reg_no' => 'MS11034',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Evelyn',
				'last_name' => 'Abraham',
				'reg_no' => 'MS11035',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Manisha',
				'last_name' => ' ',
				'reg_no' => 'MS11036',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Amritha',
				'last_name' => 'Sreekumar',
				'reg_no' => 'MS11037',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Sandhya',
				'last_name' => ' ',
				'reg_no' => 'MS11038',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Justin',
				'middle_name' => 'K',
				'last_name' => 'Thomas',
				'reg_no' => 'MS11039',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Aakanksha',
				'last_name' => 'Rawat',
				'reg_no' => 'MS11040',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Varun',
				'last_name' => 'Kumar',
				'reg_no' => 'MS11041',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Yashpal',
				'last_name' => 'Singh',
				'reg_no' => 'MS11042',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Gaikwad',
				'middle_name' => 'Akshay',
				'last_name' => 'Ramdas',
				'reg_no' => 'MS11043',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Manvendra',
				'last_name' => 'Singh',
				'reg_no' => 'MS11044',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Shwetha',
				'last_name' => 'S',
				'reg_no' => 'MS11045',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Tess',
				'last_name' => 'George',
				'reg_no' => 'MS1104',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Gobbilla',
				'middle_name' => 'Sai',
				'last_name' => 'Kumar',
				'reg_no' => 'MS11047',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Thapasya',
				'last_name' => 'Vijayan',
				'reg_no' => 'MS1104',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Partha',
				'middle_name' => 'Sankar',
				'last_name' => 'R P S',
				'reg_no' => 'MS11049',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Priyanka',
				'middle_name' => 'Sudheendra',
				'last_name' => 'Jamadagni',
				'reg_no' => 'MS11050',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Biswajit',
				'last_name' => 'Panda',
				'reg_no' => 'MS11051',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Raminder',
				'last_name' => 'Singh',
				'reg_no' => 'MS11052',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Saurabh',
				'last_name' => 'Thapliyal',
				'reg_no' => 'MS11053',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Sabari',
				'last_name' => 'R',
				'middle_name' => 'V',
				'reg_no' => 'MS11054',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Teke',
				'middle_name' => 'Nakul',
				'last_name' => 'Kushabhau',
				'reg_no' => 'MS1105',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Abhinay',
				'last_name' => 'Vardhan',
				'reg_no' => 'MS11057',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Gyanendra',
				'last_name' => 'Yadav',
				'reg_no' => 'MS11058',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Rashmi',
				'last_name' => 'Jain',
				'reg_no' => 'MS11059',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Yosman',
				'middle_name' => 'Bapat',
				'last_name' => 'Dhar',
				'reg_no' => 'MS11060',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Jagdeep',
				'last_name' => 'Singh',
				'reg_no' => 'MS11061',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Rohit',
				'middle_name' => 'Kumar',
				'last_name' => 'Patidar',
				'reg_no' => 'MS11062',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Aiswarya',
				'middle_name' => 'Joy',
				'last_name' => 'M',
				'reg_no' => 'MS11063',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Lakshmi',
				'middle_name' => 'Bhai',
				'last_name' => 'N V',
				'reg_no' => 'MS11064',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Deepthi',
				'middle_name' => 'Krishna',
				'last_name' => 'P',
				'reg_no' => 'MS11065',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Harikrishnan',
				'middle_name' => 'P',
				'last_name' => 'S',
				'reg_no' => 'MS11066',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Vivek',
				'last_name' => 'Singh',
				'reg_no' => 'MS1106',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Arsila',
				'middle_name' => 'Ashraf',
				'last_name' => 'P K',
				'reg_no' => 'MS11068',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Gursimranjeet',
				'last_name' => 'Singh',
				'reg_no' => 'MS11070',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Aman',
				'middle_name' => 'Kumar',
				'last_name' => 'Bhonsle',
				'reg_no' => 'MS11071',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Barun',
				'last_name' => 'Khaidem',
				'reg_no' => 'MS11072',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Arjit',
				'middle_name' => 'Kant',
				'last_name' => 'Gupta',
				'reg_no' => 'MS11073',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Vaishali',
				'last_name' => ' ',
				'reg_no' => 'MS11074',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Saneedh',
				'last_name' => 'Anand',
				'reg_no' => 'MS11075',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Santosh',
				'last_name' => 'Kumari',
				'reg_no' => 'MS11076',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Anjali',
				'last_name' => 'Mahadevan',
				'reg_no' => 'MS11077',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Manmohan',
				'last_name' => ' ',
				'reg_no' => 'MS11078',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Ruchika',
				'last_name' => ' ',
				'reg_no' => 'MS11079',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Manvendra',
				'middle_name' => 'Pratap',
				'last_name' => 'Rajvanshi',
				'reg_no' => 'MS11080',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Ankita',
				'last_name' => 'Verma',
				'reg_no' => 'MS11082',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Dhanya',
				'middle_name' => 'Ann',
				'last_name' => 'Thomas',
				'reg_no' => 'MS11083',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Rashmi',
				'last_name' => 'Sinha',
				'reg_no' => 'MS11084',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Yengkhom',
				'last_name' => 'Sunanda',
				'reg_no' => 'MS11085',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Manu',
				'last_name' => 'S',
				'reg_no' => 'MS11086',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));

		}

		public function seed_admin()
		{
			DB::query('TRUNCATE TABLE students');
			
			Student::create(array(
				'role' => 0,
				'first_name' => 'Gagan',
				'middle_name' => 'Preet',
				'last_name' => 'Singh',
				'reg_no' => 'MS08021',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));
			Student::create(array(
				'role' => 0,
				'first_name' => 'Atul',
				'middle_name' => 'Singh',
				'last_name' => 'Arora',
				'reg_no' => 'MS11003',
				'hostel' => 1,
				'batch' => 1,
				'voted' => false
			));

		}
	}