<?php


	/**
	* 获取阅读排行的文章
	*/
	class BlogWidget extends Widget
	{
		//前台调用  {:W('Blog', array('limit' => 5))}
		//模版Blog调用 <foreach name='blog'>  {:U('./content_' . $v['id'])}
		Public function render( $data )
		{
			$field = array('id', 'title', 'clicknum');
			$data['blog'] = M('user')->field($field)->order('clicknum DESC')->limit(15)->select();
			return $this->renderFile('', $data);
		}
	}

?>