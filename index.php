<?php

	if(isset($_GET['page']) AND !empty($_GET['page'])){
	    $page = $_GET['page'];
	}else{
	    $page = "home";
	}
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="content-language" content="zh-tw" />
		
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/hao.css">

		<link rel="icon" href="images/favicon.ico">
		<title>電子薄膜實驗室</title>
	</head>
	<body>
		<div class="row red-line"></div>
		<div class="container-hao">
			<?php include('_header.php'); ?>
			<?php include('_nav.php'); ?>
		</div>
		<div class="row bgImg">
			<div class="container-hao">
				<div class="content">			
					<?php 
						switch($page){  
							case "home";
								include('home.php');
								break;
							case "professor";
								include('professor.php');
								break;
							case "research";
								include('research.php');
								break;
							case "member";
								include('member.php');
								break;
							case "instrument";
								include('instrument.php');
								break;
							case "life";
								include('life.php');
								break;
						}
					?>
				</div>
			</div>
		</div>
		<?php include('_footer.php'); ?>
	</body>
</html>
