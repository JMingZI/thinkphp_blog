<?php


	/**
	* 获取文章档案
	*/
	class DanganWidget extends Widget
	{
		//前台调用  {:W('Blog', array('limit' => 5))}
		//模版Blog调用 <foreach name='blog'>  {:U('./content_' . $v['id'])}
		Public function render( $data )
		{
			$field = array('id', 'time');
			$time = M('user')->field($field)->order('time DESC')->select();
			$d = array();
			$now = date('Ym', time());
			foreach( $time as $v ){
				if( date('Ym', $v['time']) == $now ){
					$d[$now][] = $v['id'];
				}
				$now = date('Ym', $v['time']);
			}
			$data['dangan'] = $d;
			return $this->renderFile('', $data);
		}
	}

?>