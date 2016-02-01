<?php 
    @($camp_id=$_REQUEST['id']);
    $campnamejson=file_get_contents('campaign.json');
    $campnameobj=json_decode($campnamejson, true);
    $campnamedata = $campnameobj['campaign'];
    $campnameid=$camp_id-1;
    $campnamefin=$campnamedata[$campnameid]['info']['camp_name'];

    $pagename="Campaigns";
    $pagetitle="Campaigns";
    include('includes/Header.php'); 
?>
<div class="content">
     
	<div class="container-fluid singleCampaignDetails">
        <?php            
            $str = file_get_contents('campaign.json');
            $json = json_decode($str, true);
            $checkboxID=1;
            
            foreach ($json['campaign'] as $field => $value) {
                if($value['info']['camp_id']==$camp_id){
        ?>
        
        <div class="row">
        	<div class="col-md-5">
        		<div class="card">
	        		<!--campaign Stats info-->
					
                	<div class="header clearfix">
						<h4 class="title">Campaign Stats</h4>
					</div>
                    <div class="content clearfix">
                        <div class="statsWrap clearfix">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="content">
                                        <h4 class="title subHeading">Total Revenue</h4>
                                        <p class="statistics" id="totalRevStats">$ <?php echo $value['campaign_stats']['revenue']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="content">
                                        <h4 class="title subHeading">Average CTR</h4>
                                        <p class="statistics" id="avgCTRStats"><?php echo $value['campaign_stats']['CTR']; ?>%</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="content">
                                        <h4 class="title subHeading">Average RPC</h4>
                                        <p class="statistics" id="avgRPCStats">$ <?php echo $value['campaign_stats']['RPC']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="content">
                                        <h4 class="title subHeading">Average CPM</h4>
                                        <p class="statistics" id="avgCPMStats">$ <?php echo $value['campaign_stats']['CPM']; ?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card">
                                    <div class="content">
                                        <h4 class="title subHeading">Average RPM</h4>
                                        <p class="statistics" id="avgRPMStats">$ <?php echo $value['campaign_stats']['RPM']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="content">
                                        <h4 class="title subHeading">Total Opens</h4>
                                        <p class="statistics" id="totalOpensStats"><?php echo $value['campaign_stats']['opens']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
	            </div>

                <div class="card">
                    <div class="clearfix">
                        <div class="content">
                            <div id="campChart" style="width:100%; height:400px;"></div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-7">
            	<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="header clearfix">
								<h4 class="title">Campaign Info </h4>
							</div>
							<div class="content clearfix singleCampaignDetailsContent">
								<div class="col-md-12">
									<div class="col-md-4">
										<span class="campDetailsLabel">Name</span>
									</div>	
									<div class="col-md-8">
										<span><?php echo $value['info']['camp_name']; ?></span>
									</div>
								</div>
								<div class="col-md-12">
									<div class="col-md-4">
										<span class="campDetailsLabel">Status</span>
									</div>	
									<div class="col-md-8">
										<span><?php echo $value['info']['status']; ?></span>
									</div>
								</div>
								<div class="col-md-12">
									<div class="col-md-4">
										<span class="campDetailsLabel">Created On</span>
									</div>	
									<div class="col-md-8">
										<span><?php echo $value['info']['created_on']; ?></span>
									</div>
								</div>
								<div class="col-md-12">
									<div class="col-md-4">
										<span class="campDetailsLabel">Created By</span>
									</div>	
									<div class="col-md-8">
										<span><?php echo $value['info']['created_by']; ?></span>
									</div>
								</div>
								<div class="col-md-12">
									<div class="col-md-4">
										<span class="campDetailsLabel">Start Date</span>
									</div>	
									<div class="col-md-8">
										<span><?php echo $value['info']['start_date']; ?></span>
									</div>
								</div>
								<div class="col-md-12">
									<div class="col-md-4">
										<span class="campDetailsLabel">End Date</span>
									</div>	
									<div class="col-md-8">
										<span><?php echo $value['info']['end_date']; ?></span>
									</div>
								</div>
								<div class="col-md-12">
									<div class="col-md-4">
										<span class="campDetailsLabel">List Name</span>
									</div>	
									<div class="col-md-8">
										<span><?php echo $value['list_details']['list_name']; ?></span>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!--campaign email info-->
					<div class="col-md-6">
						<div class="card">
							<div class="header clearfix">
								<h4 class="title">Email Info </h4>
							</div>
							<div class="content clearfix singleCampaignDetailsContent">
								<div class="col-md-12">
									<div class="col-md-4">
										<span class="campDetailsLabel">Email Subject</span>
									</div>	
									<div class="col-md-8">
										<span><?php echo $value['info']['email_subject']; ?></span>
									</div>
								</div>
								<div class="col-md-12">
									<div class="col-md-4">
										<span class="campDetailsLabel">From Name</span>
									</div>	
									<div class="col-md-8">
										<span><?php echo $value['info']['from_name']; ?></span>
									</div>
								</div>
								<div class="col-md-12">
									<div class="col-md-4">
										<span class="campDetailsLabel">From Email Address</span>
									</div>	
									<div class="col-md-8">
										<span><?php echo $value['info']['from_email_address']; ?></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				
				<div class="row">
					<!--Creative Details-->
					<div class="col-md-6">
						<div class="card">
							<div class="header">
								<h4 class="title">Creative Details</h4>
							</div>
							<div class="content clearfix singleCampaignDetailsContent">
								<div class="col-md-12">
									<div class="col-md-4">
										<span class="campDetailsLabel">Creative Name</span>
									</div>	
									<div class="col-md-8">
										<span><?php echo $value['creative_details']['creative_name']; ?></span>
									</div>
								</div>
								<div class="col-md-12">
									<div class="col-md-4">
										<span class="campDetailsLabel">Preview</span>
									</div>	
									<div class="col-md-8">
										<span><img src="assets/img/<?php echo $value['creative_details']['creative_image']; ?>" class="creativePreview"/></span>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!--sub domains Details-->
					<div class="col-md-6">
						<div class="card">
							<div class="header">
								<h4 class="title">Subdomains</h4>
							</div>
							<div class="content clearfix">
		                        <div class="table-responsive">
		                            <table class="table table-bordered subDomainListTable">
		                                <thead>
		                                	<th class="numTD">Sr. No.</th>
		                                    <th>Sub Domains</th>
		                                </thead>
		                                <tbody class="subDomainList">
		                                    <?php foreach ($value['domain_details']['sub_domains'] as $domain => $sub) {?>
		                                    <tr>
		                                        <td class="numTD">
		                                            <?php echo $checkboxID; ?>
		                                        </td>
		                                        <td><?php echo $sub['subdomain_name']?></td>
		                                    </tr>
		                                    <?php $checkboxID++;}  ?>
		                                </tbody>
		                            </table>
		                        </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		

        <?php } } ?>
    </div>
</div>
<?php include('includes/Footer.php'); ?>