<div class="card biolink_block mb-3" data-biolink-block-id="<?php echo $block['block_id']; ?>">
    <div class="card-body">
        <div class="d-flex align-items-center px-2">
            <div class="col-1">
                <span class="fa-stack fa-1x" data-toggle="tooltip" title="" data-original-title="Avatar">
                    <i class="fa fa-fw fa-user text-primary"></i>
                </span>
            </div>
            <div class="col-5">
                <div class="d-flex flex-column">
                    <a href="#biolink_block_expanded_content_<?php echo $block['block_id']; ?>" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="biolink_block_expanded_content_<?php echo $block['block_id']; ?>">
                        <span><?php echo $block['block_id']; ?></span>
                        <strong><?php echo $block['block_type']; ?></strong>
                    </a>
                    <span class="d-flex align-items-center"></span>
                </div>
            </div>
            <div class="col-2 text-primary fw-medium">
                <?php echo $block['block_orderliness']; ?>º
            </div>
            <div class="col-3">
                <form action="" method="POST">

                    <input type="hidden" name="form_" value="block_avatar_enabledDisabled" readonly>
                    <input type="hidden" name="token" value="<?php echo $_SESSION['token'] ?? ''; ?>" readonly>
                    <input type="hidden" name="link_id" value="<?php echo $link['link_id'] ?? ''; ?>" readonly>
                    <input type="hidden" name="avatar_id" value="<?php echo $block_avatar['avatar_id'] ?? ''; ?>" readonly>

                    <div class="form-check form-switch">

                        <input type="checkbox" class="form-check-input" role="switch" name="avatar_is_enabled" id="statusChecked" onChange="this.form.submit()" value="1" <?php echo ($block_avatar['avatar_is_enabled'] == 1) ? 'checked' : ''; ?>>

                        <label class="form-check-label text-3" for="statusChecked">
                            <?php echo ($block_avatar['avatar_is_enabled'] == 1) ? 'Ativo' : 'Inativo'; ?>
                        </label>

                    </div>

                </form>
            </div>
            <div class="col-1">
                <div class="dropdown position-static">
                    <button type="button" class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-fw fa-ellipsis-v"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a href="#biolink_block_expanded_content_<?php echo $block['block_id']; ?>" class="dropdown-item" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="biolink_block_expanded_content_<?php echo $block['block_id']; ?>">
                                <i class="fa fa-fw fa-sm fa-pencil-alt mr-2"></i> Edit
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-fw fa-sm fa-external-link-alt mr-2"></i> View
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-fw fa-sm fa-copy mr-2"></i> Duplicate
                            </a>
                        </li>
                        <li>
                            <form action="" method="POST">
                                <input type="hidden" name="form_" value="block_avatar_delete" readonly>
                                <input type="hidden" name="token" value="<?php echo $_SESSION['token'] ?? ''; ?>" readonly>
                                <input type="hidden" name="link_id" value="<?php echo $block['link_id'] ?? ''; ?>" readonly>
                                <input type="hidden" name="block_id" value="<?php echo $block['block_id'] ?? ''; ?>" readonly>
                                <input type="hidden" name="avatar_id" value="<?php echo $block_avatar['avatar_id'] ?? ''; ?>" readonly>
                                <input type="hidden" name="avatar_image" value="<?php echo $block_avatar['avatar_image'] ?? ''; ?>" readonly>
                                <button type="submit" class="dropdown-item">
                                    <i class="fa fa-fw fa-sm fa-trash-alt me-2"></i> Deletar
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="collapse mt-2 " id="biolink_block_expanded_content_<?php echo $block['block_id']; ?>" data-link-type="avatar">
            <div class="row">

                <!-- START CONTENT -->
                <div class="col-lg-12">
                    <form action="" method="POST" role="form" enctype="multipart/form-data" id="form_update_avatar">

                        <input type="hidden" name="form_" value="block_avatar_update" readonly>
                        <input type="hidden" name="token" value="<?php echo $_SESSION['token'] ?? ''; ?>" readonly>
                        <input type="hidden" name="link_id" value="<?php echo $block['link_id'] ?? ''; ?>" readonly>
                        <input type="hidden" name="block_id" value="<?php echo $block['block_id'] ?? ''; ?>" readonly>
                        <input type="hidden" name="avatar_id" value="<?php echo $block_avatar['avatar_id'] ?? ''; ?>" readonly>

                        <div class="notification-container"></div>

                        <div class="col-12 form-group mb-3">
                            <div class="mt-1">
                                <img src="<?= URL_PATH; ?>uploads/biolink/<?php echo $block_avatar['avatar_image']; ?>" class="rounded" height="100">
                            </div>
                            <label for="avatar_image" class="form-label text-muted">
                                <i class="fas fa-fw fa-image fa-sm text-muted"></i> Image
                            </label>
                            <input type="file" id="avatar_image" name="avatar_image" accept=".jpg, .jpeg, .png, .svg, .gif, .webp" class="form-control">
                            <small class="text-muted form-text">
                                .jpg, .jpeg, .png, .svg, .gif, .webp allowed. 2 MB maximum.
                            </small>
                        </div>

                        <div class="col-12 form-group mb-3">
                            <label for="avatar_image_alt" class="form-label text-muted">
                                <i class="fas fa-fw fa-comment-dots fa-sm text-muted mr-1"></i> Image alt
                            </label>
                            <input type="text" id="avatar_image_alt" name="avatar_image_alt" class="form-control" value="<?php echo $block_avatar['avatar_image_alt'] ?? ''; ?>" maxlength="100">
                            <small class="text-muted form-text">Descrição da imagem para fins de acessibilidade e SEO.</small>
                        </div>

                        <div class="col-12">
                            <div class="row">
                                <div class="col-6 form-group mb-3">
                                    <label for="avatar_width" class="form-label text-muted">
                                        <i class="fas fa-fw fa-expand fa-sm text-muted"></i> Size width
                                    </label>
                                    <select id="avatar_width" name="avatar_width" class="form-select">
                                        <option value="<?php echo $block_avatar['avatar_width'] ?? ''; ?>" selected><?php echo $block_avatar['avatar_width'] ?? ''; ?></option>
                                        <option value="75px">75px</option>
                                        <option value="100px">100px</option>
                                        <option value="125px">125px</option>
                                        <option value="150px">150px</option>
                                    </select>
                                </div>
                                <div class="col-6 form-group mb-3">
                                    <label for="avatar_height" class="form-label text-muted">
                                        <i class="fas fa-fw fa-expand fa-sm text-muted"></i> Size height
                                    </label>
                                    <select id="avatar_height" name="avatar_height" class="form-select">
                                        <option value="<?php echo $block_avatar['avatar_height'] ?? ''; ?>" selected><?php echo $block_avatar['avatar_height'] ?? ''; ?></option>
                                        <option value="75px">75px</option>
                                        <option value="100px">100px</option>
                                        <option value="125px">125px</option>
                                        <option value="150px">150px</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 form-group mb-3">
                            <label for="avatar_object_fit" class="form-label text-muted">
                                <span>
                                    <i class="fas fa-fw fa-print fa-sm text-muted mr-1"></i> Fit
                                </span>
                            </label>
                            <select id="avatar_object_fit" name="avatar_object_fit" class="form-select">
                                <option value="<?php echo $block_avatar['avatar_object_fit'] ?? 'Selecionar'; ?>" selected><?php echo $block_avatar['avatar_object_fit'] ?? 'Cover'; ?></option>
                                <option value="cover">Cover</option>
                                <option value="contain">Contain</option>
                                <option value="fill">Fill</option>
                            </select>
                        </div>

                        <div class="col-12 form-group mb-3">
                            <label for="avatar_location_url" class="form-label text-muted">
                                <i class="fas fa-fw fa-link fa-sm text-muted mr-1"></i> Destino (URL)
                            </label>
                            <input type="text" id="avatar_location_url" name="avatar_location_url" class="form-control" value="<?php echo $block_avatar['avatar_location_url'] ?? ''; ?>" maxlength="2048" placeholder="https://example.com/">
                        </div>

                        <div class="form-check form-switch mb-3">
                            <input type="checkbox" name="avatar_target_link" id="avatar_target_link" class="form-check-input" role="switch" value="_blank" <?= ($block_avatar['avatar_target_link'] == '_blank') ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="robots">Abrir em uma nova aba</label><br>
                        </div>

                        <div class="col-12 form-group mb-3" data-range-counter="" data-range-counter-suffix="px">
                            <label for="avatar_border_width" class="d-flex justify-content-between align-items-center text-muted mb-2">
                                <span>
                                    <i class="fas fa-fw fa-border-style fa-sm text-muted mr-1"></i> Border width
                                </span>
                                <small id="range_counter" class="text-muted" data-range-counter-wrapper=""><?php echo $block_avatar['avatar_border_width'] ?? '0'; ?>px</small>
                            </label>
                            <input id="avatar_border_width" type="range" min="0" max="15" class="form-range" name="avatar_border_width" value="<?= $block_avatar['avatar_border_width'] ?? '0'; ?>">
                        </div>

                        <script>
                            const formRanger = document.getElementById('avatar_border_width');
                            const valorSpan = document.getElementById('range_counter');

                            // Atualiza o valor exibido sempre que o form-ranger for alterado
                            formRanger.addEventListener('input', function() {
                                valorSpan.textContent = formRanger.value + 'px';
                            });
                        </script>


                        <div class="col-12 form-group mb-3">
                            <label for="block_border_color" class="text-muted mb-2">
                                <i class="fas fa-fw fa-fill fa-sm text-muted mr-1"></i> Border color</label>
                            <div class="pickr">
                                <input type="color" id="avatar_border_color" name="avatar_border_color" class="pcr-button" value="<?php echo $block_avatar['avatar_border_color'] ?? 'white'; ?>" required="required">
                            </div>
                        </div>


                        <div class="col-12 form-group mb-3">
                            <label for="avatar_border_radius" class="form-label text-muted">
                                <i class="fas fa-fw fa-border-all fa-sm text-muted"></i> Border Radius
                            </label>
                            <select id="avatar_border_radius" name="avatar_border_radius" class="form-select">
                                <option value="<?php echo $block_avatar['avatar_border_radius'] ?? 'Selecionar'; ?>" selected><?php echo $block_avatar['avatar_border_radius'] ?? 'Rounded'; ?></option>
                                <option value="straight">Straight</option>
                                <option value="round">Round</option>
                                <option value="rounded">Rounded</option>
                            </select>
                        </div>

                        <div class="col-12 form-group mb-3">
                            <label for="avatar_border_style" class="form-label text-muted">
                                <i class="fas fa-fw fa-border-none fa-sm text-muted"></i> Border style
                            </label>
                            <select id="avatar_border_style" name="avatar_border_style" class="form-select">
                                <option value="<?php echo $block_avatar['avatar_border_style'] ?? 'Selecionar'; ?>" selected><?php echo $block_avatar['avatar_border_style'] ?? 'Solid'; ?></option>
                                <option value="solid">Solid</option>
                                <option value="dashed">Dashed</option>
                                <option value="double">Double</option>
                                <option value="outset">Outset</option>
                                <option value="inset">Inset</option>
                            </select>
                        </div>

                        <div class="d-flex gap-2 justify-content-end mt-4">
                            <button type="button" class="btn btn-primary btn-md btn-primary-modified" onclick="limparCampos()">Limpar Formulário</button>
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
        var formulario = document.getElementById('form_update_avatar');

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
                case 'range': // Incluindo o tipo 'range'
                    elemento.value = elemento.min || 0;
                    break;
                case 'color': // Incluindo o tipo 'color'
                    elemento.value = '#FFFFFF'; // Definindo a cor para preto como padrão
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
                    elemento.value = null;
                    break;
            }
        }
    }
</script>

