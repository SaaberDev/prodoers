<?php

namespace App\Http\Controllers\admin_panel\settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Footer\FooterRequest;
use App\Models\Footer;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Throwable;

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
            // Footer Logo
            Footer::whereFooterKey('footer_logo')
                ->firstOrFail()->update([
                    'value' => updateSVG($request, 'logo', getFooterKey('footer_logo'), 'footer_logo', 'footer', config('designwala_paths.admin.images.store.footer.logo')),
                ]);
            // Payment Method
            Footer::whereFooterKey('footer_payment_method')
                ->firstOrFail()->update([
                    'value' => updateSVG($request, 'payment-method', getFooterKey('footer_payment_method'), 'footer_payment_method', 'footer', config('designwala_paths.admin.images.store.footer.payment_method')),
                ]);
            // Copyright Text
            Footer::whereFooterKey('footer_copyright')
                ->firstOrFail()->update([
                    'value' => $request->input('footer_copyright'),
                ]);
            // Company Short Description
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

    public function create_social_links()
    {
        return \view('admin_panel.pages.settings.footer_section.social_links.create');
    }

    public function update_social_links()
    {

        return redirect()->back();
    }

}
