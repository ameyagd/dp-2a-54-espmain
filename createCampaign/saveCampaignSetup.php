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
	

	file_put_contents('../campaign.json',json_encode($data));

	unset($data);


?>