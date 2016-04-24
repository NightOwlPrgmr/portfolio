angular.module('master')
  
  .controller('navLinks', function($scope) {
    $scope.links = [
      {title:'About', href:'about'},
      {title:'Education', href:'education'},
      {title:'Experience', href:'experience'},
      {title:'Showcase', href:'showcase'},
      {title:'Skills', href:'expertise'},
      {title:'Contact', href:'contact'}
    ];
  })
  
  .controller('mySkills', function($scope) {
    $scope.skills = [
      {skill:'PHP', level:'Proficient', fill:65},
      {skill:'JavaScript&nbsp;(jQuery)', level:'Proficient', fill:65},
      {skill:'AngularJS', level:'Novice', fill:18},
      {skill:'MEAN&nbsp;Stack', level:'Beginner', fill:10},
      {skill:'HTML&nbsp;(HTML5)', level:'Expert', fill:75},
      {skill:'CSS&nbsp;(CSS3,&nbsp;Media&nbsp;Queries)', level:'Expert', fill:75},
      {skill:'SQL', level:'Proficient', fill:65},
      {skill:'Bootstrap', level:'Advanced', fill:60}
    ];
  })
  
  .controller('aboutMe', function($scope) {
    $scope.abouts = [
      {about:'In 2005 I started working for a company known as Pamida. I was just sixteen years old and completely ready for the responsilbity of a job. When I turned seventeen, I was promoted to Operations Team Leader and had decided to change my academic course load by switching to an alternative program. This enabled me to spend more time working at the store. When I turned 18 I was promoted to Assistant Manager and was transferred to another location to help manage a team.'},
      {about:'After spending six months working as an Assistant Manager, I realized retail was not for me. I decided to demote myself, move back home, and pursue a degree in a Web field. I started attending classes at Northeast Iowa Community College (NICC), in the Fall of 2009. In the Spring of 2011 I graduated NICC with an Associates degree in Computer Analyst: Business &amp; Web Programming.'},
      {about:'After graduating NICC, I transferred to Baker College in the Fall of 2011. I graduated in the Spring of 2014 with a Bachelors degree in Web Development. I have a good understanding of best practices and emerging capabilities (HTML5 &amp; CSS3). I prefer hard coding with a text editor, but also have a good understanding of development tools such as Adobe Dreamweaver, Premier, Photoshop and Flash.'},
      {about:"I'm a very dedicated worker with strong work ethics and leadership skills. I'm well organized, detail oriented, and stay focused and on task while working. I'm capable of working individually or with teams and believe myself to be a strong team player. Now that we're better acquainted, I invite you to look through the rest of my portfolio. Please take a glance at the Showcase section to see some of my work."}
    ];
  })

  .controller('worker', function($scope, $rootScope, $modal) {
    $scope.contactModal = function() {
      var modalInstance = $modal.open({
        templateUrl: "content/modal.html",
        controller: 'contactModalController',
        size: '',
        backdrop: true,
        resolve: {}
      });
    }
  })

  .controller('contactModalController', function($scope, $rootScope, $modalInstance, $http) {
    $scope.constructor = function() {
      $scope.error = false;
      $scope.submitted = false;

      $scope.name = '';
      $scope.email = '';
      $scope.phone = '';
      $scope.message = '';
    }
    $scope.constructor();

    $scope.contactSubmit = function() {

      if ($scope.name != '' && $scope.email != '' && $scope.message != '') {
        var request = {};
        request.name = $scope.name;
        request.email = $scope.email;
        request.message = $scope.message;
        
        if ($scope.phone != '') {
          request.phone = $scope.phone;
        }
        /*var wrapperVersion = (page.wrapper).replace('\/wrapper\/', '');

        $http.post(
          "/data/?r=wrapper&v="+wrapperVersion+"&w="+wrapperVersion+"&f=modules/angular/authenticate.json",
          request
        ).success( function( response ) {
          if( response.success ) {
            $rootScope.$broadcast('userLoggedIn');
          } else {
            $scope.error = true;
            console.log( $scope.loginForm.username.$valid );
            $scope.loginForm.username.$setValidity($scope.username, false);
            console.log( $scope.loginForm.username.$valid );
          }
        });*/
      } else { $scope.error = true; }
    };

    $scope.close = function() {
      $modalInstance.dismiss('cancel');
    };
  })