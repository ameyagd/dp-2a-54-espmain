<?php 
    $pagename="Subscribers";
    $pagetitle="Subscribers";
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
         </div>  -->   
      <div class="row">
         <div class="col-md-12 col-xs-12">
            <h2><button type="button" class="btn btn-info pull-right" data-toggle="collapse" data-target="#demo">Show/ Hide Stats</button></h2>
            <br><br><br>
            <div id="demo" class="collapse in">
               <div id="container" style="min-width: 800px; height: 500px; max-width: 600px; margin: 0 auto"></div>
               <hr class="listhr">
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <h4 class="listtitle">List Name</h4>
         </div>
         <div class="col-md-12">
            <div class="dropdown mlistswitch">
               <button class="btn dropdown-toggle" type="button" id="dropdownMenuCamp" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Switch list
               <span class="fa fa-angle-down"></span>
               </button>
               <ul class="dropdown-menu" aria-labelledby="dropdownMenuCamp">
                  <li><a href="#">List Name 1</a></li>
                  <li><a href="#">List Name 2</a></li>
               </ul>
            </div>
         </div>
         <div class="col-md-12 mlistnav">
            <ul class="nav navbar-nav">
               <!-- <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        Stats
                        <b class="fa fa-angle-down"></b>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Overview</a></li>
                    <li><a href="#">Social Profiles</a></li>
                  </ul>
                  </li>
                  -->
               <!--  <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        Manage subscribers
                        <b class="fa fa-angle-down"></b>
                  </a>
                  <ul class="dropdown-menu">
                      <li class="current"><a href="">View subscribers</a></li>
                       <li class=""><a href="">Unsubscribe addresses</a></li>
                       <li class=""><a href="">Groups</a></li>
                       <li class=""><a href="">Segments</a></li>
                       <li class=""><a href="">Import history</a></li>
                       <li class=""><a href="">Subscriber exports</a></li>
                       <li class=""><a href="">Delete all subscribers</a></li>
                  </ul>
                  </li> -->
               <!-- <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        Settings
                        <b class="fa fa-angle-down"></b>
                  </a>
                  <ul class="dropdown-menu">
                           <li class=""><a href="">List name and defaults</a></li>
                           <li class=""><a href="">Publicity settings</a></li>
                           <li class=""><a href="">List fields and *|MERGE|* tags</a></li>
                           <li class=""><a href="">Required email footer content</a></li>
                           <li class=""><a href="">Email Beamer</a></li>
                           <li class=""><a href="">Google Analytics on archive/list pages</a></li>
                           <li class=""><a href="">Webhooks</a></li>
                  </ul>
                  </li> -->
               <li class="nactive">
                  <a href="" class="mlistfchild">
                  Manage subscribers
                  </a>
               </li>
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  Add subscribers
                  <b class="fa fa-angle-down"></b>
                  </a>
                  <ul class="dropdown-menu">
                     <li class=""><a href="" class="madduser">Add a subscriber</a></li>
                     <li class=""><a href="import.php">Import subscribers</a></li>
                  </ul>
               </li>
               <!-- <li>
                  <a href="">
                      Signup forms
                   </a>
                  </li> -->
               <li class="">
                  <a href="" class="mlistfchild">
                  Statistics
                  </a>
               </li>
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                     Settings
                     <!-- <b class="fa fa-angle-down"></b> -->
                  </a>
                  <!-- <ul class="dropdown-menu">
                     <li class=""><a href="#">List name and defaults</a></li>
                     </ul> -->
               </li>
            </ul>
         </div>
      </div>
      <!-- add subscriber -->
      <div class="row madduseredit" id="madduseredit">
         <div  class="col-md-1 col-xs-1 hideonmob">&nbsp;</div>
         <div  class="col-md-8 col-xs-12 ">
            <div class="content">
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
                           <input type="checkbox" name="" id="terms">
                           <label for="terms"><span></span></label>
                           If this person is already on my list, update their profile.  
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <div class="form-group">
                           <input type="checkbox" name="" id="terms2">
                           <label for="terms2"><span></span></label>
                           This person gave me permission to email them. 
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <div class="alert alert-info alert-with-icon" data-notify="container">
                           <span data-notify="icon" class="pe-7s-info infoicon"></span>
                           <span data-notify="message">
                           This person will not receive a confirmation email from Email Zilla. Subscribers added manually won't have an opt-in IP address or date in your records.</span>
                        </div>
                     </div>
                  </div>
                  <button type="submit" class="btn btn-info greybtn">Update Profile</button>
                  <a href="javascript:void(0)" class="cancel" id="mcancel">Cancel</a>
                  <div class="clearfix"></div>
               </form>
            </div>
         </div>
      </div>
      <!-- end add subscriber -->
      <div class="row">
         <div class="col-md-12">
            <div class="card card-plain mlistbox">
               <div class="header">
                  <h4 class="title">View Subscribers</h4>
               </div>
               <div class="row">
                  <div class="col-md-8">
                     <!-- <a href="javascript:void(0);" class="btn lgreybtn" id="exportmlistbtn">Export List</a> -->
                  </div>
                  <div  class="col-md-4">
                     <div class="pull-right unsubscribewrap">
                        <a href="javascript:void(0);" class="btn lgreybtn" id="unsubscribemlistbtn">Unsubscribe</a>
                        <a href="javascript:void(0);" class="btn lgreybtn madduser">Add</a>
                        <a href="javascript:void(0);" class="btn lgreybtn mdeluser" id="">Delete</a>
                     </div>
                  </div>
               </div>
               <!--                             <div class="content table-responsive table-full-width">
                  <table class="table table-hover memberlist" id="example">
                      <thead>
                          <th>
                          <div class="listcheckall">    
                          <input type="checkbox" name="mlistcheckall" id="listcheckall">
                          <label for="listcheckall"><span></span></label>
                          </div>
                          </th>
                          <th>Email</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>IP Address</th>
                          <th>Last Changed</th>
                          <th>Edit</th>
                      </thead>
                      <tbody>
                          <tr>
                              <td>
                                  <div class="listcheckbox">
                                      <input type="checkbox" name="list_1" id="mlist_1" class="lisinglecheck">
                                      <label for="mlist_1"><span></span></label>
                                  </div>
                              </td>
                              <td>abc@gmail.com</td>
                              <td>Dakota</td>
                              <td>Rice</td>
                              <td>198.168.l.l</td>
                              <td>11/20/15 3:05AM</td>
                              <td>Edit</td>
                          </tr>
                         <tr>
                              <td>
                                  <div class="listcheckbox">
                                      <input type="checkbox" name="list_2" id="mlist_2" class="lisinglecheck">
                                      <label for="mlist_2"><span></span></label>
                                  </div>
                              </td>
                              <td>kbl@gmail.com</td>
                              <td>Ryan</td>
                              <td>Desouza</td>
                              <td>198.168.l.l</td>
                              <td>11/20/15 3:05AM</td>
                              <td>Edit</td>
                          </tr>
                         
                          
                      </tbody>
                  </table>
                     
                  </div> -->
               <!-- http://bootsnipp.com/snippets/featured/bootstrap-snipp-for-datatable -->
               <div class="table-responsive subscribertablewrap">
                  <table id="memberlist" class="table table-bordred table-striped memberlist">
                     <thead>
                        <th>
                           <div class="listcheckall">    
                              <input type="checkbox" name="mlistcheckall" id="listcheckall">
                              <label for="listcheckall"><span></span></label>
                           </div>
                        </th>
                        <th>Email</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>IP Address</th>
                        <th>Last Changed</th>
                        <th>Edit</th>
                        <th>Delete</th>
                     </thead>
                     <tbody>
                        <tr>
                           <td>
                              <div class="listcheckbox">
                                 <input type="checkbox" name="list_1" id="mlist_1" class="lisinglecheck">
                                 <label for="mlist_1"><span></span></label>
                              </div>
                           </td>
                           <td>ryan@gmail.com</td>
                           <td>Ryan</td>
                           <td>Desouza</td>
                           <td>198.168.l.l</td>
                           <td>11/20/15 3:05AM</td>
                           <td>
                              <p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p>
                           </td>
                           <td>
                              <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <div class="listcheckbox excludeThisClass">
                                 <input type="checkbox" name="list_2" id="mlist_2" class="lisinglecheck">
                                 <label for="mlist_2"><span></span></label>
                              </div>
                           </td>
                           <td>raj@gmail.com</td>
                           <td>Raj</td>
                           <td>Dixit</td>
                           <td>198.168.l.l</td>
                           <td>11/20/15 3:05AM</td>
                           <td>
                              <p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p>
                           </td>
                           <td>
                              <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <div class="listcheckbox excludeThisClass">
                                 <input type="checkbox" name="list_3" id="mlist_3" class="lisinglecheck">
                                 <label for="mlist_3"><span></span></label>
                              </div>
                           </td>
                           <td>scott@gmail.com</td>
                           <td>Scott</td>
                           <td>Futrado</td>
                           <td>198.168.l.l</td>
                           <td>11/20/15 3:05AM</td>
                           <td>
                              <p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p>
                           </td>
                           <td>
                              <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p>
                           </td>
                        </tr>
                     </tbody>
                  </table>
                  <!-- start modal modal -->
                  <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                              <h4 class="modal-title custom_align" id="Heading">Edit Subscriber Details</h4>
                           </div>
                           <div class="modal-body">
                              <div class="form-group">
                                 <input class="form-control " type="email" value="kbl@gmail.com">
                              </div>
                              <div class="form-group">
                                 <input class="form-control " type="text" value="Ryan">
                              </div>
                              <div class="form-group">
                                 <input class="form-control " type="text" value="Desouza">
                              </div>
                              <!-- <div class="form-group">
                                 <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>
                                 </div> -->
                           </div>
                           <div class="modal-footer ">
                              <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
                           </div>
                        </div>
                        <!-- /.modal-content --> 
                     </div>
                     <!-- /.modal-dialog --> 
                  </div>
                  <!-- end modal editor   -->
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>


<?php include('includes/footer.php'); ?>
<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'List Performance Compared To Others'
        },
        xAxis: {
            categories: ['List Name 1', 'List Name 2', 'List Name 3', 'List Name 4']
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Total List Reached'
            }
        },
        tooltip: {
            pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
            shared: true
        },
        plotOptions: {
            column: {
                stacking: 'percent'
            }
        },
        series: [{
            name: 'Open',
            data: [5, 2, 10, 20]
        }, {
            name: 'Clicks',
            data: [3, 2, 5, 10]
        }, {
            name: 'Leads',
            data: [2, 2, 3, 6]
        }]
    });
});
</script>