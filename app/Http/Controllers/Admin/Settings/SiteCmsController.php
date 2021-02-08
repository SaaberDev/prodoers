<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Settings\SiteCms\BrandIdentityRequest;
use App\Http\Requests\Admin\Settings\SiteCms\FooterRequest;
use App\Http\Requests\Admin\Settings\SiteCms\PolicyRequest;
use App\Http\Requests\Admin\Settings\SiteCms\ServiceProcessRequest;
use App\Http\Requests\Admin\Settings\SiteCms\SocialLinkRequest;
use App\Models\SiteCms;
use App\Models\SocialLinks;
use Illuminate\Http\Request;

class SiteCmsController extends Controller
{
    /**
     * Brand identity Section
     */
    public function index_brand_identity()
    {
        return view('admin_panel.pages.settings.site_cms.brand_identity.index');
    }

    public function update_brand_identity(BrandIdentityRequest $request)
    {
//        dd($request->all());
        \DB::transaction(function () use ($request){
            // Brand Headline
            SiteCms::whereSiteKey('brand_headline')
                ->firstOrFail()->update([
                    'value' => $request->input('brand_headline'),
                ]);
            // Brand Tagline
            SiteCms::whereSiteKey('brand_tagline')
                ->firstOrFail()->update([
                    'value' => $request->input('brand_tagline'),
                ]);
            // Home Page Banner
            SiteCms::whereSiteKey('home_page_banner')
                ->firstOrFail()->update([
                    'value' => updateSVG($request, 'home-page-banner', getKey('home_page_banner'), 'home_page_banner', 'brand-identity', config('designwala_paths.store.site_cms.banner')),
                ]);
            // Brand Logo
            SiteCms::whereSiteKey('brand_logo')
                ->firstOrFail()->update([
                    'value' => updateSVG($request, 'brand-logo', getKey('brand_logo'), 'brand_logo', 'brand-identity', config('designwala_paths.store.site_cms.brand_logo')),
                ]);
            // Browser Favicon
            SiteCms::whereSiteKey('browser_favicon')
                ->firstOrFail()->update([
                    'value' => updateSVG($request, 'browser-favicon', getKey('browser_favicon'), 'browser_favicon', 'brand-identity', config('designwala_paths.store.site_cms.brand_icon')),
                ]);
        });
        return redirect()->back();
    }

    /**
     * Service Process Section
     */
    public function index_service_process()
    {
        return view('admin_panel.pages.settings.site_cms.service_process.index');
    }

    public function update_service_process(ServiceProcessRequest $request)
    {
        \DB::transaction(function () use ($request){
            // need to work here ...
        });
    }

    /**
     * How Designwala Works ?
     */
    public function index_how_designwala_works()
    {
        return view('admin_panel.pages.settings.site_cms.how_designwala_works.index');
    }

    public function update_how_designwala_works(Request $request, $id)
    {
        //
    }

    /**
     * Blog Section
     */
    public function index_blog_section()
    {
        return view('admin_panel.pages.settings.site_cms.blog_section.index');
    }

    public function update_blog_section(Request $request, $id)
    {
        //
    }

    /**
     * Statistics Section
     */
    public function index_statistics()
    {
        return view('admin_panel.pages.settings.site_cms.statistics_section.index');
    }

    public function update_statistics(Request $request, $id)
    {
        //
    }


    /**
     * Footer Content
     */
    public function index_footer()
    {
        return view('admin_panel.pages.settings.site_cms.footer.index');
    }

    public function update_footer(FooterRequest $request)
    {
        \DB::transaction(function () use ($request){
            // Footer Logo
            SiteCms::whereSiteKey('footer_logo')
                ->firstOrFail()->update([
                    'value' => updateSVG($request, 'logo', getKey('footer_logo'), 'footer_logo', 'footer', config('designwala_paths.store.site_cms.brand_logo')),
                ]);
            // Payment Method
            SiteCms::whereSiteKey('footer_payment_method')
                ->firstOrFail()->update([
                    'value' => updateSVG($request, 'payment-method', getKey('footer_payment_method'), 'footer_payment_method', 'footer', config('designwala_paths.store.site_cms.payment_method')),
                ]);
            // Copyright Text
            SiteCms::whereSiteKey('footer_copyright')
                ->firstOrFail()->update([
                    'value' => $request->input('footer_copyright'),
                ]);
            // Company Short Description
            SiteCms::whereSiteKey('footer_desc')
                ->firstOrFail()->update([
                    'value' => $request->input('footer_desc'),
                ]);
        });
//        dd($request);
        return redirect()->back();
    }


    /**
     * Social Links
     */
    public function index_social_links()
    {
        return view('admin_panel.pages.settings.site_cms.social_links.index');
    }

    public function create_social_links()
    {
        return \view('admin_panel.pages.settings.site_cms.social_links.create');
    }

    public function store_social_links(SocialLinkRequest $request)
    {
        \DB::transaction(function () use ($request){
            $title = $request->input('social_title');
            SocialLinks::create([
                'social_icon' => uploadSVG($request, $title, 'social_icon', 'footer-social-icon', config('designwala_paths.store.site_cms.social_icon')),
                'social_title' => $title,
                'social_url' => $request->input('social_url'),
            ]);
        });
        return redirect()->back();
    }

    public function edit_social_links($id)
    {
        $social_links = SocialLinks::findOrFail($id);
        return \view('admin_panel.pages.settings.site_cms.social_links.edit', compact('social_links'));
    }

    public function update_social_links(SocialLinkRequest $request, $id)
    {
        $social_links = SocialLinks::findOrFail($id);
        \DB::transaction(function () use ($request, $social_links){
            $title = $request->input('social_title');
            $social_links->update([
                'social_icon' => updateSVG($request, $title, $social_links->social_icon, 'social_icon', 'footer-social-icon', config('designwala_paths.store.site_cms.social_icon')),
                'social_title' => $title,
                'social_url' => $request->input('social_url'),
            ]);
        });
        return redirect()->route('settings.site_cms.social_link.index');
    }

    public function destroy_social_links($id)
    {
        $social_links = SocialLinks::findOrFail($id);
        \DB::transaction(function () use ($social_links){
            deleteFileBefore(config('designwala_paths.store.site_cms.social_icon'), $social_links->social_icon);
            $social_links->delete();
        });
        return redirect()->back();
    }

    /**
     * Policies
     */
    public function index_policy()
    {
        return view('admin_panel.pages.settings.site_cms.policies.index');
    }

    public function update_policy(PolicyRequest $request)
    {
        \DB::transaction(function () use ($request){
            // Footer Logo
            SiteCms::whereSiteKey('policy_privacy')
                ->firstOrFail()->update([
                    'value' => $request->input('privacy_policy'),
                ]);
            // Payment Method
            SiteCms::whereSiteKey('policy_cookie')
                ->firstOrFail()->update([
                    'value' => $request->input('cookie_policy'),
                ]);
            // Copyright Text
            SiteCms::whereSiteKey('policy_payment')
                ->firstOrFail()->update([
                    'value' => $request->input('payment_policy'),
                ]);
            // Company Short Description
            SiteCms::whereSiteKey('policy_terms_and_conditions')
                ->firstOrFail()->update([
                    'value' => $request->input('terms_and_condition'),
                ]);
        });
        return redirect()->back();
    }

}
