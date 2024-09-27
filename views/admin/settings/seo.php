  <!-- Content -->
  <div id="content" class="py-4">
    <div class="container mb-3">

    <div class="row">

      <div class="col-lg-12">
        <div class="row">

          <div class="col-12 col-lg-12 mb-3">
            <h3 class="fw-400">
              <span class="text-muted text-truncate">SEO: </span><?//=$link['url'];?>
            </h3>
          </div>

        </div>
      </div>

    </div>

      <div class="row">

        <!-- Left Panel -->
        <aside class="col-12 col-lg-3">

          <?php require_once(__DIR__.'/../../../templates/partials/admin/aside.php'); ?>

        </aside>
        <!-- Left Panel End -->


        <!-- Middle Panel -->
        <div class="col-12 col-lg-9">

          <div class="card shadow-sm rounded mb-4">
            <div class="card-header d-flex align-items-center justify-content-between py-3 px-4">
              <h5 class="text-5 fw-400 mt-2">Editar dados</h5>
              <button type="button" class="nav-link ms-2">
                <i class="fas fa-edit me-1"></i> Add blocos
              </button>
            </div>
            <div class="card-body p-4">


              <form action="" method="POST">
                <div class="row">
                  <div class="col-12">

                    <input type="hidden" name="form_update" readonly>
                    <input type="hidden" name="token" value="" readonly>
                    <input type="hidden" name="project_id" value="" readonly>

                    <div class="form-group row mb-3">
                      <label for="" class="col-sm-3 col-form-label text-muted">Título</label>
                      <div class="col-sm-9">
                        <input type="text" name="" id="" class="form-control" value="">
                      </div>
                    </div>

                    <div class="form-group row mb-3">
                      <label for="" class="col-sm-3 col-form-label text-muted">Description</label>
                      <div class="col-sm-9">
                        <input type="text" name="" id="" class="form-control" value="">
                      </div>
                    </div>

                    <div class="form-group row mb-3">
                      <label for="" class="col-sm-3 col-form-label text-muted">Keywords</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" rows="4" id="description" required placeholder="Your Item Description...."></textarea>
                      </div>
                    </div>

                    <div class="col-12 d-flex justify-content-end">
                      <button type="submit" name="submit" class="btn btn-primary">Salvar</button>
                    </div>

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