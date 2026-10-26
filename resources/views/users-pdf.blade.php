<h1>Data Pengguna</h1>

<table border="1" cellpadding="4">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Level</th>
        <th>Nama Karyawan</th>
        <th>Alamat</th>
        <th>Jabatan</th>
        <th>Agama</th>
    </tr>

    <?php
    $no = 1;
    foreach ($data as $user) {
    ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $user->username ?></td>
        <td><?= $user->email ?></td>
        <td><?= $user->level ?></td>
        <td><?= $user->nama_kry ?></td>
        <td><?= $user->alamat_kry ?></td>
        <td><?= $user->nama_jabatan ?></td>
        <td><?= $user->nama_agama ?></td>
    </tr>
    <?php
    }
    ?>
</table>
