<?php

/**
* 列表页控制器
*/
class ListAction extends Action
{
	
	public function index( ){
		$id = $_GET['id'];
		$cate = M('cate')->order('sort')->select();
		import('Class.Category', APP_PATH);
		$cid = Category::getChild($cate, $id);
		$cid[] = $id;

		//根据视图模型查找所有的文章
		$where = array('sortid' => array('IN', $cid));
		$count = M('user')->where($where)->count();
		import('ORG.Util.Page');

		$page = new Page($count, C('CATE_LIST_NUMS'));
		$limit = $page->firstRow.','.$page->listRows;
		$blog_list = D('BlogView')->getAll($where, $limit);

		//查找出上级分类
		$cid = $blog_list[0]['cid'];
		import('Class.Category', APP_PATH);
		$cate = M('cate')->order('sort')->select();
		$this->parentl = Category::getParent($cate, $cid);

		$this->page = $page->show();
		$this->blog_list = $blog_list;
		$this->display();
	}

	public function tagsList(){
		//获得传过来的ID格式是 _90_000
		$id = $_GET['id'];
		//去掉最前面的 _		
		$id = substr($id, 1, strlen($id)-1);
		//将ID字符窜分开为数组
		$id = explode('_', $id);
		//截取掉最后的一个作为标签id 或者 档案名称
		$tid = $id[count($id)-1];
		//并将这个值弹出数组
		array_pop($id);
		//再组合成字符窜，便于查找
		$id = implode(',', $id);
		$this->data = D('BlogRelation')->relation(true)->where(array('id' => array('IN',$id)))->order('time DESC')->select();
		
		if( strlen($tid) == 6 ){
			$this->dangan_name = $tid;
		}
		else{
			$this->tagname = M('tags')->where(array('id'=>$tid))->getField('name');
		}

		$this->display();
	}
}

?>