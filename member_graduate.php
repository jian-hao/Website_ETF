<div class="container">
	<img src="images/graduate.png"/> 
</div>

<div class="allbrand">
	<div class="brand">
		<?php
			$memberData = array(
				array(1, '謝育忠', '電遷移對純錫導線晶粒旋轉之研究', 97),
				array(0, '陳銘訓', '液相錫銀鉍銦無鉛銲料與銅基材反應之研究', 96),
				array(0, '蕭秋男', '以同步輻射臨場量測電遷移對純錫導線應力分佈之研究', 97),
				array(0, '孫國浩', '無鉛銲料錫銀鉍銦與銅電極之電遷移研究', 97),
				array(0, '丁怡真', '以表面處理及塗佈奈米粒子抑制錫晶鬚生長', 97),
				array(0, '楊凱雯', '鋁鍺薄膜封裝研究', 97),
				array(0, '蔡鈞揚', '鋁(銅)與鎳混合導線於矽通孔製程之電遷移現象研究', 98),
				array(0, '江昱彥', '無鉛銲料錫銀銦與銅基板的界面反應', 99),
				array(0, '林岱瑩', '無鉛銲料與碲化鉍基材之界面反應研究', 99),
				array(0, '葉昭男', '鋁鍺雙層薄膜之擴散行為與金屬誘發結晶現象研究', 99),
				array(0, '羅立晨', '熱電材料與擴散阻障層在電流影響下的界面反應研究', 100),
				array(0, '柯昌延', '錫碲擴散偶之擴散阻障層界面反應', 100),
				array(1, '林揚益', '高摻雜之二氧化錫薄膜能隙窄化現象及氧化銦薄膜之應力量測與探討', 101),
				array(1, '蘇建豪', '以表面處理控制自發性晶鬚生長及殘留應力對晶鬚生長動力學之影響', 102),
				array(0, '洪嘉宏', '無鉛銲料與添加鈀層之無電鍍鈷基材界面反應研究', 101),
				array(0, '簡伯因', '熱電效應對碲化鉍系統與擴散阻障層之界面反應研究', 101),
				array(0, '陳亭均', '無電鍍Ni-P與p型Bi0.4Sb1.6Te3材料之界面反應及熱電性質探討', 101),
				array(1, '徐學賢', '微銲點之微結構研究與同步輻射X光量測於先進構裝之應用', 102),
				array(0, '林能億', '無鉛銲料與擴散阻障層於熱電材料之推力測試研究', 102),
				array(0, '張家豪', '共濺鍍鋁鍺薄膜之接合特性研究', 102),
				array(0, '黃俊皓', '無電鍍鈷基材與無鉛銲料於熱退火下之界面反應研究', 102),
				array(1, '鄒立為', '奈米結構透明導電氧化材料之應用', 103),
				array(1, '歐陽曜聰', '介穩態奈米結晶矽鍺薄膜之物性研究與應用', 103),
				array(1, '黃怡婷', '微銲點受電遷移影響之界面生長機制及晶向分析', 104),
				array(0, '蔡宜伶', '無鉛銲料與無電鍍鈷基板於多次迴焊之界面反應與可靠度測試', 103),
				array(1, '陳灝', '同步輻射X光量測錫膜應力對錫晶鬚生長動力學之影響', 104),
				array(1, '林柏丞', '共濺鍍銅鈦薄膜之相分離演化機制與其對機械性質於3DIC接合的影響', 105),
				array(0, '李映賜', '無電鍍鎳磷層應用於熱電材料與無鉛銲料之界面研究', 104),
				array(1, '林伯誠', '原子層沉積成長氧化物薄膜應用於氧化鋅奈米柱陣列電容器', 105),
				array(1, '陳志豪', '新式低溫合金焊料之開發與界面反應探討及可靠度分析', 105),
				array(0, '黃俊哲', '銦鉍合金低溫銲料與銅基材之界面反應研究', 105),
				array(0, '鐘元亨', '添加微量錫銀銅合金之銅薄膜與銅基板之接合研究', 105),
				array(1, '謝弦謙', '無電鍍鈷擴散阻障層應用於中溫碲化鉛熱電模組之研究', 106),
				array(0, '江政諭', '銦鉍銲料與銅基板之界面反應與接點強度測試', 106),
				array(1, '曾讚憲', '新式抗大氣腐蝕之表面處理層開發並應用於高可靠度元件', 107),
				array(1, '林玟志', '低溫銅燒結及定向貼附機制探討', 107),
				array(0, '沈怡廷', '探討電鍍與無電鍍鎳鈀金表面處理於硫氣環境之腐蝕行為與可靠度分析', 107),
				array(1, '王峻賢', '無電鍍鈷擴散阻障層於碲化鉍熱電模組之研究', 108),
				array(0, '王毓謙', '碲化鉛熱電模組接點之材料研究', 108),
				array(0, '陳映竹', '銻化鈷薄膜熱電熱時效之研究', 108));
			for ( $i=0 ; $i<40 ; $i++ ) {
				if ($memberData[$i][0]) {
					echo '<ul><img alt="</br><p>博士</p></br>第'.$memberData[$i][3].'級 </br></br>畢業論文：</br>'.$memberData[$i][2].'" src="images/member/'.($i+1).'.png" /></ul>';
				}
				else{
					echo '<ul><img alt="</br><p>碩士</p></br>第'.$memberData[$i][3].'級 </br></br>畢業論文：</br>'.$memberData[$i][2].'" src="images/member/'.($i+1).'.png" /></ul>';
				}
				
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