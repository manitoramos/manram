<!-- BEGIN # MODAL LOGIN -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button style="font-size: 20px;" type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i class="fas fa-times"></i>
                    </button>
				</div>
                
                <!-- Begin # DIV Form -->
                <div id="div-forms">
                
                    <!-- Begin # Login Form -->
                    <form id="login-form">
		                <div class="modal-body">
				    		<div id="div-login-msg">
                                <div id="icon-login-msg" class="fas fa-angle-right fa-xs"></div>
                                <span id="text-login-msg">Entre com a sua conta.</span>
                            </div>
				    		<input id="login_username" class="form-control fm_ctr" type="text" placeholder="Username" required>
				    		<input id="login_password" class="form-control fm_ctr" type="password" placeholder="Password" required>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Remember me
                                </label>
                            </div>
        		    	</div>
				        <div class="modal-footer">
                            <div class="container">
                                <div class="row">
                                            <button type="submit" class="btn btn2 btn-primary btn-lg btn-block">Entrar</button>
                                            <button id="login_lost_btn" type="button" class="btn btn-link"><small>Esqueceste-te da senha?</small></button>
                                            <button id="login_register_btn" type="button" class="btn btn-link"><small>Registar</small></button>
                                </div>
                            </div>
				        </div>
                    </form>
                    <!-- End # Login Form -->
                    
                    <!-- Begin | Lost Password Form -->
                    <form id="lost-form" style="display:none;">
    	    		    <div class="modal-body">
		    				<div id="div-lost-msg">
                                <div id="icon-lost-msg" class="fas fa-angle-right fa-xs"></div>
                                <span id="text-lost-msg">Preencha o campo com o seu email.</span>
                            </div>
		    				<input id="lost_email" class="form-control fm_ctr" type="text" placeholder="E-Mail" required>
            			</div>
		    		    <div class="modal-footer">
                            <div class="container">
                                <div class="row">
                                        <button type="submit" class="btn btn2 btn-primary btn-lg btn-block">Enviar</button>
                                        <button id="lost_login_btn" type="button" class="btn btn-link"><small>Login</small></button>
                                        <button id="lost_register_btn" type="button" class="btn btn-link"><small>Registar</small></button>
                                </div>
                            </div>
		    		    </div>
                    </form>
                    <!-- End | Lost Password Form -->
                    
                    <!-- Begin | Register Form -->
                    <form id="register-form" style="display:none;">
            		    <div class="modal-body">
		    				<div id="div-register-msg">
                                <div id="icon-register-msg" class="fas fa-angle-right fa-xs"></div>
                                <span id="text-register-msg">Registar uma nova conta.</span>
                            </div>
                            <input id="register_name" class="form-control fm_ctr" type="text" placeholder="First/Last Name" required>
		    				<input id="register_username" class="form-control fm_ctr" type="text" placeholder="Username" required>
                            <input style="margin-bottom: 10px;" id="register_email" class="form-control fm_ctr" type="text" placeholder="E-Mail" required>
                            <input id="register_data" class="form-control fm_ctr" type="date" max="2010-01-01" min="1930-01-01" required>
                            <input id="register_password" class="form-control fm_ctr" type="password" placeholder="Password" required>
            			</div>
		    		    <div class="modal-footer">
                            <div class="container">
                                <div class="row">
                                        <button type="submit" class="btn btn2 btn-primary btn-lg btn-block">Registar</button>
                                        <button id="register_login_btn" type="button" class="btn btn-link"><small>Login</small></button>
                                        <button id="register_lost_btn" type="button" class="btn btn-link"><small>Esqueceste-te da senha?</small></button>
                                </div>
                            </div>
		    		    </div>
                    </form>
                    <!-- End | Register Form -->
                    
                </div>
                <!-- End # DIV Form -->
                
			</div>
		</div>
	</div>
    <!-- END # MODAL LOGIN -->