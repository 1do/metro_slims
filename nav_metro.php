<div id="navHome">
	<div class="navHomeiner">
		<ul class="metro">
			<li class="box-s1 ho">
				<a class="box" href="index.php"><span style="top:10px; width:240px; font-size:11pt;"><?php echo $info; ?></span>
					<span style="bottom:45px;"><img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/img/home.png" alt="" width="40" height="40"></span>
				</a>
			</li>
			
			<li class="box-s2 in">
				<a class="box" href="index.php?p=libinfo">
					<span><?php echo __('Library Information'); ?></span>
					<img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/img/info.png" alt="" width="90" height="90">
				</a>
			</li>
			
			<li class="box-s2 me">
				<a class="box" href="index.php?p=member">
					<span><?php echo __('Member Area'); ?></span>
					<img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/img/android.png" alt="" width="90" height="90">
					<img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/img/android.png" alt="" width="90" height="90">
				</a>
			</li>
							
			<li class="box-s2 ad">
				<a class="box" href="#advSearch">
					<span><?php echo __('Advanced Search'); ?></span>
					<img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/img/search-m.png" alt="" width="90" height="90">
				</a>
			</li>
			
			<li class="box-s2 he">
				<a class="box" href="index.php?p=help">
					<span><?php echo __('Help on Search'); ?></span>
					<img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/img/help.png" alt="" width="90" height="90">
				</a>
			</li>
			
			<li class="box-s2 gb">
				<a class="box" href="index.php?p=visitor" target="blank">
					<span><?php echo __('Visitor Counter'); ?></span>
					<img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/img/gb.png" alt="" width="90" height="90">
				</a>
			</li>
			
			<li class="box-s2 ho">
				<a class="box" href="index.php?p=peta" target="blank">
					<span>Map</span>
					<img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/img/peta.png" alt="" width="90" height="90">
				</a>
			</li>
			
			<li class="box-s2 lo">
				<?php if($_COOKIE['admin_logged_in'] == 1){ ?>
				<a class="box" href="index.php?p=login">
					<?php }else{ ?>
				<a class="box" href="#" id="libLogin">
					<?php } ?>
					<span><?php echo __('Librarian LOGIN')?></span>
					<img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/img/lock.png" alt="" width="90" height="90">
				</a>
			</li>
			
			<li class="box-s2 lg">
				<a class="box lang" href="#bahasa">
					<span><?php echo __('Select Language'); ?></span>
					<img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/img/sound.png" alt="" width="90" height="90">
				</a>
			</li>
			
			<li class="box-s2 cl">
				<a class="box">
					<span>Clock</span>
					<div id="jam-menit"
					     style="
					     font-size:24px;
					     color:#fff;
					     text-align:center;
					     padding:5px;
					     cursor:pointer;
					     ">
						
					</div>
					
					<div id="detik"
					     style="
					     font-size:82px;
					     color:#fff;
					     text-align:center;
					     padding: 0 5px 5px 5px;
					     margin-top:-10px;
					     cursor:pointer;
					     "></div>
				</a>
			</li>
																									
		<li class="box-s1 in">
			<a class="box" href="index.php"><span style="top:10px; width:240px; font-size:9pt;">This software and this template are released Under GNU GPL License Version 3 <br/><br/> The Winner in the Category of OSS Indonesia ICT Award 2009</span>
				<span style="bottom:45px;"><img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/img/logo-inaicta.png" alt=""></span><span id="inyong">template by ido alit</span>
			</a>
		</li>
		<?php if($_COOKIE['admin_logged_in'] == 1){ ?>
		<li class="box-s2 lg">
			<a class="box lang" href="#theme">
				<span><?php echo __('Personalize'); ?></span>
				<img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/img/windows.png" alt="" width="90" height="90">
			</a>
		</li>
		<?php } ?>
		</ul>
	</div>
	<div class="navHomeiner navHome-2">
		<ul class="metro">
			<li class="box-s2 fb">
				<a class="box" href="http://www.facebook.com/groups/senayan.slims/" target="blank">
					<span>Facebook</span>
					<img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/img/facebook.png" alt="" width="90" height="90">
				</a>
			</li>
			
			<li class="box-s2 in">
				<a class="box" href="http://twitter.com/#!/slims_official" target="blank">
					<span>Twitter</span>
					<img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/img/twitter.png" alt="" width="90" height="90">
				</a>
			</li>
			
			<li class="box-s2 yt">
				<a class="box" href="http://www.youtube.com/user/senayanslims" target="blank">
					<span>Youtube</span>
					<img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/img/youtube.png" alt="" width="90" height="90">
				</a>
			</li>
			
			<li class="box-s2 me">
				<a class="box" href="https://github.com/slims/" target="blank">
					<span>Github</span>
					<img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/img/github.png" alt="" width="90" height="90">
				</a>
			</li>
			
			<li class="box-s2 he">
				<a class="box" href="http://slims.web.id/forum/" target="blank">
					<span>Forum</span>
					<img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/img/forum.png" alt="" width="90" height="90">
				</a>
			</li>
		</ul>
	</div>
	<div class="navHomeiner navHome-3">
		<ul class="metro">
			<?php
			$query_string = "SELECT biblio_id, sor, image, title FROM biblio WHERE promoted='1'";
			$query = $dbs->query($query_string);
			while($data = $query->fetch_assoc()){
				echo '<li class="box-s1 in">
						<a title="'.$data['title'].'" class="box" href="index.php?p=show_detail&id='.$data['biblio_id'].'">
						<span class="navTitle"><p>'.$data['title'].'</p><i>'.$data['sor'].'</i></span>
						<img alt="'.$data['title'].'" src="./images/docs/'.$data['image'].'">
						</a>
					</li>';
			}
			$q_row = $dbs->query("SELECT COUNT(*) FROM biblio WHERE promoted='1'");
			$d_row = $q_row->fetch_row();
			$t_prom = $d_row[0];
			echo '<div id="t_prom">'.$t_prom.'</div>';
			?>
		</ul>
	</div>
</div>