<?php
include_once "db.php";

$table = $_POST['table'];
unset($_POST['table']);
$DB = ${ucfirst($table)};



if (isset($_POST['id'])) {
    foreach ($_POST['id'] as $idx => $id) {
        if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
            $DB->del($id);
        } else {
            $row = $DB->find($id);
            if (isset($_POST['text'])) {
                $row['text'] = $_POST['text'][$idx];
            }
            switch ($table) {
                case 'title':
                    $row['sh'] = (isset($_POST['sh']) && ($id == $_POST['sh']) ? 1 : 0);
                    break;
                case 'admin':
                    $row['acc'] = $_POST['acc'][$idx];
                    $row['pw'] = $_POST['pw'][$idx];
                    break;
                case 'menu':
                    $row['href'] = $_POST['href'][$idx];
                    $row['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh']) ? 1 : 0);
                    break;
                default:
                    $row['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh']) ? 1 : 0);
            }
            $DB->save($row);
        }
    }
}

to("../back.php?do=$table");
