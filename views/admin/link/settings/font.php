<div class="accordion-item">
    <h2 class="accordion-header" id="headingFont">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFont" aria-expanded="false" aria-controls="collapseFont"> 
            <i class="fa fa-font me-3"></i> Font 
        </button>
    </h2>
    <div id="collapseFont" class="accordion-collapse collapse" aria-labelledby="headingFont" data-bs-parent="#accordionExample">
        <div class="accordion-body p-3 my-2 border rounded">
            <div class="row">

                <!-- START ALERTS -->
                <div class="col-lg-12">

                    <?php //require_once(__DIR__.'/../../../../../app/helpers/Alerts.php'); ?>

                </div>
                <!-- END ALERTS -->

                <!-- START CONTENT -->
                <div class="col-lg-12">

                    <form action="" method="POST" enctype="multipart/form-data">

                        <input type="" name="form_" value="link_font_update">
                        <input type="" name="token" value="<?= $_SESSION['token'] ?? ''; ?>">
                        <input type="" name="link_id" value="<?= $link['link_id'] ?? ''; ?>">

                        <div class="form-group mb-3">
                            <label for="font_one" class="text-muted mb-2">
                                <i class="fa fa-font ms-1"></i> Font 1
                            </label>
                            <select name="font_one" id="font_one" class="form-select">
                                <option value="<?=$link_font['font_one'] ?? '';?>" selected><?=$link_font['font_one'] ?? '';?></option>
                                <option value="Arial">Arial</option>
                                <option value="Verdana">Verdana</option>
                                <option value="Helvetica">Helvetica</option>
                                <option value="Times New Roman">Times New Roman</option>
                                <option value="Inter">Inter</option>
                                <option value="Lato">Lato</option>
                                <option value="Open Sans">Open Sans</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Karla">Karla</option>
                                <option value="Inconsolata">Inconsolata</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="font_two" class="text-muted mb-2">
                                <i class="fa fa-font ms-1"></i> Font 2
                            </label>
                            <select name="font_two" id="font_two" class="form-select">
                                <option value="<?=$link_font['font_two'] ?? '';?>" selected><?=$link_font['font_two'] ?? '';?></option>
                                <option value="Arial">Arial</option>
                                <option value="Verdana">Verdana</option>
                                <option value="Helvetica">Helvetica</option>
                                <option value="Times New Roman">Times New Roman</option>
                                <option value="Inter">Inter</option>
                                <option value="Lato">Lato</option>
                                <option value="Open Sans">Open Sans</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Karla">Karla</option>
                                <option value="Inconsolata">Inconsolata</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="font_three" class="text-muted mb-2">
                                <i class="fa fa-font ms-1"></i> Font 3
                            </label>
                            <select name="font_three" id="font_three" class="form-select">
                                <option value="<?=$link_font['font_three'] ?? '';?>" selected><?=$link_font['font_three'] ?? '';?></option>
                                <option value="Arial">Arial</option>
                                <option value="Verdana">Verdana</option>
                                <option value="Helvetica">Helvetica</option>
                                <option value="Times New Roman">Times New Roman</option>
                                <option value="Inter">Inter</option>
                                <option value="Lato">Lato</option>
                                <option value="Open Sans">Open Sans</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Karla">Karla</option>
                                <option value="Inconsolata">Inconsolata</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="font_size" class="text-muted mb-2">
                                <i class="fa fa-user ms-1"></i> Font size
                            </label>
                            <div class="input-group">
                                <input type="number" name="font_size" id="font_size" min="14" max="22" class="form-control" value="<?=$link_font['font_size'] ?? '';?>">
                                <span class="input-group-text">px</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="font_color" class="text-muted mb-2">
                                <i class="fa fa-paint-brush ms-1"></i> Cor do texto
                            </label><br>
                            <div class="pickr">
                                <input type="color" name="font_color" id="font_color" class="pcr-button" value="<?=$link_font['font_color'] ?? '';?>">
                            </div>
                        </div>

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