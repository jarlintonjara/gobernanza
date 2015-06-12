<!-- head -->
  <?php include "html/head.php" ?>
<!-- end head -->
<body style="background-image: none;">

<!--   header -->
  <?php include "html/header.php" ?>
<!-- /header -->

<!-- menu -->
  <?php include "html/menuadmin.php" ?>
 <!--  end menu -->

 <!-- cuerpo -->
  <div class="container">
  	<div class="cinta-cuerpo container2">
      	<!-- home -->
<h3>CPO</h3>
<h4>¿Que desea realizar?</h4>
  
  <div class="bs-example" data-example-id="simple-thumbnails" style="margin-top: 70px;">
    <div class="row">
      <div class="col-xs-6 col-md-6" style="text-align: center;">
      <a href="<?php base_url() ?>cpofechas" title="">
		<button type="button" class="btn btn-default btn-lg">
		  <span class="glyphicon glyphicon-calendar" aria-hidden="true"  style="font-size: 48px;"></span> Agregar Fecha
		</button>
    </a>
	   </div>
      <div class="col-xs-6 col-md-6" style="text-align: center;">
		<button type="button" class="btn btn-default btn-lg">
		  <span class="glyphicon glyphicon-file" aria-hidden="true"  style="font-size: 48px;"></span> Agregar Archivos
		</button>
	   </div>
    </div>
  </div><!-- /.bs-example -->
      	<!-- end -->
    </div>
  </div>
<!-- end cuerpo -->

<!-- footer -->
  <?php include "html/footer.php" ?>
<!-- end footer -->
</body>
</html>