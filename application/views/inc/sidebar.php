  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <?php if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'):?>
          <img src="<?php echo base_url('assets/logo/admsup.png') ?>" class="img-circle" alt="User Image" />
        <?php endif;?>
      </div>
      <div class="pull-left info">
        <p><?php echo $this->session->userdata('ses_nama');?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      
      <!--Akses Menu Untuk Admin-->
      <?php if($this->session->userdata('akses')=='1'):?>
      <li><a href="<?php echo base_url().'dashboard'?>"><i class="fa  fa-dashboard"></i> <span>Dashboard</span></a></li>
      <li><a href="<?php echo base_url().'kelolauser'?>"><i class="fa fa-check-circle-o"></i> <span>Kelola Data User</span></a></li>
      <li><a href="<?php echo base_url().'kelolapoin'?>"><i class="fa fa-check-circle-o"></i> <span>Kelola Poin</span></a></li>
      <li><a href="<?php echo base_url().'kelolaaktivitas'?>"><i class="fa fa-lock"></i> <span>Kelola Aktivitas</span></a></li>
      <li><a href="<?php echo base_url().'kelolaakun'?>"><i class="fa  fa-question-circle"></i> <span>Kelola Akun</span></a></li>
      <li><a href="<?php echo base_url().'gantipassword'?>"><i class="fa  fa-question-circle"></i> <span>Ganti Password </span></a></li>
      <li><a href="<?php echo base_url().'auth/logout'?>"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
      <!--Akses Menu Untuk User-->
      <?php else:?>
      <li><a href="<?php echo base_url().'dashboard'?>"><i class="fa  fa-dashboard"></i> <span>Dashboard</span></a></li>
      <li><a href="<?php echo base_url().'startupprofile/'?>"><i class="fa fa-info-circle"></i> <span>Profil</span></a></li>
      <li><a href="<?php echo base_url().'riwayatpoin'?>"><i class="fa fa-users"></i> <span>Riwayat Poin</span></a></li>
      <li><a href="<?php echo base_url().'auth/Logout'?>"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
      <?php endif;?>
    </ul>  
  </section>
  <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
