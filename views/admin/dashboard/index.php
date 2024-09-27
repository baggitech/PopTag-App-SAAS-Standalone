  <!-- Content -->
  <div id="content" class="py-4">
    <div class="container">

      <div class="row">

        <div class="col-lg-3 mb-4">
          <div class="card overview p-3">

            <div class="d-flex justify-content-between mb-2">
              <span class="icon text-primary">
                <i class="fa fa-link"></i>
              </span>
              <p class="title">Total links</p>
            </div>

            <div class="d-flex align-items-center justify-content-between">
              <h4 class="total fw-bold"><?= empty($totalLinksPerUser) ? 0 : $totalLinksPerUser; ?></h4>
            </div>

          </div>
        </div>

        <div class="col-lg-3 mb-4">
          <div class="card overview p-3">

            <div class="d-flex justify-content-between mb-2">
              <span class="icon text-primary">
                <i class="fa fa-eye"></i>
              </span>
              <p class="title">Links Pageview</p>
            </div>

            <div class="d-flex align-items-center justify-content-between">
              <h4 class="total fw-bold">126</h4>

            </div>

          </div>
        </div>

        <div class="col-lg-3 mb-4">
          <div class="card overview p-3">

            <div class="d-flex justify-content-between mb-2">
              <span class="icon text-primary">
                <i class="fa fa-list"></i>
              </span>
              <p class="title">Total Projects</p>
            </div>

            <div class="d-flex align-items-center justify-content-between">
              <h4 class="total fw-bold">15</h4>

            </div>

          </div>
        </div>

        <div class="col-lg-3 mb-4">
          <div class="card overview p-3">

            <div class="d-flex justify-content-between mb-2">
              <span class="icon text-primary">
                <i class="fa fa-qrcode"></i>
              </span>
              <p class="title">Total QR Codes</p>
            </div>

            <div class="d-flex align-items-center justify-content-between">
              <h4 class="total fw-bold"><?= empty($totalQRCodesPerUser) ? 0 : $totalQRCodesPerUser; ?></h4>

            </div>

          </div>
        </div>

        <div class="col-lg-6 mb-4">
          <div class="card">
            <div class="p-3">
              <h6>Page view activities</h6>
            </div>
            <div id="analytics"></div>
          </div>
        </div>

        <div class="col-lg-6 mb-4">
          <div class="card">
            <div class="p-3">
              <h6>Visitors</h6>
            </div>
            <div id="visitors"></div>
          </div>
        </div>

      </div>

      <div class="card">
        <div class="footer-card d-flex justify-content-between px-4">
          <div class="text-box py-4">
            <h4>LinkDrop - SaaS link management tool</h4>
            <p>Well Designed Theme to make everything better</p>
            <a href="#" class="btn btn-primary text-white">
              Buy LinkDrop
            </a>
          </div>
          <img width="254px" src="https://linkdrop.ui-lib.com/assets/footer-banner-card.png" alt="">
        </div>
      </div>

    </div>
  </div>
  <!-- Content end -->