<?php 
    $pagename="List Name";
    $pagetitle="List Name";
    include('includes/header.php');
    $listid = $_REQUEST['listid'];
?>
<input type="hidden" id="listid" value="<?php echo $listid ?>"/>
<div class="content">
   <div class="container">
      <div class="row">
         <div class="col-md-5">
            <div class="card">
               <div class="content clearfix" id="listsinglechart">
                  <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
               </div>
            </div>
         </div>
         <div class="col-md-7">
            <div class="card listwrap">
               <div class="content">
   <div class="container">
      <!--  <div class="row">
         <div class="col-md-12 col-xs-12">
            <div id="liststats" class="collapse">
               <div id="container" style="min-width: 800px; height: 500px; max-width: 600px; margin: 0 auto"></div>
               <hr class="listhr">
            </div>
         </div>
         </div> -->
       
      <div class="row mlistnav">
         <div class="col-md-8 ">
            <ul class="nav navbar-nav">
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
                     <li class=""><a href="javascript:void(0);" class="madduser">Add a subscriber</a></li>
                     <li class=""><a href="javascript:void(0);" class="mimportbtn">Import subscribers</a></li>
                  </ul>
               </li>
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  Statistics
                  <b class="fa fa-angle-down"></b>
                  </a>
                  <ul class="dropdown-menu">
                     <li class=""><a href="javascript:void(0);" id="liststats">List Statistics</a></li>
                     <li class=""><a href="javascript:void(0);" id="overallliststats">Overall Statistics</a></li>
                  </ul>
                  <!-- <ul class="dropdown-menu">                 <li class=""><a href="javascript:void(0)" data-toggle="collapse" data-target="#liststats">List Statistics</a></li>
                     <li class=""><a href="javascript:void(0)" data-toggle="collapse" data-target="#overallliststats">Overall Statistics</a></li>
                     </ul> -->
               </li>
            </ul>
         </div>
         <div  class="col-md-4">
            <div class="pull-right unsubscribewrap">
               <a href="javascript:void(0);" class="btn lgreybtn madduser">Add Subscriber</a>
               <a href="javascript:void(0);" class="btn lgreybtn mdeluser" id="">Delete</a>
            </div>
         </div>
      </div>
      <!--import form -->
      <div class="row" id="mimportbox" >
         <div class="col-md-12">
            <div class="container importboxcontainer">
               <div class="card">
                  <form id="importform" name="importform" method="post" action="http://localhost/dp-2a-54-espmain/list.php?listid=1&import=true" enctype="multipart/form-data">
                     <div class="row">
                        <div class="col-md-12">
                           <h4 class="listtitle">Where do you want to import subscribers from?</h4>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="form-group">
                              <input type="radio" name="radioList1" id="radioList1">
                              <label class="rlabel" for="radioList1"><span></span>CSV or tab-delimited text file</label>
                              <span class="rdesc">Import contacts from .csv files</span>
                           </div>
                           <div class="form-group listimport">
                              <input type="file" name="importcsv" id="importcsv">
                           </div>
                           <!--   <div class="row">
                              <div class="col-md-12">
                                  <div class="form-group">
                                       <input type="checkbox" name="" id="terms2">
                                          <label for="terms2"><span></span></label>
                                      <b>I understand that my billing plan may be automatically upgraded.</b> 
                              <div class="checkbox_description">If your import causes your list to exceed your Forever Free Plan subscriber limit, you’ll need to <a href="" target="_blank">upgrade your billing plan</a> to accommodate the new subscribers before you can send. <a href="" target="_blank" >Undo your list import before you send</a> to revert to the Forever Free Plan.</div>
                              
                                  </div>        
                              </div>
                              
                              </div> -->
                           <div class="form-group" style="padding-top:10px">
                              <a href="javascript:void(0);" id="importsubmit" class="btn btn-info greybtn">Submit</a>
                              <a href="lists.php" class="cancel">Back</a>
                              <div class="clearfix"></div>
                           </div>
                        </div>
                     </div>
                  </form>
                  <?php
                     // print_r($_FILES['importcsv']['tmp_name']);
                     if(isset($_FILES['importcsv']['tmp_name'])){
                       $sourcePath = $_FILES['importcsv']['tmp_name'];
                       $targetPath = "csv/import/".$_FILES['importcsv']['name'];
                     
                       move_uploaded_file($sourcePath,$targetPath);
                     
                     $csv= file_get_contents($targetPath);
                     $array = array_map("str_getcsv", explode("\n", $csv));
                     $json = json_encode($array);
                     print_r($json);
                     echo "<br>This data added to database after that <br>We will Fetch JSON file & refresh subscriber data";
                     }
                       
                     ?>
               </div>
            </div>
         </div>
      </div>
      <!-- end import form -->
      <!-- add subscriber -->
      <div class="row madduseredit" id="madduseredit">
         <!-- <div  class="col-md-1 col-xs-1 hideonmob">&nbsp;</div> -->
         <div  class="col-md-8 col-xs-12 ">
            <div class="content">
               <div class="header">
                  <h4 class="title">Add a subscriber</h4>
               </div>
               <form>
                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                           <label>Last Name</label>
                           <input type="text" class="form-control" placeholder="Last Name" value="Andrew">
                        </div>
                     </div>
                    
                      <div class="col-md-6">
                        <div class="form-group">
                           <label>First Name</label>
                           <input type="text" class="form-control" placeholder="Company" value="Mike">
                        </div>
                     </div>
                  </div>
                 
                  <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                           <label for="exampleInputEmail1">Email address</label>
                           <input type="email" class="form-control" placeholder="Email">
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
               <div class="row">
                  <div class="col-md-8">
                     <h4 class="title">View Subscribers</h4>
                  </div>
               </div>
               <div class="table-responsive subscribertablewrap">
                  <table id="memberlist" class="table table-bordred table-striped memberlist checklistclass">
                     <thead>
                        <th>
                           <div class="listcheckall">    
                              <input type="checkbox" name="mlistcheckall" id="listcheckall" onclick="checkChecked()">
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

                      <!-- php code for json data-->
                        <?php
                        $json = file_get_contents('listdata.json');
                        $obj = json_decode($json, true);
                        $listdata = $obj['lists'];
                        $currentlistid = $listid - 1; //to acheived for array
                        $subscribersdata = $listdata[$currentlistid]['subscribers'];
                      

                        foreach ($subscribersdata as $value) {
                         $checkID = $value['id'];
                        ?>
                           <tr>
                              <td>
                                 <div class="listcheckbox excludeThisClass">
                                    <input type="checkbox" name="list<?php echo $checkID; ?>Check" id="list<?php echo $checkID; ?>Check" class="lisinglecheck" onclick="checkChecked()">
                                    <label for="list<?php echo $checkID; ?>Check"><span></span></label>
                                 </div>
                              </td>
                              <td><?php echo $value['email'] ?></td>
                              <td><?php echo $value['fname'] ?></td>
                              <td><?php echo $value['lname'] ?></td>
                              <td><?php echo $value['ip'] ?></td>
                              <td><?php echo $value['lasteditdate'] ?></td>
                              <td>
                                 <p data-placement="top" data-toggle="tooltip" title="Edit" onclick="editsubscriberdetails('<?php echo $value['email']; ?>','<?php echo $value['fname']; ?>','<?php echo $value['lname']; ?>')"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p>
                              </td>
                              <td>
                                 <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p>
                              </td>
                           </tr> 



<?php

}
?>

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
                                 <input class="form-control" type="email" value="kbl@gmail.com" name="email">
                              </div>
                              <div class="form-group">
                                 <input class="form-control" type="text" value="Ryan" name="fname">
                              </div>
                              <div class="form-group">
                                 <input class="form-control" type="text" value="Desouza" name="lname">
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

