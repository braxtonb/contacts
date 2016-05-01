/* javascripts/directives/manageContactsDirective.js */ 

(function() {

	'use strict';

	angular
		.module('contacts')
		.directive('manageContacts', manageContacts);

		function manageContacts() {
			return {
				restrict: 'AE',
				templateUrl: 'javascripts/partials/manageContactsView.html'
			};
		}

})();