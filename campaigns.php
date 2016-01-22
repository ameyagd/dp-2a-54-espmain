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

                        <div class="card">
                            <div class="clearfix">
                                <div class="content">
                                    <div id="campChart1" style="width:100%; height:400px;"></div>
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
                                        <select class="form-control" id="changeStatus">
                                            <option value="">Status</option>
                                            <option value="all">All</option>
                                            <option value="draft">Draft</option>
                                            <option value="scheduled">Scheduled</option>
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
                                        // echo '<pre>' . print_r($json, true) . '</pre>';
                                        foreach ($json['campaign'] as $field => $value) {
                                        
                                        $checkID=$value['info']['camp_id'];
                                    ?>
                                        <div class="campaignDetailsWrap clearfix <?php echo $value['info']['status']; ?>">
                                            <div class="pull-left">
                                                <input type="checkbox" id="list<?php echo $checkID; ?>Check" name="list<?php echo $checkID; ?>Check" ><label for="list<?php echo $checkID; ?>Check"><span></span></label>
                                            </div>
                                            <div class="col-md-5 col-sm-11 col-xs-11 campaignTitleRes">
                                                <h5><a href="#"><?php echo $value['info']['camp_name']; ?> </a></h5>
                                                <span class="listCreatedOn"><b>Created On:</b> <?php echo $value['info']['created_on']; ?></span>
                                                <span class="listCreatedBy"><b>Created By:</b> <?php echo $value['info']['created_by']; ?></span>
                                            </div>
                                            <div class="col-md-5 col-sm-11 col-xs-11 campaignFullRes">
                                                <div class="col-sm-5 col-xs-6">
                                                    <span class="listOpens"><?php echo $value['domain_details']['domain_name']; ?></span>
                                                    <span class="listLabel">Domain Mapped</span>
                                                </div>
                                                <div class="col-sm-4 col-xs-3">
                                                    <span class="listOpens"><?php echo $value['list_details']['list_name']; ?></span>
                                                    <span class="listLabel">List Mapped</span>
                                                </div>
                                                <div class="col-sm-3 col-xs-3">
                                                    <span class="listOpens"><?php echo $value['campaign_stats']['opens']; ?>%</span>
                                                    <span class="listLabel">Opens</span>
                                                </div>
                                            </div>
                                            <div class="absRight">
                                                <div class="pull-right">
                                                    <div class="btn-group">
                                                      <a href="editCampaign/editCampaignSetup.php?id=<?php echo $value['info']['camp_id']?>" class="btn btn-default">Edit</a>
                                                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="caret"></span>
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                      </button>
                                                      <ul class="dropdown-menu">
                                                        <li><a href="#" data-toggle="modal" data-target="#<?php echo $value['creative_details']['creative_name'];?>">View email</a></li>
                                                        <li><a href="#">Clone</a></li>
                                                      </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal fade" id="<?php echo $value['creative_details']['creative_name'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                              <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="myModalLabel"><?php echo $value['creative_details']['creative_name']; ?></h4>
                                                  </div>
                                                  <div class="modal-body">
                                                    <img src="assets/img/<?php echo $value['creative_details']['creative_image'];?>" class="popCreativeImage">
                                                  </div>
                                                  <div class="modal-footer">
                                                    <a href="" class="btn btn-primary">Edit</a>
                                                  </div>
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