<?php
// *** Config ***
$servername = "localhost";
$cf_db = "uplaod";
$cf_user = "root";
$cf_pword = "Novel1012";

try {
	$pdo = new PDO("mysql:host=$servername;dbname=upload", $cf_user, $cf_pword);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 	
	// Production Value: PDO::ERRMODE_SILENT
	//echo "connected";
} catch (Exception $e) {
	// DB Connection Error
	$queryTime = round(microtime(true) - $tcStart, 3);
	$statusOut = array("code" => -2, "message" => "Error: Could Not Connect to DB.", "count" => 0, "time" => $queryTime);
	$fullOut = array("status" => $statusOut);

	// Output (Note: Refactor into function)
	$fullJSON = json_encode($fullOut); // JSON encode
	print_r($fullJSON); // Output for ajax
	exit;
}
?>