<!-- 20-1.速套用所有功能的列表及編輯功能 -->
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">動態文字廣告管理</p>
    <form method="post" action="./api/edit.php">
        <table width="100%" style="text-align: center;">
            <tbody>
                <tr class="yel">
                    <td width="80%">動態文字廣告</td>
                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>
                    <td></td>
                </tr>
                <?php
                $rows = $DB->all();
                foreach ($rows as $row) {

                ?>

                    <tr>

                        <!---因為可能會同時送出多筆資料，所以欄位屬性加上陣列-->
                        <td><input type="text" style="width:90%" name="text[]" value="<?= $row['text']; ?>"></td>
                        <!-- 判斷是否等於1要checked讓它顯示被選擇狀態 -->
                        <td><input type="checkbox" name="sh[]" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? 'checked' : ''; ?>></td>
                        <!-- 12-3.複製新增按鈕改成upload所有更新都在此，除了table參數並帶有id參數 -->
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
                    <!--12-2.彈出視窗是由這個op()的js函式觸發的，注意修改成modal資料夾裡的檔案做新增，帶有table參數到modal的新增標題介面，用來送到add.php執行，複製這個到更新按鈕-->
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/<?= $do; ?>.php?table=<?= $do; ?>')" value="新增動態文字廣告"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>

    </form>
</div>