<div class="bg-light lter b-b wrapper-md">
    <h1 class="m-n font-thin h3">Lista de Slider</h1>
</div>
<div class="wrapper-md">
    <div class="panel panel-default">
        <div class="panel-heading">
            Lista de Slider
        </div>
        <div class="panel-body b-b b-light">
            Buscar: <input id="filter" type="text" class="form-control input-sm w-sm inline m-r"/>
            <a href="<?php echo base_url().'categoria/dashboard/create_categoria'?>" title="Nuevo" class="btn btn-success">
                <i class="fa fa-plus"></i>
                Añadir Nueva Categoria
            </a>
        </div>
        <div style="margin-bottom: 25px;">
            <table class="table m-b-none" ui-jq="footable" data-filter="#filter" data-page-size="5">
                <thead>
                <tr>
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
                <?php if(!empty($categoria_general)): ?>
                    <?php foreach ($categoria_general as $categoria) : ?>
                        <tr>
                            <td><?php echo $categoria->cat_nombre ?></td>
                            <td data-value="1">
                    <span class="label bg-<?php echo $categoria->cat_estado == 0 ? 'danger' : 'success'; ?>" title="Active">
                      <?php echo $categoria->cat_estado == 0 ? 'Desabilitado' : 'Activo'; ?>
                    </span>
                            </td>
                            <td>
                                <a href="<?php echo base_url().'categoria/dashboard/edit_categoria/'.$categoria->cat_id ?>"  title="Editar" class="btn btn-default">
                                    <i class="fa fa-edit"></i>
                                    Editar
                                </a>
                                <a href="#" onclick="return metod_confirm(<?php echo  $categoria->cat_id ?>);" title="Eliminar" class="btn btn-danger">
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
            window.location = "<?php echo base_url(); ?>categoria/dashboard/delete/"+id;
        } else {
            //Cancelado
        }
    }
</script>