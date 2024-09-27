<?php if($viewName == 'admin/settings/index' || $viewName == 'admin/settings/seo'): ?>

  <!-- Search
  <div class="input-group shadow-sm mb-4">
    <input class="form-control shadow-none border-0 pe-0" type="search" id="search-input-blog" placeholder="Search" value="">
    <span class="input-group-text bg-white border-0 p-0">
      <button class="btn text-muted shadow-none px-3 border-0" type="button">
        <i class="fa fa-search"></i>
      </button>
    </span> 
  </div> -->
  <!-- Search End -->

  <!-- Categories
  <div class="card shadow-sm rounded mb-4">
    <div class="card-header d-flex align-items-center justify-content-between py-3 px-4">
      <h5 class="text-5 fw-400 mt-2">Menu</h5>
    </div>
    <div class="card-body px-4">
      <ul class="list-item">
        <li><a href="<?=URL_PATH;?>settings/seo">Seo<span>(24)</span></a></li>
        <li><a href="#">Menu<span>(14)</span></a></li>
        <li><a href="#">Sections<span>(6)</span></a></li>
        <li><a href="#">Galery<span>(8)</span></a></li>
        <li><a href="#">Plans<span>(4)</span></a></li>
        <li><a href="#">Languages<span>(10)</span></a></li>
        <li><a href="<?=URL_PATH;?>settings/index">Settings<span>(9)</span></a></li>
      </ul>
    </div>
  </div> -->
  <!-- Categories End -->
          
  <!-- Categories -->
  <div class="card shadow-sm rounded mb-4">
    <div class="card-header d-flex align-items-center justify-content-between py-3 px-4">
      <h5 class="text-5 fw-400 mt-2">Informações gerais</h5>
    </div>
    <div class="card-body px-4">
      <?php
      function error($message) {
        return '<div style="color: red">'.$message.'</div>';
      }
      function enabled($message) {
        return '<div style="color: green">'.$message.'</div>';
      }
      function info($message) {
        return '<div style="color: blue">'.$message.'</div>';
      }

      if(version_compare(PHP_VERSION, '7.0.0') >= 0) {
          echo enabled('PHP Version: '.PHP_VERSION.' (OK)');
      } else {
        echo error('PHP Version: '.PHP_VERSION.', (NOT OK) - You must update to at least: PHP 7');
      }

      if(function_exists('mysqli_connect')) {
        echo enabled('MySQLi: Enabled (OK)');
      } else {
        echo error('MySQLi: Disabled (NOT OK)');
      }

      if(function_exists('mysqli_fetch_all')) {
        echo enabled('MySQL Native Driver: Enabled (OK)');
      } else {
        echo error('MySQL Native Driver: Disabled (NOT OK)');
      }

      if(extension_loaded('openssl')) {
          echo enabled('OpenSSL: Enabled (OK)');
      } else {
          echo error('OpenSSL: Disabled (NOT OK)');
      }

      if(function_exists('curl_version')) {
        echo enabled('cURL: Enabled (OK)');
      } else {
        echo error('cURL: Disabled (NOT OK)');
      }

      if(extension_loaded('mbstring')) {
          echo enabled('mbstring: Enabled (OK)');
      } else {
          echo error('mbstring: Disabled (NOT OK)');
      }

      echo info('post_max_size: '.ini_get('post_max_size'));
      echo info('upload_max_filesize: '.ini_get('upload_max_filesize'));
      echo info('max_execution_time: '.ini_get('max_execution_time'));
      echo info('max_file_uploads: '.ini_get('max_file_uploads'));
      ?>
    </div>
  </div>
  <!-- Categories End -->
          
  <!-- Recent Posts
  <div class="bg-white shadow-sm rounded p-3 mb-4">
    <h4 class="text-5 fw-400">Recent Posts</h4>
    <hr class="mx-n3">
    <div class="side-post">
      <div class="item-post">
        <div class="img-thumb">
          <a href="blog-single.html">
            <img class="img-fluid rounded" src="images/blog/post-2-65x65.jpg" title="" alt="">
          </a>
        </div>
        <div class="caption"> 
          <a href="blog-single.html">Sell your crypto collectibles without..</a>
          <p class="date-post">April 24, 2021</p>
        </div>
      </div>
      <div class="item-post">
        <div class="img-thumb">
          <a href="blog-single.html">
            <img class="img-fluid rounded" src="images/blog/post-1-65x65.jpg" title="" alt="">
          </a>
        </div>
        <div class="caption"> 
          <a href="blog-single.html">Bid on your favorite Crypto Collectibles...</a>
          <p class="date-post">April 24, 2021</p>
        </div>
      </div>
      <div class="item-post">
        <div class="img-thumb">
          <a href="blog-single.html">
            <img class="img-fluid rounded" src="images/blog/post-3-65x65.jpg" title="" alt="">
          </a>
        </div>
        <div class="caption"> 
          <a href="blog-single.html">Etheremon adventure land is tradeable on...</a>
          <p class="date-post">April 24, 2021</p>
        </div>
      </div>
    </div>
  </div> -->
  <!-- Recent Posts End -->
          
  <!-- Popular Tags
  <div class="bg-white shadow-sm rounded p-3 mb-4">
    <h4 class="text-5 fw-400">Popular Tags</h4>
    <hr class="mx-n3">
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
  </div> -->
  <!-- Popular Tags End -->

