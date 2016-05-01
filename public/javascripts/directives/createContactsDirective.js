/* javascripts/directives/createContactsDirective.js */ 

(function() {

	'use strict';

	angular
		.module('contacts')
		.directive('createContacts', createContacts);

		function createContacts() {
			return {
				restrict: 'AE',
				templateUrl: 'javascripts/partials/createContactsView.html'
			};
		}

})();