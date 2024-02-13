<!-- 3.login.php 將class="di"的區塊另件個檔案存放用來引入 -->
<?php
// 28-1.判斷是否登入，登入不成功有錯誤訊息
if (isset($_SESSION['login'])) {
	to("back.php");
}
if (isset($_GET['error'])) {
	echo "<script>alert('{$_GET['error']}')</script>";
}
?>
<div class="di" style="height:540px; border:#999 1px solid; width:53.2%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
	<!-- 22-2.動態文字前台功能 -->
	<?php include "marquee.php"; ?>
	<div style="height:32px; display:block;"></div>
	<!--正中央-->
	<form method="post" action="./api/check.php">
		<p class="t botli">管理員登入區</p>
		<p class="cent">帳號 ： <input name="acc" autofocus="" type="text"></p>
		<p class="cent">密碼 ： <input name="pw" type="password"></p>
		<p class="cent"><input value="送出" type="submit"><input type="reset" value="清除"></p>
	</form>
</div>