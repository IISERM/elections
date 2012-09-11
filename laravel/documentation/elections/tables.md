# Table of Contents
<table>
	<tr>
		<th>Model</th><th>Table</th>
	</tr>
	<tr>
		<td>
			<a href="#student">Student</a>
		</td>
		<td>
			<a href="#student">students</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="#post">Post</a>
		</td>
		<td>
			<a href="#post">posts</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="#nominee">Nominee</a>
		</td>
		<td>
			<a href="#nominee">nominees</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="#batch">Batch</a>
		</td>
		<td>
			<a href="#batch">batches</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="#subject">Subject</a>
		</td>
		<td>
			<a href="#subject">subjects</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="#hostel">Hostel</a>
		</td>
		<td>
			<a href="#hostel">hostels</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="#vote">Vote</a>
		</td>
		<td>
			<a href="#vote">votes</a>
		</td>
	</tr>
</table>



# _Tables_
<a name="student"></a>
# Student - students
### List of voters
#### _Model_	:	*Student*
#### _Table_	:	*students*
## Column
	id			-	Autoincrement
	first_name	-	String
	middle_name	-	String
	last_name	-	String
	reg_no		-	String
	role		-	Integer
	voted		-	Integer
	hostel		-	Integer
	batch		-	Integer
	subject		-	Integer
	sex			-	Integer
	password	-	String
	timestamps	-	DateTimes
## Relations
	n-1 => belongs to => Hostel
	n-1 => belongs to => Batch
	n-1 => belongs to => Subject
## Data
	Integer		=>	id				=>	ID
	String		=>	first_name		=>	First Name
	String		=>	middle_name		=>	Middle Name
	String		=>	last_name		=>	Last Name
	String		=>	reg_no			=>	Registration Number
	Booleen		=>	role			=>	Role		(Administrative - True)
	Booleen		=>	voted			=>	Voted		(Has Voted - True)
	Booleen		=>	sex				=>	Sex			(Male - True)
	String		=>	password		=>	Password
<a name="post"></a>
# Post - posts
### List of posts
#### _Model_	:	*Post*
#### _Table_	:	*posts*
## Column
	id			-	Autoincrement
	post		-	String
	number		-	Integer
	timestamps	-	DateTimes
## Relations
	n-n => has many and belongs to 	=> Hostel
	n-n => has many and belongs to 	=> Batch
	1-n => has many 				=> Nominees
## Data
	Integer		=>	id				=>	ID
	String		=>	post			=>	Post Name
	Integer		=>	number			=>	Number of Posts
<a name="nominee"></a>
# Nominee - nominees
### List of nominees
#### _Model_	:	*Nominee*
#### _Table_	:	*nominees*
## Column
	id			-	Autoincrement
	name		-	String
	post		-	Integer
	img			-	String
	timestamps	-	DateTimes
## Relations
	n-1 => belongs to 	=> Post
	1-n => has many 	=> Nominees
## Data
	Integer		=>	id				=>	ID
	String		=>	name			=>	Name of the Nominee
	String		=>	img				=>	Image name and extension
<a name="batch"></a>
# Batch - batches
### List of batches
#### _Model_	:	*Batch*
#### _Table_	:	*batches*
## Column
	id			-	Autoincrement
	batch		-	String
	timestamps	-	DateTimes
## Relations
	1-n => has many 			 	=> Student
	n-n => has many and belongs to	=> Post
	n-n => has many and belongs to	=> Subject
	n-n => has many and belongs to	=> Hostel
## Data
	Integer		=>	id				=>	ID
	String		=>	batch			=>	Name of Batch
<a name="subject"></a>
# Subject - subjects
### List of subjects
#### _Model_	:	*Subject*
#### _Table_	:	*subjects*
## Column
	id			-	Autoincrement
	subject		-	String
	timestamps	-	DateTimes
## Relations
	1-n => has many 			 	=> Student
	n-n => has many and belongs to	=> Batch
## Data
	Integer		=>	id				=>	ID
	String		=>	subject			=>	Name of the subject
<a name="hostel"></a>
# Hostel - hostels
### List of hostels
#### _Model_	:	*Hostel*
#### _Table_	:	*hostels*
## Column
	id			-	Autoincrement
	hostel		-	String
	timestamps	-	DateTimes
## Relations
	1-n => has many 			 	=> Student
	n-n => has many and belongs to	=> Batch
## Data
	Integer		=>	id				=>	ID
	String		=>	subject			=>	Name of the subject
<a name="vote"></a>
# Vote - votes
### List of votes
#### _Model_	:	*Vote*
#### _Table_	:	*votes*
## Column
	id			-	Autoincrement
	vote		-	String
	timestamps	-	DateTimes
## Relations
	n-n => has many and belongs to	=> Posts	=> via Nominee
## Data
	Integer		=>	id				=>	ID
	String		=>	vote			=>	Crypt name of the voters














