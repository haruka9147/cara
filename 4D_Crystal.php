<?php
 require_once('./config.inc.php');//config.inc.php 相対パス指定
 require_once($SiteRoot .'koushin/login_check_form.php');//更新時ログインチェック
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=SHIFT_JIS" />
<title>4Dクリスタルフェイス｜短期ダイエット・エステサイズダウン・YOSA｜プライベートサロンカーラ</title>
<meta name="Description" content="東京、表参道のプライベートサロンカーラ。アーユルヴェーダに基づいた体質診断も用いたインドエステで体の中からキレイにさせて頂きます。セルライト除去、脂肪溶解、オイルマッサージなどご希望の方は是非一度ご連絡お待ちしております。短期ダイエット・エステサイズダウン・YOSAなど。4Dクリスタルフェイスのページ。" />
<meta name="Keywords" content="表参道,インドエステ,エステサロン,セルライト除去,脂肪溶解,オイルマッサージ,エステティックサロン,メンズサロン,東京" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link rel="stylesheet" type="text/css" href="css/main.css" />
<link rel="stylesheet" type="text/css" href="css/navigation.css" />
<link rel="stylesheet" type="text/css" href="css/contents.css">
<script type="text/javascript" src="js/images.js"></script>
<script type="text/javascript" src="js/smartRollover.js"></script>
</head>
<body>
<div id="Wrapper">
	<div id="Global">
		<div id="GlobalHeader">
			<div id="GlobalIn">
				<?PHP include('header.php'); ?>
			    <div id="Title">
					<h2><img src="komoimg/h2_crystal.jpg" width="860" height="150" alt="4Dクリスタルフェイス" title="4Dクリスタルフェイス" /></h2>
					<div id="Pannavi">
						<ul>
							<li><a href="index.php">ホーム</a> ＞</li>
							<li>4Dクリスタルフェイス</li>
						</ul>
					</div>
			  	</div>
				<div id="Contents">
				  <div id="SubNavigation">
				  		<ul>
							<li><a href="4D_Crystal.php">4Dクリスタルフェイス</a></li>
						</ul>
						<?PHP include('side_banner.php'); ?>
				  </div>
				  <div id="ContentsBody">
<!--コンテンツ-->
<?php  //■■■ 更新用 ここかから =======================================================
	require_once($SiteRoot .'koushin/edit.inc.php');	//■この1行はページ内で1回目の編集エリアのみ挿入■
	
	$txt_file = "4D_Crystal.txt";	//編集するテキストファイル名
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
<!--コンテンツ-->
						<?PHP include('banner_contact.php'); ?>
					</div>
				</div>
			    <div id="Footer" class="clearfloat">
					<?PHP include('footer.php'); ?>
			    <div class="Clear"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
//   var myPassWord = prompt('パスワードを入力してください');
//   if ( myPassWord == "pass1" ){
// 	  console.log('aaa');
// 	  document.body.style.display = 'block';
//   }
</script>
</body>
</html>
