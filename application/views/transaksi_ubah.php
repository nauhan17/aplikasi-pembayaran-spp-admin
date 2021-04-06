<div class="content">

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?php echo $title; ?></h1>
          </div><!-- /.col -->
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row"> 
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0"><?php echo $subtitle; ?></h5>
              </div>
              <?php foreach($transaksi->result() as $value) : ?>
                  <form class="form-horizontal" method="post" action="<?php echo base_url('transaksi/update') ?>">
                  <div class="card-body">
                  <div class="form-group row">
                            <label class="col-sm-2 col-form-label">ID Pembayaran</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="id_pembayaran" value="<?php echo $value->id_pembayaran; ?>" placeholder="ID Pembayaran" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama Siswa</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama_siswa" value="<?php echo $value->nama_siswa; ?>" placeholder="Nama Siswa" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Kelas</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="kelas" value="<?php echo $value->kelas; ?>" placeholder="Kelas" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">tgl_bayar</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="tgl_bayar" value="<?php echo $value->tgl_bayar; ?>" placeholder="Tgl Bayar" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Bulan Bayar</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="bulan_dibayar" value="<?php echo $value->bulan_dibayar; ?>" placeholder="Bulan Bayar" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tahun Bayar</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="tahun_dibayar" value="<?php echo $value->tahun_dibayar; ?>" placeholder="Tahun Bayar" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Jumlah Bayar</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="jumlah_bayar" value="<?php echo $value->jumlah_bayar; ?>" placeholder="Jumlah Bayar" required>
                            </div>
                        </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-sm btn-default">Reset</button>
                    </div>
                </form>
                <?php endforeach; ?>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>

</div>