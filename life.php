<?php
	$photo = array(
					array('2014', '實驗室出遊', '20140813_實驗室出遊_1.jpg'),
					array('2014', '實驗室出遊', '20140813_實驗室出遊_2.jpg'),
					array('2014', '實驗室出遊', '20140813_實驗室出遊_3.jpg'),
					array('2014', '實驗室出遊', '20140813_實驗室出遊_4.jpg'),
					array('2014', '實驗室出遊', '20140813_實驗室出遊_6.jpg'),
					array('2014', '實驗室出遊', '20140813_實驗室出遊_8.jpg'),
					array('2014', '實驗室出遊', '20140813_實驗室出遊_9.jpg'),

					array('2015', '淡江遊', '20150117_淡江遊_0.jpg'),
					array('2015', '淡江遊', '20150117_淡江遊_1.jpg'),
					array('2015', '淡江遊', '20150117_淡江遊_2.jpg'),
					array('2015', '淡江遊', '20150117_淡江遊_3.jpg'),
					array('2015', '淡江遊', '20150117_淡江遊_4.jpg'),

					array('2016', '臺東出遊', '2016_臺東實驗室出遊_1.jpg'),
					array('2016', '臺東出遊', '2016_臺東實驗室出遊_2.jpg'),
					array('2016', '臺東出遊', '2016_臺東實驗室出遊_3.jpg'),
					array('2016', '臺東出遊', '2016_臺東實驗室出遊_4.jpg'),
					array('2016', '臺東出遊', '2016_臺東實驗室出遊_5.jpg'),
					array('2016', '臺東出遊', '2016_臺東實驗室出遊_6.jpg'),
					array('2016', '臺東出遊', '2016_臺東實驗室出遊_7.jpg'),

					array('2020', '基隆瑞芳遊', '2020_實驗室出遊_基隆瑞芳_1.jpg'),
					array('2020', '基隆瑞芳遊', '2020_實驗室出遊_基隆瑞芳_2.jpg'),
					array('2020', '基隆瑞芳遊', '2020_實驗室出遊_基隆瑞芳_3.jpg'),
					array('2020', '基隆瑞芳遊', '2020_實驗室出遊_基隆瑞芳_4.jpg'),
					array('2020', '基隆瑞芳遊', '2020_實驗室出遊_基隆瑞芳_5.jpg'),
					array('2020', '基隆瑞芳遊', '2020_實驗室出遊_基隆瑞芳_7.jpg'));


?>

<div class="offset-2" style="height: 570px;">
	<div class="swiper-container main-slider loading">
		<div class="swiper-wrapper">
			<?PHP
				for ($i=0; $i<count($photo); $i++) {
					
					echo '<div class="swiper-slide">';
						echo '<figure class="slide-bgimg" style="background-image:url(images/life/travel/'.$photo[$i][2].')">';
							echo '<img src="images/life/travel/'.$photo[$i][2].'" class="entity-img" />';
						echo '</figure>';
						echo '<div class="content">';
							echo '<p class="title">'.$photo[$i][0].'</p>';
							echo '<span class="caption">'.$photo[$i][1].'</span>';
						echo '</div>';
					echo '</div>';
				}
			?>

		</div>
		<div class="swiper-button-prev swiper-button-white"></div>
		<div class="swiper-button-next swiper-button-white"></div>
	</div>

	<div class="swiper-container nav-slider loading">
		<div class="swiper-wrapper" role="navigation">
			<?PHP
				for ($i=0; $i<count($photo); $i++) {
					$bug_i = $i+4;
					if ($bug_i>=count($photo)){$bug_i=$bug_i-count($photo);}
					echo '<div class="swiper-slide">';
						echo '<figure class="slide-bgimg" style="background-image:url(images/life/travel/'.$photo[$bug_i][2].')">';
							echo '<img src="images/life/travel/'.$photo[$bug_i][2].'" class="entity-img" />';
						echo '</figure>';
						echo '<div class="content">';
							echo '<p class="title">'.$photo[$bug_i][0].'</p>';
						echo '</div>';
					echo '</div>';
				}
			?>
		</div>
	</div>
</div>