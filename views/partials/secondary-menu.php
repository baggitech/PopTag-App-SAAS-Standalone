<?php if(isset($_SESSION['user']) && !empty($_SESSION['user'])): ?>

    <!-- Secondary menu default -->
    <div class="bg-white">
      <div class="container d-flex justify-content-center">
        <ul class="nav nav-tabs nav-lg border-bottom-0">

          <!-- -->
          <li class="nav-item"> 
            <a class="nav-link <?php if($viewName == 'dashboard/index') {echo 'active';} ?>" href="<?=URL_PATH;?>dashboard">Dashboard</a>
          </li>

          <!-- -->
          <li class="nav-item"> 
            <a class="nav-link <?php if($viewName == 'admin/project/index' || $viewName == 'admin/project/edit') {echo 'active';} ?>" href="<?=URL_PATH;?>project">Projetos</a>
          </li>

          <!-- -->
          <li class="nav-item"> 
            <a class="nav-link <?php if($viewName == 'admin/link/index' || $viewName == 'admin/link/edit') {echo 'active';} ?>" href="<?=URL_PATH;?>link">Links</a>
          </li>

          <!-- -->
          <li class="nav-item"> 
            <a class="nav-link <?php if($viewName == 'admin/qrcode/index' || $viewName == 'admin/qrcode/edit') {echo 'active';} ?>" href="<?=URL_PATH;?>qrcode">QRCodes</a>
          </li>

          <!-- 
          <li class="nav-item"> 
            <a class="nav-link <?php if($viewName == 'shortlink/index') {echo 'active';} ?>" href="<?=URL_PATH;?>shortlink">Short Links</a>
          </li>-->

          <!-- -->
          <li class="nav-item"> 
            <a class="nav-link <?php if($viewName == 'admin/pixel/index' || $viewName == 'admin/pixel/edit') {echo 'active';} ?>" href="<?=URL_PATH;?>pixel">Pixels</a>
          </li>

          <!-- -->
          <?php if($_SESSION['level']>=3): ?>
          <li class="nav-item"> 
            <a class="nav-link <?php if($viewName == 'admin/settings/index') {echo 'active';} ?>" href="<?=URL_PATH;?>settings">Configurações</a>
          </li>
          <?php endif; ?>

        </ul>
      </div>
    </div>
    <!-- Secondary menu default end -->

<?php endif; ?>