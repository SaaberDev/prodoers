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
                    $query->getAllPublished();
                }])->get();
            $this->social_links = SocialLinks::orderByIdDesc()->get();
        }

        public function compose(View $view)
        {
            $view->with('service_categories', $this->service_categories);
            $view->with('social_links', $this->social_links);
        }
    }
