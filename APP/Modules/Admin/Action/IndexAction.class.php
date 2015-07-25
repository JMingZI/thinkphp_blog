<?php

	/**
	* 后台首页控制器
	*/
	class IndexAction extends CommonAction
	{
		//首页视图
		public function index( )
		{
			$this->display();
		}

		//用户登出
		public function logout() {

			session_unset();
			session_destroy();

			$this->redirect("Admin/Login/index");
		}

		Public function index_inner(){
			$this->display();
		}
	}

?>