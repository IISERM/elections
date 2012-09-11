angular.module('myApp',[])
.factory('truthSource',function(){
	//CONVENTIONS
	//everything is small camel cased
	//functions start with capitals

	var truth={
		student:{	fetch:{Now:{},lnk:'/slist'},
					add:{Now:{},lnk:'/sadd'},
					remove:{Now:{},lnk:'/sremove'},
					update:{Now:{},lnk:'/supdate'},
					config:{basePath:'/admin'},
					data:{}
				},
		io:{state:{log:'NaveenTantra Admin Panel Log\n',last:'',working:false},config:{basePath:"http://localhost/IISERM/elections/public",addIndexDotPHP:"/index.php"}}

		};

		truth.student.fetch.Now=function(OnComplete)
		{
			truth.working=true;
			$.ajax({
				type: 'POST',
				url: truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.student.config.basePath + truth.student.fetch.lnk,
				statusCode: {
					404: function () {
						;
					},
					500: function () {
						;
					}
				},
				data: {ajax: '1'},
				success: function (data) {
					truth.io.state.log = truth.io.state.log + '<br/><br/>' + data;
					var dat = jQuery.parseJSON(data);
					truth.student.data=dat;					
				}
				}).error(function() {
					;
				}).complete(function() {
					// alert(truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.io.userInfo.lnk);
					truth.working=false;
					OnComplete(truth.student.data);
			});
		};

		truth.student.update.Now=function(student, OnComplete)
		{
			truth.working=true;
			$.ajax({
				type: 'POST',
				url: truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.student.config.basePath + truth.student.fetch.lnk,
				statusCode: {
					404: function () {
						;
					},
					500: function () {
						;
					}
				},
				data: {id:student.id, batch:student.batch, sex:student.sex, hostel:student.hostel, 
						reg_no:student.reg_no, subject:student.subject, ajax: '1'},
				success: function (data) {
					truth.io.state.log = truth.io.state.log + '<br/><br/>' + data;
					truth.io.state.last=data;
					if(data=='1')
						alert("Updated Successfully");
					else
						alert("Something went wrong");
				}
				}).error(function() {
					;
				}).complete(function() {
					// alert(truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.io.userInfo.lnk);
					truth.working=false;
					OnComplete(truth.io.state.last);
			});
		};

		return truth;

});


function settings($scope,truthSource){
	
	$scope.truthSource=truthSource;

	$scope.indexify=
	[
		{hostel:
			[
				{'7':1},{'5':2}
			]
		},
		{batch:
			[
				{'07':1},{'08':2},{'09':3},{'10':4},{'11':5},{'12':6}
			]
		},
		{subject:
			[
				{'Physics':1},{'Mathematics':2},{'Chemistry':3},{'Biology':4},{'NA':5}
			]
		},
		{sex:
			[
				{'Male':1},{'Female':0}
			]
		}
	];

	$scope.students=[
	{id:1, first_name:'Atul', middle_name:'Singh', last_name:'Arora', 
		hostel:'7', batch:'11',subject:'NA',sex:'Male',reg_no:'MS11003'},
	{id:2, first_name:'Gagan', middle_name:'Preet', last_name:'Singh', 
		hostel:'7', batch:'08',subject:'Physics',sex:'Male',reg_no:'MS08021'}	
	];

	$scope.studentNew={first_name:'',middle_name:'',last_name:'',hostel:'',batch:'',sex:'',reg_no:''};
	
	$scope.studentFields={hostels:['7','5'],
							batches:['07','08','09','10','11','12'],
							subjects:['Physics','Mathematics','Chemistry','Biology','NA'],
							sexes:['Male','Female']
							};
	$scope.config={student:{orderBy:'first_name',search:'',reverse:false}};

	//UPDATE the values from the server
	truthSource.student.fetch.Now(function(val){
		$scope.students=val;

		// $scope.studentNew={first_name:$scope.students.slice(-1)[0].first_name,
		// 					middle_name:$scope.students.slice(-1)[0].middle_name,
		// 					last_name:$scope.students.slice(-1)[0].last_name,
		// 					hostel:$scope.students.slice(-1)[0].hostel,
		// 					batch:$scope.students.slice(-1)[0].batch,
		// 					subject:$scope.students.slice(-1)[0].subject,
		// 					sex:$scope.students.slice(-1)[0].sex,
		// 					reg_no:$scope.students.slice(-1)[0].reg_no};
		alert("This may take a little while");
		$scope.$apply();
		// alert("hwllo");
	});

	$scope.StudentsRefresh = function(){
		truthSource.student.fetch.Now(function(val){
			$scope.students=val;

			// $scope.studentNew={first_name:$scope.students.slice(-1)[0].first_name,
			// 					middle_name:$scope.students.slice(-1)[0].middle_name,
			// 					last_name:$scope.students.slice(-1)[0].last_name,
			// 					hostel:$scope.students.slice(-1)[0].hostel,
			// 					batch:$scope.students.slice(-1)[0].batch,
			// 					subject:$scope.students.slice(-1)[0].subject,
			// 					sex:$scope.students.slice(-1)[0].sex,
			// 					reg_no:$scope.students.slice(-1)[0].reg_no};
			alert("This may take a little while");
			$scope.$apply();
			// alert("hwllo");
		});

	}

	$scope.compareSelect=function(var1,var2){
		if(var1==var2)
			return "selected";
		else
			return "";	
	}

	$scope.DeleteStudent=function(id){
		alert(id);
	}

	$scope.UpdateStudent=function(student){
		
		truthSource.student.update.Now(student,function(val){
			if(val=='1')
				alert("SUCCESS");
			else
				alert("FAILURE");

		});

	}

	$scope.AddStudent=function(student){
		// truthSource.
		alert(student.sex);
	}


}
