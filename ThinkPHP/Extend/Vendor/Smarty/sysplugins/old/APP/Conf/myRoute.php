<?php  

return array(

	//自定义路由
	'URL_ROUTER_ON' => true,
	'URL_ROUTE_RULES' => array(
		'/^content_(\d+)$/' => 'Index/Content/index?id=:1',
		// ':id\d' => 'Index/List/index',
		'/^list_(\d+)$/' => 'Index/List/index?id=:1',
		'/^list((_\d+)+)$/' => 'Index/List/tagsList?id=:1',



		'user/login' => 'Admin/Login/index'
		),



	);

?>