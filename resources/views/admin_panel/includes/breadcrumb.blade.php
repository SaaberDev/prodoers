<div class="">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb m-0 p-0">
            @if(Breadcrumbs::has())
                @foreach (Breadcrumbs::current() as $crumbs)
                    @if ($crumbs->url() && !$loop->last)
                        <li class="breadcrumb-item">
                            <a href="{{ $crumbs->url() }}">
                                {{ $crumbs->title() }}
                            </a>
                        </li>
                    @else
                        <li class="breadcrumb-item active" aria-current="page">
                            <a>
                                {{ $crumbs->title() }}
                            </a>
                        </li>
                    @endif
                @endforeach
            @endif
        </ol>
    </nav>
</div>

{{--<div class="">--}}
{{--    <nav aria-label="breadcrumb">--}}
{{--        <ol class="breadcrumb m-0 p-0">--}}
{{--            <li class="breadcrumb-item"><a href="#">Home</a></li>--}}
{{--            <li class="breadcrumb-item"><a href="#">Services</a></li>--}}
{{--            <li class="breadcrumb-item active" aria-current="page">Add New Service</li>--}}
{{--        </ol>--}}
{{--    </nav>--}}
{{--</div>--}}
