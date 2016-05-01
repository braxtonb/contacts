/* javascripts/directives/myfooterDirective.js */ 

(function() {

	'use strict';

	angular
		.module('contacts')
		.directive('myFooter', myFooter);

		function myFooter() {
			return {
				restrict: 'AE',
				templateUrl: 'javascripts/partials/myfooterView.html'
			};
		}

})();