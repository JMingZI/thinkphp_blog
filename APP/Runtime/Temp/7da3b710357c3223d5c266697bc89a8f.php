<?php
//000000086400a:6:{i:0;a:12:{s:2:"id";s:3:"189";s:6:"sortid";s:2:"11";s:4:"name";s:11:"JMing依然";s:5:"title";s:54:"由css resite想到的深入理解margin及em的含义";s:7:"content";s:12040:"&lt;span style=&quot;font-size:16px;&quot;&gt;&lt;strong&gt;由css resite想到的深入理解margin及em的含义&lt;/strong&gt;&lt;/span&gt;&lt;br /&gt;
&lt;br /&gt;
&lt;span style=&quot;font-size:16px;&quot;&gt;经常看到这样语句，*{ margin:0px;padding:0px; }，用起来很方便吧？&lt;/span&gt;&lt;br /&gt;
&lt;span style=&quot;font-size:16px;&quot;&gt;由于学习前端的门槛低，我一直找不到区别于那些用DW的前端的所在点，我总觉得我是用记事本写代码的，我的水平及理解绝对比那些用DW的人呀更胜一筹。但区别在哪里呢？最近，我似乎明白了，拿css来说，前面的很长一段时间，我都是在横向学习css，不断的学习新的东西，制作新的美的页面，我还洋洋得意的说我前端css学的good了，最近我才恍然大悟到，这个阶段，这种表现只不过是学习CSS的一个初级阶段，我并没有进阶，并没有有多大的提高，这也正是，别人问我你能说说你在学习css这方面有哪些深刻的见解？我有吗？我没有，学习几个新属性制作几个炫酷页面就叫做深刻了吗？错的，谁都可以做出很炫很美很清爽的页面，这也就是，当你面对*{ margin:0px;padding:0px; }这行语句的时候，你会觉得非常好用，在哪里用都特别方便，特别的顺手，而你说不出个所以然来，说不出为什么要这么用，说不出你这样用了，浏览器做了哪些事情。&lt;/span&gt;&lt;br /&gt;
&lt;br /&gt;
&lt;span style=&quot;font-size:16px;&quot;&gt;这个道理也是昨天晚上才想明白的，作为立志与前端工程师的我们，你应该清楚，*{ margin:0px;padding:0px; }这样写真的好么？&lt;/span&gt;&lt;br /&gt;
&lt;br /&gt;
&lt;span style=&quot;font-size:16px;&quot;&gt;页面默认的margin值&lt;/span&gt;&lt;br /&gt;
&lt;span style=&quot;font-size:16px;&quot;&gt; 首先要知道，默认的只具有margin值的元素有哪些，&lt;/span&gt;&lt;br /&gt;
&lt;span style=&quot;font-size:16px;&quot;&gt; body,h1-h6,p,div,dl,dd,pre,form,hr,blockquote&lt;/span&gt;&lt;br /&gt;
&lt;br /&gt;
&lt;span style=&quot;font-size:16px;&quot;&gt; body	: 默认为8px &amp;nbsp;/ &amp;nbsp;IE67是10px&lt;/span&gt;&lt;br /&gt;
&lt;span style=&quot;font-size:16px;color:#E56600;&quot;&gt; h1		: margin-top/margin-bottom 0.67em&lt;/span&gt;&lt;br /&gt;
&lt;span style=&quot;font-size:16px;color:#003399;&quot;&gt; h2		: margin-top/margin-bottom 0.83em&lt;/span&gt;&lt;br /&gt;
&lt;span style=&quot;font-size:16px;color:#003399;&quot;&gt; h3		: margin-top/margin-bottom 1em&lt;/span&gt;&lt;br /&gt;
&lt;span style=&quot;font-size:16px;color:#003399;&quot;&gt; h4		: margin-top/margin-bottom 1.33em&lt;/span&gt;&lt;br /&gt;
&lt;span style=&quot;font-size:16px;color:#003399;&quot;&gt; h5		: margin-top/margin-bottom 1.67em&lt;/span&gt;&lt;br /&gt;
&lt;span style=&quot;font-size:16px;color:#003399;&quot;&gt; h6		: margin-top/margin-bottom 2.33em &lt;/span&gt;&lt;br /&gt;
&lt;span style=&quot;font-size:16px;color:#003399;&quot;&gt; p &amp;nbsp; &amp;nbsp; &amp;nbsp; : margin-top/margin-bottom 1em&lt;/span&gt;&lt;br /&gt;
&lt;span style=&quot;font-size:16px;color:#003399;&quot;&gt; dl		: margin-top/margin-bottom 1em&lt;/span&gt;&lt;br /&gt;
&lt;span style=&quot;font-size:16px;color:#003399;&quot;&gt; dd		: margin-start:40px;&lt;/span&gt;&lt;br /&gt;
&lt;span style=&quot;font-size:16px;color:#003399;&quot;&gt; pre		: margin-top/margin-bottom 1em&lt;/span&gt;&lt;br /&gt;
&lt;span style=&quot;font-size:16px;color:#003399;&quot;&gt; form &amp;nbsp; &amp;nbsp;：margin-top 0em&lt;/span&gt;&lt;br /&gt;
&lt;p&gt;
	&lt;span style=&quot;font-size:16px;color:#003399;&quot;&gt; hr		: margin : 0.5em auto &amp;nbsp; / border:1px&lt;/span&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;span style=&quot;font-size:16px;color:#003399;&quot;&gt;&lt;br /&gt;
