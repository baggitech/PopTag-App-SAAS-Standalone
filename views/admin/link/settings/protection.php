<div class="accordion-item">
    <h2 class="accordion-header" id="headingProfileDetails">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseProfileDetails" aria-expanded="false" aria-controls="collapseProfileDetails"> 
            <i class="fa fa-user-shield me-3"></i> Proteção 
        </button>
    </h2>
    <div id="collapseProfileDetails" class="accordion-collapse collapse" aria-labelledby="headingProfileDetails" data-bs-parent="#accordionExample">
        <div class="accordion-body p-3 my-2 border rounded"> 
            <div class="row">

                <!-- START ALERTS -->
                <div class="col-lg-12">

                    <?php //require_once(__DIR__.'/../../../../../app/helpers/Alerts.php'); ?>

                </div>
                <!-- END ALERTS -->

                <!-- START CONTENT -->
                <div class="col-lg-12">

                        <div class="form-group mb-3">
                          <label for="pass_sensitive_content" class="form-label text-muted mb-2">
                            <i class="fa fa-fw fa-key ms-1"></i> Senha 
                          </label>
                          <input id="pass_sensitive_content" type="password" class="form-control" name="pass_sensitive_content" value="" autocomplete="new-password">
                          <small class="text-muted">
                            Exija que os usuários insiram uma senha antes de acessar o link.
                          </small>
                        </div>

                        <div class="form-check form-switch mb-3">    
                            <input type="checkbox" name="sensitive_content" id="sensitive_content" class="form-check-input" role="switch" value="1" <?=($link_setting['sensitive_content']==1)?"checked":"";?>>
                            <label class="form-check-label" for="sensitive_content">Aviso de conteúdo sensível</label><br>
                            <small class="text-muted">Exija que os usuários confirmem que desejam acessar seu link e informe-os de que o link pode ser confidencial.</small>
                        </div>
                        
                 </div>
                <!-- END CONTENT -->

            </div>
        </div>
    </div>
</div>

