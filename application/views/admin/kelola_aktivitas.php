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
        Kelola Aktivitas
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Kelola Aktivitas</li>
        

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
              <h3 class="box-title"><b>List Aktivitas</b></h3>
              <?php if($this->session->userdata('akses')=='1'):?><a href="<?php echo base_url('kelolaaktivitas/tambah') ?>" class="btn btn-fill btn-primary btn-sm btn-sm pull-right">Tambah Aktivitas</a><?php endif;?>

            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
            <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th><center>Nama Aktivitas</center></th>
              <th><center>Aksi</center></th>
            </tr>
            </thead>

            <tbody>
            <?php 
              $no = 1;
              foreach ($list->result_array() as $row){
              echo "<tr>
                    <td>$row[activity_name]</td>
                    <td><center>
                      <a class='btn btn-fill btn-warning btn-xs' data-toggle='tooltip' data-placement='bottom' title='Ubah' href='".base_url()."kelolaaktivitas/ubah/$row[id_activity]'><span class='glyphicon glyphicon-edit'></span></a>
                      <a class='btn btn-fill btn-danger btn-xs' data-toggle='tooltip' data-placement='bottom' title='Hapus' href='".base_url()."kelolaaktivitas/hapus/$row[id_activity]' onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\"><span class='fa fa-trash-o'></span></a>
                    </tr>";
                $no++;
              }
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