<?php

defined('IN_ECJIA') or exit('No permission resources.');

return array(

	'Ecjia\Component\Config\ConfigServiceProvider',
	'Ecjia\Component\AdminLog\AdminLogServiceProvider',
	'Ecjia\Component\CleanCache\CleanCacheServiceProvider',

    'Ecjia\System\Providers\EventServiceProvider',

);

//end