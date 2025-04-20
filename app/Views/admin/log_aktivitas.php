<form action="/admin/tampilkanLog" method="get">
    <input type="text" name="search" placeholder="Cari log..." />
    <button type="submit">Cari</button>
</form>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Waktu</th>
            <th>Nama User</th>
            <th>Username</th>
            <th>Aktivitas</th>
            <th>IP Address</th>
            <th>Tabel Terpengaruh</th>
            <th>Jenis Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($logs as $log): ?>
            <tr>
                <td><?= esc($log['id']) ?></td>
                <td><?= esc($log['waktu']) ?></td>
                <td><?= esc($log['nama_user']) ?></td>
                <td><?= esc($log['username']) ?></td>
                <td><?= esc($log['aktivitas']) ?></td>
                <td><?= esc($log['ip_address']) ?></td>
                <td><?= esc($log['tabel_terpengaruh']) ?></td>
                <td><?= esc($log['jenis_aksi']) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
