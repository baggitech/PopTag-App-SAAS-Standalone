  <!-- Content -->
  <div id="content" class="py-4">
    <div class="container mb-3">

      <div class="row">

        <div class="col-lg-12">
          <div class="row">

            <div class="col-12 col-lg-12 mb-3">
              <h3 class="fw-400">
                <span class="text-muted text-truncate">Projetos: </span>
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

                <!-- <a href="#" type="button" class="btn btn-sm btn-primary">
                  <i class="fas fa-file-download me-1"></i> PDF
                </a> -->

                <a href="#" type="button" class="btn btn-sm btn-primary">
                  <i class="fa fa-chart-bar me-1"></i> Relatórios
                </a>

                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modal-one">
                  <i class="fa fa-plus-circle me-1"></i> Criar Projeto
                </button>

                <!-- <a href="<?= URL_PATH; ?>dashboard" type="button" class="btn btn-sm btn-primary">
                  <i class="fa fa-backward me-1"></i> Voltar
                </a> -->

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
              <h5 class="text-5 fw-400 mt-2">Todos os projetos</h5>
            </div>
            <div class="card-body p-4">

              <div class="table-responsive">
                <table id="example" class="table table-hover table-striped table-bordered text-3 fw-500" style="width:100%">
                  <thead>
                    <tr class="bg-light">
                      <td class="text-center py-3">#</td>
                      <td class="text-start py-3">Projeto</td>
                      <td class="text-center pb-3">Status</td>
                      <td class="text-center pb-3">Recursos</td>
                      <td class="text-center pb-3">Data</td>
                      <td class="text-center pb-3">Ações</td>
                    </tr>
                  </thead>
                  <tbody class="border-top">

                    <?php foreach ($projects as $value): ?>
                      <tr class="position-relative text-start align-middle">

                        <td class="text-center">
                          <?= $value['project_id']; ?>
                        </td>

                        <td>
                          <div class="d-flex align-items-center my-2">
                            <div class="position-relative d-flex me-3">
                              <span class="badge badge-light" style="background: <?= $value['project_color']; ?> !important;">
                              </span>
                            </div>
                            <a class="text-3 link-dark fw-500" href="collection.html">
                              <?= $value['project_name']; ?>
                            </a>
                          </div>
                        </td>

                        <td class="text-center">
                          <form action="" method="POST">

                            <input type="hidden" name="form_project_enabled_1" readonly>

                            <input type="hidden" name="token" value="<?= $_SESSION['token']; ?>" readonly>

                            <input type="hidden" name="project_id" value="<?= $value['project_id']; ?>" readonly>

                            <div class="form-check form-switch form-check-inline text-4">

                              <input type="checkbox" class="form-check-input" name="project_is_enabled" onChange="this.form.submit()" value="1" <?= ($value['project_is_enabled'] == 1) ? "checked" : ""; ?>>

                              <label class="form-check-label text-3" for="statusChecked">
                                <?= ($value['project_is_enabled'] == 1) ? "Ativo" : "Inativo"; ?>
                              </label>

                            </div>

                          </form>
                        </td>

                        <td class="text-center">
                          <a href="#">
                            <span class="text-primary fw-500" data-bs-toggle="tooltip" title="Links">
                              <i class="fa fa-fw fa-link text-muted"></i>
                            </span>
                          </a>
                          <a href="#">
                            <span class="text-primary fw-500" data-bs-toggle="tooltip" title="Dados">
                              <i class="fa fa-fw fa-database text-muted"></i>
                            </span>
                          </a>
                          <a href="#">
                            <span class="text-primary fw-500" data-bs-toggle="tooltip" title="QR Codes">
                              <i class="fa fa-fw fa-qrcode text-muted"></i>
                            </span>
                          </a>
                          <a href="#">
                            <span class="text-primary fw-500" data-bs-toggle="tooltip" title="Pixels">
                              <i class="fa fa-fw fa-box text-muted"></i>
                            </span>
                          </a>
                        </td>

                        <td class="text-center">
                          <a href="#">
                            <span class="text-primary fw-500" data-bs-toggle="tooltip" title="Criado em: <?= $value['project_datetime']; ?>">
                              <i class="fa fa-fw fa-calendar text-muted"></i>
                            </span>
                          </a>
                          <a href="#">
                            <span class="text-primary fw-500" data-bs-toggle="tooltip" title="Atualizado em: <?= $value['project_last_datetime']; ?>">
                              <i class="fa fa-fw fa-history text-muted"></i>
                            </span>
                          </a>
                        </td>

                        <td class="text-center">
                          <div class="btn-group">
                            <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                              Opções
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                              <li>

                                <form action="" method="POST">
                                  <input type="hidden" name="form_edit" readonly>
                                  <input type="hidden" name="token" value="<?= $_SESSION['token']; ?>" readonly>
                                  <input type="hidden" name="project_id" value="<?= $value['project_id']; ?>" readonly>
                                  <button type="submit" class="dropdown-item">
                                    <i class="fa fa-pen me-2"></i> Editar
                                  </button>
                                </form>

                                <!--
                              <button type="submit" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modal-two-<?= $value['project_id']; ?>">
                                <i class="fa fa-pen me-2"></i> Editar
                              </button>
                              -->

                              </li>
                              <li>
                                <a href="#" class="dropdown-item" type="button">
                                  <i class="fa fa-chart-bar me-2"></i>Estatisticas
                                </a>
                              </li>
                              <li>
                                <form action="" method="POST">
                                  <input type="hidden" name="form_delete" readonly>
                                  <input type="hidden" name="token" value="<?= $_SESSION['token']; ?>" readonly>
                                  <input type="hidden" name="project_id" id="project_id" value="<?= $value['project_id']; ?>">
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

  <!-- Create Link Modal One -->
  <div id="modal-one" class="modal fade " role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fw-400">Criar um novo projeto</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-4">
          <form action="" method="POST">
            <div class="row">

              <small class="form-text text-danger mb-3">
                <i class="fa fa-sm fa-info-circle text-3"></i>
                Campos assinados com asterisco (*) são obrigatórios.
              </small>

              <input type="hidden" name="form_create" readonly>
              <input type="hidden" name="token" value="<?= $_SESSION['token']; ?>">

              <div class="col-12 form-group mb-3">
                <label for="project_name" class="form-label text-muted">
                  <i class="fa fa-fw fa-signature fa-sm text-muted"></i> Nome
                </label>
                <input type="text" id="project_name" class="form-control" name="project_name" value="">
                <small class="text-muted form-text">
                  Dê um nome ao seu Projeto! Isso ajuda na hora de localizar. Ou deixe <br>
                  em branco para gerar um aleatoriamente.
                </small>
              </div>

              <div class="col-12 form-group mb-3">
                <label for="project_color" class="text-muted mb-2">
                  <i class="fa fa-fw fa-palette fa-sm ms-1"></i> Cor do projeto
                </label><br>
                <div class="pickr">
                  <input type="color" name="project_color" id="project_color" class="pcr-button" value="">
                  <small class="text-muted form-text">
                    A cor é usada para ajudar a diferenciar os projetos.
                  </small>
                </div>
              </div>

              <div class="col-12 form-group mb-3">
                <label for="project_description" class="form-label text-muted">
                  <i class="fa fa-fw fa-signature fa-sm text-muted"></i> Nota
                </label>
                <textarea class="form-control" rows="3" id="project_description" name="project_description" placeholder="Comentário..."></textarea>
                <small class="text-muted form-text">
                  Insira comentários sobre como será usado, campanha etc...
                </small>
              </div>

              <div class="col-12 form-group mb-3">
                <div class="alert alert-info d-flex p-3">
                  <div>
                    <label for="unlocked" class="form-label text-3 mb-0">Projeto ativo?</label>
                    <p class="opacity-6 mb-0">Você pode criar o projeto e deixa-lo inativo imediatamente e só ativa-lo quando for usar.</p>
                  </div>
                  <div class="form-check form-switch text-5 ms-auto me-n2">
                    <input type="checkbox" id="project_is_enabled" name="project_is_enabled" class="form-check-input" role="switch" value="1" checked>
                  </div>
                </div>
              </div>

              <div class="col-12 d-grid">
                <button type="submit" name="submit" class="btn btn-primary">Criar Projeto</button>
              </div>

            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Create Link Modal One End -->