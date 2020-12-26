<?php
    use Illuminate\Support\Facades\Storage;
    use Intervention\Image\Facades\Image;


    if (!function_exists('SingleImageUploadHandler')){
        /**
         * @param $request
         * @param string $uploadedFile
         * @param string $fileNameInput
         * @param string $uniqueKey
         * @param string $path
         * @return string|string[]
         */
        function SingleImageUploadHandler($request, $uploadedFile = '', $fileNameInput = '', $uniqueKey = '', $path = '')
        {
            if ($request->hasFile($uploadedFile)) {
                //Get file from client side
                $files = $request->file($uploadedFile);
                $img = Image::make($files);
                $img->encode('', 75);
                $fileExt = $files->getClientOriginalExtension();
                //Get title as filename
                $filename = ucfirst($request->input($fileNameInput));
                $fileFormat = strtoupper($filename . '-' . md5(time()) . '-' . $uniqueKey) . '.' . $fileExt;
                $fileNameToStore = str_replace(' ', '-', $fileFormat);
                $location = 'public/' . $path;

                // Store in Storage Filesystem
                Storage::put($location . $fileNameToStore, $img);
            } else {
                //Default Image
                $filename = ucfirst($request->input($fileNameInput));
                $getFirstLetter = substr($filename, 0, 1);
                $alphaAvatar = GenerateAlphaAvatar($getFirstLetter);
                $ext = 'png';
                $fileNameToStore = strtoupper($filename . '-' . md5(time())) . 'default' . '.' . $ext;
                $location = 'public/' . $path;

                Storage::put($location . $fileNameToStore, $alphaAvatar->encode('', 75));
            }
            return $fileNameToStore;
        }
    }

    if (!function_exists('MultiImageUploadHandler')){
        function MultiImageUploadHandler($request, $uploadedFile = '', $fileNameInput = '', $uniqueKey = '', $path = ''){
            $files = $request->file($uploadedFile);
//            dd($files);
            $stores = [];
            if ($request->hasFile($uploadedFile)) {
                $i = 1;
                foreach ($files as $file){
                    //Get file from client side
                    $img = Image::make($file);
                    $img->encode('', 75);
                    $fileExt = $file->getClientOriginalExtension();
                    //Get title as filename
                    $filename = ucfirst($request->input($fileNameInput));
                    $fileFormat = strtoupper($filename . '-' . md5(time()) . '-' . $uniqueKey . $i) . '.' . $fileExt;
                    $fileNameToStore = str_replace(' ', '-', $fileFormat);
                    $location = 'public/' . $path;

                    // Store in Storage Filesystem
                    Storage::put($location . $fileNameToStore, $img);
                    $stores[] = $fileNameToStore;
                    $i++;
                }
            }
//            dd($stores);
            return $stores;
        }
    }



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
