<?php
include 'konek.php';
?>
<style>
    tbody > tr:nth-child(2n+1) > td, tbody > tr:nth-child(2n+1) > th {
        background-color: #ededed;
    }
    table{
        width: 70%;
        margin: auto;
        border-collapse: collapse;
        box-shadow: darkgrey 3px;
    }
    thead tr {
        background-color: #36c2ff;
    }
body {
	background-image: url(../tamu.jpg);
}
.style1 {color: #FFFFFF}
.style2 {color: #CCFF00}
</style>

<h1 align="center" class="style1">Daftar Tamu</h1>

<h3><center><a href="input.php" class="style2">Masukkan Data </a></center></h3>
<br />
    <link href="assets/css/style.css" rel="stylesheet">
<table border="1">
   <thead>
        <tr>
            <th><center>
              <strong>              No              </strong>
            </center></th>
            <th><center>
              <strong>              Nama              </strong>
            </center></th>
            <th><center>
              <strong>              Email              </strong>
            </center></th>
            <th><center>
              <strong>              Komentar              </strong>
            </center></th>
            <th><center>
              <strong>              Pilihan              </strong>
            </center></th>
        </tr>
    </thead>
    
    <tbody>
    <?php
    $sql = "SELECT * FROM tamu ORDER BY id";
    $no  = 1;
    foreach ($dbh->query($sql) as $data) :
    ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['nama']?></td>
            <td><?php echo $data['email']?></td>
            <td><?php echo $data['komentar']?></td>
           
            <td align="center"> 
                <a href="edit.php?id=<?php echo $data['id'] ?>"><img src="icon/edit.png" alt="edit" width="36" height="33" /></a><a href="hapus.php?id=<?php echo $data['id'] ?>" onclick="return confirm
				('Anda yakin akan menghapus data?')"><img src="icon/hapus.jpg" alt="hapus" width="37" height="35" /></a>            </td>
      </tr>
    <?php
    endforeach;
    ?>
    </tbody>
</table>