<?php
    use Illuminate\Support\Facades\Storage;
    use Intervention\Image\Facades\Image;


    if (!function_exists('SingleImageUploadHandler')){
        function SingleImageUploadHandler($request, $filename, $uploadedFile = '', $uniqueKey = '', $path = '')
        {
            if ($request->hasFile($uploadedFile)) {
                //Get file from client side
                $file = $request->file($uploadedFile);
                $img = Image::make($file);
                $img->encode('', 75);
                $extension = $file->getClientOriginalExtension();
                $fileFormat = strtoupper($filename . '-' . $uniqueKey) . '.' . $extension;
                $fileNameToStore = str_replace(' ', '-', $fileFormat);
                $location = 'public/' . $path;

                // Store in Storage Filesystem
                Storage::put($location . $fileNameToStore, $img);
            } else {
                //Default Image
                $getFirstLetter = substr($filename, 0, 1);
                $alphaAvatar = GenerateAlphaAvatar($getFirstLetter);
                $ext = 'png';
                $fileNameToStore = strtoupper($filename . '-' . 'default') . '.' . $ext;
                $location = 'public/' . $path;

                Storage::put($location . $fileNameToStore, $alphaAvatar->encode('', 75));
            }
            return $fileNameToStore;
        }
    }

    if (!function_exists('MultiImageUploadHandler')){
        function MultiImageUploadHandler($request, $filename, $uploadedFile = '', $uniqueKey = '', $path = ''){
            $files = $request->file($uploadedFile);
            $stores = [];
            if ($request->hasFile($uploadedFile)) {
                $i = 1;
                foreach ($files as $file){
                    //Get file from client side
                    $img = Image::make($file);
                    $img->encode('', 75);
                    $fileExt = $file->getClientOriginalExtension();
                    $fileFormat = strtoupper($filename . '-' . $uniqueKey . $i) . '.' . $fileExt;
                    $fileNameToStore = str_replace(' ', '-', $fileFormat);
                    $location = 'public/' . $path;

                    // Store in Storage Filesystem
                    Storage::put($location . $fileNameToStore, $img);
                    $stores[] = $fileNameToStore;
                    $i++;
                }
            }
            return $stores;
        }
    }



    if (!function_exists('SingleImageUpdateHandler')){
        function SingleImageUpdateHandler($request, $dbFilename, $filename, $uploadedFile = '', $uniqueKey = '', $path = '')
        {
            if ($request->hasFile($uploadedFile)) {

                $location = 'public/' . $path;
                // delete old image first
                if (Storage::exists($location . $dbFilename)) {
                    Storage::delete($location . $dbFilename);
                }

                //Get file from client side
                $file = $request->file($uploadedFile);
                $img = Image::make($file);
                $img->encode('', 75);
                $extension = $file->getClientOriginalExtension();
                $fileFormat = strtoupper($filename . '-' . $uniqueKey) . '.' . $extension;
                $fileNameToStore = str_replace(' ', '-', $fileFormat);

                // Store in Storage Filesystem
                Storage::put($location . $fileNameToStore, $img);
            }
            else {
                $location = 'public/' . $path;
                $url = config('app.url') . '/' . $dbFilename;
                $extension = pathinfo($url, PATHINFO_EXTENSION);
                $fileFormat = strtoupper($filename . '-' . $uniqueKey) . '.' . $extension;
                $fileNameToStore = str_replace(' ', '-', $fileFormat);
                Storage::move($location . $dbFilename, $location . $fileNameToStore);
            }
            return $fileNameToStore;
        }
    }
