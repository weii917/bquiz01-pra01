<!-- 8.複製title.php建立total.php後台total頁面-->
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">進佔總人數管理</p>
    <!--10. 完成進站人數修改功能及頁尾修改功能在edit_info.php -->
    <form method="post" action="./api/edit_info.php">
        <table style="width:50%;margin:auto">
            <tbody>
                <tr class="yel">
                    <td width="50%">進佔總人數</td>
                    <td width="50%">
                        <input type="number" name="total" value="<?= $Total->find(1)['total']; ?>">
                        <input type="hidden" name="table" value="<?= $do; ?>">

                        <!-- 存進Post資料表名稱從$do得到，也就是網址get到已經存進$do -->
                    </td>
                </tr>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>

    </form>
</div>