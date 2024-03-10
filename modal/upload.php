<?php
switch ($_GET['table']) {
    case 'title':
        echo "<h2 class='ct'>更新網站標題區圖片</h2>";
        break;
    case 'mvim':
        echo "<h2 class='ct'>更新動態圖片</h2>";
        break;
    case 'image':
        echo "<h2 class='ct'>更新校園映像區圖片</h2>";
        break;
}
?>

<hr>
<form action="./api/update.php" method="post">
    <table>
        <tr>
            <?php
            switch ($_GET['table']) {
                case 'title':
                    echo "<td>標題區圖片:</td>";
                    break;
                case 'mvim':
                    echo "<td>動態圖片:</td>";
                    break;
                case 'image':
                    echo "<td>校園映像區圖片:</td>";
                    break;
            }
            ?>

            <td><input type="file" name="img" id=""></td>
        </tr>

    </table>
    <div>
        <input type="hidden" name="id" value="<?= $_GET['id']; ?>">
        <input type="hidden" name="table" value="<?= $_GET['table']; ?>">
        <input type="submit" value="新增"><input type="reset" value="重置">
    </div>
</form>