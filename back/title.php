<!--4.將news.php的92-119獨立到back/title.php -->
<!-- 12.製作後台網站標題管理功能 -->
<!-- 15-1.title.php完成顯示後台標題管理資料列表功能 -->
<!-- 19.撰寫後台資料列表功能 做檢查撈出資料表資料顯示-->
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">網站標題管理</p>
    <form method="post" action="./api/edit.php">
        <table width="100%" style="text-align: center;">
            <tbody>
                <tr class="yel">
                    <td width="45%">網站標題</td>
                    <td width="23%">替代文字</td>
                    <td width="7%">顯示</td>
                    <td width="7%">刪除</td>
                    <td></td>
                </tr>
                <?php
                $rows = $DB->all();
                foreach ($rows as $row) {

                ?>

                    <tr><!--12-1.整理欄位，先將會用到的標籤及CSS寫好-->
                        <td><img src="./img/<?= $row['img']; ?>" style="width:300px;height:30px"></td>
                        <!---因為可能會同時送出多筆資料，所以欄位屬性加上陣列-->
                        <td><input type="text" name="text[]" value="<?= $row['text']; ?>"></td>
                        <!-- 注意sh標題只要一個顯示，並且判斷是否等於1要checked讓它顯示被選擇狀態 -->
                        <td><input type="radio" name="sh" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? 'checked' : ''; ?>></td>
                        <!-- 12-3.複製新增按鈕改成upload所有更新都在此，除了table參數並帶有id參數 -->
                        <td><input type="checkbox" name="del[]" value="<?= $row['id'] ?>"></td>
                        <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/upload.php?table=<?= $do; ?>&id=<?= $row['id'] ?>')" value="更新圖片"></td>
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
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/<?= $do; ?>.php?table=<?= $do; ?>')" value="新增網站標題圖片"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>

    </form>
</div>