<?php

return array(

    'ecjia_config'       => 'Ecjia\Component\Config\Facades\Config',
    'ecjia_admin_log'    => 'Ecjia\Component\AdminLog\Facades\AdminLog',
    'ecjia_update_cache' => 'Ecjia\Component\CleanCache\Facades\CleanCache',


    'Ecjia_PluginManager'  => 'Ecjia\System\Facades\PluginManager',
    'Ecjia_ThemeManager'   => 'Ecjia\System\Facades\ThemeManager',
    'Ecjia_SiteManager'    => 'Ecjia\System\Facades\SiteManager',
    'Ecjia_VersionManager' => 'Ecjia\System\Facades\VersionManager',


    //compatible
    'ecjia_base'         => 'Ecjia\System\BaseController\EcjiaController',
    'ecjia_admin'        => 'Ecjia\System\BaseController\EcjiaAdminController',
    'ecjia_front'        => 'Ecjia\System\BaseController\EcjiaFrontController',
    'ecjia_error'        => 'Royalcms\Component\Error\Error',

);