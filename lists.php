<?php 
    $pagename="Lists";
    $pagetitle="Lists";
    include('includes/header.php'); 
?>
         
<div class="content">
   <div class="container">
      <div class="row">
         <div class="col-md-5">
            <div class="card">
               <div class="content clearfix">
                  <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                  <hr class="listhr">
               </div>
            </div>
         </div>
         <div class="col-md-7">
            <div class="card listwrap">
               <div class="content clearfix">
                  <!--  -->
                 
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
                     <div  class="col-md-4">
                        <div class="pull-right"><a href="newlist.php" class="btn greybtn" id="addlistbtn">Create List</a></div>
                     </div>
                  </div>
                  <div class="row">
                     <div id="clist" class="clist">
                        <ul id="listwrapper" class="listwrapper"></ul>
                     </div>
                     <!-- clist end -->
                  </div>
                  <!--  -->
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
        title: {
            text: 'Monthly Lists Performance',
            x: -20 //center
        },
        subtitle: {
            text: 'Source: WorldClimate.com',
            x: -20
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: 'Ratingsin terms of Opens & Clicks'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: '°C'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'List Name 1',
            data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
        }, {
            name: 'List Name 2',
            data: [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5]
        }, {
            name: 'List Name 3',
            data: [-0.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6, 17.9, 14.3, 9.0, 3.9, 1.0]
        }, {
            name: 'List Name 4',
            data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
        }]
    });
});

$.getJSON("listdata.json", function(data){
        console.log(data['list']);
         $.each(data['list'], function (i, list) {
                    //Create new row for each record

                   $('#listwrapper').append("<li class='clearfix'><div class='listdetailwrap'><div class='row'><div class='col-md-9 '><div class='col-md-1 col-xs-1'> <div class='listcheckbox'> <input type='checkbox' name='list_"+list['listid']+"' id='list_"+list['listid']+"' class='lisinglecheck'> <label for='list_"+list['listid']+"'><span></span></label> </div> </div> <div class='col-md-5 col-xs-5'> <div class='meta1'> <p class='li_title'><a href='list.php?listid="+list['listid']+"'>"+list['listname']+"</a></p> <p class='date'>Created Nov 11, 2015 02:12 am</p> <p class='li_desc2'>No rating yet</p> </div> </div> <div class='col-md-2 col-xs-2'> <div class='meta2'> <p class='li_desc1'>"+list['subscriberscount']+"</p> <p class='li_desc2'>Subscribers</p> </div> </div> <div class='col-md-2 col-xs-2'> <div class='meta2'> <p class='li_desc1'>"+list['opens']+"%</p> <p class='li_desc2'>Opens</p> </div> </div> <div class='col-md-2 col-xs-2'> <div class='meta2'> <p class='li_desc1'>"+list['clicks']+"%</p> <p class='li_desc2'>Clicks</p> </div> </div> </div> <div class='col-md-3 col-xs-12 listactionwrap'> <label class='collapse morelink' for='_1'>More</label> <input id='_1' type='checkbox'> <div class='listmetaaction pull-right'> <span class='fa fa-user fa-1x adduser' for='_2' id='adduser'></span> <input id='_2' type='checkbox'> <div class='btn-group'> <button type='button' class='btn btn-default btn1'>Stats</button> <button type='button' class='btn btn-default dropdown-toggle btn2' data-toggle='dropdown' aria-haspopup='true' aria-expanded='true'> <span class='fa fa-angle-down'></span> <span class='sr-only'>Toggle Dropdown</span> </button> <ul class='dropdown-menu'> <li><a href='list.php?listid="+list['listid']+"'>Manage subscribers</a></li> <li><a href='list.php?listid="+list['listid']+"'>Import</a></li> <li><a href='list.php?listid="+list['listid']+"'>Export</a></li> </ul> </div> </div> </div> </div> <div class='row'> <div class='col-md-1 col-xs-1 hideonmob'>&nbsp;</div> <div class='col-md-8 col-xs-12 '> <div class='content adduseredit' id='adduseredit'> <div class='header'> <h4 class='title'>Add a subscriber</h4> </div> <form> <div class='row'> <div class='col-md-12'> <div class='form-group'> <label for='exampleInputEmail1'>Email address</label> <input type='email' class='form-control' placeholder='Email'> </div> </div> </div> <div class='row'> <div class='col-md-12'> <div class='form-group'> <label>First Name</label> <input type='text' class='form-control' placeholder='Company' value='Mike'> </div> </div> </div> <div class='row'> <div class='col-md-12'> <div class='form-group'> <label>Last Name</label> <input type='text' class='form-control' placeholder='Last Name' value='Andrew'> </div> </div> </div> <div class='row'> <div class='col-md-12'> <div class='form-group'> <input type='checkbox' name='' id='terms1_1'> <label for='terms1_1'><span></span></label> If this person is already on my list, update their profile. </div> </div> </div> <div class='row'> <div class='col-md-12'> <div class='form-group'> <input type='checkbox' name='' id='terms1_2'> <label for='terms1_2'><span></span></label> This person gave me permission to email them. </div> </div> </div> <div class='row'> <div class='col-md-12'> <div class='alert alert-info alert-with-icon' data-notify='container'> <span data-notify='icon' class='pe-7s-info infoicon'></span> <span data-notify='message'>This is a notification with close button and icon and have many lines. You can see that the icon and the close button are always vertically aligned. This is a beautiful notification. So you don't have to worry about the style.</span> </div> </div> </div> <button type='submit' class='btn btn-info greybtn'>Update Profile</button> <a href='javascript:void(0)' class='cancel' id='cancel'>Cancel</a> <div class='clearfix'></div> </form> </div> </div> </div> </div> </li>");
                // alert(list['listname']);
                });
              

    });
</script>