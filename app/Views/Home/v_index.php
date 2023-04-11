<div class="row">
        <div class="col-md-3">
        </div>
          <div class="box box-primary box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Kirim Dokumen</h3>          
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <?php 
            $errors = session()->getFlashdata('errors');
            if (!empty($errors)) { ?>
                <div class="alert alert-danger alert-dismissible">
                    <h5>Ada Kesalahan!</h5>
                    <ul>
                        <?php foreach ($errors as $key => $value) { ?>
                            <li> <?= esc($value)  ?></li>
                        <?php } ?>
                    </ul>         
                </div>
            <?php } ?>

            <?php echo form_open_multipart('home/add'); 
            helper('text');
            $no_po_memo  ?>

            <div class="form-group">
                  <label>No Purchase Order atau Memo</label>
                  <input name="no_po_memo" class="form-control" placeholder="No Purchase Order atau Memo">
            </div>

            <div class="form-group">
                  <label>No Purchase Request</label>
                  <input name="no_pr" class="form-control" placeholder="No Purchase Request">
            </div>

            <div class="form-group">
                  <label>Keterangan Pembelian</label>
                  <textarea name="ket_pembelian" class="form-control" rows="5"></textarea>
            </div>

            <div class="form-group">
                  <label>Tanggal Invoice</label>
                  <input name="tgl_invoice" class="form-control" type="date">
            </div>

            <div class="form-group">
                  <label>Nama Vendor</label>
                  <input name="nama_vendor" class="form-control" placeholder="Nama Vendor">
            </div>

            <div class="form-group">
                  <label>Nama Pengirim</label>
                  <input name="nama_pengirim" class="form-control" placeholder="Nama Pengirim">
            </div>

            <div class="form-group">
                  <label>Nama Penerima</label>
                  <select name="nama_penerima" class="form-control">
                  <option value="">-- Pilih Penerima --</option>
                  <option value="Mbak Sari (Bogor)">Mbak Sari (Bogor)</option>
                  <option value="Mbak Haifa (Holding)">Mbak Haifa (Holding)</option>
                  </select>
            </div>

            <div class="form-group">
                  <label>Tanggal Kirim</label>
                  <input value="<?= date('Y-m-d') ?>" name="tgl_kirim" class="form-control" type="date" readonly ?> 
            </div>

            <!-- <div class="form-group">
                  <label>File Arsip</label>
                  <input type="file" name="file_arsip" class="form-control">
                  <label class="text-danger">File Harus Format .PDF</label>
            </div>  -->
           
            <div class="form-group">
                  <button type="submit" class="btn btn-primary">Kirim</button>
            </div>

            <div class="form-group">
                  <a href="<?= base_url('home/history') ?>" class="btn btn-success">History</a>
            </div>

            <?php echo form_close(); ?>


            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

        <div class="col-md-3">
        </div>     
</div>
            