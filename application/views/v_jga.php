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
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">JGA <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span></a>
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
<!--         <li class="dropdown i">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">CPO <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
            <li class="i"><a href="{{URL::to('createusuario')}}">Crear</a></li>
            <li class="i"><a href="#">Modificar</a></li>
            <li class="i"><a href="#">Reportar</a></li>
            <li class="i" class="divider"></li>
            <li class="i"><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li class="i"><a href="#">Informes</a></li>
          </ul>
        </li> -->
      </ul>
    </div>
  </div>
</nav>

<div class="cuerpo3">
	<div>
		<div class="busccar">

       
            <div id="custom-search-input">
                <div class="input-group col-md-6 buscar" style="float: right;">
                    <input type="text" class="form-control input-sm" placeholder="Buscar" />
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-sm" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                </div>
            </div>
      

</div>
	</div>
	<div>
<table class="table table-hover">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Fecha</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>asdad</td>
			<td>asdasd</td>
			<td><span class="glyphicon glyphicon-eye-open"></span> Ver</td>
			<td><span class="glyphicon glyphicon-edit"></span> Editar</td>
			<td><span class="glyphicon glyphicon-remove"></span> Eliminar</td>
		</tr>
		<tr>
			<td>fsdf</td>
			<td>sdfsdf</td>
			<td><span class="glyphicon glyphicon-eye-open"></span> Ver</td>
			<td><span class="glyphicon glyphicon-edit"></span> Editar</td>
			<td><span class="glyphicon glyphicon-remove"></span> Eliminar</td>
		</tr>
	</tbody>
</table>
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