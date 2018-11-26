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
        Profil
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Profil</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
          
        <div class="box">
            
            <div class="box-body table-responsive">
            <table class="table table-hover">
            <tr>
              
            <th style="width: 20%">FIELD</th>
              <th>VALUE</th>
            </tr>
            
            <tr>
              <td><b>NAK</b></td>
              <td><?php echo $data->nak; ?></td>
            </tr>

            <tr>
              <td><b>Nama</b></td>
              <td><?php echo $data->name; ?></td>
            </tr>

            <tr>
              <td><b>Username</b></td>
              <td><?php echo $data->username; ?></td>
            </tr>
            
            </table>
        
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