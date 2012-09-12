angular.module('myApp',[])
.filter('startFrom', function() {
    return function(input, start) {
        start = +start; //parse to int
        return input.slice(start);
    }
})
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
		post:{	fetch:{Now:{},lnk:'/plist'},
				add:{Now:{},lnk:'/padd'},
				update:{Now:{},lnk:'/pupdate'},
				remove:{Now:{},lnk:'/pdel'},
				config:{basePath:'/admin'},
				data:{}
			},
		nominee:{ 	fetch:{Now:{},lnk:'/list'},
						add:{Now:{},lnk:'/add'},
						remove:{Now:{},lnk:'/del'},
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

		truth.post.fetch.Now=function(OnComplete)
		{
			// alert(truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.post.config.basePath + truth.post.fetch.lnk);
			truth.working=true;
			$.ajax({
				type: 'POST',
				url: truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.post.config.basePath + truth.post.fetch.lnk,
				// url: 'abc',
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
					truth.post.data=dat;
				}
				}).error(function() {
					// alert("ERROR");
					;
				}).complete(function() {
					// alert("DONE");
					// alert(truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.io.userInfo.lnk);
					truth.working=false;
					OnComplete(truth.post.data);
			});
		};

		truth.post.add.Now=function(post, OnComplete)
		{
			truth.working=true;
			// alert(JSON.stringify(post));
			// alert(truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.student.config.basePath + truth.student.add.lnk);
			$.ajax({
				type: 'POST',
				url: truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.post.config.basePath + truth.post.add.lnk,
				statusCode: {
					404: function () {
						;
					},
					500: function () {
						;
					}
				},				
				data: {post:JSON.stringify(post), ajax: '1'},
				// dataType: 'json',
				success: function (data) {
					truth.io.state.log = truth.io.state.log + '<br/><br/>' + data;
					truth.io.state.last=data;
					// alert(data);
				}
				}).error(function() {
					;
				}).complete(function() {
					// alert(truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.io.userInfo.lnk);
					// alert("COMPLETED");
					truth.working=false;
					OnComplete(truth.io.state.last);
			});
		};

		truth.post.update.Now=function(post, OnComplete)
		{
			truth.working=true;
			$.ajax({
				type: 'POST',
				url: truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.post.config.basePath + truth.post.update.lnk,
				statusCode: {
					404: function () {
						;
					},
					500: function () {
						;
					}
				},
				data: {post:JSON.stringify(post), ajax: '1'},
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

		truth.post.remove.Now=function(id, OnComplete)
		{
			truth.working=true;
			// alert(truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.post.config.basePath + truth.post.remove.lnk);
			$.ajax({
				type: 'POST',
				url: truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.post.config.basePath + truth.post.remove.lnk,
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


		truth.nominee.add.Now=function(nominee, OnComplete)
		{
			truth.working=true;
			alert(JSON.stringify(nominee));
			// alert(truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.student.config.basePath + truth.student.add.lnk);
			$.ajax({
				type: 'POST',
				url: truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.nominee.config.basePath + truth.nominee.add.lnk,
				statusCode: {
					404: function () {
						;
					},
					500: function () {
						;
					}
				},				
				data: {nominee:JSON.stringify(nominee), ajax: '1'},
				// dataType: 'json',
				success: function (data) {
					truth.io.state.log = truth.io.state.log + '<br/><br/>' + data;
					truth.io.state.last=data;
					// alert(data);
				}
				}).error(function() {
					;
				}).complete(function() {
					// alert(truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.io.userInfo.lnk);
					// alert("COMPLETED");
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
    $scope.numberOfPages=function(source,limitTo){
        return Math.ceil(source.length/limitTo);
    };

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
				'Physics':1,'Mathematics':2,'Chemistry':3,'Biology':4,'Undeclared':5
			}
		,
		sex:
			{
				'Male':1,'Female':0
			}		
	};

	$scope.students=[
	{id:1, first_name:'Atul', middle_name:'Singh', last_name:'Arora', 
		hostel:'7', batch:'11',subject:'Undeclared',sex:'Male',reg_no:'MS11003'},
	{id:2, first_name:'Gagan', middle_name:'Preet', last_name:'Singh', 
		hostel:'7', batch:'08',subject:'Physics',sex:'Male',reg_no:'MS08021'}	
	];

	$scope.studentNew={first_name:'',middle_name:'',last_name:'',hostel:'',batch:'',sex:'',reg_no:''};
	
	$scope.studentFields={hostels:['','7','5'],
							batches:['', '07','08','09','10','11','12'],
							subjects:['', 'Physics','Mathematics','Chemistry','Biology','Undeclared'],
							sexes:['Female','Male']
							};
	$scope.config={student:{orderBy:'first_name',search:'',reverse:false,limitTo:20,currentPage:0},
					post:{orderBy:'name',search:'',reverse:false},
					other:{hideCount:0,hideAfter:5}};

	$scope.nominees=[{id:1,name:'Atul Singh Arora',reg_no:'MS11003',post:''},
					{id:2,name:'Gagan Preet Singh',reg_no:'MS08021',post:''}
					];

	$scope.posts=[{id:1,name:'MS11 CR',number:2,hostels:[
														{select:true,name:'7'},
														{select:true,name:'5'}
														],
												batches:[
														{select:false,name:'MS07'},
														{select:false,name:'MS08'},
														{select:false,name:'MS09'},
														{select:false,name:'MS10'},
														{select:true,name:'MS11'},
														{select:false,name:'MS12'}														
														],
												subjects:[
														{select:false,name:'Physics'},
														{select:false,name:'Mathematics'},
														{select:false,name:'Chemistry'},
														{select:false,name:'Biology'},
														{select:true,name:'Undeclared'},
														]},
					{id:2,name:'MS12 CR',number:2,hostels:[
														{select:true,name:'7'},
														{select:true,name:'5'}
														],
												batches:[
														{select:false,name:'MS07'},
														{select:false,name:'MS08'},
														{select:false,name:'MS09'},
														{select:false,name:'MS10'},
														{select:false,name:'MS11'},
														{select:true,name:'MS12'}														
														],
												subjects:[
														{select:false,name:'Physics'},
														{select:false,name:'Mathematics'},
														{select:false,name:'Chemistry'},
														{select:false,name:'Biology'},
														{select:true,name:'Undeclared'},
														]}
				];
	$scope.postNew={id:1,name:'Faggot of the Year',number:2,hostels:[
														{select:true,name:'7'},
														{select:true,name:'5'}
														],
												batches:[
														{select:true,name:'MS07'},
														{select:true,name:'MS08'},
														{select:true,name:'MS09'},
														{select:true,name:'MS10'},
														{select:true,name:'MS11'},
														{select:true,name:'MS12'}														
														],
												subjects:[
														{select:false,name:'Physics'},
														{select:false,name:'Mathematics'},
														{select:false,name:'Chemistry'},
														{select:false,name:'Biology'},
														{select:true,name:'Undeclared'},
														]};


	//UPDATE the values from the server


	$scope.compareSelect=function(var1,var2){
		if(var1==var2)
			return "selected";
		else
			return "";	
	}

	var autoHide=function(){
		$scope.config.other.hideCount=$scope.config.other.hideCount-1;
		if($scope.config.other.hideCount<=0)
		{
			$scope.config.other.hideCount=0;
			truthSource.io.state.last='';
		}
		$timeout(autoHide,1000);
	};
	autoHide();

	$scope.$watch('truthSource.io.state.last',function(newVal,oldVal){
		// if(newVal!=oldVal){
			$scope.config.other.hideCount=$scope.config.other.hideAfter;
		// }
	});

	$timeout(function(){
		$scope.init=0;

		truthSource.student.fetch.Now(function(val){
			$scope.students=val;
			$scope.init=$scope.init+1;
			if($scope.init==2)			
				$scope.updatingInterface=false;
			$scope.$apply();
		});
		
		truthSource.post.fetch.Now(function(val){
			$scope.posts=val;
			$scope.init=$scope.init+1;
			if($scope.init==2)
				$scope.updatingInterface=false;

			// $scope.updatingInterface=false;
			$scope.$apply();
		});


		// $scope.PostsRefresh();

	}, 1000);


	$scope.StudentsRefresh = function(){
		$scope.updatingInterface=true;
		$scope.$apply();
		truthSource.student.fetch.Now(function(val){
			$scope.students=val;
			$scope.updatingInterface=false;
			$scope.$apply();
		});

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

		truthSource.student.update.Now(studentC,function(val){
			$scope.$apply();
			$scope.StudentsRefresh();
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

		truthSource.student.add.Now(studentC,function(val){
			$scope.$apply();
			$scope.StudentsRefresh();
		});
	}

	$scope.AddPost=function(post){
		truthSource.post.add.Now(post,function(val){
			$scope.$apply();
			$scope.PostsRefresh();
			// alert(val);
		});
	}

	$scope.PostsRefresh=function(){
		$scope.updatingInterface=true;
		$scope.$apply();
		// alert("About to start..");
		truthSource.post.fetch.Now(function(val){
			// alert(val);
			$scope.posts=val;
			$scope.updatingInterface=false;
			$scope.$apply();
		});
	}

	$scope.UpdatePost=function(post){
		truthSource.post.update.Now(post,function(val){			
			$scope.$apply();
			$scope.PostsRefresh();
			// alert(val);
		});

	}

	$scope.DeletePost=function(id){
		truthSource.post.remove.Now(id,function(val){
			$scope.$apply();
			$scope.PostsRefresh();
			// alert(val);
		});
	}

	$scope.AddNominee=function(nominee){
		truthSource.nominee.add.Now(nominee,function(val){
			$scope.$apply();
			// $scope.NomineesRefresh();

			// alert(val);
		});
	}
}
