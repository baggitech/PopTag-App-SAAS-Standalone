  <!-- Content -->
  <div id="content">

    <!-- Sign Up One -->
    <div class="container py-5">
      <div class="row">
        <div class="col-md-9 col-lg-7 col-xl-5 mx-auto">
          <div class="bg-white shadow-md rounded p-3 pt-sm-4 pb-sm-5 px-sm-5">

            <h3 class="text-center mb-4">Cadastre-se</h3>

            <hr class="mx-n3 mx-sm-n5">

            <p class="lead text-center text-4">Seus dados estarão seguros conosco.</p>

            <form action="" method="POST">

              <input type="hidden" name="token" value="<?=$_SESSION['csrf_token'];?>" readonly>
              <input type="hidden" name="form_signup" readonly>

              <div class="mb-3">
                <label for="name" class="form-label">Nome completo</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Digite seu nome">
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Endereço de email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Digite seu e-mail">
              </div>
              
              <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Digite uma Senha">
              </div>

              <div class="row mb-3">
                <div class="col">
                  <label for="image_captcha" class="form-label">Captcha</label>
                  <input type="hidden" name="captcha_code" id="captcha_code" value="<?=$_SESSION['captcha_code'];?>">
                  <div class="border rounded d-flex justify-content-center align-middle">
                    <img src="<?= UPLOADS_PATH; ?>captcha/<?=$_SESSION['captcha_code'];?>.jpeg" alt="" width="100%" height="50">
                  </div>
                </div>
                <div class="col">
                  <label for="captcha" class="form-label">Digite o captcha</label>
                  <input type="text" name="captcha" id="captcha" class="form-control" placeholder="">
                </div>
              </div>

              <div class="d-grid mt-4 mb-3">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
              </div>

            </form>

            <p class="text-3 text-muted text-center mb-0">Já tem uma conta? 
              <a class="btn-link" href="<?=URL_PATH;?>signin">Conecte-se</a>
            </p>

          </div>
        </div>
      </div>
    </div>
    <!-- Sign Up One end -->
    
  </div>
  <!-- Content end -->