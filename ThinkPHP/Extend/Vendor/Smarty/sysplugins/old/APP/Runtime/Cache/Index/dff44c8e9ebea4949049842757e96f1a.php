<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html><html lang="zh-cn"><head><title>Ming依然 - 杨明的博客</title><meta name="keywords" content="杨明，杨明的博客，Ming依然，前端制作，前端开发，WEB前端，前端技术，前端开发，WEB前端开发，杨明的简历，resume，用户体验，网站策划，网站优化" /><meta name="description" content="杨明，杨明的博客杨明的生活，记录热爱前端制作，热爱视觉表现，热爱生活的学习过程，杨明的博客内容包含web前端设计php建站学习ps制作图片seo网站优化。" /><meta name="renderer" content="webkit"><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0"><meta property="qc:admins" content="436125133761524776654" /><link rel="stylesheet" href="__PUBLIC__/css/pintuer.css"><link rel="stylesheet" href="__PUBLIC__/css/index.css"><script>    var _hmt = _hmt || [];
    (function() {
      var hm = document.createElement("script");
      hm.src = "//hm.baidu.com/hm.js?75c4d1212e0e86f5b991bce6a20a8e82";
      var s = document.getElementsByTagName("script")[0]; 
      s.parentNode.insertBefore(hm, s);
    })();
    </script></head><body><!-- 导航 --><div class="container-layout mynav"><div class="line"><div class="navbar xb10 xb1-move"><div class="navbar-head"><button class="button icon-navicon" data-target="#navbar1"></button><a href="#" class="xb12 xl8"><img src="__PUBLIC__/images/logo.jpg" class="img-responsive shake-hover" alt="logo" /></a></div><div class="navbar-right hidden-s hidden-l bg-main login"><a href="javascript:;"><span id="login"></span></a><a href="javascript:;" onclick="AddFavorite(window.location,document.title)" target="_blank" class="icon-heart"> 收藏</a><script type="text/javascript" src="http://qzonestyle.gtimg.cn/qzone/openapi/qc_loader.js" data-appid="101209215" charset="utf-8"></script><script type="text/javascript">QC.Login({ btnId:"login" });</script></div></div></div><!-- line --><div class="line"><div class="xb8 xb1-move mymenu"><div class="navbar-body nav-navicon" id="navbar1"><ul class="nav nav-inline nav-menu"><li><a href="./"><i class=" icon-qrcode"></i><strong>首页</strong><i class=" icon-qrcode"></i></a></li><?php
 $_nav_cate = M('cate')->order("sort ASC")->limit("4")->select(); import('Class.Category', APP_PATH); $_nav_cate = Category::unlimitedCate($_nav_cate); foreach( $_nav_cate as $_nav_cate_v ) : extract($_nav_cate_v); $url = U('/list_'. $id); ?><li><a href="<?php echo ($url); ?>"><strong><?php echo ($name); ?></strong></a></li><?php  endforeach; ?><li><a href="http://mingresume.sinaapp.com" class="badge-corner" target="_blank">关于我<span style="font-size:12px;color:#fff;" class="badge bg-red">RESUME</span></a></li></ul></div></div></div><!-- line --></div><!-- 导航 --><div class="layout mybanner"><div class="banner"><div class="carousel"><div class="item"><img src="http://7u2jxw.com1.z0.glb.clouddn.com/mybannerone.jpg" class="img-responsive" alt="回眸青春" /></div><div class="item"><img src="http://7u2jxw.com1.z0.glb.clouddn.com/mybannertwo.jpg" class="img-responsive" alt="面对挑战" /></div></div></div></div><!-- 置顶精华或推荐 --><div class="layout bg myzhiding"><div class="line"><div class="xb7 xb1-move xl12 myleft"><?php if(is_array($zhiding)): foreach($zhiding as $key=>$v): ?><div class="line border-bottom"><div class="x12 mytitle" style="border-color:<?php echo ($v["attr"]["0"]["color"]); ?>;"><h4><?php if(is_array($v["attr"])): foreach($v["attr"] as $key=>$value): ?><lable style="color:<?php echo ($value["color"]); ?>">[<?php echo ($value["name"]); ?>] </lable><?php endforeach; endif; ?><a href="<?php echo U('/content_'. $v['id']);?>" class="title-a" target="_blank"><strong><?php echo ($v["title"]); ?></strong></a></h4><p>分类：<span class="tag bg-main"><?php echo ($v["sort"]); ?></span> | 时间：<?php echo (date('Y/m/d H:i',$v["time"])); ?> | <?php echo (days($v["time"])); ?></p></div></div><?php if($v['imgUrl'] == '__PUBLIC__/uploadImg/artical.jpg'): ?><div class="line mysummary"><div class="xb12 xl12 zhaiyao"><p class="icon-quote-left"><?php echo (change_substr($v["content"], 200)); ?></p><small><i class="icon-comment"></i> 评论：<span class="ds-thread-count" data-thread-key="<?php echo ($v["id"]); ?>" data-count-type="comments"></span> | <i class="icon-eye"></i> 阅读： <?php echo ($v["clicknum"]); ?> | <i class="icon-user"></i> 作者：<?php echo ($v["name"]); ?></small></div></div><?php elseif($v['imgUrl'] != '__PUBLIC__/uploadImg/artical.jpg'): ?><div class="line mysummary"><div class="xb4 xl12"><div class="img"><img src="<?php echo ($v["imgUrl"]); ?>" class="img-responsive radius" alt="<?php echo ($v["title"]); ?>"></div></div><div class="xb8 xl12 zhaiyao"><p class="icon-quote-left"><?php echo (change_substr($v["content"], 200)); ?></p><small><i class="icon-comment"></i> 评论：<span class="ds-thread-count" data-thread-key="<?php echo ($v["id"]); ?>" data-count-type="comments"></span> | <i class="icon-eye"></i> 阅读： <?php echo ($v["clicknum"]); ?> | <i class="icon-user"></i> 作者：<?php echo ($v["name"]); ?></small></div></div></elseif><?php endif; ?><div class="line myartical-foot"><div class="x12"><p class="icon-tag"> 标签：<?php if(is_array($v["tags"])): foreach($v["tags"] as $key=>$t): ?><span class="tag bg-gray"><?php echo ($t["name"]); ?></span>&nbsp;<?php endforeach; endif; ?><a href="<?php echo U('/content_'. $v['id']);?>" class="float-right" target="_blank"><i class="icon-share"></i> 阅读全文</a></p></div></div><!-- 一篇文章结束 --><?php endforeach; endif; ?></div><!-- xb7 --><div class="xb3 myright"><div class="line"><div class="xb12 xl12"><h4 class="icon-globe bg-main"> 图片新闻</h4><div class="banner myblock" data-pointer="1" data-style="border-main"><div class="carousel"><div class="item newsone"><img src="__PUBLIC__/images/123.jpg" class="img-responsive" alt=""><p></p></div><div class="item newstwo"><img src="__PUBLIC__/images/123.jpg" class="img-responsive" alt=""><p></p></div><div class="item newsthree"><img src="__PUBLIC__/images/123.jpg" class="img-responsive" alt=""><p></p></div><div class="item newsfour"><img src="__PUBLIC__/images/123.jpg" class="img-responsive" alt=""><p></p></div><div class="item newsfive"><img src="__PUBLIC__/images/123.jpg" class="img-responsive" alt=""><p></p></div></div></div></div><!-- 图片新闻 --><div class="x12"><div class="line myblock"><h4 class="icon-list bg-main"> 阅读排行</h4><?php echo W('Blog');?></div></div><!-- read --><!-- 我的标签 --><div class="x12 mytags"><div class="line mytaglist"><?php echo W('Tag');?></div></div><!-- 文章档案 --><div class="x12"><div class="line myblock"><h4 class="icon-table bg-main dangan"> 文章档案</h4><?php echo W('Dangan');?></div></div><!-- 最新评论 --><div class="x12"><div class="line myblock"><h4 class="icon-comments bg-main"> 最新评论</h4><!-- 多说最新评论 start --><div class="ds-recent-comments" data-num-items="5" data-show-avatars="1" data-show-time="1" data-show-title="1" data-show-admin="1" data-excerpt-length="70"></div><!-- 多说最新评论 end --></div></div><!-- 最新评论 --><div class="x12"><div class="line myblock"><h4 class="icon-user bg-main"> 访客统计</h4><p class="text-center"><a href="http://info.flagcounter.com/7MfP"><img src="http://s06.flagcounter.com/count2/7MfP/bg_FFFFFF/txt_000000/border_CCCCCC/columns_2/maxflags_8/viewers_3/labels_0/pageviews_1/flags_0/" alt="Flag Counter" border="0"></a></p></div></div></div></div></div><!-- line --></div><!-- 最新文章6篇 --><div class="layout new"><div class="xb10 xb1-move xl12"><div class="line"><h1 class="icon-book"> 最新文章</h1><p class="text-left">记录生活，记录思考，记录行踪，记录感悟，记录自己的一切。</p></div></div><div class="line"><div class="xb10 xb1-move xl12"><div class="line"><?php if(is_array($new)): foreach($new as $key=>$v): ?><div class="xb3 xl12 new-artical bg"><div class="img"><img src="<?php echo ($v["imgUrl"]); ?>" alt="<?php echo ($v["title"]); ?>" class="img-responsive"></div><div class="content"><a href="<?php echo U('/content_'. $v['id']);?>" target="_blank"><strong><i class="icon-pencil"></i><?php echo (change_substr($v["title"], 25)); ?></strong></a><p><?php echo (change_substr($v["content"], 40)); ?>...</p></div></div><?php endforeach; endif; ?></div></div></div></div><!-- 最新文章 --><script type="text/javascript">    var tourl = "<?php echo U('Index/Index/getTXnews');?>";
    function AddFavorite(sURL, sTitle)
    { try{
            window.external.addFavorite(sURL, sTitle);
         }catch (e){ try{
                        window.sidebar.addPanel(sTitle, sURL, "");
                        }catch (e){alert("加入收藏失败，请使用Ctrl+D进行添加");}}}
    var duoshuoQuery = {short_name:"mingcms"};
    (function() {
        var ds = document.createElement('script');
        ds.type = 'text/javascript';ds.async = true;
        ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
        ds.charset = 'UTF-8';
        (document.getElementsByTagName('head')[0] 
         || document.getElementsByTagName('body')[0]).appendChild(ds);
    })();
    </script><!-- 页脚 --><div class="layout myfoot"><p class="text-center"><a href="./sitemap.html" target="_blank" class="icon-money"> 网站地图</a><a href="<?php echo U('./list_23');?>" target="_blank" class=" icon-cog"> 修改日志</a><a href="http://dn-mingzi.qbox.me/" target="_blank" class="icon-home"> 我的主页7.0</a><a href="http://www.ymblog.net/public/demo/class2" target="_blank" class="icon-check"> 班级主页2.0</a></p><p class="text-center">&copy;版权所有 2014-2015 本站由ThinkPHP强力驱动，All Designed By <a href="http://myfirsthome.sinaapp.com" target="_blank">Ming依然</a>.</p></div><script src="__PUBLIC__/js/jquery.js"></script><script src="__PUBLIC__/js/pintuer.js"></script><script src="__PUBLIC__/js/index.js"></script></body></html>