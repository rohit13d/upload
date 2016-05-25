///////new function.js file/////
function add_div()
{
/*	var lastChild = document.getElementById("articlefields").lastChild.id;
	//var lastChildID = lastChild.id;
	alert(lastChild);
	var children = document.getElementById("articlefields").children;
	if (children.length > 1) {
		alert(children[0].id);
	var first = children[0].id;
    var last = children[children.length - 1];
    var second = children[1];
}

*/	//document.getElementById("demo").innerHTML = list;
//coe to add div when add more button is clicked///////
var div_open = document.createElement("div");
div_open.id = 'art2';
div_open.className = 'row';
var div_inner1 = document.createElement("div");
div_inner1.className = 'col-sm-6';
var article_name_label = document.createElement("Label");
article_name_label.innerHTML = "Article Name";
var article_title_label = document.createElement("Label");
article_title_label.innerHTML = "Article Title";
var breakline = document.createElement("br");	
div_inner1.appendChild(article_name_label);
div_inner1.appendChild(breakline);
div_inner1.appendChild(breakline);
div_inner1.appendChild(breakline);
div_inner1.appendChild(article_title_label);
div_open.appendChild(div_inner1);
//document.getElementById('art1').appendChild(breakline);
//document.getElementById('art1').appendChild(breakline);
document.getElementById('art1').appendChild(div_open);


/* <div name="art" class="row">
        <div class='col-sm-6' id="articlelables">
		<label for="title">Article Title</label><br><br>
		<label for="name">Article Name</label>
		</div>
		<div class='col-sm-6' id="articlefields">
		<input type="text" name="article_title" id="t1"><br><br>
		<input type="text" name="article_name" id="t2"><br><br>
		</div>
		</div>

 */
/*
<div name="art1" class="row">
        <div class='col-sm-6' id="articlelables">
		<label for="title">Article Title</label><br><br>
		<label for="name">Article Name</label>
		</div>
		<div class='col-sm-6' id="articlefields">
		<input type="text" name="article_title" id="t1"><br><br>
		<input type="text" name="article_name" id="t2"><br><br>
		</div>
		</div>
/*	
/////code to add html elements to required divd
var article_name_label = document.createElement("Label");
article_name_label.innerHTML = "Article Name";
var article_name_text = document.createElement("input");

var article_title_label = document.createElement("Label");
article_title_label.innerHTML = "Article Title";
var article_title_text = document.createElement("input");

var breakline = document.createElement("br");	

var element = document.getElementById("articlelables");
element.appendChild(breakline);
element.appendChild(breakline);
element.appendChild(article_title_label);
var element = document.getElementById("articlefields");
element.appendChild(breakline);
element.appendChild(breakline);
element.appendChild(article_title_text);
element.appendChild(breakline);
element.appendChild(breakline);
var element = document.getElementById("articlelables");
element.appendChild(breakline);
element.appendChild(breakline);
element.appendChild(article_name_label);
var element = document.getElementById("articlefields");
element.appendChild(breakline);
element.appendChild(breakline);
element.appendChild(article_name_text);
*/
}
function delete_div()
{
	
}