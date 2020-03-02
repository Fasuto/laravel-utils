<?php

namespace Fasuto\Util\Commands;

use Illuminate\Console\Command;

class ClearAll extends Command
{
    protected $signature = 'clear:all';

    protected $description = 'Clear all laravel cache';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        Artisan::call('config:clear');
        Artisan::call('cache:clear');
        Artisan::call('route:clear');
        Artisan::call('view:clear');
        Artisan::call('clear-compiled');
    }
}
