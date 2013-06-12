<!--
=======================================
Metro Rebuild| Slims Meranti Template
@2013
Waris Agung Widodo [ido.alit@gmail.com]
=======================================

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
-->
<?php

if (!defined('INDEX_AUTH')) {
    die("can not access this file directly");
} elseif (INDEX_AUTH != 1) {
    die("can not access this file directly");
}
//set default index page
$p = 'home';

if (isset($_GET['p']))
{
 if ($_GET['p'] == 'libinfo') {
  $p = 'libinfo';
 } elseif ($_GET['p'] == 'help') {
  $p = 'help';
 } elseif ($_GET['p'] == 'member') {
  $p = 'member';
 } elseif ($_GET['p'] == 'login') {
  $p = 'login';
 } 
}

$_style = $_GET['style'];
if($_style){
    $_update = $dbs->query("UPDATE setting SET setting_value='$_style' WHERE setting_name='public_metro_theme'");
}

$q_color = $dbs->query("SELECT setting_value, setting_name FROM setting WHERE setting_name='public_metro_theme'");
$d_color = $q_color->fetch_row();
if($d_color[1]!='public_metro_theme'){
    $theme_color = 'default';
    $dbs->query("INSERT INTO setting VALUES ('NULL','public_metro_theme','default')");
}else{
$theme_color = $d_color[0];
}
?>
<!DOCTYPE html>
<html>
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
	<div id="start">
		<a href="index.php"><img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/img/start.png" alt=""></a>
	</div>
	<!-- Advace Search -->
	<div id="advSearch" class="sidepage">
	    <div class="titleSide">
		<a class="back" style="position:absolute; top:20px; left:20px;" href="javascript: history.back();"><img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/img/back.png" alt="" width="30" height="30">
		</a>
		<span><?php echo __('Advanced Search'); ?></span>
		</div>
		<div id="advance-search">
			<form name="advSearchForm" id="advSearchForm" action="index.php" method="get">
				<div class="advance">
					<table width="100%">
						<tr>
							<td class="advForm">
							<?php echo __('Author(s)'); ?>
							</td>
						</tr>
						<tr>
							<td class="advForm">
							<?php echo $advsearch_author; ?>
							</td>
						</tr>
						<tr>
							<td class="advForm">
							<?php echo __('Subject(s)'); ?>
							</td>
						</tr>
						<tr>
							<td class="advForm">
							<?php echo $advsearch_topic; ?>
							</td>
						</tr>
						<tr>
							<td class="advForm">
							<?php echo __('ISBN/ISSN'); ?>
							</td>
						</tr>
						<tr>
							<td class="advForm">
								<input type="text" name="isbn" />
							</td>
						</tr>
						<tr>
							<td class="advForm">
								<?php echo __('GMD'); ?>
							</td>
						</tr>
						<tr>
							<td class="advForm">
								<select name="gmd">
								<?php echo $gmd_list; ?>
								</select>
							</td>
						</tr>
						<tr>
							<td class="advForm">
								<?php echo __('Collection Type'); ?>
							</td>
						</tr>
						<tr>
							<td class="advForm">
								<select name="colltype">
								<?php echo $colltype_list; ?>
								</select>
							</td>
						</tr>
						<tr>
							<td class="advForm">
								<?php echo __('Location'); ?>
							</td>
						</tr>
						<tr>
							<td class="advForm">
								<select name="location">
								<?php echo $location_list; ?>
								</select>
							</td>
						</tr>
						<tr>
							<td colspan="4" class="advForm" style="text-align:center;">
								<button type="submit" name="search" value="<?php echo __('Search'); ?>" class="searchButton"><?php echo __('Search'); ?></button>
							</td>
						</tr>
					</table>
				</div>
			</form>
	    </div>
	</div>
	<!-- AdvaceSearch end -->

	<!-- Language -->
	<div id="bahasa" class="sidepage">
	    <div class="titleSide">
		<a class="back" style="position:absolute; top:20px; left:20px;" href="javascript: history.back();"><img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/img/back.png" alt="" width="30" height="30">
		</a>
			<span><?php echo __('Select Language'); ?></span>
		</div>
		<ul>
			<li><a href="index.php?select_lang=ar_AR"><?php echo __('Arabic'); ?></a></li>
			<li><a href="index.php?select_lang=bn_BD"><?php echo __('Begali'); ?></a></li>
			<li><a href="index.php?select_lang=de_DE"><?php echo __('German'); ?></a></li>
			<li><a href="index.php?select_lang=en_US"><?php echo __('English'); ?></a></li>
			<li><a href="index.php?select_lang=es_ES"><?php echo __('Espanol'); ?></a></li>
			<li><a href="index.php?select_lang=id_ID"><?php echo __('Indonesian'); ?></a></li>
			<li><a href="index.php?select_lang=pt_BR"><?php echo __('Brazilian Portuguese'); ?></a></li>
			<li><a href="index.php?select_lang=th_TH"><?php echo __('Thai'); ?></a></li>
		</ul>
	</div>
	<!-- Language end -->
	
	<div class="metro-page">
