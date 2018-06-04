<?php echo form_open('index.php/control_tbp/update_tbp');?>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- right column -->
        <div class="col-md-6">
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Penerimaan</h3>
            </div>
<?php
foreach($edit_tbp->result_array() as $e){
$notbp=$e["notbp"];
$tgltbp=$e["tgltbp"];
$uraianrbp=$e["uraianrbp"];
$kdkegunit=$e["kdkegunit"];
$nilai=$e["nilai"];
$tglvalid=$e["tglvalid"];
}
?>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" method="post" action="">
                <!-- text input -->
                <div class="form-group">
                  <label>Nomor TBP</label>
                  <input type="text" class="form-control" id="notbp" name="notbp" value="<?php echo $notbp; ?>"
                </div>

              <!-- Date -->
              <div class="form-group">
                <label>Tanggal TBP</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="tgltbp" name="tgltbp" value="<?php echo $tgltbp; ?>">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

                <!-- textarea -->
                <div class="form-group">
                  <label>Uraian</label>
                  <textarea class="form-control" rows="3" id="uraian" name="uraian" value="<?php echo $uraianrbp;?>">
                  </textarea>
                </div>

                <!-- select -->
                <div class="form-group">
                  <label>Pembebanan Pada Rekening</label>
                  <select class="form-control" id="kdkegunit" name="kdkegunit">
                  <option value="<?php echo $kdkegunit?>"></option>
                  </select>
                </div>

                <!-- text input -->
                <div class="form-group">
                  <label>Nilai Nominal</label>
                  <input type="text" class="form-control" id="nilai_edit" name="nilai_edit" value="<?php echo $nilai; ?>">
                </div>

              <!-- Date -->
              <div class="form-group">
                <label>Tanggal TBP Disetorkan</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="tglvalid" name="tglvalid" value="<?php echo $tglvalid; ?>">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              </form>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="reset" class="btn btn-info" onclick=self.history.back()>Cancel</button>
                <button type="submit" class="btn btn-default pull-right" name="add">Simpan</button>         
              </div>
              <!-- /.box-footer -->
            </div>
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->