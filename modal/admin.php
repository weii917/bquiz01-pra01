<h2 class="ct">新增管理者帳號管理</h2>
<hr>
<form action="./api/add.php" method="post">
    <table>
        <tr>
            <td>帳號:</td>
            <td>
                <input type="text" name="acc" id="">
            </td>

        <tr>
            <td>密碼:</td>
            <td>
                <input type="text" name="pw" id="">
            </td>
        </tr>
        <tr>
            <td>確認密碼:</td>
            <td>
                <input type="text" name="pw2" id="">
            </td>
        </tr>
    </table>
    <div>
        <input type="hidden" name="table" value="<?= $_GET['table']; ?>">
        <input type="submit" value="新增"><input type="reset" value="重置">
    </div>
</form>