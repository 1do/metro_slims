<?php
$q_color = $dbs->query("SELECT setting_value FROM setting WHERE setting_name='public_metro_theme'");
$d_color = $q_color->fetch_row();
$theme_color = $d_color[0];

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <title><?php echo $page_title; ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="icon" href="webicon.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="webicon.ico" type="image/x-icon" />
        <link href="template/core.style.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $sysconf['template']['css']; ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/css/reset.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/css/<?php echo 'style-'.$theme_color.'.css'; ?>" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="js/form.js"></script>
        <script type="text/javascript" src="js/gui.js"></script>
        <script type="text/javascript" src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/js/custom.js"></script>
    </head>
<body>
	<div id="pop">
	    <div class="popMask"></div>
	    <div class="popWrap">
	    <div class="popiner">
		<?php
		if ($_GET['p'] == 'visitor'){
		?>
		<div class="visitor">
			<?php echo $main_content; ?>
		</div>
		<?php }else{ ?>
		<div class="login">
			<span><?php echo __('Librarian LOGIN') ?></span>
			<?php echo $main_content; ?>
		</div>
		<?php } ?>
	    </div>
	    </div>
	</div>
</body>
</html>
