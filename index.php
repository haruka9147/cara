<?php
 require_once('./config.inc.php');//config.inc.php 相対パス指定
 require_once($SiteRoot .'koushin/login_check_form.php');//更新時ログインチェック
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=SHIFT_JIS" />
<title>表参道のおすすめエステサロン｜プライベートサロンカーラ</title>
<meta name="Keywords" content="表参道,エステ,サロン,セルライト除去,東京" />
<meta name="Description" content="東京、表参道のプライベートサロンカーラ。アーユルヴェーダに基づいた体質診断も用いたおすすめのインドエステで体の中からキレイにさせて頂きます。セルライト除去、脂肪溶解、オイルマッサージなどご希望の方は是非一度ご連絡お待ちしております。" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link rel="stylesheet" type="text/css" href="css/main.css" />
<link rel="stylesheet" type="text/css" href="css/navigation.css" />
<script type="text/javascript" src="js/images.js"></script>
<script type="text/javascript" src="js/AC_RunActiveContent.js"></script>
<script type="text/javascript" src="js/smartRollover.js"></script>
</head>
<body>
<div id="Wrapper">
	<div id="Global">
		<div id="GlobalHeader">
			<div id="GlobalIn">
				<?PHP include('header.php'); ?>
				<div id="TopImage">
					<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="860" height="350">
					<param name="movie" value="images/top6.swf" />
					<param name="quality" value="high" /><param name="LOOP" value="false" />
					<embed src="images/top6.swf" width="860" height="350" loop="false" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash"></embed>
					</object>
				</div>
				<div id="top_navi">
					<!--<ul>
						<li><a href="/menu.php"><img src="komoimg/top/navi_menu_off.jpg" alt="体験コース" title="体験コース" /></a></li>
						<li><a href="/report.php"><img src="komoimg/top/navi_report_off.jpg" alt="体験レポート" title="体験レポート" /></a></li>
						<li class="top_navi_r"><a href="/raindrop.php"><img src="komoimg/top/navi_raindrop_off.jpg" alt="レインドロップ" title="レインドロップ" /></a></li>

					</ul>-->
				</div>
				<div id="Contents" class="clearfloat">
					<div id="ContentsLeft">
                    <h3>《 ご新規のお客様のご予約受付について 》</h3>
<!--<p>おかげさまで、ご予約状況が大変込み合っておりますので、誠に申し訳ございませんが、只今ご新規のお客様のご予約は、ご紹介の方のみの受付とさせていただいております。<br />
大変ご迷惑をおかけいたしますが、何卒ご了承頂ますようお願い申し上げます。</p>-->
<p>おかげさまで、ご予約状況が大変込み合っておりますので、誠に申し訳ございませんが、只今<font color="#FF0000">ご新規のお客様のご予約は、お受けできない状況</font>です。<br />
大変ご迷惑をおかけいたしますが、何卒ご了承頂ますようお願い申し上げます。</p><br /><hr />
						<h2><img src="komoimg/top_media.jpg" alt="メディア情報" title="メディア情報" /></h2>
						<div id="media">
							<?php require_once('lib/blog_info_img.php') ?>
						</div>
						<h2><img src="komoimg/top_new.gif" alt="What's new" title="What's new" /></h2>
						<div class="TopContentsIn">
<?php  //■■■ 更新用 ここかから =======================================================
	require_once($SiteRoot .'koushin/edit.inc.php');	//■この1行はページ内で1回目の編集エリアのみ挿入■
	
	$txt_file = "index.txt";	//編集するテキストファイル名
	$EditorHeight	= '500' ;		//表示するフォームの高さ
	$EditorWidth 	= '100%' ;		//表示するフォームの幅
	$EditorToolbar 	= 'Default' ;	//各設定名は weditor/fckconfig.js 内に記載
									//スタイル選択項目は、weditor/fckstytle.xml　に記載
									//フォーム内で使用するCSSは  /css/fck_editorarea.css
	$FormName = 'contents';			//フォーム名(ページ内で複数使う場合変更する）
	
	include($SiteRoot .'koushin/editform.inc.php') ;	//テキスト表示又はフォーム表示
?>
<?PHP if($edit){ ?>
<p></p>
<div>◆更新について</div>
  <ol class="olKoushin">
    下記の方法で更新してください
  	  <li class="liKoushin">すでに入っている中から1項目を、マウスなどでドラッグして選択してください。色が反転します。</li>
  	  <li class="liKoushin"><img src="images/textcopy.gif" align="absmiddle" />コピーボタンを押し、選択した記事をコピーします。（画面上は出ません）</li>
	  <li class="liKoushin"><img src="images/textharituke.gif" align="absmiddle" />追加したい行にカーソルを合わせ貼り付けボタンを押します。（画面上に出ます）</li>
	  <li class="liKoushin">選択・コピーした内容と同じになりますので、それぞれ内容の変更をしてください。</li>
  </ol>
  <p>※修正前に内容を保存しておきたい場合は、<img src="images/source.gif" width="55" height="20" align="absmiddle">をクリックし、表示されるHTMLソースをローカルPC内にTEXTファイル等で保存しておいて下さい。<br>
    保存したら、<img src="images/source.gif" width="55" height="20" align="absmiddle">をクリックし、デザイン画面に戻り編集して下さい。<br>
  </p>
<?PHP };//■■■ 更新用 この行まで ==========================================================  ?>
						</div>
		  				<h2><img src="komoimg/top_concept.gif" alt="Concept" title="Concept" /></h2>
	       			 	<div class="TopContentsIn">
