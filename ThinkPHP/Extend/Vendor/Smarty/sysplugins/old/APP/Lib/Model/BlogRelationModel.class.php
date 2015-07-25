<?php


/**
* 博文属性多对多关系
*/
class BlogRelationModel extends RelationModel
{
	//因为默认会把BlogRelation作为表名
	Protected $tableName = 'user'; //主表

	Protected $_link = array(
		'attr' => array(	//附表
			//一对多  HAS_MANY
			'mapping_type' => MANY_TO_MANY,
			'mapping_name' => 'attr',  
			'foreign_key' => 'bid',		//主表中关联附表的外键
			'relation_foreign_key' => 'aid',	//附表中关联主表的外键
			'relation_table' => 'blog_attr'		//中间表
			),

		'cate' => array(
			'mapping_type' => BELONGS_TO,  //多对一
			'foreign_key' => 'sortid',
			'mapping_fields' => 'name',	//设置读取的字段
			'as_fields' => 'name:sort', 		//将表中的字段提取出来 并且重命名显示 成一维数组
			),
		'tags' => array(
			'mapping_type' => MANY_TO_MANY,
			'mapping_name' => 'tags',  
			'foreign_key' => 'bid',		//主表中关联附表的外键
			'relation_foreign_key' => 'tid',	//附表中关联主表的外键
			'relation_table' => 'blog_tags',		//中间表	
			),	
		);
}
?>