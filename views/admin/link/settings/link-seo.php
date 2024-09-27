<div class="accordion-item">
    <h2 class="accordion-header" id="headingSeo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeo" aria-expanded="false" aria-controls="collapseSeo">
            <i class="fa fa-search me-3"></i> SEO
        </button>
    </h2>
    <div id="collapseSeo" class="accordion-collapse collapse" aria-labelledby="headingSeo" data-bs-parent="#accordionExample">
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
                            <input type="text" name="form_" class="form-control ev1 mb-1" value="link_seo_update" readonly>
                            <input type="text" name="token" class="form-control ev1 mb-1" value="<?= $_SESSION['token'] ?? ''; ?>" readonly>
                            <input type="text" name="link_id" class="form-control ev1 mb-1" value="<?= $link['link_id'] ?? ''; ?>" readonly>
                        </div>

                        <div class="form-check form-switch mb-3">
                            <input type="checkbox" name="seo_robots" id="seo_robots" class="form-check-input" role="switch" value="1" <?= ($link_seo['seo_robots'] == 1) ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="robots">Bloquear indexação do mecanismo de pesquisa</label><br>
                            <small class="text-muted">Bloqueie sua página de biolink de ser indexada pelos mecanismos de pesquisa.</small>
                        </div>

                        <div class="form-group mb-3">
                            <label for="seo_title" class="text-muted mb-2">
                                <i class="fa fa-fw fa-heading ms-1"></i> Título da página
                            </label>
                            <input type="text" name="seo_title" id="seo_title" class="form-control" value="<?= $link_seo['seo_title'] ?? ''; ?>" maxlength="70">
                            <small class="form-text text-muted">Altere completamente o título da página para um personalizado que você está configurando aqui.</small>
                        </div>

                        <div class="form-group mb-3">
                            <label for="seo_meta_description" class="text-muted mb-2">
                                <i class="fa fa-fw fa-paragraph ms-1"></i> Meta description
                            </label>
                            <input type="text" name="seo_meta_description" id="seo_meta_description" class="form-control" value="<?= $link_seo['seo_meta_description'] ?? ''; ?>" maxlength="160">
                            <small class="form-text text-muted">Defina uma meta descrição personalizada para sua página de biolink para ter uma classificação melhor nos mecanismos de pesquisa.</small>
                        </div>

                        <div class="form-group mb-3">
                            <label for="seo_meta_keywords" class="text-muted mb-2">
                                <i class="fa fa-fw fa-paragraph ms-1"></i> Meta keywords
                            </label>
                            <textarea class="form-control" name="seo_meta_keywords" id="seo_meta_keywords" rows="3" maxlength="160"><?= $link_seo['seo_meta_keywords'] ?? ''; ?></textarea>
                            <small class="form-text text-muted">Defina palavras chaves que estejam relacionadas com o tema da sua página de biolink. Isso ajuda os mecanismos de pesquisa entender melhor a sua página.</small>
                        </div>

                        <div class="form-group mb-3">
                            <label for="seo_favicon" class="text-muted mb-2">
                                <i class="fa fa-fw fa-image ms-1"></i> Favicon Desktop/Android
                            </label>
                            <input type="file" name="seo_favicon" id="seo_favicon" class="form-control" accept=".gif, .png, .jpg, .jpeg">
                            <small class="form-text text-muted">
                                Defina uma imagem para o seo_Favicon da sua página. jpg, jpeg, png ou gif aceitos.<br>
                                Use um ícone quadrado. O Google recomenda usar a maior resolução possível (192×192),
                                mas você pode usar as seguintes resoluções: (16x16), (32x32), (48x48), (96x96) e (144x144).
                            </small><br>
                            <div class="mt-2">
                                <?php if ($link_seo['seo_favicon']): ?>
                                    <img src="<?= UPLOADS_PATH; ?>favicon/<?= $link_seo['seo_favicon'] ?? ''; ?>" height="48" width="48">
                                <?php else: ?>
                                    <img src="<?= UPLOADS_PATH; ?>favicon/favicon-default.png" height="48" width="48">
                                <?php endif; ?>
                                <p class="form-check text-2 mb-2 text-muted">
                                    <input type="checkbox" name="seo_favicon_del" class="form-check-input" value="delete_favicon"> Marque aqui se quiser deletar o favicon.
                                </p>
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



<script>
    function limparCampos() {
        // Obter o formulário
        var formulario = document.getElementById('form_update_seo');

        // Iterar por todos os elementos do formulário
        for (var i = 0; i < formulario.elements.length; i++) {
            var elemento = formulario.elements[i];

            // Verificar o tipo de elemento
            switch (elemento.type) {
                case 'text':
                case 'textarea':
                case 'password':
                case 'email':
                case 'number':
                case 'tel':
                case 'date':
                case 'select-one':
                    elemento.value = '';
                    break;
                case 'radio':
                case 'checkbox':
                    elemento.checked = false;
                    break;
                case 'select-multiple':
                    for (var j = 0; j < elemento.options.length; j++) {
                        elemento.options[j].selected = false;
                    }
                    break;
                case 'file':
                    // Para campos de arquivo, você não pode definir seu valor, então, simplesmente, limpe o formulário
                    elemento.value = null;
                    break;
            }
        }
    }
</script>