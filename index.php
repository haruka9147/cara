<?php
 require_once('./config.inc.php');//config.inc.php ���΃p�X�w��
 require_once($SiteRoot .'koushin/login_check_form.php');//�X�V�����O�C���`�F�b�N
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=SHIFT_JIS" />
<title>�\�Q���̂������߃G�X�e�T�����b�v���C�x�[�g�T�����J�[��</title>
<meta name="Keywords" content="�\�Q��,�G�X�e,�T����,�Z�����C�g����,����" />
<meta name="Description" content="�����A�\�Q���̃v���C�x�[�g�T�����J�[���B�A�[�������F�[�_�Ɋ�Â����̎��f�f���p�����������߂̃C���h�G�X�e�ő̂̒�����L���C�ɂ����Ē����܂��B�Z�����C�g�����A���b�n���A�I�C���}�b�T�[�W�Ȃǂ���]�̕��͐����x���A�����҂����Ă���܂��B" />
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
						<li><a href="/menu.php"><img src="komoimg/top/navi_menu_off.jpg" alt="�̌��R�[�X" title="�̌��R�[�X" /></a></li>
						<li><a href="/report.php"><img src="komoimg/top/navi_report_off.jpg" alt="�̌����|�[�g" title="�̌����|�[�g" /></a></li>
						<li class="top_navi_r"><a href="/raindrop.php"><img src="komoimg/top/navi_raindrop_off.jpg" alt="���C���h���b�v" title="���C���h���b�v" /></a></li>

					</ul>-->
				</div>
				<div id="Contents" class="clearfloat">
					<div id="ContentsLeft">
                    <h3>�s ���V�K�̂��q�l�̂��\���t�ɂ��� �t</h3>
<!--<p>���������܂ŁA���\��󋵂���ύ��ݍ����Ă���܂��̂ŁA���ɐ\���󂲂����܂��񂪁A�������V�K�̂��q�l�̂��\��́A���Љ�̕��݂̂̎�t�Ƃ����Ă��������Ă���܂��B<br />
��ς����f���������������܂����A�������������܂��悤���肢�\���グ�܂��B</p>-->
<p>���������܂ŁA���\��󋵂���ύ��ݍ����Ă���܂��̂ŁA���ɐ\���󂲂����܂��񂪁A����<font color="#FF0000">���V�K�̂��q�l�̂��\��́A���󂯂ł��Ȃ���</font>�ł��B<br />
��ς����f���������������܂����A�������������܂��悤���肢�\���グ�܂��B</p><br /><hr />
						<h2><img src="komoimg/top_media.jpg" alt="���f�B�A���" title="���f�B�A���" /></h2>
						<div id="media">
							<?php require_once('lib/blog_info_img.php') ?>
						</div>
						<h2><img src="komoimg/top_new.gif" alt="What's new" title="What's new" /></h2>
						<div class="TopContentsIn">
<?php  //������ �X�V�p ���������� =======================================================
	require_once($SiteRoot .'koushin/edit.inc.php');	//������1�s�̓y�[�W����1��ڂ̕ҏW�G���A�̂ݑ}����
	
	$txt_file = "index.txt";	//�ҏW����e�L�X�g�t�@�C����
	$EditorHeight	= '500' ;		//�\������t�H�[���̍���
	$EditorWidth 	= '100%' ;		//�\������t�H�[���̕�
	$EditorToolbar 	= 'Default' ;	//�e�ݒ薼�� weditor/fckconfig.js ���ɋL��
									//�X�^�C���I�����ڂ́Aweditor/fckstytle.xml�@�ɋL��
									//�t�H�[�����Ŏg�p����CSS��  /css/fck_editorarea.css
	$FormName = 'contents';			//�t�H�[����(�y�[�W���ŕ����g���ꍇ�ύX����j
	
	include($SiteRoot .'koushin/editform.inc.php') ;	//�e�L�X�g�\�����̓t�H�[���\��
?>
<?PHP if($edit){ ?>
<p></p>
<div>���X�V�ɂ���</div>
  <ol class="olKoushin">
    ���L�̕��@�ōX�V���Ă�������
  	  <li class="liKoushin">���łɓ����Ă��钆����1���ڂ��A�}�E�X�ȂǂŃh���b�O���đI�����Ă��������B�F�����]���܂��B</li>
  	  <li class="liKoushin"><img src="images/textcopy.gif" align="absmiddle" />�R�s�[�{�^���������A�I�������L�����R�s�[���܂��B�i��ʏ�͏o�܂���j</li>
	  <li class="liKoushin"><img src="images/textharituke.gif" align="absmiddle" />�ǉ��������s�ɃJ�[�\�������킹�\��t���{�^���������܂��B�i��ʏ�ɏo�܂��j</li>
	  <li class="liKoushin">�I���E�R�s�[�������e�Ɠ����ɂȂ�܂��̂ŁA���ꂼ����e�̕ύX�����Ă��������B</li>
  </ol>
  <p>���C���O�ɓ��e��ۑ����Ă��������ꍇ�́A<img src="images/source.gif" width="55" height="20" align="absmiddle">���N���b�N���A�\�������HTML�\�[�X�����[�J��PC����TEXT�t�@�C�����ŕۑ����Ă����ĉ������B<br>
    �ۑ�������A<img src="images/source.gif" width="55" height="20" align="absmiddle">���N���b�N���A�f�U�C����ʂɖ߂�ҏW���ĉ������B<br>
  </p>
<?PHP };//������ �X�V�p ���̍s�܂� ==========================================================  ?>
						</div>
		  				<h2><img src="komoimg/top_concept.gif" alt="Concept" title="Concept" /></h2>
	       			 	<div class="TopContentsIn">
<?php  //������ �X�V�p ���������� =======================================================
	$txt_file = "index02.txt";	//�ҏW����e�L�X�g�t�@�C����
	$EditorHeight	= '500' ;		//�\������t�H�[���̍���
	$EditorWidth 	= '100%' ;		//�\������t�H�[���̕�
	$EditorToolbar 	= 'Default' ;	//�e�ݒ薼�� weditor/fckconfig.js ���ɋL��
									//�X�^�C���I�����ڂ́Aweditor/fckstytle.xml�@�ɋL��
									//�t�H�[�����Ŏg�p����CSS��  /css/fck_editorarea.css
	$FormName = 'contents02';			//�t�H�[����(�y�[�W���ŕ����g���ꍇ�ύX����j
	
	include($SiteRoot .'koushin/editform.inc.php') ;	//�e�L�X�g�\�����̓t�H�[���\��
?>
<?PHP if($edit){ ?>
<?PHP };//������ �X�V�p ���̍s�܂� ==========================================================  ?>
			            </div>
						<h2><img src="komoimg/top_contents.gif" alt="Contents" title="Contents" /></h2>
						<div class="topContentsBg">
<?php  //������ �X�V�p ���������� =======================================================
	$txt_file = "index03.txt";	//�ҏW����e�L�X�g�t�@�C����
	$EditorHeight	= '500' ;		//�\������t�H�[���̍���
	$EditorWidth 	= '100%' ;		//�\������t�H�[���̕�
	$EditorToolbar 	= 'Default' ;	//�e�ݒ薼�� weditor/fckconfig.js ���ɋL��
									//�X�^�C���I�����ڂ́Aweditor/fckstytle.xml�@�ɋL��
									//�t�H�[�����Ŏg�p����CSS��  /css/fck_editorarea.css
	$FormName = 'contents03';			//�t�H�[����(�y�[�W���ŕ����g���ꍇ�ύX����j
	
	include($SiteRoot .'koushin/editform.inc.php') ;	//�e�L�X�g�\�����̓t�H�[���\��
?>
<?PHP if($edit){ ?>
<?PHP };//������ �X�V�p ���̍s�܂� ==========================================================  ?>
						</div>
					</div><!--ContentsLeft_end-->
					<div id="ContentsRight">
						<div id="navi_blog">
							<img src="komoimg/top/navi_blog.jpg" alt="���U�_�C�G�b�g�Z���s�X�g�@��{�ЋM�b" usemap="#navi_blog" width="300" height="116" />
							<map name="navi_blog">
								<area href="http://ameblo.jp/cara-elegante/" target="_blank" shape="rect" alt="�A���u��" coords="125,10,290,56">
								<area href="http://twitter.com/yukieiwamoto413" target="_blank" shape="rect" alt="Twitter" coords="125,61,205,106">
								<area href="http://www.facebook.com/yukie.l.iwamoto" target="_blank" shape="rect" alt="facebook" coords="211,61,290,106">
							</map> 
						</div>

						<p align="center"><a href="/raindrop.php"><img src="komoimg/top/navi_raindrop_off.jpg" alt="���C���h���b�v" title="���C���h���b�v" /></a></p>
						<p align="center"><a href="/report.php"><img src="komoimg/top/navi_report_off.jpg" alt="�̌����|�[�g" title="�̌����|�[�g" /></a></p>

						
						<h3><img src="images/top_sliranca.jpg" alt="�X�������J���" title="�X�������J���" /></h3>
						<div class="TopRightMedia">
							<div class="TopContentsIn">
							<?php require_once('lib/blog_info2.php') ?>
						    </div>
						</div>
						<div class="TopRightMediaEnd"></div>
						<h3><img src="images/top_mobile.jpg" alt="���o�C���T�C�g" title="���o�C���T�C�g" /></h3>
						<div class="TopRightMobile">
							<div class="TopContentsIn clearfloat">
							<img src="images/qr_cara.gif" class="floatL" />
						    ���T�C�g�͌g�ѓd�b����������ɂȂ�܂��BQR�R�[�h����URL��o�^���ăA�N�Z�X���Ă��������B
						    <p></p>
						    </div>
						</div>
						<div class="TopRightMobileEnd"></div>
						<!--<h2><a href="menu_man.php"><img src="images/top_banner03.jpg" alt="�����Y�G�X�e�̕�" title="�����Y�̕��̓R�`��" /></a></h2>-->
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
