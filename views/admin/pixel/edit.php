<!-- Content -->
<div id="content" class="py-4">
  <div class="container mb-3">

    <div class="row">

      <div class="col-lg-12">
        <div class="row">

          <div class="col-12 col-lg-12 mb-3">
            <?php $pixel_platform = ucwords(str_replace("_", " ", $pixel['pixel_platform'])); ?>
            <h3 class="fw-400">
              <span class="text-muted text-truncate">Pixel: </span><?=$pixel_platform;?>
            </h3>
          </div>

          <div class="col-12 col-lg-6 mb-3">
            <div class="text-muted text-truncate text-4">
              <span><i class="fa fa-circle text-success me-2"></i>Link: </span>
              <a href="https://<?=$link['domain_name'];?>/<?=$link['link_name'];?>" target="_blank"> 
                  https://<?=$link['domain_name'];?>/<?=$link['link_name'];?>
              </a>
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

              <a href="<?=URL_PATH;?>/pixel" type="button" class="btn btn-sm btn-primary">
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
        <?php require_once(__DIR__.'/../partials/aside.php'); ?>
      </aside>
      <!-- Left Panel End -->

      <!-- Middle Panel -->
      <div class="col-12 col-lg-9">
        <div class="card shadow-sm rounded">
          <div class="card-header d-flex align-items-center justify-content-between py-3 px-4">
            <h5 class="text-5 fw-400 mt-2">Editar Pixel</h5>
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
          <div class="card-body p-3 pt-sm-4 pb-sm-5 px-sm-5 mb-4">        

            <form action="" method="POST" enctype="multipart/form-data">
              <div class="row">

                  <small class="form-text text-danger mb-3">
                      <i class="fa fa-sm fa-info-circle text-3"></i>
                        Campos assinados com asterisco (*) são obrigatórios.
                  </small>

                  <input type="hidden" name="form_pixel_update" readonly>
                  <input type="hidden" name="token" value="<?=$_SESSION['token'];?>" readonly>
                  <input type="hidden" name="pixel_id" value="<?=$pixel['pixel_id'];?>" readonly>

                  <div class="col-12 form-group mb-3">
                      <label for="pixel_name" class="form-label text-muted">
                          <i class="fa fa-fw fa-signature fa-sm text-muted mr-1"></i> Nome
                      </label>
                      <input type="text" id="pixel_name" class="form-control" name="pixel_name" value="<?=$pixel['pixel_name'];?>">
                      <small class="text-muted form-text">
                        Dê um nome ao seu pixel! Isso ajuda na hora de localizar.
                      </small>
                  </div>

                  <div class="col-12 form-group mb-3">
                    <label for="pixel_note" class="form-label text-muted">
                      <i class="fa fa-fw fa-signature fa-sm text-muted"></i> Nota
                    </label>
                    <textarea class="form-control" rows="3" id="pixel_note" name="pixel_note" placeholder="Comentário"><?=$pixel['pixel_note'];?></textarea>
                    <small class="text-muted form-text">
                      Insira comentários sobre onde será usado, campanha etc...
                    </small>
                  </div>

                  <div class="col-12 form-group mb-3">
                      <label for="link_id" class="form-label text-muted">
                          <i class="fa fa-fw fa-adjust fa-sm text-muted mr-1"></i> Link *
                      </label>
                      <select id="link_id" name="link_id" class="form-control selectpicker" data-style="form-select" title="Nada selecionado" data-live-search="true" data-live-search-placeholder="Escolha o link" data-size="6" data-allow-clear="true" disabled>
                          <option value="<?=$link['link_id'];?>" selected><?=$link['link_name'];?></option>
                      </select>
                      <small class="text-muted form-text">
                        Para criar um pixel tem que escolher um link.
                      </small>
                  </div>

                  <div class="col-12 form-group mb-3">
                    <label for="pixel_platform" class="form-label text-muted">
                      <i class="fa fa-fw fa-adjust fa-sm text-muted mr-1"></i> Plataforma do Pixel *
                    </label>
                    <select id="pixel_platform" name="pixel_platform" class="form-control selectpicker" data-style="form-select" title="Nada selecionado" data-live-search="true" data-live-search-placeholder="Escolha o tipo de Pixel" data-size="6" data-allow-clear="true" disabled>
      
                      <option data-content="<img class='rounded-circle me-2' alt='' src='<?=URL_PATH;?>assets/images/brands/facebook.png'> Facebook" value="facebook" <?=($pixel['pixel_platform'] == "facebook") ? "selected" : "";?>>Facebook</option>

                      <option data-content="<img class='rounded-circle me-2' alt='' src='<?=URL_PATH;?>assets/images/brands/google-analytics.png'> Google Analytics" value="google_analytics" <?=($pixel['pixel_platform'] == "google_analytics") ? "selected" : "";?>>Google Analytics</option>

                      <option data-content="<img class='rounded-circle me-2' alt='' src='<?=URL_PATH;?>assets/images/brands/google-tag-manager.png'> Google Tag Manager" value="google_tag_manager" <?=($pixel['pixel_platform'] == "google_tag_manager") ? "selected" : "";?>>Google Tag Manager</option>

                      <option data-content="<img class='rounded-circle me-2' alt='' src='<?=URL_PATH;?>assets/images/brands/linkedin.png'> LinkedIn" value="linkedin" <?=($pixel['pixel_platform'] == "linkedin") ? "selected" : "";?>>LinkedIn</option>

                      <option data-content="<img class='rounded-circle me-2' alt='' src='<?=URL_PATH;?>assets/images/brands/pinterest.png'> Pinterest" value="pinterest" <?=($pixel['pixel_platform'] == "pinterest") ? "selected" : "";?>>Pinterest</option>

                      <option data-content="<img class='rounded-circle me-2' alt='' src='<?=URL_PATH;?>assets/images/brands/twitter.png'> Twitter" value="twitter" <?=($pixel['pixel_platform'] == "twitter") ? "selected" : "";?>>Twitter</option>

                      <option data-content="<img class='rounded-circle me-2' alt='' src='<?=URL_PATH;?>assets/images/brands/quora.png'> Quora" value="quora" <?=($pixel['pixel_platform'] == "quora") ? "selected" : "";?>>Quora</option>

                      <option data-content="<img class='rounded-circle me-2' alt='' src='<?=URL_PATH;?>assets/images/brands/tiktok.png'> TikTok" value="tiktok" <?=($pixel['pixel_platform'] == "tiktok") ? "selected" : "";?>>TikTok</option>

                    </select>
                    <small class="text-muted form-text">
                      Selecione uma plataforma.
                    </small>
                  </div>

                  <div class="col-12 form-group mb-3">
                    <label for="pixel" class="form-label text-muted">
                      <i class="fa fa-fw fa-code fa-sm text-muted"></i> ID do Pixel *</label>
                    <input type="text" id="pixel" name="pixel" class="form-control" value="<?=$pixel['pixel'];?>" required="required">
                    <small class="text-muted form-text">
                      Digite o ID do pixel da plataforma escolhida.
                    </small>
                  </div>

                  <div class="col-12 form-group mb-3">
                    <div class="alert alert-info mb-4 d-flex p-3">
                      <div>
                        <label for="unlocked" class="form-label text-3 mb-0">Pixel ativo?</label>
                        <p class="opacity-6 mb-0">Você pode criar o pixel e deixa-lo inativo imediatamente e só ativa-lo quando for usar.</p>
                      </div>
                      <div class="form-check form-switch text-5 ms-auto me-n2">
                        <input type="checkbox" id="pixel_is_enabled" name="pixel_is_enabled" class="form-check-input" role="switch" value="1" <?=($pixel['pixel_is_enabled'] == 1) ? "checked" : "";?>>
                      </div>
                    </div>
                  </div>

                  <div class="col-12 form-group d-grid">
                    <button type="submit" class="btn btn-primary">
                      <i class="fa fa-save me-2"></i> Salvar
                    </button>
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