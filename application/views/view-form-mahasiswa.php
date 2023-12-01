<html>
<head>
    <title>Form Input Mahasiswa</title>
</head>
<body>
    <center>
        <form action="<?= base_url('mahasiswa/cetak'); ?>"
method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Data Mahasiswa
                    </th>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>NAMA SISWA</td>
                    <th>:</th>
                    <td>
                        <input type="text" name="nama" size="30" id="nama">
                    </td>
                </tr>
                <tr>
                    <td>NIS</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nis" size="30" id="nis">
                    </td>
                </tr>
                <tr>
                    <td>KELAS</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="kelas" size="30" id="kelas">
                    </td>
                </tr>
                <tr>
                    <td>TANGGAL LAHIR</td>
                    <td>:</td>
                    <td>
                        <input type="date" name="tanggal_lahir" size="30" id="tanggal_lahir">
                    </td>
                </tr>
                <tr>
                    <td>TEMPAT LAHIR</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="tempat_lahir" size="30" id="tempat_lahir">
                    </td>
                </tr>
                <tr>
                    <td>ALAMAT</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="alamat" size="30" id="alamat">
                    </td>
                </tr>
                <tr>
                    <td>JENIS KELAMIN</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jenis_kelamin" value="Laki -Laki"> Laki - Laki
                        <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                    </td>
                </tr>
                <tr>
                    <td>AGAMA</td>
                    <td>:</td>
                    <td>
                        <select name="agama" id="agama">
                            <option value="">PILIH AGAMA</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Khonghucu">Khonghucu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>