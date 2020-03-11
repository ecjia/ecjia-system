<?php


namespace Ecjia\System\Hookers;


use RC_Config;

class CustomOriginalHomeUrlFilter
{

    /**
     * 自定义项目访问URL
     * @param string $url
     * @return string
     */
    public function handle($url)
    {
        if (RC_Config::get('site.custom_original_home_url')) {
            $url = RC_Config::get('site.custom_original_home_url');
        }
        return rtrim($url, '/');
    }

}