
$(function(){
	var dt,dt2;
	var bg_color = ['#F62459','#8E44AD','#22A7F0','#F9690E']
	var enter_num = 0;
		$('.nav ul li span').mouseenter(function(){
			var e = $(this);
			if( enter_num == 0 ){
				dt = setTimeout(function(){
					enter_num += 1;
					e.css({'opacity':'0'});
					e.parent('li').animate({
						left:'-=50px'
					},200);
					e.next('a').css({'color':'white','opacity':'1','background':bg_color[Math.floor(Math.random()*bg_color.length)]});		
				},200);
			}
		});

		$('.nav ul li').mouseleave(function(){
			var e = $(this);
			clearTimeout(dt);
			if( enter_num == 1 ){
				enter_num -= 1;
				e.find('span').animate({'opacity':'1'})
				e.animate({
					left:'+=50px'
				},200);
				e.find('a').css({'opacity':'0'})
			}
		});


	//图片动画
	var e_num = 0;
	$('.list').mouseenter(function(){
		var e = $(this);
		dt2 = setTimeout(function(){
			e.find('img').animate({
				width:'+=20px',
				left:'-10px',
				height:'+=20px'
			});
			e.find('img').removeClass('blur');
			e_num += 1;
		},300);
	});
	$('.list').mouseleave(function(){
		clearTimeout(dt2);
		if( e_num ==1 ){
			$(this).find('img').animate({
				width:'-=20px',
				left:'0px',
				height:'-=20px'
			});
			$(this).find('img').addClass('blur');
			e_num -= 1;
		}
	});



});