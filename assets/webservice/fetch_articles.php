<?php
include "connection.php";
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
$article_name=$_REQUEST["article_name"];
$article_date=$_REQUEST["article_date"];
$data = array();

try
{
	$sql_select="select * from articles where name = :name and pubdate = :article_date";
	$stmt = $pdo->prepare($sql_select);
	$stmt->bindParam("name", $article_name);
	$stmt->bindParam("article_date", $article_date);
	
	$stmt->execute();
	
	foreach($stmt->fetchAll() as $k=>$v) { 
        // echo $v['username'];
		$clientname=array('article_keywords'=>$v['keywords'],'article_name'=>$v['name'],'article_type'=>$v['type'],'article_theme'=>$v['theme']);
		array_push($data,$clientname);
     }
	 echo json_encode($data);
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
?>