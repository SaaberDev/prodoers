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
                Storage::disk('public')->exists(config('image-location.images.services.service_image')) &&
                Storage::disk('public')->exists(config('image-location.images.services.thumbnail')) &&
                Storage::disk('public')->exists(config('image-location.images.service_categories.banner')) &&
                Storage::disk('public')->exists(config('image-location.images.service_categories.thumbnail')) &&
                Storage::disk('public')->exists(config('image-location.images.site_cms.banner')) &&
                Storage::disk('public')->exists(config('image-location.images.site_cms.brand_icon')) &&
                Storage::disk('public')->exists(config('image-location.images.site_cms.brand_logo')) &&
                Storage::disk('public')->exists(config('image-location.images.site_cms.service_process')) &&
                Storage::disk('public')->exists(config('image-location.images.site_cms.how_designwala_works')) &&
                Storage::disk('public')->exists(config('image-location.images.site_cms.payment_method')) &&
                Storage::disk('public')->exists(config('image-location.images.site_cms.social_icon')) &&
                Storage::disk('public')->exists(config('image-location.images.site_cms.statistic_icon'))
            )) {
                Storage::disk('public')->makeDirectory(config('image-location.images.services.service_image'));
                Storage::disk('public')->makeDirectory(config('image-location.images.services.thumbnail'));
                Storage::disk('public')->makeDirectory(config('image-location.images.service_categories.banner'));
                Storage::disk('public')->makeDirectory(config('image-location.images.service_categories.thumbnail'));
                Storage::disk('public')->makeDirectory(config('image-location.images.site_cms.banner'));
                Storage::disk('public')->makeDirectory(config('image-location.images.site_cms.brand_icon'));
                Storage::disk('public')->makeDirectory(config('image-location.images.site_cms.brand_logo'));
                Storage::disk('public')->makeDirectory(config('image-location.images.site_cms.service_process'));
                Storage::disk('public')->makeDirectory(config('image-location.images.site_cms.how_designwala_works'));
                Storage::disk('public')->makeDirectory(config('image-location.images.site_cms.payment_method'));
                Storage::disk('public')->makeDirectory(config('image-location.images.site_cms.social_icon'));
                Storage::disk('public')->makeDirectory(config('image-location.images.site_cms.statistic_icon'));
                $this->info('Directories Created Successfully');
            } else {
                $this->error('Directories Already Exists');
            }
        }
    }
