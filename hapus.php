<?php
include 'konek.php';
if (isset($_GET['id'])) {
    $dbh->exec("DELETE FROM tamu WHERE id = '$_GET[id]'");
}
header("location:index.php")
?>