<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i>Tambah Paket</button>
    <table class="table table-bordered">
        <tr>
            <th>ID_USER</th>
            <th>NAMA USER</th>
            <th>EMAIL</th>
            <th>ROLE ID</th>
            <th>AKSI</th>
            
            <!---<th colspan="3">AKSI</th>---->
        </tr>
        <?php
        $i = 1;
        foreach ($users as $u) { ?>
            <tr>
                <td>
                    <?= $u['id_user']; ?>
                </td>
                <td>
                    <?= $u['name']; ?>
                </td>
                <td>
                    <?= $u['email']; ?>
                </td>
                <td>
                    <?= $u['role_id']; ?>
                </td>

                <td>
                    <a href="<?= base_url('user/ubahPesanan') . $u['id_user']; ?>" class="badge badge-info"><i class="fas fa-edit"></i> Ubah</a>
                    <a href="<?= base_url('user/hapusUser') . $u['id_user']; ?>" onclick="return confirm('Kamu yakin akan menghapus ?')" class="badge badge-danger"><i class="fas fa-trash"></i>Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>