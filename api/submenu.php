<?php
include_once "db.php";
// dd($_POST);
// exit();
if (isset($_POST['id'])) {
    foreach ($_POST['id'] as $idx => $id) {
        if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
            $Menu->del($id);
        } else {
            $row = $Menu->find($id);
            // dd($row);
            $row['text'] = $_POST['text'][$idx];
            $row['href'] = $_POST['href'][$idx];
            // dd($row);
            $Menu->save($row);
        }
    }
}

if (isset($_POST['add_text'])) {
    foreach ($_POST['add_text'] as $idx => $text) {
        if ($text != '') {
            $data = [];
            $data['text'] = $text;
            $data['href'] = $_POST['add_href'][$idx];
            $data['sh'] = 1;
            $data['menu_id'] = $_POST['menu_id'];
            // dd($data);
            $Menu->save($data);
        }
    }
}
to("../back.php?do=menu");
