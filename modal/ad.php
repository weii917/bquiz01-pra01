<!-- 18-1.快速套用所有功能的新增，同時新增ad資料表 -->
<h3>新增動態文字廣告</h3>
<hr>
<form action="./api/add.php" method="post">
    <table>
        <tr>
            <td>動態文字廣告:</td>
            <td><input type="text" name="text" id=""></td>
        </tr>
    </table>
    <div>
        <input type="submit" value="新增">
        <input type="reset" value="重置">
        <input type="hidden" name="table" value="<?= $_GET['table']; ?>">
    </div>
</form>