<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Settings\SiteCms\BannerSectionRequest;
use App\Http\Requests\Admin\Settings\SiteCms\BlogSectionRequest;
use App\Http\Requests\Admin\Settings\SiteCms\BrandIdentityRequest;
use App\Http\Requests\Admin\Settings\SiteCms\FooterRequest;
use App\Http\Requests\Admin\Settings\SiteCms\HowDesignwalaWorksRequest;
use App\Http\Requests\Admin\Settings\SiteCms\PolicyRequest;
use App\Http\Requests\Admin\Settings\SiteCms\ServiceProcessRequest;
use App\Http\Requests\Admin\Settings\SiteCms\SocialLinkRequest;
use App\Http\Requests\Admin\Settings\SiteCms\StatisticRequest;
use App\Models\BannerSection;
use App\Models\BlogSection;
use App\Models\BrandIdentity;
use App\Models\HowDesignwalaWork;
use App\Models\ServiceProcess;
use App\Models\SiteCms;
use App\Models\SocialLinks;
use App\Models\StatisticsSection;
use Illuminate\Http\Request;

class SiteCmsController extends Controller
{
    /**
     * Brand identity Section
     */
    public function index_brand_identity()
    {
        $brand_identities = BrandIdentity::findOrFail(1, ['company_name', 'slogan', 'logo', 'favicon']);
        return view('admin_panel.pages.settings.site_cms.brand_identity.index', compact('brand_identities'));
    }

    public function update_brand_identity(BrandIdentityRequest $request)
    {
//        dd($request->all());
        $brand_identities = BrandIdentity::findOrFail(1);
        \DB::transaction(function () use ($request, $brand_identities){
            $brand_identities->update([
                'company_name' => $request->input('company_name'),
                'slogan' => $request->input('slogan'),
                'logo' => updateSVG($request, 'brand-logo', $brand_identities->logo, 'logo', 'brand-identity', config('designwala_paths.store.site_cms.brand_logo')),
                'favicon' => updateSVG($request, 'browser-favicon', $brand_identities->favicon, 'favicon', 'brand-identity', config('designwala_paths.store.site_cms.brand_icon')),
            ]);
        });
        \Cache::clear();
        return redirect()->back();
    }

    /***
     * Banners
     */
    public function index_banner()
    {
        $banners = BannerSection::get(['key', 'headline', 'tagline', 'banner']);
        return view('admin_panel.pages.settings.site_cms.banners.index', compact('banners'));
    }

    public function update_banner(BannerSectionRequest $request)
    {
        \DB::transaction(function() use ($request){
            // Banner Headline Update
            $headlineInput = $request->input('headline');
            foreach($headlineInput as $key => $headline) {
                BannerSection::findOrFail($key+1)->update([
                    'headline' => $headline,
                ]);
            }

            // Banner Tagline Update
            $taglineInput = $request->input('tagline');
            foreach ($taglineInput as $key => $tagline) {
                BannerSection::findOrFail($key+1)->update([
                    'tagline' => $tagline,
                ]);
            }

            // Banner Image Update
            $files = $request->file('banner');
            if ($request->hasFile('banner')) {
                foreach ($files as $key => $file){
                    $query = BannerSection::findOrFail($key+1);
                    $dbname = str_replace('_', '-', $query->key);
                    $extension = $file->getClientOriginalExtension();
                    $fileFormat = strtolower($dbname) . '.' . $extension;
                    $fileNameToStore = str_replace(' ', '-', $fileFormat);
                    $svg = file_get_contents($file);
                    $svg = '<?xml version="1.0" encoding="UTF-8" standalone="no"?>' . $svg;

                    // Store in Storage Filesystem
                    \Storage::put(config('designwala_paths.store.site_cms.banner') . $fileNameToStore, $svg);

                    BannerSection::findOrFail($key+1)->update([
                        'banner' => $fileNameToStore,
                    ]);
                }
            }
        });
        \Cache::clear();
        return redirect()->back();
    }

    /**
     * Service Process Section
     */
    public function index_service_process()
    {
        $service_processes = ServiceProcess::whereSiteKey('service_process_')->get(['title', 'image']);
        return view('admin_panel.pages.settings.site_cms.service_process.index', compact('service_processes'));
    }

    public function update_service_process(ServiceProcessRequest $request)
    {
        \DB::transaction(function () use ($request){
            // Service Process Title
            $designwala_title = $request->input('service_process_title_');
            foreach($designwala_title as $key => $title) {
                ServiceProcess::whereSiteKey('service_process_' . ($key + 1))
                    ->firstOrFail()->update([
                        'title' => $title,
                    ]);
            }

            // Service Process Image Update
            $files = $request->file('service_process_image_');
            if ($request->hasFile('service_process_image_')) {
                foreach ($files as $key => $file){
                    $extension = $file->getClientOriginalExtension();
                    $fileFormat = strtolower('service-process-' . ($key + 1)) . '.' . $extension;
                    $fileNameToStore = str_replace(' ', '-', $fileFormat);
                    $svg = file_get_contents($file);
                    $svg = '<?xml version="1.0" encoding="UTF-8" standalone="no"?>' . $svg;

                    // Store in Storage Filesystem
                    \Storage::put(config('designwala_paths.store.site_cms.service_process') . $fileNameToStore, $svg);

                    ServiceProcess::whereSiteKey('service_process_' . ($key + 1))
                        ->firstOrFail()->update([
                            'image' => $fileNameToStore,
                        ]);
                }
            }
        });
        \Cache::clear();
        return redirect()->back();
    }

