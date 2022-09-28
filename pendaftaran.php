<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pendaftaran</title>
</head>
<center>
<body>
    <h3>pendaftaran siswa baru
        SMK N 1 Sayung</h3>

<td><form action="p.php"method="post"></td>
<table border="0">
    <tr>
    <td>Nama lengkap: </td>
    <td><input type="text" name="nama"/></td>
</tr>
<tr>
    <td> tempat lahir: </td>
    <td><input type="text" name="tempat lahir" /></td>
</tr>
 <tr>
    <td>tanggal lahir: </td>
    <td><input type="date" name="birth"  /></td>
</tr>
<tr>
    <td>jenis kelamin: </td>
<td><input type="radio" name="sex" value="laki-laki">lak-laki
<input type="radio" name="sex" value="perempuan"> perempuan</td>
</tr>
<tr>
    <td>alamat</td>
    <td>
    <textarea name="alamat"></textarea>
</td>
</tr>
<tr>
    <td>Agama : </td>
    <td><select name="religion">
        <option value="islam">islam
        <option value="kristen">kristen
        <option value="katolik">katolik
        <option value="hindu">hindu
        <option value="budha">budha
        <option value="konghucu">konghucu
</select> </td>
</tr>
<tr>
    <td> <input type="reset" value ="ulangi" /></td>


    <td><input type="submit" value="submit" name="data"/></td>
</tr>
</table>
<form>

</body>
</html>
