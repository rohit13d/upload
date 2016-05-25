
<div class="container">
		<?php 
          echo form_open("home/upload_articles");?>
    <div class="row" style="background:#ccffcc;padding-top:9px" id="art1">
		<div name="art" class="row">
        <div class='col-sm-6' id="articlelables">
		<label for="title">Article Title</label><br><br>
		<label for="name">Article Name</label>
		</div>
		<div class='col-sm-6' id="articlefields">
		<input type="text" name="article_title" id="t1"><br><br>
		<input type="text" name="article_name" id="t2"><br><br>
		</div>
		</div>
		</div>
		<div class='col-sm-4' id="articlelables">
		<input id="addmorebtn" name="btn_login" type="button" class="btn btn-default" value="Add More" onclick="add_div()"/>
		</div>
		<?php echo form_close(); ?>
   
</div>
 