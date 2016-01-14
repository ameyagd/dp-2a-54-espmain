<?php 
    $pagename="Campaigns";
    $pagetitle="Campaigns";
    include('../includes/innerHeader.php'); 
?>

<div class="content">
     
	<div class="container-fluid domainsContainer">
        <?php
            @($camp_id=$_REQUEST['id']);
            $str = file_get_contents('../campaign.json');
            $json = json_decode($str, true);

            foreach ($json['campaign'] as $field => $value) {
                if($value['info']['camp_id']==$camp_id){
        ?>  
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="header clearfix">
						<h4 class="title">Domain Details </h4>
					</div>
					<div class="content">
						<div class="actionButtons">
							<ul class="editButtonsChecked">
								<li><a href="#" class="btn btn-success disabled">Generate Subdomains</a></li>
							</ul>
							<ul class="pull-right">
								<li class="pull-right"><a href="#" class="btn btn-success" id="addDomainsBtn">Add Domains</a></li>
							</ul>
						</div>
						<div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <th class="checkboxHead">
                                    	<input type="checkbox" name="checkalldomains" id="checkalldomains"/>
                                		<label for="checkalldomains"><span></span> </label>
                                	</th>
                                    <th>Domain</th>
                                    <th>Campaigns</th>
                                </thead>
                                <tbody class="domainList">
                                    <tr>
                                    	<td>
                                    		<input type="checkbox" name="checkdomain1" id="checkdomain1"/>
                                    		<label for="checkdomain1"><span></span> </label>
                                    	</td>
                                        <td><?php echo $value['domain_details']['domain_name']; ?></td>
                                        <td><?php echo $value['domain_details']['campaign_mapped']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
					</div>
				</div>

                <div class="card addDomainFormWrapper">
                    <div class="header">
                        <h4 class="title">Add Domains</h4>
                    </div>
                    <div class="content clearfix">
                        <form class="createDomainForm" method="post">
                            <div class="posRel">
                                <label>Domain name</label>
                                <input type="text" class="form-control" name="domainName"/>
                            </div>
                            <div class="posRel">
                                <input type="submit" value="Add" class="btn btn-success"/>
                            </div>
                        </form>
                    </div>
                </div>
			</div>
        </div>
        
        <div class="row">
			<div class="col-md-12">
                <div class="card">
                    <div class="header clearfix">
                        <h4 class="title">Sub Domains</h4>
                    </div>
                    <div class="content">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <th class="checkboxHead" id="th">
                                        <input type="checkbox" class="checkallsubdomains" name="checkallsubdomains1" id="checkallsubdomains1"/>
                                        <label for="checkallsubdomains1"><span></span> </label>
                                    </th>
                                    <th><?php echo $value['domain_details']['domain_name']; ?></th>
                                </thead>
                                <tbody class="subDomainList">
                                    <?php foreach ($value['domain_details']['sub_domains'] as $domain => $sub) {?>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="check1subdomain1" id="check1subdomain1"/>
                                            <label for="check1subdomain1"><span></span> </label>
                                        </td>
                                        <td><?php echo $sub['subdomain_name']?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
		</div>
        <?php
                }
            }
        ?>
        


        <div class="stepFooter clearfix">
            <ul class="stepPrev">
                <li><i class="fa fa-chevron-left"></i></li>
                <li><a href="editCampaignSetup.php?id=<?php echo $camp_id; ?>" class="stepLink">Previous</a></li>
            </ul>

            <ul class="stepList">
                <li><a href="editCampaignSetup.php?id=<?php echo $camp_id; ?>" class="stepLink">Setup </a></li>
                <li><i class="fa fa-chevron-right"></i></li>

                <li><a href="editCampaignDomains.php?id=<?php echo $camp_id; ?>" class="stepLink active">Domains </a></li>
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
                <li><a href="editCampaignRecepients.php?id=<?php echo $camp_id; ?>" class="stepLink">Next</a></li>
                <li><i class="fa fa-chevron-right"></i></li>
            </ul>
        </div> 
    </div>
</div>

<?php include('../includes/innerFooter.php'); ?>