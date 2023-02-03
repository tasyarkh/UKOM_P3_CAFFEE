<?= $this->include('layout/manager/header') ?>
<div class="main-panel">
<div class="content-wrapper">

<div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tambahkan Menu</h4>
                    <p class="card-description"> Menambahkan Menu Cafsya </p>
                    <form class="forms-sample" method="post" role="form" action="<?= base_url('menu/create'); ?>">
                    <?= csrf_field(); ?>
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama Menu</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="namaMenu" name="namaMenu">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Harga</label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" id="harga" name="harga">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Gambar</label>
                        <input type="file" name="gambar" class="file-upload-default">
                        <div class="input-group col-sm-9">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Foto" name="gambar">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Pilih Gambar</button>
                          </span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Stok</label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" id="harga" name="stok">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Status</label>
                        <div class="col-sm-9">
                        <select class="form-control" name="status">
                                <option>Pilih Status</option>
                                <option>Tersedia</option>
                                <option>Kosong</option>
                        </select>
                        </div>
                      </div>
                      
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button href="<?=base_url('/menuMan');?>" class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
              <?= $this->include('layout/footer') ?>