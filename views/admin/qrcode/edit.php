<!-- Content -->
<div id="content" class="py-4">
  <div class="container mb-3">

    <div class="row">

      <div class="col-lg-12 mb-3">
        <div class="row">

          <div class="col-12 col-lg-12 mb-3">
            <?php $qrcode_type = ucwords(str_replace("_", " ", $qrcode['qrcode_type'])); ?>
            <h3 class="fw-400">
              <span class="text-muted text-truncate">QR Code: </span><?= $qrcode_type; ?>
            </h3>
          </div>

          <div class="col-12 col-lg-6 mb-3">
            <div class="text-muted text-truncate text-4">
              <span><i class="fa fa-circle text-success me-2"></i>Link: </span>
              <a href="https://<?= $link['domain_name']; ?>/<?= $link['link_name']; ?>" target="_blank">
                https://<?= $link['domain_name']; ?>/<?= $link['link_name']; ?>
              </a>
            </div>
          </div>

          <div class="col-12 col-lg-6 mb-2">
            <div class="d-flex gap-2 justify-content-lg-end">

              <a href="#" type="button" class="btn btn-sm btn-primary">
                <i class="fas fa-file-download me-1"></i> PDF
              </a>

              <a href="#" type="button" class="btn btn-sm btn-primary">
                <i class="fa fa-chart-bar me-1"></i> Relatórios
              </a>

              <a href="<?= URL_PATH; ?>/qrcode" type="button" class="btn btn-sm btn-primary">
                <i class="fa fa-backward me-1"></i> Voltar
              </a>

            </div>
          </div>

        </div>
      </div>

    </div>

    <div class="row">

      <!-- Left Panel -->
      <aside class="col-12 col-lg-3">
        <?php require_once(__DIR__ . '/../partials/aside.php'); ?>
      </aside>
      <!-- Left Panel End -->

      <!-- Middle Panel -->
      <div class="col-12 col-lg-6 mb-3">
        <div class="card shadow-sm rounded">
          <div class="card-header d-flex align-items-center justify-content-between py-3 px-4">
            <h5 class="text-5 fw-400 mt-2">Editar QR Code</h5>
          </div>
          <div class="card-body p-4">

            <div class="p-3 mt-2 b2d rounded">
              <div class="row">

                <!-- START ALERTS -->
                <div class="col-lg-12">

                  <?php //require_once(__DIR__.'/../../../../../app/helpers/Alerts.php'); 
                  ?>

                </div>
                <!-- END ALERTS -->

                <!-- START CONTENT -->
                <div class="col-lg-12">

                  <form action="" method="post" role="form" enctype="multipart/form-data">

                    <input type="hidden" name="form_qrcode_update" value="1" readonly>
                    <input type="hidden" name="token" value="<?= $_SESSION['token']; ?>" readonly>
                    <input type="hidden" name="qrcode_id" id="qrcode_id" value="<?= $_SESSION['qrcode_id']; ?>" readonly>
                    <input type="hidden" name="qrcode_type" value="<?= $_SESSION['qrcode_type']; ?>" readonly>

                    <div class="col-12 form-group mb-3">
                      <?php require_once __DIR__ . '/types/' . $_SESSION['qrcode_type'] . '.php'; ?>
                    </div>

                    <div class="form-group d-flex justify-content-end mt-5">
                      <button type="submit" class="btn btn-outline-primary btn-sm">
                        <i class="fa fa-qrcode me-2"></i> Gerar QR code
                      </button>
                    </div>

                  </form>

                </div>

              </div>
            </div>

          </div>
        </div>
      </div>
      <!-- Middle Panel End -->

      <div class="col-12 col-lg-3">
        <div class="card shadow-sm rounded card-fix">
          <div class="card-header d-flex align-items-center justify-content-between py-3 px-4">
            <h5 class="text-5 fw-400 mt-2">QR Code</h5>

            <!-- <div class="form-check form-switch p-0">
              <form action="" method="POST">
                <input type="hidden" name="form_qrcode_enabled_2" readonly>
                <input type="hidden" name="token" value="<?//= $_SESSION['token']; ?>" readonly>
                <input type="hidden" name="qrcode_id" value="<?//= $qrcode['qrcode_id']; ?>" readonly>
                <div class="form-check form-switch form-check-inline text-4">
                  <input type="checkbox" class="form-check-input" name="qrcode_is_enabled" onChange="this.form.submit()" value="1" <?= ($qrcode['qrcode_is_enabled'] == 1) ? "checked" : ""; ?>>
                  <label class="form-check-label text-3" for="statusChecked">
                    <?//= ($qrcode['qrcode_is_enabled'] == 1) ? "Ativo" : "Inativo"; ?>
                  </label>
                </div>
              </form>
            </div> -->

          </div>
          <div class="card-body p-4">

            <div class="d-grid justify-content-center">
              <div class="mb-4 border">
                <img src="<?= UPLOADS_PATH; ?><?= $qrcode['qrcode_image']; ?>" width="100%">
              </div>
              <div class="d-grid gap-2">
                <button type="button" class="btn btn-sm btn-primary download-btn">
                  <i class="fa fa-cloud-download-alt me-2"></i> Download
                </button>
                <button class="btn btn-sm btn-outline-primary embed-btn" data-bs-toggle="modal" data-bs-target="#modal-one">
                  <i class="fa fa-code me-2"></i> Incorporar
                </button>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>

  </div>
</div>
<!-- Content end -->

<!-- Create Link Modal -->
<div id="modal-one" class="modal fade " role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fw-400">Incorpore o código QR em seu site</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"></span>
        </button>
      </div>
      <div class="modal-body p-4">

        <p>Para incorporar o código QR em seu site, use o código HTML a seguir.<br> O uso comercial é permitido.</p>

        <textarea class="form-control" rows="5"><a rel='nofollow' href='https://www.poptag.app' border='0' style='cursor:default'></a><img src='https://chart.googleapis.com/chart?cht=qr&chl=<?= $qrcode['qrcode_fields']; ?>&chs=180x180&choe=UTF-8&chld=L|2' alt=""></textarea>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
<!-- Create Link Modal End -->