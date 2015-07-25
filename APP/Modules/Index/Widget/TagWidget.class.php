<?php


	/**
	* 获取全部标签
	*/
	class TagWidget extends Widget
	{
		//前台调用  {:W('Blog', array('limit' => 5))}
		//模版Blog调用 <foreach name='blog'>  {:U('./content_' . $v['id'])}
		Public function render( $data ){
			//在博文——标签多对多关系的中间表中查找出所有的标签
			$tags = M('blog_tags')->select();
			$a = array();
			//去掉重复的标签，将所有不重复的标签保存在数组a中
			for($i=0; $i<count($tags); $i++) {
				if( !in_array( $tags[$i]['tid'], $a ) ){
					$a[$i] = $tags[$i]['tid'];
				}
			}
			// 查找出这些标签下所有的博文id，保存在数组bid中
			foreach ($a as $v) {
				$bid[$v] = M('blog_tags')->where(array('tid'=>$v))->field('bid')->select();
			}
			foreach ($bid as $v) {
				$blog_id[] = $v;
			}
			// p($a);
			// p($blog_id);die;
			$b = $a;//数组b用来保存原先的数组a，数组a统计标签出现的次数
			foreach ($a as $k => $v) {
				$a[$k] = array();
				for( $j=0;$j<count($tags);$j++ ){
					if( $v == $tags[$j]['tid'] )
						$a[$k][0] += 1;
				}
			}
			$i = 0;
			//将标签id，统计的次数，标签名，博文的id，组合成一个数组c
			foreach( $b as $k=>$v ){
				$name = M('tags')->where(array('id' => $v))->getField('name');
				$c[$i] = array( 'id' => $v, 'num' => $a[$k][0], 'name' => $name,'bid'=>$blog_id[$i] );
				$i++;
			}
			// p($c);die;

			$data['tags'] = $c;
			return $this->renderFile('', $data);
		}
	}

?>