angular.module('myApp',[])
.factory('truthSource',function(){
	//CONVENTIONS
	//everything is small camel cased
	//functions start with capitals
//http://localhost/IISERM/elections/public
	var truth={
		student:{	fetch:{Now:{},lnk:'/slist'},
					add:{Now:{},lnk:'/sadd'},
					remove:{Now:{},lnk:'/sdel'},
					update:{Now:{},lnk:'/supdate'},
					config:{basePath:'/admin'},
					data:{}
				},
		io:{state:{log:'NaveenTantra Admin Panel Log\n',last:'',working:false},config:{basePath:"",addIndexDotPHP:"/index.php"}}

		};

		truth.student.fetch.Now=function(OnComplete)
		{
			// alert(truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.student.config.basePath + truth.student.fetch.lnk);
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
				url: truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.student.config.basePath + truth.student.update.lnk,
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
					// alert(data);

				}
				}).error(function() {
					;
				}).complete(function() {
					// alert(truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.io.userInfo.lnk);
					truth.working=false;
					OnComplete(truth.io.state.last);
			});
		};

		truth.student.add.Now=function(student, OnComplete)
		{
			truth.working=true;
			// alert(truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.student.config.basePath + truth.student.add.lnk);
			$.ajax({
				type: 'POST',
				url: truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.student.config.basePath + truth.student.add.lnk,
				statusCode: {
					404: function () {
						;
					},
					500: function () {
						;
					}
				},
				data: {first_name:student.first_name,middle_name:student.middle_name,last_name:student.last_name,
				 batch:student.batch, sex:student.sex, hostel:student.hostel, 
						reg_no:student.reg_no, subject:student.subject, ajax: '1'},
				success: function (data) {
					truth.io.state.log = truth.io.state.log + '<br/><br/>' + data;
					truth.io.state.last=data;
					// alert(data);
				}
				}).error(function() {
					;
				}).complete(function() {
					// alert(truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.io.userInfo.lnk);
					truth.working=false;
					OnComplete(truth.io.state.last);
			});
		};

		truth.student.remove.Now=function(id, OnComplete)
		{
			truth.working=true;
			// alert(truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.student.config.basePath + truth.student.remove.lnk);
			$.ajax({
				type: 'POST',
				url: truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.student.config.basePath + truth.student.remove.lnk,
				statusCode: {
					404: function () {
						;
					},
					500: function () {
						;
					}
				},
				data: {id:id, ajax: '1'},
				success: function (data) {
					truth.io.state.log = truth.io.state.log + '<br/><br/>' + data;
					truth.io.state.last=data;
					// alert(data);
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

})
.directive('basepathwidget', function(truthSource) {
    return {
        restrict: 'E',
        scope: {path:'@'},
        replace: true,        
        transclude:true,
        template:'',
        link: function($scope, elm, attrs, ctrl) {
        	truthSource.io.config.basePath=attrs.path;
        }
    }
});

var basepathProvider="";

function settings($scope,truthSource,$timeout){
	
	$scope.truthSource=truthSource;
	$scope.updatingInterface=true;
	$scope.indexify=
	{hostel:
			{
				'7':1,'5':2
			}
		,
		batch:
			{
				'MS07':1,'MS08':2,'MS09':3,'MS10':4,'MS11':5,'MS12':6
			}
		,
		subject:
			{
				'Physics':1,'Mathematics':2,'Chemistry':3,'Biology':4,'NA':5
			}
		,
		sex:
			{
				'Male':1,'Female':0
			}		
	};

	$scope.students=[
	{id:1, first_name:'Atul', middle_name:'Singh', last_name:'Arora', 
		hostel:'7', batch:'11',subject:'NA',sex:'Male',reg_no:'MS11003'},
	{id:2, first_name:'Gagan', middle_name:'Preet', last_name:'Singh', 
		hostel:'7', batch:'08',subject:'Physics',sex:'Male',reg_no:'MS08021'}	
	];

	$scope.studentNew={first_name:'A',middle_name:'B',last_name:'C',hostel:'7',batch:'MS11',sex:'Female',reg_no:'MSABC'};
	
	$scope.studentFields={hostels:['7','5'],
							batches:['07','08','09','10','11','12'],
							subjects:['Physics','Mathematics','Chemistry','Biology','NA'],
							sexes:['Male','Female']
							};
	$scope.config={student:{orderBy:'first_name',search:'',reverse:false}};

	//UPDATE the values from the server
	// truthSource.io.config.basePath=basePathProvider;
	
	$timeout(function(){
		// alert(truthSource.io.config.basePath);
		truthSource.student.fetch.Now(function(val){
			//This is to update the UI before putting all the data in ng-repeat
			// $scope.$digest();
			// $scope.$apply();
			// alert("This may take a little while");

			$scope.students=val;

			// $scope.studentNew={first_name:$scope.students.slice(-1)[0].first_name,
			// 					middle_name:$scope.students.slice(-1)[0].middle_name,
			// 					last_name:$scope.students.slice(-1)[0].last_name,
			// 					hostel:$scope.students.slice(-1)[0].hostel,
			// 					batch:$scope.students.slice(-1)[0].batch,
			// 					subject:$scope.students.slice(-1)[0].subject,
			// 					sex:$scope.students.slice(-1)[0].sex,
			// 					reg_no:$scope.students.slice(-1)[0].reg_no};
			
			$scope.updatingInterface=false;
			
			$scope.$apply();

			// alert("hwllo");
		});

	}, 1000);


	$scope.StudentsRefresh = function(){
		$scope.updatingInterface=true;
		$scope.$apply();
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
			// alert("This may take a little while");
			$scope.updatingInterface=false;
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
		truthSource.student.remove.Now(id,function(val){			
			$scope.$apply();
			$scope.StudentsRefresh();
		});		
	}

	$scope.UpdateStudent=function(student){
		var studentC={};
		
		studentC.hostel=$scope.indexify.hostel[student.hostel];
		studentC.batch=$scope.indexify.batch[student.batch];
		studentC.subject=$scope.indexify.subject[student.subject];
		studentC.sex=$scope.indexify.sex[student.sex];
		studentC.reg_no=student.reg_no;
		studentC.id=student.id;
		// studentC.reg_no=$scope.indexify.reg_no[student.reg_no];
		
		// alert(studentC.hostel);
		// alert($scope.indexify.hostel['7']);
		// alert(studentC.hostel);
		// 	alert(studentC.batch);
		// 		alert(studentC.subject);
		// 		alert(studentC.sex);
				// alert(studentC.reg_no);

		truthSource.student.update.Now(studentC,function(val){
			// alert(val);
			$scope.$apply();
			$scope.StudentsRefresh();
			// if(val=='1')
			// 	alert("SUCCESS");			
			// else
			// 	alert("FAILURE");

		});

	}

	$scope.AddStudent=function(student){
		var studentC={};
		
		studentC.hostel=$scope.indexify.hostel[student.hostel];
		studentC.batch=$scope.indexify.batch[student.batch];
		studentC.subject=$scope.indexify.subject[student.subject];
		studentC.sex=$scope.indexify.sex[student.sex];
		studentC.reg_no=student.reg_no;
		studentC.first_name=student.first_name;
		studentC.middle_name=student.middle_name;
		studentC.last_name=student.last_name;
		// studentC.email=student.id;

		truthSource.student.add.Now(studentC,function(val){
			// alert(val);

			$scope.$apply();
			$scope.StudentsRefresh();
		});
	}


}
