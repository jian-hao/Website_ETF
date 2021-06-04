<?php

	if(isset($_GET['class']) AND !empty($_GET['class'])){
	    $page = $_GET['class'];
	}else{
	    $page = "home";
	}
	switch($page){  
		case "home";
			include('member_home.php');
			break;
		case "student";
			include('member_student.php');
			break;
		case "graduate";
			include('member_graduate.php');
			break;

	}

?>