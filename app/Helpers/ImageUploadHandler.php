<?php
    use Illuminate\Support\Facades\Storage;
    use Intervention\Image\Facades\Image;


    if (!function_exists('SingleImageUploadHandler')){
        function SingleImageUploadHandler($request, $filename, $uploadedFile = '', $uniqueKey = '', $location = '')
        {
//            dd($request->all());
            if ($request->hasFile($uploadedFile)) {
                //Get file from client side
                $file = $request->file($uploadedFile);
                $img = Image::make($file);
                $img->encode('', 75);
                $extension = $file->getClientOriginalExtension();
                $fileFormat = strtolower($filename . '-' . $uniqueKey) . '.' . $extension;
                $fileNameToStore = str_replace(' ', '-', $fileFormat);

                // Store in Storage Filesystem
                Storage::disk('public')->put($location . $fileNameToStore, $img);
            } else {
                //Default Image
                $getFirstLetter = substr($filename, 0, 1);
                $alphaAvatar = GenerateAlphaAvatar($getFirstLetter);
                $ext = 'png';
                $fileNameToStore = strtolower($filename . '-' . 'default') . '.' . $ext;

                Storage::disk('public')->put($location . $fileNameToStore, $alphaAvatar->encode('', 75));
            }
            return $fileNameToStore;
        }
    }

    if (!function_exists('MultiImageUploadHandler')){
        function MultiImageUploadHandler($request, $filename, $uploadedFile = '', $uniqueKey = '', $location = ''){
            $files = $request->file($uploadedFile);
            $stores = [];
            if ($request->hasFile($uploadedFile)) {
                $i = 1;
                foreach ($files as $file){
                    //Get file from client side
                    $img = Image::make($file);
                    $img->encode('', 75);
                    $fileExt = $file->getClientOriginalExtension();
                    $fileFormat = strtolower($filename . md5(time()) . '-' . $uniqueKey . $i) . '.' . $fileExt;
                    $fileNameToStore = str_replace(' ', '-', $fileFormat);

                    // Store in Storage Filesystem
                    Storage::disk('public')->put($location . $fileNameToStore, $img);
                    $stores[] = $fileNameToStore;
                    $i++;
                }
            }
            return $stores;
        }
    }



    if (!function_exists('SingleImageUpdateHandler')){
        function SingleImageUpdateHandler($request, $filename, $dbFilename, $uploadedFile = '', $uniqueKey = '', $location = '')
        {
            $fileNameToStore = $dbFilename;
            if ($request->hasFile($uploadedFile)) {
                // delete old image first
                if (Storage::disk('public')->exists($location . $dbFilename)) {
                    Storage::disk('public')->delete($location . $dbFilename);
                }

                //Get file from client side
                $file = $request->file($uploadedFile);
                $img = Image::make($file);
                $img->encode('', 75);
                $extension = $file->getClientOriginalExtension();
                $fileFormat = strtolower($filename . '-' . $uniqueKey) . '.' . $extension;
                $fileNameToStore = str_replace(' ', '-', $fileFormat);

                // Store in Storage Filesystem
                Storage::disk('public')->put($location . $fileNameToStore, $img);
            }
            return $fileNameToStore;
        }
    }


    if (!function_exists('MultiImageUpdateHandler')){
        function MultiImageUpdateHandler($request, $filename, $uploadedFile = '', $uniqueKey = '', $location = '')
        {
            $files = $request->file($uploadedFile);
            $stores = [];
            if ($request->hasFile($uploadedFile)) {
                $i = 1;
                foreach ($files as $file){
                    //Get file from client side
                    $img = Image::make($file);
                    $img->encode('', 75);
                    $fileExt = $file->getClientOriginalExtension();
                    $fileFormat = strtolower($filename . md5(time()) . '-' . $uniqueKey . $i) . '.' . $fileExt;
                    $fileNameToStore = str_replace(' ', '-', $fileFormat);

                    // Store in Storage Filesystem
                    Storage::disk('public')->put($location . $fileNameToStore, $img);
                    $stores[] = $fileNameToStore;
                    $i++;
                }
            } else {
                return $stores;
            }
            return $stores;
        }
    }

    if (!function_exists('deleteFileBefore')){
        function deleteFileBefore($location, $dbFilename){
            // delete old image first
            if (Storage::disk('public')->exists($location . $dbFilename)) {
                Storage::disk('public')->delete($location . $dbFilename);
            }
        }
    }


    function uploadSVG($request, $filename, $inputName = '', $uniqueKey = '', $location = '')
    {
        if ($request->hasFile($inputName)) {

            //Get file from client side
            $file = $request->file($inputName);

            $extension = $file->getClientOriginalExtension();
            $fileFormat = strtolower($filename . '-' . $uniqueKey) . '.' . $extension;
            $fileNameToStore = str_replace(' ', '-', $fileFormat);

            $svg = file_get_contents($file);
            $svg = '<?xml version="1.0" encoding="UTF-8" standalone="no"?>' . $svg;

            // Store in Storage Filesystem
            Storage::disk('public')->put($location . $fileNameToStore, $svg);
        } else {
            //Default Image
            $getFirstLetter = substr($filename, 0, 1);
            $alphaAvatar = GenerateAlphaAvatar($getFirstLetter);
            $ext = 'png';
            $fileNameToStore = strtolower($filename . '-' . 'default') . '.' . $ext;

            Storage::disk('public')->put($location . $fileNameToStore, $alphaAvatar->encode('', 75));
        }
        return $fileNameToStore;
    }

    function updateSVG($request, $filename, $dbFilename, $inputName = '', $uniqueKey = '', $location = '')
    {
        $fileNameToStore = $dbFilename;
        if ($request->hasFile($inputName)) {
            // delete old image first
            if (Storage::disk('public')->exists($location . $dbFilename)) {
                Storage::disk('public')->delete($location . $dbFilename);
            }

            //Get file from client side
            $file = $request->file($inputName);

            $extension = $file->getClientOriginalExtension();
            $fileFormat = strtolower($filename . '-' . $uniqueKey) . '.' . $extension;
            $fileNameToStore = str_replace(' ', '-', $fileFormat);

            $svg = file_get_contents($file);
            $svg = '<?xml version="1.0" encoding="UTF-8" standalone="no"?>' . $svg;

            // Store in Storage Filesystem
            Storage::disk('public')->put($location . $fileNameToStore, $svg);
            return $fileNameToStore;
        }
        return $fileNameToStore;
    }

    function updateVideo($request, $filename, $dbFilename, $inputName = '', $uniqueKey = '', $location = '')
    {
        $fileNameToStore = $dbFilename;
        if ($request->hasFile($inputName)) {
            // delete old image first
            if (Storage::disk('public')->exists($location . $dbFilename)) {
                Storage::disk('public')->delete($location . $dbFilename);
            }

            //Get file from client side
            $file = $request->file($inputName);
            $extension = $file->getClientOriginalExtension();
            $fileFormat = strtolower($filename . '-' . $uniqueKey) . '.' . $extension;
            $fileNameToStore = str_replace(' ', '-', $fileFormat);
            $file_contents = file_get_contents($file);

            // Store in Storage Filesystem
            Storage::disk('public')->put($location . $fileNameToStore, $file_contents);
            return $fileNameToStore;
        }
        return $fileNameToStore;
    }

    function multiUpdateSVG($request, $filename, $dbFilename, $inputName = '', $uniqueKey = '', $location = '')
    {
        $fileNameToStore = $dbFilename;
        if ($request->hasFile($inputName)) {
            // delete old image first
            if (Storage::disk('public')->exists($location . $dbFilename)) {
                Storage::disk('public')->delete($location . $dbFilename);
            }

            //Get file from client side
            $files = $request->file($inputName);
            foreach ($files as $key => $file) {
                $extension = $file->getClientOriginalExtension();
                $fileFormat = strtolower($filename . '-' . $uniqueKey) . '.' . $extension;
                $fileNameToStore = str_replace(' ', '-', $fileFormat);
                $svg = file_get_contents($file);
                $svg = '<?xml version="1.0" encoding="UTF-8" standalone="no"?>' . $svg;

                // Store in Storage Filesystem
                Storage::disk('public')->put(config('image-location.store.site_cms.how_designwala_works') . $fileNameToStore, $svg);
            }
            return $fileNameToStore;
        }
        return $fileNameToStore;
    }

//    if (!function_exists('cacheImage')){
//        function cacheImage($src){
//            $imgCache = ImageManagerStatic::cache(function($image) use ($src) {
//                $image->make($src);
//                $image->encode('jpg', 100);
//            }, 10);
//
//            return ImageManagerStatic::make($imgCache)->response();
//        }
//    }
