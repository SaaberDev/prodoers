<?php

    namespace App\Console\Commands;

    use Illuminate\Console\Command;
    use Storage;

    class MakeDirectory extends Command
    {
        /**
         * The name and signature of the console command.
         *
         * @var string
         */
        protected $signature = 'directory:make';

        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Make Designwala Specific Directories';

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
            if (!(
                Storage::exists(config('designwala_paths.store.services.service_image')) &&
                Storage::exists(config('designwala_paths.store.services.thumbnail')) &&
                Storage::exists(config('designwala_paths.store.service_categories.banner')) &&
                Storage::exists(config('designwala_paths.store.service_categories.thumbnail')) &&
                Storage::exists(config('designwala_paths.store.site_cms.banner')) &&
                Storage::exists(config('designwala_paths.store.site_cms.brand_icon')) &&
                Storage::exists(config('designwala_paths.store.site_cms.brand_logo')) &&
                Storage::exists(config('designwala_paths.store.site_cms.service_process')) &&
                Storage::exists(config('designwala_paths.store.site_cms.how_designwala_works')) &&
                Storage::exists(config('designwala_paths.store.site_cms.payment_method')) &&
                Storage::exists(config('designwala_paths.store.site_cms.social_icon')) &&
                Storage::exists(config('designwala_paths.store.site_cms.statistic_icon'))
            )) {
                Storage::makeDirectory(config('designwala_paths.store.services.service_image'));
                Storage::makeDirectory(config('designwala_paths.store.services.thumbnail'));
                Storage::makeDirectory(config('designwala_paths.store.service_categories.banner'));
                Storage::makeDirectory(config('designwala_paths.store.service_categories.thumbnail'));
                Storage::makeDirectory(config('designwala_paths.store.site_cms.banner'));
                Storage::makeDirectory(config('designwala_paths.store.site_cms.brand_icon'));
                Storage::makeDirectory(config('designwala_paths.store.site_cms.brand_logo'));
                Storage::makeDirectory(config('designwala_paths.store.site_cms.service_process'));
                Storage::makeDirectory(config('designwala_paths.store.site_cms.how_designwala_works'));
                Storage::makeDirectory(config('designwala_paths.store.site_cms.payment_method'));
                Storage::makeDirectory(config('designwala_paths.store.site_cms.social_icon'));
                Storage::makeDirectory(config('designwala_paths.store.site_cms.statistic_icon'));
                $this->info('Directories Created Successfully');
            } else {
                $this->error('Directories Already Exists');
            }
        }
    }
