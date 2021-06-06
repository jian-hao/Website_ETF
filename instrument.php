<?php
	$memberData = array(
		array('a.jpg', '先.png', '設備Ａ的說明區'),
		array('b.jpg', '先.png', '設備Ｂ的說明區'),
		array('c.jpg', '先.png', '設備Ｃ的說明區'),
		array('c.jpg', '先.png', '設備Ｄ的說明區'));
	for ( $i=0 ; $i<ceil(count($memberData)/4) ; $i++ ) {

		for ( $j=0 ; $j<4 ; $j++ ) {
			echo '<img class="imImg" src="images/instrument/'.$memberData[$i*2+$j][0].'">';
		}
		echo '<div class="allinstrument">';
		echo '<div class="instrument">';
		for ( $j=0 ; $j<4 ; $j++ ) {	
			echo '<ul><img alt="'.$memberData[$i*2+$j][2].'" src="images/instrument/'.$memberData[$i*2+$j][1].'" /></ul>';
		}
		echo '</div>';
		echo '</div>';
	}
?>

<script type="text/javascript">

	//翻轉
	function brandAnimate(label) {

		if(label.find('.instrument em').length != 0) {
			return false;
		}

		// 對每個a標籤內部動態添加一個em標籤，並使其內容爲img的alt屬性內容
		label.find('.instrument ul').each(function() {
			$(this).append('<em class="text_instrument">' + $(this).find('img').attr('alt') + '</em>');
		});

		label.find('.instrument ul').hover(function() {

			// 滑鼠移入img標籤動畫變小
			$(this).find('img').stop().animate(
				{
					'height': 0,
					'top': '50px'
				}, 
				200, 
				function() {
					// em標籤出現
					$(this).hide().next().show();
					// em標籤動畫變大
					$(this).next().animate(
						{
						'height': '100px',
						'top': '0px'
						}, 
						200
					);
				}
			);

			}, function() {

				// 滑鼠移出em標籤動畫變小
				$(this).find('em').animate(
					{
						'height': 0,
						'top': '50px'
					}, 
					200, 
					function() {

						// img標籤出現
						$(this).hide().prev().show();
						// img動畫變大
						$(this).prev().animate(
							{
								'height': '100px',
								'top': '0px'
							}, 
							200
						);
					}
				);
			}
		);
	}
	brandAnimate($('.allinstrument'));
</script>