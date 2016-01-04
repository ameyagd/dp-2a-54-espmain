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
                                    <tr>
                                    	<td>
                                    		<input type="checkbox" name="checkdomain2" id="checkdomain2"/>
                                    		<label for="checkdomain2"><span></span> </label>
                                    	</td>
                                        <td>www.recent2.com</td>
                                        <td>3D ago</td>
                                        <td>campaign 4</td>
                                        <td>
                                        	<a class="btn btn-success" href="#"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
                                        	<a class="btn btn-danger" href="#"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

                                        </td>
                                    </tr>
                                    <tr>
                                    	<td>
                                    		<input type="checkbox" name="checkdomain3" id="checkdomain3"/>
                                    		<label for="checkdomain3"><span></span> </label>
                                    	</td>
                                        <td>www.recent3.com</td>
                                        <td>1D ago</td>
                                        <td>campaign 5, campaign 6</td>
                                        <td>
                                        	<a class="btn btn-success" href="#"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
                                        	<a class="btn btn-danger" href="#"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

                                        </td>
                                    </tr>
                                    <tr>
                                    	<td>
                                    		<input type="checkbox" name="checkdomain4" id="checkdomain4"/>
                                    		<label for="checkdomain4"><span></span> </label>
                                    	</td>
                                        <td>www.recent4.com</td>
                                        <td>22D ago</td>
                                        <td>campaign 7, campaign 8, campaing 9, campaign 10</td>
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
                                <input type="submit" value="Add Domain" class="btn btn-success"/>
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

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <th class="checkboxHead">
                                        <input type="checkbox" class="checkallsubdomains" name="checkallsubdomains2" id="checkallsubdomains2"/>
                                        <label for="checkallsubdomains2"><span></span> </label>
                                    </th>
                                    <th>www.recent2.com</th>
                                </thead>
                                <tbody class="subDomainList">
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="check2subdomain1" id="check2subdomain1"/>
                                            <label for="check2subdomain1"><span></span> </label>
                                        </td>
                                        <td>sub1.recent2.com</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="check2subdomain2" id="check2subdomain2"/>
                                            <label for="check2subdomain2"><span></span> </label>
                                        </td>
                                        <td>sub2.recent2.com</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="check3subdomain3" id="check3subdomain3"/>
                                            <label for="check3subdomain3"><span></span> </label>
                                        </td>
                                        <td>sub3.recent2.com</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="check4subdomain4" id="check4subdomain4"/>
                                            <label for="check4subdomain4"><span></span> </label>
                                        </td>
                                        <td>sub4.recent2.com</td>
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
                <li><a href="campaignSetup.php" class="stepLink">Previous</a></li>
            </ul>

            <ul class="stepList">
                <li><a href="campaignSetup.php" class="stepLink">Setup </a></li>
                <li><i class="fa fa-chevron-right"></i></li>

                <li><a href="campaignDomains.php" class="stepLink active">Domains </a></li>
                <li><i class="fa fa-chevron-right"></i></li>

                <li><a href="campaignRecepients.php" class="stepLink">Lists</a></li>
                <li><i class="fa fa-chevron-right"></i></li>

                <li><a href="campaignCreatives.php" class="stepLink">Template</a></li>
                <li><i class="fa fa-chevron-right"></i></li>

                <li><a href="campaignEditMailer.php" class="stepLink">Design</a></li>
                <li><i class="fa fa-chevron-right"></i></li>

                <li><a href="campaignConfirm.php" class="stepLink">Confirm</a></li>
            </ul>

            <ul class="stepNext">
                <li><a href="campaignRecepients.php" class="stepLink">Next</a></li>
                <li><i class="fa fa-chevron-right"></i></li>
            </ul>
        </div> 
</div>

<?php include('../includes/innerFooter.php'); ?>