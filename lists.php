<?php 
    $pagename="Lists123";
    $pagetitle="Lists";
    include('includes/header.php'); 
?>
         
                     
        <div class="content">
            
            <div class="container listboxcontainer">
                <!-- <div class="row">
                    <div class="col-md-12 ">
                        <div class="alert alert-warning">
                            <button type="button" aria-hidden="true" class="close">×</button>
                            <span><b> Warning - </b> This is a regular notification made with ".alert-warning"</span>
                        </div>
                    </div>
                 </div> -->
                <div class="row">
                <div class="col-md-8"><h4 class="listtitle">Lists</h4></div>
                 <div  class="col-md-4">
                <div class="pull-right"><a href="newlist.php" class="btn greybtn" id="addlistbtn">Create List</a></div>
                </div>  
                </div>
                
                <div class="row lisortrow">    
                <div  class="col-md-8  col-xs-12">
                            <!-- sort by left -->
                                <div>
                                <div class="sortbywrap">
                                   
                                    <div class="listcheckall">
                                        <input type="checkbox" name="radioList1" id="listcheckall">
                                        <label for="listcheckall"><span></span></label>
                                    </div>
                                    <span class="sortbytxt">Sort by </span>
                                    
                                        <div class="dropdown listsort">
                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenuCamp" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Custom Order
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuCamp">
                                        <li><a href="#">Name</a></li>
                                        <li><a href="#">Date created</a></li>
                                        </ul>
                                        </div>

                                </div>
                                </div>
                            <!-- end sort by left -->    
                </div>    

                  
                </div>


                <div class="row">
                  
                        
                        <div class="clist">

                        <ul class="listwrapper">
                        <li class="clearfix">
                        <div class="listdetailwrap">
                            <div class="row">
                                <div class="col-md-9 ">
                                    <div class="col-md-1 col-xs-1">
                                    <div class="listcheckbox">
                                        <input type="checkbox" name="list_1" id="list_1" class="lisinglecheck">
                                        <label for="list_1"><span></span></label>
                                    </div>      
                                    </div>
                                    <div class="col-md-5 col-xs-5">
                                       
                                       <div class="meta1">
                                         <p class="li_title"><a href="subscribers.php">Just Me</a></p>
                                         <p class="date">Created Nov 11, 2015 02:12 am</p>
                                         <p class="li_desc2">No rating yet</p>
                                     </div>
                                    </div>
                                    <div class="col-md-2 col-xs-2">
                                    <div class="meta2">
                                    <p class="li_desc1">0</p>
                                    <p class="li_desc2">Subscribers</p>
                                    </div>
                                    </div>
                                    <div class="col-md-2 col-xs-2">
                                    <div class="meta2">
                                    <p class="li_desc1">0.0%</p>
                                    <p class="li_desc2">Opens</p>
                                    </div>
                                    </div>
                                    <div class="col-md-2 col-xs-2">
                                    <div class="meta2">
                                    <p class="li_desc1">0.0%</p>
                                    <p class="li_desc2">Clicks</p>
                                    </div>   
                                    </div>
                            </div>
                            <div class="col-md-3 col-xs-12 listactionwrap">
                                <label class="collapse morelink" for="_1">More</label>
                                <input id="_1" type="checkbox">
                                <div class="listmetaaction  pull-right">
                                    <span class="fa fa-user fa-1x adduser" for="_2" id="adduser"></span>
                                    <input id="_2" type="checkbox">

                                    <div class="btn-group">
                                    <button type="button" class="btn btn-default btn1">Stats</button>
                                    <button type="button" class="btn btn-default dropdown-toggle btn2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <span class="fa fa-angle-down"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                    <li><a href="members.php">Manage subscribers</a></li>
                                    <li><a href="members.php">Signup forms</a></li>
                                    <li><a href="members.php">Settings</a></li>
                                    <li><a href="import.php">Import</a></li>
                                    <li><a href="members.php">Export</a></li>
                                    <!-- <li><a href="#">Replicate List</a></li>
                                    <li><a href="#">Combine Lists</a></li> -->
                                    </ul>
                                    </div>
                                </div>
                            </div>
                            </div>
                            

                            <div  class="row">
                                 <div  class="col-md-1 col-xs-1 hideonmob">&nbsp;</div>
                                 <div  class="col-md-8 col-xs-12 ">
                                    
                            
                            <div class="content adduseredit"  id="adduseredit">
                            <div class="header">
                                <h4 class="title">Add a subscriber</h4>
                            </div>
                                <form>
                                    <div class="row">
                                  
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" placeholder="Email">
                                            </div>        
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" placeholder="Company" value="Mike">
                                            </div>        
                                        </div>
                                     
                                    </div>
                                    <div class="row">
                                     
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" placeholder="Last Name" value="Andrew">
                                            </div>        
                                        </div>
                                    </div>
                                    
                               
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                 <input type="checkbox" name="" id="terms1_1">
                                                    <label for="terms1_1"><span></span></label>
                                                 If this person is already on my list, update their profile.  
                                            </div>        
                                        </div>
                                     
                                    </div>

                                      <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                 <input type="checkbox" name="" id="terms1_2">
                                                    <label for="terms1_2"><span></span></label>
                                                This person gave me permission to email them. 
                                            </div>        
                                        </div>
                                     
                                    </div>

                                       <div class="row">
                                        <div class="col-md-12">
                                             <div class="alert alert-info alert-with-icon" data-notify="container">
                                                <span data-notify="icon" class="pe-7s-info infoicon"></span>
                                                <span data-notify="message">This is a notification with close button and icon and have many lines. You can see that the icon and the close button are always vertically aligned. This is a beautiful notification. So you don't have to worry about the style.</span>
                                            </div>  
                                        </div>
                                     
                                    </div>
                                    

                                  
                                 
                                    <button type="submit" class="btn btn-info greybtn">Update Profile</button>
                                    <a href="javascript:void(0)" class="cancel" id="cancel">Cancel</a>
                                    <div class="clearfix"></div>
                                </form>
                            </div>


                                  </div>
                            </div>
                        </div>
                        </li>
                        <li class="clearfix">
                        <div class="listdetailwrap">
                            <div class="row">
                                <div class="col-md-9 ">
                                    <div class="col-md-1 col-xs-1">
                                    <div class="listcheckbox">
                                        <input type="checkbox" name="list_2" id="list_2" class="lisinglecheck">
                                        <label for="list_2"><span></span></label>
                                    </div>      
                                    </div>
                                    <div class="col-md-5 col-xs-5">
                                       
                                       <div class="meta1">
                                         <p class="li_title"><a href="subscribers.php">Just Me</a></p>
                                         <p class="date">Created Nov 11, 2015 02:12 am</p>
                                         <p class="li_desc2">No rating yet</p>
                                     </div>
                                    </div>
                                    <div class="col-md-2 col-xs-2">
                                    <div class="meta2">
                                    <p class="li_desc1">0</p>
                                    <p class="li_desc2">Subscribers</p>
                                    </div>
                                    </div>
                                    <div class="col-md-2 col-xs-2">
                                    <div class="meta2">
                                    <p class="li_desc1">0.0%</p>
                                    <p class="li_desc2">Opens</p>
                                    </div>
                                    </div>
                                    <div class="col-md-2 col-xs-2">
                                    <div class="meta2">
                                    <p class="li_desc1">0.0%</p>
                                    <p class="li_desc2">Clicks</p>
                                    </div>   
                                    </div>
                            </div>
                            <div class="col-md-3 col-xs-12 listactionwrap">
                                <label class="collapse morelink" for="_1">More</label>
                                <input id="_1" type="checkbox">
                                <div class="listmetaaction  pull-right">
                                    <span class="fa fa-user fa-1x adduser" for="_2" id="adduser"></span>
                                    <input id="_2" type="checkbox">

                                    <div class="btn-group">
                                    <button type="button" class="btn btn-default btn1">Stats</button>
                                    <button type="button" class="btn btn-default dropdown-toggle btn2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <span class="fa fa-angle-down"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                    <li><a href="#">Manage subscribers</a></li>
                                    <li><a href="#">Signup forms</a></li>
                                    <li><a href="#">Settings</a></li>
                                    <li><a href="#">Import</a></li>
                                    <li><a href="#">Export</a></li>
                                    <li><a href="#">Replicate List</a></li>
                                    <li><a href="#">Combine Lists</a></li>
                                    </ul>
                                    </div>
                                </div>
                            </div>
                            </div>
                            

                            <div  class="row">
                                 <div  class="col-md-1 col-xs-1 hideonmob">&nbsp;</div>
                                 <div  class="col-md-8 col-xs-12 ">
                                    
                            
                            <div class="content adduseredit"  id="adduseredit">
                            <div class="header">
                                <h4 class="title">Add a subscriber</h4>
                            </div>
                                <form>
                                    <div class="row">
                                  
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" placeholder="Email">
                                            </div>        
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" placeholder="Company" value="Mike">
                                            </div>        
                                        </div>
                                     
                                    </div>
                                    <div class="row">
                                     
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" placeholder="Last Name" value="Andrew">
                                            </div>        
                                        </div>
                                    </div>
                                    
                               
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                 <input type="checkbox" name="" id="terms2_1">
                                                    <label for="terms2_1"><span></span></label>
                                                 If this person is already on my list, update their profile.  
                                            </div>        
                                        </div>
                                     
                                    </div>

                                      <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                 <input type="checkbox" name="" id="terms2_2">
                                                    <label for="terms2_2"><span></span></label>
                                                This person gave me permission to email them. 
                                            </div>        
                                        </div>
                                     
                                    </div>

                                       <div class="row">
                                        <div class="col-md-12">
                                             <div class="alert alert-info alert-with-icon" data-notify="container">
                                                <span data-notify="icon" class="pe-7s-info infoicon"></span>
                                                <span data-notify="message">
                                                This person will not receive a confirmation email from Email Zilla. Subscribers added manually won't have an opt-in IP address or date in your records. 
                                             </span>
                                            </div>  
                                        </div>
                                     
                                    </div>
                                    

                                  
                                 
                                    <button type="submit" class="btn btn-info greybtn">Update Profile</button>
                                    <a href="javascript:void(0)" class="cancel" id="cancel">Cancel</a>
                                    <div class="clearfix"></div>
                                </form>
                            </div>


                                  </div>
                            </div>
                        </div>
                        </li>
                        

                        
                        </ul>


                        </div>

               
                </div> 
               
            </div>



        </div>
        
    </div>   
</div>


<?php include('includes/footer.php'); ?>