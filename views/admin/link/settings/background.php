<div class="accordion-item">
    <h2 class="accordion-header" id="headingBackground">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBackground" aria-expanded="false" aria-controls="collapseBackground">
            <i class="fa fa-paint-brush me-3"></i> Background
        </button>
    </h2>
    <div id="collapseBackground" class="accordion-collapse collapse" aria-labelledby="headingBackground" data-bs-parent="#accordionExample">
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

                        <input type="" name="form_" value="link_background_update">
                        <input type="" name="token" value="<?= $_SESSION['token'] ?? ''; ?>">
                        <input type="" name="link_id" value="<?= $link['link_id'] ?? ''; ?>">

                        <div class="form-group mb-3">
                            <label for="background_type" class="text-muted mb-2">Selecione uma opção:</label>
                            <select id="background_type" name="background_type" class="form-select">
                                <option value="gradient">Gradiente</option>
                                <option value="custom">Personalizado</option>
                                <option value="image">Imagem</option>
                            </select>
                        </div>

                        <div id="gradient">
                            <div class="row">

                                <label for="background_one" class="m-0 col-3 mb-3">
                                    <input type="radio" name="background_color_code" value="one" id="background_one" class="d-none" <?= ($link_background['background_color_code'] == 'one') ? 'checked' : ''; ?>>
                                    <div class="link-background-type-preset" style="background: linear-gradient(111.7deg, #a529b9 19.9%, #50b1e1 95%);">

                                    </div>
                                </label>

                                <label for="background_two" class="m-0 col-3 mb-3">
                                    <input type="radio" name="background_color_code" value="two" id="background_two" class="d-none" <?= ($link_background['background_color_code'] == 'two') ? 'checked' : ''; ?>>
                                    <div class="link-background-type-preset" style="background: linear-gradient(109.6deg, #ffb418 11.2%, #f73131 91.1%);">

                                    </div>
                                </label>

                                <label for="background_three" class="m-0 col-3 mb-3">
                                    <input type="radio" name="background_color_code" value="three" id="background_three" class="d-none" <?= ($link_background['background_color_code'] == 'three') ? 'checked' : ''; ?>>
                                    <div class="link-background-type-preset" style="background: linear-gradient(135deg, #79F1A4 10%, #0E5CAD 100%);">

                                    </div>
                                </label>

                                <label for="background_four" class="m-0 col-3 mb-3">
                                    <input type="radio" name="background_color_code" value="four" id="background_four" class="d-none" <?= ($link_background['background_color_code'] == 'four') ? 'checked' : ''; ?>>
                                    <div class="link-background-type-preset" style="background: linear-gradient(to bottom, #ff758c, #ff7eb3);">

                                    </div>
                                </label>

                                <label for="background_five" class="m-0 col-3 mb-3">
                                    <input type="radio" name="background_color_code" value="five" id="background_five" class="d-none" <?= ($link_background['background_color_code'] == 'five') ? 'checked' : ''; ?>>
                                    <div class="link-background-type-preset" style="background: linear-gradient(292.2deg, #3355ff 33.7%, #0088ff 93.7%);">

                                    </div>
                                </label>

                                <label for="background_six" class="m-0 col-3 mb-3">
                                    <input type="radio" name="background_color_code" value="six" id="background_six" class="d-none" <?= ($link_background['background_color_code'] == 'six') ? 'checked' : ''; ?>>
                                    <div class="link-background-type-preset" style="background: linear-gradient(to bottom, #fc5c7d, #6a82fb);">

                                    </div>
                                </label>

                                <label for="background_seven" class="m-0 col-3 mb-3">
                                    <input type="radio" name="background_color_code" value="seven" id="background_seven" class="d-none" <?= ($link_background['background_color_code'] == 'seven') ? 'checked' : ''; ?>>
                                    <div class="link-background-type-preset" style="background: linear-gradient(135deg, #414345, #232526);">

                                    </div>
                                </label>

                                <label for="background_eight" class="m-0 col-3 mb-3">
                                    <input type="radio" name="background_color_code" value="eight" id="background_eight" class="d-none" <?= ($link_background['background_color_code'] == 'eight') ? 'checked' : ''; ?>>
                                    <div class="link-background-type-preset" style="background: linear-gradient(135deg, #44A08D, #093637);">

                                    </div>
                                </label>

                            </div>
                        </div>

                        <div id="custom" class="">
                            <div class="row">
                                <div class="form-group mb-3">
                                    <label for="background_color_one" class="text-muted mb-2">
                                        <i class="fas fa-fw fa-fill fa-sm text-muted mr-1"></i> Cor 1</label>
                                    <div class="pickr mb-2">
                                        <input type="color" class="pcr-button" name="background_color_one" value="<?= $link_background['background_color_one'] ?? ''; ?>">
                                    </div>
                                    <label for="background_color_two" class="text-muted mb-2">
                                        <i class="fas fa-fw fa-fill fa-sm text-muted mr-1"></i> Cor 2</label>
                                    <div class="pickr mb-2">
                                        <input type="color" class="pcr-button" name="background_color_two" value="<?= $link_background['background_color_two'] ?? ''; ?>">
                                    </div>
                                </div>

                                <div class="form-group mb-3">
                                    <label class="text-muted mb-2"> Direção</label>
                                    <select class="form-select" name="background_to_direction">
                                        <option value="<?= $link_background['background_to_direction'] ?? '';?>" selected><?= $link_background['background_to_direction'] ?? '';?></option>
                                        <option value="to right">para a direita</option>
                                        <option value="to right bottom">para baixo direito</option>
                                        <option value="to right top">para cima direito</option>
                                        <option value="to left">para a esquerda</option>
                                        <option value="to left bottom">para baixo à esquerda</option>
                                        <option value="to left top">para o topo esquerdo</option>
                                        <option value="to bottom">para baixo</option>
                                        <option value="to top">para cima</option>
                                    </select>
                                </div>

                            </div>
                        </div>

                        <div id="image" class="">
                            <div class="row">
                                <div class="form-group mb-3">
                                    <label for="background_image" class="form-label text-muted text-3 mb-2">
                                        <i class="fa fa-fw fa-image ms-1"></i> Imagem
                                    </label>
                                    <input type="file" name="background_image" id="background_image" class="form-control" value="" accept=".gif, .png, .jpg, .jpeg">
                                    <small class="form-text text-muted">
                                        Defina uma imagem de fundo para sua página de link. png, gif ou ico aceitos.
                                    </small><br>
                                    <div class="mt-1">
                                        <?php if ($link_background['background_image']): ?>
                                            <img src="<?= UPLOADS_PATH; ?>biolink/<?= $link_background['background_image']; ?>" height="150" width="90">
                                        <?php else: ?>
                                            <img src="<?= UPLOADS_PATH; ?>biolink/background-default.png" height="150">
                                        <?php endif; ?>
                                    </div>
                                </div>
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