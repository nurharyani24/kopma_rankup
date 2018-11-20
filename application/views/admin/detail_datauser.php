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
        Kelola Poin
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Kelola Poin</li>
        <li class="active"><?php echo $aktivitas_user['name'] ?></li>
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
              <h3 class="box-title"><b><?php echo $aktivitas_user['name'] ?></b></h3>
              <?php if($this->session->userdata('akses')=='1'):?><a class='pull-right btn btn-primary btn-sm' href='<?php echo base_url(); ?>kelolapoin/tambah_aktivitasuser'>Tambah Aktivitas</a><?php endif;?>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
            <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th style='width:40px'>No</th>
              <th>Aktivitas</th>
              <th>Jabatan</th>
              <th>Poin</th>
              <!-- <th>Aksi</th> -->
            </tr>
            </thead>

            <tbody>
            <?php 
              $no = 1;
              //foreach ($aktivitas_user->result_array() as $row){
              echo "<tr><td>$no</td>
                    <td>$aktivitas_user[activity_name]</td>
                    <td>$aktivitas_user[position_name]</td>
                    <td>$aktivitas_user[position_points]</td>

                    ";

                $no++;
              //}
            ?>
            </tfoot>
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