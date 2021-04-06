<div class="content">

<div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">Data Siswa</h4>
                  <p class="card-category">Admin SPP by Naufal</p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>No</th>
                      <th>NIS</th>
                      <th>Nama</th>
                      <th>Kelas</th>
                      <th>Alamat</th>
                      <th>No Telp</th>
                      <th>Opsi</th>
                    </thead>
                    <tbody>
                    <?php
                        $no=0;
                        foreach ($siswa->result() as $value):
                            $no++;
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $value->nis; ?></td>
                            <td><?php echo $value->nama; ?></td>
                            <td><?php echo $value->kelas; ?></td>
                            <td><?php echo $value->alamat; ?></td>
                            <td><?php echo $value->no_telp; ?></td>
                            <td>
                                <a href="<?php echo base_url('siswa/ubah/').$value->nisn ?>" class="btn btn-xs btn-warning">Edit</a>
                                <a href="<?php echo base_url('siswa/hapus/').$value->nisn ?>" class="btn btn-xs btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php
                        endforeach;
                        ?>
                    </tbody>
                  </table>
                </div>
                <div class="card-footer clearfix">
                  <a href="<?php echo base_url('siswa/tambah') ?>" class="btn btn-xs btn-primary">Tambah Data</a>
                </div>
                <div class="card-footer clearfix">
                  <a href="<?php echo base_url('siswa/export') ?>" class="btn btn-xs btn-primary">Export to PDF</a>
                </div>
              </div>
            </div>


</div>