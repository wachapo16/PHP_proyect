<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Password extends Command
{

    protected $signature = 'app:password {password}';

    protected $description = 'Command description';

    public function handle()
    {
        $password = $this -> argument( "password");

        if ($password = "strig") {
            # code...
        }
    }
}
