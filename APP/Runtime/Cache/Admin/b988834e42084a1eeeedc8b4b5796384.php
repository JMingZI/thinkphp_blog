<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html><html><head><title>网站内容管理系统</title><meta content="text/html; charset=utf-8" http-equiv="Content-Type"><meta name="keywords" content="网站内容管理系统"><meta name="discription" content="网站内容管理系统"><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/common.css" /><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/system.css" /><script src="js/jquery.min.js" type="text/javascript"></script><script type="text/javascript">$(document).ready(function(){
	$("#selectall").click(function(){
	var s=$(this).attr("src");
	if(s.indexOf("up")>0)
	else{
			$(".sysinfo .chk").attr("src","__PUBLIC__/images/index/ck_up.gif")
			$(".sysinfo input:checkbox").removeAttr("checked");
		}
	});
	$(".list .chk").click(function(){
		var s=$(this).attr("src");
		if(s.indexOf("up")>0)
		else{
				$(this).attr("src","__PUBLIC__/images/index/ck_up.gif")
				//$(".sysinfo input:checkbox").removeAttr("checked");
			}
	});
});
</script></head><body id="sysmain"><div class="content"><div class="syshead"><div class="clearfix"><p class="left"><span>MingCMS</span>内容管理系统</p><p class="right"><span>管理员</span><a href="javascript:void(0);">Ming</a><a class="outsys" title="退出系统" href="<?php echo U('Admin/Index/logout', '', '');?>"><img src="__PUBLIC__/images/index/outsys.gif" width="16" height="16" alt="" />退出</a></p></div></div><div class="sysmain clearfix"><div class="sysmenua"><ul><li style="border:0px;"><a class="current" href="<?php echo U(GROUP_NAME.'/Index/index_inner');?>" target="iframe_a">后台首页</a></li><li class="li-tag"><a href="javascript:void(0);">文章管理</a></li></ul><a href="<?php echo U(GROUP_NAME.'/Artical/articalList');?>" target="iframe_a"><div class="a-tag">文章列表</div></a><a href="<?php echo U(GROUP_NAME.'/Artical/addArtical');?>" target="iframe_a"><div class="a-tag">添加文章</div></a><a href="<?php echo U(GROUP_NAME.'/Artical/delList');?>" target="iframe_a"><div class="a-tag">回收站</div></a><ul><li class="li-tag"><a href="javascript:void(0);">属性管理</a></li></ul><a href="<?php echo U(GROUP_NAME.'/Attribute/attrList');?>" target="iframe_a"><div class="a-tag">属性列表</div></a><a href="<?php echo U(GROUP_NAME.'/Attribute/addAttr');?>" target="iframe_a"><div class="a-tag">添加属性</div></a><ul><li class="li-tag"><a href="javascript:void(0);">标签管理</a></li></ul><a href="<?php echo U(GROUP_NAME.'/Tag/tagList');?>" target="iframe_a"><div class="a-tag">标签列表</div></a><ul><li class="li-tag"><a href="javascript:void(0);">分类管理</a></li></ul><a href="<?php echo U(GROUP_NAME.'/Category/cateList');?>" target="iframe_a"><div class="a-tag">分类列表</div></a><a href="<?php echo U(GROUP_NAME.'/Category/addCate');?>" target="iframe_a"><div class="a-tag">添加分类</div></a><ul><li class="li-tag"><a href="javascript:void(0);">系统设置</a></li></ul><a href="<?php echo U(GROUP_NAME . '/System/listNum');?>" target="iframe_a"><div class="a-tag">系统设置</div></a><a href="<?php echo U(GROUP_NAME . '/Artical/zhuaquArtical');?>" target="iframe_a"><div class="a-tag">文章抓取</div></a></div><div class="sysinfo"><iframe src="<?php echo U(GROUP_NAME.'/Index/index_inner');?>" width="100%" height="100%" frameborder="0" name="iframe_a"></iframe></div></div></div></body></html>