<?php  //■■■ 更新用 ここかから =======================================================
	$txt_file = "index02.txt";	//編集するテキストファイル名
	$EditorHeight	= '500' ;		//表示するフォームの高さ
	$EditorWidth 	= '100%' ;		//表示するフォームの幅
	$EditorToolbar 	= 'Default' ;	//各設定名は weditor/fckconfig.js 内に記載
									//スタイル選択項目は、weditor/fckstytle.xml　に記載
									//フォーム内で使用するCSSは  /css/fck_editorarea.css
	$FormName = 'contents02';			//フォーム名(ページ内で複数使う場合変更する）
	
	include($SiteRoot .'koushin/editform.inc.php') ;	//テキスト表示又はフォーム表示
?>
<?PHP if($edit){ ?>
<?PHP };//■■■ 更新用 この行まで ==========================================================  ?>
			            </div>
						<h2><img src="komoimg/top_contents.gif" alt="Contents" title="Contents" /></h2>
						<div class="topContentsBg">
<?php  //■■■ 更新用 ここかから =======================================================
	$txt_file = "index03.txt";	//編集するテキストファイル名
	$EditorHeight	= '500' ;		//表示するフォームの高さ
	$EditorWidth 	= '100%' ;		//表示するフォームの幅
	$EditorToolbar 	= 'Default' ;	//各設定名は weditor/fckconfig.js 内に記載
									//スタイル選択項目は、weditor/fckstytle.xml　に記載
									//フォーム内で使用するCSSは  /css/fck_editorarea.css
	$FormName = 'contents03';			//フォーム名(ページ内で複数使う場合変更する）
	
	include($SiteRoot .'koushin/editform.inc.php') ;	//テキスト表示又はフォーム表示
?>
<?PHP if($edit){ ?>
<?PHP };//■■■ 更新用 この行まで ==========================================================  ?>
						</div>
					</div><!--ContentsLeft_end-->
					<div id="ContentsRight">
						<div id="navi_blog">
							<img src="komoimg/top/navi_blog.jpg" alt="速攻ダイエットセラピスト　岩本侑貴恵" usemap="#navi_blog" width="300" height="116" />
							<map name="navi_blog">
								<area href="http://ameblo.jp/cara-elegante/" target="_blank" shape="rect" alt="アメブロ" coords="125,10,290,56">
								<area href="http://twitter.com/yukieiwamoto413" target="_blank" shape="rect" alt="Twitter" coords="125,61,205,106">
								<area href="http://www.facebook.com/yukie.l.iwamoto" target="_blank" shape="rect" alt="facebook" coords="211,61,290,106">
							</map> 
						</div>

						<p align="center"><a href="/raindrop.php"><img src="komoimg/top/navi_raindrop_off.jpg" alt="レインドロップ" title="レインドロップ" /></a></p>
						<p align="center"><a href="/report.php"><img src="komoimg/top/navi_report_off.jpg" alt="体験レポート" title="体験レポート" /></a></p>

						
						<h3><img src="images/top_sliranca.jpg" alt="スリランカ情報" title="スリランカ情報" /></h3>
						<div class="TopRightMedia">
							<div class="TopContentsIn">
							<?php require_once('lib/blog_info2.php') ?>
						    </div>
						</div>
						<div class="TopRightMediaEnd"></div>
						<h3><img src="images/top_mobile.jpg" alt="モバイルサイト" title="モバイルサイト" /></h3>
						<div class="TopRightMobile">
							<div class="TopContentsIn clearfloat">
							<img src="images/qr_cara.gif" class="floatL" />
						    当サイトは携帯電話からもご覧になれます。QRコードからURLを登録してアクセスしてください。
						    <p></p>
						    </div>
						</div>
						<div class="TopRightMobileEnd"></div>
						<!--<h2><a href="menu_man.php"><img src="images/top_banner03.jpg" alt="メンズエステの方" title="メンズの方はコチラ" /></a></h2>-->
					</div><!--ContentsRight_end-->
				</div><!--Contents_end-->
				<div id="Footer" class="clearfloat">
					<?PHP include('footer.php'); ?>
				    <div class="Clear"></div>
				</div><!--Footer_end-->
			</div><!--GlobalIn_end-->
		</div><!--GlobalHeader_end-->
	</div><!--Global_end-->
</div><!--Wrapper_end-->
</body>
</html>
