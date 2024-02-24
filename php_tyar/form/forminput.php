<!DOCTYPE html>
<html>
<head> 
<title>Form Biodata Diri</title>
</head>
<body>
    <center>
        <h2>Form Biodata Diri</h2>
        <!-- form -->
        <form method = "POST" action= "">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type='text' name='nama'></td>
                </tr>
                <tr>
                    <td>umur</td>
                    <td>:</td>
                    <td><input type='text' name='umur'></td>
                </tr>
                <tr>
                    <td>tanggal lahir</td>
                    <td>:</td>
                    <td><input type='date' name='tanggal_lahir'></td>
                </tr>
                <tr>
                    <td>jenis kelamin</td>
                    <td>:</td>
                    <td><input type='radio' name='jk' value='laki laki'>laki-laki
                    <input type='radio' name='jk' value='perempuan'>perempuan
                    </td>
                </tr>
                <tr>
                    <td>alamat</td>
                    <td>:</td>
                    <td><textarea name='alamat' cols="30" rows="3"></textarea></td>
                </tr>
                <tr>
                    <td>agama</td>
                    <td>:</td>
                    <td>
                    <select name="agama">
                        <option value=""></option>
                        <option value="islam">islam</option>
                        <option value="kristen">kristen</option>
                        <option value="budha">budha</option>
                        <option value="konghucu">konghucu</option>
                        <option value="hindu">hindu</option>
                        <option value="katolik">katolik</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>pendidikan terakhir</td>
                    <td>:</td>
                    <td>
                    <select name="pendidikan_terakhir">
                    <option value=""></option>
                    <option value="TK">TK</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA</option>
                    <option value="SMK">SMK</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>status</td>
                    <td>:</td>
                    <td>
                    <select name="status">
                    <option value=""></option>
                    <option value="Pelajar">Pelajar</option>
                    <option value="Pekerja">Pekerja</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>hobi</td>
                    <td>:</td>
                    <td><input type='text' name='hobi'></td>
                </tr>
                <tr>
                    <td>cita cita</td>
                    <td>:</td>
                    <td><input type='text' name='cita_cita'></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name ="simpan" value='KIRIM'></td>
                <tr>
</table>
</form>
</center>
</body>
</html>
<?php
if(isset($_POST['simpan'])){
    $a = $_POST['nama'];
    $b = $_POST['umur'];
    $c = $_POST['tanggal_lahir'];
    $d = $_POST['jk'];
    $e = $_POST['alamat'];
    $f = $_POST['agama'];
    $g = $_POST['pendidikan_terakhir'];
    $h = $_POST['status'];
    $i = $_POST['hobi'];
    $j = $_POST['cita_cita'];

    echo"========Biodata Diri========<br>";
    echo"============================<br>";
    echo "Nama  = $a <br>";
    echo "umur  = $b <br>";
    echo "taggal lahir = $c <br>";
    echo "jk  = $d <br>";
    echo "alamat  = $e <br>";
    echo "agama  = $f <br>";
    echo "pendidikan terakhir = $g <br>";
    echo "status  = $h <br>";
    echo "hobi  = $i <br>";
    echo "cita cita  = $j <br>";
}
?>