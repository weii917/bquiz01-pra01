<h3 class="cent">新增校園映像資料</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>校園映像資料圖片:</td>
            <td><input type="file" name="img" id=""></td>
        </tr>

    </table>
    <div>
        <input type="submit" value="新增">
        <input type="reset" value="重置">
        <input type="hidden" name="table" value="<?= $_GET['table']; ?>">
    </div>
</form>