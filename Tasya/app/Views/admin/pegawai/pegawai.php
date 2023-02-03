<?= $this->include('layout/admin/header') ?>
<div class="main-panel">
<div class="content-wrapper">
<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Data Pegawai</h4>
                    <p class="card-description"> Data Pegawai Yang Tersedia
                    </p>
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Nama Pegawai</th>
                            <th>Username</th>
                            <th>Jabatan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                           $no = 1;
                           foreach ($pegawai as $row) :
                        ?>
                          <tr>
                            <td><?= $row['namaUser']; ?></td>
                            <td><?= $row['username']; ?></td>
                            <td><label class="badge badge-<?php if ($row['level'] == 'ADMIN') {
                                                                    echo 'primary';
                                                                } elseif ($row['level'] == 'MANAGER'){
                                                                    echo 'info';
                                                                } else {
                                                                    echo 'success';
                                                                } ?> me-1"><?= $row['level']; ?></label></td>
                            <td><label class="badge badge-<?php if ($row['status'] == 'Aktif') {
                                                                    echo 'secondary';
                                                                } else {
                                                                    echo 'danger';
                                                                } ?> me-1"><?= $row['status']; ?></label></td>
                            <td><div class="dropdown">
                            <button type="button" class="btn btn-outline-info dropdown-toggle" id="dropdownMenuIconButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="mdi mdi-settings"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton3">
                              <a class="dropdown-item" href="/editPegawai/<?= $row['idUser']; ?>">Edit</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#" data-href="<?= base_url('pegawai/delete') . '/' . $row['idUser']; ?>" data-bs-toggle="modal" data-bs-target="#konfirmasi_hapus">Hapus</a>
                            </div>
                          </div></td>
                          </tr>
                          <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

              <!-- section edit data -->
              <div class="modal fade" id="updatePeg" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Edit Data Pegawai</h5>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="<?= base_url('pegawai/edit'); ?>">
                                <?= csrf_field(); ?>
                                <div class="mb-3">
                                    <label for="idUser" class="form-label">ID Pegawai</label>
                                    <input type="text" class="form-control" id="idUser_u" name="idUser" required readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="namaUser" class="form-label">Nama Pegawai</label>
                                    <input type="text" class="form-control" id="namaUser_u" name="namaUser" required>
                                </div>
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username_u" name="username" required readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="text" class="form-control" id="password_u" name="password" required readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="level" class="form-label">Jabatan</label>
                                    <select class="form-control" aria-label="Default select example" name="level" required id="level_u">
                                        <option>Pilih User</option>
                                        <option value="1">ADMIN</option>
                                        <option value="2">MANAGER</option>
                                        <option value="2">KASIR</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Status</label>
                                    <select class="form-control" aria-label="Default select example" name="status" required id="status_u">
                                        <option>Pilih</option>
                                        <option value="Aktif">Aktif</option>
                                        <option value="Pasif">Pasif</option>

                                    </select>
                                </div>
                          </div>
                        <div class="modal-footer">
                        <button class="btn btn-secondary close" type="button" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <input type="submit" class="btn btn-primary" name="updateUser">
                        </div>
                      </form>
                    </div>
                </div>
             </div>                                                 
             
              <!-- section hapus data -->
               <div class="modal fade" tabindex="-1" role="dialog" id="konfirmasi_hapus">
                <div class="modal-dialog modal-md modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"><i class="fa fa-trash"></i> Yakin ingin menghapus User ?</h5>
                        </div>
                        <div class="modal-footer bg-whitesmoke br">
                        <button class="btn btn-secondary close" type="button" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                        <a type="submit" class="btn btn-danger btn-ok" href="admin/delete/<?=
                          $row['idUser'] ?>">Hapus</a> 
                        </div>
                    </div>
                </div>
              </div>

              <?= $this->include('layout/footer') ?>