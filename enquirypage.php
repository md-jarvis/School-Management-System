<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="gencyolcu" />

	<title>Enquiry</title>
</head>
<link rel="stylesheet" href="enquirypage.css" type="text/css" charset="utf-8"/>
<body>
<div id="header">
<h2 id="htxt">Delhi Public School, Patna </h2><br />
<h3 id="htxt2">A Chance to Learn and Grow </h3>
<div id="logo"></div>
<h1>ENQUIRY</h1>
</div>
<div id="cont">
<br /><br /><br /><br /><br /><br /><br /><br />
<form name=frm action="mailto:abc@gmail.com" method="GET" enctype="plain-text">
<table align=center border=8 cellpading=8 cellspacing=8 width=60%  text_align=center>

<tr >
<th>Enquiry</th>
<td><select  name=drop>
<option>...select...</option>
<option>complain</option>
<option>enquiry</option>
<option>feedback</option>
</select></td>
</tr><br>
<tr >
<th>Urgency</th>
<td><select name=drop1>
<option>...select</option>
<option>high</option>
<option>low</option>
<option>normal</option>
</select></td>
</tr><br>
<tr>
<th>Subject</th><td ><input type=text name=txt1 width=10%></th>

</tr>
</tr>
<th>Description</th>
<td><textarea rows=6 name="desc"></textarea></td>
</tr>
<tr><td colspan=2><input type=submit name =sub value=submit>&nbsp; &nbsp;
<input type=reset value=clear></td>
</tr>
<tr><td colspan="4">
<?php
if(isset($_GET['r']) && $_GET['r'] == "yes")
{
    echo "successfully";
}
else if(isset($_GET['r']) && $_GET['r'] == "no")
{
    echo "Enter all request again";
}
?>
</tr>
</table>
</form>
</div>
</body>
</html>