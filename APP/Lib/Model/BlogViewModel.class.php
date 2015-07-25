<?php


/**
* 视图模型
*/
class BlogViewModel extends ViewModel
{
	
	Protected $viewFields = array(
		'user' => array(
			'id','title','name'=>'author','content','clicknum','time','imgUrl',
			'_type' => 'LEFT',
			),
		'cate' => array(
			'id'=>'cid','name', '_on' => 'user.sortid = cate.id',
			),
		);

	Public function getAll($where, $limit){
		return $this->where($where)->limit($limit)->order('time DESC')->select();
	}
}

?>