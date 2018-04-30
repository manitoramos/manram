<!-- Navigation -->
<style>
    .divider{
      height: 1px;
      margin: 9px 0;
      overflow: hidden;
      background-color: #e5e5e5;
    }
    .navbar-content
		{
			width:320px;
			padding: 15px;
			padding-bottom:0px;
		}
		.navbar-content:before, .navbar-content:after
		{
			display: table;
			content: "";
			line-height: 0;
    }
    .navbar-nav.navbar-right:last-child {
		margin-right: 15px !important;
		}
		.navbar-footer 
		{
			background-color:#DDD;
		}
		.navbar-footer-content { padding:15px 15px 15px 15px; }
		.dropdown-menu {
			padding: 0px;
			overflow: hidden;
    }
    
    .pull-right{
      float:right !important;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Manitoramos</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/home">Home
                <!--<span class="sr-only">(current)</span>-->
              </a>
            </li>
            <!-- AFTER LOGIN --><!-- AFTER LOGIN --><!-- AFTER LOGIN --><!-- AFTER LOGIN --><!-- AFTER LOGIN -->
            <!-- AFTER LOGIN --><!-- AFTER LOGIN --><!-- AFTER LOGIN --><!-- AFTER LOGIN --><!-- AFTER LOGIN -->
            <!-- AFTER LOGIN --><!-- AFTER LOGIN --><!-- AFTER LOGIN --><!-- AFTER LOGIN --><!-- AFTER LOGIN -->
            <li class="nav-item dropdown"><a style="" class="nav-link dropdown-toggle" data-toggle="dropdown"><img src="" width="20px" style="position:relative; left: -5px;">manito
              <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li>
                  <div class="navbar-content">
                    <div class="row">
                      <div class="col-md-5">
									      <img src="assets/img/goku.jpg" alt="Alternate Text" width="103px" height="103px" class="img-responsive" />
                        <p class="text-center small"><a href="perfil">Mudar Foto</a></p>
                      </div>
								      <div class="col-md-7">
									      <span>Tiago Ramos</span>
									      <p class="text-muted small">mtjmt2@hotmail.com</p>
									      <div class="divider"></div>
									      <a href="perfil" class="btn btn-primary btn-sm">Ver Perfil</a>&nbsp;
									
								<?php
								/*
									if($registo3['previlegios'] == '3')
									{
										echo "<a href=\"Admin@home\" class=\"btn btn-warning btn-sm\">Admin</a>";
									}
									
									if($registo3['previlegios'] == '2')
									{
										echo "<a href=\"Admin@home\" class=\"btn btn-success btn-sm\">Editor</a>";
									}*/
								?>
									
                      </div>
                    </div>
                  </div>
                  <div class="navbar-footer">
                    <div class="navbar-footer-content">
                      <div class="row">
                        <div class="col-md-6">
                          <a href="perfil" class="btn btn-light btn-sm">Mudar Password</a>
                        </div>
                        <div class="col-md-6">
                          <a href="sair@logout" class="btn btn-danger btn-sm pull-right">Logout</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            
            <!-- END AFTER LOGIN --><!-- END AFTER LOGIN --><!-- END AFTER LOGIN --><!-- END AFTER LOGIN -->
            <!-- END AFTER LOGIN --><!-- END AFTER LOGIN --><!-- END AFTER LOGIN --><!-- END AFTER LOGIN -->
            <!-- END AFTER LOGIN --><!-- END AFTER LOGIN --><!-- END AFTER LOGIN --><!-- END AFTER LOGIN -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Admin
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/post@create">Inserir Registo</a>
                <a class="dropdown-item" href="#">Inserir Linguagem</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/post@edit">Atualizar Registo</a>
                <a class="dropdown-item" href="#">Apagar Registo</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="cursor:pointer;" role="button" data-toggle="modal" data-target="#login-modal">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<!-- CSS MODAL -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">

    <link href="assets/css/login.css" rel="stylesheet">
