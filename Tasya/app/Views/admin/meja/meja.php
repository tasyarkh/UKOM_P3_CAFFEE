<?= $this->include('layout/admin/header') ?>
<div class="main-panel">
<div class="content-wrapper">
<div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Data Meja</h4>
                    <button type="button" class="btn btn-outline-primary btn-md mt-2 mb-4">Tambah Meja</button>
                    <div class="dropdown-divider"></div>
                    <div class="col-md-3 col-3 mb-3">
                                <!-- @if($m->status == 1) -->
                                <div class="card shadow p-4 text-center">
                                   <div class="card-body">
                                    <h1>1</h1>
                                    <form action="#" method="POST">
                                    <button type="button" class="btn btn-primary btn-rounded btn-icon shadow-lg" style="padding: 8px;">
                                      <i class="mdi mdi-checkbox-marked-circle-outline mdi-24px"></i>
                                    </button>
                                    </form>
                                   </div>
                                </div>
                               
                                <div class="card shadow p-4 text-center bg-danger">
                                   <div class="card-body">
                                        <h1 class="text-white">2</h1>
                                        <form action="#" method="POST">
<button type="button" class="btn btn-primary btn-rounded btn-icon shadow-lg" style="padding: 8px;">
                                      <i class="mdi mdi-checkbox-marked-circle-outline mdi-24px"></i>
                                    </button>
                                        </form>
                                   </div>
                                </div>
                               
                        </div>
                  </div>
                </div>
              </div>


<?= $this->include('layout/footer') ?>