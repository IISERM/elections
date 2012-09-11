<!doctype html>
<html lang="en" ng-app="myApp">

<head>
	<meta chrset="utf-8">
	<title>Settings | NaveenTantra</title>

	<link rel="Shortcut Icon" href=<?php echo "\"".URL::base()."/img/favicon.ico\""; ?> />
	<link rel="stylesheet" type="text/css" href=<?php echo "\"".URL::base()."/css/admin/settings.css\""; ?> />

	<script type="text/javascript" src=<?php echo "\"".URL::base()."/js/jquery-1.7.2.js\""; ?>> </script>
	<script type="text/javascript" src=<?php echo "\"".URL::base()."/js/angular-1.0.1.js\""; ?>> </script>
</head>

<body ng-controller="settings" style="background-image: url(<?php echo URL::base()."/img/pattern.png"; ?>), url(<?php echo URL::base()."/img/100_9048.jpg"; ?>);">
	<input type="text" ng-model="truthSource.io.config.basePath" value="<?php echo "\"".URL::base(); ?>" class="hidden"/>

	<center>
		<div class="fullWidthContainer" ng-hide="truthSource.io.state.working">
			<div class="communicationLog">				
				Something's taking longer than it should. Perhaps you're smarter than the monkeys who made this. Take a shot at it!
				<br/>
				<br/>
				{{truthSource.io.state.log}}
				<!-- ng-show="truthSource.io.working">			 -->				
			</div>
		</div>

		<br/>
		<div class="topBar">
			<span><a href="">Log Out</a></span>
			<div class="mainTitle">NaveenTantra</div>
			<span><div class="subTitle">Admin Panel</div></span>
			<div ng-show="truthSource.io.state.working">Loading..{{truthSource.io.state.working}}</div>
		</div>
		
		<br/><br/><br/><br/><br/><br/>

		<p class="subSubTitle">Students</p>
		<input type="text" ng-model="config.student.search" placeholder="Quick Search" />
		<span>		
			<a href='' ng-click="config.student.reverse=false">Ascending</a> | 
			<a href='' ng-click="config.student.reverse=true">Descending</a>				
		</span>

		<table>

			<tr>
				<th><input type="radio" name="studentSort" ng-model="config.student.orderBy"
					value="first_name" id="student_first_name"/>
					<label for="student_first_name">Name</label></th>

				<th><input type="radio" name="studentSort" ng-model="config.student.orderBy"
					value="hostel" id="student_hostel"/>
					<label for="student_hostel">Hostel</label></th>

				<th><input type="radio" name="studentSort" ng-model="config.student.orderBy"
					value="batch" id="student_batch"/>
					<label for="student_batch">Batch</label></th>

				<th><input type="radio" name="studentSort" ng-model="config.student.orderBy"
					value="subject" id="student_subject"/>
					<label for="student_subject">Subject</label></th>

				<th><input type="radio" name="studentSort" ng-model="config.student.orderBy"
					value="sex" id="student_sex"/>
					<label for="student_sex">Sex</label></th>

				<th><input type="radio" name="studentSort" ng-model="config.student.orderBy"
					value="reg_no" id="student_reg_no"/>
					<label for="student_reg_no">Registration No.</label></th>	

				<th></th>
				<th></th>
			</tr>
			<tr ng-repeat="student in students | filter:config.student.search | orderBy:config.student.orderBy:config.student.reverse">
				<td>{{student.first_name + ' ' + student.middle_name + ' ' + student.last_name}}</td>
				<td>
					<select ng-model="student.hostel">
 						<option value="5">5</option>
						<option value="7">7</option>
					</select>
				</td>
				<td>
					<select ng-model="student.batch">
 						<option value="07">07</option>
						<option value="08">08</option>
						<option value="09">09</option>
						<option value="10">10</option>
						<option value="11">11</option>					
					</select>
				</td>
				<td>
					<select ng-model="student.subject">
 						<option value="Physics">Physics</option>
						<option value="Mathematics">Mathematics</option>
						<option value="Chemistry">Chemistry</option>
						<option value="Biology">Biology</option>
						<option value="NA">NA</option>					
					</select>
				</td>
				<td>
					<select ng-model="student.sex">
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				</td>
				<td>
					<input type="text" value="{{student.reg_no}}"/>
				</td>
				<td>
					<a href="" ng-click="DeleteStudent(student.id)">Remove</a>
				</td>
				<td>
					<a href="" ng-click="UpdateStudent(student)">Update</a>
				</td>
			</tr>

			<tr>
				<td>
					<input type="text" ng-model="studentNew.first_name" placeholder="First"/>
					<input type="text" ng-model="studentNew.middle_name" placeholder="Middle"/>
					<input type="text" ng-model="studentNew.last_name" placeholder="Last"/>
				</td>

				<td>
					<select ng-model="studentNew.hostel">
						<option value="5">5</option>
						<option value="7">7</option>
					</select>
				</td>
				<td>
					<select ng-model="studentNew.batch">
						<option value="07">07</option>
						<option value="08">08</option>
						<option value="09">09</option>
						<option value="10">10</option>
						<option value="11">11</option>					
					</select>
				</td>
				<td>
					<select ng-model="studentNew.subject">
						<option value="Physics">Physics</option>
						<option value="Mathematics">Mathematics</option>
						<option value="Chemistry">Chemistry</option>
						<option value="Biology">Biology</option>
						<option value="NA">NA</option>					
					</select>
				</td>
				<td>
					<select ng-model="studentNew.sex">						
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				</td>
				<td>
					<input type="text" ng-model="studentNew.reg_no" placeholder="Registration No"/>
				</td>
				<td>					
				</td>
				<td>
					<a href="" ng-click="AddStudent(studentNew)">Add</a>
				</td>
			</tr>		
		</table>
	</center>	
	<script type="text/javascript" src=<?php echo "\"".URL::base()."/js/admin/settings.js\""; ?>> </script>
</body>

</html>