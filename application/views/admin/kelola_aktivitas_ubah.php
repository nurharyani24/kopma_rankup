<?php
$this->load->view('inc/head');
$this->load->view('inc/topbar');
$this->load->view('inc/sidebar');
?>

<!-- Content Header (Page header) -->
    <!-- Main row -->
    <section class="content-header">
      <h1>
        Kelola Aktivitas
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Beranda</a></li>
        <li>Kelola Aktivitas</li>
        <li class="active">Ubah Aktivitas</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title"><b>Ubah Aktivitas</b></h3>
            
          </div>
          <!-- /.box-header -->
          <div class="box-body">
          <!-- form start -->
          <form class="form-horizontal" action="<?php echo site_url('kelolaaktivitas/ubah') ?>" method="post">
          <div class="box-body">
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Nama Aktivitas</label>
    
              <div class="col-sm-9">
                <?php
                echo 
                "<input type='hidden' name='id' value='$activity[id_activity]'>
                <input type='text' class='form-control' id='activity_name' placeholder='Nama Aktivitas' name='activity_name' value='$activity[activity_name]'>"
                ?>
              </div>
            </div>
        
          </div>
            
          <a href="<?php echo base_url('kelolaaktivitas/') ?>">
            <button type="button" class="btn btn-default btn-fill pull-right" style="margin-left: 5px;">Batal</button>
          </a>
          <button type="submit" name="submit" class="btn btn-primary btn-fill pull-right">Simpan</button>
          <div class="clearfix"></div>
        </form>
          </div>
        
      </div>
      
    </div>
    </section>
    <!-- /.content -->
      </div>

<?php
  $this->load->view('inc/js');
  $this->load->view('inc/foot');
?>