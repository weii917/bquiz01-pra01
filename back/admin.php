<!-- 20-5.速套用所有功能的列表及編輯功能 -->
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">管理者帳號管理</p>
    <form method="post" action="./api/edit.php">
        <table width="100%" style="text-align: center;">
            <tbody>
                <tr class="yel">
                    <td width="45%">帳號</td>
                    <td width="45%">密碼</td>
                    <td width="10%">刪除</td>
                    <td></td>
                </tr>
                <?php
                $rows = $DB->all();
                foreach ($rows as $row) {

                ?>

                <tr>
                    <td><input type="text" style="width:90%" name="acc[]" value="<?= $row['acc']; ?>"></td>
                    <td><input type="password" style="width:90%" name="pw[]" value="<?= $row['pw']; ?>"></td>

                    <td><input type="checkbox" name="del[]" value="<?= $row['id'] ?>"></td>

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
                            onclick="op('#cover','#cvr','./modal/<?= $do; ?>.php?table=<?= $do; ?>')" value="新增管理者帳號">
                    </td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>

    </form>
</div>