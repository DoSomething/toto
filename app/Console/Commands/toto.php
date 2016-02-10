<?php

namespace Toto\Console\Commands;

use GuzzleHttp;
use Toto\Models\User;
use Toto\Models\Message;
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
      // Get every user.
      $users = User::getUsers();
      // Get the message.
      foreach ($users as $user) {
        $message = Message::getMessage($user);
        $client = new \GuzzleHttp\Client([
          'base_uri' => 'http://localhost:3001',
        ]);
        // Send a request to the node server to post the message.
        $client->request('POST', '/post', [
            'json' => [
              'user' => $user,
              'message' => $message,
            ]
        ]);
      }
    }
}
