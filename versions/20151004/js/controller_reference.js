/* extra controller configuration for reference
  // controller for main web pages
  .controller('slave', [ '$scope', '$rootScope', '$modal', '$location', 'messageFactory', function ( $scope, $rootScope, $modal, $location, messageFactory ){

    // check if this is the dev server, also check to see if the remember dismiss flag has been set in the localStorage
    $scope.__constructor = function() {
      this.host = $location.host();
      if( ( this.host.match(/reports-dev/i) || this.host.match(/reports-test/i) ) && localStorage.getItem('alertDismiss_server') !== 'true' ) {
        $scope.alerts.add({
          icon: 'fa-exclamation-triangle',
          message: ( this.host.match(/reports-test/i) ? 'This is the test site!' : 'This is the dev site!' ),
          type: ( this.host.match(/reports-test/i) ? 'alert-warning' : 'alert-danger' ),
          sessionFlag: 'server'
        });
      }
    }

    // page alerts
    $scope.alerts = {

      // id sequence
      IdSequence: 0,

      // array of alerts
      alerts: [],

      // add an alert and return the alerts id number
      add: function( alertObject ) {

        this.index = $scope.alerts.alerts.length;
        this.id = $scope.alerts.IdSequence;
        $scope.alerts.IdSequence++;

        $scope.alerts.alerts[this.index] = alertObject;
        $scope.alerts.alerts[this.index].id = $scope.alerts.IdSequence;
        return this.id;
      },

      // dismiss an alert
      close: function( id, type ) {

        // by default, no type is specified, so the developer means id, internally we use the $index to reference the array
        type = typeof type == 'undefined' ? 'id' : type;

        // loop through the alerts array
        angular.forEach( $scope.alerts.alerts, function( alert, index ) {

          // check if the id matches the current, type id means that we use the id property, index means we use the array index
          if( ( type == 'index' && id == index ) || ( type == 'id' && alert.id == id ) ) {

            // remember that the user dismissed this alert
            if( typeof $scope.alerts.alerts[id].sessionFlag !== 'undefined' && $scope.alerts.alerts[id].sessionFlag ) {
              localStorage.setItem( 'alertDismiss_'+$scope.alerts.alerts[id].sessionFlag, true );
            }

            // remove the alert
            $scope.alerts.alerts.splice(index, 1);
          }
        });
      }
    }

    // buttons
    $scope.buttons = {
      IdSequence: 0,
      buttons: [],

      addButton: function( buttonObject ) {

        buttonObject.id = $scope.buttons.IdSequence;
        $scope.buttons.IdSequence++;

        $scope.buttons.buttons.unshift(buttonObject);
        return buttonObject.id;
      },
      removeButton: function( id, type ) {

        // by default, no type is specified, so the developer means id, internally we use the $index to reference the array
        type = typeof type == 'undefined' ? 'id' : type;

        // loop through the buttons array
        angular.forEach( $scope.buttons.buttons, function( button, index ) {

          // check if the id matches the current, type id means that we use the id property, index means we use the array index
          if( ( type == 'index' && id == index ) || ( type == 'id' && button.id == id ) ) {

            // remove the alert
            $scope.buttons.buttons.splice(index, 1);
          }
        });
      },

      // allow hiding of a button
      hide: function( id, state, type ) {
        type = typeof type == 'undefined' ? 'id' : type;
        angular.forEach( $scope.buttons.buttons, function( button, index ) {
          if( ( type == 'index' && id == index ) || ( type == 'id' && button.id == id ) ) {
            $scope.buttons.buttons[index].hide = state ? false : true;
          }
        })
      }
    }

    // default enlarge button
    $scope.buttons.addButton({
      title: 'enlarge',
      icon: 'fa-expand',
      callback: function( buttonId ) {
        $scope.enlarge( buttonId );
      }
    });

    // page attributes
    $scope.enlarged = false;
    $scope.title    = 'Enlarge';

    // control the page enlarging
    $scope.enlarge = function( buttonId ) {
      var index = -1;
      angular.forEach( $scope.buttons.buttons, function( button, _index ) {
        if( button.id == buttonId ) {
          index = _index;
        }
      });
      $scope.enlarged = !$scope.enlarged;
      if( index >= 0 ) {
        $scope.buttons.buttons[index].title = $scope.enlarged ? 'Shrink' : 'Enlarge';
        $scope.buttons.buttons[index].icon  = $scope.enlarged ? 'fa-compress' : 'fa-expand';
      }
    }

    //$rootScope.$on("$locationChangeStart", function(event, next, current) {});

    // service abstraction
    $scope.sendMessage = function( to, from, message ) {
      messageFactory.sendMessage( to, from, message );
    }

    // listen for messages from other controllers
    messageFactory.addReceiver( 'slave', function( from, message ) {
      // allow another controller to inject a remote value into the local scope
      if( typeof message === 'object' && message.action && message.action == 'updateValue' && message.name ) {
        $scope[message.name] = '';
        $scope[message.name] = message.value;
      }

      if( typeof message === 'object' && message.action && message.action == 'addButton' && message.button ) {
        return $scope.buttons.addButton(message.button);
      }
    });

    $scope.$on('userLoggedIn', function(event,args) {
      if( page.loginReload ) {
        // default to hard reloading of the page
        window.location.reload();
      } else {
        // do things dynamically here
      }
    });

    //
    $scope.openLoginDialog = function() {
      var modalInstance = $modal.open({
        templateUrl: page.wrapper+"/modules/angular/loginModal.html",
        controller: 'loginModalController',
        size: '',
        backdrop: true,
        resolve: {}
      });
    }

    // run the constructor function
    $scope.__constructor();
  }]) // end slave

//---------------------------------------------------------------------------------------------------------------------------------------------------
// controller for store configuration
  .controller('loginModalController', [ '$scope', '$rootScope', '$modalInstance', '$http', '$animate', function( $scope, $rootScope, $modalInstance, $http, $animate ) {
    $scope.constructor = function() {
      $scope.passwordVisible = false;
      $scope.error = false;
      $scope.submitted = false;

      $scope.username = '';
      $scope.password = '';
    }
    $scope.constructor();

    $scope.submit = function() {

      if( $scope.username != '' && $scope.password != '' ) {
        var request = {};
        request.username = $scope.username;
        request.password = $scope.password;

        var wrapperVersion = (page.wrapper).replace('\/wrapper\/', '');

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
        });
      }
    };

    $scope.close = function() {
      $modalInstance.dismiss('cancel');
    };
  }]) // end loginModalController
*/