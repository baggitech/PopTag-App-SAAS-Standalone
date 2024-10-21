<?php foreach ($result_avatar as $result): ?>
    <?php if ($result['avatar_is_enabled'] == 1): ?>
        <div id="biolink_block_id_<?= $result['link_name'] ?? ''; ?>" data-biolink-block-id="<?= $result['link_name'] ?? ''; ?>" class="col-12 my-2">
            <div class="d-flex flex-column align-items-center">
                <a href="<?= $result['avatar_location_url'] ?? '#'; ?>" data-track-biolink-block-id="3865" target="<?= $result['avatar_target_link'] ?? ''; ?>">
                    <img src="<?= URL_PATH; ?>uploads/avatar/<?= $result['avatar_image'] ?? ''; ?>"
                        class="link-image link-avatar-<?= $result['avatar_border_radius'] ?? ''; ?>"
                        style="width: <?= $result['avatar_width'] ?? ''; ?>; 
                                        height: <?= $result['avatar_height'] ?? ''; ?>; 
                                        border-width: <?= $result['avatar_border_width'] ?? ''; ?>px; 
                                        border-color: <?= $result['avatar_border_color'] ?? ''; ?>; 
                                        border-style: <?= $result['avatar_border_style'] ?? ''; ?>; 
                                        object-fit: <?= $result['avatar_object_fit'] ?? ''; ?>;"
                        alt="<?= $result['avatar_image_alt'] ?? ''; ?>"
                        loading="lazy" data-border-width=""
                        data-border-avatar-radius=""
                        data-border-style=""
                        data-border-color=""
                        data-avatar="" />
                </a>
            </div>
        </div>
    <?php endif; ?>
<?php endforeach; ?>