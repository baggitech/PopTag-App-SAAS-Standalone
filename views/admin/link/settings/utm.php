<div class="accordion-item">
    <h2 class="accordion-header" id="headingUtm">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseUtm" aria-expanded="false" aria-controls="collapseUtm"> 
            <i class="fa fa-keyboard me-3"></i> UTM 
        </button>
    </h2>
    <div id="collapseUtm" class="accordion-collapse collapse" aria-labelledby="headingUtm" data-bs-parent="#accordionExample">
        <div class="accordion-body p-3 my-2 border rounded"> 
            <div class="row">

                <!-- START ALERTS -->
                <div class="col-lg-12">

                    <?php //require_once(__DIR__.'/../../../../../app/helpers/Alerts.php'); ?>

                </div>
                <!-- END ALERTS -->

                <!-- START CONTENT -->
                <div class="col-lg-12">

                                <div class="mb-3">
                                    <small class="form-text text-muted">
                                        <h5 class="text-muted text-3">Insira o URL do site e as informações da campanha</h5>
                                        <i class="fa fa-fw fa-sm fa-info-circle"></i>
                                        Preencha os campos obrigatórios (marcados com *) no formulário abaixo e, uma vez preenchido, o URL completo da campanha será gerado para você. Observação: a URL gerada é atualizada automaticamente conforme você faz alterações.
                                    </small>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="url" class="text-muted mb-2">
                                        <i class="fa-solid fa-up-right-from-square ms-1 me-2"></i>URL Base*
                                    </label>
                                    <input type="text" name="url_disabled" id="url_disabled" class="form-control" value="https://poptag.<?=$link['domain'];?>/<?=$link['link_name'];?>" disabled>
                                    <small class="text-muted text-1">
                                        O URL completo do site (por exemplo , https://www.example.com )
                                    </small>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="utm_id" class="text-muted mb-2">
                                        <i class="fa-solid fa-up-right-from-square ms-1 me-2"></i>Campaign ID *
                                    </label>
                                    <input type="text" name="utm_id" id="utm_id" class="form-control" value="<?=$link_track['utm_id'];?>" maxlength="128">
                                    <small class="text-muted text-1">O ID da campanha de anúncios.</small>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="utm_source" class="text-muted mb-2">
                                        <i class="fa-solid fa-up-right-from-square ms-1 me-2"></i>Campaign Source *
                                    </label>
                                    <input type="text" name="utm_source" id="utm_source" class="form-control" value="<?=$link_track['utm_source'];?>" maxlength="128">
                                    <small class="text-muted text-1">O referenciador (por exemplo , google , newsletter )</small>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="utm_medium" class="text-muted mb-2">
                                        <i class="fa-solid fa-up-right-from-square ms-1 me-2"></i>Campaign Medium *
                                    </label>
                                    <input type="text" name="utm_medium" id="utm_medium" class="form-control" value="<?=$link_track['utm_medium'];?>" maxlength="128">
                                    <small class="text-muted text-1">Meio de marketing (por exemplo , cpc , banner , e- mail )</small>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="utm_campaign" class="text-muted mb-2">
                                        <i class="fa-solid fa-up-right-from-square ms-1 me-2"></i>Campaign Name *
                                    </label>
                                    <input type="text" name="utm_campaign" id="utm_campaign" class="form-control" value="<?=$link_track['utm_campaign'];?>" maxlength="128">
                                    <small class="text-muted text-1">Produto, código promocional ou slogan (por exemplo, spring_sale ) Um dos nomes ou id da campanha é obrigatório.</small>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="utm_term" class="text-muted mb-2">
                                        <i class="fa-solid fa-up-right-from-square ms-1 me-2"></i>Campaign Term
                                    </label>
                                    <input type="text" name="utm_term" id="utm_term" class="form-control" value="<?=$link_track['utm_term'];?>" maxlength="128">
                                    <small class="text-muted text-1">Identifique as palavras-chave pagas</small>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="utm_content" class="text-muted mb-2">
                                        <i class="fa-solid fa-up-right-from-square ms-1 me-2"></i>Campaign Content
                                    </label>
                                    <input type="text" name="utm_content" id="utm_content" class="form-control" value="<?=$link_track['utm_content'];?>" maxlength="128">
                                    <small class="text-muted text-1">Use para diferenciar anúncios</small>
                                </div>

                                <div class="form-group mb-3">
                                    <div class="alert alert-primary p-3">
                                        <h5 for="unlocked" class="text-3 mb-2">Compartilhe a URL da campanha gerada</h5>
                                        <small class="mb-2">Use esse URL em todos os canais promocionais que você deseja associar a esta campanha personalizada.</small>
                                        <div class="row mt-2">
                                            <div class="col-12">

                                                <textarea name="utm_url" id="utm_url" class="form-control" style="height: 120px" readonly>https://<?=$link['domain'];?>/<?=$link['link_name'];?>/<?=$link_track['utm_url'];?>
                                                </textarea>
                                                
                                            </div>
                                            <div class="col-12 mt-2">

                                                <button type="button" id="wallet-id" title="Copy Text" class="btn btn-light bg-white btn-sm me-2"> 
                                                    <span id="wallet-id-inner" class="d-none">https://<?=$link['domain'];?>/<?=$link['url'];?>/<?=$link_track['utm_url'];?></span> 
                                                    <span class="text-primary">
                                                        <i class="far fa-copy"></i>
                                                    </span> 
                                                </button>

                                                <button class="btn btn-light bg-white btn-sm">Encurtar Link</button>                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>

                </div>
                <!-- END CONTENT -->

            </div>
        </div>
    </div>
</div>