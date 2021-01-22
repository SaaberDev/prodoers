<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

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
        if (
        !(\Storage::exists('public/admin_panel/services/service_image/') && \Storage::exists('public/admin_panel/services/thumbnail/') &&
        \Storage::exists('public/admin_panel/services_categories/banner/') && \Storage::exists('public/admin_panel/services_categories/thumbnail/'))
        ){
            \Storage::makeDirectory('public/admin_panel/services/service_image/');
            \Storage::makeDirectory('public/admin_panel/services/thumbnail/');
            \Storage::makeDirectory('public/admin_panel/services_categories/banner/');
            \Storage::makeDirectory('public/admin_panel/services_categories/thumbnail/');
            $this->info('Directories Created Successfully');
        } else {
            $this->error('Directories Already Exists');
        }
    }
}
