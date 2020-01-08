<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Larabaze extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'excel:strip {file}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Strip an excel file and extract all the links';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
    }

}
