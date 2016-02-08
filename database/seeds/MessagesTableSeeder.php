<?php

use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
            'title' => 'Welcome',
            'message' => 'Hi, my name is toto',
            'day_to_send' => '1',
            'time_to_send' => '12:00:00',
            'tags' => 'tag1, tag2, tag3',
        ]);
    }
}
