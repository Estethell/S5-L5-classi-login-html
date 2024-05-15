<?php 

include_once __DIR__ . "/init.php";

$myId = $_GET["id"];

$stmt = $pdo->prepare("DELETE FROM articoli WHERE id =?");
$stmt->execute([$myId]);

header('location: admin.php');