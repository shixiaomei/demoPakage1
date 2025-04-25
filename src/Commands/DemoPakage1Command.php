<?php

namespace wojianduanfa\DemoPakage1\Commands;

use Illuminate\Console\Command;

class DemoPakage1Command extends Command
{
    public $signature = 'demopakage1';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
