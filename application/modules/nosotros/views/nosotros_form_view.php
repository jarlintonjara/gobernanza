<div class="bg-light lter b-b wrapper-md">
    <h1 class="m-n font-thin h3">Nosotros</h1>
</div>

<div class="wrapper-md">
    <div class="tab-container">

        <?php
        $correcto = $this->session->flashdata('message');
        switch ($correcto) {
            case 'update':
                $texto = "Se ha <strong>ACTUALIZADO</strong> correctamente";
                break;
            case 'insert':
                $texto = "Se ha <strong>INSERTADO</strong> correctamente";
                break;
            case 'error':
                $texto = "Ocurrio un error intentelo nuevamente";
                break;
            case 'delete':
                $texto = "Se ha <strong>ELIMINADO</strong> correctamente";
                break;
        }
        ?>
        <?php if($correcto === 'error'): ?>
            <!-- Mensaje Error -->
            <div class="alert alert-block alert-danger fade in">
                <button data-dismiss="alert" class="close close-sm" type="button">
                    <i class="fa fa-times"></i>
                </button>
                <?php echo $texto ?>
            </div>
        <?php endif ?>

        <?php if($correcto === 'update' || $correcto === 'insert' || $correcto === 'delete' ): ?>
            <!-- Mensaje correcto -->
            <div class="alert alert-success fade in">
                <button data-dismiss="alert" class="close close-sm" type="button">
                    <i class="fa fa-times"></i>
                </button>
                <?php echo $texto ?>
            </div>
        <?php endif ?>


        <ul class="nav nav-tabs" role="tablist">
            <li class="active"><a href="#tab1" data-toggle="tab">Historia </a></li>
            <li><a href="#tab2" data-toggle="tab">Misión y Visión</a></li>
            <li><a href="#tab3" data-toggle="tab">Staff</a></li>
        </ul>


        <div class="tab-content">
            <div class="tab-pane active" id="tab1">

                <?php echo form_open_multipart('nosotros/dashboard/page','class="form-horizontal"');?>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Titulo</label>
                        <div class="col-sm-10">
                            <?php echo form_hidden('id_page', $id_page_h);?>
                            <?php echo form_input($nombre); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Descripción</label>
                        <div class="col-sm-10">
                            <?php echo form_textarea($describe); ?>
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
                <?php echo form_close();?>

            </div>

            <div class="tab-pane" id="tab2">
                <?php echo form_open_multipart('nosotros/dashboard/page','class="form-horizontal"');?>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Titulo</label>
                        <div class="col-sm-10">
                            <?php echo form_hidden('id_page', $id_page_v);?>
                            <?php echo form_input($nombre_vision); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Descripción</label>
                        <div class="col-sm-10">
                            <?php echo form_textarea($describe_vision); ?>
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

                <?php echo form_close();?>
            </div>

            <div class="tab-pane" id="tab3">
                <?php echo form_open_multipart('nosotros/dashboard/page','class="form-horizontal"');?>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Titulo</label>
                        <div class="col-sm-10">
                            <?php echo form_hidden('id_page', $id_page_s);?>
                            <?php echo form_input($titulo_staff); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Descripción</label>
                        <div class="col-sm-10">
                            <?php echo form_textarea($describe_staff); ?>
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

                <?php echo form_close();?>
            </div>

        </div>

    </div>

</div>
