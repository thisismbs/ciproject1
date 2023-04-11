<div class="row">
    <div class="col-sm-12">
        <table class="table table-bordered">
            <tr>
                <th width="210px">No Purchase Order atau Memo</th>
                <th width="30px">:</th>
                <td><?= $arsip['no_po_memo']?></td>
                <th>No Purchase Request</th>
                <th>:</th>
                <td><?= $arsip['no_pr']?></td>
            </tr>
            
            <tr>
                <th>Keterangan Pembelian</th>
                <th>:</th>
                <td><?= $arsip['ket_pembelian']?></td>
                <th>Tanggal Invoice</th>
                <th>:</th>
                <td><?= $arsip['tgl_invoice']?></td>
            </tr>

            <tr>
                <th>Nama Vendor</th>
                <th>:</th>
                <td><?= $arsip['nama_vendor']?></td>
                <th>Pengirim</th>
                <th>:</th>
                <td><?= $arsip['nama_pengirim']?></td>
            </tr>
            
            <tr>
                <th>Penerima</th>
                <th>:</th>
                <td><?= $arsip['nama_penerima']?></td>
                <th>Tanggal Kirim</th>
                <th>:</th>
                <td><?= $arsip['tgl_kirim']?></td>
            </tr>
        </table>
    </div>

    <div class="col-sm-12">
        <iframe src="<?= base_url('file_arsip/' . $arsip['file_arsip']) ?>" height="1000px" width="100%" frameborder="1"></iframe>
    </div>
    
</div>