<!-- HASIL PENCARIAN -->
        <?php if(isset($_GET['search']) || isset($_GET['title']) || isset($_GET['keywords'])) { ?>

        <div id="main">
	<div  class="nduwur">
	    <a class="back" href="javascript: history.back();">
		<img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/img/back.png" alt="" width="40" height="40">
	    </a>
	    <span>Result Search</span>
	</div>
	
	<div id="nav-result">
	    <?php include ("nav.php") ?>
	</div>
	
	<div id="search-result">
	    <form name="advSearchForm" id="advSearchForm" action="index.php" method="get">
		<button id="submit-button" type="submit" value="search" name="search" /></button>
		<input type="text" name="keywords" id="keyword" />
	    </form>
	    <a href="#advSearch">
		<abbr title="<?php echo __('Advanced Search'); ?>">
		<div id="adv-result">
		    <img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/img/adv-s.png" alt="adddddd">
		</div>
		</abbr>
	    </a>
	</div>
		
	<div class="sidebar-result">
			<div class="tagline">
				<?php echo __('Information'); ?>
			</div>
			<div class="search-result-info">
				<?php echo $search_result_info; ?>
			</div>
			<?php if ($sysconf['enable_search_clustering']) { ?>
			<div class="tagline">
				<?php echo __('Search Cluster'); ?>
			</div>
			
			<div id="search-cluster">
			    <div class="cluster-loading">
				<?php echo __('Generating search cluster...');  ?>
				</div>
			</div>
			
			<script type="text/javascript">
				$('document').ready( function() {
					$.ajax({
						url: 'index.php?p=clustering&q=<?php echo urlencode($criteria); ?>',
						type: 'GET',
						success: function(data, status, jqXHR) {
							$('#search-cluster').html(data);
						}
					});
				});
			</script>
			<?php } ?>
		</div>
	
		<div class="result_search">
		    <div class="resultiner">
			<?php echo $main_content; ?>
			<div class="clear">&nbsp;</div>
		    </div>
		</div>
	</div>

<!-- ANGGOTA -->
        <?php } elseif($p == 'member') { ?>
	<div id="main">
	    <div class="sidebar">
		<div class="tagline">
		    <?php echo __('Information'); ?>
		</div>
		<div class="info">
		    <?php echo $info; ?>
		</div>
		<?php if (utility::isMemberLogin()) { ?>
		<div class="tagline">
		    <?php echo __('User Login'); ?>
		</div>
		<div class="info">
		    <?php echo $header_info; ?>
		</div>
		<?php } ?>
	    </div>
	    
	    <div  class="nduwur">
		    <a class="back" href="javascript: history.back();">
			<img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/img/back.png" alt="" width="40" height="40">
		    </a>
		    <span><?php echo __('Member Area'); ?></span>
	    </div>
    
	    <?php include ("nav.php") ?>
	    <div class="section">
		<div class="collections-list">
		    <?php echo $main_content; ?>
		    <div class="clear">&nbsp;</div>
		</div>
	    </div>
	</div>

<!-- DETAIL SPESIFIK -->
        <?php } elseif(isset($_GET['p'])) {
        if ($_GET['p'] == 'show_detail') { ?>

        <?php echo $main_content; ?>

        <?php } else { ?>

<!-- INFO & HELP -->
        <div id="main">
	<div  class="nduwur">
	    <a class="back" href="javascript: history.back();">
		<img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/img/back.png" alt="" width="40" height="40">
	    </a>
	    <span><?php echo $page_title; ?></span>
	</div>
	<?php include ("nav.php") ?>
	<div class="section">
	    <?php echo $main_content; ?>
	</div>
	</div>
        <?php } ?>
           
<!-- BERANDA --> 
        <?php }else{ ?>
	<div id="header">
	    <?php if (utility::isMemberLogin()) { ?>
	    <a href="#">
		<div id="h-photo">
		<?php
		    $_mid = $_SESSION['mid'];
		    $query_foto =  $dbs->query("SELECT member_image FROM member WHERE member_id='$_mid'");
		    $img = $query_foto->fetch_assoc();
		    echo '<img src="./images/persons/'.$img['member_image'].'"/>';
		?>
		</div>
	    </a>
	    <div id="libname"><?php echo $_SESSION['m_name']; ?></div>
	    <div id="libsubname"><i><?php echo $_SESSION['m_email']; ?></i></div>
	    <?php }else{ ?>
	    <a href="index.php"><div id="logo"></div></a>
	    <div id="libname"><?php echo $sysconf['library_name']; ?></div>
	    <div id="libsubname"><?php echo $sysconf['library_subname']; ?></div>
	    <?php } ?>
	</div>
	<div id="slims">SLiMS</div>
	<div id="search">
	    <form name="advSearchForm" id="advSearchForm" action="index.php" method="get">
		<button id="submit-button-home" type="submit" value="search" name="search" /></button>
		<input type="text" name="keywords" id="keyword" x-webkit-speech="x-webkit-speech"/>
	    </form>
	</div>
	<div id="start-menu">
	    <div class="layer bg1"><img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/img/Bottom.png"></div>
	    <div class="layer"><img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/img/Middle.png"></div>
	    <div class="layer" id="menu-list"><?php include ('nav_metro.php'); ?></div>
	    <div class="navArrow arrowRight">
	</div>
        <?php } ?>
	</div>
	<?php if($_COOKIE['admin_logged_in'] == 1){ ?>
	<div id="theme" class="sidepage">
	    <div class="titleSide">
		<a class="back" style="position:absolute; top:20px; left:20px;" href="javascript: history.back();"><img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/img/back.png" alt="" width="30" height="30"></a>
		<span><?php echo __('Personalization'); ?></span>
		</div>
		    <ul>
			<li id="default"><div class="prev_bg default"><i></i></div><a>Default</a></li>
			<li id="pink"><div class="prev_bg pink"><i></i></div><a>Pink</a></li>
			<li id="red"><div class="prev_bg red"><i></i></div><a>Red</a></li>
			<li id="orange"><div class="prev_bg orange"><i></i></div><a>Orange</a></li>
			<li id="green"><div class="prev_bg green"><i></i></div><a>Green</a></li>
			<li id="blue"><div class="prev_bg blue"><i></i></div><a>Blue</a></li>
			<li id="yellow-dark"><div class="prev_bg yellowDark"><i></i></div><a>Yellow Dark</a></li>
			<li id="green-dark" ><div class="prev_bg greenDark"><i></i></div><a>Green Dark</a></li>
			<li id="blue-dark"><div class="prev_bg blueDark"><i></i></div><a>Blue Dark</a></li>
			<li id="orange-grey"><div class="prev_bg orangeGrey"><i></i></div><a>Orange Grey</a></li>
		    </ul>
		<div class="loading"></div>
	</div>
	<?php } ?>
	<div class="pop">
	    <div class="popMask"></div>
	    <div class="popWrap">
	    <div class="popiner">
		<div class="login">
		    <div class="popHeader"><?php echo __('Librarian LOGIN') ?></div>
		    <form action="index.php?p=login" method="post" id="LibrarianForm">
                        <div class="login_input"><span>Username</span><input type="text" name="userName" id="userName" class="login_input" /></div>
                        <div class="login_input"><span>Password</span><input type="password" name="passWord" class="login_input" /></div>
                        <div class="popButton">
                        <input type="submit" name="logMeIn" value="<?php echo __('Login'); ?>" class="loginButton" />
			<div class="cancel loginButton">Cancel</div>
                        </div>
                    </form>
		</div>
	    </div>
	    </div>
	</div>
    </body>
</html>