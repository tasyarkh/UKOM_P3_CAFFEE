
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/images/favicon.png">
  <title>
    <?= $title; ?>
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="/assets/auth/css/nucleo-icons.css" rel="stylesheet" />
  <link href="/assets/auth/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="/assets/auth/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="/assets/auth/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-100">
  <section class="min-vh-100 mb-8">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('/assets/images/auth/Login_bg.png');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h1 class="text-white mb-2 mt-5">Hello !</h1>
            <p class="text-lead text-white">Selamat Datang Di Cafsya</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0">
            <div class="card-body">
              <form role="form" action="<?= base_url('register/create'); ?>" method="POST">
              <?= csrf_field(); ?>
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="Nama Pegawai" aria-label="Name" aria-describedby="email-addon" name="namaUser">
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="Username" aria-label="username" aria-describedby="email-addon" name="username">
                </div>
                <div class="mb-3">
                  <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon" name="password">
                </div>
                <div class="text-center">
                  <button type="submit" class="btn w-100 my-4 mb-2" style="background-color: #E5890A; color: #000000;">Daftar</button>
                </div>
                <p class="text-sm mt-3 mb-0">Sudah Punya Akun? <a href="/" class="font-weight-bolder" style="color: #E5890A;">Masuk</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <footer class="footer py-5">
    <div class="container">
      <div class="row">
        <div class="col-8 mx-auto text-center mt-1">
          <p class="mb-0 text-secondary">
            Copyright © <script>
              document.write(new Date().getFullYear())
            </script> Tasya Ramadhinta
          </p>
        </div>
      </div>
    </div>
  </footer>
  <script src="/assets/auth/js/core/popper.min.js"></script>
  <script src="/assets/auth/js/core/bootstrap.min.js"></script>
  <script src="/assets/auth/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="/assets/auth/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>

  <script src="/assets/auth/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        <?php if (session()->getFlashdata('gagal')) { ?>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'error',
                title: 'Username atau Password Salah !'
            })

        <?php } ?>
        <?php if (session()->getFlashdata('tidakAktif')) { ?>
            Swal.fire({
                icon: 'error',
                title: 'Login Gagal',
                text: 'Maaf Akun Tidak Aktif, Segera Hubungi Administrator',
                timer: 3500,
                showConfirmButton: false,

            })

        <?php } ?>
        <?php if (session()->getFlashdata('belum')) { ?>
            Swal.fire({
                icon: 'warning',
                title: 'Anda Belum Login',
                text: 'Silahkan Login Terlebih Dahulu',
                timer: 3500,
                showConfirmButton: false,

            })

        <?php } ?>
    </script>
</body>

</html>