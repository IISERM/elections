angular.module('myApp',[])
.factory('truthSource',function(){
	//CONVENTIONS
	//everything is small camel cased
	//functions start with capitals

	var truth={
		student:{	fetch:{Now:{},lnk:'/fetch'},
					add:{Now:{},lnk:'/add'},
					remove:{Now:{},lnk:'/remove'},
					update:{Now:{},lnk:'/update'},
					config:{basePath:'/adming/student'},
					data:{}
				},
		io:{state:{log:'NaveenTantra Admin Panel Log\n',last:{},working:false},config:{basePath:"http://localhost/IISERM/elections/public",addIndexDotPHP:"/index.php"}}

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
				{'07':1},{'08':2},{'09':3},{'10':4},{'11':5}
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

	// $scope.studentNew={first_name:'',middle_name:'',last_name:'',hostel:'',batch:'',sex:'',reg_no:''};
	$scope.studentNew={first_name:$scope.students.slice(-1)[0].first_name,
						middle_name:$scope.students.slice(-1)[0].middle_name,
						last_name:$scope.students.slice(-1)[0].last_name,
						hostel:$scope.students.slice(-1)[0].hostel,
						batch:$scope.students.slice(-1)[0].batch,
						subject:$scope.students.slice(-1)[0].subject,
						sex:$scope.students.slice(-1)[0].sex,
						reg_no:$scope.students.slice(-1)[0].reg_no};
	
	$scope.studentFields={hostels:['7','5'],
							batches:['07','08','09','10','11','12'],
							subjects:['Physics','Mathematics','Chemistry','Biology','NA'],
							sexes:['Male','Female']
							};
	$scope.config={student:{orderBy:'first_name',search:'',reverse:false}};

	$scope.compareSelect=function(var1,var2){
		if(var1==var2)
			return "selected";
		else
			return "";	
	}
	// $scope.$watch('deleteStudent',function(val){
	// 	alert(val);
	// 	$scope.deleteStudent='';
	// });
	
	// $scope.$watch('truthSource.io.state.working',function(state){
	// 	// $scope.logMessage=state.log;
	// 	$scope.working=state.working;
	// });

	$scope.DeleteStudent=function(id){
		alert(id);

	}

	$scope.UpdateStudent=function(student){
		alert(student.sex);
	}

	$scope.AddStudent=function(student){
		// truthSource.
		alert(student.sex);
	}

	truthSource.student.fetch.Now(function(val){
		$scope.students=val;
		$scope.$apply();
	});
}
