<?php 
    $pagename="Campaigns";
    $pagetitle="Campaigns";
    include('../includes/innerHeader.php'); 
?>
                     
                     
        <div class="content">
            <div class="container-fluid">    
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">To which list shall we send?</h4>
                            </div>
                            <div class="content"> 
                                <div class="campaignListWrap">
                                    <input type="radio" name="radioList1" id="radioList1"/>
                                    <label for="radioList1"><span></span> List 1</label>
                                </div>

                                <div class="campaignListWrap">
                                    <input type="radio" name="radioList2" id="radioList2"/>
                                    <label for="radioList2"><span></span> List 2</label>
                                </div>

                                <div class="campaignListWrap">
                                    <input type="radio" name="radioList3" id="radioList3"/>
                                    <label for="radioList3"><span></span> List 3</label>
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
            <li><a href="campaignDomains.php" class="stepLink">Previous</a></li>
        </ul>

        <ul class="stepList">
            <li><a href="campaignSetup.php" class="stepLink">Setup </a></li>
            <li><i class="fa fa-chevron-right"></i></li>

            <li><a href="campaignDomains.php" class="stepLink">Domains </a></li>
            <li><i class="fa fa-chevron-right"></i></li>

            <li><a href="campaignRecepients.php" class="stepLink active">Lists</a></li>
            <li><i class="fa fa-chevron-right"></i></li>

            <li><a href="campaignCreatives.php" class="stepLink">Template</a></li>
            <li><i class="fa fa-chevron-right"></i></li>

            <li><a href="campaignEditMailer.php" class="stepLink">Design</a></li>
            <li><i class="fa fa-chevron-right"></i></li>

            <li><a href="campaignConfirm.php" class="stepLink">Confirm</a></li>
        </ul>

        <ul class="stepNext">
            <li><a href="campaignCreatives.php" class="stepLink">Next</a></li>
            <li><i class="fa fa-chevron-right"></i></li>
        </ul>
    </div> 
</div>


<?php include('../includes/innerFooter.php'); ?>