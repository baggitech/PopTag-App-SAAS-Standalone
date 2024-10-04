  <!-- Content -->
  <div id="content">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-9 col-lg-7 col-xl-5 mx-auto">

          <div class="bg-white shadow-md rounded p-3 pt-sm-4 pb-sm-5 px-sm-5">
            <h3 class="text-center mb-4">Verificar conta</h3>
            <hr class="mx-n3 mx-sm-n5">
            <div class="text-center">
              <div class="icon-success">
                <svg fill="#ff0000" height="50px" width="50px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 460.775 460.775" xml:space="preserve">
                  <path d="M285.08,230.397L456.218,59.27c6.076-6.077,6.076-15.911,0-21.986L423.511,4.565c-2.913-2.911-6.866-4.55-10.992-4.55
                  c-4.127,0-8.08,1.639-10.993,4.55l-171.138,171.14L59.25,4.565c-2.913-2.911-6.866-4.55-10.993-4.55
                  c-4.126,0-8.08,1.639-10.992,4.55L4.558,37.284c-6.077,6.075-6.077,15.909,0,21.986l171.138,171.128L4.575,401.505
                  c-6.074,6.077-6.074,15.911,0,21.986l32.709,32.719c2.911,2.911,6.865,4.55,10.992,4.55c4.127,0,8.08-1.639,10.994-4.55
                  l171.117-171.12l171.118,171.12c2.913,2.911,6.866,4.55,10.993,4.55c4.128,0,8.081-1.639,10.992-4.55l32.709-32.719
                  c6.074-6.075,6.074-15.909,0-21.986L285.08,230.397z" />
                </svg>
              </div>
            </div>
            <h4 class="text-5 text-center mt-3"><span>Enviamos um código de ativação para o seu email! insira-o abaixo:</span></h4>

            <form action="" method="POST">

              <input type="hidden" name="token" value="<?= $_SESSION['csrf_token'] ?? ''; ?>" readonly>
              <input type="hidden" name="form_verify" readonly>

              <div class="input-group mb-3">
                <input type="text" name="code_verify" id="code_verify" class="form-control" value="" placeholder="Código">
                <!-- <button class="btn btn-secondary" type="submit" id="button-addon2">
                  <span class="fas fa-check"></span>
                </button> -->
              </div>
              <div class="d-grid mb-3">
                <button type="submit" class="btn btn-primary btn-block">Ativar conta</button>
              </div>
            </form>

            <p class="lead text-4 text-center">Se não encontrou, verifique a caixa de spam!</p>
            <p class="text-3 text-muted text-center mb-0">Não recebi o código.
              <a class="btn-link" href="<?= URL_PATH; ?>signin">Enviar novamete.</a>
            </p>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- Content end -->