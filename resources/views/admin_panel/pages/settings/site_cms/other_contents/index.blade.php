@extends('admin_panel.layouts.app')
@section('title', 'Other Contents')

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
                        <h2 class="m-0">Other Contents</h2></div>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <form action="{{ route('settings.site_cms.other_content.update') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
                @csrf @method('PATCH')
                <div class="row m-0 justify-content-center py-3 bg-white rounded">
                    <div class="col-md-12">
                        {{-- Popular Categories Section --}}
                        @foreach($other_contents as $other_content)
                        <div class="col-md-12 {{ $loop->first ? '' : 'mt-4' }}">
                            <label>
                                <h6>{{ str_replace(['other_content', $loop->iteration, '_'], ' ', $other_content->key) }}</h6>
                            </label>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mt-2 mb-0">
                                        <label for="">
                                            <h6>Headline</h6></label>
                                        <div class="input-group">
                                            <input class="form-control {{ $errors->has('headline.' . $loop->index) ? ' is-invalid' : '' }}" value="{{ $other_content->headline }}" name="headline[]" type="text" placeholder="">
                                            @if($errors->has('headline.' . $loop->index))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('headline.' . $loop->index) }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mt-2 mb-0">
                                        <label for="">
                                            <h5>Tagline</h5></label>
                                        <div class="input-group">
                                            <input class="form-control {{ $errors->has('tagline.' . $loop->index) ? ' is-invalid' : '' }}" value="{{ $other_content->tagline }}" name="tagline[]" type="text" placeholder="">
                                            @if($errors->has('tagline.' . $loop->index))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('tagline.' . $loop->index) }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
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
