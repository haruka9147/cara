<?php
 require_once('./config.inc.php');//config.inc.php ���΃p�X�w��
 require_once($SiteRoot .'koushin/login_check_form.php');//�X�V�����O�C���`�F�b�N
?>
<?php
	$pageId				= '';
	$subMenu			= 0;
	$metaTitle			= '���[���E�o�C�I�Z���s�[';
	$metaKeywords		= '�ڍ�,�C���h�G�X�e,�G�X�e�T����,�Z�����C�g����,���b�n��,�I�C���}�b�T�[�W,�G�X�e�e�B�b�N�T����,�����Y�T����,����';
	$metaDescription	= '�����A�\�Q���̃v���C�x�[�g�T�����J�[���B�A�[�������F�[�_�Ɋ�Â����̎��f�f���p�����C���h�G�X�e�ő̂̒�����L���C�ɂ����Ē����܂��B�Z�����C�g�����A���b�n���A�I�C���}�b�T�[�W�Ȃǂ���]�̕��͐����x���A�����҂����Ă���܂��B�Z���_�C�G�b�g�E�G�X�e�T�C�Y�_�E���EYOSA�ȂǁB���[���E�o�C�I�Z���s�[�̃y�[�W�B';
	require_once('./header_sp.php');
?>

<!--�R���e���c-->
<?php  //������ �X�V�p ���������� =======================================================
	require_once($SiteRoot .'koushin/edit.inc.php');	//������1�s�̓y�[�W����1��ڂ̕ҏW�G���A�̂ݑ}����
	
	$txt_file = "moon_cycle_sp.txt";	//�ҏW����e�L�X�g�t�@�C����
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

<?php
	require_once('./footer_sp.php');
?>
