<?php


    namespace App\Http\View\Composers;

    use App\Models\BrandIdentity;
    use App\Models\ServiceCategory;
    use App\Models\ServiceProcess;
    use App\Models\SiteCms;
    use App\Models\SocialLinks;
    use Illuminate\View\View;

    class ViewComposer
    {
        public $service_categories;
        public $social_links;
        public $brand_identity;

        public function __construct()
        {
            // header
            $this->service_categories = ServiceCategory::getAllPublished()
                ->withAndWhereHas('services', function ($query){
                    $query->select('id', 'service_category_id', 'title', 'slug')->getAllPublished();
                })
                ->limit(5)
                ->orderByDesc('id')
                ->get(['id', 'title', 'slug', 'navbar_status']);

            // footer
            $this->social_links = SocialLinks::orderByDesc('id')->get(['id', 'social_icon']);

            // brand identity
            $this->brand_identity = [
                'logo' => \Storage::disk('public')->url(config('image-location.images.site_cms.brand_logo') . BrandIdentity::query()->findOrFail(1)->logo),
                'favicon' => \Storage::disk('public')->url(config('image-location.images.site_cms.brand_icon') . BrandIdentity::query()->findOrFail(1)->favicon),
            ];
        }

        public function compose(View $view)
        {
            $view->with('service_categories', $this->service_categories);
            $view->with('social_links', $this->social_links);
            $view->with('brand_identity', $this->brand_identity);
        }
    }
