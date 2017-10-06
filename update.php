<?php
include 'konek.php';

if (isset($_POST)) {
    $sql = "UPDATE tamu SET nama = '$_POST[nama]',
                                     email = '$_POST[email]',
                                     komentar = '$_POST[komentar]'
                                 WHERE id ='$_POST[id]' ";
    $dbh->exec($sql);
}

header("location:index.php");
?>