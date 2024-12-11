<?php

namespace PNerd\LaravelMakeComponents\Commands;

use Illuminate\Console\Command;

class LaravelMakeComponentsCommand extends Command
{
    public $signature = 'laravel-make-components';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
