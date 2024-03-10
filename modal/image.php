<h2 class="ct">新增校園映象圖片</h2>
<hr>
<form action="./api/add.php" method="post">
    <table>
        <tr>
            <td>校園映象圖片:</td>
            <td><input type="file" name="img" id=""></td>
        </tr>

    </table>
    <div>
        <input type="hidden" name="table" value="<?= $_GET['table']; ?>">
        <input type="submit" value="新增"><input type="reset" value="重置">
    </div>
</form>