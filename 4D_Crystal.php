<?php
 require_once('./config.inc.php');//config.inc.php ���΃p�X�w��
 require_once($SiteRoot .'koushin/login_check_form.php');//�X�V�����O�C���`�F�b�N
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=SHIFT_JIS" />
<title>4D�N���X�^���t�F�C�X�b�Z���_�C�G�b�g�E�G�X�e�T�C�Y�_�E���EYOSA�b�v���C�x�[�g�T�����J�[��</title>
<meta name="Description" content="�����A�\�Q���̃v���C�x�[�g�T�����J�[���B�A�[�������F�[�_�Ɋ�Â����̎��f�f���p�����C���h�G�X�e�ő̂̒�����L���C�ɂ����Ē����܂��B�Z�����C�g�����A���b�n���A�I�C���}�b�T�[�W�Ȃǂ���]�̕��͐����x���A�����҂����Ă���܂��B�Z���_�C�G�b�g�E�G�X�e�T�C�Y�_�E���EYOSA�ȂǁB4D�N���X�^���t�F�C�X�̃y�[�W�B" />
<meta name="Keywords" content="�\�Q��,�C���h�G�X�e,�G�X�e�T����,�Z�����C�g����,���b�n��,�I�C���}�b�T�[�W,�G�X�e�e�B�b�N�T����,�����Y�T����,����" />
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
					<h2><img src="komoimg/h2_crystal.jpg" width="860" height="150" alt="4D�N���X�^���t�F�C�X" title="4D�N���X�^���t�F�C�X" /></h2>
					<div id="Pannavi">
						<ul>
							<li><a href="index.php">�z�[��</a> ��</li>
							<li>4D�N���X�^���t�F�C�X</li>
						</ul>
					</div>
			  	</div>
				<div id="Contents">
				  <div id="SubNavigation">
				  		<ul>
							<li><a href="4D_Crystal.php">4D�N���X�^���t�F�C�X</a></li>
						</ul>
						<?PHP include('side_banner.php'); ?>
				  </div>
				  <div id="ContentsBody">
<!--�R���e���c-->
<?php  //������ �X�V�p ���������� =======================================================
	require_once($SiteRoot .'koushin/edit.inc.php');	//������1�s�̓y�[�W����1��ڂ̕ҏW�G���A�̂ݑ}����
	
	$txt_file = "4D_Crystal.txt";	//�ҏW����e�L�X�g�t�@�C����
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
<!--�R���e���c-->
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
//   var myPassWord = prompt('�p�X���[�h����͂��Ă�������');
//   if ( myPassWord == "pass1" ){
// 	  console.log('aaa');
// 	  document.body.style.display = 'block';
//   }
</script>
</body>
</html>
