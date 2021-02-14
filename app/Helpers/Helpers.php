<?php

    use App\Models\Footer;
    use App\Models\Policy;
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
        $site_cms = SiteCMS::select('value')
            ->where('key', '=', $key)
            ->first();
//            ->firstOrFail();
        if (!$site_cms){
            return null;
        }
        return $site_cms->value;
    }
