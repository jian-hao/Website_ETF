<?php
	if(isset($_GET['page']) AND !empty($_GET['page'])){
	    $page = $_GET['page'];
	}else{
	    $page = "home";
	}
	$pageList = array(
					array('professor', '教授簡介'),
					array('research', '研究領域'),
					array('member', '實驗室成員'),
					array('instrument', '設備儀器'),
					array('life', '生活集錦'));

	echo '<ul class="nav nav-tabs" id="nav-tab" role="tablist"style="font-size:24px;">';

	for ( $i=0 ; $i<5 ; $i++ ) {
		echo '<li class="nav-item">';

		if ($pageList[$i][0]==$page) {
			echo '<a class="nav-link active" href='.$_SERVER['PHP_SELF'].'?page='.$pageList[$i][0].'>'.$pageList[$i][1].'</a>';
		}
		else{
			echo '<a class="nav-link" href='.$_SERVER['PHP_SELF'].'?page='.$pageList[$i][0].'>'.$pageList[$i][1].'</a>';
		}

		echo '</li>';
	}
	
	echo '</ul>';


?>