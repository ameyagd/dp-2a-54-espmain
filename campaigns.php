<?php 
    $pagename="Campaigns";
    $pagetitle="Campaigns";
    include('includes/header.php'); 
?>
                     
                     
        <div class="content">
            <div class="container-fluid"> 
               

                <div class="row">
                    <div class="col-md-5">
                        <div class="card">
                            <div class="clearfix">
                                <div class="content">
                                    <div id="campChart" style="width:100%; height:400px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-7">
                        <div class="card">
                            <div class="content clearfix">
                                <div class="campaignFilters">
                                    <div class="allCampaignCheck">
                                        <input type="checkbox" id="allListCheck" name="allListCheck" ><label for="allListCheck"><span></span></label>
                                    </div>

                                    <div class="filterDD">
                                        <select class="form-control">
                                            <option value="">Status</option>
                                            <option value="">All</option>
                                            <option value="">Draft</option>
                                            <option value="">Scheduled</option>
                                        </select>
                                    </div> 

                                    <div class="pull-right">
                                        <a href="createCampaign/campaignSetup.php" class="btn btn-default crCampaign">Create Campaign</a>
                                    </div>                               
                                </div>
                                
                                <div class="campaignList">
                                    <!-- php code for json data-->
                                    <?php
                                        $str = file_get_contents('campaign.json');
                                        $json = json_decode($str, true);
                                        // var_dump(json_decode($json));
                                        
                                        foreach ($json['list'] as $field => $value) {
                                        $checkID=$value['campid'];
                                    ?>
                                        <div class="campaignDetailsWrap clearfix">
                                            <div class="pull-left">
                                                <input type="checkbox" id="list<?php echo $checkID; ?>Check" name="list<?php echo $checkID; ?>Check" ><label for="list<?php echo $checkID; ?>Check"><span></span></label>
                                            </div>
                                            <div class="col-md-5">
                                                <h5><a href="#"><?php echo $value['campname']; ?> </a></h5>
                                                <span class="listCreatedOn"><b>Created On:</b> <?php echo $value['campCreatedOn']; ?></span>
                                                <span class="listCreatedBy"><b>Created By:</b> <?php echo $value['campCreatedBy']; ?></span>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="col-sm-5 col-xs-6">
                                                    <span class="listOpens"><?php echo $value['campDomainMapped']; ?></span>
                                                    <span class="listLabel">Domain Mapped</span>
                                                </div>
                                                <div class="col-sm-4 col-xs-3">
                                                    <span class="listOpens"><?php echo $value['campListMapped']; ?></span>
                                                    <span class="listLabel">List Mapped</span>
                                                </div>
                                                <div class="col-sm-3 col-xs-3">
                                                    <span class="listOpens"><?php echo $value['campOpens']; ?></span>
                                                    <span class="listLabel">Opens</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="pull-right">
                                                    <div class="btn-group">
                                                      <button type="button" class="btn btn-default">Edit</button>
                                                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="caret"></span>
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                      </button>
                                                      <ul class="dropdown-menu">
                                                        <li><a href="#">View email</a></li>
                                                        <li><a href="#">Clone</a></li>
                                                      </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    <?php
                                        }
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>

                    
                </div>  
            </div>    
        </div>
        
    </div> 
</div>


<?php include('includes/footer.php'); ?>