&lt;/span&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;span style=&quot;font-size:16px;color:#003399;&quot;&gt;&lt;img src=&quot;/Data/kindeditor/attached/image/20150531/20150531130234_37268.jpg&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/Data/kindeditor/php/../attached/image/20150531/20150531130247_89211.png&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/Data/kindeditor/php/../attached/image/20150531/20150531130248_33752.jpg&quot; alt=&quot;&quot; /&gt;&lt;br /&gt;
&lt;/span&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;br /&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;br /&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;br /&gt;
&lt;/p&gt;
&lt;span style=&quot;font-size:16px;color:#E56600;&quot;&gt; 默认同时具有margin和padding的元素有哪些&lt;/span&gt;&lt;br /&gt;
&lt;span style=&quot;font-size:16px;color:#000000;&quot;&gt; ul,ol	: margin: 1em 0px&lt;/span&gt;&lt;br /&gt;
&lt;span style=&quot;font-size:16px;color:#000000;&quot;&gt; &amp;nbsp;padding-left:40px&lt;/span&gt;&lt;br /&gt;
&lt;br /&gt;
&lt;span style=&quot;font-size:16px;color:#000000;&quot;&gt;&lt;strong&gt;至于这里的em是什么意思，&lt;/strong&gt;&lt;span style=&quot;color:#E53333;&quot;&gt;&lt;a href=&quot;http://www.w3cplus.com/css/px-to-em&quot; target=&quot;_blank&quot;&gt;&lt;span style=&quot;color:#E53333;&quot;&gt;&lt;strong&gt;请看这篇文章。&lt;/strong&gt;&lt;/span&gt;&lt;/a&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;
&lt;p&gt;
	&lt;span style=&quot;font-size:16px;color:#000000;&quot;&gt;至此，我们应该明白，*{ margin:0px;padding:0px; }耗费了多少资源？一个HTML文档有多少标签？每个标签都需要浏览器来渲染一遍这个值，多浪费是不是？&lt;/span&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;span style=&quot;font-size:16px;color:#000000;&quot;&gt;&lt;br /&gt;
&lt;/span&gt;
&lt;/p&gt;
&lt;p&gt;
	________________________________________________________________________________________
&lt;/p&gt;
&lt;p&gt;
	&lt;br /&gt;
&lt;/p&gt;
&lt;span style=&quot;font-size:18px;color:#000000;&quot;&gt;&lt;strong&gt;说完了CSS RESITE 来讨论说说margin。&lt;/strong&gt;&lt;/span&gt;&lt;br /&gt;
&lt;br /&gt;
&lt;p&gt;
	&lt;span style=&quot;font-size:16px;color:#000000;&quot;&gt;默认的块状元素是可以随意设置margin的上下左右边距。但你是否出现类似的情况，如图，&lt;/span&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;img src=&quot;/Data/kindeditor/attached/image/20150531/20150531130037_91977.jpg&quot; width=&quot;700&quot; height=&quot;113&quot; alt=&quot;&quot; /&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;br /&gt;
