<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<?php
			$pageList = array('professor'=>'教授簡介', 'research'=>'研究領域', 'member'=>'實驗室成員', 'instrument'=>'設備儀器', 'life'=>'生活集錦');
			$classList = array('student'=>'在校生', 'graduate'=>'畢業生');			

			if(isset($_GET['page']) AND !empty($_GET['page'])){				
			    $page = $_GET['page'];
			    if(isset($_GET['class']) AND !empty($_GET['class'])){				
				    $class = $_GET['class'];
				    echo '<li class="breadcrumb-item"><a href='.$_SERVER['PHP_SELF'].'>首頁</a></li>';
				    echo '<li class="breadcrumb-item"><a href='.$_SERVER['PHP_SELF'].'?page=member>'.$pageList[$page].'</a></li>';
				    echo '<li class="breadcrumb-item active" aria-current="page">'.$classList[$class].'</a></li>';
				}
				else{
					echo '<li class="breadcrumb-item"><a href='.$_SERVER['PHP_SELF'].'>首頁</a></li>';
					echo '<li class="breadcrumb-item active" aria-current="page">'.$pageList[$page].'</a></li>';
				}

			}
			else{
				echo '<li class="breadcrumb-item active" aria-current="page">首頁</a></li>';
			}
		?>
	</ol>
</nav>	
