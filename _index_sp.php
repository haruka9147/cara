<?php
 require_once('./config.inc.php');//config.inc.php ���΃p�X�w��
 require_once($SiteRoot .'koushin/login_check_form.php');//�X�V�����O�C���`�F�b�N
?>
<?php
	$pageId				= '';
	$subMenu			= 0;
	$metaTitle			= '�\�Q���̂������߃G�X�e�T����';
	$metaKeywords		= '�ڍ�,�C���h�G�X�e,�G�X�e�T����,�Z�����C�g����,���b�n��,�I�C���}�b�T�[�W,�G�X�e�e�B�b�N�T����,�����Y�T����,����';
	$metaDescription	= '�����A�\�Q���̃v���C�x�[�g�T�����J�[���B�A�[�������F�[�_�Ɋ�Â����̎��f�f���p�����������߂̃C���h�G�X�e�ő̂̒�����L���C�ɂ����Ē����܂��B�Z�����C�g�����A���b�n���A�I�C���}�b�T�[�W�Ȃǂ���]�̕��͐����x���A�����҂����Ă���܂��B';
	require_once('./header_sp_new.php');
?>

<script>
$(window).on('load', function(){
	// �ݒ�
	var $width = $(window).width();
	var $height = $(window).width() / 2.457142857142857;
	var $interval = 5000; // �؂�ւ��̊Ԋu�i�~���b�j
	var $fade_speed = 2000; // �t�F�[�h�����̑����i�~���b�j

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

        <h2>�s ���V�K�̂��q�l�̂��\���t�ɂ��� �t</h2>
<!--<p>���������܂ŁA���\��󋵂���ύ��ݍ����Ă���܂��̂ŁA���ɐ\���󂲂����܂��񂪁A�������V�K�̂��q�l�̂��\��́A���Љ�̕��݂̂̎�t�Ƃ����Ă��������Ă���܂��B<br />
��ς����f���������������܂����A�������������܂��悤���肢�\���グ�܂��B</p>-->
<p>���������܂ŁA���\��󋵂���ύ��ݍ����Ă���܂��̂ŁA���ɐ\���󂲂����܂��񂪁A����<font color="#FF0000">���V�K�̂��q�l�̂��\��́A���󂯂ł��Ȃ���</font>�ł��B<br />
��ς����f���������������܂����A�������������܂��悤���肢�\���グ�܂��B</p><br /><hr />

						<h2>���f�B�A���</h2>
						<div id="media">
							<?php require_once('lib/blog_info_img.php') ?>
						</div>
						<h2>What's new</h2>
						<p class="TopContentsIn">
<?php  //������ �X�V�p ���������� =======================================================
	require_once($SiteRoot .'koushin/edit.inc.php');	//������1�s�̓y�[�W����1��ڂ̕ҏW�G���A�̂ݑ}����
	
	$txt_file = "index_m.txt";	//�ҏW����e�L�X�g�t�@�C����
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
						</p>

		  				<h2>Concept</h2>
	       			 	<p class="TopContentsIn">
<?php  //������ �X�V�p ���������� =======================================================
	$txt_file = "index02_sp.txt";	//�ҏW����e�L�X�g�t�@�C����
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
			            </p>
						<h2>Contents</h2>
						<p class="topContentsBg">
<?php  //������ �X�V�p ���������� =======================================================
	$txt_file = "index03_sp.txt";	//�ҏW����e�L�X�g�t�@�C����
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
						</p>

						<p align="center">
							<img src="komoimg/top/navi_blog_new.jpg" alt="���U�_�C�G�b�g�Z���s�X�g�@��{�ЋM�b" usemap="#navi_blog" width="300" height="116" />
							<map name="navi_blog">
								<area href="http://ameblo.jp/cara-elegante/" target="_blank" shape="rect" alt="�A���u��" coords="125,10,290,56">
								<area href="http://www.facebook.com/yukie.l.iwamoto" target="_blank" shape="rect" alt="facebook" coords="125,60,290,106">
							</map>
						</p>

						<p align="center"><a href="/4D_Crystal.php"><img src="komoimg/crystal_banner.png" alt="4D�N���X�^���t�F�C�X" title="4D�N���X�^���t�F�C�X" /></a></p>
						<p align="center"><a href="/raindrop.php"><img src="komoimg/top/navi_raindrop_off.jpg" alt="���C���h���b�v" title="���C���h���b�v" /></a></p>
						<p align="center"><a href="/report.php"><img src="komoimg/top/navi_report_off.jpg" alt="�̌����|�[�g" title="�̌����|�[�g" /></a></p>

						
						<h2>�X�������J���</h3>
						<p class="TopRightMedia">
							<?php require_once('lib/blog_info2.php') ?>
						</p>

<?php
	$isTop = true;
	require_once('./footer_sp.php');
?>
