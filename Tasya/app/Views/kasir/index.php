<?= $this->include('layout/kasir/header') ?>
<div class="main-panel">
<div class="content-wrapper">
            <div class="row">
            <div class="col-sm-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Kasir</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">Selamat Datang Kasir <span class="text-info"><?= session('namaUser'); ?></span></h2>
                        </div>
                       
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-ticket-confirmation text-primary ml-auto"></i>
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
                    <h4 class="card-title">Pesanan Masuk</h4>
                    <div class="col-lg-12 grid-margin stretch-card">
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Pembeli</th>
                            <th>Meja</th>
                            <th>Status</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Jacob</td>
                            <td>Photoshop</td>
                            <td class="text-danger"> 28.76% <i class="mdi mdi-arrow-down"></i></td>
                            <td><label class="badge badge-danger">Pending</label></td>
                          </tr>
                         
                        </tbody>
                      </table>
              </div>
                </div>
              </div>
              
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Riwayat Pesanan</h4>
                    <p class="card-description"> Riwayat Pemesanan Cafsya
                    </p>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th> # </th>
                            <th> Pembeli </th>
                            <th> Meja </th>
                            <th> Waktu </th>
                            <th> Aksi </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td> 1 </td>
                            <td> Herman Beck </td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td> $ 77.99 </td>
                            <td> May 15, 2015 </td>
                          </tr>
                          
                        </tbody>
                      </table>
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