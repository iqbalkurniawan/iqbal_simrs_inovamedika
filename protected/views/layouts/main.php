<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php 
			//Admin
			// var_dump($_SESSION['role']);
			if(isset($_SESSION['role'])){
				if( $_SESSION['role'] ==6){
					// echo'testing';
					$this->widget('zii.widgets.CMenu',array(
						'activeCssClass'=>'active',
						'activateParents'=>true,
						'items'=>array(
						  array(
							'label'=>'Master Data',
							'url'=>'javascript:void(0)',
							'linkOptions'=>array('id'=>'menuMasterData'),
							'itemOptions'=>array('id'=>'itemMasterData'),
							'items'=>array(
							  array('label'=>'Unit Kerja', 'url'=>array('/unitkerja')),
							  array('label'=>'Jabatan', 'url'=>array('/jabatan')),
							  array('label'=>'Poli', 'url'=>array('/poli')),
							  array('label'=>'Tindakan', 'url'=>array('/tindakan')),
							  array('label'=>'Obat', 'url'=>array('/obat')),
							  array('label'=>'Pegawai', 'url'=>array('/pegawai')),
							  array('label'=>'Dokter', 'url'=>array('/dokter')),
							//   array('label'=>'Pasien', 'url'=>array('/company/aboutUs')),
							  array('label'=>'Pengguna (Akun)', 'url'=>array('/user')),
							),
						  ),
						  array(
							'label'=>'Pendaftaran',
							'url'=> 'javascript:void(0)',
							'linkOptions'=>array('id'=>'menuPendaftaran'),
							'itemOptions'=>array('id'=>'itemPendaftaran'),
							'items'=>array(
							  array('label'=>'Pasien', 'url'=>array('/pasien')),
							  array('label'=>'Registrasi Pasien', 'url'=>array('/trrekammedis')),
							),
						  ),
						  array(
							'label'=>'Kasir',
							'url'=>array('/kasir'),
							'linkOptions'=>array('id'=>'menuKasir')
						  ),
						array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			
						),
					  ));
				//Pendaftaran
				}else if($_SESSION['role'] ==1){
					// echo 'testing';
					$this->widget('zii.widgets.CMenu',array(
						'activeCssClass'=>'active',
						'activateParents'=>true,
						'items'=>array(
							array(
								'label'=>'Pendaftaran',
								'url'=> 'javascript:void(0)',
								'linkOptions'=>array('id'=>'menuPendaftaran'),
								'itemOptions'=>array('id'=>'itemPendaftaran'),
								'items'=>array(
								  array('label'=>'Pasien', 'url'=>array('/pasien')),
								  array('label'=>'Registrasi Pasien', 'url'=>array('/trrekammedis')),
								),
							),
							array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
						),
					)); 
				}
			}else{
				$this->widget('zii.widgets.CMenu',array(
					'items'=>array(
						array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
					),
				)); 
			}
		?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
