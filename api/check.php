<?php
include_once "db.php";
if ($Admin->count($_POST) > 0) {
    $_SESSION['user'] = $_POST['acc'];
    tO("../back.php");
} else {
    to("../index.php?do=login&error=帳號或密碼錯誤");
}