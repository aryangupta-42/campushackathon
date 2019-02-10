$(document).ready(function(){
  $('#login').submit(function(e){
			e.preventDefault();
      // alert("he")
			var userid = $('#userid').val();
			var pass = $('#pass').val();
			if (userid!=""&&pass!=""){
				$.ajax({
					url:'PHP/login.php',
					type:'POST',
					data:{
						username:userid,
						password:pass
					},
					success:function(d){
						if (d=="failure") {
							// alert("Incorrect User name and password");
              $('.error').css('opacity','1');
              $('.error').html("Incorrect Username and password!");
							setTimeout(function(){
                $('.error').css('opacity','0');
							},4000);
						}else if(d=="invalid"){
              $('.error').css('opacity','1');
              $('.error').html("No such user found!");
							setTimeout(function(){
                $('.error').css('opacity','0');
							},4000);
						}else{
							window.location.href = "Home/index.php";
              // alert("login sucdess");

						}
					},
					error:function(D){
            console.log(D);
						alert("There seems to be a problem with your network connection");
					}
				})
				return false;
			}else{
        $('.error').css('opacity','1');
        $('.error').html("Please fill up all the fields...");
        setTimeout(function(){
          $('.error').css('opacity','0');
        },4000);
				return false;
			}
		})
})
