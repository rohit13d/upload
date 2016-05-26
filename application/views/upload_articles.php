
<div class="container">
		<?php 
          echo form_open("home/upload_articles");?>
    <div class="row" style="background:#ccffcc;padding-top:9px" id="art1">
		<div name="art" class="row">
        <div class='col-sm-6' id="articlelables">
		<label for="title">Article Title</label><br><br>
		<label for="keywords">Keywords</label><br><br>
		<label for="name">Article Name</label><br><br>
		<label for="type">Type</label><br><br>
		<label for="theme">Theme</label>
		</div>
		<div class='col-sm-6' id="articlefields">
		<input type="text" name="article_title" id=""><br><br>
		<input type="text" name="keywords" id=""><br><br>
		<input type="text" name="article_name" id=""><br><br>
		<input type="text" name="type" id=""><br><br>
		<input type="text" name="theme" id=""><br><br>
		
		</div>
		</div>
		</div>
		<div class='col-sm-4' id="articlelables">
		<input id="addmorebtn" name="btn_login" type="button" class="btn btn-default" value="Add More" onclick="add_div()"/>
		</div>
		<?php echo form_close(); ?>
   
</div>
 