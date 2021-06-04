<img class="rsImg" src="images/research/advanced electronic packaging.jpg">
<img class="rsImg" src="images/research/thermoelectric module reliability.jpg">
<div class="allresearch">
	<div class="research">		
		<ul><img alt="隨著科技的進步，電子產品皆走向輕薄短小，在微小尺寸下提高運算能力，將是電子構裝技術所需面臨的重要議題。本實驗室於此領域之研究包含銅接合技術、低溫接合材料及錫晶鬚之相關研究。" src="images/research/先.png" /></ul>
		<ul><img alt="熱電材料是一種能將電能與熱能相互轉換的材料，可將廢棄熱能直接轉換成電能，對於工廠或汽車所排放的廢熱進行回收發電是相當吸引人的應用。本實驗室研究熱電材料金屬電極與擴散阻障層之材料選擇，並從材料界面角度探討其與熱電性質關係。" src="images/research/熱.png" /></ul>
	</div>
</div>

<img class="rsImg" src="images/research/thin film for high reliability device.jpg">
<img class="rsImg" src="images/research/materials for photoelectric device.jpg">
<div class="allresearch">
	<div class="research">
		<ul><img alt="當金屬處在具有電解質水溶液之環境下，陽極處金屬先被氧化失去電子，接著電子使電解質中的物體還原，鬆散的氧化物使材料表面出現裂縫與孔洞，導致腐蝕反應持續進行。本實驗室研究各式處理層之機械性質，並且開發新式薄膜鍍層，以提高元件的可靠度。" src="images/research/高.png" /></ul>
		<ul><img alt="以共濺鍍製備矽鍺漸進能隙式太陽能薄膜電池，透過sputter機台，利用共濺鍍方式於玻璃基板上製備矽鍺薄膜，調控鍺在薄膜中的含量，以控制能階變化，藉此提高太陽能電池吸收效率；並經由同步輻射低掠角繞射，分析薄膜之微結構。" src="images/research/光.png" /></ul>
	</div>
</div>

<script type="text/javascript">

	//翻轉
	function brandAnimate(label) {

		if(label.find('.research em').length != 0) {
			return false;
		}

		// 對每個a標籤內部動態添加一個em標籤，並使其內容爲img的alt屬性內容
		label.find('.research ul').each(function() {
			$(this).append('<em class="text_research">' + $(this).find('img').attr('alt') + '</em>');
		});

		label.find('.research ul').hover(function() {

			// 滑鼠移入img標籤動畫變小
			$(this).find('img').stop().animate(
				{
					'height': 0,
					'top': '80px'
				}, 
				200, 
				function() {
					// em標籤出現
					$(this).hide().next().show();
					// em標籤動畫變大
					$(this).next().animate(
						{
						'height': '160px',
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
						'top': '80px'
					}, 
					200, 
					function() {

						// img標籤出現
						$(this).hide().prev().show();
						// img動畫變大
						$(this).prev().animate(
							{
								'height': '160px',
								'top': '0px'
							}, 
							200
						);
					}
				);
			}
		);
	}
	brandAnimate($('.allresearch'));
</script>