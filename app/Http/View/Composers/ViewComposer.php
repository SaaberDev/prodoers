<?php


    namespace App\Http\View\Composers;

    use App\Models\ServiceCategory;
    use App\Models\SocialLinks;
    use Illuminate\View\View;

    class ViewComposer
    {
        public $service_categories;
        public $social_links;
        public function __construct()
        {
            $this->service_categories = ServiceCategory::getAllPublished()
                ->withAndWhereHas('services', function ($query){
                    $query->select('id', 'service_category_id', 'title', 'slug')->getAllPublished();
                })
                ->limit(5)
                ->orderByDesc('id')
                ->get(['id', 'title', 'slug', 'navbar_status']);
            $this->social_links = SocialLinks::orderByDesc('id')->get(['id', 'social_icon']);
        }

        public function compose(View $view)
        {
            $view->with('service_categories', $this->service_categories);
            $view->with('social_links', $this->social_links);
        }
    }
