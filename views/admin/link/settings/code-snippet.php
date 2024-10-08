<div class="accordion-item">
    <h2 class="accordion-header" id="headingCodeSnippet">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCodeSnippet" aria-expanded="false" aria-controls="collapseCodeSnippet">
            <i class="fa fa-code me-3"></i> Código
        </button>
    </h2>
    <div id="collapseCodeSnippet" class="accordion-collapse collapse" aria-labelledby="headingCodeSnippet" data-bs-parent="#accordionExample">
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
                        <small class="form-text text-danger">
                            <h5 class="text-muted text-3">Insira o pequenos trechos de códigos no cabeçalho no corpo ou no rodapé do site.</h5>
                            <i class="fa fa-fw fa-sm fa-info-circle text-3"></i>
                            Sistemas como o Google Analytics, fornece um breve código para ser inserido em uma página cadastrada e, a cada exibição, estatísticas de visitação são enviadas ao sistema e apresentadas ao dono do site. Outras ferramentas de monitoramento de tráfego, Chats, botões de interação com o usuário, empresas que fornecem serviços da Lei geral de proteção de dados (LGPD) e muitas outras, utilizam a mesma técnica.
                            Leia atentamente as recomendações do fornecedor do serviço e identifique a recomendação dos mesmos referente ao melhor local para inserir o(os) snippets(s) de código fornecido(s) por eles.
                        </small>
                    </div>

                    <div class="form-group mb-3">
                        <label for="custom_css" class="text-muted mb-2">
                            <i class="fab fa-brands fa-css3 ms-1 me-2"></i>CSS customizado e snippets de código de fornecedores
                        </label>
                        <textarea class="form-control" name="custom_css" id="custom_css" rows="4" maxlength="8192"><?= $link_setting['custom_css'] ?? ''; ?></textarea>
                        <small class="text-muted text-1">
                            Código ficará localizado antes da tag de fechamento
                            <span class="text-danger">head</span>
                        </small>
                    </div>

                    <div class="form-group mb-3">
                        <label for="custom_body" class="text-muted mb-2">
                            <i class="fa fa-globe ms-1 me-2"></i>Conteúdo customizado e snippets de código de fornecedores
                        </label>
                        <textarea class="form-control" name="custom_body" id="custom_body" rows="4" maxlength="8192"><?= $link_setting['custom_body'] ?? ''; ?></textarea>
                        <small class="text-muted text-1">
                            Código ficará localizado logo após a tag de abertura
                            <span class="text-danger">body</span>
                        </small>
                    </div>

                    <div class="form-group">
                        <label for="custom_js" class="text-muted mb-2">
                            <i class="fab fa-brands fa-node-js ms-1 me-2"></i>JS customizado e snippets de código de fornecedores
                        </label>
                        <textarea class="form-control" name="custom_js" id="custom_js" rows="4" maxlength="8192"><?= $link_setting['custom_js'] ?? ''; ?></textarea>
                        <small class="text-muted text-1">
                            Código ficará localizado antes da tag de fechamento
                            <span class="text-danger">body</span>
                        </small>
                    </div>

                </div>
                <!-- END CONTENT -->

            </div>
        </div>
    </div>
</div>