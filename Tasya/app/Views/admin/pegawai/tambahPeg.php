<?= $this->include('layout/header') ?>
<div class="main-panel">
<div class="content-wrapper">
<div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tambah Pegawai</h4>
                    <p class="card-description"> Isi Data Pegawai </p>
                    <form class="forms-sample" method="POST" action="<?= base_url('/admin/pegawai/'); ?>">
                      <div class="form-group row">
                        <label for="namaUser" class="col-sm-3 col-form-label" name="namaUser">Nama Pegawai</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="namaUser" name="namaUser">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Foto</label>
                        <div class="col-sm-9">
                          <input type="email" class="form-control" id="foto" name="foto">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Username</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="username" name="username">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                          <input type="password" class="form-control" id="password" name="password">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Jabatan</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="level" name="level">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Status</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="status" name="status">
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
<?= $this->include('layout/footer') ?>