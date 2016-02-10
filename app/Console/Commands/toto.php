<?php

namespace Toto\Console\Commands;

use Slack;
use Toto\Models\User;
use Toto\Models\Message;
use Illuminate\Console\Command;
use \React\EventLoop\Factory;

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
      // Get every user.
      $user = User::getUsers();
      // Get the message.
      $message = Message::getMessage();
      // Send the message to the user.
      // Slack::to($user->slack_name)->send($message->message);
    }
}
