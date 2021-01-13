<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="shift_jis">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<title><?php if ($metaTitle) : ?><?php echo $metaTitle; ?> | <? endif; ?>短期ダイエット・エステサイズダウン・YOSA｜カーラ目黒店</title>
<meta name="Keywords" content="<?php echo $metaKeywords; ?>" />
<meta name="Description" content="<?php echo $metaDescription; ?>" />

<link rel="stylesheet" href="/css/sp/import.css">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css" />
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="/js/sp.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>

<link rel="stylesheet" media="only screen" href="/js/mobile-menu-master/styles.css" />
<script src="/js/mobile-menu-master/jquery.mobile-menu.js"></script>
<?php $path_parts = $_SERVER["REQUEST_URI"]; ?>
<?php if($path_parts == '/4D_Crystal_sp.php'){ echo '<script type="text/javascript" src="js/crystal.js"></script>'; } ?>

<script>
$(function(){
	$("body").mobile_menu({
		menu: ['#navi ul'],
		menu_width: 260
	});
});

function toggleMenu(id) {
	var display= $("#" + id).next("ul").css("display");
	var background = $("#" + id).css("background");

    $("#" + id).next("ul").slideToggle(500);
    if (display == "none") {
		$("#" + id).css("background", background.replace("plus.png", "minus.png"))
    } else {
		$("#" + id).css("background", background.replace("minus.png", "plus.png"))
    }
}
</script>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-2347672-40");
pageTracker._trackPageview();
} catch(err) {}</script>

<!-- ===== beacon start ===== -->
<script type="text/javascript">document.write(unescape("%3Cscript src='" + (("https:" == document.location.protocol) ? "https:" : "http:") + "//r.buoy.bz/js/__bc.js' type='text/javascript'%3E%3C/script%3E"));</script><script type="text/javascript">__beacon.initData(); __beacon.exec();</script>
<!-- ===== beacon end   ===== -->

</head>
<body <?php if($path_parts == '/4D_Crystal_sp.php'){ echo 'style="display:none;"'; } ?>>

<div data-role="page" data-theme="z" <?php if ($pageId) : ?>id="<?php echo $pageId; ?>"<? endif; ?>>
	<div id="header">
		<div id="logo"><a href="/index_sp.php"><img src="/komoimg/title_new.gif" width="102" alt="表参道のおすすめエステサロン　プライベートサロンカーラ" /></a></div>
		<div id="nav">
			<div class="nav_control">
				<a href="#" id="build-menu-button"><img src="images/sp/menu_open.png" id="nav_btn" alt="navigation" width="50" height="50" /></a>
			</div>
			<nav id="navi">
				<ul>
					<li><h1>MENU</h1></li>
					<li><a href="/aboutus_sp.php">&nbsp;</a></li>
					<li><a href="/aboutus_sp.php">店舗案内</a></li>
					<li><a href="javascript:toggleMenu('menu1');" id="menu1" class="accordion">インドエステ</a>
						<ul style="display:none;">
							<li><a href="/esthe_sp.php">インドエステとは</a></li>
							<li><a href="/esthe_relaxation_sp.php">リラクゼーション</a></li>
							<li><a href="/esthe_diet_sp.php">短期ダイエット</a></li>
							<li><a href="/esthe_flow_sp.php">施術の流れ</a></li>
							<li><a href="/report_sp.php">体験レポート</a></li>
							<li><a href="/ayurveda_sp.php">アーユルヴェーダ</a></li>
						</ul>
					</li>
					<li><a href="/yosa_sp.php">YOSA</a></li>
					<li><a href="/4D_Crystal_sp.php">4Dクリスタルフェイス</a></li>
					<li><a href="/media/">メディア情報</a></li>
					<li><a href="https://ameblo.jp/cara-elegante/">ブログ</a></li>
					<li><a href="/contact_sp.php">お問い合わせ</a></li>
					<li><a href="/privacy_sp.php">プライバシーポリシー</a></li>
					<li><a href="/sitemap_sp.php">サイトマップ</a></li>
				</ul>
			</nav>

		</div>
	</div><!-- header_end -->

	<div id="content">
