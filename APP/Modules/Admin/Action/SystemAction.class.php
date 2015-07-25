<?php

	/**
	* 系统设置控制器
	*/
	class SystemAction extends CommonAction
	{
		
		public function listNum() {
			$this->display();
		}

		public function handle() {
			// echo CONF_PATH;
			if(F( 'listnum', $_POST, CONF_PATH ))
				$this->success("设置成功", U(GROUP_NAME . '/Index/index_inner'));
			else
				$this->error("设置失败，该文件".CONF_PATH."listnum.php没有写入权限");
		}
	}

?>