$(function() {
    
    var $formLogin = $('#login-form');
    var $formLost = $('#lost-form');
    var $formRegister = $('#register-form');
    var $divForms = $('#div-forms');
    var $modalAnimateTime = 300;//tempo de mudar de form/modal
    var $msgAnimateTime = 150;//tempo de animação
    var $msgShowTime = 2000;//tempo da mensagem

    $("form").submit(function () {
        switch(this.id) {
            //************************************************
            //****************LOGIN FORM**********************
            //************************************************ 
            case "login-form":
                //verificar os inputs antes de mandar para a validação php
                var $lg_username=$('#login_username').val();
                var $lg_password=$('#login_password').val();
                if ($lg_username == "ERROR") {
                    msgChange($('#div-login-msg'), $('#icon-login-msg'), $('#text-login-msg'), "error", "fa-times", "Login error");
                } else {
                    msgChange($('#div-login-msg'), $('#icon-login-msg'), $('#text-login-msg'), "success", "fa-check", "Login OK");
                }
                $.ajax({
                    url: "../assets/php/account.php",
                    type: "POST",
                    data: { task: "login", user: $lg_username, pass: $lg_password },
                    success: function(data)
                    {
                        console.log(data);
                    },
                      error: function(data) 
                    {
                        //code
                        //console.log(data);
                    } 	        
                });
                return false;
                break;
            //************************************************
            //****************LOST FORM***********************
            //************************************************ 
            case "lost-form":
                var $ls_email=$('#lost_email').val();
                if ($ls_email == "ERROR") {
                    msgChange($('#div-lost-msg'), $('#icon-lost-msg'), $('#text-lost-msg'), "error", "fa-times", "Send error");
                } else {
                    msgChange($('#div-lost-msg'), $('#icon-lost-msg'), $('#text-lost-msg'), "success", "fa-check", "Send OK");
                }
                $.ajax({
                    url: "../assets/php/account.php",
                    type: "POST",
                    data: { task: "forgetpass", mail: $ls_email},
                    success: function(data)
                    {
                        console.log(data);
                    },
                      error: function(data) 
                    {
                        //code
                        //console.log(data);
                    } 	        
                });
                return false;
                break;
            //************************************************
            //****************REGISTER FORM*******************
            //************************************************ 
            case "register-form":
                var $rg_username=$('#register_username').val();
                var $rg_email=$('#register_email').val();
                var $rg_password=$('#register_password').val();
                var $rg_name=$('#register_name').val();
                var $rg_date=$('#register_data').val();
                if ($rg_username == "ERROR") {
                    msgChange($('#div-register-msg'), $('#icon-register-msg'), $('#text-register-msg'), "error", "fa-times", "Register error");
                } else {
                    msgChange($('#div-register-msg'), $('#icon-register-msg'), $('#text-register-msg'), "success", "fa-check", "Register OK");
                }
                $.ajax({
                    url: "../assets/php/account.php",
                    type: "POST",
                    data: { task: "registo", user: $rg_username, pass: $rg_password, mail: $rg_email, name: $rg_name, date: $rg_date },
                    success: function(data)
                    {
                        console.log(data);
                    },
                      error: function(data) 
                    {
                        //code
                        //console.log(data);
                    } 	        
                });
                return false;
                break;
            default:
                return false;
        }
        return false;
    });
    
    //mudar os butoes do modal
    $('#login_register_btn').click( function () { modalAnimate($formLogin, $formRegister) });
    $('#register_login_btn').click( function () { modalAnimate($formRegister, $formLogin); });
    $('#login_lost_btn').click( function () { modalAnimate($formLogin, $formLost); });
    $('#lost_login_btn').click( function () { modalAnimate($formLost, $formLogin); });
    $('#lost_register_btn').click( function () { modalAnimate($formLost, $formRegister); });
    $('#register_lost_btn').click( function () { modalAnimate($formRegister, $formLost); });
    
    //animações modal
    function modalAnimate ($oldForm, $newForm) {
        var $oldH = $oldForm.height();
        var $newH = $newForm.height();
        $divForms.css("height",$oldH);
        $oldForm.fadeToggle($modalAnimateTime, function(){
            $divForms.animate({height: $newH}, $modalAnimateTime, function(){
                $newForm.fadeToggle($modalAnimateTime);
            });
        });
    }
    
    //animações mensagem
    function msgFade ($msgId, $msgText) {
        $msgId.fadeOut($msgAnimateTime, function() {
            $(this).text($msgText).fadeIn($msgAnimateTime);
        });
    }
    //mensagem shows
    //fas fa-check
    function msgChange($divTag, $iconTag, $textTag, $divClass, $iconClass, $msgText) {
        var $msgOld = $divTag.text();
        msgFade($textTag, $msgText);
        $divTag.addClass($divClass);
        $iconTag.removeClass("fa-angle-right");
        $iconTag.addClass($iconClass + " " + $divClass);
        setTimeout(function() {
            msgFade($textTag, $msgOld);
            $divTag.removeClass($divClass);
            $iconTag.addClass("fa-angle-right");
            $iconTag.removeClass($iconClass + " " + $divClass);
  		}, $msgShowTime);
    }
});



/*$(document).ready(function (e) {
	$("#login").on('submit',(function(e) {
		e.preventDefault();
		
	}));
	});*/