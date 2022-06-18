<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Settings\SiteCms\BannerSectionRequest;
use App\Http\Requests\Admin\Settings\SiteCms\BrandIdentityRequest;
use App\Http\Requests\Admin\Settings\SiteCms\FooterContentRequest;
use App\Http\Requests\Admin\Settings\SiteCms\HowDesignwalaWorksRequest;
use App\Http\Requests\Admin\Settings\SiteCms\OtherContentRequest;
use App\Http\Requests\Admin\Settings\SiteCms\ServiceProcessRequest;
use App\Http\Requests\Admin\Settings\SiteCms\SocialLinkRequest;
use App\Http\Requests\Admin\Settings\SiteCms\StatisticRequest;
use App\Models\BannerSection;
use App\Models\BrandIdentity;
use App\Models\CompanyPolicy;
use App\Models\FooterContent;
use App\Models\HowDesignwalaWork;
use App\Models\OtherContent;
use App\Models\ServiceProcess;
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
        $brand_identities = BrandIdentity::first(['company_name', 'slogan', 'logo', 'favicon']);

        $brand_logo = \Storage::disk('public')->url(config('image-location.images.site_cms.brand_logo'));
        $brand_icon = \Storage::disk('public')->url(config('image-location.images.site_cms.brand_icon'));

        return view('admin_panel.pages.settings.site_cms.brand_identity.index', compact('brand_identities', 'brand_logo', 'brand_icon'));
    }

    public function update_brand_identity(BrandIdentityRequest $request)
    {
        $brand_identities = BrandIdentity::firstOrFail();
        \DB::transaction(function () use ($request, $brand_identities){
            $brand_identities->update([
                'company_name' => $request->input('company_name'),
                'slogan' => $request->input('slogan'),
                'logo' => updateSVG($request, 'brand-logo', $brand_identities->logo, 'logo', 'header', config('image-location.images.site_cms.brand_logo')),
                'favicon' => updateSVG($request, 'browser-favicon', $brand_identities->favicon, 'favicon', 'brand-identity', config('image-location.images.site_cms.brand_icon')),
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
                    \Storage::disk('public')->put(config('image-location.images.site_cms.banner') . $fileNameToStore, $svg);

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
        $service_processes = ServiceProcess::get(['title', 'image']);
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
                    \Storage::disk('public')->put(config('image-location.images.site_cms.service_process') . $fileNameToStore, $svg);

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
        $how_designwala_works_video = HowDesignwalaWork::whereSiteKey('dw_video')->first(['video', 'video_thumbnail']);

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
                    \Storage::disk('public')->put(config('image-location.images.site_cms.how_designwala_works') . $fileNameToStore, $svg);

                    HowDesignwalaWork::whereSiteKey('step_' . ($key + 1))
                        ->firstOrFail()->update([
                            'image' => $fileNameToStore,
                        ]);
                }
            }

            // Designwala Video
            $video = HowDesignwalaWork::whereSiteKey('dw_video')->firstOrFail();
            $video->update([
                'video' => updateVideo($request, 'how-designwala-work', $video->video,'designwala_video','video', config('image-location.images.site_cms.how_designwala_works_video')),
            ]);

            // Video Thumbnail
            $video_thumbnail = HowDesignwalaWork::whereSiteKey('dw_video')->firstOrFail();
            $video_thumbnail->update([
                'video_thumbnail' => updateSVG($request, 'designwala-video', $video_thumbnail->video_thumbnail,'designwala_video_thumbnail','thumbnail', config('image-location.images.site_cms.how_designwala_works')),
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
                    \Storage::disk('public')->put(config('image-location.images.site_cms.statistic_icon') . $fileNameToStore, $svg);

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
        $footer_content = FooterContent::first(['desc', 'logo', 'payment_method']);
        return view('admin_panel.pages.settings.site_cms.footer.index', compact('footer_content'));
    }

    public function update_footer(FooterContentRequest $request)
    {
        \DB::transaction(function () use ($request){
            $footer_content = FooterContent::firstOrFail();
            $footer_content->update([
                'logo' => updateSVG($request, 'logo', $footer_content->logo, 'logo', 'footer', config('image-location.images.site_cms.brand_logo')),
                'payment_method' => updateSVG($request, 'payment-method', $footer_content->payment_method, 'payment_method', 'footer', config('image-location.images.site_cms.payment_method')),
                'desc' => $request->input('desc'),
            ]);
        });
        \Cache::clear();
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
                'social_icon' => uploadSVG($request, $title, 'social_icon', 'footer-social-icon', config('image-location.images.site_cms.social_icon')),
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
                'social_icon' => updateSVG($request, $title, $social_links->social_icon, 'social_icon', 'footer-social-icon', config('image-location.images.site_cms.social_icon')),
                'social_title' => $title,
                'social_url' => $request->input('social_url'),
            ]);
        });
        return redirect()->route('super_admin.settings.site_cms.social_link.index');
    }

    public function destroy_social_links($id)
    {
        $social_links = SocialLinks::findOrFail($id);
        \DB::transaction(function () use ($social_links){
            deleteFileBefore(config('image-location.images.site_cms.social_icon'), $social_links->social_icon);
            $social_links->delete();
        });
        return redirect()->back();
    }

    /**
     * Policies
     */
    public function index_policy()
    {
        $company_policies = CompanyPolicy::first();
        return view('admin_panel.pages.settings.site_cms.policies.index', compact('company_policies'));
    }

    public function update_policy(Request $request)
    {
        \DB::transaction(function () use ($request){
            CompanyPolicy::firstOrFail()->update([
                'privacy' => $request->input('privacy'),
                'cookie' => $request->input('cookie'),
                'payment' => $request->input('payment'),
                'terms_and_conditions' => $request->input('terms_and_conditions'),
            ]);
        });
        return redirect()->back();
    }

    /***
     * Site Contents
     */
    public function index_other_content()
    {
        $other_contents = OtherContent::get();
        return view('admin_panel.pages.settings.site_cms.other_contents.index', compact('other_contents'));
    }

    public function update_other_content(OtherContentRequest $request)
    {
        \DB::transaction(function () use ($request){
            foreach ($request->input('headline') as $key => $item) {
                OtherContent::whereSiteKey('other_content_' . ($key + 1))
                    ->firstorFail()
                    ->update([
                        'headline' => $item
                    ]);
            }

            foreach ($request->input('tagline') as $key => $item) {
                OtherContent::whereSiteKey('other_content_' . ($key + 1))
                    ->firstorFail()
                    ->update([
                        'tagline' => $item
                    ]);
            }
        });
        \Cache::clear();
        return redirect()->back();
    }

}
