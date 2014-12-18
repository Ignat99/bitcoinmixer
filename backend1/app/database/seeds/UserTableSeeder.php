<?php

class UserTableSeeder extends Seeder {

	public function run()
	{

		$user = array(
			'name' => 'Super admin',
                  'email' => 'ignat99@gmail.com',
                  'password' => Hash::make('nolde123'),
                  'confirmed' => 1,
                  'confirmation_code' => md5(microtime().Config::get('app.key')),
                  'admin' => 1,
                  'status' => 1,
                  'created_at' => new DateTime,
                  'updated_at' => new DateTime,
		);

		// Uncomment the below to run the seeder
		DB::table('users')->insert($user);
	}

}
