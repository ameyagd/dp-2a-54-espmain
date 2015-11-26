<?php 
    $pagename="Lists";
    include('includes/header.php'); 
?>
                     
                     
        <div class="content">
            <div class="container-fluid">    
                <div class="row">
                    <div class="col-md-12">
                        <div class="header">
                            <h4 class="title" style="margin-top:0">
                                Manage Lists <div class="pull-right"><a href="" id="createOffer">Create a list</a></div>
                            </h4>
                        </div>
                    </div>                  
                </div>

                <div class="row">
                          <div class="col-md-12">
                        <div class="card card-plain">
                            <div class="header">
                                <h4 class="title"></h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover">
                                    <thead>
                                        <th>Name</th>
                                        <th>Subscribers</th>
                                        <th>Unsubscribers</th>
                                        <th>Delivered</th>
                                        <th>Opens</th>
                                        <th>Clicks</th>
                                        <th>Bounces</th>
                                        <th>Complaints</th>
                                        <th>Actions</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>List 1</td>
                                            <td>0</td>
                                            <td>0 (0%)</td>
                                            <td>0 (0%)</td>
                                            <td>0 (0%)</td>
                                            <td>0 (0%)</td>
                                            <td>0 (0%)</td>
                                            <td>0 (0%)</td>
                                            <td>
                                                <select>
                                                        <option>Actions</option>
                                                        <option>Edit List</option>
                                                        <option>Add a subscriber</option>
                                                        <option>Delete List</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>List 2</td>
                                            <td>10</td>
                                            <td>0 (0%)</td>
                                            <td>0 (0%)</td>
                                            <td>0 (0%)</td>
                                            <td>0 (0%)</td>
                                            <td>0 (0%)</td>
                                            <td>0 (0%)</td>
                                            <td>
                                                <select>
                                                        <option>Actions</option>
                                                        <option>Edit List</option>
                                                        <option>Add a subscriber</option>
                                                        <option>Delete List</option>
                                                </select>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                                   
                            </div>
                        </div>
                    </div> 
 
                </div>
                    
            </div>   
        </div>
        
    </div>   
</div>


<?php include('includes/footer.php'); ?>