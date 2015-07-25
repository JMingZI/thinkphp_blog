<?php

/**
* 分类控制器
*/
class CategoryAction extends CommonAction
{
	
	//分类列表
	Public function cateList() {

		$cate = M('cate')->order('sort')->select();

		import('Class.Category', APP_PATH);

		$cate = Category::unlimitedCate($cate);
		// p($cate);die;
		$this->cate = $cate;

		$this->display();
	}

	//修改排序
	Public function changeSort (){
		$data = M('cate');
		foreach ($_POST as $id => $sort) {
			$data->where(array('id' => $id))->setField('sort', $sort);
		}
		$this->redirect(GROUP_NAME.'/Category/cateList');
	}

	//添加分类
	Public function addCate() {
		$pid = I('pid', 0, 'intval');
		$this->pid = $pid;
		$this->display();
	}

	//分类表单处理
	Public function cateHandle() {

		if( M('cate')->add($_POST) )
			$this->success('添加成功', U(GROUP_NAME.'/Category/catelist'));
		else
			$this->error('添加失败');
	}

	//删除分类
	Public function delCate(){
		if( M('cate')->delete(I('id')) ){
		  	M('cate')->where(array( 'pid' => I('id') ))->delete();
		  	$this->success('栏目'.I('id').'及其子栏目删除成功', U(GROUP_NAME.'/Category/catelist'));
		}
		else
			$this->error('删除失败');
	}
}

?>