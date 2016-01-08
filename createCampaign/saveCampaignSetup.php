<?php
	$file = file_get_contents('../campaign.json');
	$json = json_decode($file, true);
	unset($file);//prevent memory leaks for large json.


	foreach ($json['campaign'] as $field => $value) {
		$last_id=$value['info']['camp_id'];
		$max = max($value);
	}


	$newID = $max['camp_id'];

	$camp_id=$newID+1;

	$camp_name=$_REQUEST['campaignName'];
	$from_name=$_REQUEST['fromName'];
	$from_email_address=$_REQUEST['fromEmailAddress'];
	$start_date=$_REQUEST['campaignStartDate'];
	$end_date=$_REQUEST['campaignEndDate'];
	$email_subject=$_REQUEST['emailSubject'];

	echo "Campaign Name: ".$camp_name."<br/>";
	echo "From Name: ".$from_name."<br/>";
	echo "From Email Address: ".$from_email_address."<br/>";
	echo "Start Date: ".$start_date."<br/>";
	echo "End Date: ".$end_date."<br/>";
	echo "Email Subject: ".$email_subject."<br/>";


	$data[]=array(
			'info'=>
				array(
					'camp_id'=>$camp_id,
					'camp_name'=>$camp_name,					
					'status'=>'draft',
					'created_on'=>'',
					'created_by'=>'user 1',					
					'start_date'=>$start_date,
					'end_date'=>$end_date,
					'from_name'=>$from_name,
					'from_email_address'=>$from_email_address,
					'email_subject'=>$email_subject
				),
			'campaign_stats'=>
				array(
					'opens'=>''
				),
			'performance_details'=>
				array(
				),
			'creative_details'=>
				array(
				),
			'list_details'=>
				array(
				),
			'domain_details'=>
				array(
				)
			);


	// print json_encode($data);
	
	if(file_exists("../campaign.json"))
	{
		array_push($json->campaign,$data);
		file_put_contents('../campaign.json',json_encode($data));
	}
	else{
		
	}






	// if(file_exists("upload.json"))
	// {
	//     $temp_array = array();
	//     $temp_array = json_decode(file_get_contents('upload.json'));
	//     $upload_info = array('media_name'=>'b','media_category'=>'v','media_info'=>'c','media_location'=>'x','media_artist'=>'z');
	//     array_push($temp_array->upload->image, $upload_info);
	//     file_put_contents('upload.json', json_encode($temp_array));
	// }
	// else
	// {
	//     $upload_info = array();
	//     $upload_info['upload']['image'][] = array('media_name'=>'b','media_category'=>'v','media_info'=>'c','media_location'=>'x','media_artist'=>'z');
	//     $json = json_encode($upload_info);
	//     $file = "upload.json";
	//     file_put_contents($file, $json);
	// }
?>