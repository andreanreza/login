  <!-- Page-body start -->
  <div class="page-body">
      <!-- Basic table card start -->
      <div class="col-md-6">
          <div class="card">
              <div class="card-header">
                  <?= $this->session->flashdata('pesan'); ?>
                  <a href="" class="btn btn-primary" data-toggle="modal" data-target="#addRole"><i class="fas fa-plus mr-3"> Add Role</i></a>
                  <div class="card-header-right">
                      <ul class="list-unstyled card-option">
                          <li><i class="icofont icofont-simple-left "></i></li>
                          <li><i class="icofont icofont-maximize full-card"></i></li>
                          <li><i class="icofont icofont-minus minimize-card"></i></li>
                          <li><i class="icofont icofont-refresh reload-card"></i></li>
                          <li><i class="icofont icofont-error close-card"></i></li>
                      </ul>
                  </div>
              </div>

              <div class="card-block table-border-style">
                  <div class="table-responsive">
                      <table class="table">
                          <thead>
                              <tr>
                                  <th>No</th>
                                  <th>Role</th>
                                  <th colspan="2">Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php
                                $no = 1;
                                foreach ($role as $r) : ?>
                                  <tr>
                                      <th scope="row"><?= $no++; ?></th>
                                      <td><?= $r['role']; ?></td>
                                      <td>
                                          <a href="" class="text-success" data-toggle="modal" data-target="#editMenu<?= $r['id']; ?>"><i class="fas fa-edit"></i></a>
                                          <a href="<?= base_url('admin/menu/hapusmenuutama/') . $r['id']; ?>" class="text-danger" onclick="return confirm('yakin menghapus ?');"><i class="fas fa-trash-alt ml-2"></i></a>
                                      </td>
                                  </tr>
                              <?php endforeach; ?>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- Modal add -->
  <div class="modal fade" id="addRole" tabindex="-1" role="dialog" aria-labelledby="addRoleLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="addRoleLabel"><?= $judul; ?></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <form method="post" action="">
                  <div class="modal-body">
                      <div class="form-group">
                          <label for="role">Role</label>
                          <input type="text" class="form-control" id="role" name="role">
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
  <!-- end modal add -->

  <!-- modal edit -->
  <?php
    $no = 1;
    foreach ($role as $r) : $no++; ?>
      <div class="modal fade" id="editMenu<?= $r['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="editMenuLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="editMenuLabel"><?= $judul; ?></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <form method="post" action="<?= base_url('admin/menu/editMenu/') . $r['id']; ?>">
                      <div class="modal-body">
                          <input type="hidden" name="id" value="<?= $r['id']; ?>">
                          <div class="form-group">
                              <label for="menu">Role</label>
                              <input type="text" class="form-control" id="menu" name="menu" value="<?= $r['role']; ?>">
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  <?php endforeach; ?>
  <!-- end modal edit -->