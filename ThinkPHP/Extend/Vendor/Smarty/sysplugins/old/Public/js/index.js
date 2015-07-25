

$(document).ready(function(){

	//随机分配颜色//////////////////////////
 	var tags_span = $(".mytaglist a");
     tags_span.each(function(){
         var rand = Math.ceil( (Math.random()*10 ));
         $(this).addClass("tag"+String(rand));
      });
    //////////////////////////////////////////

    $.ajax({
    	url:tourl,
    	type:'post',
    	data:{},
    	datatype:'json',
    	success:function(data){
    		var url = "http://www.cnsphoto.com/";
    		$('.newsone img').attr("src", data.imgurl[0]);
    		$('.newstwo img').attr("src", data.imgurl[1]);
    		$('.newsthree img').attr("src", data.imgurl[2]);
    		$('.newsfour img').attr("src", data.imgurl[3]);
    		$('.newsfive img').attr("src", data.imgurl[4]);
    		// alert(data.aurl[0]);
    		$('.newsone p').html('<a target="_blank" href="'+url+data.aurl[0]+'">'+data.title[0]+"</a>");
    		$('.newstwo p').html('<a target="_blank" href="'+url+data.aurl[1]+'">'+data.title[1]+"</a>");
    		$('.newsthree p').html('<a target="_blank" href="'+url+data.aurl[2]+'">'+data.title[2]+"</a>");
    		$('.newsfour p').html('<a target="_blank" href="'+url+data.aurl[3]+'">'+data.title[3]+"</a>");
    		$('.newsfive p').html('<a target="_blank" href="'+url+data.aurl[4]+'">'+data.title[4]+"</a>");
    	}

    });


});