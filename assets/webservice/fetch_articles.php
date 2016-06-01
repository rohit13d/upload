<?php
include "connection.php";
//header('Content-Type: application/json');
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
		$clientname=array('article_title'=>$v['title'],'article_keywords'=>$v['keywords'],'article_name'=>$v['name'],'article_type'=>$v['type'],'article_theme'=>$v['theme']);
		array_push($data,$clientname);
		echo '<div class="container">
		<div class="row" style="background:#ccffcc;padding-top:9px" id="art1">
		<div name="art" class="row">
        <div class="col-sm-6" id="articlelables">
		<label for="title">Article Title</label><br><br>
		<label for="keywords">Keywords</label><br><br>
		<label for="name">Article Name</label><br><br>
		<label for="type">Type</label><br><br>
		<label for="theme">Theme</label>
		</div>
		<div class="col-sm-6" id="articlefields">
		<input type="text" name="article_title" id="article_title1" value="'.$v['title'].'"><br><br>
		<input type="text" name="keywords" id="keywords1" value="'.$v['keywords'].'"><br><br>
		<input type="text" name="article_name" id="article_name1" value="'.$v['name'].'"><br><br>
		<input type="text" name="type" id="type1" value="'.$v['type'].'"><br><br>
		<input type="text" name="theme" id="theme1" value="'.$v['theme'].'"><br><br><br><br>
		
		</div>
		</div>
		</div>
		</div>';
     }
	 //echo json_encode($data);
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
