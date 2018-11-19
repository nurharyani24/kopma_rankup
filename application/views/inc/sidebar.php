  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <?php if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'):?>
          <img src="<?php echo base_url('upload/logo/admsup.png') ?>" class="img-circle" alt="User Image" />
        <?php elseif($this->session->userdata('akses')=='3'):?>
          <img src="<?php echo base_url('upload/logo/'.$this->session->userdata('ses_img')) ?>" class="img-circle" alt="User Image" />
        <?php endif;?>
      </div>
      <div class="pull-left info">
        <p><?php echo $this->session->userdata('ses_name');?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      
      <!--Akses Menu Untuk Supervisor-->
      <?php if($this->session->userdata('akses')=='1'):?>
      <li class="active"><a href="<?php echo base_url().'dashboard'?>"><i class="fa  fa-dashboard"></i> <span>Dashboard</span></a></li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-folder-o"></i> <span>Master Data</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo site_url('allstartups/') ?>"><i class="fa fa-circle-o"></i> Startups </a></li>
          <li><a href="<?php echo site_url('allmembers/') ?>"><i class="fa fa-circle-o"></i> Members </a></li>
        </ul>
      </li>
      <li><a href="<?php echo base_url().'dashboard/evaluation'?>"><i class="fa fa-check-circle-o"></i> <span>Evaluation</span></a></li>
      <li><a href="<?php echo base_url().'dashboard/changepassword'?>"><i class="fa fa-lock"></i> <span>Change Password</span></a></li>
      <li><a href="<?php echo base_url().'faq'?>"><i class="fa  fa-question-circle"></i> <span>FAQ</span></a></li>
      <li><a href="<?php echo base_url().'auth/logout'?>"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
      <!--Akses Menu Untuk Admin-->
      <?php elseif($this->session->userdata('akses')=='2'):?>
      <li class="active"><a href="<?php echo base_url().'dashboard'?>"><i class="fa  fa-dashboard"></i> <span>Dashboard</span></a></li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-folder-o"></i> <span>Master Data</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo site_url('allstartups/') ?>"><i class="fa fa-circle-o"></i> Startups </a></li>
          <li><a href="<?php echo site_url('allmembers/') ?>"><i class="fa fa-circle-o"></i> Members </a></li>
          <li><a href="<?php echo site_url('alluniv/') ?>"><i class="fa fa-circle-o"></i> Universities </a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-user"></i> <span>Accounts</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo site_url('manageadmin/') ?>"><i class="fa fa-circle-o"></i> Administrator </a></li>
          <li><a href="<?php echo site_url('manageaccount/') ?>"><i class="fa fa-circle-o"></i> Startup </a></li>
        </ul>
      </li>
      <li><a href="<?php echo base_url().'dashboard/evaluation'?>"><i class="fa fa-check-circle-o"></i> <span>Evaluation</span></a></li>
      <li><a href="<?php echo base_url().'dashboard/changepassword'?>"><i class="fa fa-lock"></i> <span>Change Password</span></a></li>
      <li><a href="<?php echo base_url().'faq'?>"><i class="fa  fa-question-circle"></i> <span>FAQ</span></a></li>
      <li><a href="<?php echo base_url().'auth/logout'?>"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
      <!--Akses Menu Untuk User-->
      <?php else:?>
      <li class="active"><a href="<?php echo base_url().'dashboard'?>"><i class="fa  fa-dashboard"></i> <span>Dashboard</span></a></li>
      <li><a href="<?php echo base_url().'startupprofile/'?>"><i class="fa fa-info-circle"></i> <span>Startup Profile</span></a></li>
      <li><a href="<?php echo base_url().'members'?>"><i class="fa fa-users"></i> <span>Members</span></a></li>
      <li><a href="<?php echo base_url().'evaluation'?>"><i class="fa fa-check-circle-o"></i> <span>Evaluation</span></a></li>
      <li><a href="<?php echo base_url().'dashboard/changepassword'?>"><i class="fa fa-lock"></i> <span>Change Password</span></a></li>
      <li><a href="<?php echo base_url().'faq'?>"><i class="fa  fa-question-circle"></i> <span>FAQ</span></a></li>
      <li><a href="<?php echo base_url().'auth/Logout'?>"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
      <?php endif;?>
    </ul>  
  </section>
  <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
