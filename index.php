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

		<!-- <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script> -->
		<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.js"></script>


		<link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.0/css/swiper.css" rel="stylesheet" />
		<link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.0/css/swiper.min.css" rel="stylesheet" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.0/js/swiper.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.0/js/swiper.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/life.css">
		
		<script type="text/javascript" async="" src="js/life.js"></script>
		



		<link rel="icon" href="images/favicon.ico">
		<title>電子薄膜實驗室</title>
	</head>


	<body>
		<div class="container-hao">
			<?php include('_header.php'); ?>
			<?php include('_nav.php'); ?>
		</div>
		<div class="row">
			<div class="container-hao">
				<div class="ETF_Main_content">			
					<?php 
						include('_breadcrumb.php');
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
