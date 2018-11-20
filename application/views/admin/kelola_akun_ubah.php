<?php
$this->load->view('inc/head');
$this->load->view('inc/topbar');
$this->load->view('inc/sidebar');
?>

<!-- Content Header (Page header) -->
    <!-- Main row -->
    <section class="content-header">
      <h1>
        Kelola Akun
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Beranda</a></li>
        <li>Kelola Akun</li>
        <li class="active">Ubah Akun</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title"><b>Ubah Akun</b></h3>
            
          </div>
          <!-- /.box-header -->
          <div class="box-body">
          <!-- form start -->
          <form class="form-horizontal" action="<?php echo site_url('kelolaakun/ubah') ?>" method="post">
          <div class="box-body">

            <!-- Form Username -->
            <div class="form-group">
              <!-- label -->
              <label for="inputUsername" class="col-sm-2 control-label">Username</label>
              <!-- input -->
              <div class="col-sm-9">
              <?php echo
                "<input type='text' class='form-control' id='username' name='username' value='$akun[username]' disabled >"
              ?>
              </div>
            </div>

            <!-- Form New Password -->
            <div class="form-group">
              <!-- label -->
              <label for="inputNewPassword" class="col-sm-2 control-label">New Password</label>
              <!-- input -->
              <div class="col-sm-9">
                <?php echo
                "<input type='password' class='form-control' id='password' placeholder='Password' name='password' value='md5($akun[password])'>"
                ?>
              </div>
            </div>

            <!-- Form Re-Type Password -->
            <div class="form-group">
              <!-- label -->
              <label for="inputRetypePassword" class="col-sm-2 control-label">Re-type Password</label>
              <!-- input -->
              <div class="col-sm-9">
                <input type="password" class="form-control" id="repass" placeholder="Re-type Password" name="repass">
              </div>
            </div>
        
          </div>
            
          <a href="<?php echo base_url('kelolaakun/') ?>">
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