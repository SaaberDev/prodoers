<footer class="textsm-center">
    <div class="container">
        <div class="row ">
            <div class="footerIcon text-center py-4">
                @forelse($social_links as $social_link)
                    <a href="{{ $social_link->social_url }}" target="_blank"><img src="{{ asset(config('designwala_paths.admin.images.show.footer.social_links') . $social_link->social_icon) }}" alt="{{ $social_link->social_title }}"></a>
                @empty
                    No Icons
                @endforelse
            </div>
            <p class="text-center">{{ config('designwala.policy.site_content.copyright') }}</p>
        </div>
    </div>
</footer>
