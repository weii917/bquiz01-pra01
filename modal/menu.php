<h2 class="ct">新增主選單</h2>
<hr>
<form action="./api/add.php" method="post">
    <table>
        <tr>
            <td>主選單名稱:</td>
            <td>
                <input type="text" name="text" id="">
            </td>
        </tr>
        <tr>
            <td>選單連結網址:</td>
            <td>
                <input type="text" name="href" id="">
            </td>
        </tr>

    </table>
    <div>
        <input type="hidden" name="table" value="<?= $_GET['table']; ?>">
        <input type="submit" value="新增"><input type="reset" value="重置">
    </div>
</form>