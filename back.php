<!-- 8.在back.php引入db.php,並建立total資料表新增一筆資料，也一起新增bottom資料表新增一筆資料 -->
<?php include_once './api/db.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0068)?do=admin&redo=title -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>卓越科技大學校園資訊系統</title>
	<link href="./css/css.css" rel="stylesheet" type="text/css">
	<script src="./js/jquery-1.9.1.min.js"></script>
	<script src="./js/js.js"></script>
</head>
<!-- 11.將iframe移除 -->

<body>
	<div id="cover" style="display:none; ">
		<div id="coverr">
			<a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;" onclick="cl(&#39;#cover&#39;)">X</a>
			<div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
		</div>
	</div>

	<div id="main">
		<!-- 22-1.完成標題圖片/動態文字前台功能 -->
		<?php
		$title = $Title->find(['sh' => 1]);
		?>
		<a title="<?= $title['text']; ?>" href="index.php">
			<div class="ti" style="background:url(&#39;./img/<?= $title['img']; ?>&#39;); background-size:cover;"></div><!--標題-->
		</a>
		<div id="ms">
			<div id="lf" style="float:left;">
				<div id="menuput" class="dbor">
					<!--主選單放此-->
					<!-- 5.選單連結都要改 -->
					<span class="t botli">後台管理選單</span>
					<a style="color:#000; font-size:13px; text-decoration:none;" href="?do=title">
						<div class="mainmu">
							網站標題管理 </div>
					</a>
					<a style="color:#000; font-size:13px; text-decoration:none;" href="?do=ad">
						<div class="mainmu">
							動態文字廣告管理 </div>
					</a>
					<a style="color:#000; font-size:13px; text-decoration:none;" href="?do=mvim">
						<div class="mainmu">
							動畫圖片管理 </div>
					</a>
					<a style="color:#000; font-size:13px; text-decoration:none;" href="?do=image">
						<div class="mainmu">
							校園映象資料管理 </div>
					</a>
					<a style="color:#000; font-size:13px; text-decoration:none;" href="?do=total">
						<div class="mainmu">
							進站總人數管理 </div>
					</a>
					<a style="color:#000; font-size:13px; text-decoration:none;" href="?do=bottom">
						<div class="mainmu">
							頁尾版權資料管理 </div>
					</a>
					<a style="color:#000; font-size:13px; text-decoration:none;" href="?do=news">
						<div class="mainmu">
							最新消息資料管理 </div>
					</a>
					<a style="color:#000; font-size:13px; text-decoration:none;" href="?do=admin">
						<div class="mainmu">
							管理者帳號管理 </div>
					</a>
					<a style="color:#000; font-size:13px; text-decoration:none;" href="?do=menu">
						<div class="mainmu">
							選單管理 </div>
					</a>


				</div>
				<div class="dbor" style="margin:3px; width:95%; height:20%; line-height:100px;">
					<!-- 8.start顯示總人數  -->
					<span class="t">進站總人數 :<?= $Total->find(1)['total']; ?></span>
					<!-- 8.end顯示總人數  -->
				</div>
			</div>
			<div class="di" style="height:540px; border:#999 1px solid; width:76.5%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
				<!--正中央-->
				<table width="100%">
					<tbody>
						<tr>
							<!-- 7. 整理back.php將登出的連結做修改 ./api/logout.php-->
							<td style="width:70%;font-weight:800; border:#333 1px solid; border-radius:3px;" class="cent"><a href="?do=admin" style="color:#000; text-decoration:none;">後台管理區</a></td>
							<td><button onclick="location.href='./api/logout.php'" style="width:99%; margin-right:2px; height:50px;">管理登出</button></td>
						</tr>
					</tbody>
				</table>
				<!-- 4. title start引入-->
				<?php
				$do = $_GET['do'] ?? 'title';
				$file = "./back/{$do}.php";
				if (file_exists($file)) {
					include $file;
				} else {
					include "./back/title.php";
				}
				?>
				<!-- 4. title 引入end -->

			</div>


		</div>
		<div style="clear:both;"></div>
		<!-- 8.start顯示頁尾  -->
		<div style="width:1024px; left:0px; position:relative; background:#FC3; margin-top:4px; height:123px; display:block;">
			<span class="t" style="line-height:123px;"><?= $Bottom->find(1)['bottom']; ?></span>
		</div>
		<!-- 8.end顯示頁尾  -->
	</div>

</body>

</html>