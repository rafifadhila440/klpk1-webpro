<div class="container-fluid">
    <!--<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i>Tambah Paket</button>-->
    <table class="table table-bordered">
        <tr>
            <th>ID_PESANAN</th>
            <th>ID_PAKET</th>
            <th>NAMA PENYEWA</th>
            <th>JENIS ACARA</th>
            <th>LAMA SEWA</th>
            <th>BIAYA SEWA</th>
            <th>TANGGAL PEMESANAN</th>
            <th>TEMPAT ACARA</th>
            <th>MULAI ACARA</th>
            <th>SELESAI ACARA</th>
            <th>STATUS</th>
            <!---<th colspan="3">AKSI</th>---->
        </tr>
        <?php
        $i = 1;
        foreach ($pesanan as $psn) { ?>
            <tr>
                <td>
                    <?= $psn['id_pesanan']; ?>
                </td>
                <td>
                    <?= $psn['id_paket']; ?>
                </td>
                <td>
                    <?= $psn['nama_penyewa']; ?>
                </td>
                <td>
                    <?= $psn['jenis_acara']; ?>
                </td>
                <td>
                    <?= $psn['lama_sewa']; ?>
                </td>
                <td>
                    <?= $psn['biaya_sewa']; ?>
                </td>
                <td>
                    <?= $psn['tgl_pemesanan']; ?>
                </td>
                <td>
                    <?= $psn['tmpt_acara']; ?>
                </td>
                <td>
                    <?= $psn['mulai_acara']; ?>
                </td>
                <td>
                    <?= $psn['selesai_acara']; ?>
                </td>
                <td>
                    <?= $psn['status']; ?>
                </td>
                <!--<td>
                    <!---<a href="<?= base_url('paket/ubahPesanan') . $psn['id_pesanan']; ?>" class="badge badge-info"><i class="fas fa-edit"></i> Ubah</a>
                    <a href="<?= base_url('paket/hapusPesanan') . $psn['id_pesanan']; ?>" onclick="return confirm('Kamu yakin akan menghapus ?')" class="badge badge-danger"><i class="fas fa-trash"></i>Hapus</a>
                </td>---->
            </tr>
        <?php } ?>
    </table>
</div>