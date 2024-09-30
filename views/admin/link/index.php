  <!-- Content -->
  <div id="content" class="py-4">
    <div class="container mb-3">

      <div class="row">

        <div class="col-lg-12">
          <div class="row">

            <div class="col-12 col-lg-12 mb-3">
              <h3 class="fw-400">
                <span class="text-muted text-truncate">Links: </span>
                <?= $totalEnabled + $totalDisabled; ?>
              </h3>
            </div>

            <div class="col-12 col-lg-6 mb-3">
              <div class="text-muted text-truncate text-4 mt-2">
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
                  <i class="fa fa-plus-circle me-1"></i> Criar link
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

        <!-- Left Panel
        <aside class="col-12 col-lg-3">
          <?php //require_once(__DIR__ . '/../../partials/aside.php'); ?>
        </aside> -->
        <!-- Left Panel End -->

        <!-- Middle Panel -->
        <div class="col-12 col-lg-12">
          <div class="card shadow-sm rounded">
            <div class="card-header d-flex align-items-center justify-content-between py-3 px-4">
              <h5 class="text-5 fw-400 mt-2">Todos os links</h5>
            </div>
            <div class="card-body p-4">

              <div class="table-responsive">
                <table id="example" class="table table-hover table-striped table-bordered text-3 fw-500" style="width:100%">
                  <thead>
                    <tr class="bg-light">
                      <td class="text-center py-3">#</td>
                      <td class="text-start py-3">Link</td>
                      <td class="text-center pb-3">Status</td>
                      <td class="text-center pb-3">Ações</td>
                    </tr>
                  </thead>
                  <tbody class="border-top">

                    <?php foreach ($links as $value): ?>
                      <tr class="position-relative text-start align-middle">
                        <td class="text-center">
                          <h5 class="text-3 fw-400"><?= $value['link_id']; ?></h5>
                        </td>
                        <td>
                          <div class="d-flex align-items-center my-2">
                            <div class="position-relative d-flex me-3">
                              <span class="text-5 text-primary">
                                <i class="fa fa-link"></i>
                              </span>
                            </div>
                            <a class="text-3 link-dark fw-500" href="collection.html">
                              <?= $value['link_name']; ?><br>
                              <span class="text-muted text-2 lh-base mt-1 mb-0">
                                https://<?= $value['domain_name']; ?>/<?= $value['link_name']; ?>
                              </span>
                            </a>
                          </div>
                        </td>
                        <td class="text-center">

                          <form action="" method="POST">
                         
                            <input type="hidden" name="form_" value="link_enabledDisabled" readonly>
                            <input type="hidden" name="token" value="<?= $_SESSION['token']; ?>" readonly>
                            <input type="hidden" name="link_id" value="<?= $value['link_id']; ?>" readonly>

                            <div class="form-check form-switch form-check-inline text-4">
                              <input type="checkbox" id="link_is_enabled" class="form-check-input" name="link_is_enabled" onChange="this.form.submit()" value="1" <?= ($value['link_is_enabled'] == 1) ? "checked" : ""; ?>>
                              <label class="form-check-label text-3" for="link_is_enabled">
                                <?= ($value['link_is_enabled'] == 1) ? "Ativo" : "Inativo"; ?>
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
                                <form action="" method="POST">
                                  <div class="hidden mb-3">
                                    <input type="text" name="form_" value="get_link" readonly>
                                    <input type="text" name="token" value="<?= $_SESSION['token'] ?? ''; ?>" readonly>
                                    <input type="text" name="link_id" value="<?= $value['link_id'] ?? ''; ?>" readonly>
                                  </div>
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
                                <form action="" method="POST">
                                  <div class="hidden mb-3">
                                    <input type="text" name="form_" value="link_delete" readonly>
                                    <input type="text" name="token" value="<?= $_SESSION['token'] ?? ''; ?>" readonly>
                                    <input type="text" name="link_id" value="<?= $value['link_id'] ?? ''; ?>" readonly>
                                  </div>
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
          <h5 class="modal-title fw-400">Criar Link</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-4">

          <form action="" method="POST">

            <input type="hidden" name="form_" value="link_create" readonly>
            <input type="hidden" name="token" value="<?= $_SESSION['token'] ?? ''; ?>">
            <input type="hidden" name="user_id" value="<?= $_SESSION['user_id'] ?? ''; ?>">

            <div class="row g-3">
              <div class="col-12">

                <!-- URL Link -->
                <div class="position-relative mb-3">

                  <label for="url" class="form-label text-muted">
                    <i class="fa fa-link"></i> URL completa (link)
                  </label>

                  <div class="input-group">
                    <div class="input-group-text p-0">
                      <select name="domain_name" id="domain_name" class="form-select border-0 bg-transparent">
                        <option value="poptag.app" selected>poptag.app/</option>
                        <option value="poptag.adv">poptag.adv/</option>
                        <option value="poptag.link">poptag.link/</option>
                        <option value="poptag.eu">poptag.eu/</option>
                        <option value="poptag.me">poptag.me/</option>
                        <option value="poptag.biz">poptag.biz/</option>
                        <option value="poptag.kids">poptag.kids/</option>
                        <option value="poptag.doctor">poptag.doctor/</option>
                        <option value="poptag.events">poptag.events/</option>
                        <option value="poptag.pet">poptag.pet/</option>
                      </select>
                    </div>
                    <input type="text" name="link_name" id="link_name" class="form-control" value="" placeholder="Nome do Link">
                  </div>

                  <small class="text-muted">Deixe em branco para um gerado aleatoriamente.</small>

                </div>

              </div>
              <div class="col-12 d-grid mt-4">
                <button type="submit" class="btn btn-primary">Criar link</button>
              </div>
            </div>

          </form>

        </div>
      </div>
    </div>
  </div>
  <!-- Create Link Modal End -->