<!doctype html>
<html lang="en" ng-app="myApp">
<head>
	<meta chrset="utf-8">
	<title>Online Elections @ IISER M</title>

	<link rel="Shortcut Icon" href=<?php echo "\"".URL::base()."/img/favicon.ico\""; ?> />
	<link rel="stylesheet" type="text/css" href=<?php echo "\"".URL::base()."/css/election.css\""; ?> />

	<script type="text/javascript" src=<?php echo "\"".URL::base()."/js/jquery-1.7.2.js\""; ?>> </script>
	<script type="text/javascript" src=<?php echo "\"".URL::base()."/js/angular-1.0.1.js\""; ?>> </script>
</head>

<body ng-controller="elections" style="background-image: url(<?php echo URL::base()."/img/pattern.png"; ?>), url(<?php echo URL::base()."/img/Research_at_IISER_background.jpg"; ?>);">
	<div class="Bar">
		<div class="Vertical_Align_Top Bar_height">
			<div class="Bar_link"><a class="Bar_link" href= "<?php echo URL::base()."/index.php/logout" ?> "  >Sign Out</a></div>
			<div class="Page_Heading">Elections @ IISER M</div>
			<div class="selection_state">{{user.name}}<br/>
				{{user.gender}}, {{user.batch}} batch, Hostel {{user.hostel}}
			</div>			
		</div>

	</div>
	<div class="Bar_height"></div>

	<div ng-hide="user.voted">
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
			<votepanel ng-repeat="category in categories" id="{{category.id}}" title="{{category.title}}" selected="category.selected" ng-model="category.selected" >
				<center>				
					<nominee ng-repeat="person in category.list" category="{{category.id}}" selected="category.selected" ng-model="category.selected" id="{{person.id}}" name="{{person.name}}" link="{{person.link}}" basepath="<?php echo URL::base()."/img/"; ?>"/>				
			</votepanel>
		</center>
	</div>
	<div ng-show="user.voted">
		<center>
			<div class="main_group">
				Waiting for Server...
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
	<script type="text/javascript" src=<?php echo "\"".URL::base()."/js/election.js\""; ?>> </script>
</body>

</html>