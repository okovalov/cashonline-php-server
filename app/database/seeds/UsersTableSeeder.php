<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
// use Cartalyst\Sentry\Hashing\NativeHasher;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 3) as $index)
		{
			 Sentry::getUserProvider()->create([
                'email'        => $faker->email(),
                'first_name'         => $faker->firstName(),
                'last_name'         => $faker->lastName(),
                // 'password'     => Hash::make('secret'),
                'password'     => 'secret',
                'activated'       => rand(0,1)
			]);
		}
	}

}
