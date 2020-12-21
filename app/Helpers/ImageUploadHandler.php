<?php

    use Intervention\Image\Facades\Image;

    /**
     * Single Image Upload Handler
     * ->This is the request that
     * @param $request
     * -> User uploaded file.
     * @param string $uploadedFile
     * -> This field will be used to generate filename by using any name.
     * @param string $title
     * -> User can define their own unique key/name to reduce file naming conflicts.
     * @param string $uniqueKey
     * -> User will be able to define the type of file extension they want to use for default image if empty.
     * @param string $ext
     * -> This is the folder location where images will be saved locally, by default all images will be saved inside "/app/public/" or "/public/
     * @param string $path
     * -> return type
     * @return string|string[]
     */
    function SingleImageUploadHandler($request,
            $uploadedFile = '', $title = '',
            $uniqueKey = '', $ext = '',
            $path = ''
    )
    {
        if ($request->hasFile($uploadedFile)){
            //Get file from client side
            $file = $request->file($uploadedFile);
            $img = Image::make($file);

            //Get file extension
            $fileExt = $file->getClientOriginalExtension();
            $location = 'public/' . $path;
            //Get title as filename
            $filename = ucfirst($request->input($title));
            $fileFormat = strtoupper($filename . '-' . md5(time()) . '-' . $uniqueKey). '.' . $fileExt;
            $fileNameToStore = str_replace(' ', '-', $fileFormat);
            // Store in Storage Filesystem
            Storage::put($location . $fileNameToStore, (string) $img->encode('' ,75));

        } else {
            //Default Image
            $title = ucfirst($request->input($title));
            $getFirstLetter = substr($title, 0, 1);
            $fileNameToStore = strtoupper($title . '-' . md5(time()) . '-' . $uniqueKey) . $ext;
            $img = GenerateAlphaAvatar($getFirstLetter);
            $location = 'public/' . $path;

            Storage::put($location . $fileNameToStore, (string) $img->encode('' ,75));
        }
        return $fileNameToStore;
    }

//    function cacheImage($img, $path = ''){
//        $imgCache = Image::cache(function($image) use ($img, $path) {
//            $image->make(asset($path . $img));
//            $image->encode('webp', 75);
//        }, 10, true);
//
//        return Image::make($imgCache)->response();
//    }


    /*function service_category_thumbnail_image($request): string
    {
        if ($request->hasFile('companyLogo')){
            //Get file from client side
            $file = $request->file('companyLogo');
            //Get original file from input request
            $filename = ucfirst($request->input('companyName'));
            //Get file extension
            $fileExt = $file->getClientOriginalExtension();
            $fileNameToStore = strtoupper($filename . '-' . md5(time())) . '.' . $fileExt;
            $location = 'public/admin_panel/services_categories/';
            //Save file
            $file->storeAs($location, $fileNameToStore);
        } else {
            //Default Image
            $companyName = ucfirst($request->input('companyName'));
            $getFirstLetter = substr($companyName, 0, 1);
            $ext = 'png';
            $fileNameToStore = strtoupper($companyName . '-' . md5(time())) . '.' . $ext;
            $img = GenerateAlphaAvatar($getFirstLetter);
            $location = storage_path() . '/app/public/admin_panel/services_categories/';

            $img->save($location . $fileNameToStore, '90');
        }
        return $fileNameToStore;
    }*/

    /*function imageUpdate_handler($assets, $request){
        $fileNameToStore ='';
        if ($request->hasFile('companyLogo')){
            if (\File::exists(storage_path() . '/app/public/admin_panel/img/' . $assets->company_logo)){
                \File::delete(storage_path() . '/app/public/admin_panel/img/' . $assets->company_logo);
            }
            //Get original file from input request
            $file = $request->file('companyLogo');
            $filename = ucfirst($request->input('companyName'));
            //Get file extension
            $fileExt = $file->getClientOriginalExtension();
            $fileNameToStore = strtoupper($filename . '-' . md5(time())) . '.' . $fileExt;
            $location = 'public/admin_panel/img/';
            //Save file
            $file->storeAs($location, $fileNameToStore);
        } else {
            //Default Image
            $newCompanyName = ucfirst($request->input('companyName'));
            $oldCompanyName = $assets->company_name;

            if ($newCompanyName !== $oldCompanyName){
                $logo = $assets->company_logo;
                $logoName = explode("-", $logo);
                //$fileNameToStore = $assets->company_logo;
                if ($oldCompanyName !== $logoName[0]){
                    //dd('not e');
                    if (\File::exists(storage_path() . '/app/public/admin_panel/img/' . $assets->company_logo)) {
                        \File::delete(storage_path() . '/app/public/admin_panel/img/' . $assets->company_logo);
                    }
                    $getCompanyFirstLetter = substr($newCompanyName, 0, 1);
                    $ext = 'png';
                    $fileNameToStore = strtoupper($newCompanyName . '-' . md5(time())) . '.' . $ext;
                    $img = GenerateAlphaAvatar($getCompanyFirstLetter);

                    $img->save(storage_path() . '/app/public/admin_panel/img/' . $fileNameToStore, '90');

                } else {
                    if ($newCompanyName !== $logoName[0]){
                        $fileNameToStore = $assets->company_logo;
                    }
                    //dd('not equal');
                }
            } else {
                $fileNameToStore = $assets->company_logo;
            }
        }
        return $fileNameToStore;
    }*/
