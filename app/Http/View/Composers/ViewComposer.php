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
            $this->service_categories = ServiceCategory::getAllPublished()->orderByIdDesc()
                ->whereHas('services')
                ->with(['services' => function ($query){
                    $query->select('id', 'service_category_id', 'title', 'slug')->getAllPublished();
                }])->limit(5)->get(['id', 'title', 'slug']);
            $this->social_links = SocialLinks::orderByIdDesc()->get(['id', 'social_icon']);
//            dd($this->social_links);
        }

        public function compose(View $view)
        {
//            \DB::enableQueryLog();
            $view->with('service_categories', $this->service_categories);
            $view->with('social_links', $this->social_links);
//            var_dump(\DB::getQueryLog());
//            dd();
        }
    }
