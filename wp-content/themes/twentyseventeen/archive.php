<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
<script src="https://rawgit.com/angular/bower-angular/master/angular.min.js"></script>
<div class="container" ng-app="demo"  ng-controller="GlobalCtrl">
    <div class="col-md-3">
	<ul class="list-group">
	<li class="list-group-item" ng-click="linkToCategory()" style="cursor:pointer">All <span class="badge" ng-if="displayData && displayData.length>0">{{displayData.legnth}}</span></li>
    <li class="list-group-item" ng-repeat="row in displayCategory" style="cursor:pointer" ng-click="linkToCategory(row.id)">{{row.name}} <span class="badge">{{row.count}}</span></li>
    <!-- <li class="list-group-item">Deleted <span class="badge">5</span></li>
    <li class="list-group-item">Warnings <span class="badge">3</span></li> -->
  </ul>
	 </div>
	<div class="col-md-9">
	   <div class="row text-center" ng-if="loading"> 
	   <div class="loading">Loading&#8230;</div>
	  </div>
	  <div class="row" ng-if="!loading">
	  <style>
	     .rb-container{
			padding-right: 5px;
			padding-left: 5px;
		 }
	     .rb-header{
			height: 130px;
		 }
		 .rb-header img{
			height: 130px;
            width: 100%;
		 }
		 .rb-style-title{
			font-size: 10px;
			letter-spacing: 0.1px;
			font-weight: 700;
			text-align: left;
			padding-left: 3px;
		 }
		 
		 .sub-rb-title{
			 width:100%;
		 }
		 .rb-title span{
			 width:70%;
			 float:left;
			 font-size: 10px;
			letter-spacing: 0.1px;
			font-weight: 700;
			text-align: left;
			padding-left: 3px;
		 }
		 .rb-view{
			width: 28%;
			cursor:pointer;
			float:right;
		 }
		 .text-trail{
			max-width: 70%;
            white-space: nowrap;
           overflow: hidden;
            text-overflow: ellipsis;
		 }
		 /* Absolute Center Spinner */
.loading {
  position: fixed;
  z-index: 999;
  height: 2em;
  width: 2em;
  overflow: show;
  margin: auto;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
}

/* Transparent Overlay */
.loading:before {
  content: '';
  display: block;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,0.3);
}

/* :not(:required) hides these rules from IE9 and below */
.loading:not(:required) {
  /* hide "loading..." text */
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}

.loading:not(:required):after {
  content: '';
  display: block;
  font-size: 10px;
  width: 1em;
  height: 1em;
  margin-top: -0.5em;
  -webkit-animation: spinner 1500ms infinite linear;
  -moz-animation: spinner 1500ms infinite linear;
  -ms-animation: spinner 1500ms infinite linear;
  -o-animation: spinner 1500ms infinite linear;
  animation: spinner 1500ms infinite linear;
  border-radius: 0.5em;
  -webkit-box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.5) -1.5em 0 0 0, rgba(0, 0, 0, 0.5) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
  box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) -1.5em 0 0 0, rgba(0, 0, 0, 0.75) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
}

/* Animation */

@-webkit-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-moz-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-o-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
	  </style>
	     
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 rb-container ng-scope rb-container" ng-repeat="row in displayData">
                        <div class="panel panel-default text-center">
                            <div class="heading rb-header">
							<img src="{{row.acf.thumbnail}}"/>                           
                            </div>
                            <div class="body" style="padding: 3px;    height: 44px;">
                                <div class="caption rb-style-title">
								<i class="fa fa-calendar" aria-hidden="true"></i><span style="padding-left: 3px;">{{row.date | date:'dd-MMM-yyyy'}}</span>
                                </div>	
								<div class="sub-rb-title">
										<div class="rb-title">
										    <span class="text-trail">{{row.title.rendered}}</span>
										</div>
									
										<div class="label label-danger rb-view" 
										data-ng-model="row.acf.gallery_list"
										magnific-popup>View</div>
								</div>
                            </div>
                        </div>

                    </div>
     
	  </div>
	 </div>

	
	
	</div>
</div><!-- .wrap -->
<script>
var app = angular.module('demo',[]);
app.controller('GlobalCtrl',['$scope','$http','$sce', function($scope,$http,$sce) {
	$scope.linkToCategory=function(id){
		
		init(id);
	}
	function init(parameter){
		var param=["http://localhost:81/wordpress/wp-json/wp/v2/posts"];
		if(parameter)
	    {
			param.push("categories="+parameter);
		}
		$scope.loading=true;
				$http.get(param.join("?"))
				.then(function(response) {
					$scope.displayData = response.data.map(function(item){
						if(item.acf && !item.acf.thumbnail){
							item.acf.thumbnail="http://vollrath.com/ClientCss/images/VollrathImages/No_Image_Available.jpg";
						}
				
						return item;
					});
				
				}).finally(function() {
					$scope.loading=false;
				});


	}
	function initCategoryList(){
		$scope.loading=true;
				$http.get("http://localhost:81/wordpress/wp-json/wp/v2/categories")
				.then(function(response) {
					$scope.displayCategory = response.data;				
				}).finally(function() {
					$scope.loading=false;
				});

	}
	  $scope.decoder=function(decoded){
		
		return $sce.trustAsHtml(decoded);
	  };
	  init();
	  initCategoryList();
}]);
//<!--Popup View-->
app.directive('magnificPopup',
    [
        function () {
            return {
                restrict: 'A',
                scope: {
                    ngModel: "=",
                },
                controller: 'magnificPopupController as vm',
                link: function ($scope, element, attr) {
                    $scope.element = element;
                }
            }
        }
    ]
);

app.controller("magnificPopupController", [
    "$compile",
    "$timeout",
    "$window",
    "$scope",
    function (
        $compile,
        $timeout,
        $window,
        $scope
        ) {
        var vm = this;
        var attr = {};
		
        /**
         * @param {attr} initailize all optional
         */
        function initAttr() {
             attr = {
				
                closeOnContentClick: false,
                closeOnBgClick: false,
                enableEscapeKey: true,
             
                callbacks: {
					// parseAjax: function(mfpResponse) {
					// 	this.content =$(mfpResponse.data).find('#data-popup');
					// },
                    ajaxContentAdded: function () {
                        var content = this.content;
                       var scope = content.scope();
                        $compile(content)(scope);
                        scope.$digest();
                    },
					
				// ajax: {
				// 	settings: {
				// 		contentType: "application/json",
				// 		dataType: 'json',
				// 		data:null,
				// 		type: 'GET'
				// 	}
				// }
               }
            };

        };
     
   

        function initializeMagnificPopup() {
		
			if($scope.ngModel){
				var tempItem=[];
				$($scope.ngModel).find("img").each(function(){
					 var data=$(this).attr("src");
					 if(data){
						tempItem.push({src:data,type:'image'});
					 }
					

				});
				attr.items=tempItem;
		        attr.gallery= {
				enabled: true
				};
                attr.type='image';
			
		             
                 $scope.element.magnificPopup(attr);
			}
		

        }

        //watch if data have changed
        function tracker() {
            $scope.$watch('ngModel', function (newValue, oldValue) {
                if (newValue) {
                    initializeMagnificPopup();
                }
            });
        }
        /**
         * winow screen solution
         */
       

        /**
        RUNNER
        **/
        initAttr();
       
        tracker();
    }]);
//<!--Popup View-->

</script>
<?php get_footer();
