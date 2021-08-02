@extends('admin_panel.layouts.app')
@section('title', 'Statistics')

@push('styles')
    {{-- Internal Styles --}}
@endpush

@section('content')
    <div class="col-xl-10 col-lg-9 col-md-12 dashboardRightside scrollbar scroll-style">
        <div class="">
            <div class="row justify-content-center pb-3 m-0">
                <div class="col-md-12 col-sm-12  v-center">
                    <!-- breadcrumb  -->
                    @include('admin_panel.includes.breadcrumb')
                </div>
            </div>
        </div>
        <div class="boxshadow rounded">
            <div class="row justify-content-center m-0 py-1 boxshadow rounded">
                <div class="col-xl-12 col-lg-12 col-md-12 v-center">
                    <div class="">
                        <h2 class="m-0">Statistics</h2></div>
                </div>
            </div>
        </div>

        @if(!$statistics->count() == 0)
        <div class="mt-4">
            <form action="{{ route('super_admin.settings.site_cms.statistics.update') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
                @csrf @method('PATCH')
                <div class="row m-0 justify-content-center py-3 bg-white rounded">
                    <div class="col-md-12">
                        {{-- Home Page icon --}}
                        @foreach($statistics as $statistic)
                            <div class="col-md-12 {{ $loop->first ? '' : 'mt-4' }}">
                                <label for="">
                                    <h6>{{ str_replace(['stat', $loop->iteration, '_'], ' ', $statistic->key) }}</h6>
                                </label>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mt-2 mb-0">
                                            <label for="">
                                                <h6>Title</h6>
                                            </label>
                                            <div class="input-group">
                                                <input class="form-control {{ $errors->has('title.' . $loop->index) ? ' is-invalid' : '' }}" value="{{ $statistic->title }}" name="title[]" type="text" placeholder="">
                                                @if($errors->has('title.' . $loop->index))
                                                    <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('title.' . $loop->index) }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mt-2 mb-0">
                                            <label for="">
                                                <h5>Amount</h5></label>
                                            <div class="input-group">
                                                <input class="form-control {{ $errors->has('amount.' . $loop->index) ? ' is-invalid' : '' }}" value="{{ $statistic->amount }}" name="amount[]" type="text" placeholder="">
                                                @if($errors->has('amount.' . $loop->index))
                                                    <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('amount.' . $loop->index) }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Home Page icon --}}
                                <div class="form-group mt-4">
                                    <label for="">
                                        <h5>Icon</h5>
                                    </label>
                                    <div class="input-group">
                                        <input type='text'
                                               name="icon[]"
                                               class="form-control {{ $errors->has('icon.' . $loop->index) ? ' is-invalid' : '' }}"
                                               onchange="preview(this);"
                                               placeholder="No File Chosen"
                                               readonly
                                        />

                                        <div class="input-group-btn">
                                            <span class="fileUpload btn btnOne">
                                                <span class="upl" id="upload">Choose</span>
                                                <input type="file"
                                                       name="icon[]"
                                                       class="upload up"
                                                />
                                            </span>
                                        </div>
                                        @if($errors->has('icon.' . $loop->index))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('icon.' . $loop->index) }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="mt-4 border">
                                    <ul class="row list-unstyled previewimg">
                                        <li class="col-md-7 text-center position-relative m-auto">
                                            <div class="previewimg">
                                                <img id="previewImg" class="img-fluid" src="{{ asset($statistic->icon ? config('designwala_paths.show.site_cms.statistic_icon') . $statistic->icon : config('designwala_paths.default.no_preview')) }}" alt="{{ $statistic->title }}">
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        @endforeach

                        <div class="py-4 text-right">
                            <button type="submit" class="btn bgOne text-white">Update</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        @else
            <div class="mt-4">
                <div style="font-size: 30px;text-align: center;height: 60vh;display: flex;align-items: center;">
                    <p>This site has static data. Please run seeders to make changes or contact your
                        <strong><a href="https://facebook.com/saaberdev" target="_blank">Developer</a></strong>.
                    </p>
                </div>
            </div>
        @endif
    </div>
@endsection

@push('scripts')
    {{-- Internal Scripts --}}
    <script>
        // Image input
        window.preview = function (input) {
            if (input.files && input.files[0]) {
                $(input.files).each(function () {
                    $("#previewImg").html("");
                    var reader = new FileReader();
                    reader.readAsDataURL(this);
                    reader.onload = function (e) {
                        $("#previewImg").append("<img class='previewpic' src='" + e.target.result + "'>");
                    }
                });
            }
        }
    </script>
@endpush
