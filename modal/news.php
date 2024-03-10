<h2 class="ct">新增最新消息資料</h2>
<hr>
<form action="./api/add.php" method="post">
    <table>
        <tr>
            <td>最新消息資料:</td>
            <td>
                <textarea name="text" style="width:300px;height:100px"></textarea>
            </td>
        </tr>
    </table>
    <div>
        <input type="hidden" name="table" value="<?= $_GET['table']; ?>">
        <input type="submit" value="新增"><input type="reset" value="重置">
    </div>
</form>