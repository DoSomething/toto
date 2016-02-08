<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          'name' => 'Andrea',
          'slack_name' => 'andrea',
          'start_date' => '2/1/2015'
        ]);

        DB::table('users')->insert([
          'name' => 'Shae',
          'slack_name' => 'Smith',
          'start_date' => '10/28/2014'
        ]);
    }
}
