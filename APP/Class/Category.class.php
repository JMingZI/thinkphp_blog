<?php

/**
* 无限分类
*/
class Category
{
	//无限分类,组合多维数组
	static Public function unlimitedCate($cate, $pid = 0, $name = 'child') {
		$arr = array();
		foreach( $cate as $v ){
			if( $v['pid'] == $pid ){
				$v[$name] = self::unlimitedCate($cate, $v['id']);
				$arr[] = $v;
			}

		}
		return $arr;
	}

	//传递一个父id，返回所有子分类id
	static Public function getChild($cate, $pid){
		$arr = array();
		foreach ($cate as $key => $v) {
			if( $v['pid'] == $pid ){
				$arr[] = $v['id'];
				$arr = array_merge($arr, self::getChild($cate, $v['id']));
			}
		}
		return $arr;
	}

	//传递一个子分类，返回他的父级分类
	static Public function getParent($cate, $id){
		$arr = array();
		foreach ($cate as  $v) {
			if( $v['id'] == $id ){
				$arr[] = $v;
				$arr = array_merge(self::getParent($cate, $v['pid']), $arr);
			}
		}
		return $arr;
	}
}

?>