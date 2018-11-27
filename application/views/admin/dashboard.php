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
        Dashboard
        <!--<small>Control panel</small>-->
        <small>Overview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
      
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <?php $jml_anggota = $this->model_kelolauser->list_user()->num_rows(); ?>
            <h3><?php echo $jml_anggota; ?></h3>
            <p>Anggota</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="<?php echo base_url('kelolauser') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
        
      </div>
      <!-- /.row -->


      <!-- Main row -->
      <div class="row">
      <section class="content-header">
      <h1>
        Ranking  
        <!--<small>Control panel</small>-->
        <small>User</small>
      </h1>
      </section>
        
      <!-- Main content -->
    <section class="content">
    <div class="row">

    <div class="col-md-12">
      <!-- RANKING -->
        <div class="box">
        <div class="box-header with-border">
        <h3 class="box-title"><b>Ranking Poin</b></h3>
        
      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive">
      <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>Rank</th>
        <th>NAK</th>
        <th>Nama</th>
        <th>Total Poin</th>
      </tr>
      </thead>

      <tbody>

      
        <?php
          $no = 1;
          foreach ($data->result_array() as $row) {
            echo 
            "<tr>
            <td>$no</td>
            <td>$row[nak]</td>
            <td>$row[name]</td>
            <td>$row[point_total]</td>
            </tr>";  
            $no++;
          }   
        ?>
      
      
      </tbody>
    </table>
      </div>
      <!-- /.box-body -->
      </div>
      <!-- /.col -->


    </div></div>


    </section>
    

  

      
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>

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