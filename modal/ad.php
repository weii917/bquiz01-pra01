<h2 class="ct">新增動態文字廣告</h2>
<hr>
<form action="./api/add.php" method="post">
    <table>
        <tr>
            <td>動態文字廣告:</td>
            <td>
                <input type="text" name="text" id="">
            </td>
        </tr>
    </table>
    <div>
        <input type="hidden" name="table" value="<?= $_GET['table']; ?>">
        <input type="submit" value="新增"><input type="reset" value="重置">
    </div>
</form>