<!-- main -->
<div class="col">
  <!-- main header -->
  <div class="bg-light lter b-b wrapper-md">
    <div class="row">
      <div class="col-sm-6 col-xs-12">
        <h1 class="m-n font-thin h3 text-black">Dashboard</h1>
        <small class="text-muted"></small>
      </div>
      
    </div>
  </div>
  <!-- / main header -->
  <div class="wrapper-md" ng-controller="FlotChartDemoCtrl">
    <!-- tasks -->
    <div class="row">
      <!-- Productos recientes -->
      <div class="col-md-6">
        <div class="panel no-border">
          <div class="panel-heading wrapper b-b b-light">
            <h4 class="font-thin m-t-none m-b-none text-muted">Productos Recientes</h4>              
          </div>
          <ul class="list-group list-group-lg m-b-none">
            <?php if(!empty($products_latest)): ?>
            <?php foreach ($products_latest as $productos) : ?>
              <li class="list-group-item">
                <span class="pull-right label bg-primary inline m-t-sm">
                  <?php echo $productos->prod_estado == 0 ? 'Desabilitado' : 'Activo'; ?>
                </span>
                <a href><?php echo $productos->prod_nombre; ?></a>
              </li>
            <?php endforeach ?>
            <?php else: ?>
              <li class="list-group-item">
                  No hay productos recientes
                </li>
            <?php endif ?>
          </ul>
          <div class="panel-footer">
            
          </div>
        </div>
      </div>
      <!-- end productos recientes -->

      <!-- Pedidos resientes -->
      <div class="col-md-6">
        <div class="panel no-border">
          <div class="panel-heading wrapper b-b b-light">
            <h4 class="font-thin m-t-none m-b-none text-muted">Nuevos pedidos</h4>              
          </div>
          <ul class="list-group list-group-lg m-b-none">
            <?php if(!empty($products_latest)): ?>
            <?php foreach ($products_latest as $productos) : ?>
              <li class="list-group-item">
                <a href class="thumb-sm m-r">
                  <img src="<?php echo base_url() ?>assets/admin/img/a1.jpg" class="r r-2x">
                </a>
                <span class="pull-right label bg-primary inline m-t-sm">Admin</span>
                <a href>Damon Parker</a>
              </li>
            <?php endforeach ?>
            <?php else: ?>
              <li class="list-group-item">
                  No hay pedidos recientes
                </li>
            <?php endif ?>
          </ul>
          <div class="panel-footer">
            
          </div>
        </div>
      </div>
      <!-- End Resientes -->

    </div>
    <!-- / tasks -->
  </div>
</div>