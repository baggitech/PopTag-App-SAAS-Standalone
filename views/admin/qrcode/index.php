  <!-- Content -->
  <div id="content" class="py-4">
    <div class="container mb-3">

      <div class="row">

        <div class="col-lg-12">
          <div class="row">

            <div class="col-12 col-lg-12 mb-3">
              <h3 class="fw-400">
                <span class="text-muted text-truncate">QR Codes: </span>
                <?= $totalEnabled + $totalDisabled; ?>
              </h3>
            </div>

            <div class="col-12 col-lg-6 mb-3">
              <div class="text-muted text-truncate text-4">
                <span>
                  <i class="fa fa-circle text-success me-2"></i><?= $totalEnabled; ?>
                  <?= ($totalEnabled == 1) ? 'ativo' : 'ativos'; ?>
                </span> |
                <span>
                  <i class="fa fa-circle text-danger me-2"></i><?= $totalDisabled; ?>
                  <?= ($totalDisabled == 1) ? 'inativo' : 'inativos'; ?>
                </span>
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

                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modal-one">
                  <i class="fa fa-plus-circle me-1"></i> Criar QR Code
                </button>

                <button type="button" class="btn btn-sm btn-primary" onclick="simularBotaoVoltar()">
                  <i class="fa fa-backward me-1"></i> Voltar
                </button>

              </div>
            </div>

          </div>
        </div>

      </div>

      <div class="row">

        <!-- Left Panel -->
        <aside class="col-12 col-lg-3">
          <?php require_once(__DIR__ . '/../../partials/aside.php'); ?>
        </aside>
        <!-- Left Panel End -->

        <!-- Middle Panel -->
        <div class="col-12 col-lg-9">
          <div class="card shadow-sm rounded">
            <div class="card-header d-flex align-items-center justify-content-between py-3 px-4">
              <h5 class="text-5 fw-400 mt-2">Todos os QR Codes</h5>
            </div>
            <div class="card-body p-4">

              <div class="table-responsive">
                <table id="example" class="table table-hover table-striped table-bordered text-3 fw-500" style="width:100%">
                  <thead>
                    <tr class="bg-light">
                      <td class="text-center py-3">#</td>
                      <td class="text-start py-3">QR Code</td>
                      <td class="text-center pb-3">Status</td>
                      <td class="text-center pb-3">Ações</td>
                    </tr>
                  </thead>
                  <tbody class="border-top">

                    <?php foreach ($qrcodes as $value): ?>
                      
                      <tr class="position-relative text-start align-middle">
                        <td class="text-center">
                          <h5 class="text-3 fw-400"><?= $value['qrcode_id']; ?></h5>
                        </td>
                        <td>
                          <div class="d-flex align-items-center my-2">
                            <div class="position-relative d-flex me-3">
                              <span class="pt-2">
                                <img src="<?= UPLOADS_PATH; ?><?= $value['qrcode_image']; ?>" width="80px">
                              </span>
                            </div>
                            <a class="text-3 link-dark fw-500" href="#">
                              Tipo QR Code: <?= $value['qrcode_type']; ?><br>
                              <span class="text-muted text-2 lh-base mt-1 mb-0">
                                Nome: <?= $value['qrcode_name']; ?> | <?= $value['qrcode_image']; ?><br>
                                Biolink: <?= $value['link_name']; ?> | Domínio: <?= $value['domain_name']; ?>
                              </span>
                            </a>
                          </div>
                        </td>
                        <td class="text-center">


                          <form action="" method="POST">
                            <input type="hidden" name="form_qrcode_enabled_1" readonly>
                            <input type="hidden" name="token" value="<?= $_SESSION['token']; ?>" readonly>
                            <input type="hidden" name="qrcode_id" value="<?= $value['qrcode_id']; ?>" readonly>
                            <div class="form-check form-switch form-check-inline text-4">
                              <input type="checkbox" class="form-check-input" name="qrcode_is_enabled" onChange="this.form.submit()" value="1" <?= ($value['qrcode_is_enabled'] == 1) ? "checked" : ""; ?>>
                              <label class="form-check-label text-3" for="statusChecked">
                                <?= ($value['qrcode_is_enabled'] == 1) ? "Ativo" : "Inativo"; ?>
                              </label>
                            </div>
                          </form>

                        </td>
                        <td class="text-center">
                          <div class="btn-group">
                            <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                              Opções
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                              <li>

                                <form action="" method="POST" enctype="multipart/form-data">
                                  <input type="hidden" name="form_qrcode_get" readonly>
                                  <input type="hidden" name="token" value="<?= $_SESSION['token']; ?>" readonly>
                                  <input type="hidden" name="qrcode_id" value="<?= $value['qrcode_id']; ?>" readonly>
                                  <button type="submit" class="dropdown-item">
                                    <i class="fa fa-pen me-2"></i> Editar
                                  </button>
                                </form>

                              </li>
                              <li>
                                <a href="#" class="dropdown-item" type="button">
                                  <i class="fa fa-chart-bar me-2"></i>Estatisticas
                                </a>
                              </li>
                              <li>

                                <form action="" method="POST" enctype="multipart/form-data">
                                  <input type="hidden" name="form_qrcode_delete" value="1" readonly>
                                  <input type="hidden" name="token" value="<?= $_SESSION['token']; ?>" readonly>
                                  <input type="hidden" name="qrcode_id" value="<?= $value['qrcode_id']; ?>" readonly>
                                  <input type="hidden" name="qrcode_image" value="<?= $value['qrcode_image']; ?>" readonly>
                                  <button type="submit" class="dropdown-item">
                                    <i class="fa fa-trash me-2"></i> Deletar
                                  </button>
                                </form>
                                
                              </li>
                            </ul>
                          </div>
                        </td>
                      </tr>

                    <?php endforeach; ?>

                  </tbody>
                </table>
              </div>

            </div>
          </div>
        </div>
        <!-- Middle Panel End -->

      </div>

    </div>
  </div>
  <!-- Content end -->

  <!-- Create Link Modal -->
  <div id="modal-one" class="modal fade " role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fw-400">Criar QR Code</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-4">
          <form action="" method="POST" enctype="multipart/form-data">
            <div class="row">

              <input type="hidden" name="form_qrcode_create" value="1" readonly>
              <input type="hidden" name="token" value="<?= $_SESSION['token']; ?>" readonly>
              <input type="hidden" name="qrcode_id" value="<?= $value['qrcode_id']; ?>" readonly>

              <div class="col-12 form-group mb-3">
                <label for="qrcode_type" class="form-label text-muted">
                  <i class="fa fa-fw fa-qrcode fa-sm text-muted mr-1"></i> QR Tipo
                </label>
                <select id="qrcode_type" name="qrcode_type" class="form-control selectpicker show-tick" data-style="form-select" title="Escolha o tipo de QR Code" data-live-search="true" data-live-search-placeholder="Buscar" data-size="6" data-allow-clear="true">
                  <option data-icon="fas fa-envelope-open-text text-3 me-2" value="email">Email</option>
                  <option data-icon="fab fa-facebook text-3 me-2" value="facebook">Facebook</option>
                  <option data-icon="fas fa-map-marked-alt text-3 me-2" value="location">Location</option>
                  <option data-icon="fa fa-music text-3 me-2" value="mp3">MP3</option>
                  <option data-icon="fa fa-file-pdf text-3 me-2" value="pdf">PDF</option>
                  <option data-icon="fab fa-pix text-3 me-2" value="pix">PIX</option>
                  <option data-icon="fas fa-comment-alt text-3 me-2" value="sms">SMS</option>
                  <option data-icon="fas fa-file-alt text-3 me-2" value="text">Text</option>
                  <option data-icon="fab fa-twitter text-3 me-2" value="twitter">Twitter</option>
                  <option data-icon="fas fa-list-alt text-3 me-2" value="vcard">Vcard</option>
                  <option data-icon="fas fa-globe text-3 me-2" value="url">URL</option>
                  <option data-icon="fas fa-wifi text-3 me-2" value="wifi">WiFi</option>
                  <option data-icon="fab fa-youtube text-3 me-2" value="youtube">Youtube</option>
                </select>
                <small class="text-muted form-text">
                  Escolha o tipo de QR Code que deseja gerar.
                </small>
              </div>

              <div class="col-12 form-group mb-3">
                <label for="qrcode_name" class="form-label text-muted">
                  <i class="fa fa-fw fa-signature fa-sm text-muted mr-1"></i> Nome
                </label>
                <input type="text" id="qrcode_name" class="form-control" name="qrcode_name" value="" maxlength="64">
                <small class="text-muted form-text">
                  Dê um nome para o seu QR Code! Isso ajuda na hora de localizar.
                </small>
              </div>

              <div class="col-12 form-group mb-3">
                <label for="link_id" class="form-label text-muted">
                  <i class="fa fa-fw fa-adjust fa-sm text-muted mr-1"></i> Link *
                </label>
                <select id="link_id" name="link_id" class="form-control selectpicker show-tick" data-style="form-select" title="Escolha o Link" data-live-search="true" data-live-search-placeholder="Buscar" data-size="6" data-allow-clear="true">
                  <?php foreach ($links as $value): ?>
                    <option value="<?= $value['link_id']; ?>"><?= $value['link_name']; ?></option>
                  <?php endforeach; ?>
                </select>
                <small class="text-muted form-text">
                  Para criar um pixel tem que escolher um link.
                </small>
              </div>

              <div class="col-12 form-group mb-3">
                <div class="alert alert-info d-flex p-3">
                  <div>
                    <label for="qrcode_is_enabled" class="form-label text-3 mb-0">QR Code ativo?</label>
                    <p class="opacity-6 mb-0">
                      Você pode criar o QR Code e deixa-lo inativo imediatamente e só ativa-lo quando for usar.
                    </p>
                  </div>
                  <div class="form-check form-switch text-5 ms-auto me-n2">
                    <input type="checkbox" id="qrcode_is_enabled" name="qrcode_is_enabled" class="form-check-input" role="switch" value="1" checked>
                  </div>
                </div>
              </div>

              <div class="col-12 d-grid">
                <button type="submit" name="submit" class="btn btn-primary">Gerar QR Code</button>
              </div>

            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Create Link Modal End -->