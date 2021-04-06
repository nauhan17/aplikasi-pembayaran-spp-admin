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
              <?php foreach($petugas->result() as $value) : ?>
                  <form class="form-horizontal" method="post" action="<?php echo base_url('petugas/update') ?>">
                  <div class="card-body">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">ID Petugas</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="id_petugas" value="<?php echo $value->id_petugas; ?>" placeholder="Petugas" required>
                            </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="username" value="<?php echo $value->username; ?>" placeholder="Username" required>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" name="password" value="<?php echo $value->password; ?>" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama_petugas" value="<?php echo $value->nama_petugas; ?>" placeholder="Nama Lengkap" required>
                            </div>
                        </div>
                        
                        
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-sm btn-default">Reset</button>
                    </div>
                </form>
                <?php endforeach; ?>
      </div><!-- /.container-fluid -->
    <!-- /.content -->
  </div>

</div>