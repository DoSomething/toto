<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Slack;

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
      Slack::send('hiii');
        // $this->comment(PHP_EOL.Inspiring::quote().PHP_EOL);
    }
}
