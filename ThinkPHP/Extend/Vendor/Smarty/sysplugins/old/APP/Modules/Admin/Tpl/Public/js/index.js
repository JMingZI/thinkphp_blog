$(document).ready(function(){

	var sta1 = false;
	var sta2 = false;
	var sta3 = false;

	$("#username").blur(function(){
		var username = $( 'input[name=username]' );
		if( username.val() == '' ){
			username.focus();
			return;
		}
		else{
			sta1 = true;
		}
	});

	$("#password").blur(function(){
		var password = $( 'input[name=password]' );
		if( password.val() == '' ){
			password.focus();
			return;
		}
		else{
			sta2 = true;
		}
	});

	$("#verify").blur(function(){
		var verify = $( 'input[name=verify]' );
		if( verify.val() == '' ){
			verify.focus();
			return;
		}
		else{
			sta3 = true;
		}
	});

	$('#loginform').submit(function(){
		if( !$("#username").val() )	{ 
			alert('用户名不能为空');
			$("#username").focus();
			return false; 
		}
		else 
			if ( !$("#password").val() ) { 
				alert("密码不能为空");
				$("#password").focus();
				return false; 
			}
		else 
			if( !$( 'input[name=verify]' ).val() ) { 
				alert("验证码不能为空");
				$("#verify").focus();
				return false; 
			}
		else if( sta1 && sta2 && sta3 )
			return true;
		// $.post(loginHandleUrl, { username : $("#username").val(), password : $("#password").val(), verify : $("verify").val() }, function(data) { 
			
		// }, 'json');
	});

	$('#delete').click(function(){
		var Did = $('select[name="deleteId"]');
		// alert(Did.val());
		if( confirm('确定删除？') )
		{
			$.post( deleteUrl, { id : Did.val() }, function(sta){

				if( sta.status )
					alert('删除成功哦');
				else
					alert('删除失败');

			}, 'json' );
		}
	});

});