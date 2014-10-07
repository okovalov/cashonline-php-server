<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 3) as $index)
		{
			User::create([
                'email'        => $faker->email(),
                'name'         => $faker->name(),
                'password'     => Hash::make('secret'),
                'active'       => rand(0,1)
			]);
		}
	}

}
