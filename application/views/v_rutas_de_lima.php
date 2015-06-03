<!-- head -->
  <?php include "html/head.php" ?>
<!-- end head -->
<body style="background-image: none;">

<!--   header -->
  <?php include "html/header.php" ?>
<!-- /header -->

<!-- menu -->
  <?php include "html/menu.php" ?>
 <!--  end menu -->

 <!-- cuerpo -->
  <div class="container">
  	<div class="cinta-cuerpo container2">
  	<div class="cabecera3">
  		
  	</div>
    <nav class="navbar navbar-default sidebar" role="navigation">
    <div class="container-fluid">
    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown i">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span>Macro-Estructura <span class="caret"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
            <li class="i"><a href="{{URL::to('createusuario')}}">Crear</a></li>
            <li class="i"><a href="#">Modificar</a></li>
            <li class="i"><a href="#">Reportar</a></li>
            <li class="i" class="divider"></li>
            <li class="i"><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li class="i"><a href="#">Informes</a></li>
          </ul>
        </li>          
        <li class="dropdown i">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Estatuto <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
            <li class="i"><a href="{{URL::to('createusuario')}}">Crear</a></li>
            <li class="i"><a href="#">Modificar</a></li>
            <li class="i"><a href="#">Reportar</a></li>
            <li class="i" class="divider"></li>
            <li class="i"><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li class="i"><a href="#">Informes</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="cuerpo3">
	<div>
		<h3>Ajsdalsda</h3>
	</div>

	<div>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
</div>
    </div>
  </div>
<!-- end cuerpo -->

<!-- footer -->
  <?php include "html/footer.php" ?>
<!-- end footer -->
</body>
</html>