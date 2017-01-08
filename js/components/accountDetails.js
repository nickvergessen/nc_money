angular.module('moneyApp')
.controller('accountDetailsCtrl', function($route, $routeParams, $scope, AccountService) {
  var ctrl = this;

  ctrl.loading = true;
  ctrl.show = false;

  ctrl.closeAccount = function() {
    $route.updateParams({
      tid: $routeParams.tid,
      aid: undefined
    });
    ctrl.show = false;
    ctrl.account = undefined;
  }

  ctrl.aid = $routeParams.aid;

  ctrl.t = {
    noAccount : t('money', 'No account opened.'),
    placeholderName : t('money', 'Name'),
    placeholderCurrency : t('money', 'Currency'),
    placeholderDescription : t('money', 'Description'),
    download : t('money', 'Download'),
    delete : t('money', 'Delete')
  };

  $scope.$watch('ctrl.aid', function(newValue) {
    ctrl.changeAccount(newValue);
  });

  ctrl.changeAccount = function(aid) {
    if (typeof aid === 'undefined') {
      ctrl.show = false;
      $('#app-navigation-toggle').removeClass('showdetails');
      return;
    }
    AccountService.getById(aid).then(function(account) {
      if (angular.isUndefined(account)) {
        ctrl.closeAccount();
        return;
      }
      ctrl.account = account;
      ctrl.show = true;
      $('#app-navigation-toggle').addClass('showdetails');
    });
  };

  ctrl.updateAccount = function() {
    AccountService.update(ctrl.account);
  };

  ctrl.deleteAccount = function() {
    AccountService.delete(ctrl.account);
  };

});

angular.module('moneyApp')
.directive('accountDetails', function() {
  return {
    priority: 1,
    scope: {},
    controller: 'accountDetailsCtrl',
    controllerAs: 'ctrl',
    bindToController: {},
    templateUrl: OC.linkTo('money', 'templates/accountDetails.html')
  };
});