<?php else: ?>

  <!-- Profile Image -->
  <div class="card shadow-sm rounded mb-4">
    <div class="card-header d-flex align-items-center justify-content-between py-3 px-4">
    <h3 class="text-5 fw-400 mt-2">Profile Image
      <span class="text-info text-3 ms-1" data-bs-toggle="tooltip" title="We recommand an image of at least 300x300. Gifs works too. Max 10mb.">
        <i class="fas fa-info-circle"></i>
      </span>
    </h3>
    </div>
    <div class="card-body text-center p-3">

      <div class="profile-thumb mb-2">

        <img class="rounded-circle img-fluid" src="<?=UPLOADS_PATH;?>avatar/seo-img-1.jpg" alt="">

        <div class="btn-upload bg-primary text-white position-absolute bottom-0 end-0" data-bs-toggle="tooltip" title="Change Profile Image"> 
          <i class="fas fa-camera position-absolute"></i>
          <input type="file" class="custom-file-input" id="customFile">
        </div>

      </div>

      <p class="text-3 fw-500 mt-3 mb-2">
        Olá, <?=$_SESSION['greet'];?>!<br><?=$_SESSION['short_name'];?>
      </p>

    </div>
  </div>
  <!-- Profile Image End -->
          
  <!-- Profile Banner -->
  <div class="bg-white shadow-sm rounded text-center p-3 mb-4">

    <h3 class="text-4 fw-400 d-flex align-items-center mb-3">Profile Banner 
      <span class="text-info text-3 ms-1" data-bs-toggle="tooltip" title="We recommand an image of at least 1400x450. Max 20mb.">
        <i class="fas fa-info-circle"></i>
      </span>
    </h3>

    <hr class="mx-n3 mb-4">

    <div class="position-relative mb-3">

      <img class="img-fluid rounded d-block" src="<?=URL_PATH;?>uploads/author-bg-1.jpg" alt="">

      <div class="btn-upload bg-primary text-white position-absolute top-100 start-50 translate-middle" data-bs-toggle="tooltip" title="Change Profile Banner"> 
        <i class="fas fa-camera position-absolute"></i>
        <input type="file" class="custom-file-input" id="customFileBanner">
      </div>

    </div>
  </div>
  <!-- Profile Banner End --> 
          
  <!-- QRCode -->
  <div class="bg-white shadow-sm rounded text-center p-3 mb-4">
    <div class="d-flex justify-content-center my-3">
      <div class="qrcode-result">
        <div class="qrcode-image mb-4">
          <div id="qrcode"></div>
        </div>
        <button class="btn btn-sm btn-outline-primary embed-btn"> 
          <i class="fa fa-code"></i> Incorporar a um site 
        </button>
      </div>
      <div class="modal" id="embed-code">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Incorpore o código QR em seu site</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"></span>
              </button>
            </div>
              <div class="modal-body">
                <p>Para incorporar o código QR em seu site, use o código HTML a seguir.<br> O uso comercial é permitido.</p>
                  <textarea class="form-control" rows="5"></textarea>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Fechar</button>
              </div>
          </div>
        </div>
      </div>
    </div>
    <p class="text-muted opacity-8 mb-2">Available Balance</p>
    <hr class="mx-n3">
    <div class="d-grid gap-2">
      <button class="btn btn-sm btn-primary download-btn"> 
        <i class="fa fa-cloud-download-alt"></i> Download 
      </button>
    </div>
  </div>
  <!-- QRCode End --> 
          
  <!-- Need Help? -->
  <div class="bg-white shadow-sm rounded text-center p-3 mb-4">

    <div class="text-17 text-light my-3">
      <i class="fas fa-comments"></i>
    </div>

    <h3 class="text-5 fw-400 my-3">Precisa de ajuda?</h3>

    <p class="text-muted opacity-8 mb-4">
      Tem dúvidas ou preocupações ao reavaliar sua conta?<br>
      Nossos especialistas estão aqui para ajudar!.
    </p>

    <div class="d-grid">
      <a href="#" class="btn btn-primary">Fale conosco</a>
    </div>

  </div>
  <!-- Need Help? End -->

<?php endif; ?>