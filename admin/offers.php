<!DOCTYPE html>
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
                                                        <textarea class="form-control" rows="25" id="landingCode"></textarea>
                                                    </div>


                                                    <!--RESULTS TAB-->
                                                    <div class="tab-pane" id="resultsPage">
                                                        <textarea class="form-control" rows="25" id="resultsCode"></textarea>
                                                    </div>


                                                    <!--NO RESULTS TAB-->
                                                    <div class="tab-pane" id="noresultsPage">
                                                        <textarea class="form-control" rows="25" id="noresultsCode"></textarea>
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

                                <div class="col-md-12 showJsonData"></div>


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
            var offerMailerCode=$('#offerMailerCode').html();


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

            // jsonString = JSON.stringify(jsonObj, null, "\t");

            $(".showJsonData").html(jsonString);
            $(".showJsonData").css({"display":"block"});
            console.log(jsonString);
        });
        
        
    });
</script>
</html>