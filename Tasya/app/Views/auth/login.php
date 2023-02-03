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

<body class="">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg blur blur-rounded top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
          <div class="container-fluid">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="/pages/dashboard.html">
              Cafsya
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
              <ul class="navbar-nav mx-auto">
              </ul>
              <ul class="navbar-nav d-lg-block d-none">
                <li class="nav-item">
                  <img src="assets/images/favicon.png" width="40px">
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info" style="color: #E5890A;">Selamat Datang Kembali</h3>
                  <p class="mb-0">Silahkan Masukan Akunmu</p>
                </div>
                <div class="card-body">
                <?php if (session()->getFlashdata('gagal')) : ?>
                   <?= session()->getFlashdata('gagal;'); ?>
                <?php endif; ?>
                  <form role="form" action="<?= base_url('check'); ?>" method="POST">
                  <?= csrf_field(); ?>
                    <label>Username</label>
                    <div class="mb-3">
                      <input type="text" class="form-control" placeholder="username" aria-label="username" aria-describedby="email-addon" name="username">
                    </div>
                    <label>Password</label>
                    <div class="mb-3">
                      <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon" name="password">
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn w-100 mt-4 mb-0" style="background-color: #E5890A; color: #000000;">Masuk</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-sm mx-auto">
                    Belum Punya Akun ?
                    <a href="/register" class="text-info font-weight-bold" style="color: #E5890A;">Daftar</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('/assets/images/auth/Login_bg.png')"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer class="footer py-5">
    <div class="container">
      <div class="row">
        <div class="col-8 mx-auto text-center mt-1">
          <p class="mb-0 text-secondary">
            Copyright © <script>
              document.write(new Date().getFullYear())
            </script> Tasya Ramadhinta Khoirunnisa
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