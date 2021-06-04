<div class="container">
	<img src="images/student.png"/> 
</div>
<div class="allbrand">
	<div class="brand">
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
			for ( $i=0 ; $i<12 ; $i++ ) {
				echo '<ul><img alt="</br></br><p>'.$memberData[$i][2].'</p></br></br>E-mail：'.$memberData[$i][3].'" src="images/member/'.($i+41).'.png" /></ul>';
			}
		?>
	</div>
</div>

<script type="text/javascript">

	//翻轉
	function brandAnimate(label) {

		if(label.find('.brand em').length != 0) {
			return false;
		}

		// 對每個a標籤內部動態添加一個em標籤，並使其內容爲img的alt屬性內容
		label.find('.brand ul').each(function() {
			$(this).append('<em class="text" style="padding: 50px;">' + $(this).find('img').attr('alt') + '</em>');
		});

		label.find('.brand ul').hover(function() {

			// 滑鼠移入img標籤動畫變小
			$(this).find('img').stop().animate(
				{
					'width': 0,
					'left': '175px'
				}, 
				200, 
				function() {
					// em標籤出現
					$(this).hide().next().show();
					// em標籤動畫變大
					$(this).next().animate(
						{
						'width': '350px',
						'left': '0px'
						}, 
						200
					);
				}
			);

			}, function() {

				// 滑鼠移出em標籤動畫變小
				$(this).find('em').animate(
					{
						'width': 0,
						'left': '175px'
					}, 
					200, 
					function() {

						// img標籤出現
						$(this).hide().prev().show();
						// img動畫變大
						$(this).prev().animate(
							{
								'width': '350px',
								'left': '0'
							}, 
							200
						);
					}
				);
			}
		);
	}
	brandAnimate($('.allbrand'));
</script>
<!--

$memberData = array(
				array(1', '黃國碩 博四', 'teen1221@gmail.com', '0912-987524'),
				array(劉  韋', '博四', 'E34013233@gmail.com', '0988-739011'),
				array(林思維', '博三', 'woodie305@gmail.com', '0970-226267'),
				array(孫振偉', '博三', 'v0201805@gmail.com', '0933-255150'),
				array(鄭凱文', '博二', 'kelvinzh010196@gmail.com', '0916-899534'),
				array(沈子豪', '博二', 'raes4015@gmail.com', '0988-123957'),
				array(王  虹', '博一', 'hwsh110050@gmail.com', '0984-528036'),
				array(龔成浩', '博一', 'derrick8649@gmail.com', '0924-112293'),
				array(白承洋', '碩二', 'limit4718@gmail.com', '0973-077619'),
				array(趙睿霖', '碩一', 'willy099213@gmail.com', '0906-069459'),
				array(陳秉暄', '碩一', 'sunnys3635@gmail.com', ''),
				array(賴昱沅', '碩一', 'ap16726997@gmail.com', ''));

	-->