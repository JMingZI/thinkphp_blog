<?php

	/**
	* 前台首页控制器
	*/
	class IndexAction extends Action
	{
		
		public function index( ){
			//生成缓存 
			if( !$zhiding = S('zhiding_list') ){
				//置顶推荐
				$data = D('BlogRelation')->relation(true)->order('time DESC')->select();

				// p($data);die;

				$c = 0;
				foreach ($data as $k => $v) {
					if( $v['attr'] ){
						$zhiding[] = $data[$k];
						$c++;
					}
					if( $c == C('TOP_NUMS') )
						break;
				}
			}
			S( 'zhiding_list', $zhiding, (int)C('S_TIME') );
			$this->zhiding = $zhiding;

			if( !$new = S('index_list')){
				//最新文章
				$new = M('user')->field('id,imgUrl,title,content')->order('time DESC')->limit(8)->select();
				// p($data2);die;
			}
			S( 'index_list', $new, (int)C('S_TIME') );
			$this->new = $new;
			$this->display();
		}

		//获取图片新闻
		Public function getTXnews(){
			if( !IS_AJAX )  _404('页面不存在');
			$url = "http://www.cnsphoto.com/";
			$content = file_get_contents($url);
			$preg = '/<li style="height:305px"><a href="(\/newsphoto\/detail\.jsp\?pid=\d+)" title="(.*?)" target=_blank><img src="(.*?)" width=549><\/a><\/li>/';
			preg_match_all($preg, $content, $matches);
			// p($matches);die;
			if( $matches ) {
					$data = array(
						'aurl' => $matches[1],
						'title' => $matches[2],
						'imgurl' => $matches[3]
					);
					$this->ajaxReturn($data, 'json');
			}
			else {
				$this->ajaxReturn(array( 'status' => 0 ), 'json');
			}
		}
	}

?>