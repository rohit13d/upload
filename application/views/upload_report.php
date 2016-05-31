
<div class="container">
		<?php 
          echo form_open("home/upload");?>
    <div class="row">
	
        <div class='col-sm-6'>
		
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <!--<input type='text' class="form-control" />-->
					<input type="text" placeholder="Pickup Date" id="datepicker"  name="datepicker" class="formfield_text form-control">
                    <span class="input-group-addon" onclick="show_calender()">
                        <span class="glyphicon glyphicon-calendar" id="datepik"></span>
                    </span>
                </div>
            </div>
        </div>
		 <div class='col-sm-6'>
				<select class="form-control" id="sel1" name="product_type">
						<option>What I Learned This Week</option>
						<option>Light English</option>
						<option>Light Chinese</option>
				</select><br>
				<input id="btn_login" name="btn_report_upload" type="submit" class="btn btn-default" value="Upload" />
         </div>       
           
        </div>
		<script>
$(document).ready(function(){
$(".formfield_text").datepicker();
//show_calender();
});
function show_calender()
{
	//alert("call");
	$(".formfield_text").datepicker();
}
</script>
<?php echo form_close(); ?>
   </div>
<!-- </div> -->
 <?php
//echo $this->calendar->generate();
 ?> 