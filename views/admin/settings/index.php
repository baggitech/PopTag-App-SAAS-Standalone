  <!-- Content -->
  <div id="content" class="py-4">
    <div class="container mb-3">

    <div class="row">

      <div class="col-lg-12">
        <div class="row">

          <div class="col-12 col-lg-12 mb-3">
            <h3 class="fw-400">
              <span class="text-muted text-truncate">ID: </span><?//=$link['url'];?>
            </h3>
          </div>



        </div>
      </div>

    </div>

      <div class="row">

        <!-- Left Panel -->
        <aside class="col-12 col-lg-3">

          <?php require_once(__DIR__.'/../../partials/aside.php'); ?>

        </aside>
        <!-- Left Panel End -->

        <!-- Middle Panel -->
        <div class="col-12 col-lg-9">

          <div class="accordion" id="accordionPanelsStayOpenExample">

            <div class="card shadow-sm rounded mb-4">

              <div class="card-header d-flex align-items-center justify-content-between py-3 px-4">
                <h5 class="text-5 fw-400 mt-2">
                  <i class="fas fa-envelope me-1"></i> Todos os projetos
                </h5>
                <button class="nav-link ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne"><i class="fas fa-angle-up me-1"></i>
                </button>                               
              </div>

              <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">

                <div class="card-body p-4">
                  
                  <div class="tags"> 
                    <a href="#">Art</a> 
                    <a href="#">Crypto</a> 
                    <a href="#">Ethereum</a> 
                    <a href="#">Outsourcing</a> 
                    <a href="#">Design</a> 
                    <a href="#">Enterprise</a> 
                    <a href="#">Marketing</a> 
                    <a href="#">2022</a>
                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>
        <!-- Middle Panel End -->

      </div>

    </div>
  </div>
  <!-- Content end --> 