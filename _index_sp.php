<?php
 require_once('./config.inc.php');//config.inc.php 相対パス指定
 require_once($SiteRoot .'koushin/login_check_form.php');//更新時ログインチェック
?>
<?php
	$pageId				= '';
	$subMenu			= 0;
	$metaTitle			= '表参道のおすすめエステサロン';
	$metaKeywords		= '目黒,インドエステ,エステサロン,セルライト除去,脂肪溶解,オイルマッサージ,エステティックサロン,メンズサロン,東京';
	$metaDescription	= '東京、表参道のプライベートサロンカーラ。アーユルヴェーダに基づいた体質診断も用いたおすすめのインドエステで体の中からキレイにさせて頂きます。セルライト除去、脂肪溶解、オイルマッサージなどご希望の方は是非一度ご連絡お待ちしております。';
	require_once('./header_sp_new.php');
?>

<script>
$(window).on('load', function(){
	// 設定
	var $width = $(window).width();
	var $height = $(window).width() / 2.457142857142857;
	var $interval = 5000; // 切り替わりの間隔（ミリ秒）
	var $fade_speed = 2000; // フェード処理の早さ（ミリ秒）

	$("#slide").css({"width":$width,"height":$height});
	$("#slide ul li").css({"position":"relative","overflow":"hidden","width":$width,"height":$height});
	$("#slide ul li").hide().css({"position":"absolute","top":0,"left":0});
	$("#slide ul li:first").addClass("active").show();
	setInterval(function(){
		var $active = $("#slide ul li.active");
		var $next = $active.next("li").length?$active.next("li"):$("#slide ul li:first");
		$active.fadeOut($fade_speed).removeClass("active");
		$next.fadeIn($fade_speed).addClass("active");
	},$interval);
});
</script>


<div id="slide">
	<ul>
		<li><a href=""><img src="/images/sp/top1.jpg" alt="" width="100%" /></a></li>
		<li><a href=""><img src="/images/sp/top2.jpg" alt="" width="100%" /></a></li>
		<li><a href=""><img src="/images/sp/top3.jpg" alt="" width="100%" /></a></li>
	</ul>
</div>

        <h2>《 ご新規のお客様のご予約受付について 》</h2>
<!--<p>おかげさまで、ご予約状況が大変込み合っておりますので、誠に申し訳ございませんが、只今ご新規のお客様のご予約は、ご紹介の方のみの受付とさせていただいております。<br />
大変ご迷惑をおかけいたしますが、何卒ご了承頂ますようお願い申し上げます。</p>-->
<p>おかげさまで、ご予約状況が大変込み合っておりますので、誠に申し訳ございませんが、只今<font color="#FF0000">ご新規のお客様のご予約は、お受けできない状況</font>です。<br />
大変ご迷惑をおかけいたしますが、何卒ご了承頂ますようお願い申し上げます。</p><br /><hr />

						<h2>メディア情報</h2>
						<div id="media">
							<?php require_once('lib/blog_info_img.php') ?>
						</div>
						<h2>What's new</h2>
						<p class="TopContentsIn">
<?php  //■■■ 更新用 ここかから =======================================================
	require_once($SiteRoot .'koushin/edit.inc.php');	//■この1行はページ内で1回目の編集エリアのみ挿入■
	
	$txt_file = "index_m.txt";	//編集するテキストファイル名
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
						</p>

		  				<h2>Concept</h2>
	       			 	<p class="TopContentsIn">
<?php  //■■■ 更新用 ここかから =======================================================
	$txt_file = "index02_sp.txt";	//編集するテキストファイル名
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
			            </p>
						<h2>Contents</h2>
						<p class="topContentsBg">
<?php  //■■■ 更新用 ここかから =======================================================
	$txt_file = "index03_sp.txt";	//編集するテキストファイル名
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
						</p>

						<p align="center">
							<img src="komoimg/top/navi_blog_new.jpg" alt="速攻ダイエットセラピスト　岩本侑貴恵" usemap="#navi_blog" width="300" height="116" />
							<map name="navi_blog">
								<area href="http://ameblo.jp/cara-elegante/" target="_blank" shape="rect" alt="アメブロ" coords="125,10,290,56">
								<area href="http://www.facebook.com/yukie.l.iwamoto" target="_blank" shape="rect" alt="facebook" coords="125,60,290,106">
							</map>
						</p>

						<p align="center"><a href="/4D_Crystal.php"><img src="komoimg/crystal_banner.png" alt="4Dクリスタルフェイス" title="4Dクリスタルフェイス" /></a></p>
						<p align="center"><a href="/raindrop.php"><img src="komoimg/top/navi_raindrop_off.jpg" alt="レインドロップ" title="レインドロップ" /></a></p>
						<p align="center"><a href="/report.php"><img src="komoimg/top/navi_report_off.jpg" alt="体験レポート" title="体験レポート" /></a></p>

						
						<h2>スリランカ情報</h3>
						<p class="TopRightMedia">
							<?php require_once('lib/blog_info2.php') ?>
						</p>

<?php
	$isTop = true;
	require_once('./footer_sp.php');
?>
