<!-- 20-6.速套用所有功能的列表及編輯功能 -->
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">選單管理</p>
    <form method="post" action="./api/edit.php">
        <table width="100%" style="text-align: center;">
            <tbody>
                <tr class="yel">
                    <td width="30%">主選單名稱</td>
                    <td width="30%">選單連結網址</td>
                    <td width="10%">次選單數</td>
                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>
                    <td></td>
                </tr>
                <?php
                $rows = $DB->all(['menu_id' => 0]);
                foreach ($rows as $row) {

                ?>

                <tr>
                    <td><input type="text" style="width:90%" name="text[]" value="<?= $row['text']; ?>"></td>
                    <td><input type="text" style="width:90%" name="href[]" value="<?= $row['href']; ?>"></td>
                    <td><?= $Menu->count(['menu_id' => $row['id']]); ?></td>
                    <td><input type="checkbox" name="sh[]" value="<?= $row['id']; ?>"
                            <?= ($row['sh'] == 1) ? 'checked' : ''; ?>></td>
                    <!-- 12-3.複製新增按鈕改成upload所有更新都在此，除了table參數並帶有id參數 -->
                    <td><input type="checkbox" name="del[]" value="<?= $row['id'] ?>"></td>
                    <td width="200px"><input type="button"
                            onclick="op('#cover','#cvr','./modal/submenu.php?table=<?= $do; ?>&id=<?= $row['id'] ?>')"
                            value="編輯次選單"></td>
                    <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
                    <!-- 15-1.加入隱藏id -->
                </tr>
                <?php

                }
                ?>

            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <!--為了後端方便操作不同的功能，隱藏一個資料表的變數在這-->
                    <input type="hidden" name="table" value="<?= $do; ?>">
                    <td width="200px"><input type="button"
                            onclick="op('#cover','#cvr','./modal/<?= $do; ?>.php?table=<?= $do; ?>')" value="新增動態文字廣告">
                    </td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>

    </form>
</div>