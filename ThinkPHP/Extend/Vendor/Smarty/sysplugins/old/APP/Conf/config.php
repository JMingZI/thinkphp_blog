<?php
return array(
	//'配置项'=>'配置值'
	'APP_GROUP_LIST' => 'Index,Admin',
	'DEFAULT_GROUP' => 'Index',

	'APP_GROUP_MODE' => 1,
	'APP_GROUP_PATH' => 'Modules',


	//数据库连接
	'DB_HOST' => 'localhost',
	'DB_NAME' => 'tp',
	'DB_USER' => 'root',
	'DB_PWD' => 'zkeys',
	'DB_PREFIX' => '',

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