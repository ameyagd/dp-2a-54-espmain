<?php 
    $pagename="Campaigns";
    $pagetitle="Campaigns";
    include('includes/header.php'); 
?>
                     
                     
        <div class="content">
            <div class="container-fluid restrictedWidth">    
                <div class="row">
                    <div class="col-md-12">
                        <div class="header">
                            <h4 class="title" style="margin-top:0">
                                <div class="dropdown">
                                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenuCamp" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Create Campaign
                                    <span class="caret"></span>
                                  </button>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuCamp">
                                   <li><a href="createCampaign/campaignSetup.php">Regular Campaign </a></li>
                                        <li><a href="#">Plain Text Campaign</a></li>
                                        <li><a href="#">A/B Testing Campaign</a></li>
                                  </ul>
                                </div>
                            </h4>
                        </div>
                    </div>                  
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="campaignFilters">
                            <div class="allCampaignCheck">
                                <input type="checkbox" id="allListCheck" name="allListCheck" ><label for="allListCheck"><span></span></label>
                            </div>

                            <div class="dropdown">
                              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                Filter
                                <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <form class="filterForm">
                                    <li>
                                        <label>Status</label>
                                        <select class="form-control">
                                            <option value="">All</option>
                                            <option value="">Draft</option>
                                            <option value="">Scheduled</option>
                                        </select>
                                    </li>
                                    <li>
                                        <label>Type</label>
                                        <select class="form-control">
                                            <option value="">All</option>
                                            <option value="">Regular Campaign</option>
                                            <option value="">Plain Text Campaign</option>
                                            <option value="">A/B Testing Campaign</option>
                                        </select>
                                    </li>
                                    <li>
                                        <label>List</label>
                                        <select class="form-control">
                                            <option value="">All</option>
                                        </select>
                                    </li>
                                    <li>
                                        <a href="#" class="btn btn-sm applyFilter">Apply Filter</a>
                                        <a href="#" class="resetLink">Reset</a>
                                    </li>
                                </form>
                              </ul>
                            </div>

                            <div class="pull-right">
                                <a class="btn btn-default disabled">Download Sent Campaigns</a>
                            </div>
                        </div>
                        
                        <div class="campaignList">
                            <div class="campaignDetailsWrap clearfix">
                                <div class="pull-left">
                                    <input type="checkbox" id="list1Check" name="list1Check" ><label for="list1Check"><span></span></label>
                                </div>
                                <div class="col-md-10">
                                    <h5><a href="#">Campaign 1</a></h5>
                                    <span class="listCreatedOn">Created May 20,2015 03:14am</span>
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

                            

                            <div class="campaignDetailsWrap clearfix">
                                <div class="pull-left">
                                    <input type="checkbox" id="list2Check" name="list2Check" ><label for="list2Check"><span></span></label>
                                </div>
                                <div class="col-md-10">
                                    <h5><a href="#">Campaign 2</a></h5>
                                    <span class="listCreatedOn">Created May 21,2015 01:34am</span>
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
                        </div>
                    </div> 
 
                </div>
                    
            </div>    
        </div>
        
    </div> 
</div>


<?php include('includes/footer.php'); ?>