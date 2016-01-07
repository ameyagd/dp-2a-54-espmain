<?php 
    $pagename="Campaigns";
    $pagetitle="Campaigns";
    include('../includes/innerHeader.php'); 
?>

<div class="content">
	<div class="container-fluid domainsContainer">
		<div class="row">
			<div class="col-md-8">
				<div class="card">
					<div class="header clearfix">
						<h4 class="title">Domain List </h4>
					</div>
					<div class="content">
						<div class="actionButtons">
							<ul class="editButtonsChecked">
								<li><a href="#" class="btn btn-primary disabled">Edit Domains</a></li>
								<li><a href="#" class="btn btn-info disabled">Map Domains</a></li>
								<li><a href="#" class="btn btn-success disabled">Generate Subdomains</a></li>
								<li><a href="#" class="btn btn-danger disabled">Delete Domains</a></li>
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
                                    <th>Since</th>
                                    <th>Campaigns</th>
                                    <th class="actionbuttonHead">actions</th>
                                </thead>
                                <tbody class="domainList">
                                    <tr>
                                    	<td>
                                    		<input type="checkbox" name="checkdomain1" id="checkdomain1"/>
                                    		<label for="checkdomain1"><span></span> </label>
                                    	</td>
                                        <td>www.recent1.com</td>
                                        <td>2D ago</td>
                                        <td>campaign 1, campaign 2, campaign 3</td>
                                        <td>
                                        	<a class="btn btn-success" href="#"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
                                        	<a class="btn btn-danger" href="#"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

                                        </td>
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

			<div class="col-md-4 viewSubDomainList hidethisdiv">
                <div class="card">
                    <div class="header clearfix">
                        <h4 class="title">Selected Domains</h4>
                    </div>
                    <div class="content">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <th class="checkboxHead" id="th">
                                        <input type="checkbox" class="checkallsubdomains" name="checkallsubdomains1" id="checkallsubdomains1"/>
                                        <label for="checkallsubdomains1"><span></span> </label>
                                    </th>
                                    <th>www.recent1.com</th>
                                </thead>
                                <tbody class="subDomainList">
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="check1subdomain1" id="check1subdomain1"/>
                                            <label for="check1subdomain1"><span></span> </label>
                                        </td>
                                        <td>sub1.recent1.com</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="check1subdomain2" id="check1subdomain2"/>
                                            <label for="check1subdomain2"><span></span> </label>
                                        </td>
                                        <td>sub2.recent1.com</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="check1subdomain3" id="check1subdomain3"/>
                                            <label for="check1subdomain3"><span></span> </label>
                                        </td>
                                        <td>sub3.recent1.com</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="check1subdomain4" id="check1subdomain4"/>
                                            <label for="check1subdomain4"><span></span> </label>
                                        </td>
                                        <td>sub4.recent1.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
		</div>




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

<?php include('../includes/innerFooter.php'); ?>