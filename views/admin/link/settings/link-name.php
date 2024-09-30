<div class="accordion-item">
    <h2 class="accordion-header" id="headingUrl">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseUrl" aria-expanded="true" aria-controls="collapseUrl">
            <i class="fa fa-link me-3"></i> URL
        </button>
    </h2>
    <div id="collapseUrl" class="accordion-collapse collapse show" aria-labelledby="headingUrl" data-bs-parent="#accordionExample">
        <div class="accordion-body p-3 my-2 border rounded">
            <div class="row">

                <!-- START ALERTS -->
                <div class="col-lg-12">

                    <?php //require_once(__DIR__.'/../../../../../app/helpers/Alerts.php'); 
                    ?>

                </div>
                <!-- END ALERTS -->

                <!-- START CONTENT -->
                <div class="col-lg-12">

                    <form action="" method="POST" enctype="multipart/form-data">

                        <div class="hidden mb-3">
                            <input type="text" name="form_" class="form-control mb-1 readonly-field" value="link_name_update" readonly>
                            <input type="text" name="token" class="form-control mb-1 readonly-field" value="<?= $_SESSION['token'] ?? ''; ?>" readonly>
                            <input type="text" name="link_id" class="form-control mb-1 readonly-field" value="<?= $link['link_id'] ?? ''; ?>" readonly>
                        </div>

                        <label for="url" class="form-label text-muted mb-2">
                            <i class="fa fa-link ms-1"></i> URI do link
                        </label>
                        <div class="input-group">
                            <div class="input-group-text p-0">
                                <select name="domain_name" id="domain_name" class="form-select border-0 bg-transparent">
                                    <option value="<?= $link['domain_name'] ?? ''; ?>" selected>https://<?= $link['domain_name'] ?? ''; ?>/</option>
                                    <option value="poptag.app">https://poptag.app/</option>
                                    <option value="poptag.adv">https://poptag.adv/</option>
                                    <option value="poptag.link">https://poptag.link/</option>
                                    <option value="poptag.eu">https://poptag.eu/</option>
                                    <option value="poptag.me">https://poptag.me/</option>
                                    <option value="poptag.biz">https://poptag.biz/</option>
                                    <option value="poptag.kids">https://poptag.kids/</option>
                                    <option value="poptag.doctor">https://poptag.doctor/</option>
                                    <option value="poptag.events">https://poptag.events/</option>
                                    <option value="poptag.pet">https://poptag.pet/</option>
                                </select>
                            </div>
                            <input type="text" name="link_name" id="link_name" class="form-control" value="<?= $link['link_name']; ?>" placeholder="Nome do Link">
                        </div>
                        <small class="text-muted">
                            Deixe em branco para gerar um nome aleatoriamente. Ao gerar um link aleatório ou<br>
                            escolher um de sua preferência, o link anterior deixa de existir imediatamente.
                        </small>

                        <div class="d-flex justify-content-end mt-4">
                            <button type="submit" class="btn btn-primary btn-md btn-primary-modified">
                                <i class="fa fa-save me-2"></i> Salvar
                            </button>
                        </div>

                    </form>

                </div>
                <!-- END CONTENT -->

            </div>
        </div>
    </div>
</div>