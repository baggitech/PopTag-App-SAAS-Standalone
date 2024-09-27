
<div class="mb-3">
    <small class="form-text text-danger">
        <i class="fa fa-fw fa-sm fa-info-circle text-3"></i>
            É importante seguir as orientações de preenchimento para cada um dos campos que irá compor o QR Code do Pix, garantindo assim a correta interpretação das informações durante a transação.
    </small>
</div>

<div class="form-group mb-3">
    <label for="pix_type" class="text-muted mb-2">Escolha a chave PIX</label>
    <select id="pix_type" name="pix_type" class="form-select">
        <option value="cpf">CPF</option>
        <option value="cnpj">CNPJ</option>
        <option value="email">Email</option>
        <option value="celular">Celular</option>
    </select>
</div>

<div id="pf">
    <div class="form-group mb-3">
        <label for="cpf" class="text-muted mb-2">CPF (obrigatório)</label>
        <input type="text" id="cpf" name="cpf" class="form-control" maxlength="14" oninput="applyCPFFormat()">
    </div>
</div>

<div id="pj">
    <div class="form-group mb-3">
        <label for="cnpj" class="text-muted mb-2">CNPJ (obrigatório)</label>
        <input type="text" id="cnpj" name="cnpj" class="form-control" maxlength="18" oninput="applyCNPJFormat()">
    </div>
</div>

<div id="email" class="hidden">
    <div class="form-group mb-3">
        <label for="email" class="text-muted mb-2">Email (obrigatório)</label>
        <input type="email" id="email" name="email" class="form-control">
    </div>
</div>

<div id="celular" class="hidden">
    <div class="form-group mb-3">
        <label for="cellPhone" class="text-muted mb-2">Celular (obrigatório)</label>
        <input type="text" id="cellPhone" name="cellPhone" class="form-control" maxlength="15" oninput="applyCellPhoneFormat()">
    </div>
</div>

<div class="form-group mb-3">
    <label for="description" class="text-muted mb-2">Descrição (opcional)</label>
    <textarea class="form-control" id="description" name="description" rows="2" maxlength="140"></textarea>
    <small class="text-muted text-1">
        Deve ser informada uma descrição ou referência para a transação.<br>
        Não deve conter caracteres especiais, apenas letras maiúsculas e minúsculas, números e espaços.<br>
        Pode ter no máximo 140 caracteres. 
    </small>
</div>

<div class="form-group mb-3">
    <label for="amount" class="text-muted mb-2">Valor para transferência (opcional)</label>
    <input type="text" id="amount" name="amount" class="form-control" maxlength="15">
    <small class="text-muted text-1">
        Deve ser informado o valor a ser pago.<br>
        Deve ser representado usando o formato decimal com ponto (exemplo: 10.50).<br>
        Pode ter no máximo 15 dígitos no total, incluindo os centavos.
    </small>
</div>

<div class="form-group mb-3">
    <label for="name" class="text-muted mb-2">Nome do beneficiário (opcional)</label>
    <input type="text" id="name" name="name" class="form-control" maxlength="140">
    <small class="text-muted text-1">
        Deve ser informado o nome do beneficiário ou do recebedor do pagamento.<br>
        Não deve conter caracteres especiais, apenas letras maiúsculas e minúsculas, números e espaços.<br>
        Pode ter no máximo 140 caracteres.
    </small>
</div>

<div class="form-group mb-3">
    <label for="city" class="text-muted mb-2">Cidade do beneficiário ou da transação (opcional)</label>
    <input type="text" id="city" name="city" class="form-control" maxlength="60">
    <small class="text-muted text-1">
        Deve ser informada a cidade onde o pagamento está sendo realizado.<br>
        Não deve conter caracteres especiais, apenas letras maiúsculas e minúsculas, números e espaços.<br>
        Pode ter no máximo 60 caracteres.
    </small>
</div>

<div class="form-group mb-3">
    <label for="amount" class="text-muted mb-2">Código da transferência - Sem espaço (opcional - até 20 Letras e/ou Números)</label>
    <input type="text" id="id" name="id" class="form-control">
    <small class="text-muted text-1">
        Texto aqui!
    </small>
</div>		


<script>
    // Function to format CPF
    function formatCPF(value) {
        value = value.replace(/\D/g, ''); // Remove non-numeric characters
        value = value.replace(/(\d{3})(\d)/, '$1.$2'); // Insert a dot after the third digit
        value = value.replace(/(\d{3})(\d)/, '$1.$2'); // Insert a dot after the sixth digit
        value = value.replace(/(\d{3})(\d{1,2})$/, '$1-$2'); // Insert a hyphen before the last two digits
        return value;
    }
    // Function to apply the CPF mask
    function applyCPFFormat() {
        var cpfField = document.getElementById('cpf');
        cpfField.value = formatCPF(cpfField.value);
    }

    // Function to format CNPJ
    function formatCNPJ(value) {
        value = value.replace(/\D/g, ''); // Remove non-numeric characters
        value = value.replace(/^(\d{2})(\d)/, '$1.$2'); // Insert a dot after the second digit
        value = value.replace(/^(\d{2})\.(\d{3})(\d)/, '$1.$2.$3'); // Insert dots after the fifth and eighth digits
        value = value.replace(/\.(\d{3})(\d)/, '.$1/$2'); // Insert a slash and the company number after the eighth digit
        value = value.replace(/(\d{4})(\d)/, '$1-$2'); // Insert a hyphen before the last two digits
        return value;
    }

    // Function to apply the CNPJ mask
    function applyCNPJFormat() {
        var cnpjField = document.getElementById('cnpj');
        cnpjField.value = formatCNPJ(cnpjField.value);
    }

    // Function to format the cellphone number
    function formatCellPhone(value) {
        value = value.replace(/\D/g, ''); // Remove non-numeric characters
        value = value.replace(/(\d{2})(\d)/, '($1) $2'); // Insert parentheses and space after the first two digits
        value = value.replace(/(\d{5})(\d)/, '$1-$2'); // Insert a hyphen after the first five digits
        return value;
    }
    // Function to apply the cellphone mask
    function applyCellPhoneFormat() {
        var cellPhoneField = document.getElementById('cellPhone');
        cellPhoneField.value = formatCellPhone(cellPhoneField.value);
    }
</script>








