<div class="content">

<div class="col-md-12">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?php echo $title; ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $title; ?></li>
            </ol>
          </div><!-- /.col -->
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
                  <form class="form-horizontal" method="post" action="<?php echo base_url('siswa/simpan') ?>">
                  <div class="card-body">
                        
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nis</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nis" placeholder="Nis" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama" placeholder="Nama" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Kelas</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="kelas" placeholder="Kelas" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="alamat" placeholder="Alamat" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">No Telp</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="no_telp" placeholder="no_telp" required>
                            </div>
                        
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-sm btn-default">Reset</button>
                    </div>
                </form>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
</div>