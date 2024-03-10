<?php
include_once "db.php";
$table = $_POST['table'];
unset($_POST['table']);
$DB = ${ucfirst($table)};

if ($table != 'admin') {
    $_POST['sh'] = ($table == 'title') ? 0 : 1;
} else {
    unset($_POST['pw2']);
}

if (isset($_FILES['img']['tmp_name'])) {
    move_uploaded_file($_FILES['img']['tmp_name'], "../img/" . $_FILES['img']['name']);
    $_POST['img'] = $_FILES['img']['name'];
}
$DB->save($_POST);
to("../back.php?do=$table");
