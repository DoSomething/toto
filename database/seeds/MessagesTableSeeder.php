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
            'title' => 'Day 1',
            'message' => 'Hi, my name is Toto. I am here to help',
            'day_to_send' => '1',
            'time_to_send' => '12:00:00',
            'tags' => 'tag1, tag2, tag3',
        ]);
         DB::table('messages')->insert([
            'title' => 'Day 2',
            'message' => 'Come to innovation meeting on wednesdays!',
            'day_to_send' => '2',
            'time_to_send' => '12:00:00',
            'tags' => 'tag1, tag2, tag3',
        ]);
         DB::table('messages')->insert([
            'title' => 'Day 3',
            'message' => 'Today is thursday, we have staff meeting at 4:30!',
            'day_to_send' => '3',
            'time_to_send' => '12:00:00',
            'tags' => 'tag1, tag2, tag3',
        ]);
         DB::table('messages')->insert([
            'title' => 'Day 4',
            'message' => 'Make sure to meet with @ritika about finance',
            'day_to_send' => '4',
            'time_to_send' => '12:00:00',
            'tags' => 'tag1, tag2, tag3',
        ]);
        DB::table('messages')->insert([
            'title' => 'Day 5',
            'message' => 'Look at this ya dummies, https://trello.com/b/McK68md1/onboarding-template',
            'day_to_send' => '5',
            'time_to_send' => '12:00:00',
            'tags' => 'tag1, tag2, tag3',
        ]);
         DB::table('messages')->insert([
            'title' => 'Day 6',
            'message' => 'Check out this thing docs.dosomething.org',
            'day_to_send' => '6',
            'time_to_send' => '12:00:00',
            'tags' => 'tag1, tag2, tag3',
        ]);
        DB::table('messages')->insert([
            'title' => 'Day 7',
            'message' => 'Go out to coffee with your buddy! WOOF.',
            'day_to_send' => '7',
            'time_to_send' => '12:00:00',
            'tags' => 'tag1, tag2, tag3',
        ]);
        for ($i = 8; $i < 31; $i++) {
            DB::table('messages')->insert([
                'title' => 'Day ' . $i,
                'message' => 'hi',
                'day_to_send' => $i,
                'time_to_send' => '12:00:00',
                'tags' => 'tag1, tag2, tag3',
            ]);
        }

    }
}
