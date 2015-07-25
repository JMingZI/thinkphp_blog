<?php

	/**
	* 后台登录控制器
	*/
	class LoginAction extends Action
	{
		//登录视图
		public function index( )
		{
			// ob_end_clean(); 
			$this->display();
		}

		//验证码
		public function verify() {
			import('ORG.Util.Image');
			ob_end_clean();
			Image::buildImageVerify(4, 1, 'png', 98, 36);
		}

		//用户登录的表单验证
		public function loginHandle() {
			if( !IS_POST ) _404('页面不存在');

			if( I('verify', '', 'md5') != session('verify') )
				$this->error('验证码错误');

			$admin = M('admin')->where(array('name' => I('username')))->find();
			if( !$admin || I('password') != $admin['passwd'] )
				$this->error('用户名或者密码错误');

			$data = array(
				'id' => $admin['id'],
				'logintime' => time(),
				'loginip' => get_client_ip(),
			);

			M('admin')->save($data);
			session('uid', $admin['id']);
			session('username', $admin['name']);
			session('logintime', date('Y-m-d H:i:s', $admin['logintime']));
			session('loginip', $admin['loginip']);

			$this->redirect('Admin/Index/index');
		}
		
	}

?>