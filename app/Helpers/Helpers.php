<?php

    use App\Models\SiteCMS;
    use Carbon\Carbon;

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

    function getKey($key)
    {
        $site_cms = SiteCMS::where('key', '=', $key)->firstOrFail('value');
        if (!$site_cms){
            return null;
        }
        return $site_cms->value;
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

    if (!function_exists('showImage')) {
        function showImage($model, $collectionName, $type = 'single')
        {
            if ($type === 'multiple') {
                return asset(optional($model)->collection_name == $collectionName ? $model->getFullUrl() : config('static_content._default.image.no_preview'));
            }
            return asset(optional($model)->getFirstMedia($collectionName) ? $model->getFirstMediaUrl($collectionName) : config('static_content._default.image.no_preview'));
        }
    }

    if (!function_exists('showAltText')) {
        function showAltText($model, $collectionName, $altText, $type = 'single')
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
