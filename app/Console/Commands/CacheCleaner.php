<?php

    namespace App\Console\Commands;

    use Artisan;
    use Illuminate\Console\Command;

    class CacheCleaner extends Command
    {
        /**
         * The name and signature of the console command.
         *
         * @var string
         */
        protected $signature = 'cache:delete';

        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'This command will clear application, route and config cache';

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
         * @return int
         */
        public function handle()
        {
            Artisan::call('cache:clear');
            $this->info('Application Cache Cleared');

            Artisan::call('route:clear');
            $this->info('Route Cache Cleared');

            Artisan::call('config:clear');
            $this->info('Config Cache Cleared');
        }
    }