$("#liststats").click(function(){
  $('#listsinglechart  #container').highcharts({
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
})

$("#overallliststats").click(function(){
  
    $('#listsinglechart #container').highcharts({
              chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Browse Lists Success January, 2015 to May, 2015'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: 'Lists',
            colorByPoint: true,
            data: [{
                name: 'List Name 1',
                y: 56.33
            }, {
                name: 'List Name 2',
                y: 24.03,
                sliced: true,
                selected: true
            }, {
                name: 'List Name 3',
                y: 10.38
            }, {
                name: 'List Name 4',
                y: 4.77
            }, {
                name: 'Others',
                y: 0.91
            }]
        }]
        });

    
   
});


$("#importsubmit").click(function(){ // bCheck is a input type button
    var fileName = $("#importcsv").val();
    var exts = ['csv'];
    if(fileName) { // returns true if the string is not empty

        

        if ( fileName ) {
        // split file name at dot
        var get_ext = fileName.split('.');
        // reverse name to check extension
        get_ext = get_ext.reverse();
        // check file type is valid as given in 'exts' array
        if ( $.inArray ( get_ext[0].toLowerCase(), exts ) > -1 ){
          $( "#importform" ).submit();
        } else {
          alert( 'Invalid file!' );
        }

     }   
    } else { // no file was selected

        var importsdata = $("#importsdata").val();
        if(importsdata==""){
            alert("Neither file selected nor manual data added");
        }else{
            $( "#importform" ).submit();
        }

        
    }
});



</script>
