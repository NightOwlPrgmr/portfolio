// create app
var app = angular.module('master', ['ui.bootstrap', 'ngSanitize']);

/*app.controller('navLinks', ['$scope', function($scope) {
    $scope.links = "[
      {title:'About', href:'about'},
      {title:'Education', href:'education'},
      {title:'Experience', href:'experience'},
      {title:'Showcase', href:'showcase'},
      {title:'Skills', href:'expertise'},
      {title:'Contact', href:'contact'}
    ]";
}]);*/

/*
// create app
var app = angular.module('master', ['ngAnimate','ui.bootstrap', 'ngSanitize', 'angularUtils.directives.dirPagination'], function($locationProvider) {
  if( page.locationProviderHtml5Mode ) {
    $locationProvider.html5Mode(true);
  }
});

// service for getting data
app.factory('HttpRequestFactory', function($http) {
  var HttpRequestFactory = {
    async: function(opt) {
      // $http returns a promise, which has a then function, which also returns a promise
      var promise = $http(opt).then(function (response) {
        // The then function here is an opportunity to modify the response
        // The return value gets picked up by the then in the controller.
        return response.data;
      });
      // Return the promise to the controller
      return promise;
    }
  };
  return HttpRequestFactory;
});

app.directive("ngScopeElement", function () {
  var directiveDefinitionObject = {

    restrict: "A",

    compile: function compile(tElement, tAttrs, transclude) {
      return {
          pre: function preLink(scope, iElement, iAttrs, controller) {
            scope[iAttrs.ngScopeElement] = iElement;
          }
        };
    }
  };

  return directiveDefinitionObject;
});

// service to send messages and data between controllers
app.factory('messageFactory', function($q) {

  // turn on debugging to view actions in console
  var _debug = false;

  // create a service object
  var service = {};

  // sequence of ids
  var idseq = 0;

  // list of callbacks by controller name
  var _callbacks = {};

  // enable debugging
  service.debug = function( state ) {
    _debug = ( state ) ? true : false;
  }

  // add a receiver callback to allow another controller to send a message
  service.addReceiver = function( name, callback ) {
    var _return = false;
    if( typeof callback === 'function' ) {
      if( typeof _callbacks[name] === 'undefined' ) {
        _callbacks[name] = {};
        _callbacks[name].id = idseq;
        idseq++;
        _return = 'new';
        if( _debug ) {
          console.log( 'addReceiver - added new: '+name );
        }
      } else {
        _return = 'update';
        if( _debug ) {
          console.log( 'addReceiver - updated: '+name );
        }
      }
      _callbacks[name].callback = callback;
    } else {
      if( _debug ) {
        console.log( 'addReceiver: callback is not a function, will not create' );
        console.log( 'addReceiver name: ',      name     );
        console.log( 'addReceiver callback: ',  callback );
      }
    }
    return _return;
  }

  // send messages to a specific controller
  service.sendMessage = function( to, from, message, callback ) {
    if( typeof _callbacks[to] !== 'undefined' ) {
      if( typeof callback === 'function' ) {
        callback( _callbacks[to].callback( from, message ) );
      } else {
        return _callbacks[to].callback( from, message );
      }
    } else {
      if( _debug ) {
        console.log( 'sendMessage: callback does not exist, has one been created?' );
        console.log( 'sendMessage to: ',      to      );
        console.log( 'sendMessage from: ',    from    );
        console.log( 'sendMessage message: ', message );
      }
    }
  }

  // return the service to the controllers
  return service;
});
*/