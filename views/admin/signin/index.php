  <!-- Content -->
  <div id="content">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-9 col-lg-7 col-xl-5 mx-auto">
          <div class="bg-white shadow-md rounded p-3 pt-sm-4 pb-sm-5 px-sm-5">

            <h3 class="text-center mb-4">Entrar</h3>
            <hr class="mx-n3 mx-sm-n5">
            <p class="lead text-center">Estamos felizes em vê-lo novamente!</p>

            <form action="" method="POST">

              <input type="hidden" name="token" value="<?=$_SESSION['csrf_token'];?>" readonly>
              <input type="hidden" name="form_signin" readonly>

              <div class="mb-3">
                <label for="email" class="form-label">Endereço de email</label>
                <input type="email" class="form-control" name="email" id="email" autocomplete="off" required placeholder="Enter Your Email">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input type="password" class="form-control" name="password" id="password" autocomplete="off" required placeholder="Enter Password">
              </div>
              <div class="row mb-3">
                <div class="col-sm">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" id="remember-me" name="remember" type="checkbox">
                    <label class="form-check-label" for="remember-me">Lembre de mim</label>
                  </div>
                </div>
                <div class="col-sm text-end">
                  <a class="btn-link" href="<?=URL_PATH;?>recovery">Esqueceu a senha?</a>
                </div>
              </div>
              <div class="d-grid mb-3">
                <button type="submit" class="btn btn-primary">Entrar</button>
              </div>
            </form>

            <p class="text-3 text-muted text-center mb-0">Não tem uma conta? 
              <a class="btn-link" href="<?=URL_PATH;?>signup">Inscrever-se!</a>
            </p>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Content end -->