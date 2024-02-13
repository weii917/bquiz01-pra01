<!--10. 完成進站人數修改功能及頁尾修改功能在edit_info.php -->
<?php
include_once "db.php";
$table = $_POST['table'];
$DB = ${ucfirst($table)};
$data = $DB->find(1);
$data[$table] = $_POST[$table];
$DB->save($data);
to("../back.php?do=$table");
