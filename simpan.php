<?php
include 'konek.php';

if (isset($_POST)) {
    $sql = "INSERT INTO tamu VALUES ('', '$_POST[nama]', '$_POST[email]', '$_POST[komentar]')";
    $dbh->exec($sql);
}

header("location:index.php");
?>
