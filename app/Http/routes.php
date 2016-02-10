<?php
use \React\EventLoop\Factory;

Route::get('/', function () {
    $loop = React\EventLoop\Factory::create();

    $client = new Slack\RealTimeClient($loop);
    $client->setToken(env('SLACK_TOKEN'));

    // disconnect after first message
    $client->on('message', function ($data) use ($client) {
        echo "Someone typed a message: ".$data['text']."\n";
        $client->disconnect();
    });

    $client->connect()->then(function () {
        echo "Connected!\n";
    });

    $loop->run();
    return view('welcome');
});

Route::resource('message', 'MessageController');
