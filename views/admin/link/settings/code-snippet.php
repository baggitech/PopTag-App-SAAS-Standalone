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

                    <?php //require_once(__DIR__.'/../../../../../app/helpers/Alerts.php'); 
                    ?>

                </div>
                <!-- END ALERTS -->

                <!-- START CONTENT -->
                <div class="col-lg-12">

                    <form action="" method="POST" enctype="multipart/form-data" id="link_snippet_update">

                        <div class="hidden mb-3">
                            <input type="text" name="form_" class="form-control mb-1 readonly-field" value="link_snippet_update" readonly>
                            <input type="text" name="token" class="form-control mb-1 readonly-field" value="<?= $_SESSION['token'] ?? ''; ?>" readonly>
                            <input type="text" name="link_id" class="form-control mb-1 readonly-field" value="<?= $link['link_id'] ?? ''; ?>" readonly>
                        </div>

                        <div class="mb-3">
                            <small class="form-text text-danger">
                                <h5 class="text-muted text-3">Insira o pequenos trechos de códigos no cabeçalho no corpo ou no rodapé do site.</h5>
                                <i class="fa fa-fw fa-sm fa-info-circle text-3"></i>
                                Sistemas como o Google Analytics, fornece um breve código para ser inserido em uma página cadastrada e, a cada exibição, estatísticas de visitação são enviadas ao sistema e apresentadas ao dono do site. Outras ferramentas de monitoramento de tráfego, Chats, botões de interação com o usuário, empresas que fornecem serviços da Lei geral de proteção de dados (LGPD) e muitas outras, utilizam a mesma técnica.
                                Leia atentamente as recomendações do fornecedor do serviço e identifique a recomendação dos mesmos referente ao melhor local para inserir o(os) snippets(s) de código fornecido(s) por eles.
                            </small>
                        </div>

                        <div class="form-group mb-3">
                            <label for="snippet_head" class="text-muted mb-2">
                                <i class="fab fa-brands fa-css3 ms-1 me-2"></i>CSS snippetizado e snippets de código de fornecedores
                            </label>
                            <textarea class="form-control" name="snippet_head" id="snippet_head" rows="4" maxlength="8192"><?= $link_snippet['snippet_head'] ?? ''; ?></textarea>
                            <small class="text-muted text-1">
                                Código ficará localizado antes da tag de fechamento
                                <span class="text-danger">head</span>
                            </small>
                        </div>

                        <div class="form-group mb-3">
                            <label for="snippet_body" class="text-muted mb-2">
                                <i class="fa fa-globe ms-1 me-2"></i>Conteúdo snippetizado e snippets de código de fornecedores
                            </label>
                            <textarea class="form-control" name="snippet_body" id="snippet_body" rows="4" maxlength="8192"><?= $link_snippet['snippet_body'] ?? ''; ?></textarea>
                            <small class="text-muted text-1">
                                Código ficará localizado logo após a tag de abertura
                                <span class="text-danger">body</span>
                            </small>
                        </div>

                        <div class="form-group">
                            <label for="snippet_footer" class="text-muted mb-2">
                                <i class="fab fa-brands fa-node-js ms-1 me-2"></i>JS snippetizado e snippets de código de fornecedores
                            </label>
                            <textarea class="form-control" name="snippet_footer" id="snippet_footer" rows="4" maxlength="8192"><?= $link_snippet['snippet_footer'] ?? ''; ?></textarea>
                            <small class="text-muted text-1">
                                Código ficará localizado antes da tag de fechamento
                                <span class="text-danger">body</span>
                            </small>
                        </div>

                        <div class="d-flex gap-2 justify-content-end mt-4">
                            <button type="button" class="btn btn-primary btn-md btn-primary-modified" onclick="limparCampos2()">Limpar Formulário</button>
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
    function limparCampos2() {
        // Obter o formulário
        var formulario = document.getElementById('link_snippet_update');

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