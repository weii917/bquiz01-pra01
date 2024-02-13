<!-- 20-3.快速套用所有功能的列表及編輯功能 -->
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">校園映像資料管理</p>
    <form method="post" action="./api/edit.php">
        <table width="100%" style="text-align: center;">
            <tbody>
                <tr class="yel">
                    <td width="70%">校園映像資料圖片</td>
                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>
                    <td></td>
                </tr>
                <?php
                $total = $DB->count();
                $div = 3;
                $pages = ceil($total / $div);
                $now = $_GET['p'] ?? 1;
                $start = ($now - 1) * $div;
                $rows = $DB->all(" limit $start,$div");
                foreach ($rows as $row) {

                ?>

                    <tr>
                        <td><img src="./img/<?= $row['img']; ?>" style="width:100px;height:68px"></td>
                        <td><input type="checkbox" name="sh[]" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? 'checked' : ''; ?>></td>
                        <td><input type="checkbox" name="del[]" value="<?= $row['id'] ?>"></td>
                        <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/upload.php?table=<?= $do; ?>&id=<?= $row['id'] ?>')" value="更換圖片"></td>
                        <input type="hidden" name="id[]" value="<?= $row['id']; ?>">

                    </tr>
                <?php

                }
                ?>

            </tbody>
        </table>

        <div class="cent">
            <?php
            if ($now - 1 > 0) {
                $prev = $now - 1;
                echo "<a href='?do=$do&p=$prev'> < </a>";
            }
            for ($i = 1; $i <= $pages; $i++) {
                $fontsize = ($i == $now) ? 'font-size:22px' : 'font-size:16px';
                echo "<a href='?do=$do&p=$i' style='$fontsize'> $i </a>";
            }
            if ($now + 1 <= $pages) {
                $next = $now + 1;
                echo "<a href='?do=$do&p=$next'> > </a>";
            }
            ?>
        </div>

        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <!--為了後端方便操作不同的功能，隱藏一個資料表的變數在這-->
                    <input type="hidden" name="table" value="<?= $do; ?>">
                    <!--12-2.彈出視窗是由這個op()的js函式觸發的，注意修改成modal資料夾裡的檔案做新增，帶有table參數到modal的新增標題介面，用來送到add.php執行，複製這個到更新按鈕-->
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/<?= $do; ?>.php?table=<?= $do; ?>')" value="新增校園映像資料圖片"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>

    </form>
</div>