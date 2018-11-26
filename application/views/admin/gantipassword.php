<?php
$this->load->view('inc/head');
$this->load->view('inc/topbar');
$this->load->view('inc/sidebar');
?>

<!-- Content Header (Page header) -->
    <!-- Main row -->
    <section class="content-header">
      <h1>
        Ganti Password
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Beranda</a></li>
        <li class="active">Ganti Password</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title"><b></b></h3>
            <?php echo $this->session->flashdata('msgPass');?> 
          </div>
          <!-- /.box-header -->
          <div class="box-body">
          <!-- form start -->
          <form class="form-horizontal" action="<?php echo site_url('gantipassword/updatepass') ?>" method="post">
          <div class="box-body">
            

            <!-- Form Old Password -->
            <div class="form-group">
              <!-- label -->
              <label for="inputOldPassword" class="col-sm-2 control-label">Old Password</label>
              <!-- input -->
              <div class="col-sm-9">
                <input type="password" class="form-control" id="name" placeholder="Old Password" name="oldPassword">
              </div>
            </div>

            <!-- Form New Password -->
            <div class="form-group">
              <!-- label -->
              <label for="inputNewPassword" class="col-sm-2 control-label">New Password</label>
              <!-- input -->
              <div class="col-sm-9">
                <input type="password" class="form-control" id="password" placeholder="New Password" name="newPassword">
              </div>
            </div>

            <!-- Form Re-Type Password -->
            <div class="form-group">
              <!-- label -->
              <label for="inputRetypePassword" class="col-sm-2 control-label">Re-type Password</label>
              <!-- input -->
              <div class="col-sm-9">
                <input type="password" class="form-control" id="password" placeholder="Re-type Password" name="repass">
              </div>
            </div>
        
          </div>
            
          <button type="submit" class="btn btn-primary btn-fill pull-right" value="login" name="change_pass">Simpan</button>
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