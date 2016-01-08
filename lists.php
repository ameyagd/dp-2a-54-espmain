<?php 
    $pagename="Lists";
    $pagetitle="Lists";
    include('includes/header.php'); 
?>
                     
                     
        <div class="content">
            <div class="container-fluid"> 
               

      <div class="row">
         <div class="col-md-5">
            <div class="card">
               <div class="content clearfix">
                  <div id="container" style="width:100%; height:400px;"></div>
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
                                            <option value="">Name</option>
                                            <option value="">Date created</option>
                                        </select>
                                    </div> 

                                    <div class="pull-right">
                                        <a href="newlist.php" class="btn btn-default crCampaign">Create List</a>
                                    </div>                               
                                </div>
                  <div class="campaignList">
                        <!-- php code for json data-->

                        <?php
                        $json = file_get_contents('listdata.json');
                        $obj = json_decode($json, true);
                        $listdata = $obj['lists'];
                        // print_r($listdata);
                        foreach ($listdata as $value) {
                        $checkID = $value['info']['list_id'];  
                        ?>
                        <div class="campaignDetailsWrap clearfix">
                            <div class="pull-left">
                                <input type="checkbox" id="list<?php echo $checkID; ?>Check" name="list<?php echo $checkID; ?>Check" ><label for="list<?php echo $checkID; ?>Check"><span></span></label>
                            </div>
                            <div class="col-md-5">
                                <h5><a href="list.php?listid=<?php echo $value['info']['list_id'] ?>"><?php echo $value['info']['list_name']; ?></a></h5>
                                <span class="listCreatedOn"><b>Created On:</b> <?php echo $value['info']['created_at']; ?></span>
                                <span class="listCreatedBy"><b>Created By:</b> <?php echo $value['info']['created_by']; ?></span>
                            </div>
                            <div class="col-md-5">
                                <div class="col-sm-5 col-xs-6">
                                    <span class="listOpens"><?php echo count($value['subscribers']); ?></span>
                                    <span class="listLabel">Subscribers</span>
                                </div>
                                <div class="col-sm-4 col-xs-3">
                                    <span class="listOpens"><?php echo $value['performance_details']['open_rate']; ?>%</span>
                                    <span class="listLabel">Opens</span>
                                </div>
                                <div class="col-sm-3 col-xs-3">
                                    <span class="listOpens"><?php echo $value['performance_details']['click_rate']; ?>%</span>
                                    <span class="listLabel">Clicks</span>
                                </div>
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
                                        <li><a href="list.php?listid=<?php echo $value['info']['list_id'] ?>">Manage subscribers</a></li>
                                        <li><a href="list.php?listid=<?php echo $value['info']['list_id'] ?>">Import</a></li>
                                        <li><a href="list.php?listid=<?php echo $value['info']['list_id'] ?>">Export</a></li>
                                      </ul>
                                    </div>
                                </div>
                            </div>
                        </div>



                          <?php
                          }
  
                          ?>


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

</script>