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
              <?php foreach($spp->result() as $value) : ?>
                  <form class="form-horizontal" method="post" action="<?php echo base_url('spp/update') ?>">
                  <div class="card-body">
                  <div class="form-group row">
                            <label class="col-sm-2 col-form-label">ID SPP</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="id_spp" value="<?php echo $value->id_spp; ?>" placeholder="Nis" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nominal</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nominal" value="<?php echo $value->nominal; ?>" placeholder="Nama" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tahun</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="tahun" value="<?php echo $value->tahun; ?>" placeholder="Nama" required>
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