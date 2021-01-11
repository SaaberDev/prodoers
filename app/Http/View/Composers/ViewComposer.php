<?php


    namespace App\Http\View\Composers;


    use App\Models\Service;
    use App\Models\ServiceCategory;
    use Illuminate\View\View;

    class ViewComposer
    {
        public function compose(View $view)
        {
            $view->with(
                'service_categories',
                    ServiceCategory::whereHas('services')->with('services', function ($query){
                        $query->getAllPublished()->getAllPopular();
                    })->getAllPublished()->orderByIdDesc()->get()
            );

            $view->with(
                'services',
                    Service::getAllPublished()->getAllPopular()->orderByIdDesc()->get(),
            );



        }
    }
