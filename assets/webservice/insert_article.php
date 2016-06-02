<?php
include "connection.php";
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$article_data = $_REQUEST['article_data'];

foreach($article_data as $art_data)
{
	$time = strtotime($art_data["pubdate"]);
	$pubdate = date('Y-m-d',$time);
	
try {
	$sql = "INSERT INTO articles (title, keywords, reportid, name, type, theme, pubdate, pdffilename) VALUES (:title, :keywords, :reportid, :name, :type, :theme, :pubdate, :pdffilename)";
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam("title", $art_data["article_title"]);
	$stmt->bindParam("keywords", $art_data["article_keywords"]);
	$stmt->bindParam("reportid", $art_data["report_id"]);
	$stmt->bindParam("name", $art_data["article_name"]);
	$stmt->bindParam("type", $art_data["article_type"]);
	$stmt->bindParam("theme", $art_data["article_theme"]);
	$stmt->bindParam("pubdate", $pubdate);
	$stmt->bindParam("pdffilename", $art_data["pdffilename"]);
	//echo 1;
	$stmt->execute();
	$statusOut = array("code" => '1', "message" => "Success");
	$fullOut = array("status" => $statusOut);
	$fullJSON = json_encode($fullOut);
	print_r($fullJSON);
	
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