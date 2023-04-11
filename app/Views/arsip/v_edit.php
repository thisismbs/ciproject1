
<div class="row">
        <div class="col-md-3">
        </div>
          <div class="box box-primary box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Update Dokumen</h3>          
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

            <?php echo form_open_multipart('arsip/update/' . $arsip['id_dok_user']); 
            helper('text');
            ?>
      
            <div class="form-group">
                  <label>Status</label>
                  <select name="status" class="form-control">
                  <option value="">-- Pilih Status --</option>
                  <option value="Accepted">Accepted</option>
                  <option value="Rejected">Rejected</option>
                  </select>
            </div>

            <div class="form-group">
                  <label>Keterangan</label>
                  <input name="keterangan" value="<?= $arsip['keterangan'] ?>" class="form-control" placeholder="Tuliskan keterangan apabila status dokumen di Reject!">
            </div>

            <div class="form-group">
                  <label>Tanggal Cek</label>
                  <input name="tgl_cek" value="<?= date('Y-m-d') ?>" class="form-control" type="date" readonly>
            </div>

            
            <div class="form-group">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a href="<?= base_url('arsip/index') ?>" class="btn btn-success">Kembali</a>
            </div>
        
             <div class="form-group">
                  <label>No PO/Memo</label>
                  <input name="no_po_memo" class="form-control" value="<?= $arsip['no_po_memo'] ?>" readonly>
            </div>

            <div class="form-group">
                  <label>No Purchase Request</label>
                <input name="no_pr" class="form-control" value="<?= $arsip['no_pr'] ?>" readonly>
            </div>

            <div class="form-group">
                  <label>Keterangan Pembelian</label>
                  <input name="ket_pembelian" class="form-control" rows="5" value="<?= $arsip['ket_pembelian'] ?>" readonly>
            </div>

            <div class="form-group">
                  <label>Tanggal Invoice</label>
                  <input name="tgl_invoice" value="<?= $arsip['tgl_invoice'] ?>" class="form-control" readonly>
            </div>

            <div class="form-group">
                  <label>Nama Vendor</label>
                  <input name="nama_vendor" value="<?= $arsip['nama_vendor'] ?>" class="form-control" readonly>
            </div>

            <div class="form-group">
                  <label>Nama Pengirim</label>
                  <input name="nama_pengirim" value="<?= $arsip['nama_pengirim'] ?>" class="form-control" readonly>
            </div>

            <div class="form-group">
                  <label>Nama Penerima</label>
                  <input name="nama_penerima" value="<?= $arsip['nama_penerima'] ?>" class="form-control" readonly>
            </div>

            <div class="form-group">
                  <label>Tanggal Kirim</label>
                  <input name="tgl_kirim" value="<?= $arsip['tgl_kirim'] ?>" class="form-control" readonly>
            </div>

            <div class="form-group">
                  <label>Dokumen</label>
                  <input name="file_arsip" value="<?= $arsip['file_arsip'] ?>" class="form-control" readonly >
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
            