<?php

namespace App\Http\Controllers\admin_panel\settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Footer\FooterRequest;
use App\Models\Footer;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\UploadedFile;

class FooterSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index_footer()
    {
        return view('admin_panel.pages.settings.footer_section.footer.index');
    }

    public function update_footer(FooterRequest $request)
    {
        \DB::transaction(function () use ($request){
            Footer::whereFooterKey('footer_logo')
                ->firstOrFail()->update([
                    'value' => updateSVG($request, 'logo', getFooterKey('footer_logo'), 'footer_logo', 'footer', config('designwala_paths.admin.images.store.footer.logo')),
                ]);
            Footer::whereFooterKey('copyright')
                ->firstOrFail()->update([
                    'value' => $request->input('copyright'),
                ]);
            Footer::whereFooterKey('footer_desc')
                ->firstOrFail()->update([
                    'value' => $request->input('footer_desc'),
                ]);
        });
//        dd($request);
        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index_social_links()
    {
        return view('admin_panel.pages.settings.footer_section.social_links.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Application|Factory|View|Response
     */
    public function edit_footer(/*$id*/)
    {
        return \view('admin_panel.pages.settings.footer_section.footer.edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Application|Factory|View|Response
     */
    public function edit_social_links(/*$id*/)
    {
        return \view('admin_panel.pages.settings.footer_section.social_links.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
