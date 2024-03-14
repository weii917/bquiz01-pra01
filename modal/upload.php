<?php
switch ($_GET['table']) {
    case 'title':
        echo "<h3 class='ct'>更新標題區圖片</h3>";
        break;
    case 'mvim':
        echo "<h3 class='ct'>更新動畫</h3>";
        break;
    case 'image':
        echo "<h3 class='ct'>更新校園映像區圖片</h3>";
        break;
}
?>

<hr>
<form action="./api/update.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <?php
            switch ($_GET['table']) {
                case 'title':
                    echo "<td>標題區圖片:</td>";
                    break;
                case 'mvim':
                    echo "<td>動畫:</td>";
                    break;
                case 'image':
                    echo "<td>校園映像區圖片:</td>";
                    break;
            }
            ?>

            <td><input type="file" name="img" id=""></td>
        </tr>


    </table>
    <div class="ct">
        <input type="hidden" name="id" value="<?= $_GET['id']; ?>">
        <input type="hidden" name="table" value="<?= $_GET['table']; ?>">
        <input type="submit" value="更新">
        <input type="reset" value="重置">
    </div>
</form>