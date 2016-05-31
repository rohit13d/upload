<script src="/codeignitor/upload/assets/js/function.js"></script>
<div class="container">
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
				
				<input id="btn_login" name="btn_report_upload" type="button" class="btn btn-default" value="Submit" onclick="load_edit_article()"/>
         </div>       
		<script>
/*$(document).ready(function(){
$(".formfield_text").datepicker();
//show_calender();
});
function show_calender()
{
	//alert("call");
	$(".formfield_text").datepicker();
}*/
</script>
    </div>
</div>
 <?php
//echo $this->calendar->generate();
 ?> 