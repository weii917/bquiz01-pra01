<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">頁尾版權資料管理</p>
    <form method="post" action="./api/edit_info.php">
        <table style="width:50%;margin:auto">
            <tbody>
                <tr class="yel">
                    <td width="50%">頁尾版權資料:</td>
                    <td width="50%">
                        <input type="text" name="bottom" value="<?= $DB->find(1)['bottom']; ?>">
                        <input type="hidden" name="table" value="<?= $_GET['do']; ?>">
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="cent">
            <input type="submit" value="修改確定">
            <input type="reset" value="重置">
        </div>
    </form>
</div>