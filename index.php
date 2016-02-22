<?php 
    $pagename="Dashboard";
    $pagetitle="Dashboard";
    include('includes/header.php'); 
?>
                     
                     
        <div class="content">
            <div class="container-fluid">    
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="content clearfix">
                                <div class="statsWrap clearfix">
                                    <h4 class="title campTitle">Overall Campaign Statistics</h4>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="content">
                                                <h4 class="title subHeading">Total Revenue</h4>
                                                <p class="statistics" id="totalRevStats">$899</p>
                                                <span class="audited">audited</span>
                                                <span class="unaudited">unaudited</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="content">
                                                <h4 class="title subHeading">Average CTR</h4>
                                                <p class="statistics" id="avgCTRStats">50%</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="content">
                                                <h4 class="title subHeading">Average RPC</h4>
                                                <p class="statistics" id="avgRPCStats">$26</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="content">
                                                <h4 class="title subHeading">Average CPM</h4>
                                                <p class="statistics" id="avgCPMStats">$6.25</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="content">
                                                <h4 class="title subHeading">Average RPM</h4>
                                                <p class="statistics" id="avgRPMStats">$30</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="content">
                                                <h4 class="title subHeading">Total Opens</h4>
                                                <p class="statistics" id="totalOpensStats">778</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="content">
                                                <h4 class="title subHeading">Scheduled Campaigns</h4>
                                                <p class="statistics" id="scheduledCampaignStats">26</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="content"> 
                                            <div id="chartPreferences" style="width:100%; height:400px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Your Top Performing Campaigns</h4>
                            </div>
                            
                            <div class="content">                                
                                <div class="topPerformingCampaignWrap">
                                    <!-- php code for campaign json data-->
                                    <?php
                                        $str = file_get_contents('campaign.json');
                                        $json = json_decode($str, true);
                                        $i = 1;
                                        foreach ($json['campaign'] as $field => $value) {
                                        
                                        $checkID=$value['info']['camp_id'];
                                    ?>
                                    <div class="card clearfix">
                                        <div class="listDetails clearfix">
                                            <div class="col-md-7 campaignTitleRes">
                                                <h5><a href="campaignDetails.php?id=<?php echo $value['info']['camp_id']; ?>"><?php echo $value['info']['camp_name']; ?></a></h5>
                                                <span class="listCreatedOn">Created <?php echo $value['info']['created_on']; ?></span>
                                                <!-- <span class="listRating">No rating yet</span> -->
                                            </div>
                                            <div class="col-md-5 listStats campaignFullRes">
                                                <div class="col-sm-5 col-xs-6">
                                                    <span class="listOpens"><?php echo $value['domain_details']['domain_name']; ?></span>
                                                    <span class="listLabel">Domain Mapped</span>
                                                </div>
                                                <div class="col-sm-4 col-xs-3">
                                                    <span class="listOpens"><?php echo $value['list_details']['list_name']; ?></span>
                                                    <span class="listLabel">List Mapped</span>
                                                </div>
                                                <div class="col-sm-3 col-xs-3">
                                                    <span class="listOpens"><?php echo $value['campaign_stats']['opens']; ?></span>
                                                    <span class="listLabel">Opens</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                        $i++;
                                        if($i==5){break;}
                                        }
                                    ?>
                                </div>
                            </div>
                            
                        </div>

                        <div class="card">
                            <div class="header">
                                <h4 class="title">Your Top Performing Lists</h4>
                            </div>
                            <div class="content">
                                <div class="topPerformingListsWrap">
                                    <div class="card clearfix">
                                        <div class="listDetails clearfix">
                                            <div class="col-md-7 campaignTitleRes">
                                                <h5><a href="#">List 1</a></h5>
                                                <span class="listCreatedOn">Created May 20,2013 03:14am</span>
                                                <span class="listRating">No rating yet</span>
                                            </div>
                                            <div class="col-md-5 listStats campaignFullRes">
                                                <div class="col-xs-4">
                                                    <span class="listSubs">50</span>
                                                    <span class="listLabel">Subscribers</span>
                                                </div>
                                                <div class="col-xs-4">
                                                    <span class="listOpens">80.0%</span>
                                                    <span class="listLabel">Opens</span>
                                                </div>
                                                <div class="col-xs-4">
                                                    <span class="listClicks">70.0%</span>
                                                    <span class="listLabel">Clicks</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card clearfix">
                                        <div class="listDetails clearfix">
                                            <div class="col-md-7 campaignTitleRes">
                                                <h5><a href="#">List 2</a></h5>
                                                <span class="listCreatedOn">Created Nov 09,2015 10:26pm</span>
                                                <span class="listRating">No rating yet</span>
                                            </div>
                                            <div class="col-md-5 listStats campaignFullRes">
                                                <div class="col-xs-4">
                                                    <span class="listSubs">40</span>
                                                    <span class="listLabel">Subscribers</span>
                                                </div>
                                                <div class="col-xs-4">
                                                    <span class="listOpens">70.0%</span>
                                                    <span class="listLabel">Opens</span>
                                                </div>
                                                <div class="col-xs-4">
                                                    <span class="listClicks">60.0%</span>
                                                    <span class="listLabel">Clicks</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card clearfix">
                                        <div class="listDetails clearfix">
                                            <div class="col-md-7 campaignTitleRes">
                                                <h5><a href="#">List 3</a></h5>
                                                <span class="listCreatedOn">Created Nov 06,2015 01:26pm</span>
                                                <span class="listRating">No rating yet</span>
                                            </div>
                                            <div class="col-md-5 listStats campaignFullRes">
                                                <div class="col-xs-4">
                                                    <span class="listSubs">30</span>
                                                    <span class="listLabel">Subscribers</span>
                                                </div>
                                                <div class="col-xs-4">
                                                    <span class="listOpens">60.0%</span>
                                                    <span class="listLabel">Opens</span>
                                                </div>
                                                <div class="col-xs-4">
                                                    <span class="listClicks">50.0%</span>
                                                    <span class="listLabel">Clicks</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                                <hr>
                                <div class="clearfix">
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="content">
                                                <h4 class="title subHeading">Total Subscribers</h4>
                                                <p class="statistics" id="totalSubs">4500</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>             
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Your Top Creatives</h4>
                            </div>
                            <div class="content">                                
                                <div id="owl-example" class="owl-carousel">
                                    <div class="owlSlide">
                                        <h5>Email-rentToOwn-v1-sept2015</h5>
                                        <img src="assets/img/creative1.jpg" /> 
                                    </div>
                                    <div class="owlSlide">
                                        <h5>Email-newCar-v2-sept2015</h5>
                                        <img src="assets/img/creative2.jpg" />
                                    </div>
                                    <div class="owlSlide">
                                        <h5>Email-laserHairRemoval-v2-sept2015</h5>
                                        <img src="assets/img/creative3.jpg" />
                                    </div>
                                    <div class="owlSlide">
                                        <h5>Email-RentalApartments-v2-sept2015</h5>
                                        <img src="assets/img/creative4.jpg" />
                                    </div>
                                    <div class="owlSlide">
                                        <h5>Email-houseCleaning-v2-aug2015</h5>
                                        <img src="assets/img/creative5.jpg" />
                                    </div>
                                    <div class="owlSlide">
                                        <h5>Email-checkingAccount-v1-sept2015</h5>
                                        <img src="assets/img/creative6.jpg" />
                                    </div>
                                    <div class="owlSlide">
                                        <h5>Email-VOIP-v2-sept2015</h5>
                                        <img src="assets/img/creative7.jpg" />
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    
                    <div class="col-md-6">
                        <div class="card clearfix">
                            <div class="header">
                                <h4 class="title">Your Domains</h4>
                            </div>
                            <div class="col-md-12">
                                <div class="content table-responsive">
                                    <table class="table table-bordered listTable">
                                        <thead>
                                            <th>Recent</th>
                                            <th>blacklisted</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>www.recent1.com</td>
                                                <td>www.blacklisted1.com</td>
                                            </tr>
                                            <tr>
                                                <td>www.recent2.com</td>
                                                <td>www.blacklisted2.com</td>
                                            </tr>
                                            <tr>
                                                <td>www.recent3.com</td>
                                                <td>www.blacklisted3.com</td>
                                            </tr>
                                            <tr>
                                                <td>www.recent4.com</td>
                                                <td>www.blacklisted4.com</td>
                                            </tr>
                                            <tr>
                                                <td>www.recent5.com</td>
                                                <td>www.blacklisted5.com</td>
                                            </tr>
                                            <tr>
                                                <td>www.recent6.com</td>
                                                <td>www.blacklisted6.com</td>
                                            </tr>
                                        </tbody>
                                    </table>
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