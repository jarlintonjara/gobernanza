<div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">Lista de Slider</h1>
</div>
<div class="wrapper-md">
  <div class="panel panel-default">
    <div class="panel-heading">

    </div>
    <div class="panel-body b-b b-light">
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

        Buscar: <input id="filter" type="text" class="form-control input-sm w-sm inline m-r"/>
        <a href="<?php echo base_url().'slider/dashboard/'?>"  title="Banner" class="btn btn-primary">
            Banner Colecciones
        </a>
        <a href="<?php echo base_url().'slider/collections/create_collection/'.$idslider;?>" title="Nuevo" class="btn btn-success">
            <i class="fa fa-plus"></i>
            Crear Nuevo Banner
        </a>
    </div>
    <div style="margin-bottom: 25px;">
      <table class="table m-b-none" ui-jq="footable" data-filter="#filter" data-page-size="5">
        <thead>
          <tr>
              <th data-toggle="true">
                  Imagen
              </th>
              <th data-toggle="true">
                  Nombre
              </th>
              <th>
                  Estado
              </th>
              <th data-hide="phone">
                  Acciones
              </th>
          </tr>
        </thead>
        <tbody>
          <?php if(!empty($slider_collections)): ?>
            <?php foreach ($slider_collections as $slider_colect) : ?>
              <tr>
                  <td>
                      <img src="<?php echo base_url().'uploads/slider/'.$slider_colect->dslide_idslider.'/'.utf8_encode($slider_colect->dslide_imagen);?>" style="width: 100px;"/>
                  </td>
                  <td><?php echo $slider_colect->dslide_nombre ?></td>
                  <td data-value="1">
                    <span class="label bg-<?php echo $slider_colect->dslide_estado == 0 ? 'danger' : 'success'; ?>" title="Active">
                      <?php echo $slider_colect->dslide_estado == 0 ? 'Desabilitado' : 'Activo'; ?>
                    </span>
                  </td>
                  <td>
                    <a href="<?php echo base_url().'slider/collections/edit_collection/'.$slider_colect->dslide_id ?>"  title="Editar" class="btn btn-default">
                        <i class="fa fa-edit"></i>
                      Editar
                    </a>
                    <a href="#" onclick="return metod_confirm(<?php echo  $slider_colect->dslide_id ?>);" title="Eliminar" class="btn btn-danger">
                        <i class="fa fa-times-circle-o"></i>
                      Eliminar
                    </a>
                  </td>
              </tr>
            <?php endforeach ?>
          <?php else: ?>
            <li class="list-group-item">
                No existen sliders
              </li>
          <?php endif ?>
        </tbody>
        <tfoot class="hide-if-no-paging">
          <tr>
              <td colspan="5" class="text-center">
                  <ul class="pagination"></ul>
              </td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>

<script type="text/javascript">
    function metod_confirm (id) {
        var r = confirm("Desea eliminar Banner?");
        if (r == true) {
            window.location = "<?php echo base_url(); ?>slider/collections/delete/"+id;
        } else {
            //Cancelado
        }
    }
</script>