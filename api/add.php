<!-- 14.撰寫新增標題圖片api功能，./api/add.php新增的功能 -->
<!-- 透過table得知目前要新增哪個資料庫 -->
<?php
include_once "db.php";
$table = $_POST['table'];
$DB = ${ucfirst($table)};
unset($_POST['table']);
switch ($table) {
    case "admin":
        unset($_POST['pw2']);
        break;
}
// 如果存在file的佔存檔名，將圖片移置../img以他的name為檔名存在這
// 把檔名也存進POST['img']，用來存進資料庫的
if (isset($_FILES['img']['tmp_name'])) {
    move_uploaded_file($_FILES['img']['tmp_name'], "../img/" . $_FILES['img']['name']);
    $_POST['img'] = $_FILES['img']['name'];
}
// 除了admin其他都有sh，要給sh值，只有title預設不顯示為0，其他都顯示為1
if ($table != 'admin') {
    $_POST['sh'] = ($table == 'title') ? 0 : 1;
}
$DB->save($_POST);
to("../back.php?do=$table");
?>