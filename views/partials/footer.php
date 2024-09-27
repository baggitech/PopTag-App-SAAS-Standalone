
  <!-- Footer -->
  <footer id="footer" class="">
    <div class="container">
      <div class="row">
        <div class="col-lg d-lg-flex align-items-center">
          <ul class="nav justify-content-center justify-content-lg-start text-3">
            <li class="nav-item"> 
              <a class="nav-link active" href="<?=URL_PATH;?>about">Quem somos</a>
            </li>
            <li class="nav-item"> 
              <a class="nav-link" href="<?=URL_PATH;?>support">Suporte</a>
            </li>
            <li class="nav-item"> 
              <a class="nav-link" href="<?=URL_PATH;?>help">Ajuda</a>
            </li>
            <li class="nav-item"> 
              <a class="nav-link" href="<?=URL_PATH;?>affiliates">Afiliados</a>
            </li>
            <li class="nav-item"> 
              <a class="nav-link" href="<?=URL_PATH;?>plans">Planos</a>
            </li>
          </ul>
        </div>
        <div class="col-lg d-lg-flex justify-content-lg-end mt-3 mt-lg-0">
          <ul class="social-icons justify-content-center">
            <li class="social-icons-facebook">
              <a data-bs-toggle="tooltip" href="http://www.facebook.com/" target="_blank" title="Facebook">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="social-icons-twitter">
              <a data-bs-toggle="tooltip" href="http://www.twitter.com/" target="_blank" title="Twitter">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="social-icons-google">
              <a data-bs-toggle="tooltip" href="http://www.google.com/" target="_blank" title="Google">
                <i class="fab fa-google"></i>
              </a>
            </li>
            <li class="social-icons-youtube">
              <a data-bs-toggle="tooltip" href="http://www.youtube.com/" target="_blank" title="Youtube">
                <i class="fab fa-youtube"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="footer-copyright pt-3 pt-lg-2 mt-2">
        <div class="row">
          <div class="col-lg">
            <p class="text-center text-lg-start mb-2 mb-lg-0">Copyright &copy; 2022 
              <a href="<?=URL_PATH;?>"><?//=$site['copyright'];?></a>. All Rights Reserved.
            </p>
          </div>
          <div class="col-lg d-lg-flex align-items-center justify-content-lg-end">
            <ul class="nav justify-content-center">
              <li class="nav-item"> 
                <a class="nav-link active" href="<?=URL_PATH;?>security">Segurança</a>
              </li>
              <li class="nav-item"> 
                <a class="nav-link" href="<?=URL_PATH;?>terms">Termos</a>
              </li>
              <li class="nav-item"> 
                <a class="nav-link" href="<?=URL_PATH;?>privacy">Privacidade</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer end -->

  </div>
  <!-- Document Wrapper end --> 

  <!-- Back to Top --> 
  <a id="back-to-top" data-bs-toggle="tooltip" title="Back to Top" href="javascript:void(0)">
    <i class="fas fa-chevron-up"></i>
  </a> 

  <!-- Start Generic Script --> 
  <script src="<?=VENDOR_PATH;?>jquery/3.6.0/jquery.min.js"></script> 
  <script src="<?=VENDOR_PATH;?>bootstrap/5.3.1/js/bootstrap.bundle.min.js"></script>
  <script src="<?=VENDOR_PATH;?>DataTables/datatables.js"></script>
  <script>
    $(document).ready(function() {
        $('#example').DataTable({
            language: {
                lengthMenu: 'Exibindo _MENU_ registros por página',
                zeroRecords: 'Nada para exibir',
                info: 'Exibindo página _PAGE_ de _PAGES_',
                infoEmpty: 'Nenhum registro disponível',
                infoFiltered: '(filtrado de _MAX_ registros no total)',
                search: 'Buscar',
                //previous: 'Anterior',
                //next: 'Próximo',
            },
        });
    });
  </script>
  <!-- End Generic Script -->

  <!-- Start Template Script -->
  <script src="<?=VENDOR_PATH;?>owl.carousel/owl.carousel.min.js"></script> 
  <script src="<?=VENDOR_PATH;?>imagesloaded/imagesloaded.pkgd.min.js"></script> 
  <script src="<?=VENDOR_PATH;?>bootstrap-select/js/bootstrap-select.min.js"></script> 
  <script src="<?=VENDOR_PATH;?>jquery-countdown/jquery.countdown.min.js"></script>
  <script src="<?=ASSETS_PATH;?>js/theme.js"></script>
  <script src="<?=VENDOR_PATH;?>daterangepicker/moment.min.js"></script> 
  <script src="<?=VENDOR_PATH;?>daterangepicker/daterangepicker.js"></script>
  <script>
    $(function() {
     'use strict';
      // Birth Date
      $('#birthDate').daterangepicker({
      singleDatePicker: true,
      showDropdowns: true,
      autoUpdateInput: false,
      maxDate: moment().add(0, 'days'),
      }, function(chosen_date) {
      $('#birthDate').val(chosen_date.format('MM-DD-YYYY'));
      });
    });
  </script>
  <!-- End Template Script -->

  <!-- Start companion script -->
  <script src="<?=VENDOR_PATH;?>toastr-master/build/toastr.min.js"></script>
  <?php
    if(isset($_SESSION['success_message'])) {
      $message = htmlspecialchars($_SESSION['success_message'], ENT_QUOTES);
      echo '<script>toastr["success"](\''.$message.'\')</script>';
      unset($_SESSION['success_message']);
      exit;
    }
    if(isset($_SESSION['info_message'])) {
      $message = htmlspecialchars($_SESSION['info_message'], ENT_QUOTES);
      echo '<script>toastr["info"](\''.$message.'\')</script>';
      unset($_SESSION['info_message']);
      exit;
    }
    if(isset($_SESSION['warning_message'])) {
      $message = htmlspecialchars($_SESSION['warning_message'], ENT_QUOTES);
      echo '<script>toastr["warning"](\''.$message.'\')</script>';
      unset($_SESSION['warning_message']);
      exit;
    }
    if(isset($_SESSION['error_message'])) {
      $message = htmlspecialchars($_SESSION['error_message'], ENT_QUOTES);
      echo '<script>toastr["error"](\''.$message.'\')</script>';
      unset($_SESSION['error_message']);
      exit;
    }
  ?>
  <!-- End companion script -->

  <!-- Start custom script --> 
  <script src="<?=ASSETS_PATH;?>js/alert-lightweight-1.0.js"></script>
  <script src="<?=ASSETS_PATH;?>js/select-lightweight-1.0.js"></script>
  <!-- End custom script -->  

  <!-- Start browser back button simulator -->
  <script type="text/javascript">
    function simularBotaoVoltar() {
      window.history.back();
    }
  </script>
  <!-- End browser back button simulator -->

</body>
</html>



