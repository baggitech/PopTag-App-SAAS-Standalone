<!-- Content -->
<div id="content" class="py-4">
  <div class="container mb-3">

    <div class="row">

      <div class="col-lg-12">
        <div class="row">

          <div class="col-12 col-lg-12 mb-3">
            <h3 class="fw-400">
              <span class="text-muted text-truncate">Nome do Link: </span><?php echo $link['link_name']; ?>
            </h3>
          </div>

          <div class="col-12 col-lg-6 mb-3">
            <div class="text-muted text-truncate text-4 mt-2">
              <span><i class="fa fa-circle text-success me-2"></i>Seu link completo é: </span>
              <!-- <a href="https://<?php //echo $link['domain_name']; ?>/<?php //echo $link['link_name']; ?>" target="_blank">
                https://<?php //echo $link['domain_name']; ?>/<?php //echo $link['link_name']; ?>
              </a> -->
              <a href="<?= URL_PATH; ?>biolink/<?= $link['link_name'] ?? ''; ?>" target="_blank">
                <?= URL_PATH; ?>biolink/<?= $link['link_name'] ?? ''; ?>
              </a>
            </div>
          </div>

          <div class="col-12 col-lg-6 mb-3">
            <div class="d-flex gap-2 justify-content-lg-end">

              <a href="#" type="button" class="btn btn-sm btn-primary">
                <i class="fas fa-file-download me-1"></i> PDF
              </a>

              <a href="#" type="button" class="btn btn-sm btn-primary">
                <i class="fa fa-chart-bar me-1"></i> Relatórios
              </a>

              <a href="<?php echo URL_PATH; ?>link" type="button" class="btn btn-sm btn-primary">
                <i class="fa fa-backward me-1"></i> Voltar
              </a>

            </div>
          </div>

        </div>
      </div>

    </div>

    <div class="row">

      <div class="col-12 col-lg-7 mb-3">
        <div class="card shadow-sm rounded">
          <div class="card-header d-flex align-items-center justify-content-between py-3 px-4">
            <h5 class="text-5 fw-400 mt-2">Editar Link</h5>
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
                    <a href="#add-heading-modal" class="dropdown-item" data-bs-toggle="modal">
                      <i class="fa fa-circle text-success me-2"></i>Heading
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
          <div class="card-body p-4">

            <!-- Pills Navigation Style -->
            <ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">

              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-setting-tab" data-bs-toggle="pill" data-bs-target="#pills-setting" type="button" role="tab" aria-controls="pills-setting" aria-selected="true">Configurações</button>
              </li>

              <!-- <li class="nav-item" role="presentation">
                <button class="nav-link ms-2" id="pills-theme-tab" data-bs-toggle="pill" data-bs-target="#pills-theme" type="button" role="tab" aria-controls="pills-theme" aria-selected="false">Temas</button>
              </li> -->

              <li class="nav-item" role="presentation">
                <button class="nav-link ms-2" id="biolink_blocks-tab" data-bs-toggle="pill" data-bs-target="#biolink_blocks" type="button" role="tab" aria-controls="biolink_blocks" aria-selected="false">Blocos</button>
              </li>

            </ul>
            <!-- Pills Navigation Style End -->

            <!-- Pills Navigation Content -->
            <div class="tab-content" id="pills-tabContent">

              <div class="tab-pane fade show active" id="pills-setting" role="tabpanel" aria-labelledby="pills-setting-tab" tabindex="0">

                <!-- Accordion -->
                <div class="accordion" id="accordionSettings">

                  <?php require_once __DIR__ . '/settings/link-name.php'; ?>
                  <?php require_once __DIR__ . '/settings/link-seo.php'; ?>
                  <?php require_once __DIR__ . '/settings/font.php'; ?>
                  <?php require_once __DIR__ . '/settings/background.php'; ?>
                  <?php //require_once __DIR__ . '/settings/utm.php'; ?>
                  <?php //require_once __DIR__ . '/settings/code.php'; ?>
                  <?php //require_once __DIR__ . '/settings/protection.php'; ?>

                </div>
                <!-- Accordion end -->

              </div>

              <div class="tab-pane fade" id="pills-theme" role="tabpanel" aria-labelledby="pills-theme-tab" tabindex="0">

                <!-- Accordion -->
                <div class="accordion" id="accordionThemes">

                  <?php //require_once __DIR__ . '/themes/vcards.php'; 
                  ?>

                </div>
                <!-- Accordion end -->

              </div>

              <div class="tab-pane fade" id="biolink_blocks" role="tabpanel" aria-labelledby="biolink_blocks-tab" tabindex="0">

                <?php if (empty($block_avatar)) { ?>

                  <!-- Empty -->
                  <div class="d-flex flex-column align-items-center justify-content-center py-3">
                    <img src="<?php echo ASSETS_PATH; ?>images/empty.svg" class="col-10 col-md-7 col-lg-4 mb-3" alt="Nenhum bloco existente...">
                    <h2 class="h4 text-muted">Nenhum bloco existente...</h2>
                  </div>
                  <!-- Empty end -->

                <?php } else { ?>

                  <!-- Card block -->
                  <?php foreach ($blocks as $block) { ?>

                    <?php if (file_exists(__DIR__ . '/blocks/' . $block['block_type'] . '.php')) { ?>
                      <?php require __DIR__ . '/blocks/' . $block['block_type'] . '.php'; ?>
                    <?php } ?>

                  <?php } ?>
                  <!-- Card block end -->

                <?php } ?>

              </div>

            </div>
            <!-- Pills Navigation Content End -->

          </div>
        </div>
      </div>

      <div class="col-12 col-lg-5">
        <div class="card shadow-sm rounded sticky">
          <div class="card-header d-flex align-items-center justify-content-between py-3 px-4">
            <h5 class="text-5 fw-400 mt-2">Mobile</h5>

            <form action="" method="POST">
              <input type="hidden" name="form_" value="link_enabledDisabledTwo" readonly>
              <input type="hidden" name="token" value="<?= $_SESSION['token']; ?>" readonly>
              <input type="hidden" name="link_id" value="<?= $link['link_id']; ?>" readonly>
              <div class="form-check form-switch form-check-inline text-3">
                <input type="checkbox" id="link_is_enabled" class="form-check-input" name="link_is_enabled" onChange="this.form.submit()" value="1" <?= ($link['link_is_enabled'] == 1) ? "checked" : ""; ?>>
                <label class="form-check-label text-3" for="link_is_enabled">
                  <?= ($link['link_is_enabled'] == 1) ? "Ativo" : "Inativo"; ?>
                </label>
              </div>
            </form>

          </div>
          <div class="card-body p-4">

            <!-- Preview Iframe -->
            <div class="preview-item">
              <div class="d-flex justify-content-center align-items-center">
                <div class="biolink-preview-container">
                  <div class="biolink-preview">
                    <div class="biolink-preview-iframe-container">
                      <!-- Loading Spinner -->
                      <div id="biolink_preview_iframe_loading" class="biolink-preview-iframe-loading d-none">
                        <div class="biolink-preview-spinner-border biolink-preview-bg-primary" role="status"></div>
                      </div>
                      <!-- Iframe Content -->
                      <iframe scrolling="yes" id="biolink_preview_iframe" class="biolink-preview-iframe" 
                        src="<?= URL_PATH; ?>biolink/<?= $link['link_name'] ?? ''; ?>"></iframe>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Preview Iframe end -->

          </div>
        </div>
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
        <form action="" method="POST" role="form" enctype="multipart/form-data">
          <div class="hidden mb-3">
            <input type="text" name="form_" class="form-control mb-1 readonly-field" value="block_avatar_create" readonly>
            <input type="text" name="token" class="form-control mb-1 readonly-field" value="<?= $_SESSION['token'] ?? ''; ?>" readonly>
            <input type="text" name="link_id" class="form-control mb-1 readonly-field" value="<?= $link['link_id'] ?? ''; ?>" readonly>
          </div>
          <div class="notification-container"></div>
          <div class="col-12 form-group mb-3">
            <label for="avatar_image" class="form-label text-muted">
              <i class="fas fa-fw fa-image fa-sm text-muted"></i> Image
            </label>
            <input id="avatar_image" type="file" name="avatar_image" accept=".jpg, .jpeg, .png, .svg, .gif, .webp" class="form-control" required="required">
            <small class="text-muted form-text">
              .jpg, .jpeg, .png, .svg, .gif, .webp allowed. 2 MB maximum.
            </small>
          </div>
          <div class="col-12">
            <div class="row">
              <div class="col-6 form-group mb-3">
                <label for="avatar_width" class="form-label text-muted">
                  <i class="fas fa-fw fa-expand fa-sm text-muted"></i> Width
                </label>
                <select id="avatar_width" name="avatar_width" class="form-select">
                  <option value="75px">75px</option>
                  <option value="100px">100px</option>
                  <option value="125px">125px</option>
                  <option value="150px">150px</option>
                </select>
              </div>
              <div class="col-6 form-group mb-3">
                <label for="avatar_height" class="form-label text-muted">
                  <i class="fas fa-fw fa-expand fa-sm text-muted"></i> Height
                </label>
                <select id="avatar_height" name="avatar_height" class="form-select">
                  <option value="75px">75px</option>
                  <option value="100px">100px</option>
                  <option value="125px">125px</option>
                  <option value="150px">150px</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-12 form-group mb-3">
            <label for="avatar_border_radius" class="form-label text-muted">
              <i class="fas fa-fw fa-border-all fa-sm text-muted"></i> Border Radius
            </label>
            <select id="avatar_border_radius" name="avatar_border_radius" class="form-select">
              <option value="straight" selected>Straight</option>
              <option value="round">Round</option>
              <option value="rounded">Rounded</option>
              <option value="pill">Pill</option>
            </select>
          </div>
          <div class="col-12 d-grid mt-4">
            <button type="submit" class="btn btn-primary">Enviar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Add Avatar Modal End -->

