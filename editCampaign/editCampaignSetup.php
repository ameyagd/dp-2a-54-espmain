<?php 
$pagename="Campaigns";
    $pagetitle="Campaigns";
    include('../includes/innerHeader.php'); 

    @($camp_id=$_REQUEST['id']);
    $campnamejson=file_get_contents('../campaign.json');
    $campnameobj=json_decode($campnamejson, true);
    $campnamedata = $campnameobj['campaign'];
    $campnameid=$camp_id-1;
    $campnamefin=$campnamedata[$campnameid]['info']['camp_name'];

   
?>
    <div class="content">
        <div class="container-fluid"> 
        <form class="createCampaignForm" method="post" action="saveCampaignSetup.php">
            <?php
                @($msg=$_REQUEST['error']);
                if($msg=='u'){
                    echo "<div class='alert alert-success alert-dismissible' role='alert'>
              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span></button>
              <strong>Success!</strong> Campaign details updated.
            </div>";
                }
                
                $str = file_get_contents('../campaign.json');
                $json = json_decode($str, true);

                foreach ($json['campaign'] as $field => $value) {
                    if($value['info']['camp_id']==$camp_id){
            ?>   
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Campaign Details</h4>
                        </div>

                        <div class="content"> 
                            <input type="hidden" name="campID" value="<?php echo $camp_id; ?>"/>
                             <div class="posRel">
                                <label>Campaign Name</label>
                                <input type="text" name="campaignName" class="form-control" value="<?php echo $value['info']['camp_name']; ?>"/>
                            </div>

                            <div class="posRel">
                                <label>From name</label>
                                <input type="text" name="fromName" class="form-control" value="<?php echo $value['info']['from_name']; ?>"/>
                            </div>

                            <div class="posRel">
                                <label>From email address</label>
                                <input type="text" name="fromEmailAddress" class="form-control" value="<?php echo $value['info']['from_email_address']; ?>"/>
                            </div>

                            <div class="posRel" id="sandbox-container">
                                <label>Start Date</label>
                                <input type="text" class="form-control" id="datetimepicker1" name="campaignStartDate" value="<?php echo $value['info']['start_date']; ?>"/>
                            </div>

                            <div class="posRel">
                                <label>End Date</label>
                                <input type="text" class="form-control" id="datetimepicker2" name="campaignEndDate" value="<?php echo $value['info']['end_date']; ?>"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Email Subject</h4>
                        </div>
                        <div class="content">
                            <div class="posRel">
                                <label>Subject (avoid using junk characters)</label>
                                <input type="text" name="emailSubject" class="form-control" value="<?php echo $value['info']['email_subject']; ?>"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                    }
                }
            ?>

            <input type="submit" value="Save" class="btn btn-success"/>
        </form>
        </div>    
    </div>
        

    <div class="stepFooter clearfix">
        <ul class="stepList">
            <li><a href="editCampaignSetup.php?id=<?php echo $camp_id; ?>" class="stepLink active">Setup </a></li>
            <li><i class="fa fa-chevron-right"></i></li>

            <li><a href="editCampaignDomains.php?id=<?php echo $camp_id; ?>" class="stepLink">Domains </a></li>
            <li><i class="fa fa-chevron-right"></i></li>

            <li><a href="editCampaignRecepients.php?id=<?php echo $camp_id; ?>" class="stepLink">Lists</a></li>
            <li><i class="fa fa-chevron-right"></i></li>

            <li><a href="editCampaignCreatives.php?id=<?php echo $camp_id; ?>" class="stepLink">Template</a></li>
            <li><i class="fa fa-chevron-right"></i></li>

            <li><a href="editCampaignEditMailer.php?id=<?php echo $camp_id; ?>" class="stepLink">Design</a></li>
            <li><i class="fa fa-chevron-right"></i></li>

            <li><a href="editCampaignConfirm.php?id=<?php echo $camp_id; ?>" class="stepLink">Confirm</a></li>
        </ul>

        <ul class="stepNext">
            <li><a href="editCampaignDomains.php?id=<?php echo $camp_id; ?>" class="stepLink">Next</a></li>
            <li><i class="fa fa-chevron-right"></i></li>
        </ul>
    </div> 

<?php include('../includes/innerFooter.php'); ?>