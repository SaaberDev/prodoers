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
                    ServiceCategory::getAllPublished()->navbarActive()->orderByIdDesc()
                    ->whereHas('services')
                    ->with(['services' => function ($query){
                        $query->getAllPublished();
                    }])->get()
            );

//            $view->with(
//                'services',
//                    Service::getAllPublished()->orderByIdDesc()->get()
//            );
        }
    }
