<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="shift_jis">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<title><?php if ($metaTitle) : ?><?php echo $metaTitle; ?> | <? endif; ?>�Z���_�C�G�b�g�E�G�X�e�T�C�Y�_�E���EYOSA�b�J�[���ڍ��X</title>
<meta name="Keywords" content="<?php echo $metaKeywords; ?>" />
<meta name="Description" content="<?php echo $metaDescription; ?>" />

<link rel="stylesheet" href="/css/sp/import.css">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css" />
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="/js/sp.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>

<link rel="stylesheet" media="only screen" href="/js/mobile-menu-master/styles.css" />
<script src="/js/mobile-menu-master/jquery.mobile-menu.js"></script>

<script>
$(function(){
	$("body").mobile_menu({
		menu: ['#navi ul'],
		menu_width: 260
	});
});

$(document).ready(function(){
    console.log('aaa');
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
<?php $path_parts = $_SERVER["REQUEST_URI"]; ?>
<body <?php if($path_parts == '/4D_Crystal_sp.php'){ echo 'style="display:none;"'; } ?>

<div data-role="page" data-theme="z" <?php if ($pageId) : ?>id="<?php echo $pageId; ?>"<? endif; ?>>
	<div id="header">
		<div id="logo"><a href="/index_sp.php"><img src="/komoimg/title_new.gif" width="102" alt="�\�Q���̂������߃G�X�e�T�����@�v���C�x�[�g�T�����J�[��" /></a></div>
		<div id="nav">
			<div class="nav_control">
				<a href="#" id="build-menu-button"><img src="images/sp/menu_open.png" id="nav_btn" alt="navigation" width="50" height="50" /></a>
			</div>
			<nav id="navi">
				<ul>
					<li><h1>MENU</h1></li>
					<li><a href="/aboutus_sp.php">&nbsp;</a></li>
					<li><a href="/aboutus_sp.php">�X�܈ē�</a></li>
					<li><a href="javascript:toggleMenu('menu1');" id="menu1" class="accordion">�C���h�G�X�e</a>
						<ul style="display:none;">
							<li><a href="/esthe_sp.php">�C���h�G�X�e�Ƃ�</a></li>
							<li><a href="/esthe_relaxation_sp.php">�����N�[�[�V����</a></li>
							<li><a href="/esthe_diet_sp.php">�Z���_�C�G�b�g</a></li>
							<li><a href="/esthe_flow_sp.php">�{�p�̗���</a></li>
							<li><a href="/report_sp.php">�̌����|�[�g</a></li>
							<li><a href="/ayurveda_sp.php">�A�[�������F�[�_</a></li>
						</ul>
					</li>
					<li><a href="/yosa_sp.php">YOSA</a></li>
					<li><a href="/4D_Crystal_sp.php">4D�N���X�^���t�F�C�X</a></li>
					<li><a href="/media/">���f�B�A���</a></li>
					<li><a href="/contents/">�u���O</a></li>
					<li><a href="/contact_sp.php">���₢���킹</a></li>
					<li><a href="/privacy_sp.php">�v���C�o�V�[�|���V�[</a></li>
					<li><a href="/sitemap_sp.php">�T�C�g�}�b�v</a></li>
				</ul>
			</nav>

		</div>
	</div><!-- header_end -->

	<div id="content">
