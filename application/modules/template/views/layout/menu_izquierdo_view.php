<aside id="aside" class="app-aside hidden-xs bg-dark">
    <div class="aside-wrap">
      <div class="navi-wrap">
        <!-- user -->
        
        <!-- / user -->

        <!-- nav -->
        <nav ui-nav class="navi clearfix">
          <ul class="nav">
            <li>
              <a href="<?php echo base_url(); ?>">
                <i class="glyphicon glyphicon-home icon text-info-lter"></i>
                <span class="font-bold">Dashboard</span>
              </a>
            </li>
            <li class="line dk"></li>

            <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
              <span>Navegación</span>
            </li>

            <li>
                <a href="<?php echo base_url().'slider/dashboard' ?>">
                    <i class="glyphicon icon-drawer icon"></i>
                    <span class="font-bold">Banner</span>
                </a>
            </li>

            <li>
                <a href="<?php echo base_url().'producto/dashboard';?>">
                    <i class="glyphicon icon-book-open icon"></i>
                    <span class="font-bold">Productos</span>
                </a>
            </li>

            <li>
                <a href="<?php echo base_url().'categoria/dashboard';?>">
                    <i class="glyphicon icon-book-open icon"></i>
                    <span class="font-bold">Categoria</span>
                </a>
            </li>

            <!--
            <li>
                <a href="<?php echo base_url().'producto/pedidos';?>">
                    <i class="glyphicon icon-notebook icon"></i>
                    <span class="font-bold">Pedidos</span>
                </a>
            </li>
            -->

            <li>
                <a href="<?php echo base_url().'producto/eventos';?>">
                    <i class="glyphicon icon-notebook icon"></i>
                    <span class="font-bold">Eventos</span>
                </a>
            </li>

            <li>
              <a href="<?php echo base_url().'nosotros/blog';?>">
                <i class="glyphicon icon-list"></i>
                <span>Blog</span>
              </a>
            </li>
            
          </ul>
        </nav>
        <!-- nav -->

      </div>
    </div>
  </aside>