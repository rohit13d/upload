<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
$article_data=array();
$article_data = $_REQUEST['article_data'];
echo count($article_data);
/*try {
	$sql = "INSERT INTO favouritearticles (userid, articleid) VALUES ('".$userid."','".$articleid."')";
	$stmt = $pdo_local->prepare($sql);
	$stmt->execute();
	$pdo_local = null;
	$statusOut = array("code" => '0', "message" => "New record created successfully");
	$fullOut = array("status" => $statusOut);
	$fullJSON = json_encode($fullOut); // JSON encode
	print_r($fullJSON); // Output for ajax
} catch (PDOException $e) {
	// DB Connection Error
	$errorMessage = $e->getMessage();
	$statusOut = array("code" => '-1', "message" => "DB Error: $errorMessage");
	$fullOut = array("status" => $statusOut);

	// Output (Note: Refactor into function?)
	$fullJSON = json_encode($fullOut); // JSON encode
	print_r($fullJSON); // Output for ajax
	exit;
 }*/
?>