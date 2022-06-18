@extends('admin_panel.layouts.app')
@section('title', 'Policies')

@push('styles')
    {{-- Internal Styles --}}
    <style>
        .area-height{
            height: 300px!important;
        }
    </style>
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
                        <h2 class="  m-0">Policies</h2></div>
                </div>
            </div>
        </div>

        @if($company_policies)
        <div class="mt-4">
            <form action="{{ route('super_admin.settings.site_cms.policy.update') }}" method="POST" autocomplete="off">
                @csrf @method('PATCH')
                <div class="row m-0 py-3 boxshadow rounded">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">
                                <h5 class="text-uppercase">PRIVACY POLICY </h5></label>
                            <textarea class="form-control editor {{ $errors->has('privacy') ? ' is-invalid' : '' }} area-height" name="privacy" id="exampleFormControlTextarea1" rows="5">{!! $company_policies->privacy !!}</textarea>
                            @if($errors->has('privacy'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('privacy') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">
                                <h5 class="text-uppercase">Cookie POLICIY </h5></label>
                            <textarea class="form-control editor {{ $errors->has('cookie') ? ' is-invalid' : '' }} area-height" name="cookie" id="exampleFormControlTextarea1" rows="5">{!! $company_policies->cookie !!}</textarea>
                            @if($errors->has('cookie'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('cookie') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">
                                <h5 class="text-uppercase">Payment POLICIY </h5></label>
                            <textarea class="form-control editor {{ $errors->has('payment') ? ' is-invalid' : '' }} area-height" name="payment" id="exampleFormControlTextarea1" rows="5">{!! $company_policies->payment !!}</textarea>
                            @if($errors->has('payment'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('payment') }}</strong>
                                </span>
                            @endif

                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">
                                <h5 class="text-uppercase">terms and conditions </h5></label>
                            <textarea class="form-control editor {{ $errors->has('terms_and_conditions') ? ' is-invalid' : '' }} area-height" name="terms_and_conditions" id="exampleFormControlTextarea1" rows="5">{!! $company_policies->terms_and_conditions !!}</textarea>
                            @if($errors->has('terms_and_conditions'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('terms_and_conditions') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12 py-4 text-right">
                        <button type="submit" class="btn bgOne text-white">Update</button>
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
        tinymce.init({
            selector: '.editor',
            plugins: 'advlist autolink lists link image imagetools charmap preview anchor pagebreak',
            toolbar_mode: 'floating',
            branding: false,
            /* enable title field in the Image dialog*/
            image_title: true,
            /* enable automatic uploads of images represented by blob or data URIs*/
            automatic_uploads: true,
            /*
              URL of our upload handler (for more details check: https://www.tiny.cloud/docs/configure/file-image-upload/#images_upload_url)
              images_upload_url: 'postAcceptor.php',
              here we add custom filepicker only to Image dialog
            */
            file_picker_types: 'image',
            /* and here's our custom image picker*/
            file_picker_callback: function (cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');

                /*
                  Note: In modern browsers input[type="file"] is functional without
                  even adding it to the DOM, but that might not be the case in some older
                  or quirky browsers like IE, so you might want to add it to the DOM
                  just in case, and visually hide it. And do not forget do remove it
                  once you do not need it anymore.
                */

                input.onchange = function () {
                    var file = this.files[0];

                    var reader = new FileReader();
                    reader.onload = function () {
                        /*
                          Note: Now we need to register the blob in TinyMCEs image blob
                          registry. In the next release this part hopefully won't be
                          necessary, as we are looking to handle it internally.
                        */
                        var id = 'blobid' + (new Date()).getTime();
                        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);

                        /* call the callback and populate the Title field with the file name */
                        cb(blobInfo.blobUri(), { title: file.name });
                    };
                    reader.readAsDataURL(file);
                };

                input.click();
            },
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
        });
    </script>
@endpush
