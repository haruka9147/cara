<?php
 require_once('./config.inc.php');//config.inc.php 相対パス指定
 require_once($SiteRoot .'koushin/login_check_form.php');//更新時ログインチェック
?>
<?php
	$pageId				= '';
	$subMenu			= 0;
	$metaTitle			= 'ムーン・バイオセラピー';
	$metaKeywords		= '目黒,インドエステ,エステサロン,セルライト除去,脂肪溶解,オイルマッサージ,エステティックサロン,メンズサロン,東京';
	$metaDescription	= '東京、表参道のプライベートサロンカーラ。アーユルヴェーダに基づいた体質診断も用いたインドエステで体の中からキレイにさせて頂きます。セルライト除去、脂肪溶解、オイルマッサージなどご希望の方は是非一度ご連絡お待ちしております。短期ダイエット・エステサイズダウン・YOSAなど。ムーン・バイオセラピーのページ。';
	require_once('./header_sp.php');
?>

<!--コンテンツ-->
<?php  //■■■ 更新用 ここかから =======================================================
	require_once($SiteRoot .'koushin/edit.inc.php');	//■この1行はページ内で1回目の編集エリアのみ挿入■
	
	$txt_file = "moon_cycle_sp.txt";	//編集するテキストファイル名
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

<?php
	require_once('./footer_sp.php');
?>
