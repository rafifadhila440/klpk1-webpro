<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i>Tambah Paket</button>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>NAMA PAKET</th>
            <th>DAYA PAKET</th>
            <th>SPESIFIKASI</th>
            <th>HARGA SEWA</th>
            <th colspan="3">AKSI</th>
        </tr>
        <?php
        $i = 1;
        foreach ($paket as $pkt) { ?>
            <tr>
                <td>
                    <p><strong><?= $pkt['id_paket']; ?></strong></p>
                </td>
                <td>
                    <p><strong><?= $pkt['nama_paket']; ?></strong></p>
                </td>
                <td>
                    <p><strong><?= $pkt['daya_paket']; ?></strong></p>
                </td>
                <td>
                    <p><strong><?= $pkt['spesifikasi']; ?></strong></p>
                </td>
                <td>
                    <p><strong><?= $pkt['hrg_sewa']; ?></strong></p>
                </td>
                <td>
                    <a href="<?= base_url('admin/data_paket/ubahPaket') . $pkt['id_paket']; ?>" class="badge badge-info"><i class="fas fa-edit"></i> Ubah</a>
                    <a href="<?= base_url('admin/data_paket/hapusPaket') . $pkt['id_paket']; ?>" onclick="return confirm('Kamu yakin akan menghapus ?')" class="badge badge-danger"><i class="fas fa-trash"></i>Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>