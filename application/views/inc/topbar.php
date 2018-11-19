<style>
    /* Menyesuaikan warna background navbar dengan warna IA --> */
    .skin-blue .main-header .navbar {
    background-color: #517bbd ;
    }
 
    /* Menyesuaikan warna background mini navbar */
    .skin-blue .main-header .logo {
    background-color: #4468a3 ;
    }

    /* Menyesuaikan warna hover mini navbar */
    .skin-blue .main-header .logo:hover {
    background-color: #41639b;
    }
    
    /* Menyesuaikan warna hover hamburger menu */
    .skin-blue .main-header .navbar .sidebar-toggle:hover {
    background-color: #4468a3;
    }

    /* Menyesuaikan warna drop down menu user-header */
    .skin-blue .main-header li.user-header {
    background-color: #ffffff;
    }

    /* Mengubah warna garis pada menu ketika di klik */
    .skin-blue .sidebar-menu>li.active>a {
    border-left-color: #ffffff;
    }

    /* Menghilangkan jarak pada sidebar-mini-collapse */
    /*.sidebar-mini.sidebar-collapse .sidebar-menu > li:hover > a > span:not(.pull-right),
    .sidebar-mini.sidebar-collapse .sidebar-menu > li:hover > .treeview-menu {
    display: block!important;
    position: absolute;*/
    /*height:150px;*/ 
    /*width: 180px;
    left: 50px;
    }*/

  </style>
  
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url().'dashboard'?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>I</b>A</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Innovative </b>Academy</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <?php if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'):?>
              <img src="<?php echo base_url('upload/logo/admsup.png') ?>" class="user-image" alt="User Image" />
              <?php elseif($this->session->userdata('akses')=='3'):?>
                <img src="<?php echo base_url('upload/logo/'.$this->session->userdata('ses_img')) ?>" class="user-image" alt="User Image" />
        <?php endif;?>
              <span class="hidden-xs"><?php echo $this->session->userdata('ses_name');?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
               <?php if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'):?>
               <img src="<?php echo base_url('upload/logo/admsup.png') ?>" class="img-circle" alt="User Image" />
               <?php elseif($this->session->userdata('akses')=='3'):?>
                <img src="<?php echo base_url('upload/logo/'.$this->session->userdata('ses_img')) ?>" class="img-circle" alt="User Image" />
              <?php endif;?>  

                <p style="color:#555F61">
                  <span class="hidden-xs">Hello,<br><b><?php echo $this->session->userdata('ses_name');?></b></span>
                </p>
              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <?php if($this->session->userdata('akses')=='1'):?><a href="<?php echo base_url().'dashboard/changepassword'?>" class="btn btn-default btn-flat">Change Password</a><?php endif;?>
                  <?php if($this->session->userdata('akses')=='2'):?><a href="<?php echo base_url().'dashboard/changepassword'?>" class="btn btn-default btn-flat">Change Password</a><?php endif;?>
                  <?php if($this->session->userdata('akses')=='3'):?><a href="<?php echo base_url().'dashboard/startupprofile'?>" class="btn btn-default btn-flat">Profile</a><?php endif;?>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url().'auth/logout'?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>