<?php
/* @var $this SiteController */

// $this->pageTitle=Yii::app()->name;
$this->pageTitle='Sim-RS';
session_start();
?>
<h1>
<?php if(isset($_SESSION['data_user'])):?>
	<center>Selamat Datang  <?php if(($_SESSION['role']<5) || ($_SESSION['role']==6)):?> 
					<?php echo $_SESSION['data_user']['nama_pegawai'];?>
				<?php else:?>
					<?php echo $_SESSION['data_user']['nama_dokter'];?>
				<?php endif;?>
	di Sistem Manajemen Rumah Sakit </center>
<?php else:?>
	<center>Sistem Manajemen Rumah Sakit Inova Medika</center>
<?php endif;?>
</h1>
<!-- <h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1> -->
<!-- 
<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p> -->
<!-- <ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>For more details on how to further develop this application, please read
the <a href="https://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="https://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p> -->
