<?php
$this->load->view('inc/head');
$this->load->view('inc/topbar');
$this->load->view('inc/sidebar');
?>

<!-- Content Header (Page header) -->
    <!-- Main row -->
    <section class="content-header">
      <h1>
        Kelola Data User
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Beranda</a></li>
        <li>Kelola Data User</li>
        <li class="active">Tambah User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title"><b>Tambah User</b></h3>
            
          </div>
          <!-- /.box-header -->
          <div class="box-body">
          <!-- form start -->
          <form class="form-horizontal" action="<?php echo site_url('kelolauser/save') ?>" method="post">
          
          <div class="box-body">

            <!-- Form NAK -->
            <div class="form-group">
              <!-- label -->
              <label for="inputNAK" class="col-sm-2 control-label">NAK</label>
              <!-- input -->
              <div class="col-sm-9">
                <input type="text" class="form-control" id="nak" placeholder="NAK" name="nak">
              </div>
            </div>

            <!-- Form Nama -->
            <div class="form-group">
              <!-- label -->
              <label for="inputNama" class="col-sm-2 control-label">Nama</label>
              <!-- input -->
              <div class="col-sm-9">
                <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama">
              </div>
            </div>

            <!-- Username -->
            <div class="form-group">
              <!-- label -->
              <label for="inputUsername" class="col-sm-2 control-label">Username</label>
              <!-- input -->
              <div class="col-sm-9">
                <input type="text" class="form-control" id="username" placeholder="Username" name="username">
              </div>
            </div>
            
            <!-- Form Password -->
            <div class="form-group">
              <!-- label -->
              <label for="inputPassword" class="col-sm-2 control-label">Password</label>
              <!-- input -->
              <div class="col-sm-9">
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
              </div>
            </div>
        
          </div>
            
          <a href="<?php echo base_url('kelolauser/') ?>">
            <button type="button" class="btn btn-default btn-fill pull-right" style="margin-left: 5px;">Batal</button>
          </a>
          <button type="submit" class="btn btn-primary btn-fill pull-right">Simpan</button>
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