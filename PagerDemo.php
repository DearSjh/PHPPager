<head>   
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   
<title>----分页演示-----</title>   
</head>   
<body>   
    <?php   
     include "PHPPager.php";   
	 error_reporting(7);
     $myPage=new pager(1300,intval(isset($_GET['page'])?$_GET['page']:1));   
     echo $myPage->GetPagerContent();   
    ?>   
</body>   
</html>   
