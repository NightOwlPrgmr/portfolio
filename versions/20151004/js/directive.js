angular.module('master')
//---------------------------------------------------------------------------------------------------------------------------------------------------
// directive attribute to allow using a value set in
  .directive('ngInitial', function() {
    return {
      restrict: 'A',
      controller: [
        '$scope', '$element', '$attrs', '$parse', function($scope, $element, $attrs, $parse) {
          var getter, setter, val;
          val = $attrs.ngInitial || $attrs.value;
          getter = $parse($attrs.ngModel);
          setter = getter.assign;
          setter($scope, val);
        }
      ]
    };
  })

//---------------------------------------------------------------------------------------------------------------------------------------------------
// directive to allow shake animation on forms
  .directive('shakeThat', ['$animate', function($animate) {

    return {
      require: '^form',
      scope: {
        submit: '&',
        submitted: '='
      },
      link: function(scope, element, attrs, form) {
        // listen on submit event
        element.on('submit', function() {
          // tell angular to update scope
          scope.$apply(function() {
            // everything ok -> call submit fn from controller
            if (form.$valid) return scope.submit();
            // show error messages on submit
            scope.submitted = true;
            // shake that form
            $animate.addClass(element, 'shake', function() {
              $animate.removeClass(element, 'shake');
            });
          });
        });
      }
    };

  }])

//---------------------------------------------------------------------------------------------------------------------------------------------------
//  draggable directive
// source http://www.erol.si/2014/07/ng-repeat-with-draggable-or-how-to-correctly-use-angularjs-with-jquery-ui/
  .directive('modalDraggable', function() {
    return {
      restrict: 'A',
      link: function(scope, element, attrs) {
        var options = {};
        if( attrs.modalDraggableHandle ) {
          options.handle = attrs.modalDraggableHandle;
        }

        if( attrs.modalDraggableTarget ) {
          $(element).closest( attrs.modalDraggableTarget ).draggable(options);

          scope.$on('$destroy', function() {
            $(element).closest( attrs.modalDraggableTarget ).off('**');
          });
        } else {
          element.draggable(options);

          scope.$on('$destroy', function() {
            element.off('**');
          });
        }
      }
    };
  })