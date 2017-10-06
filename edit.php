<?php
include 'konek.php';
if (isset($_GET['id'])) {
    $query = $dbh->query("SELECT * FROM tamu WHERE id = '$_GET[id]'");
    $data  = $query->fetch(PDO::FETCH_ASSOC);
} else {
    echo "ID tidak tersedia!<br /><a href='index.php'>Kembali</a>";
    exit();
}

if ($data === false) {
    echo "Data tidak ditemukan!<br /><a href='index.php'>Kembali</a>";
    exit();
}
?><style type="text/css">
<!--
body {
	background-image: url(../ikan.jpg);
}
.style1 {
	font-size: 18px;
	font-weight: bold;
}
.style2 {color: #00FF00}
.style3 {color: #FFFFFF}
-->
</style>
<h1 align="center" class="style2"> Edit Input Daftar Tamu</h1>
<fieldset style="width: 50%; margin: auto;">
    <div align="center">
      <legend> <span class="style3">Input Ulang Data</span> </legend>
    </div>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <form action="update.php" method="post">	
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
        <p align="center">
          <span class="style1">Nama</span><br />
            <input type="text" name="nama" required value="<?php echo $data['nama']; ?>"/>
        </p>
        
        <p align="center">
          <span class="style1">Email</span><br />
            <input type="text" name="email" required value="<?php echo $data['email']; ?>"/>
        </p>
        
        <p align="center">
<span class="style1">Komentar</span><br />
             <textarea name="komentar" cols="50" required><?php echo $data['komentar']; ?></textarea>
        </p>
        
<p align="center">
              <input type="submit" value="Simpan" />
            <input type="reset" value="Reset" onclick="return confirm('hapus data yang telah diinput?')">
      </p>
    </form>
</fieldset>
<br />
<h3><center><a href="index.php" class="style3">&Lt; Daftar Tamu</a>
</center>
</h3>
