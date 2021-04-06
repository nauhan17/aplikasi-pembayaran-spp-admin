<div class="content">

<div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">Transaksi Pembayaran</h4>
                  <p class="card-category">Admin SPP by Naufal</p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>No</th>
                      <th>Nama Siswa</th>
                      <th>Kelas</th>
                     <!-- <th>NISN</th> -->
                      <th>Tanggal Bayar</th>
                      <th>Bulan Bayar</th>
                      <th>Tahun Bayar</th>
                      <th>Jumlah Bayar</th>
                      <th>Opsi</th>
                    </thead>
                    <tbody>
                    <?php
                        $no=0;
                        foreach ($transaksi->result() as $value):
                            $no++;
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $value->nama_siswa; ?></td>
                            <td><?php echo $value->kelas; ?></td>
                            <!-- <td></td> -->
                            <td><?php echo $value->tgl_bayar; ?></td>
                            <td><?php echo $value->bulan_dibayar; ?></td>
                            <td><?php echo $value->tahun_dibayar; ?></td>
                            <td><?php echo $value->jumlah_bayar; ?></td>
                            <td>
                                <a href="<?php echo base_url('transaksi/ubah/').$value->id_pembayaran ?>" class="btn btn-xs btn-warning">Edit</a>
                                <a href="<?php echo base_url('transaksi/hapus/').$value->id_pembayaran ?>" class="btn btn-xs btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php
                        endforeach;
                        ?>
                    </tbody>
                  </table>
                </div>
                <div class="card-footer clearfix">
                  <a href="<?php echo base_url('transaksi/tambah') ?>" class="btn btn-xs btn-primary">Tambah Data</a>
                </div>
                <div class="card-footer clearfix">
                  <a href="<?php echo base_url('transaksi/export') ?>" class="btn btn-xs btn-primary">Export to PDF</a>
                </div>
              </div>
            </div>


</div>