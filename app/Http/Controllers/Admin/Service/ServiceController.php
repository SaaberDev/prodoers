<?php

namespace App\Http\Controllers\Admin\Service;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Service\ServiceRequest;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\ServiceFaq;
use App\Models\ServiceFeature;
use App\Models\ServiceImage;
use App\Models\ServiceTag;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        return view('admin_panel.pages.services.service.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create()
    {
        $service_categories = ServiceCategory::orderByDesc('title')->get(['title', 'id']);
        $service_tags = ServiceTag::orderByDesc('title')->get(['title', 'id']);
        return view('admin_panel.pages.services.service.create', compact('service_categories', 'service_tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ServiceRequest $request
     * @return RedirectResponse
     */
    public function store(ServiceRequest $request)
    {
//        $notify = [
//            'alert-type' => 'success',
//            'message' => 'New Service Added Successfully !',
//        ];
        DB::transaction(function () use ($request){
            $slug = SlugService::createSlug(Service::class, 'slug', $request->input('service_title'));
            $services = Service::firstOrCreate([
                'title' => $request->input('service_title'),
                'popular_status' => $request->input('popular_status'),
                'published_status' => $request->input('published_status'),
                'meta_desc' => $request->input('meta_description'),
                'service_category_id' => $request->input('allCategories'),
                'price' => $request->input('service_price'),
                'slug' => $slug,
                'thumbnail' => SingleImageUploadHandler($request, $slug,'service_thumbnail', 'thumbnail', config('designwala_paths.images.services.thumbnail')),
                'service_desc' => $request->input('service_description'),
            ]);

            $service_tagInputs = collect(explode(',', $request->input('service_tags')));
            $service_tagInputs->each(function ($tag) use ($services){
                $services->service_tags()->attach($tag);
            });

            $images = collect(MultiImageUploadHandler($request, $slug,'service_images', 'service-image', config('designwala_paths.images.services.service_image')));
            $images->each(function ($image) use ($services){
                ServiceImage::firstOrCreate([
                    'service_id' => $services->id,
                    'filename' => $image
                ]);
            });

            $inputs = collect($request->input('features'));
            $inputs->each(function ($input) use ($services){
                ServiceFeature::firstOrCreate([
                    'service_id' => $services->id,
                    'feature_desc' => $input
                ]);
            });


            $faqs = [];
            $question = $request->input('question');
            $answer = $request->input('answer');
            for($count = 0; $count < count($question); $count++)
            {
                $data = array(
                    'question' => $question[$count],
                    'answer'  => $answer[$count]
                );
                $faqs[] = $data;
            }
            foreach ($faqs as $faq){
//                dd($faq);
                ServiceFaq::firstOrCreate([
                    'service_id' => $services->id,
                    'question' => $faq['question'],
                    'answer' => $faq['answer']
                ]);
            }
        });

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Application|Factory|View|Response
     */
    public function edit($id)
    {
        $services = Service::findOrFail($id);
        $service_categories = ServiceCategory::getTitle();
        $service_tags = ServiceTag::getTitle();

        $service_image = \Storage::disk('local')->url(config('designwala_paths.images.services.service_image'));
        $thumbnail = \Storage::disk('local')->url(config('designwala_paths.images.services.thumbnail'));

        return view('admin_panel.pages.services.service.edit', compact('services', 'id', 'service_categories', 'service_tags', 'service_image', 'thumbnail'));
    }


    public function destroyServiceImage($id)
    {
//        $notify = [
//            'alert-type' => 'success_toast',
//            'message' => 'Banner Image Deleted !',
//        ];
        $service_image = ServiceImage::findOrFail($id);
        DB::transaction(function () use ($service_image){
            deleteFileBefore(config('designwala_paths.images.services.service_image'), $service_image->filename);
            $service_image->delete();
        });

        return redirect()->back();
    }

    public function destroyServiceFeature($id)
    {
//        $notify = [
//            'alert-type' => 'success_toast',
//            'message' => 'Feature Deleted !',
//        ];
        $service_feature = ServiceFeature::findOrFail($id);
        DB::transaction(function () use ($service_feature){
            $service_feature->delete();
        });

        return redirect()->back();
    }

    public function destroyServiceFaq($id)
    {
//        $notify = [
//            'alert-type' => 'success_toast',
//            'message' => 'FAQ Deleted !',
//        ];
        $service_faqs = ServiceFaq::findOrFail($id);
        DB::transaction(function () use ($service_faqs){
            $service_faqs->delete();
        });

        return redirect()->back();
    }


    /**
     * Update the specified resource in storage.
     *
     * @param ServiceRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(ServiceRequest $request, $id)
    {
//        $notify = [
//            'alert-type' => 'success',
//            'message' => 'Service Updated Successfully!',
//        ];
        $services = Service::findOrFail($id);
        DB::transaction(function () use ($request, $services){
            $slug = SlugService::createSlug(Service::class, 'slug', $request->input('service_title'));
            $services->update([
                'title' => $request->input('service_title'),
                'popular_status' => $request->input('popular_status'),
                'published_status' => $request->input('published_status'),
                'meta_desc' => $request->input('meta_description'),
                'service_category_id' => $request->input('allCategories'),
                'price' => $request->input('service_price'),
                'slug' => $slug,
                'thumbnail' => SingleImageUpdateHandler($request, $slug, $services->thumbnail, 'service_thumbnail', 'thumbnail',config('designwala_paths.images.services.thumbnail')),
                'service_desc' => $request->input('service_description'),
            ]);

            $service_tagInputs = collect(explode(',', $request->input('service_tags')));
            $services->service_tags()->sync($service_tagInputs);


            $images = MultiImageUpdateHandler($request, $slug,'service_images', 'service-image', config('designwala_paths.images.services.service_image'));
            foreach ($images as $image) {
                $services->serviceImages()->create([
                    'service_id' => $services->id,
                    'filename' => $image
                ]);
            }

            $inputs = $request->input('features');
            $services->serviceFeatures()->delete();
            foreach ($inputs as $input) {
                $services->serviceFeatures()->create([
                    'service_id' => $services->id,
                    'feature_desc' => $input
                ]);
            }

            $faqs = [];
            $question = $request->input('question');
            $answer = $request->input('answer');
            for($count = 0; $count < count($question); $count++)
            {
                $data = array(
                    'question' => $question[$count],
                    'answer'  => $answer[$count]
                );
                $faqs[] = $data;
            }
            $services->serviceFaqs()->delete();
            foreach ($faqs as $faq){
                $services->serviceFaqs()->create([
                    'service_id' => $services->id,
                    'question' => $faq['question'],
                    'answer' => $faq['answer']
                ]);
            }
        });

        return redirect()->route('services.service.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $notify = [
            'alert-type' => 'success_toast',
            'message' => 'Service has been Deleted !',
        ];
        $services = Service::findOrFail($id);
        DB::transaction(function () use ($services){
            foreach ($services->serviceImages as $service_image){
                deleteFileBefore(config('designwala_paths.images.services.service_image'), $service_image->filename);
            }
            deleteFileBefore(config('designwala_paths.images.services.thumbnail'), $services->thumbnail);
            $services->delete();
        });

        return redirect()->back()->with($notify);
    }
}
