<!-- 13.建立modal資料夾裡做新增資料的頁面互動 -->
<!--所有的新增功能表單都會送到api中的add.php這支程式中去處理
    由於會使用到上傳檔案的功能，所以form屬性中記得加上enctype-->
<h3>新增網站標題圖片</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>標題區圖片:</td>
            <td><input type="file" name="img" id=""></td>
        </tr>
        <tr>
            <td>標題區替代文字:</td>
            <td><input type="text" name="text" id=""></td>
        </tr>
    </table>
    <div>
        <input type="submit" value="新增">
        <input type="reset" value="重置">
        <input type="hidden" name="table" value="<?= $_GET['table'] ?>">
    </div>
</form>
<!--建立一個隱藏欄位來放置資料表名稱，而資料表名會透過網址參數來代入-->