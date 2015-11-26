<?php 
    $pagename="Campaigns";
    $pagetitle="Campaigns";
    include('../includes/innerHeader.php'); 
?>
                     
                     
        
        <div class="content">
            <div class="container-fluid restrictedWidth">
                <div class="row">
                    <h2 class="confirmResponseHeader">You're all set to send</h2>
                    <h4 class="confirmResponseSubHeader">Review the feedback below before sending your campaign</h4>
                </div>    
                <div class="row">
                    <div class="col-md-12">
                        <div class="confirmValueWrap clearfix">
                            <span class="checkListBox"></span>
                            <div class="col-md-10">
                                <h5 class="confirmSubHeading"> List</h5>
                                <p>Deliver this to <span class"campaignListName">List 1</span></p>
                            </div>
                            <div class="col-md-2">
                                <div class="pull-right">
                                    <button type="button" class="btn btn-default">Edit</button>
                                </div>
                            </div>
                        </div>

                        <div class="confirmValueWrap clearfix">
                            <span class="checkListBox"></span>
                            <div class="col-md-10">
                                <h5 class="confirmSubHeading"> Subject line</h5>
                                <p><span class"campaignSubjectLine">Test Subject Line</span></p>
                            </div>
                            <div class="col-md-2">
                                <div class="pull-right">
                                    <button type="button" class="btn btn-default">Edit</button>
                                </div>
                            </div>
                        </div>

                        <div class="confirmValueWrap clearfix">
                            <span class="checkListBox"></span>
                            <div class="col-md-10">
                                <h5 class="confirmSubHeading"> HTML Email</h5>
                                <p>You're sending HTML email using <span class"campaignSubjectLine">Template name</span></p>
                            </div>
                            <div class="col-md-2">
                                <div class="pull-right">
                                    <button type="button" class="btn btn-default">Edit</button>
                                </div>
                            </div>
                        </div>

                    </div>   

                </div>
            </div>    
        </div>
        
        
    </div>

    <div class="stepFooter">
        <ul class="stepPrev">
            <li><i class="fa fa-chevron-left"></i></li>
            <li><a href="campaignEditMailer.php" class="stepLink">Previous</a></li>
        </ul>

        <ul class="stepList">
            <li><a href="campaignSetup.php" class="stepLink">Setup </a></li>
            <li><i class="fa fa-chevron-right"></i></li>

            <li><a href="campaignDomains.php" class="stepLink">Domains</a></li>
            <li><i class="fa fa-chevron-right"></i></li>  
            
            <li><a href="campaignRecepients.php" class="stepLink">Lists</a></li>
            <li><i class="fa fa-chevron-right"></i></li>            

            <li><a href="campaignCreatives.php" class="stepLink">Template</a></li>
            <li><i class="fa fa-chevron-right"></i></li>

            <li><a href="campaignEditMailer.php" class="stepLink">Design</a></li>
            <li><i class="fa fa-chevron-right"></i></li>

            <li><a href="campaignConfirm.php" class="stepLink active">Confirm</a></li>
        </ul>
    </div> 
</div>


<?php include('../includes/innerFooter.php'); ?>