  <!-- Content -->
  <div id="content">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-9 col-lg-7 col-xl-5 mx-auto">

          <div class="bg-white shadow-md rounded p-3 pt-sm-4 pb-sm-5 px-sm-5">
            <h3 class="text-center mb-4">Recuperar Senha</h3>
            <hr class="mx-n3 mx-sm-n5">
            <p class="lead text-4 text-center">Insira seu endereço de e-mail.<br>Você recebera um link para alterar a senha.</p>

            <form action="" method="POST">

              <input type="hidden" name="form_" value="recovery" readonly>
              <input type="hidden" name="token" value="<?=$_SESSION['csrf_token'];?>" readonly>              

              <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Digite o email cadastrado">
              </div>
              <div class="row mb-3">

              </div>
              <div class="d-grid mb-3">
                <button type="submit" class="btn btn-primary">Enviar</button>
              </div>
              
            </form>
            
            <p class="text-3 text-muted text-center mb-0">Voltar para o  
              <a class="btn-link" href="<?=URL_PATH;?>signin">Login!</a>
            </p>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- Content end --> 
