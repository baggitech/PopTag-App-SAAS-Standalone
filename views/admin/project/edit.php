<!-- Content -->
<div id="content" class="py-4">
  <div class="container mb-3">

    <div class="row">

      <div class="col-lg-12">
        <div class="row">

          <div class="col-12 col-lg-12 mb-3">
            <h3 class="fw-400">
              <span class="text-muted text-truncate">Projeto: </span>
              <?= $project['project_id']; ?> -
              <?= $project['project_name']; ?>
            </h3>
          </div>

          <div class="col-12 col-lg-6 mb-3">
            <div class="text-muted text-truncate text-4 mt-2">
              <span><i class="fa fa-circle text-<?= ($project['project_is_enabled'] == 1) ? "success" : "danger"; ?> me-2"></i>
                <?= ($project['project_is_enabled'] == 1) ? "ativo" : "inativo"; ?>
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

              <a href="<?= URL_PATH; ?>/project" type="button" class="btn btn-sm btn-primary">
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
      <div class="col-12 col-lg-9">
        <div class="card shadow-sm rounded">
          <div class="card-header d-flex align-items-center justify-content-between py-3 px-4">
            <h5 class="text-5 fw-400 mt-2">Editar Projeto</h5>
            <ul class="nav nav-pills" hidden>
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
          <div class="card-body p-4">

            <form action="" method="POST">
              <div class="row">

                <small class="form-text text-danger mb-3">
                  <i class="fa fa-sm fa-info-circle text-3"></i>
                  Campos assinados com asterisco (*) são obrigatórios.
                </small>

                <input type="hidden" name="form_update" readonly>
                <input type="hidden" name="token" value="<?= $_SESSION['token']; ?>">
                <input type="hidden" name="project_id" value="<?= $project['project_id']; ?>" readonly>

                <div class="col-12 form-group mb-3">
                  <label for="project_name" class="form-label text-muted">
                    <i class="fa fa-fw fa-signature fa-sm text-muted"></i> Nome
                  </label>
                  <input type="text" id="project_name" class="form-control" name="project_name" value="<?= $project['project_name']; ?>">
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
                    <input type="color" name="project_color" id="project_color" class="pcr-button" value="<?= $project['project_color']; ?>">
                    <small class="text-muted form-text">
                      A cor é usada para ajudar a diferenciar os projetos.
                    </small>
                  </div>
                </div>

                <div class="col-12 form-group mb-3">
                  <label for="project_description" class="form-label text-muted">
                    <i class="fa fa-fw fa-signature fa-sm text-muted"></i> Nota
                  </label>
                  <textarea class="form-control" rows="3" id="project_description" name="project_description" placeholder="Comentário..."><?= $project['project_description']; ?></textarea>
                  <small class="text-muted form-text">
                    Insira comentários sobre como será usado, campanha etc...
                  </small>
                </div>

                <div class="col-12 form-group mb-3">
                  <div class="alert alert-<?= ($project['project_is_enabled'] == 1) ? "info" : "danger"; ?> d-flex p-3">
                    <div>
                      <label for="unlocked" class="form-label text-3 mb-0">Projeto
                        <?= ($project['project_is_enabled'] == 1) ? "ativo" : "inativo"; ?></label>
                    </div>
                    <div class="form-check form-switch text-5 ms-auto me-n2">
                      <input type="checkbox" id="project_is_enabled" name="project_is_enabled" class="form-check-input" role="switch" value="1" <?= ($project['project_is_enabled'] == 1) ? "checked" : ""; ?>>
                    </div>
                  </div>
                </div>

                <div class="col-12 d-grid">
                  <button type="submit" name="submit" class="btn btn-primary">Salvar</button>
                </div>

              </div>
            </form>

          </div>
        </div>
      </div>
      <!-- Middle Panel End -->

    </div>

  </div>
</div>
<!-- Content end -->