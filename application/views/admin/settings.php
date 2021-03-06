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
	<input id="basePathProvider" type="text" value="<?php echo URL::base(); ?>" class="hidden"/>
	<basepathwidget path="<?php echo URL::base(); ?>" fall="DAMN"> </basepathwidget>
	<center>
		<!-- <div ng-hide="isoNominees || isoPosts || isoStudents"> -->
			<div class="fullWidthContainer">
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
				<span><a href= "<?php echo URL::base()."/index.php/logout" ?> ">Sign Out</a></span>
				<div class="mainTitle">NaveenTantra</div>
				<span><div class="subTitle">Admin Panel</div></span>			
				<!-- || truthSource.io.state.last=='Success' -->
				<div class="smallStat2" ng-dblclick="truthSource.io.state.last=''" ng-click="config.other.hideCount=60" ng-hide="truthSource.io.state.last==''"><div class="smallFont">Last Response (Auto hide in: {{config.other.hideCount}}):</div> {{truthSource.io.state.last}}</div>				
				<div ng-show="updatingInterface" class="smallStat">Processing Data<br/> Please Wait</div>
				<div ng-show="truthSource.io.state.working" class="smallStat3">Talking to the Server<br/> Please Wait</div>								
				<!-- <div ng-show="truthSource.io.state.working || updatingInterface" class="smallStat">Loading<br/> Please Wait</div> -->
			</div>

	<!-- 		<div class="loadingStat" ng-show="truthSource.io.state.working || updatingInterface">	
				The supernatural is being invoked and data processed,<br/>
				Sit tight, and for your sins, you may now confess. <br/>
				The morning shall reveal, hidden faces, protected and concealed <br/>
				Fails, if the sun to rise, with persistence, we will fight the fierce night.
			</div>
	 -->		
			<br/><br/><br/>
			<br/><br/><br/>
			<br/>
		<!-- </div> -->

		<div ng-hide="isoNominees || isoPosts || isoResults">
			<hr/>
			<p class="subSubTitle">Students</p>
			<a href='' ng-click="isoStudents=1">Isolate</a> | <a href='' ng-click="isoStudents=0">Normal</a>
			<br/><br/>

			<a href='' ng-hide="studentsCollapse=='hide'" ng-click="studentsCollapse='hide'">Collapse</a>
			<a href='' ng-show="studentsCollapse=='hide'" ng-click="studentsCollapse='show'">Show</a>
			<a href='' ng-click="StudentsRefresh()">Refresh List</a>
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
				<tr ng-repeat="student in students | filter:config.student.search | orderBy:config.student.orderBy:config.student.reverse | startFrom:config.student.currentPage*config.student.limitTo | limitTo:config.student.limitTo"  class="students_{{studentsCollapse}}">
					<td>{{student.first_name + ' ' + student.middle_name + ' ' + student.last_name}}</td>
					<td>
						<select ng-model="student.hostel">
							<option value="7">7</option>
							<option value="5">5</option>
						</select>
					</td>
					<td>
						<select ng-model="student.batch">
	 						<option value="Int. PhD">Int. PhD</option>
							<option value="PhD">PhD</option>
	 						<option value="MS07">MS07</option>
							<option value="MS08">MS08</option>
							<option value="MS09">MS09</option>
							<option value="MS10">MS10</option>
							<option value="MS11">MS11</option>					
							<option value="MS12">MS12</option>
						</select>
					</td>
					<td>
						<select ng-model="student.subject">
							<!-- <option ng-repeat="sub in subjectsField" value="{{sub.name}}">{{sub.name}}</option> -->

	 						<option value="Physics">Physics</option>
							<option value="Mathematics">Mathematics</option>
							<option value="Chemistry">Chemistry</option>
							<option value="Biology">Biology</option>
							<option value="Undeclared">Undeclared</option>					
						
						</select>
					</td>
					<td>
						<select ng-model="student.sex">
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
					</td>
					<td>
						<input type="text" ng-model="student.reg_no"/>
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
						<!-- <input type="text" ng-model="studentNew.email" placeholder="e-mail" /> -->
					</td>

					<td>
						<select ng-model="studentNew.hostel">
							<option value="5">5</option>
							<option value="7">7</option>
						</select>
					</td>
					<td>
						<select ng-model="studentNew.batch">
	 						<option value="Int. PhD">Int. PhD</option>
							<option value="PhD">PhD</option>							
							<option value="MS07">MS07</option>
							<option value="MS08">MS08</option>
							<option value="MS09">MS09</option>
							<option value="MS10">MS10</option>
							<option value="MS11">MS11</option>
							<option value="MS12">MS12</option>
						</select>
					</td>
					<td>
						<select ng-model="studentNew.subject">
							<option value="Physics">Physics</option>
							<option value="Mathematics">Mathematics</option>
							<option value="Chemistry">Chemistry</option>
							<option value="Biology">Biology</option>
							<option value="Undeclared">Undeclared</option>					
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
			<br/>		
			<button ng-disabled="config.student.currentPage==0" ng-click="config.student.currentPage=0">
				First
			</button>
			<button ng-disabled="config.student.currentPage == 0" ng-click="config.student.currentPage=config.student.currentPage-1">
		        Previous
		    </button>
		    {{config.student.currentPage+1}}/{{numberOfPages(students,config.student.limitTo)}}
		    <button ng-disabled="config.student.currentPage >= students.length/config.student.limitTo - 1" ng-click="config.student.currentPage=config.student.currentPage+1">
		        Next
		    </button>
			<button ng-disabled="config.student.currentPage >= students.length/config.student.limitTo - 1" ng-click="config.student.currentPage=numberOfPages(students,config.student.limitTo)-1">
				Last
			</button>
			<br/><br/>	 
			Show a maximum of <input cols="4" type="text" ng-model="config.student.limitTo" placeholder="Maximum Entries" /> rows
			<br/>
			<a href='' ng-click="config.student.limitTo= (+config.student.limitTo)+10">Show 10 more</a> | 
			<a href='' ng-click="config.student.limitTo=20">Default</a>
			<br/><br/>
		</div>

		<div ng-hide="isoNominees || isoStudents || isoResults">
			<hr/>

			<br/>
			<p class="subSubTitle">Posts</p>		
			<a href='' ng-click="isoPosts=1">Isolate</a> | <a href='' ng-click="isoPosts=0">Normal</a>
			<br/><br/>

			<a href='' ng-hide="postsCollapse=='hide'" ng-click="postsCollapse='hide'">Collapse</a>
			<a href='' ng-show="postsCollapse=='hide'" ng-click="postsCollapse='show'">Show</a>
			<a href='' ng-click="PostsRefresh()">Refresh List</a>
			<input type="text" ng-model="config.post.search" placeholder="Quick Search" />
			<span>		
				<a href='' ng-click="config.post.reverse=false">Ascending</a> | 
				<a href='' ng-click="config.post.reverse=true">Descending</a>				
			</span>

			<table>
				<tr>
					<th><input type="radio" name="postSort" ng-model="config.post.orderBy"
						value="name" id="post_name"/>
						<label for="post_name">Name</label></th>
					<th>Hostel</th>
					<th>Batch</th>
					<th>Subject</th>
					<th>Sex</th>
					<th>#Humans</th>
					<th></th>
					<th></th>
				</tr>
				<tr ng-repeat="post in posts | filter:config.post.search | orderBy:config.post.orderBy:config.post.reverse"  class="posts_{{postsCollapse}}">
					<!-- <td>{{post.name}}</td> -->
					<td><input type="input" ng-model="post.name" placeholder="Name of Post"/></td>
					<td>
						<ul>
							<li ng-repeat="hostel in post.hostels">
								<input  type="checkbox" ng-model="hostel.select">{{hostel.name}}</input>
							</li>
						</ul>
					</td>
					<td>
						<ul>
							<li ng-repeat="batch in post.batches">
								<input  type="checkbox" ng-model="batch.select">{{batch.name}}</input>
							</li>
						</ul>
					</td>
					<td>
						<ul>
							<li ng-repeat="subject in post.subjects">
								<input  type="checkbox" ng-model="subject.select">{{subject.name}}</input>
							</li>
						</ul>
					</td>
					<td>
						<ul>
							<li ng-repeat="sex in post.sexes">
								<input  type="checkbox" ng-model="sex.select">{{sex.name}}</input>
							</li>
						</ul>
					</td>
					<td>
						<input type="input" size="3" ng-model="post.number" placeholder="Max #humans"/>
					</td>
					<td>
						<a href="" ng-click="DeletePost(post.id)">Remove</a>
					</td>
					<td>
						<a href="" ng-click="UpdatePost(post)">Update</a>
					</td>

				</tr>
				<tr>
					<td><input type="input" ng-model="postNew.name" placeholder="Name of Post"/></td>
					<td>
						<ul>
							<li ng-repeat="hostel in postNew.hostels">
								<input  type="checkbox" ng-model="hostel.select">{{hostel.name}}</input>
							</li>
						</ul>
					</td>
					<td>
						<ul>
							<li ng-repeat="batch in postNew.batches">
								<input  type="checkbox" ng-model="batch.select">{{batch.name}}</input>
							</li>
						</ul>
					</td>
					<td>
						<ul>
							<li ng-repeat="subject in postNew.subjects">
								<input  type="checkbox" ng-model="subject.select">{{subject.name}}</input>
							</li>
						</ul>
					</td>
					<td>
						<ul>
							<li ng-repeat="sex in postNew.sexes">
								<input  type="checkbox" ng-model="sex.select">{{sex.name}}</input>
							</li>
						</ul>
					</td>
					<td>
						<input type="input" size="3" ng-model="postNew.number" placeholder="Max #humans"/>
					</td>

					<td>					
					</td>
					<td>
						<a href="" ng-click="AddPost(postNew)">Add</a>
					</td>

				</tr>
			
			</table>


			<br/><br/>
		</div>

		<div ng-hide="isoPosts || isoStudents || isoResults">
			<hr/>

			<br/>

			<p class="subSubTitle">Nominees</p>
			<a href='' ng-click="isoNominees=1">Isolate</a> | <a href='' ng-click="isoNominees=0">Normal</a>
			<br/><br/>
		

			<a href='' ng-hide="nomineesCollapse=='hide'" ng-click="nomineesCollapse='hide'">Collapse</a>
			<a href='' ng-show="nomineesCollapse=='hide'" ng-click="nomineesCollapse='show'">Show</a>
			<a href='' ng-click="NomineesRefresh()">Refresh List</a>
			<input type="text" ng-model="config.nominee.search" placeholder="Quick Search" />
			<span>		
				<a href='' ng-click="config.nominee.reverse=false">Ascending</a> | 
				<a href='' ng-click="config.nominee.reverse=true">Descending</a>				
			</span>

			<table>
				<tr>
					<th><input type="radio" name="postSort" ng-model="config.nominee.orderBy"
						value="name" id="nominee_name"/>
						<label for="nominee_name">Name</label></th>
					<th><input type="radio" name="postSort" ng-model="config.nominee.orderBy"
						value="reg_no" id="nominee_reg_no"/>
						<label for="nominee_reg_no">Registration No.</label></th>
					<th><input type="radio" name="postSort" ng-model="config.nominee.orderBy"
						value="post" id="nominee_post"/>
						<label for="nominee_post">Post</label></th>
					<th></th>
					<th></th>
				</tr>
				<tr ng-repeat="nominee in nominees | filter:config.nominee.search | orderBy:config.nominee.orderBy:config.nominee.reverse"  class="nominees_{{nomineesCollapse}}">
					<td>{{nominee.name}}</td>
					<!-- <td><input type="input" ng-model="nominee.name" placeholder="Name of nominee"/></td> -->
					<td>
						<!-- <input type="input" ng-model="nominee.reg_no" placeholder="Registration Number"/> -->
						{{nominee.reg_no}}
					</td>
					<td>
						{{nominee.post}}
					</td>
					<td>
						<a href="" ng-click="DeleteNominee(nominee.id)">Remove</a>
					</td>
				</tr>
				<tr>
					<td>(name will be fetched automatically in accordance with the registration number)</td>
					<td>
						<input type="text" ng-model="nomineeNew.reg_no" placeholder="Name of the nominee"/>
					</td>
					<td>
						<select ng-model="nomineeNew.post">
							<option ng-repeat="post in posts" value="{{post.id}}">{{post.name}}</option>
						</select>
					</td>
					<td>
						<a href="" ng-click="AddNominee(nomineeNew)">Add</a>
					</td>
				</tr>			
			</table>
		</div>
	</center>

		<div ng-hide="isoNominees || isoStudents || isoPosts">
			<hr/>
			<br/>
			<p class="subSubTitle">Results</p>					
			<center>
			<a href='' ng-click="isoResults=1">Isolate</a> | <a href='' ng-click="isoResults=0">Normal</a>
			<br/><br/>
			<br/>
			<a href='' ng-show="config.result.autoUpdate" ng-click="config.result.autoUpdate=false">Disable Auto Update</a>
			<a href='' ng-hide="config.result.autoUpdate" ng-click="config.result.autoUpdate=true">Enable Auto Update</a>
			| <a href='' ng-click="ResultsRefresh()">Refresh Now</a>
			<br/>
			<div ng-show="config.result.autoUpdate"> 
				Auto Update After: 
				<input placeholder="Auto Update After" size="5" ng-model="config.result.autoUpdateAfter"/> 				
			</div>
			<br/><br/>			
				<table>
					<tr>
						<th>Post Name</th>
						<th width="250">Nominee</th>
						<th>Total<th>
					</tr>
					<tr ng-repeat="result in results">
						<td>{{result.title}}</td>
						<td>
							<table>
								<tr ng-repeat="data in result.data">
									<td width="200">{{data.label}} > </td>
									<td width="50">{{data.value}}</td>
								</tr>
							</table>
						
