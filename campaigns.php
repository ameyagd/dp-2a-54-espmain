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

                                    <div class="campaignDetailsWrap clearfix">
                                        <div class="pull-left">
                                            <input type="checkbox" id="list3Check" name="list3Check" ><label for="list3Check"><span></span></label>
                                        </div>
                                        <div class="col-md-10">
                                            <h5><a href="#">Campaign 3</a></h5>
                                            <span class="listCreatedOn">Created May 23,2015 13:14pm</span>
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
                                            <input type="checkbox" id="list4Check" name="list4Check" ><label for="list4Check"><span></span></label>
                                        </div>
                                        <div class="col-md-10">
                                            <h5><a href="#">Campaign 4</a></h5>
                                            <span class="listCreatedOn">Created May 25,2015 11:14am</span>
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
        
    </div> 
</div>


<?php include('includes/footer.php'); ?>