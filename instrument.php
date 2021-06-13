<?php
	$memberData = array(
		array('IMG_1.jpg', '', ''),
		array('IMG_2.jpg', '', ''),
		array('IMG_3.jpg', '', ''),
		array('IMG_4.jpg', '', ''),
		array('IMG_5.jpg', '', ''),
		array('IMG_6.jpg', '', ''),
		array('IMG_7.jpg', '', ''),
		array('IMG_8.jpg', '', ''),
		array('IMG_9.jpg', '', ''),
		array('IMG_10.jpg', '', ''),
		array('IMG_11.jpg', '', ''),
		array('IMG_12.jpg', '', ''),
		array('IMG_13.jpg', '', ''),
		array('IMG_14.jpg', '', ''),
		array('IMG_15.jpg', '', ''),
		array('IMG_16.jpg', '', ''),
		array('IMG_17.jpg', '', ''),
		array('IMG_18.jpg', '', ''),
		array('IMG_19.jpg', '', ''),
		array('IMG_20.jpg', '', ''),
		array('IMG_21.jpg', '', ''),
		array('IMG_22.jpg', '', ''),
		array('IMG_23.jpg', '', ''),
		array('IMG_24.jpg', '', ''));

	for ( $i=0 ; $i<ceil(count($memberData)/4) ; $i++ ) {
		for ( $j=0 ; $j<4 ; $j++ ) {
			echo '<img class="imImg" src="images/instrument/'.$memberData[$i*2+$j][0].'">';
		}
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