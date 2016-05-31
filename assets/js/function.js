$(function(){
		sessionStorage.count=1; 
		$(".formfield_text").datepicker();
});

function add_div()
{
sessionStorage.count++;
var last_count=2;
var row = '<div name="art" class="row"><div class="col-sm-6" id="articlelables"><label for="title">Article Title</label><br><br><label for="keywords">Keywords</label><br><br><label for="name">Article Name</label><br><br><label for="type">Type</label><br><br><label for="theme">Theme</label></div><div class="col-sm-6" id="articlefields"><input type="text" name="article_title" id="article_title'+sessionStorage.count+'"><br><br><input type="text" name="keywords" id="keywords'+sessionStorage.count+'"><br><br><input type="text" name="article_name" id="article_name'+sessionStorage.count+'"><br><br><input type="text" name="type" id="type'+sessionStorage.count+'"><br><br><input type="text" name="theme" id="theme'+sessionStorage.count+'"><br><br><br><br></div></div>';
$("#art1").append(row);

}
function add_data()
{
	var data1=[];
	var article_data={};
	for(var i=0;i<sessionStorage.count;i++)
	{
		var id_count=i+1;
		var article_title_id="#article_title"+id_count;
		var article_keywords_id="#keywords"+id_count;
		var article_name_id="#article_name"+id_count;
		var article_type_id="#type"+id_count;
		var article_theme_id="#theme"+id_count;
		
		var article_title=$(article_title_id).val();
		var article_keywords=$(article_keywords_id).val();
		var article_name=$(article_name_id).val();
		var article_type=$(article_type_id).val();
		var article_theme=$(article_theme_id).val();
		
		article_data={"article_title":article_title,"article_keywords":article_keywords,"article_name":article_name,"article_type":article_type,"article_theme":article_theme};
		//alert();
		data1.push(article_data);
		//break;
		
	}
	/*for(var j=0;j<sessionStorage.count;j++)
	{
	alert("called");
	alert(data[j]['article_keywords']);
	}*/
	//alert(data);

	$.ajax({
           data:{"article_data":data1},
           url: "../../assets/webservice/insert_article.php",
		   dataType:"json",
           crossDomain : true,
           //async:false,
           type:'POST',		   
		   contentType: 'application/x-www-form-urlencoded',
		   success: function(response) {
			  for(i=0;i<response.length;i++){
			//alert(response[0].article_title);
			alert(response);
			  }
						   			   
		},
		error:function(err) {
         
          alert(err);
           }
           });
}
function dell_div()
{
	
}
function load_edit_article()
{
	alert("called");
}