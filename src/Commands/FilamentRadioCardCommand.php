<?php

namespace Uxit\FilamentRadioCard\Commands;

use Illuminate\Console\Command;

class FilamentRadioCardCommand extends Command
{
    public $signature = 'filament-radio-card';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