&lt;/p&gt;
&lt;p&gt;
&lt;pre class=&quot;prettyprint linenums lang-css&quot;&gt;.box{ width:100%;height:800px;background: #22a7f0; }
 .box&amp;gt;p{ margin-top: 50px; }&lt;/pre&gt;
&lt;/p&gt;
&lt;br /&gt;
&lt;span style=&quot;font-size:16px;color:#000000;&quot;&gt;一个div中，一个p标签，设置p标签margin-top:50px;后，并没有想象中的效果，而是父元素margin-top了一个值。这是为什么呢？&lt;/span&gt;&lt;br /&gt;
&lt;span style=&quot;font-size:16px;color:#000000;&quot;&gt;（这种情况在IE67中不会出现，因为IE的hasLayout渲染导致了这个“表现良好”的外观。&lt;a href=&quot;http://www.w3school.com.cn/css/css_margin_collapsing.asp&quot; target=&quot;_blank&quot;&gt;&lt;span style=&quot;color:#E53333;&quot;&gt;详细请看这篇文章&lt;/span&gt;&lt;/a&gt;）&lt;/span&gt;&lt;br /&gt;
&lt;br /&gt;
&lt;span style=&quot;font-size:16px;color:#000000;&quot;&gt;其实你应该想想在这里为什么要用margin，而不用padding，我想你认为这2个效果实现是一样的，，请看这篇文章，何时用margin，何时用padding。首先你得明白，默认的块状元素都是包含有margin，border，padding的，而margin的含义，是指在存在border和padding的基础上，与外部元素的间距。那么我们这里是没有border或者padding的，如果在这里你这只border-top:1px red solid;则正常了。但真的是那样吗？如果这样，那我们每次都要附加一个border或者padding，增加代码量，多不好。其实你应该想到，这里应该使用padding-top,效果将会非常好。那么何时用margin，何时用padding？&lt;/span&gt;&lt;br /&gt;
&lt;br /&gt;
&lt;span style=&quot;font-size:16px;color:#000000;&quot;&gt;何时应当使用margin：&lt;/span&gt;&lt;br /&gt;
&lt;span style=&quot;font-size:16px;color:#000000;&quot;&gt;1、需要在border外侧添加空白时。&lt;/span&gt;&lt;br /&gt;
&lt;span style=&quot;font-size:16px;color:#000000;&quot;&gt;2、空白处不需要背景（色）时。&lt;/span&gt;&lt;br /&gt;
&lt;span style=&quot;font-size:16px;color:#000000;&quot;&gt;3、上下相连的两个盒子之间的空白，需要相互抵消时。如15px + 20px的margin，将得到20px的空白。（注：当两个垂直外边距相遇时，它们将形成一个外边距。合并后的外边距的高度等于两个发生合并的外边距的高度中的较大者。你可以查看W3Shool CSS外边距合并了解这个基本知识。）&lt;/span&gt;&lt;br /&gt;
&lt;br /&gt;
&lt;span style=&quot;font-size:16px;color:#000000;&quot;&gt;何时应当时用padding：&lt;/span&gt;&lt;br /&gt;
&lt;span style=&quot;font-size:16px;color:#000000;&quot;&gt;1、需要在border内测添加空白时。&lt;/span&gt;&lt;br /&gt;
&lt;span style=&quot;font-size:16px;color:#000000;&quot;&gt;2、空白处需要背景（色）时。&lt;/span&gt;&lt;br /&gt;
&lt;span style=&quot;font-size:16px;color:#000000;&quot;&gt;3、上下相连的两个盒子之间的空白，希望等于两者之和时。如15px + 20px的padding，将得到35px的空白。&lt;/span&gt;&lt;br /&gt;
&lt;br /&gt;
&lt;span style=&quot;font-size:16px;color:#000000;&quot;&gt;仔细对比下，在这里我们应该用padding吧？总结一下，margin是用来分开互不相干的元素，在这里p是div的子元素，而padding，用于元素与内容之间的间隔。&lt;/span&gt;&lt;br /&gt;
&lt;br /&gt;
&lt;span style=&quot;font-size:16px;color:#000000;&quot;&gt;默认的行内元素&lt;/span&gt;&lt;br /&gt;
&lt;br /&gt;
&lt;span style=&quot;font-size:16px;color:#000000;&quot;&gt; span,a,strong,label &amp;nbsp; &amp;nbsp;margin-top/margin-bottom对内联元素没有多大实际效果，但可影响左右边距&lt;/span&gt;&lt;br /&gt;
&lt;p&gt;
	&lt;span style=&quot;font-size:16px;color:#000000;&quot;&gt; img|input|select|textarea|button|虽然是内联元素，也称之为置换对象,因为他们具有inline-block的属性，有自己的宽高，还可以定义margin的上下左右边距。&lt;/span&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;span style=&quot;font-size:16px;color:#000000;&quot;&gt;&lt;br /&gt;
&lt;/span&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;span style=&quot;font-size:18px;line-height:24px;&quot;&gt;&lt;strong&gt;参考：&lt;/strong&gt;&lt;/span&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;span style=&quot;font-size:18px;line-height:24px;&quot;&gt;&lt;strong&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;/strong&gt;&lt;/span&gt;
&lt;/p&gt;
&lt;h2 style=&quot;font-size:28px;font-family:Geneva, Verdana, sans-serif;vertical-align:baseline;color:#333333;background-color:#FFFFFF;&quot;&gt;
	&lt;p&gt;
		&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;a href=&quot;http://www.hicss.net/use-margin-or-padding/&quot;&gt;&lt;strong&gt;用Margin还是用Padding&lt;/strong&gt;&lt;/a&gt;&lt;strong&gt;&amp;nbsp;&lt;/strong&gt;&lt;/span&gt;
	&lt;/p&gt;
	&lt;p&gt;
		&lt;a href=&quot;http://www.hicss.net/do-not-tell-me-you-understand-margin/&quot;&gt;&lt;span style=&quot;font-size:16px;&quot;&gt;&lt;strong&gt;不要告诉我你懂margin&lt;/strong&gt;&lt;/span&gt;&lt;/a&gt;
	&lt;/p&gt;
	&lt;p&gt;
		&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;br /&gt;
&lt;/span&gt;
	&lt;/p&gt;
	&lt;p&gt;
		&lt;br /&gt;
	&lt;/p&gt;
&lt;/h2&gt;
&lt;p&gt;
	&lt;span style=&quot;font-size:18px;line-height:24px;&quot;&gt;&lt;strong&gt;&lt;br /&gt;
&lt;/strong&gt;&lt;/span&gt;
&lt;/p&gt;
&lt;br /&gt;
&lt;br /&gt;
&lt;span style=&quot;font-size:16px;color:#E56600;&quot;&gt;&lt;/span&gt;";s:4:"time";s:10:"1433048764";s:8:"clicknum";s:2:"34";s:6:"imgUrl";s:32:"/Public/uploadImg/1433048764.png";s:3:"del";s:1:"0";s:4:"attr";a:1:{i:0;a:3:{s:2:"id";s:1:"1";s:4:"name";s:6:"置顶";s:5:"color";s:3:"red";}}s:4:"sort";s:6:"随笔";s:4:"tags";a:4:{i:0;a:2:{s:2:"id";s:2:"81";s:4:"name";s:11:"em的含义";}i:1;a:2:{s:2:"id";s:2:"82";s:4:"name";s:6:"margin";}i:2;a:2:{s:2:"id";s:2:"83";s:4:"name";s:9:"cssResite";}i:3;a:2:{s:2:"id";s:2:"69";s:4:"name";s:3:"css";}}}i:1;a:12:{s:2:"id";s:3:"188";s:6:"sortid";s:2:"12";s:4:"name";s:10:"Ming依然";s:5:"title";s:40:"IE6+未知尺寸元素水平垂直居中";s:7:"content";s:9115:"&lt;h3 style=&quot;font-family:微软雅黑;&quot;&gt;
	首先讨论在IE8以上（也就是支持伪元素after的基础上）的2种情况
&lt;/h3&gt;
&lt;p style=&quot;font-family:微软雅黑;font-size:medium;&quot;&gt;
	当有一段不知道长度大小的文字在你面前，你需要使它垂直居中的时候，你肯定会想到：&lt;br /&gt;
1、text-align:center;水平居中没错。&lt;br /&gt;
2、垂直居中，可以使用绝对定位，margin-left,margin-top负值在这里可以实现吗？答案是不可以，因为文字多少你不知道。那么绝对定位就不好使了。&lt;br /&gt;
3、还有人应该想到line-height:;这种情况下但是如果这个文字换行了呢？所以也不行。
&lt;/p&gt;
&lt;p style=&quot;font-family:微软雅黑;font-size:medium;&quot;&gt;
	那么接下来就是要说的这个问题了，使用display:inline-block;可以实现兼容IE6以上。
&lt;/p&gt;
&lt;div class=&quot;desc&quot; style=&quot;font-family:微软雅黑;font-size:medium;background:#AAAAAA;&quot;&gt;
	&lt;p&gt;
		那么什么是display:inline-block;？我们来了解了解。。。&lt;br /&gt;
早在 IE 5.5 就开始支持 inline-block了，同时我们知道 IE6、7 中 display:inline-block 是可以触发 hasLayout 的，触发了 hasLayout 的元素表现出来的特征就是一个独立的矩形容器，可以设置宽高而且不受外部元素的影响。
	&lt;/p&gt;
	&lt;p&gt;
		：inline-block 后的元素创建了一个行级的块容器，该元素内部（内容）被格式化成一个块元素，同时元素本身则被格式化成一个行内元素。直白一点的意思就是：inline-block 的元素既具有 block 元素可以设置宽高的特性，同时又具有 inline 元素默认不换行的特性。当然不仅仅是这些特性，比如 inline-block 元素也可以设置 vertical-align 属性。简而言之： inline-block 后的元素就是一个格式化为行内元素的块容器( Block container )
	&lt;/p&gt;
&lt;/div&gt;
&lt;p style=&quot;font-family:微软雅黑;&quot;&gt;
	&lt;span style=&quot;font-size:16px;&quot;&gt;请看IE8以上使行内元素垂直居中的效果。。。&lt;/span&gt;
&lt;/p&gt;
&lt;p style=&quot;font-family:微软雅黑;&quot;&gt;
	&lt;br /&gt;
&lt;/p&gt;
&lt;p style=&quot;font-family:微软雅黑;&quot;&gt;
	&lt;img src=&quot;http://www.ymblog.net/Data/kindeditor/attached/image/20150528/20150528215907_55867.png&quot; alt=&quot;&quot; /&gt;
&lt;/p&gt;
&lt;p style=&quot;font-family:微软雅黑;&quot;&gt;
	&lt;span style=&quot;font-size:medium;line-height:normal;&quot;&gt;代码如下：&lt;/span&gt;
&lt;/p&gt;
&lt;p style=&quot;font-family:微软雅黑;&quot;&gt;
	&lt;br /&gt;
&lt;/p&gt;
&lt;p style=&quot;font-family:微软雅黑;&quot;&gt;
	&lt;img src=&quot;http://www.ymblog.net/Data/kindeditor/attached/image/20150528/20150528215713_27800.png&quot; width=&quot;700&quot; height=&quot;167&quot; alt=&quot;&quot; /&gt;
&lt;/p&gt;
&lt;p style=&quot;font-family:微软雅黑;&quot;&gt;
	&lt;br /&gt;
&lt;/p&gt;
&lt;p style=&quot;font-family:微软雅黑;&quot;&gt;
	&lt;br /&gt;
&lt;/p&gt;
&lt;h3 style=&quot;font-family:微软雅黑;&quot;&gt;
	当元素发生换行之后，应该这样处理。。。
&lt;/h3&gt;
&lt;img src=&quot;http://www.ymblog.net/Data/kindeditor/attached/image/20150528/20150528220025_31879.png&quot; alt=&quot;&quot; /&gt;&lt;span&gt;&lt;/span&gt;
&lt;p&gt;
	&lt;br /&gt;
&lt;/p&gt;
&lt;p style=&quot;font-family:微软雅黑;&quot;&gt;
	&lt;span style=&quot;font-size:medium;line-height:normal;&quot;&gt;代码如下：&lt;/span&gt;
&lt;/p&gt;
&lt;p style=&quot;font-family:微软雅黑;&quot;&gt;
	&lt;img src=&quot;http://www.ymblog.net/Data/kindeditor/attached/image/20150528/20150528215713_80169.png&quot; width=&quot;700&quot; height=&quot;231&quot; alt=&quot;&quot; /&gt;
&lt;/p&gt;
&lt;p style=&quot;font-family:微软雅黑;&quot;&gt;
	&lt;br /&gt;
&lt;/p&gt;
&lt;p style=&quot;font-family:微软雅黑;&quot;&gt;
	&lt;span style=&quot;font-size:medium;line-height:normal;&quot;&gt;为什么要这样处理呢？你应该想到，既然是换行了，那就是说明我的这个伪元素after和这段文字不在一个line box里了，应该被挤下去了，如图：&lt;/span&gt;
&lt;/p&gt;
&lt;p style=&quot;font-family:微软雅黑;&quot;&gt;
	&lt;img src=&quot;http://www.ymblog.net/Data/kindeditor/attached/image/20150528/20150528215714_62388.png&quot; alt=&quot;&quot; /&gt;
&lt;/p&gt;
&lt;p style=&quot;font-family:微软雅黑;&quot;&gt;
	&lt;br /&gt;
&lt;/p&gt;
&lt;p style=&quot;font-family:微软雅黑;&quot;&gt;
	&lt;br /&gt;
&lt;/p&gt;
&lt;p style=&quot;font-family:微软雅黑;font-size:medium;&quot;&gt;
	有人肯定也已经发现，width已经被设置为0了，应该不会被挤下去啊？这就涉及到了inline-block使元素之间产生间隙，而IE6、7，IE8（Q）中：inline 元素会产生空隙，block 元素不会产生空隙。也就是说，因为这个间隙的存在，就把我这个伪元素参照物给挤下去了。
&lt;/p&gt;
&lt;p style=&quot;font-family:微软雅黑;font-size:medium;&quot;&gt;
	在我们这里的处理是，将父级的字体设置为0，将元素的字体设置为正常，就可以去除inline-block产生的间隙。
&lt;/p&gt;
&lt;p style=&quot;font-family:微软雅黑;font-size:medium;background:#AAAAAA;&quot;&gt;
	产生间隙的根本原因是：HTML 中的换行符、空格符、制表符等产生了空白符，而这些归根结底都是字符，那么它们的大小都是受 font-size 来控制的，字体大小直接导致 inline 或者 inline-block 后元素之间空隙的大小，把 inline-block 元素间的空隙认为总是某个固定大小是错误的。
&lt;/p&gt;
&lt;p style=&quot;font-family:微软雅黑;font-size:medium;&quot;&gt;
	这只是在IE8以上的浏览器上，但是，IE8 以上支持 font-size:0; IE6、7 inline 元素 inline-block 后设置 font-size:0 始终有 1px 的空隙。这里就要用到letter-spacing 和 word-spacing了。&lt;br /&gt;
letter-spacing : normal | length （检索或设置对象中的文字之间的间隔）&lt;br /&gt;
word-spacing : normal | length（检索或设置对象中的单词之间插入的空隔）
&lt;/p&gt;
&lt;p style=&quot;font-family:微软雅黑;font-size:medium;&quot;&gt;
	Safari 中 letter-spacing 负值的绝对值大于空隙大小后，内部会发生重叠。而word-spacing不会。那就好办了。
&lt;/p&gt;
&lt;p style=&quot;font-family:微软雅黑;font-size:medium;color:red;&quot;&gt;
	去除 inline-block 空隙终极解决方案
&lt;/p&gt;
&lt;img src=&quot;http://www.ymblog.net/Data/kindeditor/attached/image/20150528/20150528215714_93916.png&quot; alt=&quot;&quot; /&gt;&lt;span&gt;&lt;/span&gt;
&lt;p style=&quot;font-family:微软雅黑;&quot;&gt;
	&lt;br /&gt;
&lt;/p&gt;
&lt;p style=&quot;font-family:微软雅黑;&quot;&gt;
	&lt;span style=&quot;font-size:medium;line-height:normal;&quot;&gt;解决了inline-block的间隙问题，接着前面说的IE8及以下不支持伪元素的办法，我们可以在元素p后设置一个隐藏的span来当作参照物即可。&lt;/span&gt;
&lt;/p&gt;
&lt;p style=&quot;font-family:微软雅黑;&quot;&gt;
	&lt;img src=&quot;http://www.ymblog.net/Data/kindeditor/attached/image/20150528/20150528220310_73149.png&quot; width=&quot;700&quot; height=&quot;95&quot; alt=&quot;&quot; /&gt;
&lt;/p&gt;
&lt;p style=&quot;font-family:微软雅黑;&quot;&gt;
	&lt;br /&gt;
&lt;/p&gt;
&lt;p style=&quot;font-family:微软雅黑;&quot;&gt;
	&lt;span style=&quot;font-size:medium;line-height:normal;&quot;&gt;CSS代码如下：&lt;/span&gt;
&lt;/p&gt;
&lt;p style=&quot;font-family:微软雅黑;&quot;&gt;
	&lt;img src=&quot;http://www.ymblog.net/Data/kindeditor/attached/image/20150528/20150528215717_13919.png&quot; alt=&quot;&quot; /&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;br /&gt;
&lt;/p&gt;
&lt;p style=&quot;font-family:微软雅黑;&quot;&gt;
	&lt;br /&gt;
&lt;/p&gt;
&lt;h3 style=&quot;font-family:微软雅黑;color:red;&quot;&gt;
	终极css代码兼容所有的：
&lt;/h3&gt;
&lt;img src=&quot;http://www.ymblog.net/Data/kindeditor/attached/image/20150528/20150528215717_70526.jpg&quot; width=&quot;700&quot; height=&quot;498&quot; alt=&quot;&quot; /&gt;&lt;span&gt;&lt;/span&gt;
&lt;p&gt;
	&lt;br /&gt;
&lt;/p&gt;
&lt;p style=&quot;font-family:微软雅黑;&quot;&gt;
	&lt;br /&gt;
&lt;/p&gt;
&lt;p style=&quot;font-family:微软雅黑;&quot;&gt;
	&lt;span style=&quot;font-size:16px;&quot;&gt;参考：&lt;/span&gt;
&lt;/p&gt;
&lt;p style=&quot;font-family:微软雅黑;&quot;&gt;
	&lt;span style=&quot;font-size:16px;&quot;&gt;&lt;a href=&quot;http://demo.doyoe.com/css/alignment/&quot;&gt;&lt;span style=&quot;color:#E53333;&quot;&gt;未知尺寸元素水平垂直居中&lt;/span&gt;&lt;/a&gt;&lt;br /&gt;
&lt;a href=&quot;http://www.iyunlu.com/view/css-xhtml/64.html&quot;&gt;&lt;span style=&quot;color:#E53333;&quot;&gt;inline-block 前世今生&lt;/span&gt;&lt;/a&gt;&lt;/span&gt;
&lt;/p&gt;";s:4:"time";s:10:"1432821984";s:8:"clicknum";s:2:"39";s:6:"imgUrl";s:32:"/Public/uploadImg/1432821984.png";s:3:"del";s:1:"0";s:4:"attr";a:1:{i:0;a:3:{s:2:"id";s:1:"1";s:4:"name";s:6:"置顶";s:5:"color";s:3:"red";}}s:4:"sort";s:9:"web前端";s:4:"tags";a:2:{i:0;a:2:{s:2:"id";s:2:"80";s:4:"name";s:12:"inline-block";}i:1;a:2:{s:2:"id";s:2:"69";s:4:"name";s:3:"css";}}}i:2;a:12:{s:2:"id";s:3:"187";s:6:"sortid";s:2:"11";s:4:"name";s:10:"Ming依然";s:5:"title";s:54:"湖南科技大学思政课题管理系统设计方案";s:7:"content";s:2044:"&lt;p&gt;
	&lt;span style=&quot;font-size:14px;&quot;&gt;湖南科技大学思政课题管理系统设计方案&lt;/span&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;ol&gt;
		&lt;li&gt;
			&lt;span style=&quot;font-size:14px;line-height:1.5;&quot;&gt;首先我的风格确立，不能太传统，既要体现大图的效果，又不能和很多网站一样，导航放在最上面。&lt;/span&gt;
		&lt;/li&gt;
		&lt;li&gt;
			&lt;span style=&quot;font-size:14px;line-height:21px;&quot;&gt;既然有大图那我得找科大的图片素材，找了许久，没发现有很适合，很清晰的，果断放弃很大很大的全屏图了，既然是思政的话，那肯定严肃的调调会多一些，那么颜色肯定要采用深色的，确立了颜色后，实在找不到好的图片素材，逛逛优设，bootstrap优站吧，果然有所想要的，拿来用~~&lt;/span&gt;
		&lt;/li&gt;
		&lt;li&gt;
			&lt;span style=&quot;font-size:14px;line-height:21px;&quot;&gt;前端框架必然是bootstrap，我想要在首页大图上加上 背景图片响应鼠标移动的 效果，导航也想加上滑动效果。&lt;/span&gt;
		&lt;/li&gt;
		&lt;li&gt;
			&lt;span style=&quot;font-size:14px;line-height:21px;&quot;&gt;其次就是页脚，一定要大气，不能小气一样的一点点，对的，就像自己做出来的效果一样。还算满意吧。&lt;/span&gt;
		&lt;/li&gt;
	&lt;/ol&gt;
	&lt;p&gt;
		&lt;span style=&quot;font-size:14px;line-height:21px;&quot;&gt;老师的要求是不要太活跃，不知道老师的感觉是怎样，希望喜欢吧。。。&lt;/span&gt;
	&lt;/p&gt;
	&lt;p&gt;
		&lt;span style=&quot;font-size:14px;line-height:21px;&quot;&gt;附图：&lt;/span&gt;
	&lt;/p&gt;
	&lt;p style=&quot;text-align:center;&quot;&gt;
		&lt;span style=&quot;font-size:14px;line-height:21px;&quot;&gt;&lt;img src=&quot;/Data/kindeditor/attached/image/20150526/20150526203632_15468.png&quot; width=&quot;700&quot; height=&quot;944&quot; alt=&quot;&quot; /&gt;&lt;br /&gt;
&lt;/span&gt;
	&lt;/p&gt;
&lt;/p&gt;";s:4:"time";s:10:"1432643847";s:8:"clicknum";s:2:"29";s:6:"imgUrl";s:33:"/Public/uploadImg/1432643847.jpeg";s:3:"del";s:1:"0";s:4:"attr";a:1:{i:0;a:3:{s:2:"id";s:1:"1";s:4:"name";s:6:"置顶";s:5:"color";s:3:"red";}}s:4:"sort";s:6:"随笔";s:4:"tags";a:1:{i:0;a:2:{s:2:"id";s:2:"79";s:4:"name";s:12:"前端设计";}}}i:3;a:12:{s:2:"id";s:3:"184";s:6:"sortid";s:2:"12";s:4:"name";s:10:"Ming依然";s:5:"title";s:43:"css3圆形百分比进度条的实现原理";s:7:"content";s:8034:"&lt;p&gt;
	&lt;span style=&quot;font-size:14px;&quot;&gt;今天早上起来在查看jquery插件机制的时候，一不小心点进了&lt;span style=&quot;color:#006600;&quot;&gt;css3圆形百分比进度条&lt;/span&gt;的相关文章，于是一发不可收拾，开始折腾了。。。&lt;img src=&quot;http://www.ymblog.net/Data/kindeditor/plugins/emoticons/images/13.gif&quot; border=&quot;0&quot; alt=&quot;&quot; /&gt;&lt;/span&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;span style=&quot;font-size:14px;line-height:21px;&quot;&gt;关于圆形圈的实现，想必用2个圆心相同，半径不同的div即可实现，来画个图：&lt;/span&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;span style=&quot;font-size:14px;line-height:21px;&quot;&gt;&lt;br /&gt;
&lt;/span&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;span style=&quot;font-size:14px;line-height:21px;&quot;&gt;&lt;img src=&quot;/Data/kindeditor/attached/image/20150526/20150526100815_61984.jpg&quot; alt=&quot;&quot; /&gt;&lt;br /&gt;
&lt;/span&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;span style=&quot;font-size:14px;line-height:21px;&quot;&gt;&lt;br /&gt;
&lt;/span&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;span style=&quot;font-size:14px;line-height:21px;&quot;&gt;&amp;lt;!--请不要嘲笑我拙劣的画笔。--&amp;gt;&lt;/span&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;span style=&quot;font-size:14px;line-height:21px;&quot;&gt;&lt;br /&gt;
&lt;/span&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;span style=&quot;font-size:14px;line-height:21px;&quot;&gt;黄色的就是圆形的进度条，大家会看到，这是一个整圆，并不能用transform：rotate（）；来实现角度的旋转，这就对了，因为还要用到另外一个不常见的&lt;span style=&quot;background-color:#FF9900;&quot;&gt;css属性clip&lt;/span&gt;。&lt;/span&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;span style=&quot;font-size:14px;line-height:21px;&quot;&gt;&lt;br /&gt;
&lt;/span&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;span style=&quot;font-size:14px;line-height:21px;background-color:#FF9900;&quot;&gt;原理：每个圆形的进度条都是由2个半圆构成的，进度为100%，旋转的角度为360度，那么每1%对应的就是3.6度，当旋转的角度小于180度时，左边的半圆是不需要旋转的，当大于180度时，右边的半圆直接旋转180度，左边的半圆旋转&lt;span style=&quot;background-color:#EE33EE;&quot;&gt;此时的度数-180度。&lt;span style=&quot;background-color:#FF9900;&quot;&gt;这样就可以实现了。&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;span style=&quot;font-size:14px;line-height:21px;&quot;&gt;&lt;br /&gt;
&lt;/span&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;span style=&quot;font-size:14px;line-height:21px;&quot;&gt;说完原理再来说说clip这个属性，我参考了2篇文章，都写得不错。&lt;/span&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;span style=&quot;font-size:14px;line-height:21px;&quot;&gt;&lt;a href=&quot;http://www.w3cplus.com/css3/clip.html&quot; target=&quot;_blank&quot;&gt;http://www.w3cplus.com/css3/clip.html&lt;/a&gt;&lt;br /&gt;
&lt;/span&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;br /&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;a href=&quot;http://www.zhangxinxu.com/wordpress/2011/04/css-clip-rect/&quot; target=&quot;_blank&quot;&gt;http://www.zhangxinxu.com/wordpress/2011/04/css-clip-rect/&lt;/a&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;span style=&quot;font-size:14px;line-height:21px;&quot;&gt;&lt;br /&gt;
&lt;/span&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;span style=&quot;font-size:14px;line-height:21px;&quot;&gt;总的来说，clip属性我们一般只是用来切图，就和css，sprite用法一样，将想要显示的图片或者区域展示出来，用法是：&lt;/span&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;span style=&quot;font-size:14px;line-height:21px;&quot;&gt;&lt;br /&gt;
&lt;/span&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;span style=&quot;font-size:14px;line-height:21px;&quot;&gt; &lt;/span&gt;
&lt;/p&gt;
&lt;pre class=&quot;prettyprint linenums lang-css&quot;&gt;clip: rect(&amp;lt;top&amp;gt;, &amp;lt;right&amp;gt;, &amp;lt;bottom&amp;gt;, &amp;lt;left&amp;gt;);&lt;/pre&gt;
&lt;p&gt;
	&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;/span&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;span style=&quot;font-size:14px;&quot;&gt;它的兼容性是在ie8+，ie8以下的写法就是在各属性top,right等之间不要加逗号，并放在加了逗号的写法前面，如下：&lt;/span&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;br /&gt;
&lt;/span&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;span style=&quot;font-size:14px;&quot;&gt;
&lt;pre class=&quot;prettyprint linenums lang-css&quot;&gt;.my-element {
  position: absolute;
  clip: rect(10px  350px  170px  0); /* IE4 to IE7 */
  clip: rect(10px, 350px, 170px, 0); /* IE8+ &amp;amp; other browsers */
}&lt;/pre&gt;
&lt;br /&gt;
&lt;/span&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;br /&gt;
&lt;/span&gt;
&lt;/p&gt;
&lt;span style=&quot;font-size:14px;&quot;&gt;
&lt;pre class=&quot;prettyprint linenums lang-css&quot;&gt;&lt;span style=&quot;font-family:'sans serif', tahoma, verdana, helvetica;&quot;&gt;这里要注意的2点是：
 /*当top和left取值为auto时，相当于0
 *当bottom和right取值为auto时，相当于100%
 */ &lt;/span&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;p&gt;
	&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;br /&gt;
&lt;/span&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;span style=&quot;font-size:14px;&quot;&gt;接下来就直接上完整的代码了。。。可直接copy运行。&lt;/span&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;br /&gt;
&lt;/span&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;span style=&quot;font-size:14px;&quot;&gt;
&lt;pre class=&quot;prettyprint linenums lang-js&quot;&gt;&amp;lt;!DOCTYPE html&amp;gt;
&amp;lt;html&amp;gt;
&amp;lt;head&amp;gt;
&amp;lt;title&amp;gt;css3+jquery圆形进度条&amp;lt;/title&amp;gt;
&amp;lt;meta charset=&quot;utf-8&quot; /&amp;gt;
&amp;lt;script src=&quot;http://cdn.bootcss.com/jquery/2.1.4/jquery.min.js&quot;&amp;gt;&amp;lt;/script&amp;gt;
&amp;lt;style type=&quot;text/css&quot;&amp;gt;
.circle {
width: 200px;
height: 200px;  
position: absolute;
border-radius: 50%;
background: #0cc;
}
.pie_left, .pie_right {
width: 200px; 
height: 200px;
position: absolute;
top: 0;left: 0;
}
.left, .right {
display: block;
width:200px; 
height:200px;
background:#00aacc;
border-radius: 50%;
position: absolute;
top: 0;
left: 0;
/*transform: rotate(30deg);*/
}
.pie_right, .right {
clip:rect(0,auto,auto,100px);
}
.pie_left, .left {
clip:rect(0,100px,auto,0);
}
/*
*当top和left取值为auto时，相当于0
*当bottom和right取值为auto时，相当于100%
*/
.mask {
width: 150px;
height: 150px;
border-radius: 50%;
left: 25px;
top: 25px;
background: #FFF;
position: absolute;
text-align: center;
line-height: 150px;
font-size: 16px;
}


&amp;lt;/style&amp;gt;
&amp;lt;/head&amp;gt;
&amp;lt;body&amp;gt;
&amp;lt;div class=&quot;circle&quot;&amp;gt;
&amp;lt;div class=&quot;pie_left&quot;&amp;gt;&amp;lt;div class=&quot;left&quot;&amp;gt;&amp;lt;/div&amp;gt;&amp;lt;/div&amp;gt;
&amp;lt;div class=&quot;pie_right&quot;&amp;gt;&amp;lt;div class=&quot;right&quot;&amp;gt;&amp;lt;/div&amp;gt;&amp;lt;/div&amp;gt;
&amp;lt;div class=&quot;mask&quot;&amp;gt;&amp;lt;span&amp;gt;10&amp;lt;/span&amp;gt;%&amp;lt;/div&amp;gt;
&amp;lt;/div&amp;gt;

&amp;lt;script type=&quot;text/javascript&quot;&amp;gt;
$(function() {
$('.circle').each(function(index, el) {
var num = $(this).find('span').text() * 3.6;
if (num&amp;lt;=180) {
$(this).find('.right').css('transform', &quot;rotate(&quot; + num + &quot;deg)&quot;);
} else {
$(this).find('.right').css('transform', &quot;rotate(180deg)&quot;);
$(this).find('.left').css('transform', &quot;rotate(&quot; + (num - 180) + &quot;deg)&quot;);
};
});
});
&amp;lt;/script&amp;gt;
&amp;lt;/body&amp;gt;
&amp;lt;/html&amp;gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;br /&gt;
&lt;/p&gt;";s:4:"time";s:10:"1432607080";s:8:"clicknum";s:2:"32";s:6:"imgUrl";s:32:"/Public/uploadImg/1432607080.png";s:3:"del";s:1:"0";s:4:"attr";a:1:{i:0;a:3:{s:2:"id";s:1:"1";s:4:"name";s:6:"置顶";s:5:"color";s:3:"red";}}s:4:"sort";s:9:"web前端";s:4:"tags";a:2:{i:0;a:2:{s:2:"id";s:2:"76";s:4:"name";s:4:"css3";}i:1;a:2:{s:2:"id";s:2:"77";s:4:"name";s:19:"css3圆形进度条";}}}i:4;a:12:{s:2:"id";s:3:"183";s:6:"sortid";s:2:"12";s:4:"name";s:10:"Ming依然";s:5:"title";s:29:"js对象学习笔记（一）";s:7:"content";s:1755:"&lt;p style=&quot;text-align:left;&quot;&gt;
	&lt;span style=&quot;font-size:16px;&quot;&gt;运行结果如下：&lt;/span&gt;
&lt;/p&gt;
&lt;p style=&quot;text-align:center;&quot;&gt;
	&lt;br /&gt;
&lt;/p&gt;
&lt;p style=&quot;text-align:center;&quot;&gt;
	&lt;img src=&quot;/Data/kindeditor/attached/image/20150525/20150525164841_60844.jpg&quot; width=&quot;650&quot; height=&quot;322&quot; alt=&quot;&quot; /&gt;
&lt;/p&gt;
&lt;p style=&quot;text-align:left;&quot;&gt;
&lt;pre class=&quot;prettyprint linenums lang-js&quot;&gt;&amp;lt;!DOCTYPE html&amp;gt;
&amp;lt;html&amp;gt;
&amp;lt;head&amp;gt;
&amp;lt;title&amp;gt;js对象学习笔记&amp;lt;/title&amp;gt;
&amp;lt;meta charset=&quot;utf-8&quot; /&amp;gt;
&amp;lt;/head&amp;gt;
&amp;lt;body&amp;gt;
&amp;lt;h1&amp;gt;js对象学习笔记&amp;lt;/h1&amp;gt;
&amp;lt;div id=&quot;song&quot;&amp;gt;&amp;lt;/div&amp;gt;
&amp;lt;script type=&quot;text/javascript&quot;&amp;gt;
function Tune(song, artist){
var title = song;
var artist = artist;//私有属性和方法不用this.
this.contact = function(){
return title + &quot; &quot;+ artist;
}
}
window.onload = function(){
var happySong = new Tune('yyyymmmmmmmm', 'cccccjjjjjjjhhhhhhh');

Tune.prototype.addCategory = function(categoryName){
this.category = categoryName;
}

happySong.addCategory('aaaaaaaaaaaaaa');

var song = &quot;标题和列表是：&quot;+ happySong.contact() + &quot;。还有分类是：&quot;+ happySong.category;

var p = document.createElement(&quot;p&quot;);
var txt = document.createTextNode(song);
p.appendChild(txt);

document.getElementById(&quot;song&quot;).appendChild(p);
}
&amp;lt;/script&amp;gt;
&amp;lt;/body&amp;gt;
&amp;lt;/html&amp;gt;&lt;/pre&gt;
&lt;/p&gt;";s:4:"time";s:10:"1432543845";s:8:"clicknum";s:2:"28";s:6:"imgUrl";s:32:"/Public/uploadImg/1432543845.png";s:3:"del";s:1:"0";s:4:"attr";a:1:{i:0;a:3:{s:2:"id";s:1:"3";s:4:"name";s:6:"推荐";s:5:"color";s:6:"yellow";}}s:4:"sort";s:9:"web前端";s:4:"tags";a:2:{i:0;a:2:{s:2:"id";s:2:"74";s:4:"name";s:8:"js对象";}i:1;a:2:{s:2:"id";s:2:"75";s:4:"name";s:10:"javascript";}}}i:5;a:12:{s:2:"id";s:3:"182";s:6:"sortid";s:2:"12";s:4:"name";s:10:"Ming依然";s:5:"title";s:22:"CSS1 !important 语法";s:7:"content";s:3540:"&lt;h2 class=&quot;tit&quot; style=&quot;font-size:14px;background:;&quot;&gt;
&lt;/h2&gt;
&lt;h2 class=&quot;tit&quot; style=&quot;font-size:14px;background:#F3F3F3;&quot;&gt;
	语法：
&lt;/h2&gt;
&lt;div class=&quot;cont&quot; style=&quot;padding:10px;color:#666666;&quot;&gt;
	&lt;p&gt;
		&lt;strong&gt;Selector&lt;/strong&gt;{sRule!important;}
	&lt;/p&gt;
&lt;/div&gt;
&lt;h2 class=&quot;tit&quot; style=&quot;font-size:14px;background:#F3F3F3;&quot;&gt;
	说明：
&lt;/h2&gt;
&lt;div class=&quot;cont&quot; style=&quot;padding:10px;color:#666666;&quot;&gt;
	&lt;strong&gt;提升指定样式规则的应用优先权。&lt;/strong&gt; 
	&lt;ul&gt;
		&lt;li&gt;
			&lt;span class=&quot;glight&quot; style=&quot;color:#CC3300;&quot;&gt;IE6及以下浏览器有个比较显式的支持问题存在，!important并不覆盖掉在同一条样式的后面的规则。请看下述代码：&lt;/span&gt; 
			&lt;div class=&quot;gquote&quot; style=&quot;margin:10px;border:1px solid #C3E1FF;&quot;&gt;
				&lt;p class=&quot;gquote-tit&quot; style=&quot;background:#DDEEFF;&quot;&gt;
					&lt;strong&gt;示例代码：&lt;/strong&gt; 
				&lt;/p&gt;
				&lt;blockquote class=&quot;gquote-cont&quot;&gt;
&lt;pre&gt;div{color:#f00!important;color:#000;}&lt;/pre&gt;
				&lt;/blockquote&gt;
				&lt;p class=&quot;gquote-info&quot; style=&quot;color:#CC3300;background:#F3F9FF;&quot;&gt;
					在上述代码中，IE6及以下浏览器div的文本颜色为#000，!important并没有覆盖后面的规则；其它浏览器下div的文本颜色为#f00
				&lt;/p&gt;
			&lt;/div&gt;
		&lt;/li&gt;
		&lt;li&gt;
			&lt;span class=&quot;glight&quot; style=&quot;color:#CC3300;&quot;&gt;IE6及以下浏览器要使!important生效，可用以下代码：&lt;/span&gt; 
			&lt;div class=&quot;gquote&quot; style=&quot;margin:10px;border:1px solid #C3E1FF;&quot;&gt;
				&lt;p class=&quot;gquote-tit&quot; style=&quot;background:#DDEEFF;&quot;&gt;
					&lt;strong&gt;示例代码：&lt;/strong&gt; 
				&lt;/p&gt;
				&lt;blockquote class=&quot;gquote-cont&quot;&gt;
&lt;pre&gt;div{color:#f00!important;}
div{color:#000;}&lt;/pre&gt;
				&lt;/blockquote&gt;
				&lt;p class=&quot;gquote-info&quot; style=&quot;color:#CC3300;background:#F3F9FF;&quot;&gt;
					在上述代码中，IE6及以下浏览器中div的文本颜色表现与其它浏览器一致，都为#f00
				&lt;/p&gt;
			&lt;/div&gt;
		&lt;/li&gt;
	&lt;/ul&gt;
&lt;/div&gt;
&lt;h2 class=&quot;tit&quot; style=&quot;font-size:14px;background:#F3F3F3;&quot;&gt;
	&lt;span style=&quot;font-weight:normal;line-height:1.5;&quot;&gt;&lt;/span&gt; 
&lt;/h2&gt;
&lt;p&gt;
	demo源码：
&lt;pre class=&quot;prettyprint linenums lang-js&quot;&gt;&amp;lt;!DOCTYPE html&amp;gt;
&amp;lt;html lang=&quot;zh-cn&quot;&amp;gt;
&amp;lt;head&amp;gt;
&amp;lt;meta charset=&quot;utf-8&quot; /&amp;gt;
&amp;lt;title&amp;gt;!important_CSS参考手册_web前端开发参考手册系列&amp;lt;/title&amp;gt;
&amp;lt;style&amp;gt;
.test{color:#f00!important;color:#000;}
.test2{color:#f00!important;}
.test2{color:#000;}
&amp;lt;/style&amp;gt;
&amp;lt;/head&amp;gt;
&amp;lt;body&amp;gt;
&amp;lt;div class=&quot;test&quot;&amp;gt;同一条样式内，!important将在IE6及以下浏览器中失效&amp;lt;/div&amp;gt;
&amp;lt;div class=&quot;test2&quot;&amp;gt;在分散的样式条目内，IE6及以下浏览器对!important的支持与其它浏览器一致&amp;lt;/div&amp;gt;
&amp;lt;/body&amp;gt;
&amp;lt;/html&amp;gt;
			&lt;/pre&gt;
&lt;/p&gt;";s:4:"time";s:10:"1432353432";s:8:"clicknum";s:2:"30";s:6:"imgUrl";s:33:"/Public/uploadImg/1432353432.jpeg";s:3:"del";s:1:"0";s:4:"attr";a:1:{i:0;a:3:{s:2:"id";s:1:"5";s:4:"name";s:6:"转载";s:5:"color";s:7:"#22a7f0";}}s:4:"sort";s:9:"web前端";s:4:"tags";a:2:{i:0;a:2:{s:2:"id";s:2:"73";s:4:"name";s:7:"csshack";}i:1;a:2:{s:2:"id";s:2:"69";s:4:"name";s:3:"css";}}}}
?>