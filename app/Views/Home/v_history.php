<div class="row">
        <div class="col-md-auto">
          <div class="box box-primary box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Data Dokumen</h3>

              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
            <?php
            if (session()->getFlashdata('pesan')) {
            echo '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-check"></i> Sukses! - ';
            echo session()->getFlashdata('pesan');
            echo '</h4></div>';
            } 
            ?>
              <table class="table table-success table-striped" id="example1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No PO/Memo</th>
                        <th>No PR</th>
                        <th>Ket. Pembelian</th>
                        <th>Tanggal Invoice</th>
                        <th>Nama Vendor</th>
                        <th>Pengirim</th>
                        <th>Penerima</th>
                        <th>Tanggal Kirim</th>
                        <!-- <th>File</th>  -->
                        <th>Status</th>
                        <th>Keterangan</th>
                        <th>Tanggal Cek</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($home as $key => $value) { ?>
                        <tr>
                            <td><?=$no++?></td>
                            <td><?= $value['no_po_memo'];  ?></td>
                            <td><?= $value['no_pr'];  ?></td>
                            <td><?= $value['ket_pembelian'];  ?></td>    
                            <td><?= $value['tgl_invoice'];  ?></td>   
                            <td><?= $value['nama_vendor'];  ?></td>   
                            <td><?= $value['nama_pengirim'];  ?></td> 
                            <td><?= $value['nama_penerima'];  ?></td> 
                            <td><?= $value['tgl_kirim'];  ?></td>    
                            <!-- <td class="text-center"><a href="<?= base_url('arsip/viewpdf/' . $value['id_dok_user']) ?>"><i class="fa fa-file-pdf-o fa-2× label-danger"></i></a></td> 
                            </td>  -->
                            <td style="<?= $value['status'] == 'Rejected' ? 'color: red' : 'color: green'  ?>">
                            <b>
                            <?= $value['status']; ?>
                            </b>
                            </td>
                            <td><?= $value['keterangan'];  ?></td>
                            <td><?= $value['tgl_cek'];  ?></td>
                        </tr>
                     <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
</div>



        <!-- /.modal hapus user-->
        <div class="form-group">
                  <a href="<?= base_url('home') ?>" class="btn btn-primary">Kembali</a>
        </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /. end modal hapus user--