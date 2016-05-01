/* public/javascripts/controllers/PeopleController.js */ 

(function() {

	'use strict';

	angular
		.module('contacts')
		.controller('PeopleCtrl', PeopleCtrl);

		function PeopleCtrl($resource, people, $scope) {
			var self = this;

			$scope.updatedPerson = {};

			// Call function to grab all the people saved in the database
			getPeople();

			function getPeople() {
				people.getPeople().then(function(results) {
					self.people = results;
				}, function(error) {
					console.log(error);
				});
			}

			self.createPerson = function(person) {
				people.createPerson(person).then(function(success) {
					self.newPerson = {};
					// Update the view
					getPeople();
					console.log(success);
				}, function(error) {
					console.log(error);
				});
			};

			self.updatePerson = function(person) {
				console.log(person);
				people.updatePerson(person).then(function(success) {
					// Update the view
					getPeople();
					console.log(success);
				}, function(error) {
					console.log(error);
				});
			}

			self.removePerson = function(person) {
				var id = person.id;

				people.removePerson(id).then(function(success) {
					// Update the view
					getPeople();
					console.log(success);
				}, function(error) {
					console.log(error);
				});
			};
		}

})();

