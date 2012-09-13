angular.module('myApp',[])
.config(function($routeProvider) {
    $routeProvider.
      when('/logout', {redirectTo:'/logout'}).
      otherwise({redirectTo:'/'});
}).directive('votepanel', function() {
	return {
		restrict:'E',
		scope:{id:'@',
				catName:'@',
				list:'@',				
				selected:'='},
		transclude: true,
		template: '<div class="main_group"> \
						<h1>{{catName}}</h1> \
						<div ng-transclude></div> \
						<div class="categoryChild"> \
							<label for="{{id}}_abstane"> \
								<div class="abstane"> ABSTANE </div> \
							</label> \
							<input type="radio" name="{{id}}" ng-model="selected.id" value="0" id="{{id}}_abstane">I vote for neither of them!</input> \
						</div> \
					</div>',		
		compile:function (tElement, tAttrs)
		{
			//GLOBALS FOR THIS ZONE
 			//Linking function
 			return function(scope,element,attrs)
 			{
 				;
 			}

		}

	}
}).directive('nominee', function() {
	return {
		restrict:'E',
		scope:{id:'@',
				name:'@',
				link:'@',
				basepath:'@',
				selected:'=',				
				category:'@'},

		// transclude: true,
		template:  '<div class="categoryChild" > \
		<label for="{{category}}_{{id}}"> <img class="thumbnail" src="{{basepath+link}}" /> </label>\
		<div id={{id}}> <input type="radio" name="{{category}}" ng-model="selected.id" value="{{id}}" id="{{category}}_{{id}}" /><label for="{{category}}_{{id}}">{{name}}</label> \
		</div> \
		</div>',
		compile:function (tElement, tAttrs)
		{
			//GLOBALS FOR THIS ZONE

 			//Linking function
 			return function(scope,element,attrs)
 			{
 				;
 			}
		}

	}
}).factory('truthSource',function(){
	//CONVENTIONS
	//everything is small camel cased
	//functions start with capitals

	var truth={
		userInfo:{Fetch:{},lnk:'/vote/details',data:{}},
		category:{Fetch:{},lnk:'/vote/options',data:{}},
		voteCast:{Cast:{},lnk:'/vote/vote',data:{}},

		//http://localhost/IISERM/elections/public
		io:{state:{log:{},last:{}},config:{basePath:"",addIndexDotPHP:"/index.php"}},
		};

		truth.userInfo.Fetch=function(OnComplete)
		{
			$.ajax({
				type: 'GET',
				url: truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.userInfo.lnk,
				// url: 'http://localhost/IISERM/elections/public/index.php/vote/details',
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
					truth.userInfo.data=dat;	
					//alert(dat.name);				
					// alert(truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.io.userInfo.lnk);

				}
				}).error(function() {
					;
				}).complete(function() {
					// alert(truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.userInfo.lnk);
					
					OnComplete(truth.userInfo.data);
			});
		};


		truth.category.Fetch=function(OnComplete)
		{
			// alert(truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.category.config.basePath + truth.category.fetch.lnk);
			truth.io.state.working=true;
			$.ajax({
				type: 'GET',
				url: truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.category.lnk,
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
					truth.category.data=dat;					
				}
				}).error(function() {
					;
				}).complete(function() {
					// alert(truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.io.userInfo.lnk);
					truth.io.state.working=false;
					OnComplete(truth.category.data);
			});
		};

		truth.voteCast.Cast=function(voteCast, OnComplete)
		{
			truth.io.state.working=true;
			alert(JSON.stringify(voteCast));
			// alert(truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.voteCast.config.basePath + truth.voteCast.add.lnk);
			$.ajax({
				type: 'POST',
				url: truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.voteCast.lnk,
				statusCode: {
					404: function () {
						;
					},
					500: function () {
						;
					}
				},
				data: {vote:JSON.stringify(voteCast), ajax: '1'},
				success: function (data) {
					truth.io.state.log = truth.io.state.log + '<br/><br/>' + data;
					truth.io.state.last=data;
					// alert(data);
				}
				}).error(function() {
					;
				}).complete(function() {
					// alert(truth.io.config.basePath + truth.io.config.addIndexDotPHP + truth.io.userInfo.lnk);
					truth.io.state.working=false;
					OnComplete(truth.io.state.last);
			});
		};


		return truth;

}).directive('basepathwidget', function(truthSource) {
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

var ext_hideSideF_show;

function elections($scope,truthSource,$timeout){
	$scope.categories=[]

	// $scope.categories=[
	// {id:1, title:'Category 1',selected:{id:'-1'},
	// 								list:[
	// 									{id:1,name:'Muffin 1',link:'487384_410881738958783_1398366316_n.jpg'},
	// 									{id:2,name:'Muffin 2',link:'386115_267265833390661_507550667_n.jpg'},
	// 									{id:3,name:'Muffin 3',link:'487384_410881738958783_1398366316_n.jpg'},
	// 									{id:4,name:'Muffin 4',link:'386115_267265833390661_507550667_n.jpg'},
	// 									{id:5,name:'Muffin 5',link:'487384_410881738958783_1398366316_n.jpg'},
	// 									{id:6,name:'Muffin 6',link:'487384_410881738958783_1398366316_n.jpg'},
	// 									]},
	// {id:2, title:'Category 2',selected:{id:'-1'},
	// 								list:[
	// 									{id:1,name:'MuffinB 1',link:'Image1 Link :)'},
	// 									{id:2,name:'MuffinB 2',link:'Image2 Link :)'},
	// 									{id:3,name:'MuffinB 3',link:'Image3 Link :)'},
	// 									{id:4,name:'MuffinB 4',link:'Image4 Link :)'},
	// 									]}
	// ];
	$timeout(function(){
		// alert("About to trigger");
		truthSource.userInfo.Fetch(function(val){		
			$scope.user=val;
			$scope.$apply();
		});

	truthSource.category.Fetch(function(val){
		$scope.categories=val;
		$scope.$apply();
	});

	},100);

	
	$scope.likethis="1";
	$scope.select={selected:'so far so good'};
	$scope.custom={showvotes:false};
	$scope.voteCastMsg="";
	$scope.toggle_votes=function(){
		if($scope.custom.showvotes) 
			$scope.custom.showvotes=false;
		else
			$scope.custom.showvotes=true;
	}


	// $scope.$watch('categories',function(){
 //    	var i,passed=true;
 //    	categories=$scope.categories;

	// 	for(i=0;i<categories.length;i++)
	// 	{
	// 		if(categories[i].selected.id==-1)
	// 			passed=false;
	// 	}
	// 	if(passed)
	// 	{
	// 		$scope.hideSide='Show';
	// 	}		
	// 	alert('changed!');
	// });

	$scope.getNameFromList=function(category,t_id){
		var i;
		for(i=0;i<category.list.length;i++)
		{
			if(category.list[i].id==t_id)
			{
				return category.list[i].name;
			}		
		}
		if(t_id==0)
			return "Abstane!";
		else
			return "Not Selected";
			
	};

    $scope.cast=function(){
    	var i,passed=true;
    	categories=$scope.categories;

		for(i=0;i<categories.length;i++)
		{
			if(categories[i].selected.id==-1)
				passed=false;
		}
		if(passed)
		{
	    	var r=confirm("Ensure your selections are accurate. This can NOT be undone.");
	    	if(r==1)
	    	{
	    		$scope.user.voted=2;
				truthSource.voteCast.Cast(categories,function(val){
					$scope.voteCastMsg=val;
					// alert(val);
					$scope.$apply();					
				});

	    	}
	    		
		}
		else
		{
			alert("You've left some categories unmarked! If you do not wish to vote, explicitly select the abstane option and try again.");
		}
    };
    // $scope.hideSide='Hide this';
    $scope.hideSide='Show';
    $scope.hideSideF=function(){
    	$scope.hideSide=($scope.hideSide=='Hide this')? 'Show' : 'Hide this';
    }

    // ext_hideSideF_show=function(){
    // 	alert('called');
    // 	$scope.hideSide='Show';
    // 	$scope.digest();
    // }
}

// var scrollRefresh = {
//     pastTop: false,
//     pastBottom: false,
//     previous: 0,
//     bottom: function(callback) {
//       var pBottom = $(window).height() + $(window).scrollTop() >= $(document).height();
//       if(!this.pastBottom && pBottom) {
//         callback($(window).height() + $(window).scrollTop());
//         this.pastBottom = true;
//       } else {
//         if(!pBottom) this.pastBottom = false;
//       }
//       this.previous = $(window).scrollTop();
//     },
//     top: function(callback) {
//       var pTop = $(window).scrollTop() < this.scrollPrevious && $(window).scrollTop <= 0;
//       if(!this.pastTop && pTop) {
//         callback($(window).scrollTop());
//         this.pastTop = true;
//       } else {
//         if(!pTop) this.pastTop = false;
//       }
//       this.previous = $(window).scrollTop();
//     }
//   };

// $(document).scroll(function(){
	
// 	// alert($(window).scrollTop() + $(window).height());
// 	// alert($(document).height());
// 	// alert( ($(window).scrollTop() + $(window).height() + 5 >= $(document).height()) ? 1 : 0 );
// 	// if(($(window).scrollTop() + $(window).height() + 5 >= $(document).height()))
// 	// {
// 	// 	// alert('hello');
// 	// 	ext_hideSideF_show();
// 	// }
// // scrollRefresh.bottom(function(pos) {
//       // console.log("Loading bottom. " + pos);
//       // alert("scrolled to bottom"); //You should delete this line
//     // });
// });
