<!-- 18-4.快速套用所有功能的新增，同時新增news資料表 -->
<h3>新增最新消息資料</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>最新消息資料:</td>
            <td><textarea name="text" style="width:300px;height:150px"></textarea></td>
        </tr>
    </table>
    <div>
        <input type="submit" value="新增">
        <input type="reset" value="重置">
        <input type="hidden" name="table" value="<?= $_GET['table']; ?>">
    </div>
</form>