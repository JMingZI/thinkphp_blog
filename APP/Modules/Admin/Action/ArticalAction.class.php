<?php
/**
* 文章管理控制器
*/
class ArticalAction extends CommonAction
{
	//输出文章列表
	public function articalList() {
		Load('extend');
		import('ORG.Util.Page');

		$count = M('user')->count();
		$page = new Page($count, C('PAGE_NUMS'));
		$limit = $page->firstRow.','.$page->listRows;

		// $field = array('$id, $time')  然后再查找的时候 加上 ->field($field),,,->field($field, true),第二个参数表示开启不想显示的字段
		$field = array('del');//不查找del字段
		$data = D('BlogRelation')->relation(true)->field($field, true)->where(array('del' => 0))->order('time DESC')->limit($limit)->select();
		// $data = M('user')->order('time DESC')->limit($limit)->select();
		// p($data);die;
		$this->data = $data;

		$this->page = $page->show();

		$this->display();
	}

	//删除 或者 还原 文章到回收站   
	Public function toDel(){
		$del = I('del', 'intval');
		$msg = $del?'删除到回收站':'还原';
		$action = $del ? 'delList' : 'articalList';
		$update = array(
			'id' => I('id', 'intval'),
			'del' => $del
			);
		if( M('user')->save($update) )
			$this->success($msg.'成功！', U( GROUP_NAME. '/Artical/'.$action ));
		else
			$this->error($msg.'失败');
	}

	//添加文章
	public function addArtical() {
		$cate = M('cate')->order('sort')->select();
		$this->cate = $cate;

		$this->attr = M('attr')->select();
		$this->tags = M('tags')->select();
		$this->display();
	}

	//回收站列表
	Public function delList(){
		Load('extend');
		import('ORG.Util.Page');

		$count = M('user')->where(array('del' => 1))->count();
		$page = new Page($count, C('PAGE_NUMS'));
		$limit = $page->firstRow.','.$page->listRows;

		// $field = array('$id, $time')  然后再查找的时候 加上 ->field($field),,,->field($field, true),第二个参数表示开启不想显示的字段
		$field = array('del');//不查找del字段
		$data = D('BlogRelation')->relation(true)->field($field, true)->where(array('del' => 1))->order('time DESC')->limit($limit)->select();
		// $data = M('user')->order('time DESC')->limit($limit)->select();
		$this->data = $data;

		$this->page = $page->show();

		$this->display('articalList');
	}

