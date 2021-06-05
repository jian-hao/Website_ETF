<div class="container">
	<a></a>
</div>

<?php
	$memberData = array(
					array(1, '黃國碩', '博四', 'teen1221@gmail.com', '0912-987524'),
					array(2, '劉  韋', '博四', 'E34013233@gmail.com', '0988-739011'),
					array(3, '林思維', '博三', 'woodie305@gmail.com', '0970-226267'),
					array(4, '孫振偉', '博三', 'v0201805@gmail.com', '0933-255150'),
					array(5, '鄭凱文', '博二', 'kelvinzh010196@gmail.com', '0916-899534'),
					array(6, '沈子豪', '博二', 'raes4015@gmail.com', '0988-123957'),
					array(7, '王  虹', '博一', 'hwsh110050@gmail.com', '0984-528036'),
					array(8, '龔成浩', '博一', 'derrick8649@gmail.com', '0924-112293'),
					array(9, '白承洋', '碩二', 'limit4718@gmail.com', '0973-077619'),
					array(10, '趙睿霖', '碩一', 'willy099213@gmail.com', '0906-069459'),
					array(11, '陳秉暄', '碩一', 'sunnys3635@gmail.com', ''),
					array(12, '賴昱沅', '碩一', 'ap16726997@gmail.com', ''));

	for ( $i=0 ; $i<ceil(count($memberData)/4) ; $i++ ) {
		
		echo '<div class="wrapper">';
	    echo '<div class="cols">';
		for ( $j=0 ; $j<4 ; $j++ ) {
			echo '<div class="col" ontouchstart="this.classList.toggle(\'hover\');">';
			echo '<div class="container">';
			echo '<div class="front" style="background-image: url(images/member/'.($i*4+$j+41).'.png)">';
			echo '<div class="inner"> <span></span></div>';
			echo '</div>';
			echo '<div class="back">';
			echo '<div class="inner">';
			echo '<p>'.$memberData[$i*4+$j][2].'</p>';
			echo '<span>E-mail：'.$memberData[$i*4+$j][3].'</span>';
			echo '</div>';
			echo '</div>';
			echo '</div>';
			echo '</div>';
		}
		echo '</div>';
		echo '</div>';
	}
?>