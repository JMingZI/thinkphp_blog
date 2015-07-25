<?php
return array(
	//'配置项'=>'配置值'
	'APP_GROUP_LIST' => 'Index,Admin',
	'DEFAULT_GROUP' => 'Index',

	'APP_GROUP_MODE' => 1,
	'APP_GROUP_PATH' => 'Modules',


	//数据库连接
	'DB_HOST' => 'localhost',
	'DB_NAME' => 'ymblogne_tp',
	'DB_USER' => 'ymblogne_tp',
	'DB_PWD' => 'ck.123456',
	'DB_PREFIX' => 'old_',

	'URL_MODEL' => 2,

	//点语法默认解析
	'TMPL_VAR_IDENTIFY' => 'array',

	//自定义session 数据库存储
	'SESSION_TYPE' => 'Db',
	'SESSION_EXPIRE' =>7200,

	//自定义配置文件
	'LOAD_EXT_CONFIG' => 'listnum,myRoute',

	//显示调试模式
	// 'SHOW_PAGE_TRACE' => true,



	//开启静态缓存
	'HTML_CACHE_ON' => true,
	'HTML_CACHE_RULES' => array(
		'Content:index' => array(
			'{:module}_{:action}_{id}', 0
			),
		),
);
?>