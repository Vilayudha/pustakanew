<html>

<head>
    <title>Tampil Data Mahasiswa</title>
</head>
<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Tampil Data Mahasiswa
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <td>NAMA SISWA</td>
                <td>:</td>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <td>NIS</td>
                <td>:</td>
                <td>
                    <?= $nis; ?>
                </td>
            </tr>
            <tr>
                <td>KELAS</td>
                <td>:</td>
                <td>
                    <?= $kelas; ?>
                </td>
            </tr>
            <tr>
                <td>TANGGAL LAHIR</td>
                <td>:</td>
                <td>
                    <?= $tanggal_lahir; ?>
                </td>
            </tr>
            <tr>
                <td>TEMPAT LAHIR</td>
                <td>:</td>
                <td>
                    <?= $tempat_lahir; ?>
                </td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td>:</td>
                <td>
                    <?= $alamat; ?>
                </td>
            </tr>
            <tr>
                <td>JENS KELAMIN</td>
                <td>:</td>
                <td>
                    <?= $jenis_kelamin; ?>
                </td>
            </tr>
            <tr>
                <td>AGAMA</td>
                <td>:</td>
                <td>
                    <?= $agama; ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('Mahasiswa');
?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>