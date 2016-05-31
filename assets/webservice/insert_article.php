<?php
include "connection.php";
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
//$article_data=array();
$article_data = $_REQUEST['article_data'];

//echo count($article_data);
$article_data2 = json_encode($article_data);
//print_r($article_data[0]["article_title"]);

foreach($article_data as $art_data)
{
	//print_r(json_encode($art_data["article_title"]));
	//echo $art_data[0]["article_title"];

try {
	$sql = "INSERT INTO articles (title, keywords, name, type, theme) VALUES (:title, :keywords, :name, :type, :theme)";
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam("title", $art_data["article_title"]);
	$stmt->bindParam("keywords", $art_data["article_keywords"]);
	$stmt->bindParam("name", $art_data["article_name"]);
	$stmt->bindParam("type", $art_data["article_type"]);
	$stmt->bindParam("theme", $art_data["article_theme"]);
	
	$stmt->execute();
	
} catch (PDOException $e) {
	// DB Connection Error
	$errorMessage = $e->getMessage();
	$statusOut = array("code" => '-1', "message" => "DB Error: $errorMessage");
	$fullOut = array("status" => $statusOut);

	// Output (Note: Refactor into function?)
	$fullJSON = json_encode($fullOut); // JSON encode
	//print_r($fullJSON); // Output for ajax
	exit;
 }
}
?>