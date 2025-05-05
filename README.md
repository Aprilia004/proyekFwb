
<body>
    <h1>PORTAL KESEHATAN DIGITAL</h1>
    <p><strong>APRILIA SANDARATU</strong> | <strong>D0223344</strong> | <strong>FRAME WORK BASE</strong> | <strong>2025</strong></p>

<h2>Role dan Fitur-fiturnya</h2>
    <h3>Admin</h3>
    <ul>
        <li>Mengelola akun dokter, pasien, petugas laboratorium, penulis konten</li>
    </ul>
    <h3>Dokter</h3>
    <ul>
        <li>Melihat daftar pasien</li>
    </ul>
    <h3>Pasien</h3>
    <ul>
        <li>Melihat profil dokter</li>
        <li>Melihat hasil laboratorium</li>
    </ul>
    <h3>Petugas Laboratorium</h3>
    <ul>
        <li>Menambahkan hasil laboratorium</li>
    </ul>
    <h3>Penulis Konten</h3>
    <ul>
        <li>Menulis dan mengelola artikel kesehatan</li>
    </ul>

  <h2>Tabel-tabel Database</h2>

<h3>1. Tabel Admin</h3>
    <table>
        <tr><th>Nama Field</th><th>Tipe Data</th><th>Keterangan</th></tr>
        <tr><td>admin_id</td><td>BIGINT</td><td>Primary key</td></tr>
        <tr><td>username</td><td>VARCHAR</td><td>Unik</td></tr>
        <tr><td>password</td><td>VARCHAR</td><td>-</td></tr>
        <tr><td>email</td><td>VARCHAR</td><td>Unik</td></tr>
        <tr><td>timestamps</td><td>TIMESTAMP</td><td>Waktu buat & update</td></tr>
    </table>

<h3>2. Tabel Dokter</h3>
    <table>
        <tr><th>Nama Field</th><th>Tipe Data</th><th>Keterangan</th></tr>
        <tr><td>dokter_id</td><td>BIGINT</td><td>Primary key</td></tr>
        <tr><td>username</td><td>VARCHAR</td><td>Unik</td></tr>
        <tr><td>password</td><td>VARCHAR</td><td>-</td></tr>
        <tr><td>email</td><td>VARCHAR</td><td>Unik</td></tr>
        <tr><td>nama</td><td>VARCHAR</td><td>Nama dokter</td></tr>
        <tr><td>spesialisasi</td><td>VARCHAR</td><td>Spesialisasi dokter</td></tr>
        <tr><td>no_hp</td><td>VARCHAR</td><td>No HP</td></tr>
        <tr><td>bio</td><td>TEXT</td><td>Biodata</td></tr>
        <tr><td>timestamps</td><td>TIMESTAMP</td><td>Waktu buat & update</td></tr>
    </table>

<h3>3. Tabel Pasien</h3>
    <table>
        <tr><th>Nama Field</th><th>Tipe Data</th><th>Keterangan</th></tr>
        <tr><td>pasien_id</td><td>BIGINT</td><td>Primary key</td></tr>
        <tr><td>username</td><td>VARCHAR</td><td>Unik</td></tr>
        <tr><td>password</td><td>VARCHAR</td><td>-</td></tr>
        <tr><td>email</td><td>VARCHAR</td><td>Unik</td></tr>
        <tr><td>nama</td><td>VARCHAR</td><td>Nama pasien</td></tr>
        <tr><td>tanggal_lahir</td><td>DATE</td><td>Tanggal lahir</td></tr>
        <tr><td>jenis_kelamin</td><td>ENUM</td><td>male/female</td></tr>
        <tr><td>no_hp</td><td>VARCHAR</td><td>No HP</td></tr>
        <tr><td>alamat</td><td>TEXT</td><td>Alamat</td></tr>
        <tr><td>timestamps</td><td>TIMESTAMP</td><td>Waktu buat & update</td></tr>
    </table>

 <h3>4. Tabel Petugas Laboratorium</h3>
    <table>
        <tr><th>Nama Field</th><th>Tipe Data</th><th>Keterangan</th></tr>
        <tr><td>petugas_id</td><td>BIGINT</td><td>Primary key</td></tr>
        <tr><td>username</td><td>VARCHAR</td><td>Unik</td></tr>
        <tr><td>password</td><td>VARCHAR</td><td>-</td></tr>
        <tr><td>email</td><td>VARCHAR</td><td>Unik</td></tr>
        <tr><td>nama</td><td>VARCHAR</td><td>Nama petugas</td></tr>
        <tr><td>no_hp</td><td>VARCHAR</td><td>No HP</td></tr>
        <tr><td>timestamps</td><td>TIMESTAMP</td><td>Waktu buat & update</td></tr>
    </table>

<h3>5. Tabel Penulis Konten</h3>
    <table>
        <tr><th>Nama Field</th><th>Tipe Data</th><th>Keterangan</th></tr>
        <tr><td>penulis_id</td><td>BIGINT</td><td>Primary key</td></tr>
        <tr><td>username</td><td>VARCHAR</td><td>Unik</td></tr>
        <tr><td>password</td><td>VARCHAR</td><td>-</td></tr>
        <tr><td>email</td><td>VARCHAR</td><td>Unik</td></tr>
        <tr><td>nama</td><td>VARCHAR</td><td>Nama penulis</td></tr>
        <tr><td>bio</td><td>TEXT</td><td>Biodata</td></tr>
        <tr><td>timestamps</td><td>TIMESTAMP</td><td>Waktu buat & update</td></tr>
    </table>

<h3>6. Tabel Hasil Lab</h3>
    <table>
        <tr><th>Nama Field</th><th>Tipe Data</th><th>Keterangan</th></tr>
        <tr><td>hasil_id</td><td>BIGINT</td><td>Primary key</td></tr>
        <tr><td>pasien_id</td><td>BIGINT</td><td>Foreign key ke pasien</td></tr>
        <tr><td>petugas_id</td><td>BIGINT</td><td>Foreign key ke petugas_laboratorium</td></tr>
        <tr><td>nama_tes</td><td>VARCHAR</td><td>Nama tes lab</td></tr>
        <tr><td>hasil</td><td>TEXT</td><td>Hasil lab</td></tr>
        <tr><td>tanggal_tes</td><td>DATE</td><td>Tanggal tes</td></tr>
        <tr><td>timestamps</td><td>TIMESTAMP</td><td>Waktu buat & update</td></tr>
    </table>

<h2>Jenis Relasi dan Tabel yang Berelasi</h2>
    <ul>
        <li>Pasien → Dokter (Many-to-Many, lewat tabel pivot dokter_pasien)</li>
        <li>Pasien → HasilLab (One-to-Many, pasien punya banyak hasil lab)</li>
        <li>PetugasLaboratorium → HasilLab (One-to-Many, petugas mencatat banyak hasil lab)</li>
        <li>PenulisKonten → Artikel (One-to-Many, penulis menulis banyak artikel)</li>
    </ul>
</body>
</html>
