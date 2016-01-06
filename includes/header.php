<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Email Zilla - <?php echo $pagetitle; ?></title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    
    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link href="assets/css/main.css" rel="stylesheet" />

    <link href="assets/owl/owl.carousel.css" rel="stylesheet" />
    <link href="assets/owl/owl.theme.css" rel="stylesheet" />
    <link href="assets/css/animate.css" rel="stylesheet"/>

    <link href="assets/css/bootstrap-select.min.css" rel="stylesheet"/>

    <!-- list page stylesheet -->
    <link href="assets/css/liststyle.css" rel="stylesheet" />
   
    <!-- list page stylesheet -->   

    
</head>
<body> 

<div class="wrapper">
    <div class="menu-wrap">  
    	<div class="menu">
            <div class="logo">
                <a href="index.php" class="simple-text">
                    Emailzilla
                </a>
            </div>
                       
            <ul class="nav">
                <li class="active">
                    <a href="index.php">
                        <i class="pe-7s-graph"></i> 
                        <p>Dashboard</p>
                    </a>            
                </li>
                <li>
                    <a href="campaigns.php">
                        <i class="pe-7s-user"></i> 
                        <p>Campaigns</p>
                    </a>
                </li> 
                <li>
                    <a href="lists.php">
                        <i class="pe-7s-note2"></i> 
                        <p>Lists</p>
                    </a>        
                </li>
                <li>
                    <a href="domains.php">
                        <i class="pe-7s-news-paper"></i> 
                        <p>Domains</p>
                    </a>        
                </li>
                <li>
                    <a href="creatives.php">
                        <i class="pe-7s-news-paper"></i> 
                        <p>Creatives</p>
                    </a>        
                </li>
                <li>
                    <a href="reports.php">
                        <i class="pe-7s-science"></i> 
                        <p>Reports</p>
                    </a>        
                </li>
            </ul> 
    	</div>
        <button class="close-button" id="close-button">Close Menu</button>
    </div>
    <button class="menu-button" id="open-button">Open Menu</button>
    <div class="content-wrap">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">    
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <?php echo"<a class='navbar-brand' href='#'>".$pagename."</a>"; ?>

                    <?php 
                    if(isset($_REQUEST['listid'])){

$json = file_get_contents('listdata.json');
$obj = json_decode($json, true);
$listdata = $obj['list'];
$currentlistid = $_REQUEST['listid'] - 1; //to acheived for array
$listname = $listdata[$currentlistid]['listname'];

                        echo"<div class='navbar-brand'>>&nbsp;&nbsp;<span id='innerpage' href='#'>".$listname."</span></div>";
                    }
                   ?> 
                </div>
                <div class="collapse navbar-collapse">       
                    
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    demouser@email.com
                                    <b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Account Settings</a></li>
                                <li><a href="#">Edit my Profile</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Log out</a></li>
                              </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>