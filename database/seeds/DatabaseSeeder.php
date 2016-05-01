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
				['name' => 'Lebron James', 'age' => 31, 'email' => 'kingjames@gmail.com'],
				['name' => 'Kawhi Leonard', 'age' => 24, 'email' => 'humblepie_kawhi@gmail.com'],
				['name' => 'Kobe Bryant', 'age' => 37, 'email' => 'blackmamba@gmail.com']
			);

		foreach($people as $person) {
			Person::create($person);
		}
	}
}