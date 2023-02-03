<?= $this->include('layout/manager/header') ?>
<div class="main-panel">
<div class="content-wrapper">
            <div class="row">
            <div class="col-sm-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Manager</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">Selamat Datang Manager <span class="text-danger"><?= session('namaUser'); ?></span></h2>
                        </div>
                       
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-certificate text-info ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Total Menu</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">$32123</h2>
                          
                        </div>
                        <h6 class="text-muted font-weight-normal">jumlah menu</h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-codepen text-primary ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Total Transaksi</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">$45850</h2>
                          
                        </div>
                        <h6 class="text-muted font-weight-normal"> jumlah transaksi</h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-cash-refund text-danger ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div> 
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Laporan Transaksi</h4>
                    <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">  
                  <div class="card-body">
                    <h4 class="card-title">Line chart</h4>
                    <canvas id="lineChart" style="height:250px"></canvas>
                  </div>
                </div>
              </div>
                </div>
              </div>  
            </div>
          </div>
          <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
          <script>
            <?php if (session()->getFlashdata('berhasil')) { ?>
                Swal.fire({
                    icon: 'success',
                    title: 'Login Berhasil',
                    text: 'Selamat datang, <?= session('namaUser') ?>',
                    timer: 3500,
                    showConfirmButton: false,

                })

            <?php } ?>
          </script>
<?= $this->include('layout/footer') ?>