<!-- Add Heading Modal -->
<div id="add-heading-modal" class="modal fade " role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fw-400">Adicionar um título</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-4">
        <form action="" method="POST" role="form" enctype="multipart/form-data">
          <div class="hidden mb-3">
            <input type="text" name="form_" class="form-control mb-1 readonly-field" value="form_block_create_heading" readonly>
            <input type="text" name="token" class="form-control mb-1 readonly-field" value="<?= $_SESSION['token'] ?? ''; ?>" readonly>
            <input type="text" name="link_id" class="form-control mb-1 readonly-field" value="<?= $link['link_id'] ?? ''; ?>" readonly>
          </div>
          <div class="notification-container"></div>
          <div class="col-12 mb-3">
            <div class="form-group">
              <label for="heading_heading_type">
                <i class="fas fa-fw fa-heading fa-sm text-muted mr-1"></i> Tipo
              </label>
              <select id="heading_heading_type" name="heading_type" class="form-select">
                <option value="h1">H1</option>
                <option value="h2">H2</option>
                <option value="h3">H3</option>
                <option value="h4">H4</option>
                <option value="h5">H5</option>
                <option value="h6">H6</option>
              </select>
            </div>
          </div>
          <div class="col-12 mb-3">
            <div class="form-group">
              <label for="heading_text">
                <i class="fas fa-fw fa-signature fa-sm text-muted mr-1"></i> Título
              </label>
              <input id="heading_text" type="text" class="form-control" name="heading_text" maxlength="256" />
            </div>
          </div>
          <div class="col-12 d-grid mt-4">
            <button type="submit" name="form_block_heading" value="create" class="btn btn-primary">Adicionar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Add Heading Modal End -->