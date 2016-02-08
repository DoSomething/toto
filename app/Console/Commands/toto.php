<?php

namespace App\Console\Commands;

use Slack;
use DB;
use Illuminate\Console\Command;


class Toto extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'toto';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Welcome people.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
      // Get the user.
      $user = DB::table('users')->first();
      // Get the message.
      $message = DB::table('messages')->first();
      // Send the message to the user.
      Slack::from('Toto')->to($user->slack_name)->send($message->message);
    }
}
