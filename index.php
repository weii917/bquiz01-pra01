<?php include_once './api/db.php'; ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0040)http://127.0.0.1/test/exercise/collage/? -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>卓越科技大學校園資訊系統</title>
    <!-- 1.修改路徑為css及js -->
    <link href="./css/css.css" rel="stylesheet" type="text/css">
    <script src="./js/jquery-1.9.1.min.js"></script>
    <script src="./js/js.js"></script>
</head>
<!-- 11.將iframe移除 -->

<body>
    <div id="cover" style="display:none; ">
        <div id="coverr">
            <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;"
                onclick="cl(&#39;#cover&#39;)">X</a>
            <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
        </div>
    </div>

    <div id="main">
        <!-- 22-1.完成標題圖片/動態文字前台功能 -->
        <?php
		$title = $Title->find(['sh' => 1]);
		?>
        <a title="<?= $title['text']; ?>" href="index.php">
            <div class="ti" style="background:url(&#39;./img/<?= $title['img']; ?>&#39;); background-size:cover;"></div>
            <!--標題-->
        </a>
        <div id="ms">
            <div id="lf" style="float:left;">
                <div id="menuput" class="dbor">
                    <!--主選單放此-->
                    <!-- 26.完成選單功能 -->
                    <span class="t botli">主選單區</span>
                    <?php
					$mainmu = $Menu->all(['sh' => 1, 'menu_id' => 0]);
					foreach ($mainmu as $main) {
					?>
                    <div class="mainmu">
                        <a href="<?= $main['href']; ?>">
                            <?= $main['text']; ?>
                        </a>
                        <div class="mw">
                            <?php
								if ($Menu->count(['menu_id' => $main['id']]) > 0) {
									$subs = $Menu->all(['menu_id' => $main['id']]);
									foreach ($subs as $sub) {
								?>
                            <div class="mainmu2">
                                <a href="<?= $sub['href']; ?>">
                                    <?= $sub['text']; ?>
                                </a>
                            </div>
                            <?php
									}
								}
								?>
                        </div>
                    </div>
                    <?php
					}
					?>
                </div>
                <!-- 26.end完成選單功能 -->

                <!-- 11. 在index.php 及 back.php將人數與頁尾版權顯示在頁面上 -->
                <div class="dbor" style="margin:3px; width:95%; height:20%; line-height:100px;">
                    <span class="t">進站總人數 : <?= $Total->find(1)['total'] ?></span>
                </div>
            </div>
            <!-- 2.start 將39行class="di"的主要內容分離出來到front/main.php ,用引入的方式回到index.php-->
            <?php
			$do = $_GET['do'] ?? 'main';
			$file = "./front/{$do}.php";
			if (file_exists($file)) {
				include $file;
			} else {
				include "./front/main.php";
			}
			?>
            <!-- 2.end 引入 -->
            <div id="alt"
                style="position: absolute; width: 350px; min-height: 100px; word-break:break-all; text-align:justify;  background-color: rgb(255, 255, 204); top: 50px; left: 400px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;">
            </div>
            <script>
            $(".sswww").hover(
                function() {
                    $("#alt").html("" + $(this).children(".all").html() + "").css({
                        "top": $(this).offset().top - 50
                    })
                    $("#alt").show()
                }
            )
            $(".sswww").mouseout(
                function() {
                    $("#alt").hide()
                }
            )
            </script>
            <!-- 28-4.處理登入功能及判斷是否登入成功顯示返回管理或登入 -->
            <div class="di di ad" style="height:540px; width:23%; padding:0px; margin-left:22px; float:left; ">
                <!--右邊-->
                <?php
				if (isset($_SESSION["login"])) {
				?>
                <button style="width:100%; margin-left:auto; margin-right:auto; margin-top:2px; height:50px;"
                    onclick="lo('back.php')">返回管理</button>
                <?php
				} else {
				?>
                <!-- 3.測試把index.php的管理登入改成do=login連結 -->
                <button style="width:100%; margin-left:auto; margin-right:auto; margin-top:2px; height:50px;"
                    onclick="lo('?do=login')">管理登入</button>
                <?php
				}
				?>
                <!-- 24.完成校園映像檔輪播功能 -->
                <div style="width:89%; height:480px;" class="dbor">
                    <span class="t botli">校園映象區</span>
                    <div class="cent" onclick="pp(1)"><img src="./icon/up.jpg" alt=""></div>
                    <?php
					$imgs = $Image->all(['sh' => 1]);
					foreach ($imgs as $idx => $img) {
					?>
                    <div id="ssaa<?= $idx ?>" class="im cent">
                        <img src="./img/<?= $img['img'] ?>"
                            style="width:150px;height:103px;border:3px solid orange;margin:3px">
                    </div>
                    <?php
					}

					?>
                    <div class="cent" onclick="pp(2)"><img src="./icon/dn.jpg" alt=""></div>
                    <script>
                    var nowpage = 1,
                        num = <?= $Image->count(['sh' => 1]); ?>

                    function pp(x) {
                        var s, t;
                        if (x == 1 && nowpage - 1 >= 0) {
                            nowpage--;
                        }
                        if (x == 2 && (nowpage + 1) <= num * 1 - 3) {
                            nowpage++;
                        }
                        $(".im").hide()
                        for (s = 0; s <= 2; s++) {
                            t = s * 1 + nowpage * 1;
                            $("#ssaa" + t).show()
                        }
                    }
                    pp(1)
                    </script>
                </div>
            </div>
            <!-- 24.完成校園映像檔輪播功能end -->
        </div>
        <div style="clear:both;"></div>
        <!-- 8.start顯示頁尾  -->
        <div
            style="width:1024px; left:0px; position:relative; background:#FC3; margin-top:4px; height:123px; display:block;">
            <span class="t" style="line-height:123px;"><?= $Bottom->find(1)['bottom'] ?></span>
        </div>
        <!-- 8.end顯示頁尾  -->
    </div>

</body>

</html>