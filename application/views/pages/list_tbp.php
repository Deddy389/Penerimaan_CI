  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Tanda Bukti Penerimaan</h3>
          <a href="<?php echo base_url('index.php/control_tbp/tambah_tbp') ?>" class="btn btn-primary btn-xs pull-right">Add</a>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
          <table id="mydata" class="table table-bordered table-hover">
            <thead>
                <tr>
                  <th>No</th>
                  <th>Nomor TBP</th>
                  <th>Tanggal TBP</th>
                  <th>Uraian</th>
                  <th>Nilai</th>
                  <th>Tanggal Setor</th>
                  <th>Option</th>
                </tr>
            </thead>
            <tbody>
             <?php
              $n=1;
                foreach ($show->result() as $misal) {
                $nilai = number_format($misal->nilai,0,",",".");
              ?>
                  <tr>
                    <td><?php echo $n ?></td>
                    <td><?php echo $misal->notbp ?></td>
                    <td><?php echo $misal->tgltbp ?></td>
                    <td><?php echo $misal->uraianrbp ?></td>
                    <td><?php echo $nilai ?></td>
                    <td><?php echo $misal->tglvalid ?></td>
                    <td>
                      <a href="<?php echo base_url("index.php/control_tbp/edit_tbp/".$misal->notbp);?>" class="btn btn-info btn-xs">edit</a>
                      <a href="#" class="btn btn-danger btn-xs">delete</a>
                      <a href="#" class="btn btn-info btn-xs">cetak</a>
                    </td>
                  </tr>
               <?php $n++; } ?>
            </tbody>

            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nomor TBP</th>
                    <th>Tanggal TBP</th>
                    <th>Uraian</th>
                    <th>Nilai</th>
                    <th>Tanggal Setor</th>
                    <th>Option</th>
                </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

      
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->