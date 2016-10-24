(function(angular, $, _) {

  angular.module('allmemberships').config(function($routeProvider) {
      $routeProvider.when('/allmemberships', {
        controller: 'AllmembershipsMembershipCtrl',
        templateUrl: '~/allmemberships/MembershipCtrl.html',

        // If you need to look up data when opening the page, list it out
        // under "resolve".
        resolve: {

          memberships: function(crmApi) {
            return crmApi('Membership', 'get', {});
          }
        }
      });
    }
  );

  // The controller uses *injection*. This default injects a few things:
  //   $scope -- This is the set of variables shared between JS and HTML.
  //   crmApi, crmStatus, crmUiHelp -- These are services provided by civicrm-core.
  //   myContact -- The current contact, defined above in config().
  angular.module('allmemberships').controller('AllmembershipsMembershipCtrl', function($scope, crmApi, crmStatus, crmUiHelp, memberships) {
    // The ts() and hs() functions help load strings for this module.
    var ts = $scope.ts = CRM.ts('allmemberships');
    var hs = $scope.hs = crmUiHelp({file: 'CRM/allmemberships/MembershipCtrl'}); // See: templates/CRM/allmemberships/MembershipCtrl.hlp
    var allmemberships = memberships.values;
    var arrMem = $.map(allmemberships, function(value, index) {
        return [value];
    });

    function getDetails(Obj) {
      return crmApi('Contact', 'getsingle', {
        id: Obj.id,
        return: ['display_name']
      }).then(function(detail){
        Obj.contact_name = detail.display_name;
      });
    }
    for (var i = 0; i < arrMem.length; i++) {
      var contact = getDetails(arrMem[i]);
    }
    // We have myContact available in JS. We also want to reference it in HTML.
    console.log(arrMem);
    $scope.memberships = arrMem;
    $scope.reverse = false;;
    $scope.toggleFilter = function() {
      $scope.reverse = !$scope.reverse;
    }

    // $scope.save = function save() {
    //   return crmStatus(
    //     // Status messages. For defaults, just use "{}"
    //     {start: ts('Saving...'), success: ts('Saved')},
    //     // The save action. Note that crmApi() returns a promise.
    //     crmApi('Contact', 'create', {
    //       id: myContact.id,
    //       first_name: myContact.first_name,
    //       last_name: myContact.last_name
    //     })
    //   );
    // };
  });

})(angular, CRM.$, CRM._);
