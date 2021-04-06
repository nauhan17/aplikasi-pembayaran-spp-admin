<div class="content">
<div class="col-lg-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">Data SPP</h4>
                  <p class="card-category">Admin SPP by Naufal</p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>No</th>
                      <th>Nominal</th>
                      <th>Tahun</th>
                    </thead>
                    <tbody>
                    <?php
                        $no=0;
                        foreach ($spp->result() as $value):
                            $no++;
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $value->nominal; ?></td>
                            <td><?php echo $value->tahun; ?></td>
                            <td>
                                <a href="<?php echo base_url('spp/ubah/').$value->id_spp ?>" class="btn btn-xs btn-warning">Edit</a>
                                <a href="<?php echo base_url('spp/hapus/').$value->id_spp ?>" class="btn btn-xs btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php
                        endforeach;
                        ?>
                    </tbody>
                  </table>
                </div>
                <div class="card-footer clearfix">
                  <a href="<?php echo base_url('spp/tambah') ?>" class="btn btn-xs btn-primary">Tambah Data</a>
                </div>
                <div class="card-footer clearfix">
                  <a href="<?php echo base_url('spp/export') ?>" class="btn btn-xs btn-primary">Export to PDF</a>
                </div>
              </div>
            </div>

</div>