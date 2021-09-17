<?php

    namespace App\Console\Commands;

    use Illuminate\Console\Command;
    use Storage;

    class DeleteDirectory extends Command
    {
        /**
         * The name and signature of the console command.
         *
         * @var string
         */
        protected $signature = 'directory:delete';

        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'This Command Will Delete All Existing Directories From Storage';

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
         * @return array
         */
        public function handle()
        {
            if (Storage::exists('public/images')) {
                Storage::deleteDirectory('public/images');
                $this->info('Directories Deleted Successfully');
            } else {
                $this->error('Directories Does Not Exists');
            }
        }
    }
