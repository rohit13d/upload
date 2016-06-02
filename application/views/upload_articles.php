
<script src="/codeignitor/upload/assets/js/function.js"></script>
<div class="container">
		
    <div class="row" style="background:#ccffcc;padding-top:9px" id="art1">
		<div name="art" class="" style="padding-top:20px">
		<div class='col-sm-4' id="articlelables" style="padding-left:60px;">
		<label for="title">Article Title</label><br><br>
		<label for="keywords">Keywords</label><br><br>
		<label for="name">Article Name</label><br><br>
		<label for="type">Type</label><br><br>
		<label for="theme">Theme</label>
		</div>
		<div class='col-sm-8' id="articlefields">
		
		<input type="text" style="width:100%;" name="article_title" id="article_title1"><br><br>
		<input type="text" style="width:100%;" name="keywords" id="keywords1"><br><br>
		<input type="text" style="width:100%;" name="article_name" id="article_name1"><br><br>
		<input type="text" style="width:100%;" name="type" id="type1"><br><br>
		<input type="text" style="width:100%;" name="theme" id="theme1"><br><br><br><br>
		
		</div>
		</div>
		</div>
		<?php
		//session_start();
		//$_SESSION["count"] = 1;
		?>
		<div class='col-sm-4' id="articlelables">
		<input id="addmorebtn" name="btn_login" type="button" class="btn btn-default" value="Add More" onclick="add_div()"/>
		</div>
		<div class='col-sm-4' id="articlelables">
		<input id="addmorebtn" name="btn_login" type="button" class="btn btn-default" value="Add Data" onclick="add_data()"/>
		
		</div>
		
   
</div>
 