<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<?php
// define variables and set to empty values
$namaErr = $nimErr = $prodiErr = $genderErr = $tgllhrErr = "";
$nama = $nim = $prodi = $gender = $alamat = $tgllhr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["nama"])) {
    $namaErr = "Nama harus diisi";
}else {
    $nama = test_input($_POST["nama"]);
}

if (empty($_POST["nim"])) {
$nimErr = "Nim harus diisi";
}else {
$nim = test_input($_POST["nim"]);
}

if (empty($_POST["prodi"])) {
$website = "";
}else {
$prodi = test_input($_POST["prodi"]);
}

if (empty($_POST["gender"])) {
$genderErr = "Gender harus dipilih";
}else {
$gender = test_input($_POST["gender"]);
}

if (empty($_POST["alamat"])) {
    $alamat = "";
    }else {
    $alamat = test_input($_POST["alamat"]);
    }
}

if (empty($_POST["tgllhr"])) {
    $tgllhrErr = "Tanggal lahir  harus diisi";
    }else {
    $tgllhr = test_input($_POST["tgllhr"]);
}

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>

<h2>Tambah Data Mahasiswa </h2>
<p><span class = "error">* Harus Diisi.</span></p>
<form method = "post" action = "<?php
echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<table>
<tr>
    <td>Nama:</td>
    <td><input type = "text" name = "nama">
    <span class = "error">* <?php echo $namaErr;?></span>
    </td>
</tr>
<tr>
    <td>NIM : </td>
    <td><input type = "number" name = "nim">
    <span class = "error">* <?php echo $nimErr;?></span>
    </td>
</tr>

<tr>
    <td>Prodi :</td>
    <td> <input type = "text" name = "prodi">
    <span class = "error"><?php echo $prodiErr;?></span>
    </td>
</tr>


<tr>
    <td>Tanggal Lahir:</td>
    <td> <input type = "varchar" name = "tgllhr">
    <span class = "error"><?php echo $tgllhrErr;?></span>
    </td>
</tr>

<tr>
    <td>Gender:</td>
    <td>
    <input type = "radio" name = "gender" value = "L">Laki-Laki
    <input type = "radio" name = "gender" value = "P">Perempuan
    <span class = "error">* <?php echo $genderErr;?></span>
    </td>
</tr>

<tr>
    <td>Alamat:</td>
    <td> <textarea name = "alamat" rows = "5" cols = "40"></textarea></td>
</tr>

<td>
    <input type = "submit" name = "submit" value = "Submit">
</td>

</table>
</form>

<?php
echo "<h2>Data mahasiswa yang telah anda isi :</h2>";
echo $nama;
echo "<br>";
echo $nim;
echo "<br>";
echo $prodi;
echo "<br>";
echo $tgllhr;
echo "<br>";
echo $gender;
echo "<br>";
echo $alamat;


?>
</body>
</html>