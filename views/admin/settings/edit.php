<!-- Content -->
<div id="content" class="py-4">
  <div class="container mb-3">
    <div class="row">

      <div class="col-12">
          <div class="mb-5">
              <div class="row">
                <div class="col-12 col-lg-12">
                  <div class="container mt-2 ev">
                    <nav class="pt-3" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                      </ol>
                    </nav>
                  </div>
                </div>
              </div>
          </div>
      </div>

    </div>
    <div class="row">

      <div class="col-12 col-lg-12 mb-3">

        <!-- Pills Navigation Style -->
        <div class="d-flex justify-content-between mb-3">
          <ul class="nav nav-pills" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-setting-tab" data-bs-toggle="pill" data-bs-target="#pills-setting" type="button" role="tab" aria-controls="pills-setting" aria-selected="true">Configurações</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link ms-2" id="pills-theme-tab" data-bs-toggle="pill" data-bs-target="#pills-theme" type="button" role="tab" aria-controls="pills-theme" aria-selected="false">Temas</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link ms-2" id="biolink_blocks-tab" data-bs-toggle="pill" data-bs-target="#biolink_blocks" type="button" role="tab" aria-controls="biolink_blocks" aria-selected="false">Blocos</button>
            </li>
          </ul>
          <ul class="nav nav-pills">
            <li class="nav-item dropdown" role="presentation">
              <button type="button" class="nav-link dropdown-toggle dropdown-toggle-simple ms-2" data-bs-toggle="dropdown" id="#" role="button" aria-expanded="false">
                <!--<i class="fa fa-cog me-1"></i>-->
                <i class="fa fa-plus-circle me-1"></i> Add blocos
              </button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <a href="#add-avatar-modal" class="dropdown-item" data-bs-toggle="modal">
                    <i class="fa fa-circle text-success me-2"></i>Avatar
                  </a>
                </li>
                <li>
                  <a href="#" class="dropdown-item" data-bs-toggle="modal">
                    <i class="fa fa-circle text-success me-2"></i>Link
                  </a>
                </li>
                <li>
                  <a href="#" class="dropdown-item" data-bs-toggle="modal">
                    <i class="fa fa-circle text-success me-2"></i>Parágrafo
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- Pills Navigation Style End -->

        <!-- Pills Navigation Content -->
        <div class="tab-content" id="pills-tabContent">

          <div class="tab-pane fade show active" id="pills-setting" role="tabpanel" aria-labelledby="pills-setting-tab" tabindex="0">
  
            <!-- Card setting -->
            <div class="card shadow-sm rounded">  
              <div class="card-body p-4">

                  <!-- Accordion -->
                  <h5 class="mb-4">Título aqui!</h5>
                  <div class="accordion" id="accordionSettings">

                      <?php //require_once(__DIR__.'/settings/url.php'); ?>
                      <?php //require_once(__DIR__.'/settings/seo.php'); ?>
                      <?php //require_once(__DIR__.'/settings/font.php'); ?>
                      <?php //require_once(__DIR__.'/settings/background.php'); ?>
                      <?php //require_once(__DIR__.'/settings/utm.php'); ?>
                      <?php //require_once(__DIR__.'/settings/code.php'); ?>
                      <?php //require_once(__DIR__.'/settings/protection.php'); ?>

                  </div>
                  <!-- Accordion end -->

              </div>
            </div>
            <!-- Card link end -->

          </div>

          <div class="tab-pane fade" id="pills-theme" role="tabpanel" aria-labelledby="pills-theme-tab" tabindex="0">
            
            <!-- Card theme -->
            <div class="card shadow-sm rounded">  
              <div class="card-body p-4">

              <!-- Accordion -->
              <h5 class="mb-4">Título aqui!</h5>
              <div class="accordion" id="accordionThemes">

                <?php //require_once(__DIR__.'/themes/vcards.php'); ?>

              </div>
              <!-- Accordion end -->

              </div>
            </div>
            <!-- Card theme end -->

          </div>

          <div class="tab-pane fade" id="biolink_blocks" role="tabpanel" aria-labelledby="biolink_blocks-tab" tabindex="0">
            
            <?php //if(empty($block)):?>

            <!-- Card link -->
            <div class="card shadow-sm rounded">  
              <div class="card-body p-4">

                <!-- Empty -->
                <div class="d-flex flex-column align-items-center justify-content-center py-3">
                  <img src="<?=URL_PATH;?>assets/images/no_rows.svg" class="col-10 col-md-7 col-lg-4 mb-3" alt="Nenhum bloco existente...">
                  <h2 class="h4 text-muted">Nenhum bloco existente...</h2>
                </div>
                <!-- Empty end -->

              </div>
            </div>
            <!-- Card link end -->

            <?php //else: ?>

            <!-- Card block -->  
            <?php //foreach ($block as $value): ?>
              <?php //require_once(__DIR__ . '/blocks/'.$value['type'].'.php'); ?>
            <?php //endforeach; ?>
            <!-- Card block end -->

            <?php //endif; ?>

          </div>

        </div>
        <!-- Pills Navigation Content End -->

      </div>

    </div>
  </div>
</div>
<!-- Content end -->

<!-- Add Avatar Modal -->
<div id="add-avatar-modal" class="modal fade " role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fw-400">Adicionar avatar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-4">

        <form action="" method="POST">



        </form>

      </div>
    </div>
  </div>
</div>
<!-- Add Avatar Modal End -->