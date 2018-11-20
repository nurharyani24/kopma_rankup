<?php
$this->load->view('inc/head');
?>

<!-- DataTables -->
<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') ?>">

<?php
$this->load->view('inc/topbar');
$this->load->view('inc/sidebar');
?>

<!-- Content Header (Page header) -->
    <!-- Main row -->
    <section class="content-header">
      <h1>
        Tambah Aktivitas User
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Kelola Poin</li>
        <li class="active">Tambah Aktivitas User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
          
        <div class="box">
          <div class="box-header with-border">
          </div>
            <!-- /.box-header -->
          <div class="box-body">
          <!-- form start -->
          <form class="form-horizontal" action="<?php echo site_url('kelolapoin/tambah_aktivitasuser') ?>" method="post">
            <div class="box-body">
              <div class="form-group">
                <div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value=''>
                    <tr>
                      <th width='120px' scope='row'>NAK</th>    
                      <td><input type='text' class='form-control' name='a' required></td>
                    </tr>
                    <tr>
                      <th width='120px' scope='row'>Nama</th>    
                      <td><input type='text' class='form-control' name='a' required></td>
                    </tr>
                    <tr>
                      <th width='120px' scope='row'>Aktivitas</th>    
                      <td><input type='text' class='form-control' name='a' required></td>
                    </tr>
                    <tr>
                      <th width='120px' scope='row'>Jabatan</th>    
                      <td><input type='text' class='form-control' name='a' required></td>
                    </tr>
                    
                  </tbody>
                  </table>
                </div>
              </div>
            </div>
            
            <a href="<?php echo base_url('alluniv/') ?>">
              <button type="button" class="btn btn-default btn-fill pull-right" style="margin-left: 5px;">Cancel</button>
            </a>
            <button type="submit" class="btn btn-primary btn-fill pull-right">Save</button>
            <div class="clearfix"></div>
          </form>
          </div>
            <!-- /.box-body -->
        </div>
          <!-- /.box -->

        </section>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </section>
    

  

      
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
<!-- ============================================================== -->
<?php
  $this->load->view('inc/js');
?>

<!-- DataTables -->
<script type="text/javascript" src="<?php echo base_url('assets/AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/AdminLTE/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') ?>"></script>

<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

<?php
  $this->load->view('inc/foot');
?>