<?php
//  28-3.處理登入功能及相關連結修改
session_start();
unset($_SESSION['login']);
header("location:../index.php");