	//文章表单处理
	public function addHandle() {
		// 先处理图片
		$size = 1048576;
		$imgname = $_FILES['img']['name'];
		$imgname=iconv("UTF-8","GB2312", $imgname);
		// p($name);die;
		define('UPLOAD_PATH', $_SERVER[DOCUMENT_ROOT].__ROOT__."/Public/uploadImg/");
		if( $_FILES['img']['size'] < $size && $_FILES['img']['size'] > 0){
	   		$photo_type=$_FILES['img']['type'];
	        list($tmp,$file_ext) = explode("/",$photo_type);//分割图片类型为image 和 jpg/png
	        //判断格式
	        if( $tmp == 'image' ){
	        	$imgname = time().'.'.$file_ext;
		        if(move_uploaded_file($_FILES['img']['tmp_name'],UPLOAD_PATH.$imgname)){
		        }
		    }
		}else{
			$imgname = 'artical.jpg';
		}
		$name = I('name');
		$title = I('title');
		$content = I('content');
		$sortid = $_POST['sortid'];
		$tags = $_POST['tags'];
		$imgUrl = __ROOT__."/Public/uploadImg/".$imgname;
		$data = array(
			'name' => $name,
			'title' => $title,
			'content' => $content,
			'sortid' => $sortid,
			'imgUrl' => $imgUrl,
			'time' => time()
		);
		// p($imgUrl);die;
		if( $bid = M('user')->add($data) ){
			if( isset($_POST['aid']) ){
				$sql = 'INSERT INTO blog_attr(bid, aid) VALUES';
				foreach ($_POST['aid'] as $v) {
					$sql .= '('.$bid.','.$v.'),';
				}
				$sql = rtrim($sql, ',');
				M('blog_attr')->query($sql);
			}
			//插入输入标签
			$blog_tags = M('blog_tags');
			if( isset($_POST['tags']) ){
				$arr = explode('/', $_POST['tags']);
				foreach ($arr as $key => $v) {
					$tags_id[] = M('tags')->add(array( 'name' => $v ));
				}
				$sql = 'INSERT INTO blog_tags(bid, tid) VALUES';
				foreach ($tags_id as $v) {
					$sql .= '('.$bid.','.$v.'),';
				}
				$sql = rtrim($sql, ',');
				$blog_tags->query($sql);
			}
			//插入选择标签
			if( isset($_POST['tags_arr']) ){
				// p($_POST['tags_arr']);die;
				$sql = 'INSERT INTO blog_tags(bid, tid) VALUES';
				foreach ($_POST['tags_arr'] as $v) {
					$sql .= '('.$bid.','.$v.'),';
				}
				$sql = rtrim($sql, ',');
				$blog_tags->query($sql);
			}

			// 提交链接
			$urls = array(
			    'http://www.ymblog.net/content_'.$bid.'.html',
			);
			$api = 'http://data.zz.baidu.com/urls?site=www.ymblog.net&token=CjIsU0spMlGiMdgL';
			$ch = curl_init();
			$options =  array(
			    CURLOPT_URL => $api,
			    CURLOPT_POST => true,
			    CURLOPT_RETURNTRANSFER => true,
			    CURLOPT_POSTFIELDS => implode("\n", $urls),
			    CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
			);
			curl_setopt_array($ch, $options);
			$result = curl_exec($ch);
			echo $result;
			$this->success('添加成功',U(GROUP_NAME.'/Artical/articalList'));
		}
		else
			$this->error("添加失败");
			
	}

	//彻底删除文章
	Public function deleteArtical(){
		if( M('user')->where(array( 'id' => I('id') ))->delete() ){
			if( M('blog_attr')->where(array( 'bid' => I('id') ))->delete() ){
				// $this->success('',U(GROUP_NAME.'/Artical/delList'));
				$a = 0;
			}
			$this->success('彻底删除成功',U(GROUP_NAME.'/Artical/delList'));
		}
		else
			$this->error("删除失败");
	}


	//文章抓取
	Public function zhuaquArtical(){
		$this->cate = M('cate')->where(array('pid'=>0))->select();
		$this->display();
	}

