angular.module('myApp',[])
.config(function($routeProvider) {
    $routeProvider.
      when('/logout', {redirectTo:'/logout'}).
      otherwise({redirectTo:'/'});
}).directive('votepanel', function() {
	return {
		restrict:'E',
		scope:{id:'@',
				title:'@',
				list:'@',				
				selected:'='},
		transclude: true,
		template: '<div class="main_group"> \
						<h1>{{title}}</h1> \
						<div ng-transclude></div> \
						<input type="radio" name="{{id}}" ng-model="selected.id" value="0" id="{{id}}_abstane" /><label for="{{id}}_abstane">No vote for me Sire!</label> \
					</div>',		
		compile:function (tElement, tAttrs)
		{
			//GLOBALS FOR THIS ZONE

 			//Linking function
 			return function(scope,element,attrs)
 			{
                scope.$watch('title', function (x) 
	                {    //updated everytime the variable changes the first parameter is the newValue, second (omitted here) is the oldValue                	
	                    // alert(x);
	                }
                );

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
		// ng-model="{{selection}}"
		//ng-model="{{select.selection}}" 
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
 				scope.selection_work={select:'cool'};
                scope.$watch('selected.id', function (x) 
	                {    //updated everytime the variable changes the first parameter is the newValue, second (omitted here) is the oldValue                	
	                    // alert(x);
	                }
                );
                scope.selectme=function(){
                	// alert("clicked");
                }
 			}
		}

	}
}).factory('truthSource',function(){
	//CONVENTIONS
	//everything is small camel cased
	//functions start with capitals

	// var truth={userInfo:{}};

	var truth={
		userInfo:{Fetch:{},lnk:'/vote/details',data:{}},category:{Fetch:{}},
		io:{state:{log:{},last:{}},config:{basePath:'http://localhost/IISERM/elections/public',addIndexDotPHP:'/index.php'}},
		};

		truth.userInfo.Fetch=function()
		{
			$.ajax({
				type: 'POST',
				url: truth.basePath + truth.addIndexDotPHP + truth.userInfo.lnk,
				statusCode: {
					404: function () {
						;
						// $('#DEBUG').append("Page not found\n");
					},
					500: function () {
						;
						// $('#DEBUG').append("Other Error\n");	
					}
				},
				data: {ajax: '1'},
				success: function (data) {
					
					truth.userInfo.data=jQuery.parseJSON(data_json);

					// data.clone(truth);
					// if(data=='')
					// {
						// show_forgot_password_msg();
					// }
					// else
					// {
						// show_error_msg(data);
					// }
					//workingonrequest=false;
					//updatelistNOW(data);
					// }
					;
				}
				}).error(function() {
					// show_error_msg('');
					//workingonrequest=false;
					//$('#DEBUG').append("An Error Occured!\n");
					;
				}).complete(function() {
					// forgot_password_request_completed=true;
					//alert('called');
					// $('#forgot_password').removeClass('link_not_available');
					;
			});
		};

		return truth;

});

function prof_coverflow($scope){
	$scope.covers_data=[
	{id:1, title:'Category 1'},
	{id:2, title:'Category 2'},
	{id:3, title:'Category 3'},
	{id:4, title:'Category 4'},
	{id:5, title:'Category 5'},
	];
}

function elections($scope,truthSource){
	$scope.categories=[
	{id:1, title:'Category 1',selected:{id:'-1'},
									list:[
										{id:1,name:'Muffin 1',link:'487384_410881738958783_1398366316_n.jpg'},
										{id:2,name:'Muffin 2',link:'386115_267265833390661_507550667_n.jpg'},
										{id:3,name:'Muffin 3',link:'487384_410881738958783_1398366316_n.jpg'},
										{id:4,name:'Muffin 4',link:'386115_267265833390661_507550667_n.jpg'},
										{id:5,name:'Muffin 5',link:'487384_410881738958783_1398366316_n.jpg'},
										{id:6,name:'Muffin 6',link:'487384_410881738958783_1398366316_n.jpg'},
										]},
	{id:2, title:'Category 2',selected:{id:'-1'},
									list:[
										{id:1,name:'MuffinB 1',link:'Image1 Link :)'},
										{id:2,name:'MuffinB 2',link:'Image2 Link :)'},
										{id:3,name:'MuffinB 3',link:'Image3 Link :)'},
										{id:4,name:'MuffinB 4',link:'Image4 Link :)'},
										]}
	];
	// $scope.user={name:"Atul Singh Arora", batch:"MS11", hostel:"7", gender:"Male", voted:false}
	truthSource.userInfo.Fetch();

	$scope.user=truthSource.userInfo.data;

	$scope.likethis="1";
	$scope.select={selected:'so far so good'};
	$scope.custom={showvotes:false};
	$scope.toggle_votes=function(){

		if($scope.custom.showvotes) 
			$scope.custom.showvotes=false;
		else
			$scope.custom.showvotes=true;
	}

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
	    		$scope.user.voted=true;			
		}
		else
		{
			alert("You've left some categories unmarked! If you do not wish to vote, explicitly select the abstane option and try again.");
		}

    		// alert("Submitted!");
    	// else
    		// alert("Cancelled");
    };
    $scope.hideSide='Hide this';
    $scope.hideSideF=function(){
    	$scope.hideSide=($scope.hideSide=='Hide this')? 'Show' : 'Hide this';
    }

    // $scope.logout=function(){
    	// $scope.$apply(function() { $location.path("/route"); });
    	// $location.path()
    	// $route.reload();
    	// alert("Logged out");
    	// alert($scope.likethis);
    // };
}

function Ctrl($scope){
	// $scope.base_path=<?php echo URL::base()."/img/"; ?>;
	$scope.color = 'green';
    $scope.choices = ['red', 'green', 'blue'];
    
    $scope.bam={selection:'red'};

    $scope.$watch('bam.selection',function(x){
    	// alert(x);
    });

}