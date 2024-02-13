<!-- 18-2.快速套用所有功能的新增，同時新增資料表 -->
<h3>新增動畫圖片</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>動畫圖片:</td>
            <td><input type="file" name="img" id=""></td>
        </tr>
    </table>
    <div>
        <input type="submit" value="新增">
        <input type="reset" value="重置">
        <input type="hidden" name="table" value="<?= $_GET['table'] ?>">
    </div>
</form>