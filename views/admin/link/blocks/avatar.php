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

                    <div class="hidden mb-3">
                        <input type="text" name="form_" class="form-control mb-1 readonly-field" value="block_avatar_enabledDisabled" readonly>
                        <input type="text" name="token" class="form-control mb-1 readonly-field" value="<?= $_SESSION['token'] ?? ''; ?>" readonly>
                        <input type="text" name="link_id" class="form-control mb-1 readonly-field" value="<?= $link['link_id'] ?? ''; ?>" readonly>
                        <input type="text" name="avatar_id" class="form-control mb-1 readonly-field" value="<?php echo $block_avatar['avatar_id'] ?? ''; ?>" readonly>
                    </div>
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
                                <div class="hidden mb-3">
                                    <input type="text" name="form_" class="form-control mb-1 readonly-field" value="block_avatar_delete" readonly>
                                    <input type="text" name="token" class="form-control mb-1 readonly-field" value="<?= $_SESSION['token'] ?? ''; ?>" readonly>
                                    <input type="text" name="link_id" class="form-control mb-1 readonly-field" value="<?= $link['link_id'] ?? ''; ?>" readonly>
                                    <input type="text" name="avatar_id" class="form-control mb-1 readonly-field" value="<?php echo $block_avatar['avatar_id'] ?? ''; ?>" readonly>
                                    <input type="text" name="block_id" class="form-control mb-1 readonly-field" value="<?php echo $block['block_id'] ?? ''; ?>" readonly>
                                    <input type="text" name="avatar_image" class="form-control mb-1 readonly-field" value="<?php echo $block_avatar['avatar_image'] ?? ''; ?>" readonly>
                                </div>
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

                        <div class="hidden mb-3">
                            <input type="text" name="form_" class="form-control mb-1 readonly-field" value="block_avatar_update" readonly>
                            <input type="text" name="token" class="form-control mb-1 readonly-field" value="<?= $_SESSION['token'] ?? ''; ?>" readonly>
                            <input type="text" name="link_id" class="form-control mb-1 readonly-field" value="<?= $link['link_id'] ?? ''; ?>" readonly>
                            <input type="text" name="block_id" class="form-control mb-1 readonly-field" value="<?php echo $block['block_id'] ?? ''; ?>" readonly>
                            <input type="text" name="avatar_id" class="form-control mb-1 readonly-field" value="<?php echo $block_avatar['avatar_id'] ?? ''; ?>" readonly>
                        </div>

                        <div class="notification-container"></div>

                        <div class="col-12 form-group mb-3">
                            <div class="mt-1">
                                <img src="<?= URL_PATH; ?>biolink/uploads/avatar/<?php echo $block_avatar['avatar_image']; ?>" class="rounded" height="100">
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

                        <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                                        Border settings
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse">
                                    <div class="accordion-body p-3">

                                        <div class="col-12 form-group mb-3" data-range-counter="" data-range-counter-suffix="px">
                                            <label for="avatar_border_width" class="d-flex justify-content-between align-items-center text-muted mb-2">
                                                <span>
                                                    <i class="fas fa-fw fa-border-style fa-sm text-muted mr-1"></i> Border width
                                                </span>
                                                <small id="range_counter" class="text-muted" data-range-counter-wrapper="">
                                                    <?php echo $block_avatar['avatar_border_width'] ?? '0'; ?>px
                                                </small>
                                            </label>
                                            <input id="avatar_border_width" type="range" min="0" max="5" class="form-range" name="avatar_border_width" value="<?= $block_avatar['avatar_border_width'] ?? '0'; ?>">
                                        </div>

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

                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                        Border shadow settings
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                    <div class="accordion-body p-3">

                                        <div class="collapse show" id="border_shadow_container_4031" style="">
                                            <div class="form-group" data-range-counter="" data-range-counter-suffix="px">
                                                <label for="block_border_shadow_offset_x_4031" class="d-flex justify-content-between align-items-center"><span><svg class="svg-inline--fa fa-left-right fa-fw fa-sm text-muted mr-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="left-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                            <path fill="currentColor" d="M504.3 273.6c4.9-4.5 7.7-10.9 7.7-17.6s-2.8-13-7.7-17.6l-112-104c-7-6.5-17.2-8.2-25.9-4.4s-14.4 12.5-14.4 22l0 56-192 0 0-56c0-9.5-5.7-18.2-14.4-22s-18.9-2.1-25.9 4.4l-112 104C2.8 243 0 249.3 0 256s2.8 13 7.7 17.6l112 104c7 6.5 17.2 8.2 25.9 4.4s14.4-12.5 14.4-22l0-56 192 0 0 56c0 9.5 5.7 18.2 14.4 22s18.9 2.1 25.9-4.4l112-104z"></path>
                                                        </svg><!-- <i class="fas fa-fw fa-arrows-alt-h fa-sm text-muted mr-1"></i> Font Awesome fontawesome.com --> Border shadow offset X</span><small class="text-muted" data-range-counter-wrapper="">0px</small></label>
                                                <input id="block_border_shadow_offset_x_4031" type="range" min="-20" max="20" class="form-control-range" name="border_shadow_offset_x" value="0" required="required">
                                            </div>

                                            <div class="form-group" data-range-counter="" data-range-counter-suffix="px">
                                                <label for="block_border_shadow_offset_y_4031" class="d-flex justify-content-between align-items-center"><span><svg class="svg-inline--fa fa-up-down fa-fw fa-sm text-muted mr-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="up-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                                                            <path fill="currentColor" d="M145.6 7.7C141 2.8 134.7 0 128 0s-13 2.8-17.6 7.7l-104 112c-6.5 7-8.2 17.2-4.4 25.9S14.5 160 24 160H80V352H24c-9.5 0-18.2 5.7-22 14.4s-2.1 18.9 4.4 25.9l104 112c4.5 4.9 10.9 7.7 17.6 7.7s13-2.8 17.6-7.7l104-112c6.5-7 8.2-17.2 4.4-25.9s-12.5-14.4-22-14.4H176V160h56c9.5 0 18.2-5.7 22-14.4s2.1-18.9-4.4-25.9l-104-112z"></path>
                                                        </svg><!-- <i class="fas fa-fw fa-arrows-alt-v fa-sm text-muted mr-1"></i> Font Awesome fontawesome.com --> Border shadow offset Y</span><small class="text-muted" data-range-counter-wrapper="">0px</small></label>
                                                <input id="block_border_shadow_offset_y_4031" type="range" min="-20" max="20" class="form-control-range" name="border_shadow_offset_y" value="0" required="required">
                                            </div>

                                            <div class="form-group" data-range-counter="" data-range-counter-suffix="px">
                                                <label for="block_border_shadow_blur_4031" class="d-flex justify-content-between align-items-center"><span><svg class="svg-inline--fa fa-up-down-left-right fa-fw fa-sm text-muted mr-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="up-down-left-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                            <path fill="currentColor" d="M278.6 9.4c-12.5-12.5-32.8-12.5-45.3 0l-64 64c-9.2 9.2-11.9 22.9-6.9 34.9s16.6 19.8 29.6 19.8h32v96H128V192c0-12.9-7.8-24.6-19.8-29.6s-25.7-2.2-34.9 6.9l-64 64c-12.5 12.5-12.5 32.8 0 45.3l64 64c9.2 9.2 22.9 11.9 34.9 6.9s19.8-16.6 19.8-29.6V288h96v96H192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l64 64c12.5 12.5 32.8 12.5 45.3 0l64-64c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8H288V288h96v32c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l64-64c12.5-12.5 12.5-32.8 0-45.3l-64-64c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6v32H288V128h32c12.9 0 24.6-7.8 29.6-19.8s2.2-25.7-6.9-34.9l-64-64z"></path>
                                                        </svg><!-- <i class="fas fa-fw fa-arrows-alt fa-sm text-muted mr-1"></i> Font Awesome fontawesome.com --> Border shadow blur</span><small class="text-muted" data-range-counter-wrapper="">20px</small></label>
                                                <input id="block_border_shadow_blur_4031" type="range" min="0" max="20" class="form-control-range" name="border_shadow_blur" value="20" required="required">
                                            </div>

                                            <div class="form-group" data-range-counter="" data-range-counter-suffix="px">
                                                <label for="block_border_shadow_spread_4031" class="d-flex justify-content-between align-items-center"><span><svg class="svg-inline--fa fa-border-all fa-fw fa-sm text-muted mr-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="border-all" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                            <path fill="currentColor" d="M384 96V224H256V96H384zm0 192V416H256V288H384zM192 224H64V96H192V224zM64 288H192V416H64V288zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z"></path>
                                                        </svg><!-- <i class="fas fa-fw fa-border-all fa-sm text-muted mr-1"></i> Font Awesome fontawesome.com --> Border shadow spread</span><small class="text-muted" data-range-counter-wrapper="">0px</small></label>
                                                <input id="block_border_shadow_spread_4031" type="range" min="0" max="10" class="form-control-range" name="border_shadow_spread" value="0" required="required">
                                            </div>

                                            <div class="form-group">
                                                <label for="block_border_shadow_color_4031"><svg class="svg-inline--fa fa-fill fa-fw fa-sm text-muted mr-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="fill" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                        <path fill="currentColor" d="M86.6 9.4C74.1-3.1 53.9-3.1 41.4 9.4s-12.5 32.8 0 45.3L122.7 136 30.6 228.1c-37.5 37.5-37.5 98.3 0 135.8L148.1 481.4c37.5 37.5 98.3 37.5 135.8 0L474.3 290.9c28.1-28.1 28.1-73.7 0-101.8L322.9 37.7c-28.1-28.1-73.7-28.1-101.8 0L168 90.7 86.6 9.4zM168 181.3l49.4 49.4c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L213.3 136l53.1-53.1c3.1-3.1 8.2-3.1 11.3 0L429.1 234.3c3.1 3.1 3.1 8.2 0 11.3L386.7 288H67.5c1.4-5.4 4.2-10.4 8.4-14.6L168 181.3z"></path>
                                                    </svg><!-- <i class="fas fa-fw fa-fill fa-sm text-muted mr-1"></i> Font Awesome fontawesome.com --> Border shadow color</label>
                                                <input id="block_border_shadow_color_4031" type="hidden" name="border_shadow_color" class="form-control" value="#00000010" required="required">
                                                <div class="pickr">

                                                    <button type="button" class="pcr-button" role="button" aria-label="toggle color picker dialog" style="transition: none; --pcr-color: rgba(0, 0, 0, 0.06274509803921569);"></button>


                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
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
    const formRanger = document.getElementById('avatar_border_width');
    const valorSpan = document.getElementById('range_counter');

    // Atualiza o valor exibido sempre que o form-ranger for alterado
    formRanger.addEventListener('input', function() {
        valorSpan.textContent = formRanger.value + 'px';
    });
</script>

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