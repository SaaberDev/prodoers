<?php


    namespace App\Http\View\Composers;

    use App\Models\BrandIdentity;
    use App\Models\CompanyPolicy;
    use App\Models\FooterContent;
    use App\Models\ServiceCategory;
    use App\Models\SocialLinks;
    use Illuminate\View\View;

    class ViewComposer
    {
        public array|\Illuminate\Database\Eloquent\Collection $service_categories;
        public $social_links;
        public array $brand_identity;
        public array $footer_content;

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
                'logo' => \Storage::disk('public')->url(config('image-location.images.site_cms.brand_logo') . BrandIdentity::query()->select('logo')->findOrFail(1)->logo),
                'favicon' => \Storage::disk('public')->url(config('image-location.images.site_cms.brand_icon') . BrandIdentity::query()->select('favicon')->findOrFail(1)->favicon),
            ];

            // footer
            $this->footer_content = [
                'footer_logo' => \Storage::disk('public')->url(config('image-location.images.site_cms.brand_logo') . FooterContent::query()->select('logo')->findOrFail(1)->logo),
                'desc' => FooterContent::query()->select('desc')->findOrFail(1)->desc,
                'payment_method' => \Storage::disk('public')->url(config('image-location.images.site_cms.payment_method') . FooterContent::query()->select('payment_method')->findOrFail(1)->payment_method),
            ];
        }

        public function compose(View $view)
        {
            $view->with('service_categories', $this->service_categories);
            $view->with('social_links', $this->social_links);
            $view->with('brand_identity', $this->brand_identity);
            $view->with('footer_content', $this->footer_content);
        }
    }