<!--  						<ul>
 							<li ng-repeat="data in result.data">
 								[{{data.label}} | {{data.value}}]
 							</li>
 						</ul>
 -->						
						</td>
						<td>{{result.total}}</td>
					</tr>
				</table>
				<br/><br/>
			</center>
	
			<div ng-repeat="result in results" class="outer">
				<br/>
				<div class="categoryTitle">{{result.title}}</div>
				<br/>
				<div class="navwrap">
					<ul>
						<li ng-repeat="data in result.data">
							<div class="barContainer" title="{{data.value}}">
								<div class="barHost">
									<div class="bar" ng-style="{height:(( (+data.value) / (+result.total) * 80) )+'px'}">
									<!-- <div class="bar" ng-style="{height:parseInt( ( ( (+data.value)/result.total)  * 100), 10)+'px'}"> -->
									</div>
								</div>
								<!-- <div class="barC" ng-style="{height:(( (+data.value) / (+result.total) * 80) )+'px'}"> -->
								<!-- </div> -->
								{{data.label}}
								<!-- <br/> -->
								<!-- {{data.value}} -->
							</div>							
						</li>
					</ul>
				</div>
				<div class="clearer"></div>
			</div>

		</div>	

	<center>
	<hr>
	<br/><br/><br/>
	<br/>
	<p>Created by</p>
	<a target="_blank" href="http://www.github.com/theDeparted/"><img src=<?php echo "\"".URL::base()."/img/theDeparted.svg\""; ?> width="150px"/></a>
	<p>Can't live until you die</p>
	<p>Indian Institute of Science Education and Research, Mohali</p>
	</center>	

	<script type="text/javascript" src=<?php echo "\"".URL::base()."/js/admin/settings.js\""; ?>> </script>
</body>

</html>