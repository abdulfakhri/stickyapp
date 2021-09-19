<?php
session_start();
if(empty($_SESSION["username"]))
{
    header('location:../login.php');
}
	require_once '../includes/db.php';

	require_once '../Controllers/CampaignController.php';

	$db = new DBController();

	$conn = $db->connect();

	$dCtrl  =	new CampaignController($conn);

	$camps = $dCtrl->index();

                            foreach($camps as $camp) : 

                            $style=$camp['selected_style'];
                            $startDate=$camp['date_reg'];
                            $user=$camp['user_key'];
                            $base_url=$_SERVER['HTTP_REFERER'];

                            $js_code= '<iframe width="300" height="90" 
style="position:absolute;bottom:5;left:5;border:1px solid black;border-radius: 20px;" 
src='.$base_url.'/popup/fetch_data.php?q='.$user.'" title="Javascript Code" frameborder="1" allow="accelerometer; 
autoplay; clipboard-write;encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
</iframe>';

$myVar = htmlentities($js_code, ENT_QUOTES);
echo($myVar);


 endforeach;
 
 ?>

