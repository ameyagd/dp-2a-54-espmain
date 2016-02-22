<?php
	$campaignID=$_REQUEST['campID'];


	$campaignName=$_REQUEST['campaignName'];
	$fromName=$_REQUEST['fromName'];
	$fromEmailAddress=$_REQUEST['fromEmailAddress'];
	$campaignStartDate=$_REQUEST['campaignStartDate'];
	$campaignEndDate=$_REQUEST['campaignEndDate'];
	$emailSubject=$_REQUEST['emailSubject'];


	$str = file_get_contents('../campaign.json');
    $json = json_decode($str, true);

    foreach ($json['campaign'] as $field => $value) 
    {
		if($value['info']['camp_id']==$campaignID)
		{
        	$json['campaign'][$field]['info']['camp_name']=$campaignName;
            $json['campaign'][$field]['info']['from_name']=$fromName;
            $json['campaign'][$field]['info']['from_email_address']=$fromEmailAddress;
            $json['campaign'][$field]['info']['start_date']=$campaignStartDate;
            $json['campaign'][$field]['info']['end_date']=$campaignEndDate;
            $json['campaign'][$field]['info']['email_subject']=$emailSubject;
        	break;
        }   	
        
    }

    $newjson= json_encode($json);
    file_put_contents('../campaign.json', $newjson);

    header('Location:editCampaignSetup.php?id='.$campaignID.'&error=u');
    //TEST JSON FILE CODE - WORKING
    // $jsonString = file_get_contents('../test.json');
    // $data = json_decode($jsonString, true);

    // foreach ($data as $key => $entry) 
    // {
    //     if ($entry['activity_code'] == '1') 
    //     {
    //         $data[$key]['activity_name'] = $campaignName;
    //     }
    // }

    // $newJsonString = json_encode($data);
    // file_put_contents('../test.json', $newJsonString);


?>



    