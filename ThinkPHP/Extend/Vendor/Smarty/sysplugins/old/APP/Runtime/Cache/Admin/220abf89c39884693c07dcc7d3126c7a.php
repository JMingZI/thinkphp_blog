<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html><html><head><title></title><meta charset="utf-8"><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/common.css"><link rel="stylesheet" href="__ROOT__/Data/kindeditor/themes/default/default.css" /><link rel="stylesheet" href="__ROOT__/Data/kindeditor/plugins/code/prettify.css" /><script src="__ROOT__/Data/kindeditor/jquery.js"></script><script type="text/javascript" charset="utf-8" src="__ROOT__/Data/kindeditor/kindeditor.js"></script><script type="text/javascript" charset="utf-8" src="__ROOT__/Data/kindeditor/lang/zh_CN.js"></script><script type="text/javascript" charset="utf-8" src="__ROOT__/Data/kindeditor/plugins/code/prettify.js"></script><script type="text/javascript">		KindEditor.ready(function(K) {
            window.editor = K.create('#content', { 
            	width:'100%',
            	height:'300px' ,
				cssPath : '__ROOT__/Data/kindeditor/plugins/code/prettify.css',
            	uploadJson : '__ROOT__/Data/kindeditor/php/upload_json.php',
                fileManagerJson : '__ROOT__/Data/kindeditor/php/file_manager_json.php',
                allowFileManager : true,
			}); 
            prettyPrint(); 
   		});
	</script></head><body><form method="post" action="<?php echo U(GROUP_NAME . '/Artical/addHandle');?>" enctype="multipart/form-data"><table><tr><th colspan="2"><h2>添加文章</h2></th></tr><tr><td class="td-right">文章标题</td><td class="td-left"><input type="text" name="title" value="" class="input"></td></tr><tr><td class="td-right">文章缩略图</td><td class="td-left"><input type="file" name="img" class="input"></td></tr><tr><td class="td-right">文章标签</td><td class="td-left"><input type="text" name="tags" value="" class="input1">&nbsp;&nbsp;<span style="color:red;">输入多个标签以'/'分开</span>&nbsp;&nbsp;<span style="color:green;">你也可以从已有标签中选择</span><br/><?php if(is_array($tags)): foreach($tags as $key=>$v): if($v["name"] != null): ?><input type="checkbox" name="tags_arr[]" value="<?php echo ($v["id"]); ?>"><?php echo ($v["name"]); ?> &nbsp;&nbsp;<?php endif; endforeach; endif; ?></td></tr><tr><td class="td-right">文章作者</td><td class="td-left"><input class="input" type="text" name="name" value=""></td></tr><tr><td colspan="2"><textarea id="content" name="content" value=""></textarea></td></tr><tr><td class="td-right">添加分类</td><td class="td-left"><select class="input2" name="sortid"><option value="没有选择分类">==选择分类==</option><?php if(is_array($cate)): foreach($cate as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["name"]); ?></option><?php endforeach; endif; ?></select></td></tr><tr><td class="td-right">添加属性</td><td class="td-left"><?php if(is_array($attr)): foreach($attr as $key=>$v): ?><input type="checkbox" name="aid[]" value="<?php echo ($v["id"]); ?>"><?php echo ($v["name"]); endforeach; endif; ?></td></tr><tr><td colspan="2" align="center"><input class="input3" type="submit" value="提交"></td></tr></table></form></body></html>