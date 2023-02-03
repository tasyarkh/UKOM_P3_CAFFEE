<?= $this->include('layout/manager/header') ?>
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
                              <a class="dropdown-item" href="#">Edit</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">Hapus</a>
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
              <?= $this->include('layout/footer') ?>