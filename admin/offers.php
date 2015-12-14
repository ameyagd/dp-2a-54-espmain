<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Email Zilla </title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    
    <!--  Light Bootstrap Table core CSS    -->
    <link href="../assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

    <!--bootstrap select with search-->
     <link href="../assets/css/bootstrap-select.min.css" rel="stylesheet"/>

    <!--admin pages styles-->
    <link href="../assets/css/admin.css" rel="stylesheet" />


    <!--FILE UPLOAD-->

    <link href="../assets/fileupload/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
    
</head>
<body> 

<div class="wrapper">
    
    
    <div class="content-wrap">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">    
                <div class="navbar-header">
                    <h5 class='navbar-brand'>Offers</h5>
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









        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header clearfix">
                            <div class="btn-group" role="group" aria-label="...">
                              <button type="button" class="btn btn-default">List View</button>
                              <button type="button" class="btn btn-default">Thumbnail View</button>
                            </div>

                            <div class="pull-right">
                                <button type="button" class="btn btn-primary" id="addOfferBtn">Add New offer</button>
                            </div>
                        </div>
                        <div class="content">
                            <div class="col-md-12" id="addOfferSection">

                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#offer" aria-controls="offer" role="tab" data-toggle="tab" id="offerSettingTab">Offer</a></li>
                                    <li role="presentation"><a href="#creativeSettings" aria-controls="creativeSettings" role="tab" data-toggle="tab" id="creativeSettingTab">Creative Settings</a></li>
                                    <li role="presentation"><a href="#frameworkPages" aria-controls="frameworkPages" role="tab" data-toggle="tab" id="frameworkPagesTab">Framework Pages</a></li>
                                </ul>

                                <!--tab panes-->

                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="offer">
                                        <div class="clearfix">
                                            
                                            <div class="col-md-6">
                                                <div class="posRel">
                                                    <label>Offer name</label>
                                                    <input type="text" class="form-control" id="offerName">
                                                </div>

                                                <div class="posRel">
                                                    <label>Select Category</label>
                                                    <select class="form-control categorySelect" title='Choose one of the following...' data-live-search="true" id="offerCategory">
                                                        <option value="Finance">Finance</option>
                                                        <option value="Auto">Auto</option>
                                                        <option value="Baby Care">Baby Care</option>
                                                        <option value="Coupons">Coupons</option>
                                                    </select>
                                                </div>

                                                <div class="posRel">
                                                    <label>Select Sub Category</label>
                                                    <select class="form-control categorySelect" title='Choose one of the following...' data-live-search="true" id="offerSubCategory">
                                                        <option value="Finance">Finance</option>
                                                        <option value="Auto">Auto</option>
                                                        <option value="Baby Care">Baby Care</option>
                                                        <option value="Coupons">Coupons</option>
                                                    </select>
                                                </div>

                                                <div class="posRel">
                                                    <label>Select Template</label>
                                                    <select class="form-control categorySelect" title='Choose one of the following...' data-live-search="true" id="offerTemplate">
                                                        <option value="Email-cashbackCC-v1-nov2015">Email-cashbackCC-v1-nov2015</option>
                                                        <option value="Email-subprimeCC-v1-nov2015">Email-subprimeCC-v1-nov2015</option>
                                                        <option value="Email-lowInterestCC-v1-nov2015">Email-lowInterestCC-v1-nov2015</option>
                                                        <option value="Email-autoLoan-v1-nov2015">Email-autoLoan-v1-nov2015</option>
                                                    </select>
                                                </div>

                                                <div class="posRel">
                                                    <label>Status</label>
                                                    <div class="radioWrap">
                                                        <input type="radio" name="status" id="active" class="offerStatus" value="active">
                                                        <label for="active"><span></span> Active</label>

                                                        <input type="radio" name="status" id="inactive" class="offerStatus" value="inactive">
                                                        <label for="inactive"><span></span> Inactive</label>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-12 tabNxtBtn">
                                                <a href="#creativeSettings" id="offerNextBtn" class="btn btn-primary pull-right" aria-controls="creativeSettings" role="tab" data-toggle="tab">Next</a>
                                            </div>
                                            
                                            
                                        </div>
                                    </div><!--end offer tab pane-->


                                    <div role="tabpanel" class="tab-pane fade" id="creativeSettings">
                                        <div class="clearfix">
                                            <form id="addCreativeForm" class="tabForm clearfix">
                                                <div class="col-md-6">
                                                    <div class="posRel">
                                                        <label>Creative Name</label>
                                                        <input type="text" class="form-control" id="offerCreativeName">
                                                    </div>

                                                    <div class="posRel">
                                                        <label>HTML Content</label>
                                                        <textarea class="form-control" rows="20" id="offerMailerCode"> </textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <label>Upload Images</label>
                                                    <input id="emailImages" name="file-4[]" type="file" multiple class="file-loading">

                                                    <label>Previews</label>
                                                    <div class="row">
                                                        <div class="col-xs-6 col-md-3">
                                                            <a href="#" class="thumbnail">
                                                                <img src="..." alt="...">
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-6 col-md-3">
                                                            <a href="#" class="thumbnail">
                                                                <img src="..." alt="...">
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-6 col-md-3">
                                                            <a href="#" class="thumbnail">
                                                                <img src="..." alt="...">
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-6 col-md-3">
                                                            <a href="#" class="thumbnail">
                                                                <img src="..." alt="...">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                

                                                <div class="col-md-12">
                                                    <a href="#frameworkPages" id="offerMailerNextBtn" class="btn btn-primary pull-right" aria-controls="frameworkPages" role="tab" data-toggle="tab">Next</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div><!--end Creatives tab pane-->


                                    <div role="tabpanel" class="tab-pane fade" id="frameworkPages">
                                        <div class="clearfix">
                                            
                                            <div class="col-md-12">
                                                <!-- Single button -->
                                                <div class="btn-group">
                                                  <button type="button" id="addFWPages" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Add pages <span class="caret"></span>
                                                  </button>
                                                  <ul class="dropdown-menu addFwUL">
                                                    <li id="liiiii"><a href="#" id="add_Mobile_Landing">Mobile Landing</a></li>
                                                    <li><a href="#" id="add_Mobile_Results">Mobile Results</a></li>
                                                    <li><a href="#" id="add_Mobile_Noresults">Mobile Noresults</a></li>
                                                    <li><a href="#" id="add_Tablet_Landing">Tablet Landing</a></li>
                                                    <li><a href="#" id="add_Tablet_Results">Tablet Results</a></li>
                                                    <li><a href="#" id="add_Tablet_Noresults">Tablet Noresults</a></li>
                                                  </ul>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-3">
                                                <ul class="nav nav-pills nav-stacked">
                                                  <li role="presentation" class="active"><a href="#landingPage" data-toggle="tab">Landing</a></li>
                                                  <li role="presentation"><a href="#resultsPage" data-toggle="tab">Results</a></li>
                                                  <li role="presentation"><a href="#noresultsPage" data-toggle="tab">Noresults</a></li>
                                                </ul>
                                            </div>

                                            <div class="col-md-6">
                                                <?php 
                                                    // ob_start(); 
                                                ?>
                                                

                                                <?php 

                                                    // $resultsCodeRaw = ob_get_clean(); 
                                                    // $resultsCodeJson=json_encode($resultsCodeRaw);

                                                    // $resultsCode=json_decode($resultsCodeJson)
                                                ?>

                                                    
                                                
                                                <div class="tab-content">
                                                    <!--LANDING TAB-->
                                                    <div class="tab-pane active" id="landingPage">
                                                        <textarea class="form-control" rows="25" id="landingCode">
                                                            <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
                                                            <html>
                                                            <stl_head>
                                                            <title><tag:page_title /></title>
                                                            <meta http-equiv="Content-Type" content="text/html; charset=<tag:charset />">
                                                            <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
                                                            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable = no">
                                                            <style type="text/css">
                                                            *{margin:0; padding:0}
                                                            a{text-decoration:none; outline:none}
                                                            a:hover{text-indent:0; cursor:pointer}
                                                            .clearfix:after{visibility: hidden;display:block;font-size: 0;content: " ";clear: both;height:0}
                                                            * html .clearfix{zoom:1} 
                                                            *:first-child+html .clearfix{zoom:1}

                                                            body{font-family:Arial, Helvetica, sans-serif; background:#ffffff}
                                                            .main-container{padding:296px 0 0}

                                                            .strip{padding:40px 0; background:#C7C7C7}
                                                            .frmSearch{width:615px; height:auto; position:relative; margin:0 auto}
                                                            .logo{width:100%; text-align:center; padding-bottom:15px; font-size:42px; color:#0074ff; line-height:40px; font-weight:bold; letter-spacing:-2px; font-family:Georgia, "Times New Roman", Times, serif}

                                                            .searchbox{width:601px; height:33px; padding:4px; background:url(<tag:image_path />/7828/srch.gif) 10px 11px no-repeat #fff; border:1px solid #d4d2cb; border-radius:5px}
                                                            .srch-txt{float:left; width:450px; height:33px; font-size:16px; line-height:33px; color:#414141; padding: 0 5px; margin-left:30px; border:none; outline:none}
                                                            .srch-btn{float:right; width:96px; height:33px; font-size:14px; color:#fff; border:none; border-radius:5px; background:#0992DD; outline:none; cursor:pointer}

                                                            .footer-nav{width: 100%; height:74px; text-align:center}
                                                            .footer-nav a{font-size:11px; line-height:74px; color:#333;  padding: 0 5px; text-decoration:underline}
                                                            .footer-nav a:hover{text-decoration: none;}
                                                            .custom-msg { background:#fdffec; border-top: 1px solid #ffe594; border-bottom: 1px solid #ffe594; color:#000000; text-align: center; font: 11px/14px Arial, Helvetica, sans-serif; position:absolute; width:100%; top:0; left:0}
                                                            .custom-msg a { text-decoration: none; color:#CC0000; font-size: 11px}
                                                            .custom-msg a:hover { text-decoration: underline}

                                                            .custom-footer-msg{width: 100%; height:74px; text-align:center}
                                                            .custom-footer-msg a{font-size:11px; line-height:74px; color:#333;  padding: 0 5px; text-decoration:underline}
                                                            .custom-footer-msg a:hover{text-decoration: none;}
                                                            @media only screen and (max-width:650px), only screen and (max-device-width: 640px) and (min-device-width : 320px)
                                                            {
                                                            .frmSearch{width:90%; padding:0}
                                                            .logo{width:100%; height:auto; text-align:center; margin:0; left:0}
                                                            .searchbox{width: auto}
                                                            .srch-txt{width:60%}
                                                            .srch-btn{width:20%}
                                                            input[type=submit]{-webkit-appearance: none}
                                                            }
                                                            @media only screen and (max-width:700px) and (min-device-width : 600px) and (orientation:portrait)
                                                            {
                                                                .logo{font-size:35px}
                                                            }
                                                            @media only screen and (max-width:640px) and (min-device-width : 320px) and (orientation:landscape)
                                                            {
                                                                .main-container{padding-top:94px}   
                                                                .logo{font-size: 28px; top:-91px}
                                                            }
                                                            @media only screen and (max-width:480px) and (min-device-width : 320px) and (orientation:portrait)
                                                            {
                                                                .main-container{padding-top:115px}  
                                                                .logo{font-size: 25px; line-height:27px; top:-78px}
                                                            }
                                                            </style>
                                                            <script language="JavaScript" type="text/javascript" src="<tag:jssource />"></script>
                                                            </stl_head>
                                                            <stl_body>
                                                            <tag:post_form_html />
                                                            <!-- sale notice start -->
                                                            <if:is_custom_message>
                                                            <div class="custom-msg"><tag:custom_message /></div>
                                                            </if:is_custom_message>
                                                            <div class="main-container">
                                                                <!--<div class="logo">Compare Loan Rates</div>-->
                                                                <div class="strip clearfix">
                                                                    <div class="frmSearch">
                                                                        <div class="searchbox">
                                                                            <search_form:1>
                                                                                <search_input:1 class="srch-txt" />
                                                                                <input type="submit" class="srch-btn" value="Search" />
                                                                            </search_form:1>
                                                                        </div>          
                                                                    </div>
                                                                </div>
                                                                <!--<div class="footer-nav">                
                                                                    <a href="#" onClick="return addbookmark('<tag:domain_name />');">Bookmark this page </a>|<a href="#" onClick="javascript: setAsHomePage(this, '<tag:domain_name />');"> Make this your Homepage</a>
                                                                </div>-->
                                                            </div>
                                                            <if:is_footer_custom_message> 
                                                                <div class="custom-footer-msg"><tag:footer_custom_message /></div>
                                                            </if:is_footer_custom_message>
                                                            <script language="javascript">
                                                            try{window.onload = document.searchform1.s.focus();}catch(e){};
                                                            </script>
                                                            </stl_body>
                                                            </html>
                                                        </textarea>
                                                    </div>





                                                    <!--RESULTS TAB-->
                                                    <div class="tab-pane" id="resultsPage">
                                                        <textarea class="form-control" rows="25" id="resultsCode">
                                                            <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                                                            <html xmlns="http://www.w3.org/1999/xhtml" >
                                                            <stl_head>
                                                            <meta http-equiv="Content-Type" content="text/html; charset=<tag:charset />">
                                                            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
                                                            <title><tag:page_title /></title>
                                                            <style type="text/css">
                                                            *{ margin:0; padding: 0 }
                                                            .clearfix:before,
                                                            .clearfix:after {content: '\0020';display: block;overflow: hidden;visibility: hidden;width: 0;height: 0}
                                                            .clearfix:after {clear: both}
                                                            .clearfix {zoom: 1}


                                                            body{-webkit-text-size-adjust:100%;font-family:Arial, Helvetica, sans-serif; background:#ffffff url(<tag:image_path />/9543/main.jpg) no-repeat center center;background-size: cover;background-attachment: fixed}
                                                            br{height:0;display: none}
                                                            a{text-decoration: none; outline: none}
                                                            a:hover{cursor: pointer}
                                                            img{border: none}

                                                            #wrapper{width:960px; margin:0 auto; padding-bottom: 15px}

                                                            .inner-spons-links {color: #2d2d2d; padding:120px 0 10px; font-size: 12px; font-weight: bold;text-transform: uppercase}
                                                            ul{list-style: none}
                                                            .results{ display: block; overflow:hidden; margin: 0 auto; width:960px; padding-bottom: 220px }
                                                            .results li{ display: block; overflow: hidden; margin: 0 0 20px 0; position: relative; overflow: hidden}
                                                            a .num{font-size: 45px; color: #2d2d2d; float: left; width: 90px; text-align: center; padding: 16px 0 0}

                                                            a.list{ word-wrap:break-word; display: block; overflow: hidden; padding:15px 0 15px 0px; border:1px solid #a9b5b8; background:#e6f7fb url(<tag:image_path />/9543/arrow.png) 96% center no-repeat;}
                                                            a:hover.list{background-color:#fdb938; border:1px solid #fed07a}

                                                            a .adTextWrap {float:left;width: 81%; padding: 7px 0px 7px 25px;  border-left: 1px solid #2d2d2d}

                                                            a.list .title{font-size: 25px;color: #2d2d2d; line-height: 30px; margin-bottom: 4px; font-weight: bold }
                                                            a.list .desc, a.list .sepr, a.list .url{color: #777e80;font-size: 14px; line-height: 20px}
                                                            a:hover .desc, a:hover .sepr, a:hover .url{color: #2d2d2d}

                                                            @media not all and (min-width: 980px){ 
                                                              #wrapper {width: 95%}
                                                              .results{width: auto}
                                                              .headIn{width: 95%}
                                                              a .adTextWrap {width: 77%}
                                                            }
                                                            @media not all and (min-width: 850px){ 
                                                              a .adTextWrap {width: 75%} 
                                                            }
                                                            @media not all and (min-width: 790px){
                                                              a .adTextWrap {width: 73%} 
                                                            }
                                                            @media not all and (min-width: 760px){ 
                                                              a .adTextWrap {width: 72%}
                                                            }
                                                            @media not all and (min-width: 740px){ 
                                                              body{background:#ffffff url(<tag:image_path />/9543/mobg.jpg) no-repeat center -45px;background-size: 100%}
                                                              a.list{background-color: #ffffff}
                                                            }
                                                            @media not all and (min-width: 665px){ 
                                                              a .adTextWrap {width: 68%}
                                                            }
                                                            @media not all and (min-width: 600px) { 
                                                              #wrapper{padding-top: 0}
                                                              .results li {margin-bottom: 8px}
                                                              .results .num {font-size: 25px; width: 40px; padding: 27px 0 0}
                                                              a .adTextWrap {padding:10px 0 10px 12px; width: 84%}
                                                              
                                                              a.list .title {font-size: 18px; line-height: 24px}
                                                              a.list .url {display: block}
                                                              a.list .desc {font-size: 14px; line-height: 19px; display: block}
                                                              .inner-spons-links {font-size: 11px; padding-top: 85px}
                                                              a.list .sepr {display: none}
                                                              a.list{padding:10px 0 10px 0;border:1px solid #000000;background-size:15px}
                                                              a:hover.list{border:1px solid #000000}
                                                              .results {padding-bottom: 0}
                                                            }
                                                            @media not all and (min-width: 560px){ 
                                                              a .adTextWrap {width: 81%}
                                                            }
                                                            @media not all and (min-width: 480px){
                                                              a .adTextWrap {width: 78%}
                                                            }
                                                            @media not all and (min-width: 410px){
                                                              a .adTextWrap {width: 73%}
                                                            }
                                                            @media not all and (min-width: 350px){
                                                              a .adTextWrap {width: 71%}
                                                            }
                                                            @media not all and (min-width: 320px){
                                                              .results li{background-image: none}
                                                              .results li:hover{background-image: none}
                                                              .results .num{display: none}
                                                              a.list{padding-left: 0}
                                                              a .adTextWrap, a:hover .adTextWrap {border-left: 0 none}
                                                            }
                                                            @media not all and (min-width: 318px){
                                                              a .adTextWrap {width: 85%}
                                                            }
                                                            </style>

                                                            <!--[if lte IE 8]>
                                                              <style>
                                                              body{background-position:top center}
                                                              </style>
                                                            <![endif]-->

                                                            <script language="JavaScript" type="text/javascript" src="<tag:jssource />"></script>
                                                            </stl_head>
                                                            <stl_body>
                                                            <tag:post_form_html />
                                                              
                                                                   <div id="wrapper">
                                                                       <div class="inner-spons-links">Sponsored Listings</div>
                                                                       <ul class="results">
                                                                           <if:ad_present1>
                                                                               <li>
                                                                                   <a href="<ad_href_url:1 />" target="_blank" class="list clearfix">
                                                                                       <div class="num"><span>1</span></div>   
                                                                                       <div class="adTextWrap">
                                                                                           <p class="title"><ad_title_text:1 /></p> 
                                                                                           <p class="desc"><ad_desc:1 /></p>
                                                                                           <p class="url"><ad_url_text:1 /></p>                               
                                                                                       </div>
                                                                                   </a>
                                                                               </li>
                                                                           </if:ad_present1>
                                                                           <if:ad_present2>
                                                                               <li>
                                                                                   <a href="<ad_href_url:2 />" target="_blank" class="list clearfix">
                                                                                       <div class="num"><span>2</span></div>
                                                                                       <div class="adTextWrap">
                                                                                           <p class="title"><ad_title_text:2 /></p> 
                                                                                           <p class="desc"><ad_desc:2 /></p>
                                                                                           <p class="url"><ad_url_text:2 /></p> 
                                                                                       </div>
                                                                                   </a>
                                                                               </li>
                                                                           </if:ad_present2>
                                                                           <if:ad_present3>
                                                                               <li>
                                                                                   <a href="<ad_href_url:3 />" target="_blank" class="list clearfix">
                                                                                       <div class="num"><span>3</span></div>
                                                                                       <div class="adTextWrap">
                                                                                           <p class="title"><ad_title_text:3 /></p> 
                                                                                           <p class="desc"><ad_desc:3 /></p>
                                                                                           <p class="url"><ad_url_text:3 /></p> 
                                                                                       </div>
                                                                                   </a>
                                                                               </li>
                                                                           </if:ad_present3>
                                                                       </ul>
                                                                   </div>
                                                                </stl_body>
                                                            </html>
                                                        </textarea>
                                                    </div>


                                                    <!--NO RESULTS TAB-->
                                                    <div class="tab-pane" id="noresultsPage">
                                                        <textarea class="form-control" rows="25" id="noresultsCode">
                                                            <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
                                                            <html>
                                                            <stl_head>
                                                            <title><tag:page_title /></title>
                                                            <meta http-equiv="Content-Type" content="text/html; charset=<tag:charset />">
                                                            <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
                                                            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
                                                            <style type="text/css">
                                                            *{margin:0; padding:0; font-family:Arial, Helvetica, sans-serif}
                                                            a {text-decoration:none; outline:none}
                                                            a img {border:none}
                                                            li {list-style:none}
                                                            .clear {clear:both; overflow:hidden; line-height:0; font-size:0; height:0}
                                                            .clearfix:after{visibility:hidden;display:block;font-size:0;content:" ";clear: both;height:0}
                                                            * html .clearfix{zoom:1}
                                                            *:first-child+html .clearfix{zoom:1}
                                                            a{text-decoration:none}
                                                            input{outline:none}

                                                            body{background:#fff; font-family:Arial, Helvetica, sans-serif}

                                                            .main-container{width:780px; margin: 0 auto; padding:150px 0 0}
                                                            /*.logo {text-align:center; font-size:30px; font-weight:bold; color:#0992DD; height:100px}*/
                                                            div.search-form{width:570px; height:70px; margin:0 auto; padding:30px 0 0 25px}
                                                            .text-search{width:416px; height:36px; font-size:20px; line-height:18px; padding:0 10px; float: left; outline:none}
                                                            .btn-search{width:96px; height:40px; margin:0 0 0 10px; cursor: pointer; float:left; font-size:14px; font-weight:bold; background:#FFD14B; color:#000; border:0; -webkit-appearance: none}
                                                            .popular-searches{width:780px; overflow: hidden}
                                                            .popular-searches h2{font-size:18px; color:#888; height: 38px; padding-left:30px}
                                                            .popular-searches h3{font-size:17px; color:#333; padding:0 0 10px 0;margin-bottom:10px; border-bottom:1px dotted #ccc}
                                                            .popular-searches ul{float: left; width:220px; padding-left:40px; list-style:none}
                                                            .popular-searches li{width:220px; float:left;background: url(<tag:image_path />/2777/list-marker.jpg) left 6px no-repeat; padding-left:22px;}
                                                            .popular-searches li a{font-size:16px; font-weight:bold; color:#0992DD; text-decoration:underline; display: block; line-height:30px}
                                                            .popular-searches li a:hover{text-decoration:none;}
                                                            .footer {text-align:center; color:#ccc; width:100%; padding:40px 0 0}
                                                            .footer a {color:#999; font-size:11px; text-decoration:none}
                                                            .footer a:hover {text-decoration:underline; color:#333}
                                                            .custom-msg { background:#fdffec; border-top: 1px solid #ffe594; border-bottom: 1px solid #ffe594; color:#000000; text-align: center; font: 11px/14px Arial, Helvetica, sans-serif; position:absolute; width:100%}
                                                            .custom-msg a { text-decoration: none; color:#CC0000; font-size: 11px; }
                                                            .custom-msg a:hover { text-decoration: underline; }
                                                            .nores {text-align:center; word-wrap:break-word; color:#000; font-size:12px; line-height:18px}
                                                            .nores span {font-size:14px; font-weight:bold; color:#666}

                                                            .no-results {text-align:center;color:#000;font-size:14px; padding:10px 0; width:95%; margin:0 auto}
                                                            .no-results span {font-weight:bold}
                                                            @media only screen and (max-width:780px), only screen and (max-device-width: 640px) and (min-device-width : 320px)
                                                            {
                                                            .main-container {width:90%; padding:12px 0 0}
                                                            /*.logo {height:auto; padding-bottom:10px}*/
                                                            .nores {padding-bottom:10px}
                                                            div.search-form{width:100%; height:auto; margin:0 auto; background:none; padding:0; border:0; box-shadow:none}
                                                            .text-search{width:65%; padding:0 5px; outline:none; margin:0}
                                                            .btn-search{width:28%; margin:0 0 0 2%}
                                                            .popular-searches h2 {padding:10px 0 0; text-align:center}
                                                            .popular-searches h3 {padding:15px 0 5px 0}
                                                            .popular-searches{width:100%; overflow: hidden; margin:0 auto; padding:0}
                                                            .footer {height:auto}
                                                            .footer a {line-height:40px; padding:20px 0 0}
                                                            }
                                                            </style>
                                                            <script language="JavaScript" type="text/javascript" src="<tag:jssource />"></script>
                                                            </stl_head>

                                                            <stl_body>
                                                            <tag:post_form_html />
                                                            <!-- sale notice start -->
                                                            <if:is_custom_message>
                                                            <div class="custom-msg"><tag:custom_message /></div>
                                                            </if:is_custom_message>
                                                                
                                                                <div class="main-container">
                                                                    <!-- <div class="logo"></div>  -->
                                                                    <p class="no-results">We were unable to find results for your search term <span>"<tag:display_query />"</span></p>
                                                                    <p class="nores">Please feel free to search our listings for anything else you may be looking for or check other popular topics that are trending below.</p>              
                                                                        <div class="search-form">
                                                                            <search_form:1>
                                                                                <search_input:1 class="text-search"  />                   
                                                                                <input name="go" value="Search" type="submit" class="btn-search" />   
                                                                            </search_form:1>             
                                                                        </div>
                                                                        
                                                                    <div class="popular-searches">
                                                                    <h2>Popular Searches</h2>
                                                                          <ul>                            
                                                                             <h3>Travel</h3>                 
                                                                             <li><manual_keyword:1 value="Low Airfares" /></li>
                                                                              <li><manual_keyword:2 value="Hotel Reservations" /></li>
                                                                              <li><manual_keyword:3 value="Car Rentals" /></li>
                                                                         </ul>
                                                                         
                                                                        <ul>  
                                                                            <h3>Shopping Deals</h3>
                                                                            <li><manual_keyword:6 value="Designer Shoes" /></li>
                                                                            <li><manual_keyword:7 value="Designer Handbags" /></li>
                                                                            <li><manual_keyword:8 value="Party Dresses" /></li>                          
                                                                        </ul>
                                                                        
                                                                        <ul> 
                                                                        <h3>Healthy Living</h3>                     
                                                                        <li><manual_keyword:11 value="Home Workouts" /></li>
                                                                        <li><manual_keyword:12 value="Weight Loss Diets" /></li>
                                                                        <li><manual_keyword:13 value="Nutrition Handbook" /></li>                           
                                                                        </ul>
                                                                        
                                                                    </div>   
                                                                </div>  
                                                            <script language="javascript">
                                                            try{window.onload = document.searchform1.s.focus();}catch(e){};
                                                            </script>
                                                            </stl_body>
                                                            </html>                                                            
                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <label>Upload Images</label>
                                                <input id="FWImages" name="fileadads[]" type="file" multiple class="file-loading">

                                                <label>Previews</label>
                                                <div class="row">
                                                    <div class="col-xs-6 col-md-4">
                                                        <a href="#" class="thumbnail">
                                                            <img src="..." alt="...">
                                                        </a>
                                                    </div>
                                                    <div class="col-xs-6 col-md-4">
                                                        <a href="#" class="thumbnail">
                                                            <img src="..." alt="...">
                                                        </a>
                                                    </div>
                                                    <div class="col-xs-6 col-md-4">
                                                        <a href="#" class="thumbnail">
                                                            <img src="..." alt="...">
                                                        </a>
                                                    </div>
                                                    <div class="col-xs-6 col-md-4">
                                                        <a href="#" class="thumbnail">
                                                            <img src="..." alt="...">
                                                        </a>
                                                    </div>
                                                    <div class="col-xs-6 col-md-4">
                                                        <a href="#" class="thumbnail">
                                                            <img src="..." alt="...">
                                                        </a>
                                                    </div>
                                                    <div class="col-xs-6 col-md-4">
                                                        <a href="#" class="thumbnail">
                                                            <img src="..." alt="...">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 tabSaveBtn">
                                                <button type="button" id="saveTabData" class="btn btn-success pull-right">
                                                    Save</button>
                                            </div>

                                            
                                        </div>
                                    </div><!--end framework pages tab pane-->
                                </div>

                                <div class="col-md-12 showJsonData">

                                            </div>


                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
        
    </div>

    
</div>

</body>

<!--   Core JS Files   -->
<script src="../assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--bootstrap select with search script-->
<script src="../assets/js/bootstrap-select.min.js" type="text/javascript"></script>



<!-- canvas-to-blob.min.js is only needed if you wish to resize images before upload.
     This must be loaded before fileinput.min.js -->
<script src="../assets/fileupload/js/plugins/canvas-to-blob.min.js" type="text/javascript"></script>
<script src="../assets/fileupload/js/fileinput.min.js"></script>
<!-- bootstrap.js below is only needed if you wish to the feature of viewing details
     of text file preview via modal dialog -->

<!-- optionally if you need translation for your language then include 
    locale file as mentioned below -->
<script src="../assets/fileupload/js/fileinput_locale_<lang>.js"></script>



<script type="text/javascript">
    $(document).ready(function(){
        $('#addOfferBtn').click(function(){
            $('#addOfferSection').css({'display':'block'});
        });


        //script for category select box
        $('.categorySelect').selectpicker({
          style: 'btn-select',
          size: 4
        });

        $('.addFwUL a').click(function(){
            var pageID=$(this).attr('id').substring(4);
            
            var addPageName=pageID.replace(/_/g, ' ');

            $('.nav-pills').append("<li role='presentation'><a href='#"+pageID+"Page' data-toggle='tab'>"+addPageName+"</a></li>");

            $('.tab-content').append("<div class='tab-pane' id='"+pageID+"Page'><textarea class='form-control' rows='25' id='"+pageID+"Code'>"+addPageName+" page html</textarea></div>");

            //remove added page from add page ul
            $(this).parent().css({'display':'none'});
        });

       


        //file upload function         
        // Email Upload
        $("#emailImages").fileinput({
            uploadUrl: "http://localhost/file-upload-single/1" // server upload action
        });

        //Framework file upload
        $("#FWImages").fileinput({
            uploadUrl: "http://localhost/file-upload-single/1" // server upload action
        });


        //json data
        jsonObj=[];
        item={};        

        //SAVE OFFER DETAILS CODE
        $('#offerNextBtn').click(function(){
            var offerName=$('#offerName').val();
            var offerCategory=$('#offerCategory').val();
            var offerSubCategory=$('#offerSubCategory').val();
            var offerTemplate=$('#offerTemplate').val();

            var selectedVal = "";
            var selected = $("input[type='radio'][name='status']:checked");
            if (selected.length > 0) {
                selectedVal = selected.val();
            }            
            
            item ['offerName']=offerName;
            item ['offerCategory']=offerCategory;
            item ['offerSubCategory']=offerSubCategory;
            item ['offerTemplate']=offerTemplate;
            item ['offerStatus']=selectedVal;
            
            $('#creativeSettingTab').parent().addClass("active");
            $('#offerSettingTab').parent().removeClass("active");
        });
    
        
        //SAVE CREATIVE SETTINGS CODE
        $('#offerMailerNextBtn').click(function(){
            var offerCreativeName=$('#offerCreativeName').val();
            var offerMailerCode=$('#offerMailerCode').val();

            item ['offerCreativeName']=offerCreativeName;
            item ['offerMailerCode']=offerMailerCode;            
            
            $('#creativeSettingTab').parent().removeClass("active");
            $('#frameworkPagesTab').parent().addClass("active");
        });
        

        //SAVE FRAMEWORK PAGES CODE
        $('#saveTabData').click(function(){
            var landingPageCode=$('#landingCode').html();
            var resultsPageCode=$('#resultsCode').html();
            var noresultsPageCode=$('#noresultsCode').html();
            
            item ['landingCode']=landingPageCode;
            item ['resultsCode']=resultsPageCode;
            item ['noresultsCode']=noresultsPageCode;

            jsonObj.push(item);

            jsonString = JSON.stringify(jsonObj, null, "\t");

            $(".showJsonData").html(jsonString);
            $(".showJsonData").css({"display":"block"});
            console.log(jsonString);
        });
        
        
    });
</script>
</html>