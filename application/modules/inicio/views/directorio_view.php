<div class="container contenido">
	<div class="col-md-3">
		<div class="list-group">
			<a href="<?php echo base_url() ?>inicio/directorio/ordinario" class="list-group-item <?php echo $tipo == 'ordinario' ? 'active': '' ?>">Ordinario</a>
			<a href="<?php echo base_url() ?>inicio/directorio/extraordinario" class="list-group-item <?php echo $tipo == 'extraordinario' ? 'active': '' ?>">Extraordinario</a>
		</div>
    </div>
    
    <div class="col-md-9 interno">
    	<h3><?php echo $titulo; ?></h3>
      	<h2>Heading</h2>
		<ul class="list-group">
			<li class="list-group-item">
				<i class="fa fa-file-word-o"></i>
				Documento 1
			</li>
			<li class="list-group-item">
				<i class="fa fa-file-pdf-o"></i>
				Documento 2
			</li>
			<li class="list-group-item">
				<i class="fa fa-file-excel-o"></i>
				Documento 3
			</li>
			<li class="list-group-item">
				<i class="fa fa-file-powerpoint-o"></i>
				Documento 4
			</li>
		</ul>
	</div>
</div>