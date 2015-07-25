<?php

/**
* 内容页控制器
*/
class ContentAction extends Action
{
	
	public function index( ){
		$data = D('BlogRelation')->relation(true)->where(array( 'id'=>$_GET['id'] ))->select();
		$this->data = $data;
		// P($data);die;
		$cid = $data[0]['sortid'];
		// p($cid);die;
		import('Class.Category', APP_PATH);
		$cate = M('cate')->order('sort')->select();
		// p($cate);
		$this->parent = Category::getParent($cate, $cid);
		// p($parent);die;
		$this->display();
	}

	public function addClickNum(){
		$where = array('id' => $_GET['id']);
		$click = M('user')->where($where)->getField('clicknum');
		M('user')->where($where)->setInc('clicknum');
		echo "document.write(".$click.")";
	}
}

?>