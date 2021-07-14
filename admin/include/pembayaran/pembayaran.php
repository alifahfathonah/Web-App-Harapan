<!-- Main content -->
<section class="content content2">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Laporan Pembayaran</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
      <div class="table-responsive">
     <form>
        <input type="hidden" name="page" value="pembayaran/pembayaran.php">
        <!-- date picker-->
        <div class="form-group">
            <label>Date range:</label>
            <div class="input-daterange input-group col-xs-4">
                <input type="date" class="input-small form-control daterange" name="start"/>
                <span class="input-group-addon">to</span>
                <input type="date" class="input-small form-control daterange" name="end"/>
            </div>
        </div><!-- /.form group -->
         
         
        
        <div class="form-group">
            <div class="input-group col-xs-4">
              <button type="submit" class="btn btn-default">Lihat</button>
            </div>
        </div>
    </form>
    <form action="pembayaran/print_pembayaran.php" target="_blank">
        <input type="hidden" name="start" value="<?php echo $start; ?>">
        <input type="hidden" name="end" value="<?php echo $end; ?>">
        <div class="form-group">
            <div class="input-group col-xs-4">
              <button type="submit" class="btn btn-default" <?php echo $disable;?>>Print</button>
            </div>
        </div>
    </form>
    <section>
    <?php include "include/pembayaran/isipembayaran.php"; ?>
</section>
</div>
          </div>
        </div>
      
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</section>
