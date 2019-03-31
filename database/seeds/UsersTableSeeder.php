<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
  public function run()
  {
      factory(User::class, 12)->create();

      DB::table('users')->insert([
          'name' => 'admin',
          'email' => 'admin@admin.com',
          'password' => bcrypt('123456')
      ]);
  }
}