    /**
     * How Designwala Works ?
     */
    public function index_how_designwala_works()
    {
        $how_designwala_works = HowDesignwalaWork::whereSiteKey('step_')->get(['title', 'desc', 'image']);
        $how_designwala_works_video = HowDesignwalaWork::whereSiteKey('dw_video')->firstOrFail(['video', 'video_thumbnail']);
        return view('admin_panel.pages.settings.site_cms.how_designwala_works.index', compact('how_designwala_works', 'how_designwala_works_video'));
    }

    public function update_how_designwala_works(HowDesignwalaWorksRequest $request)
    {
        \DB::transaction(function () use ($request){
            // How Designwala Works Title
            $designwala_title = $request->input('designwala_title_');
            foreach($designwala_title as $key => $title) {
                HowDesignwalaWork::whereSiteKey('step_' . ($key + 1))
                    ->firstOrFail()->update([
                        'title' => $title,
                    ]);
            }

            // How Designwala Works Description
            $designwala_desc = $request->input('designwala_desc_');
            foreach($designwala_desc as $key => $desc) {
                HowDesignwalaWork::whereSiteKey('step_' . ($key + 1))
                    ->firstOrFail()->update([
                        'desc' => $desc,
                    ]);
            }

            // How Designwala Works Image Update
            if ($request->hasFile('designwala_image_')) {
                $files = $request->file('designwala_image_');
                foreach ($files as $key => $file){
                    $extension = $file->getClientOriginalExtension();
                    $fileFormat = strtolower('step-' . ($key + 1)) . '.' . $extension;
                    $fileNameToStore = str_replace(' ', '-', $fileFormat);
                    $svg = file_get_contents($file);
                    $svg = '<?xml version="1.0" encoding="UTF-8" standalone="no"?>' . $svg;

                    // Store in Storage Filesystem
                    \Storage::put(config('designwala_paths.store.site_cms.how_designwala_works') . $fileNameToStore, $svg);

                    HowDesignwalaWork::whereSiteKey('step_' . ($key + 1))
                        ->firstOrFail()->update([
                            'image' => $fileNameToStore,
                        ]);
                }
            }

            // Designwala Video
            $video = HowDesignwalaWork::whereSiteKey('dw_video')->firstOrFail();
            $video->update([
                'video' => updateVideo($request, 'how-designwala-work', $video->video,'designwala_video','video', config('designwala_paths.store.site_cms.how_designwala_works_video')),
            ]);

            // Video Thumbnail
            $video_thumbnail = HowDesignwalaWork::whereSiteKey('dw_video')->firstOrFail();
            $video_thumbnail->update([
                'video_thumbnail' => updateSVG($request, 'designwala-video', $video_thumbnail->video_thumbnail,'designwala_video_thumbnail','thumbnail', config('designwala_paths.store.site_cms.how_designwala_works_video')),
            ]);
        });
        \Cache::clear();
        return redirect()->back();
    }

    /**
     * Statistics Section
     */
    public function index_statistics()
    {
        $statistics = StatisticsSection::whereSiteKey('stat_')->get();
        return view('admin_panel.pages.settings.site_cms.statistics_section.index', compact('statistics'));
    }

    public function update_statistics(StatisticRequest $request)
    {
        \DB::transaction(function() use ($request){
            // Statistics Headline Update
            $titleInput = $request->input('title');
            foreach($titleInput as $key => $title) {
                StatisticsSection::findOrFail($key+1)->update([
                    'title' => $title,
                ]);
            }

            // Statistics Tagline Update
            $amountInput = $request->input('amount');
            foreach ($amountInput as $key => $amount) {
                StatisticsSection::findOrFail($key+1)->update([
                    'amount' => $amount,
                ]);
            }

            // Statistics Image Update
            $files = $request->file('icon');
            if ($request->hasFile('icon')) {
                foreach ($files as $key => $file){
                    $query = StatisticsSection::findOrFail($key+1);
                    $dbname = str_replace('_', '-', $query->key);
                    $extension = $file->getClientOriginalExtension();
                    $fileFormat = strtolower($dbname) . '.' . $extension;
                    $fileNameToStore = str_replace(' ', '-', $fileFormat);
                    $svg = file_get_contents($file);
                    $svg = '<?xml version="1.0" encoding="UTF-8" standalone="no"?>' . $svg;

                    // Store in Storage Filesystem
                    \Storage::put(config('designwala_paths.store.site_cms.statistic_icon') . $fileNameToStore, $svg);

                    StatisticsSection::findOrFail($key+1)->update([
                        'icon' => $fileNameToStore,
                    ]);
                }
            }
        });
        \Cache::clear();
        return redirect()->back();
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

    /***
     * Site Contents
     */
    public function index_other_content()
    {
        return view('admin_panel.pages.settings.site_cms.other_contents.index');
    }

    public function update_other_content(Request $request)
    {
        return redirect()->back();
    }

}
