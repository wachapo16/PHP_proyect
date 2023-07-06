<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CyclesCommand extends Command
{

    protected $signature = 'app:cycles-command {number}';

    protected $description = 'Command description';

    public function handle()
    {
        $n = $this -> argument("number");

        for ($i = 1; $i <= $n; $i = $i + 1) {
            $this->info($i);
        }
    }
}
