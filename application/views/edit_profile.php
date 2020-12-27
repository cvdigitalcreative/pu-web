<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?= base_url() ?>Tenaga_ahli/edit_tenaga_ahli_action/1" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <th>Nama</th>
            <th>:</th>
            <th><input type="text" name="nama_lengkap" placeholder="Nama lengkap"></th>
        </tr>
        <tr>
            <th>Tempat Lahir</th>
            <th>:</th>
            <th><input type="text" name="tempat_lahir" placeholder="Tempat lahir"></th>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <th>:</th>
            <th><input type="date" name="tanggal_lahir" placeholder="Tanggal lahir"></th>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <th>:</th>
            <th><input type="text" name="id_jenis_kelamin" placeholder="Jenis_kelamin"></th>
        </tr>
        <tr>
            <th>NIK</th>
            <th>:</th>
            <th><input type="text" name="nik" placeholder="NIK"></th>
        </tr>
        <tr>
            <th>email</th>
            <th>:</th>
            <th><input type="email" name="email" placeholder="Email"></th>
        </tr>
        <tr>
            <th>Alamat rumah</th>
            <th>:</th>
            <th><input type="text" name="alamat_rumah" placeholder="Alamat_rumah"></th>
        </tr>
        <tr>
            <th>Provinsi</th>
            <th>:</th>
            <th><input type="text" name="id_provinsi" placeholder="Provinsi"></th>
        </tr>
        <tr>
            <th>Kota/Kabupaten</th>
            <th>:</th>
            <th><input type="text" name="id_kabupaten_kota" placeholder="Kota/Kabupaten"></th>
        </tr>
        <tr>
            <th>Telepon Rumah</th>
            <th>:</th>
            <th><input type="text" name="no_telepon_rumah" placeholder="Telepon rumah"></th>
        </tr>
        <tr>
            <th>Handphone</th>
            <th>:</th>
            <th><input type="text" name="no_handphone" placeholder="Handphone"></th>
        </tr>
        <tr>
            <th>Kategori</th>
            <th>:</th>
            <th><input type="text" name="id_kategori_tenaga_ahli" placeholder="Kategori"></th>
        </tr>
        <tr>
            <th>Jabatan Pekerjaan</th>
            <th>:</th>
            <th><input type="checkbox" name="id_jabker[]" value="25">25</th>
            <th><input type="checkbox" name="id_jabker[]" value="26">26</th>
            <th><input type="checkbox" name="id_jabker[]" value="26">27</th>
        </tr>
    </table>
    <button type="submit">Submit</button>
    </form>
</body>

</html>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?= base_url() ?>Peserta/edit_peserta_action" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <th>Nama</th>
            <th>:</th>
            <th><input type="text" name="nama" placeholder="Nama lengkap"></th>
        </tr>
        <tr>
            <th>email</th>
            <th>:</th>
            <th><input type="email" name="email" placeholder="Email"></th>
        </tr>
        <tr>
            <th>Nomor Telepon</th>
            <th>:</th>
            <th><input type="text" name="no_telpon" placeholder="Nomor Telepon"></th>
        </tr>
        <tr>
            <th>Provinsi</th>
            <th>:</th>
            <th><input type="text" name="id_provinsi" placeholder="Provinsi"></th>
        </tr>
        <tr>
            <th>Kota/Kabupaten</th>
            <th>:</th>
            <th><input type="text" name="id_kota_kabupaten" placeholder="Kota/Kabupaten"></th>
        </tr>
        <tr>
            <th>Kecamatan</th>
            <th>:</th>
            <th><input type="text" name="id_kecamatan" placeholder="Kecamatan"></th>
        </tr>
        <tr>
            <th>Kelurahan</th>
            <th>:</th>
            <th><input type="text" name="id_kelurahan" placeholder="Kelurahan"></th>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <th>:</th>
            <th><input type="text" name="id_jenis_kelamin" placeholder="Jenis Kelamin"></th>
        </tr>
        <tr>
            <th>Status Perkawinan</th>
            <th>:</th>
            <th><input type="text" name="id_status_perkawinan" placeholder="Status Perkawinan"></th>
        </tr>
        <tr>
            <th>Nama Perusahaan</th>
            <th>:</th>
            <th><input type="text" name="nama_perusahaan" placeholder="Nama Perusahaan"></th>
        </tr>
        <tr>
            <th>Jabatan</th>
            <th>:</th>
            <th><input type="text" name="jabatan" placeholder="Jabatan"></th>
        </tr>
        <tr>
            <th>Utusan</th>
            <th>:</th>
            <th><input type="text" name="utusan" placeholder="Utusan"></th>
        </tr>
        <tr>
            <th>Alamat Rumah</th>
            <th>:</th>
            <th><input type="text" name="alamat_rumah" placeholder="Alamat Rumah"></th>
        </tr>
        <tr>
            <th>NIK</th>
            <th>:</th>
            <th><input type="text" name="nik" placeholder="NIK"></th>
        </tr>
        <tr>
            <th>rt</th>
            <th>:</th>
            <th><input type="text" name="rt" placeholder="RT"></th>
        </tr>
        <tr>
            <th>RW</th>
            <th>:</th>
            <th><input type="text" name="rw" placeholder="RW"></th>
        </tr>
        <tr>
            <th>kode Pos</th>
            <th>:</th>
            <th><input type="text" name="kode_pos" placeholder="Kode Pos"></th>
        </tr>
        <tr>
            <th>Kode Area</th>
            <th>:</th>
            <th><input type="text" name="kode_area" placeholder="Kode Area"></th>
        </tr>
        <tr>
            <th>Nomor Handphone</th>
            <th>:</th>
            <th><input type="text" name="no_handphone" placeholder="Nomor Handphone"></th>
        </tr>
        <tr>
            <th>Status Rumah</th>
            <th>:</th>
            <th><input type="text" name="id_status_rumah" placeholder="Status Rumah"></th>
        </tr>
        <tr>
            <th>Pendidikan</th>
            <th>:</th>
            <th><input type="text" name="id_pendidikan" placeholder="Pendidikan"></th>
        </tr>
        <tr>
            <th>Jabatan Kerja</th>
            <th>:</th>
            <th><input type="text" name="id_jabker" placeholder="Jabatan Kerja"></th>
        </tr>
        <tr>
            <th>Kompetensi</th>
            <th>:</th>
            <th><input type="text" name="id_kompetensi" placeholder="Kompetensi"></th>
        </tr>
        <tr>
            <th>Nomor Sertifikat</th>
            <th>:</th>
            <th><input type="text" name="no_sertifikat" placeholder="Nomor Sertifikat"></th>
        </tr>
        <tr>
            <th>Foto Profil</th>
            <th>:</th>
            <th><input type="file" name="file_foto_profil" placeholder="Foto Profil" accept=".jpg, .jpeg, .png"></th>
        </tr>
    </table>
    <button type="submit">Submit</button>
    </form>
</body>

</html> -->