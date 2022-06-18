<?php

    use Carbon\Carbon;
    use Illuminate\Config\Repository;
    use Illuminate\Contracts\Foundation\Application;
    use Illuminate\Support\Facades\Storage;

    /**
     * @param $argument
     * @return string
     */
    function formatDMY($argument): string
    {
        return Carbon::parse($argument)->format('d/m/Y');
    }

    /**
     * @param $argument
     * @return string
     */
    function formatYMD($argument): string
    {
        return Carbon::parse($argument)->format('y/m/d');
    }

    /**
     * @param $argument
     * @return string
     */
    function formatYDM($argument): string
    {
        return Carbon::parse($argument)->format('y/d/m');
    }

    /**
     * @param $argument
     * @return string
     */
    function humanFormat($argument): string
    {
        return Carbon::parse($argument)->diffForHumans();
    }

    /**
     * @param $price
     * @return string
     */
    function presentPrice($price)
    {
        if (Session::has('coupon')){
            // price - discount
            return number_format($price - Session::get('coupon.discount'), 2);
        }
        return number_format($price, 2);
    }

    if (!function_exists('getClassName')) {
        function getClassName($class)
        {
            $arr = preg_split('/(?=[A-Z])/', class_basename($class));
            array_shift($arr);
            array_pop($arr);
            return implode(' ', $arr);
        }
    }


    /**
     * @function for displaying image
     */
    if (!function_exists('showImage')) {
        /**
         * @spatie_media_library
         * This function will check if image exist on database or filesystem. If any one of them missing it will show a default image.
         * @param $model                | Pass model instance
         * @param $collectionName       | collection name
         * @param string $type          | single or multiple
         * @return string image url
         */
        function showImage($model, $collectionName, string $type = 'single')
        {
            if ($type === 'multiple') {
                $filePath = pathinfo($model->getPath(), PATHINFO_DIRNAME);
                $fileName = $model->file_name;
                $exists = checkIfDirectoryExists($filePath, $fileName);

                if (!$exists) {
                    return asset(config('static_content._default.image.no_preview'));
                } else {
                    return asset(optional($model)->collection_name == $collectionName ? $model->getFullUrl() : config('static_content._default.image.no_preview'));
                }
            } else {
                $fileName = optional($model)->getFirstMedia($collectionName) ? $model->getFirstMedia($collectionName)->file_name : null;
                $filePath = pathinfo($model->getFirstMediaPath($collectionName), PATHINFO_DIRNAME);
                $exists = checkIfDirectoryExists($filePath, $fileName);

                if (!$exists) {
                    return asset(config('static_content._default.image.no_preview'));
                } else {
                    return asset(optional($model)->getFirstMedia($collectionName) ? $model->getFirstMediaUrl($collectionName) : config('static_content._default.image.no_preview'));
                }
            }
        }
    }


    if (!function_exists('checkIfDirectoryExists')) {
        /**
         * @param $filePath
         * @param $fileName
         * @return bool
         */
        function checkIfDirectoryExists($filePath, $fileName)
        {
            $explode = explode('/', $filePath);
            $getLast = last($explode);
            return Storage::exists($getLast . '/' . $fileName);
        }
    }


    if (!function_exists('showAltText')) {
        /**
         * @param $model
         * @param $collectionName
         * @param $altText
         * @return Repository|Application|mixed
         */
        function showAltText($model, $collectionName, $altText)
        {
            return optional($model)->getFirstMedia($collectionName) ? $altText : config('static_content._default.image.alt');
        }
    }


    //    function getGeoLocation(string $attribute)
    //    {
//        $geoLocation = '';
//        if (config('cache.default') === 'file'){
//            config(['cache.default' => 'array']);
//            $ip = file_get_contents("http://ipecho.net/plain");
//            $getLocation = geoip()->getLocation($ip);
//            session()->put('geoLocation', [
//                'time_zone' => $getLocation[$attribute]
//            ]);
//        }
//        return $geoLocation;
//    }
