<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:send {user}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        $user = $this->argument('user');
        $this->output->writeln("aaa email to: {$user}");
        $this->info("ccc email to: {$user}");
        echo 111;
    }
}
