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
        <li class="active">Riwayat Poin</li>
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
              <h3 class="box-title"><b>Riwayat Poin</b></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
            <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th style='width:40px'>No</th>
              <th><center>Aktivitas</center></th>
              <th><center>Jabatan</center></th>
              <th><center>Poin</center></th>
            </tr>
            </thead>

            <tbody>
            <?php 
              $no = 1;
              foreach ($list->result_array() as $row){
              echo "<tr><td>$no</td>
                    <td>$row[activity]</td>
                    <td>$row[position]</td>
                    <td><center>
                      <a class='btn btn-success btn-xs' title='Edit Data' href='".base_url()."keloladatauser/detail_datauser/
                      $row[id_du]'>
                      <span class='glyphicon glyphicon-edit'></span></a>
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
    

  

      
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>

<?php
  $this->load->view('inc/js');
  $this->load->view('inc/foot');
?>