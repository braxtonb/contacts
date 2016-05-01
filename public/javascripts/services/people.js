/* public/javascripts/services/people.js */

(function() {

  'use strict';

  angular
    .module('contacts')
    .factory('people', people);

  function people($resource) {

    var People = $resource('api/people/:id', null, {
      'update': {
        method: 'PUT'
      }
    });

    function getPeople() {
      return People.query().$promise.then(function(results) {
        return results;
      }, function(error) {
        console.log(error);
      });
    }

    function createPerson(data) {
      return People.save(data).$promise.then(function(success) {
        console.log(success);
      }, function(error) {
        console.log(error);
      });
    }

    function updatePerson(data) {
      return People.update({
        id: data.id
      }, data).$promise.then(function(success) {
        console.log(success);
      }, function(error) {
        console.log(error);
      });
    }

    function removePerson(id) {
      return People.remove({
        id: id
      }).$promise.then(function(success) {
        console.log(success);
      }, function(error) {
        console.log(error);
      });
    }

    return {
      getPeople: getPeople,
      createPerson: createPerson,
      removePerson: removePerson,
      updatePerson: updatePerson

    };
  }

})();