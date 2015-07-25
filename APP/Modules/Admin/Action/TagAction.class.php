<?php

/**
* 标签列表
*/
class TagAction extends Action
{
	Public function tagList(){
		import("ORG.Util.Page");
		$count = M('tags')->count();

		$page = new Page($count, C('PAGE_NUMS'));
		$limit = $page->firstRow.','.$page->listRows;
		$this->data = M('tags')->limit($limit)->order('id DESC')->select();

		$this->page = $page->show();
		$this->display();
	}
}

?>