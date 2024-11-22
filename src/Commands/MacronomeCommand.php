<?php

namespace ArdaGnsrn\Macronome\Commands;

use Illuminate\Console\Command;

class MacronomeCommand extends Command
{
    public $signature = 'laravel-macronome';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
