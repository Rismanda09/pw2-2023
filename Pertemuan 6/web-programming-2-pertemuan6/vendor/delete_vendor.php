<?php 
require_once '../dbkoneksi.php';

$_id = $_GET['id'];
$sql = "DELETE FROM vendor WHERE id=?";

$st = $dbh->prepare($sql);
$st->execute([$_id]);

header('location:list_vendor.php');
?>