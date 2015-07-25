<?php

	import('TagLib');

	/**
	* 自定义标签
	*/
	class TagLibYm extends TagLib
	{	
		Protected $tags = array(
			'nav' => array( 'attr' => 'num, order', 'close' => 1 ),
			);

		Public function _nav($attr, $content){
			$attr = $this->parseXmlAttr($attr);
			$str = <<<str
<?php
	\$_nav_cate = M('cate')->order("{$attr['order']} ASC")->limit("{$attr['num']}")->select();
	import('Class.Category', APP_PATH);
	\$_nav_cate = Category::unlimitedCate(\$_nav_cate);
	foreach( \$_nav_cate as \$_nav_cate_v ) :
		extract(\$_nav_cate_v);
		\$url = U('/list_'. \$id);
?>
str;
	$str .= $content;
	$str .= '<?php  endforeach; ?>';
	return $str;
		}

	}

?>