	Public function zhuaquArticalHandle(){
		$this->cate = M('cate')->where(array('pid'=>0))->select();
		if( !isset($_POST['cate_arr']) )
			$this->error('请选择分类');
		$status= "";
		foreach ($_POST['cate_arr'] as $key => $v) {
			if( $v == 11 )//随笔
			{	
				$url = "http://www.wmpic.me/wenzi";
				$html = file_get_contents($url);
				$preg = '/<div class="mlist" style="width:100%">\s+<div class="mlist-img"><a target="_blank" title="(.*?)" href="(.*?)"><img .*?src="(.*?)" class=.*?\/><\/a><\/div>.*\s*.*\s*.*\s*<p>\s*(.*?)\s*<\/p>/';
				preg_match_all($preg, $html, $matches);
				// p($matches);

				for( $i=0; $i<$_POST['articalNum']; $i++){
					$content = file_get_contents($matches[2][$i]);
					preg_match('/<div class="content-c">\s*(.*)\s*<\/div>/', $content, $matches_content);
					$content = htmlspecialchars($matches_content[1]);
					// p($content);die;
					$data = array(
						'name' => '来源于文字吧',
						'title' => '[转载]'.$matches[1][$i],
						'content' => $content,
						// 'aUrl' => $matches[2][$i],
						'imgUrl' => $matches[3][$i],
						'sortid' => 11,
						'time' => time()
					);
					// p($data);die;
					if( M('user')->data($data)->add() )
						$status .= "***随笔分类文章".($i+1).'抓取成功<br/>';
					else
						$status .= "<span style='color:red;'>***随笔分类文章".($i+1).'抓取失败，文章已存在</span><br/>';
				}
			}
			elseif( $v == 12 )//前端
			{	
				$url = "http://f2e.im/";
				$html = file_get_contents($url);
				$preg = '/<div class="main">\s*<h3 class="title">\s*<a href="(.*?)">(.*?)<\/a>/';
				preg_match_all($preg, $html, $matches);
				// p($matches);die;

				for( $i=0; $i<$_POST['articalNum']; $i++){
					$url = "http://f2e.im".$matches[1][$i];
					$content = file_get_contents($url);
					preg_match('/<\/div>\s*<\/div>\s*<\/div>\s*<div class="ui-content">\s*(.*?)\s*<\/div>\s*<div class="ui-footer">/is', $content, $matches_content);
					$content = htmlspecialchars($matches_content[1]);
					// p($matches_content[1]);die;
					$data = array(
						'name' => '来源F2E-前端社区',
						'title' => '[转载]'.$matches[2][$i],
						'content' => $content,
						'sortid' => 12,
						'time' => time()
					);
					// p($data);die;
					if( M('user')->data($data)->add() )
						$status .= "***前端分类文章".($i+1).'抓取成功<br/>';
					else
						$status .= "<span style='color:red;'>***前端分类文章".($i+1).'抓取失败，文章已存在</span><br/>';
				}
			}
			elseif( $v == 13 )//互联网
			{	
				$url = "http://www.alibuybuy.com/";
				$contents = file_get_contents($url); 
				$preg = '/<div id="post-\d+" class="post">\s*<a href="(.*?)"><img src="(.*?)" alt=".*?" title="(.*?)" class="thumbnail" \/><\/a><\/a>/';
				preg_match_all($preg, $contents, $matches);
				// p($matches);die;

				for( $i=0; $i<$_POST['articalNum']; $i++){
					$url = $matches[1][$i];
					$content = file_get_contents($url);
					preg_match('/<div class="article-content">(.*?)<div class="shengming">/is', $content, $matches_content);
					$content = htmlspecialchars($matches_content[1]);
					// p($matches_content[1]);die;
					$data = array(
						'name' => '来源互联网的那点事',
						'title' => '[转载]'.$matches[3][$i],
						'content' => $content,
						'imgUrl' => $matches[2][$i],
						'sortid' => 13,
						'time' => time()
					);
					// p($data);die;
					if( M('user')->data($data)->add() )
						$status .= "***互联网分类文章".($i+1).'抓取成功<br/>';
					else
						$status .= "<span style='color:red;'>***互联网分类文章".($i+1).'抓取失败，文章已存在</span><br/>';
				}
			}
			elseif( $v == 15 )//PHP
			{	
				$url = "http://www.phpxuexi.com/";
				$contents = file_get_contents($url); 
				$preg = '/<li><a href="(\/\w+\/\d+\/\d+\.html)"><img src=\'(.*?)\' border=\'0\' width=\'143\' height=\'106\' alt=\'(.*?)\'><span class="title">.*?<\/span><\/a><\/li>/is';
				preg_match_all($preg, $contents, $matches);
				// p($matches);die;
				// http://bbs.phpchina.com/
				for( $i=0; $i<$_POST['articalNum']; $i++){
					$url = "http://www.phpxuexi.com/".$matches[1][$i];
					$content = file_get_contents($url);
					preg_match('/<table width=\'100%\'>\s*<tr>\s*<td>\s*(.*?)\s*<\/td>\s*<\/tr>/is', $content, $matches_content);
					$content = htmlspecialchars($matches_content[1]);
					// p($matches_content);die;
					$data = array(
						'name' => '来源PHP学习网',
						'title' => '[转载]'.$matches[3][$i],
						'content' => $content,
						'imgUrl' => "http://www.phpxuexi.com/".$matches[2][$i],
						'sortid' => 15,
						'time' => time()
					);
					// p($data);die;
					if( M('user')->data($data)->add() )
						$status .= "***php分类文章".($i+1).'抓取成功<br/>';
					else
						$status .= "<span style='color:red;'>***php分类文章".($i+1).'抓取失败，文章已存在</span><br/>';
				}
			}			
		}
		$this->status = $status;
		$this->display('Artical/zhuaquArtical');
	}
}

?>