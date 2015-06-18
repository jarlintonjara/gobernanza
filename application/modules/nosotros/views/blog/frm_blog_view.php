<div class="bg-light lter b-b wrapper-md">
    <h1 class="m-n font-thin h3">Creación de Blog</h1>
</div>

<div class="wrapper-md">
    <div class="tab-container">

        <ul class="nav nav-tabs" role="tablist">
            <li class="active"><a href="#tab1" data-toggle="tab">Descripción </a></li>
        </ul>

        <?php echo form_open_multipart('nosotros/blog/cu_eventos');?>
        <div class="tab-content">
            <div class="tab-pane active" id="tab1">
                <div class="form-horizontal">

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Titulo</label>
                        <div class="col-sm-10">
                            <?php echo form_hidden('id_blog', $id_blog);?>
                            <?php echo form_input($nombre); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Sub Titulo</label>
                        <div class="col-sm-10">
                            <?php echo form_input($subtitulo); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Imagen</label>
                        <div class="col-sm-10">
                            <?php 
                                if(!empty($img_print)){
                                    echo '<img src="'.base_url().'uploads/blog/'.$id_blog.'/'.$img_print.'" style="margin-bottom:10px;  width: 500px;">';
                                } 
                                echo form_input($imagen); 
                            ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Descripción: </label>
                        <div class="col-sm-10">
                            <?php echo form_textarea($descripcion); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Estado</label>
                        <div class="col-sm-10">
                            <?php
                            $opciones = array(
                                '0'  => 'Desactivado',
                                '1'  => 'Activo',
                            );
                            $st_estado = $estado == '' ? '1': $estado;
                            echo form_dropdown('estado',$opciones,$st_estado,'class="form-control m-b"');
                            ?>
                        </div>
                    </div>

                </div>
            </div>

            <div class="form-horizontal">
                <div class="line line-dashed b-b line-lg pull-in"></div>
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-2">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <a href="<?php echo base_url().'categoria/dashboard'; ?>" class="btn btn-default">Cancelar</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <?php echo form_close();?>
    </div>
