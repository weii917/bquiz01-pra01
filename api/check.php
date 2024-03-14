<?php
include_once "db.php";
$res = $Admin->count($_POST);
if ($res) {
    $_SESSION['user'] = $_POST['acc'];
    to("../back.php");
} else {
    to("../index.php?do=login&error=帳號或密碼錯誤");
}
