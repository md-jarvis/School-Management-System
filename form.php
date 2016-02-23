<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="gencyolcu" />
    
	<title>application form</title>
    
    <link rel="stylesheet" href="Form.css" type="text/css" />
       <script>
    
    function fun()
    {
        //var y=document.getElementById('fname').value;
        //var mes=" "+y+"your form has been submitted you will get feedback soon";
        var name=document.frm.fname.value;
        if(!(name==""))
        {
        alert(name+" , your form has been submitted .. you will get feedback soon");
        }
        else
        {
            alert("Form has not been accepted.... Please fill all the fields ");
        }
   
    } 
    </script>
</head>

<body>

<div id="m1">
<ul>
<li>
<a href="staffLogin.php"> Staff Home </a>
</li>
</ul>
</div>
    <header id="header">
        <h1 style="position: absolute; top: -7px;left: 620px;"> Application Form</h1>
    </header>
    
    <div id="menu">
        <a href="addmission.php">Open Time</a>
        <a href="meeting.php">Meeting</a>
        <a href="classdetail.php">Class Details</a>
        <a href="form.php">Admission Form</a>
    </div>
   
    <div id="content">
    <br />
    <br />
       
        <form name="frm" action="" method="post">
            <fieldset>
                <legend>Personal Detail</legend>
                 <table border=4 width=70% align=center>
               <tr><td>First Name</td><td><input type="text" name="fname" required="required" autofocus="on" size="85px"/></td></tr>
                 <tr><td>Last Name</td><td><input type="text" name="lname" required="required" size="85px"/></td></tr>
                  <tr><td>Father's Name</td><td><input type="text" name="paaname" required="required" size="85px" /></td></tr>
                   <tr><td>Mother's Name</td><td><input type="text" name="momname" required="required" size="85px" /></td></tr>
                   <tr><td>DOB</td><td><input type="date" name="momname" required="required" size="85px" /></td></tr>
                     <tr><td>Gender</td><td>Male<input type="radio" name="gender" value="male" required="required" size="85px" />&nbsp;
                     <input type="radio" name="gender" value="female"  required="required" size="85px" />
                     </td></tr>
                     <td>Hobbies</td>
                    <td><input type="checkbox" name="hob1" value="Reading" size="85px"/>Reading<br/>
                    <input type="checkbox" name="hob1" value="Playing" size="85px" />Playing<br/>
                    <input type="checkbox" name="hob1" value="Swiming" size="85px" />Swiming<br/>
                    <input type="checkbox" name="hob1" value="Sleeping" size="85px" />Sleeping<br/>
                    <input type="checkbox" name="hob1" value="Watching Movivg" size="85px" />Watching Movies<br/>
                    <input type="checkbox" name="hob1" value="Drawing" size="85px" />Drawing<br/>
                    <input type="checkbox" name="hob1" value="Painting" size="85px" />Painting<br/>
                    <input type="checkbox" name="hob1" value="Other" size="85px"  />Other
                    </td>
                    </table>
            </fieldset>
            <br />  <br />
            
            <fieldset>
            <legend>Qualification</legend>
            <table border=4>
                <tr>
                    <td>Class</td>
                    <td>
                        <select name="class">
                        <option>--Select--</option>
                            <option value="LKG">LKG</option>
                            <option value="UKG">UKG</option>
                            <option value="1">class-1</option>
                            <option value="2">class-2</option>
                            <option value="3">class-3</option>
                            <option value="4">class-4</option>
                            <option value="5">class-5</option>
                            <option value="6">class-6</option>
                            <option value="7">class-7</option>
                            <option value="8">class-8</option>
                            <option value="9">class-9</option>
                            <option value="10">class-10</option>
                        </select>
                    </td>
                </tr>
                
                <tr>
                    <td>Previous Board</td>
                    <td><input type="text" name="board" placeholder="CBSE" required="required"/></td>
                </tr>
                <tr>
                    <td>Marks in Previous Class</td>
                    <td><input name="marks" type="text" required="required" placeholder="Marks in %"/></td>
                </tr>
            </table>
            </fieldset>
            <br /><br /><br />
            <table border=4>
                <tr>
                    <td><b>Address</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td><textarea  name="add" required="required" rows="15" cols="50"></textarea></td>
                </tr>
                <tr>
                    <td ><input type="submit" name="subform" value="Submit" onclick ="fun()"/>&nbsp;
                    <input type="reset" value="Reset" />
                    </td>
                </tr>
            </table>
        </form>
        
    </div>

   
</body>
</html>