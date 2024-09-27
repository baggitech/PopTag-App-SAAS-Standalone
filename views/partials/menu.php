      <nav class="primary-menu navbar navbar-expand-lg <?=$theme['navbar_custom'];?>">
        <div class="container position-relative"> 
          
          <!-- Logo -->
          <div class="logo me-1 me-sm-2 me-lg-3"> 

            <a class="d-flex" href="<?=URL_PATH;?>" title="Metovo - HTML Template"> 
              <img class="d-none d-sm-block" src="<?=ASSETS_PATH;?>images/<?=$theme['logo'];?>" alt="Metovo" /> 
              <img class="d-block d-sm-none" src="<?=ASSETS_PATH;?>images/<?=$theme['logo_sm'];?>" alt="Metovo" />
            </a>

          </div>
          <!-- Logo end --> 
          
          <!-- Collapse Button -->
          <button class="navbar-toggler me-auto" type="button" data-bs-toggle="collapse" data-bs-target="#header-nav"> 
            <span></span> 
            <span></span> 
            <span></span> 
          </button>
          <!-- Collapse Button end --> 
          
          <!-- Primary Navigation -->
          
          <div id="header-nav" class="collapse navbar-collapse">

            <!-- Search Bar -->
            <div class="search-bar mb-2 mb-lg-0 me-lg-2">
              <input class="form-control <?=$theme['search_custom'];?>" type="search" id="search-input" placeholder="Pesquisar..." value="">
              <span class="search-icon">
                <i class="fas fa-search"></i>
              </span> 
            </div>
            <!-- Search Bar End -->

            <ul class="navbar-nav me-auto">
              <li class="none-dropdown"> 
                <a class="none-dropdown-toggle" href="<?=URL_PATH;?>home"><?=$language['tr_43'];?></a>
              </li>

              <li><a href="<?=URL_PATH;?>about"><?=$language['tr_44'];?></a></li>

              <li class="none-dropdown"> 
                <a class="none-dropdown-toggle" href="<?=URL_PATH;?>contact"><?=$language['tr_47'];?></a>

              </li>

            </ul>

          </div>
          <!-- Primary Navigation end -->

          <?php if(!isset($_SESSION['user']) || empty($_SESSION['user'])):?>

          <!-- My Profile -->
          <nav class="login-signup navbar navbar-expand">
            <ul class="navbar-nav">

              <li class="align-items-center h-auto">
                <a href="<?=URL_PATH;?>signup">Cadastre-se</a>
              </li>

              <li class="align-items-center h-auto ms-sm-2">
                <a class="btn btn-light" href="<?=URL_PATH;?>signin">Entrar</a>
              </li>

            </ul>
          </nav>
          <!-- My Profile end -->

          <?php elseif(isset($_SESSION['user']) && !empty($_SESSION['user'])):?>

          <!-- My Profile -->
          <nav class="login-signup navbar navbar-expand">
            <ul class="navbar-nav">
              
              <li class="dropdown notifications ms-2">

                <a class="dropdown-toggle" href="#">
                  <span class="text-5"><i class="far fa-bell"></i></span>
                  <span class="count">4</span>
                </a>

                <ul class="dropdown-menu">

                  <li class="text-center text-3 py-2">Notifications (4)</li>

                  <li class="dropdown-divider mx-n3"></li>

                  <li class="d-flex lh-sm my-3"> 
                    <span class="activity-icon activity-listings flex-shrink-0 me-1">
                      <i class="fas fa-tag"></i>
                    </span>
                    <div class="activity-content ms-2">
                      <a class="btn-link text-body" href="author.html">Olivia Samantha</a> 
                      <strong class="fw-500">listed</strong> 
                      <a class="btn-link text-body" href="item-details.html">Pascal Bernardon
                      </a>
                      <span class="text-1 text-muted d-block">18 minutes ago</span>
                    </div>
                  </li>

                  <li class="d-flex lh-sm my-3"> 
                    <span class="activity-icon activity-like flex-shrink-0 me-1">
                      <i class="fas fa-heart"></i>
                    </span>
                    <div class="activity-content ms-2">
                      <a class="btn-link text-body" href="author.html">Poppy Joanne</a> 
                      <strong class="fw-500">liked</strong> 
                      <a class="btn-link text-body" href="item-details.html">Philipp Potocnik</a>
                      <span class="text-1 text-muted d-block">2 hours ago</span>
                    </div>
                  </li>

                  <li class="d-flex lh-sm my-3"> 
                    <span class="activity-icon activity-bid flex-shrink-0 me-1">
                      <i class="fas fa-gavel"></i>
                    </span>
                    <div class="activity-content ms-2">
                      <a class="btn-link text-body" href="author.html">William Damian Thomas</a> 
                      <strong class="fw-500">bid cancelled</strong> 
                      <a class="btn-link text-body" href="item-details.html">Happy Cute Avocado Exercising</a>
                      <span class="text-1 text-muted d-block">02/19/2022</span>
                    </div>
                  </li>

                  <li class="d-flex lh-sm my-3"> 
                    <span class="activity-icon activity-followings flex-shrink-0 me-1">
                      <i class="fas fa-check"></i>
                    </span>
                    <div class="activity-content ms-2">
                      <a class="btn-link text-body" href="author.html">James Charlie</a> 
                      <strong class="fw-500">followed</strong> 
                      <a class="btn-link text-body" href="author.html">you</a>
                      <span class="text-1 text-muted d-block">01/30/2022</span>
                    </div>
                  </li>

                  <li class="dropdown-divider mx-n3"></li>

                  <li><a class="dropdown-item btn-link text-center" href="activity.html">See all Notifications</a></li>

                </ul>

              </li>

              <li class="dropdown profile ms-2">

                <a class="px-0 dropdown-toggle" href="#">
                  <img class="img-thumb-sm rounded-circle" src="<?=UPLOADS_PATH;?>avatar/seo-img-1.jpg" alt="">
                </a>

                <ul class="dropdown-menu">

                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div class="position-relative d-flex me-2"> 
                        <img class="img-thumb-sm rounded-circle border" src="<?=UPLOADS_PATH;?>avatar/seo-img-1.jpg" alt="">
                      </div>
                      <div class="overflow-hidden lh-base">
                        <div class="d-block text-3 link-dark fw-500 text-truncate">
                          <?=$_SESSION['short_name'];?>
                        </div>
                        <a class="text-muted btn-link" href="<?=URL_PATH;?>profile">Ver perfil</a> 
                      </div>
                    </div>
                  </li>

                  <li class="dropdown-divider mx-n3"></li>

                  <?php if($_SESSION['level'] == 3): ?>
                  <li>
                    <a class="dropdown-item" href="<?=URL_PATH;?>admin">
                      <i class="fas fa-user"></i>Admin
                    </a>
                  </li>
                  <?php endif; ?>

                  <li>
                    <a class="dropdown-item" href="<?=URL_PATH;?>profile">
                      <i class="fas fa-user"></i>Editar Perfil
                    </a>
                  </li>

                  <li>
                    <a class="dropdown-item" href="<?=URL_PATH;?>galery">
                      <i class="fas fa-layer-group"></i>Galeria
                    </a>
                  </li>

                  <li>
                    <a class="dropdown-item" href="<?=URL_PATH;?>help">
                      <i class="fas fa-life-ring"></i>Preciso de ajuda!
                    </a>
                  </li>

                  <li>
                    <a class="dropdown-item" href="<?=URL_PATH;?>logout">
                      <i class="fas fa-power-off"></i>Sair
                    </a>
                  </li>

                </ul>
                
              </li>

            </ul>
          </nav>
          <!-- My Profile end -->        

          <?php endif;?>
          
        </div>
      </nav>