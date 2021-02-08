<?php

namespace App\Http\Controllers\Admin\Service;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Services\TagRequest;
use App\Models\Tag;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Response;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        return view('admin_panel.pages.services.tag.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(TagRequest $request)
    {
//        $notify = [
//
//        ];
        \DB::transaction(function () use ($request){
            $tagInputs = collect(explode(',', $request->input('tags')));
//            dd($tagInputs);
            $tagInputs->each(function ($value) {
//                dd();
                Tag::firstOrCreate([
                    'title' => str_replace(' ', '', $value),
                ]);
            });
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
        $tags = Tag::findOrFail($id);
        return \view('admin_panel.pages.services.tag.edit', compact('tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(TagRequest $request, $id)
    {
        $tags = Tag::findOrFail($id);
//        $notify = [
//
//        ];
        $input = str_replace(' ','', $request->input('tags'));
//        dd($input);
        \DB::transaction(function () use ($request, $tags, $input){
            $tags->update([
                'title' => $input,
            ]);

        });
        return redirect()->route('services.tag.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
//        $notify = [
//            'alert-type' => 'success_toast',
//            'message' => 'Tag Deleted !',
//        ];
        $tags = Tag::findOrFail($id);
        \DB::transaction(function () use ($tags){
            $tags->delete();
        });
        return redirect()->back();
    }
}
