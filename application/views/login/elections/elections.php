<!doctype html>
<html lang="en" ng-app="myApp">

<head>
	<meta chrset="utf-8">
	<title>Naveen Tantra</title>

	<link rel="Shortcut Icon" href=<?php echo "\"".URL::base()."/img/favicon.ico\""; ?> />
	<link rel="stylesheet" type="text/css" href=<?php echo "\"".URL::base()."/css/election.css\""; ?> />

	<script type="text/javascript" src=<?php echo "\"".URL::base()."/js/jquery-1.7.2.js\""; ?>> </script>
	<script type="text/javascript" src=<?php echo "\"".URL::base()."/js/angular-1.0.1.js\""; ?>> </script>
</head>

<body ng-controller="elections" style="background-image: url(<?php echo URL::base()."/img/pattern.png"; ?>), url(<?php echo URL::base()."/img/100_9048.jpg"; ?>);">
	<div class="Bar">
		<div class="Vertical_Align_Top Bar_height">
			<div class="Bar_link"><a class="Bar_link" href= "<?php echo URL::base()."/index.php/logout" ?> "  >Sign Out</a></div>
			<div class="Page_Heading">Naveen Tantra</div>
			<div class="Page_SubHeading">(Online Elections @ IISER M)</div>
			<div class="selection_state">{{user.name}}<br/>
				{{user.gender}}, {{user.batch}} batch, Hostel {{user.hostel}}
			</div>			
		</div>

	</div>
	<basepathwidget path="<?php echo URL::base(); ?>" fall="DAMN"> </basepathwidget>
	<div class="Bar_height"></div>

	<div ng-show="user.voted==0">
		<!-- Just to have the right value -->
		<!-- <input ng-model="base_path" value="haha" /> -->
		<!-- value="<?php echo URL::base()."/img/"; ?>" /> -->

		<div class="selection_state {{hideSide}}">
			<table>
				<tr>
					<th>Category</th>
					<th>Selection</th>
				</tr>

				<tr ng-repeat="category in categories" class="selected_{{category.selected.id}}">
					<td>{{category.title}}</td>
					<td>{{getNameFromList(category,category.selected.id)}}</td>
				</tr>
			</table>
			<p class="linklike" ng-click="cast()">Cast My Vote!</p>
			<p class="smallLink" ng-click="hideSideF()">{{hideSide}}</p>

			<!-- <div ng-repeat="category in categories"> <p><tt>For Category:</tt>{{category.title}}, <br> <tt>you've selected:</tt>{{getNameFromList(category,category.selected.id)}}</p>	</div> -->
		</div>
		<center>
			<votepanel ng-repeat="category in categories" id="{{category.id}}" cat-name="{{category.title}}" selected="category.selected" ng-model="category.selected" >				
					<nominee ng-repeat="person in category.list | orderBy:'name'" category="{{category.id}}" selected="category.selected" ng-model="category.selected" id="{{person.id}}" name="{{person.name}}" link="{{person.link}}" basepath="<?php echo URL::base()."/img/"; ?>"/>				
			</votepanel>
			<br/>
			<p class="linklike" ng-click="hideSideF()">Show/Hide Vote Panel</p>
		</center>

	</div>
	<div ng-show="user.voted==2">
		<center>
			<div class="main_group" ng-show="voteCastMsg==''">
				Waiting for Server...
			</div>
			<div class="main_group" ng-hide="voteCastMsg==''">
				{{voteCastMsg}}
			</div>
		</center>

		<p class="linklike" ng-click="toggle_votes()">Show/Hide who I voted for</p>
		<div ng-show="custom.showvotes" class="selection_state">
			<table>
				<tr>
					<th>Category</th>
					<th>Selection</th>
				</tr>

				<tr ng-repeat="category in categories" class="selected_{{category.selected.id}}">
					<td>{{category.title}}</td>
					<td>{{getNameFromList(category,category.selected.id)}}</td>
				</tr>
			</table>
			
		</div>
	</div>
	<div ng-show="user.voted==1">
		<center>
			<div class="main_group" ng-show="voteCastMsg==''">
				In accordance with our records, you've already exercised your right to cast a vote.<br/>
				If this information is inaccurate, please contact the Election Commission immediately.
			</div>
		</center>		
	</div>

	<script type="text/javascript" src=<?php echo "\"".URL::base()."/js/election.js\""; ?>> </script>
		

</body>

</html>