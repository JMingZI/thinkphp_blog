<?php

/**
* 属性管理控制器
*/
class AttributeAction extends CommonAction
{
	
	//属性列表
	Public function attrList() {
		$this->attr = M('attr')->select();
		$this->display();
	}

	//添加属性
	Public function addAttr() {
		$this->display();
	}

	//添加属性表单处理
	Public function attrHandle() {
		if( M('attr')->add($_POST) )
			$this->success('添加成功', U(GROUP_NAME.'/Attribute/attrList'));
		else
			$this->error('添加失败');
	}
}

?>