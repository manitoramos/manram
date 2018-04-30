  
$(document).ready(function(){
    $(".cross").hover(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
            $(this).toggleClass('open');       
        }
    );
});

	//para o login
	$(document).ready(function (e) {
	$("#login").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "./assets/php/entrar.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(data)
		    {
				if(data == "true"){
					alertify.delay(0);
					alertify.closeLogOnClick(true);
					alertify.logPosition("bottom right");
					alertify.success("Login com Sucesso sera redirecionado em breve!");
					setTimeout(function () {
					window.location.href = "home";
					}, 2000);
				}else if(data == "false"){
					alertify.delay(2000);
					alertify.closeLogOnClick(true);
					alertify.logPosition("bottom right");
					alertify.error("Algum Campo em Branco!!");
					console.log(data);
				}else{
					alertify.delay(0);
					alertify.closeLogOnClick(true);
					alertify.logPosition("bottom right");
					alertify.error("Password ou Username Errado!!");
					console.log(data);
				}
		    },
		  	error: function() 
	    	{
				alertify.delay(0);
				alertify.closeLogOnClick(true);
				alertify.logPosition("bottom right");
				alertify.error("Erro! Não inseriste alguma coisa bem!");
	    	} 	        
	   });
	}));
	});
	
	//para o registo
	$(document).ready(function (e) {
	$("#registo").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "./assets/php/entrar.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(data)
		    {
				if(data == "true"){
					alertify.delay(0);
					alertify.closeLogOnClick(true);
					alertify.logPosition("bottom right");
					alertify.success("Registado com Sucesso agora podes aceder a tua conta!");
				}else if(data == "false"){
					alertify.delay(2000);
					alertify.closeLogOnClick(true);
					alertify.logPosition("bottom right");
					alertify.error("Alguma coisa correu mal!!");
					console.log(data);
				}else{
					alertify.delay(0);
					alertify.closeLogOnClick(true);
					alertify.logPosition("bottom right");
					alertify.error("Alguma coisa correu mal!!");
					console.log(data);
				}
		    },
		  	error: function() 
	    	{
				alertify.delay(0);
				alertify.closeLogOnClick(true);
				alertify.logPosition("bottom right");
				alertify.error("Erro! Não inseriste alguma coisa bem!");
	    	} 	        
	   });
	}));
	});