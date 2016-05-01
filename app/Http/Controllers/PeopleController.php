<?php

namespace App\Http\Controllers;

use App\Http\Requests;

use App\Person;

use Request; // Check oout config/app.php for aliases

class PeopleController extends Controller
{
    // Gets people from the people table and returns them
		public function index() {
			$people = Person::all();

			return $people;
		}

		public function store() {
			$data = Request::all();

			$person = new Person();

			$person->fill($data);

			$person->save();
		}

		public function update($id) {
			$person = Person::find($id);

			$data = Request::all();

			$person->fill($data);

			$person->save();
		}

		public function destroy($id) {
			$person = Person::find($id);

			$person->delete();
		}

}
