<!doctype html>
<html lang="en" ng-app="myApp">

<head>
	<meta chrset="utf-8">
	<title>Settings | NaveenTantra</title>

	<link rel="Shortcut Icon" href=<?php echo "\"".URL::base()."/img/favicon.ico\""; ?> />
	<!-- <link rel="stylesheet" type="text/css" href=<?php echo "\"".URL::base()."/css/election.css\""; ?> /> -->

	<script type="text/javascript" src=<?php echo "\"".URL::base()."/js/jquery-1.7.2.js\""; ?>> </script>
	<script type="text/javascript" src=<?php echo "\"".URL::base()."/js/angular-1.0.1.js\""; ?>> </script>
</head>

<body ng-controller="settings" style="background-image: url(<?php echo URL::base()."/img/pattern.png"; ?>), url(<?php echo URL::base()."/img/100_9048.jpg"; ?>);">
	<table>
		<tr>
			<th>Name</th>
			<th>Hostel</th>
			<th>Batch</th>
			<th>Subject</th>
			<th>Sex</th>
			<th>Reg No</th>	
			<th>Delete</th>	
			<th>Update</th>	
		</tr>
		<tr ng-repeat="student in students">
			<td>{{student.first_name + student.middle_name + student.last_name}}</td>
		</tr>
	</table>
	
	<script type="text/javascript" src=<?php echo "\"".URL::base()."/js/admin/settings.js\""; ?>> </script>
</body>

</html>