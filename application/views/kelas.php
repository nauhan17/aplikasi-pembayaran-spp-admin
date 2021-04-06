<div class="content">
<div class="col-lg-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">Data Kelas</h4>
                  <p class="card-category">Admin SPP by Naufal</p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>No</th>
                      <th>Nama Kelas</th>
                      <th>kompetensi Keahlian</th>
                      <th>Opsi</th>
                    </thead>
                    <tbody>
                    <?php
                        $no=0;
                        foreach ($kelas->result() as $value):
                            $no++;
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $value->nama_kelas; ?></td>
                            <td><?php echo $value->kompetensi_keahlian; ?></td>
                            <td>
                                <a href="<?php echo base_url('kelas/ubah/').$value->id_kelas ?>" class="btn btn-xs btn-warning">Edit</a>
                                <a href="<?php echo base_url('kelas/hapus/').$value->id_kelas ?>" class="btn btn-xs btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php
                        endforeach;
                        ?>
                    </tbody>
                  </table>
                </div>
                <div class="card-footer clearfix">
                  <a href="<?php echo base_url('kelas/tambah') ?>" class="btn btn-xs btn-primary">Tambah Data</a>
                </div>
                <div class="card-footer clearfix">
                  <a href="<?php echo base_url('kelas/export') ?>" class="btn btn-xs btn-primary">Export to PDF</a>
                </div>
              </div>
            </div>

</div>