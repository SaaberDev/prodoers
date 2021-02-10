@extends('admin_panel.layouts.app')
@section('title', 'Brand Identity')

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
                        <h2 class="m-0">Services Process</h2></div>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <form action="{{ route('settings.site_cms.service_process.update') }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PATCH')
                <div class="row m-0 justify-content-center py-3 bg-white rounded">
                    <div class="col-md-10">
                        <div class="row">
                            {{-- Service Process 1 --}}
                            @foreach(range(1, 6) as $service_process)
                            <div class="col-md-4 mt-4">
                                {{-- Service Process Title 1 --}}
                                <div class="form-group">
                                    <label for="">
                                        <h5>Service Process {{ $loop->iteration }}</h5></label>
                                    <div class="input-group">
                                        <input class="form-control {{ $errors->has('service_process_title_.' . $loop->index) ? ' is-invalid' : '' }}" value="{{ getKey('service_process_title_' . $loop->iteration) }}" name="service_process_title_[]" type="text" placeholder="">
                                        @if($errors->has('service_process_title_.' . $loop->index))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('service_process_title_.' . $loop->index) }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                {{-- Service Process Image 1 --}}
                                <div class="form-group mt-4 mb-0">
                                    <div class="form-group mt-4">
                                        <div class="input-group">
                                            <input type='text'
                                                   name="service_process_image_[]"
                                                   class="form-control {{ $errors->has('service_process_image_.' . $loop->index) ? ' is-invalid' : '' }}"
                                                   onchange="preview(this);"
                                                   placeholder="No File Chosen"
                                                   readonly
                                            />

                                            <div class="input-group-btn">
                                            <span class="fileUpload btn btnOne">
                                                <span class="upl" id="upload">Choose</span>
                                                <input type="file"
                                                       name="service_process_image_[]"
                                                       class="upload up"
                                                />
                                            </span>
                                            </div>
                                            @if($errors->has('service_process_image_.' . $loop->index))
                                                <span class="invalid-feedback">
                                                <strong>{{ $errors->first('service_process_image_.' . $loop->index) }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="mt-4 border">
                                        <ul class="row list-unstyled previewimg">
                                            <li class="col-md-7 text-center position-relative m-auto">
                                                <div class="previewimg">
                                                    <img id="previewImg" class="img-fluid" src="{{ asset(getKey('service_process_image_' . $loop->iteration) ? config('designwala_paths.show.site_cms.service_process') . getKey('service_process_image_' . $loop->iteration) : config('designwala_paths.default.service_process_' . $loop->iteration)) }}" alt="service process image {{ $loop->iteration }}">
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

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
