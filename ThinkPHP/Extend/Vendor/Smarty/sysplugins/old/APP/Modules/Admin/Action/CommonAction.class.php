<?php

/**
* 自动运行的一个类，里面包含一个自动运行的方法，用来检测是否登录
*/
class CommonAction extends Action
{
	
	public function _initialize() 
	{
		if( !isset($_SESSION['uid']) || !isset($_SESSION['username']) ){
			$this->redirect('Admin/Login/index');
		}
	}
}

?>