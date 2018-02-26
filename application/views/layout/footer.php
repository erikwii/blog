                <footer class="mdl-mini-footer">
                    <div class="mdl-mini-footer--middle-section mdl-color-text--grey-600">
                        Copyright © Erik-Syafia : <?php echo date('Y') ?>
                    </div>
                </footer>
            </main>
            <div class="mdl-layout__obfuscator"></div>
        </div>
    <div>
    <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect" for="view-source">
        <a class="mdl-color-text--grey-600" href="about/about.html"><li class="mdl-menu__item">About us</li></a>
        <a class="mdl-color-text--grey-600" href="<?php echo base_url() ?>story"><li class="mdl-menu__item">Story</li></a>
        <a class="mdl-color-text--grey-600" href="contact.html"><li class="mdl-menu__item">Contact</li></a>
    </ul>    
    <button id="view-source" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--indigo mdl-color-text--white">Menu</button>
    <?php if (isset($post) && $this->session->has_userdata('username')): ?>
        <a href="#post"><button id="postbutton" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--indigo mdl-color-text--white">Post!</button></a>
    <?php endif ?>
    <script src="<?php echo base_url() ?>assets/js/style.js"></script>
</body>
  
      <!-- SCRIPTS -->
      <!-- JQuery -->
      <script src="<?php echo base_url() ?>assets/js/jquery-3.1.1.min.js"></script>
      <!-- Bootstrap tooltips -->
      <script type="text/javascript" src="<?php echo base_url() ?>assets/js/popper.min.js"></script>
      <!-- Bootstrap core JavaScript -->
      <script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
      <!-- MDB core JavaScript -->
      <script type="text/javascript" src="<?php echo base_url() ?>assets/js/mdb.min.js"></script>
      <!--Custom scripts-->
      <script>
          new WOW().init();
          <?php if (isset($post) && $this->session->has_userdata('username')): ?>
            $(document).ready(function() {
                $('#postbutton').click(function() {
                    if ($('#post').hasClass('d-none')) {
                        $('#post').removeClass('d-none');
                    }else{
                        $('#post').addClass('d-none');
                    }
                });
            });
          <?php endif ?>
      </script>
  
  <script>
    Array.prototype.forEach.call(document.querySelectorAll('.mdl-card__media'), function(el) {
      var link = el.querySelector('a');
      if(!link) {
        return;
      }
      var target = link.getAttribute('href');
      if(!target) {
        return;
      }
      el.addEventListener('click', function() {
        location.href = target;
      });
    });
  </script>
  <?php
        if(isset($err_massages)){
            if(isset($_SESSION['login_err']) && $_SESSION['login_err'] === true){
                echo "
                <script> 

                    document.getElementById('login').classList.remove('fade');
                    $(document).ready(function() {
                        $('#login').modal('show');
                        toastr['error']('".$err_massages."');
                        document.getElementById('login').classList.add('fade');
                    });

                </script>";
                unset(
                    $_SESSION['login_err'],
                    $_SESSION['user_err'],
                    $_SESSION['pass_err']
                ); 


            }else if(isset($_SESSION['jadwal_err']) && $_SESSION['jadwal_err'] == true){
                echo "
                <script> 

                    document.getElementById('tambahJadwal').classList.remove('fade');
                    $(document).ready(function() {
                        $('#tambahJadwal').modal('show');
                        toastr['error']('".$err_massages."');
                        document.getElementById('tambahJadwal').classList.add('fade');
                    });

                </script>";
                unset(
                   $_SESSION['jadwal_err_tanggal'],
                    $_SESSION['jadwal_err_waktu'],
                    $_SESSION['jadwal_err_IDruangan'],
                    $_SESSION['jadwal_err_IDmapel'],
                    $_SESSION['jadwal_err_IDpengajar'],
                    $_SESSION['jadwal_err_IDkelas']
                ); 
            }elseif (isset($_SESSION['error']) || $_SESSION['error'] == true) {
                echo "
                <script> 
                    $(document).ready(function() {
                        toastr['error']('".$_SESSION['err_massages']."');
                    });
                </script>";
                unset(
                    $_SESSION['err_massages'],
                    $_SESSION['error']
                );
            }else{
                echo "
                <script>
                    
                    $(document).ready(function() {
                        toastr['error']('".$err_massages."');
                    });
                    
                </script>
                ";
                unset(
                    $_SESSION['reg_err_username'],
                    $_SESSION['reg_err_email'],
                    $_SESSION['reg_err_name'],
                    $_SESSION['reg_err_telp'],
                    $_SESSION['reg_err_alamat']
                );
            }

        }else if(isset($_SESSION['succ_massages'])){
            echo "
                <script>
                    
                    $(document).ready(function() {
                        toastr['success']('".$_SESSION['succ_massages']."');
                    });
                    
                </script>
                ";

                 unset(
                    $_SESSION['succ_massages']
                );
        }

        if(isset($_SESSION['deletew']) && isset($_SESSION['deletef'])){
             echo "
                <script>
                    
                    $(document).ready(function() {
                        toastr['warning']('".$_SESSION['deletew']."');
                        toastr['success']('".$_SESSION['deletef']."');
                    });
                    
                </script>
                ";
                unset(
                    $_SESSION['deletef'],
                    $_SESSION['deletew']
                );
        }elseif(isset($_SESSION['deletex'])){
            echo "
                <script>
                    
                    $(document).ready(function() {
                        toastr['error']('".$_SESSION['deletex']."');
                    });
                    
                </script>
                ";
                unset(
                    $_SESSION['deletex']
                );
        }elseif(isset($_SESSION['deletef'])){
            echo "
                <script>
                    
                    $(document).ready(function() {
                        toastr['success']('".$_SESSION['deletef']."');
                    });
                    
                </script>
                ";
                unset(
                    $_SESSION['deletef'],
                    $_SESSION['deskripsi'],
                    $_SESSION['judul']
                );
        }
    ?>
</html>