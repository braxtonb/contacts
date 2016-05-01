<?php

use Illuminate\Database\Seeder;
use App\Person;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
    	$this->call('PeopleTableSeeder');
    }
}

class PeopleTableSeeder extends Seeder {
	public function run() {
		// We want to delete the users table if it exists before running the seed
		DB::table('people')->delete();

		$people = array(
				['name' => 'Braxton', 'age' => 21, 'email' => 'braxtonbrewton@gmail.com'],
				['name' => 'Lydia', 'age' => 44, 'email' => 'la@gmail.com'],
				['name' => 'Francis', 'age' => 27, 'email' => 'lpnclex@gmail.com']
			);

		foreach($people as $person) {
			Person::create($person);
		}
	}
}