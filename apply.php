 <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
 

  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
function check()
{
var ele = document.getElementsByName('diplo');
var flag=0;
for(var i=0;i<ele.length;i++)
{
    if(ele[i].checked)
     flag=1;

} 
if(flag==1)
document.getElementById('cgpa').disabled=false;
}

function checkd()
{
var ele = document.getElementsByName('diplo');
var flag=0;
for(var i=0;i<ele.length;i++)
{
    if(ele[i].checked)
     flag=1;

} 
if(flag==1)
document.getElementById('cgpa').disabled=true;
}

function check1()
{
var ele = document.getElementsByName('arr');
var flag=0;
for(var i=0;i<ele.length;i++)
{
    if(ele[i].checked)
     flag=1;

} 
if(flag==1)
document.getElementById('no_arr').disabled=false;
}

function checka()
{
var ele = document.getElementsByName('arr');
var flag=0;
for(var i=0;i<ele.length;i++)
{
    if(ele[i].checked)
     flag=1;

} 
if(flag==1)
document.getElementById('no_arr').disabled=true;
}

function check2()
{
var ele = document.getElementsByName('bank_loan');
var flag=0;
for(var i=0;i<ele.length;i++)
{
    if(ele[i].checked)
     flag=1;

} 
if(flag==1){
document.getElementById('lamt').disabled=false;
document.getElementById('bankname').disabled=false;
}
}

function check3()
{
var ele = document.getElementsByName('scholarship');
var flag=0;
for(var i=0;i<ele.length;i++)
{
    if(ele[i].checked)
     flag=1;

} 
if(flag==1){
document.getElementById('lamt').disabled=false;
document.getElementById('bankname').disabled=false;
}
}
function checkl()
{
var ele = document.getElementsByName('scholarship');
var flag=0;
for(var i=0;i<ele.length;i++)
{
    if(ele[i].checked)
     flag=1;

} 
if(flag==1){
document.getElementById('lamt').disabled=true;
document.getElementById('bankname').disabled=true;
}
}

function checks()
{
var ele = document.getElementsByName('scholarship');
var flag=0;
for(var i=0;i<ele.length;i++)
{
    if(ele[i].checked)
     flag=1;

} 
if(flag==1){
document.getElementById('lamt').disabled=true;
document.getElementById('bankname').disabled=true;
}
}

function check4()
{
var ele = document.getElementsByName('parent');
var flag=0;
for(var i=0;i<ele.length;i++)
{
    if(ele[i].checked)
     flag=1;

} 
if(flag==1){
document.getElementById('foccup').disabled=false;
document.getElementById('fincome').disabled=false;
document.getElementById('moccup').disabled=false;
document.getElementById('mincome').disabled=false;

}
}

function check5()
{
var ele = document.getElementsByName('parent');
var flag=0;
for(var i=0;i<ele.length;i++)
{
    if(ele[i].checked)
     flag=1;

} 
if(flag==1){
document.getElementById('fm').disabled=false;
document.getElementById('mm').disabled=false;
document.getElementById('foccup').disabled=true;
document.getElementById('fincome').disabled=true;
document.getElementById('moccup').disabled=true;
document.getElementById('mincome').disabled=true;

}
}

function check6()
{
var ele = document.getElementsByName('fm');
var flag=0;
for(var i=0;i<ele.length;i++)
{
    if(ele[i].checked)
     flag=1;

} 
if(flag==1){
document.getElementById('foccup').disabled=false;
document.getElementById('fincome').disabled=false;
document.getElementById('moccup').disabled=true;
document.getElementById('mincome').disabled=true;

}
}

function check8()
{
var ele = document.getElementsByName('fm');
var flag=0;
for(var i=0;i<ele.length;i++)
{
    if(ele[i].checked)
     flag=1;

} 
if(flag==1){
document.getElementById('moccup').disabled=false;
document.getElementById('mincome').disabled=false;
document.getElementById('foccup').disabled=true;
document.getElementById('fincome').disabled=true;

}
}

</script>





<title>Application for Scholarship</title>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 50%;
    background-color: hsl(290,60%,70%);
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color:hsl(290,100%,50%);
}
input[type=reset] {
    width: 30%;
    background-color: hsl(290,60%,70%);
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=reset]:hover {
    background-color: hsl(290,100%,50%);
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
</head>

<body bgcolor="Cornsilk">
<div class="container-fluid">
  <center><h1 style="color:brown">THIAGARAJAR COLLEGE OF ENGINEERING</h1>
  <p><I>-where quality and ethics matters</I></p></center>
</div>
 <div class="row">
  <div class="col-sm-4"></div>
  <div class="col-sm-8"></div>
</div>

<div>
<form  method="get" >
	
  <center><h1 style="color:blue;"><b>Fill this application for scholarship</b></h1></center>
  <br>
  
  <table style="width:100%">	
  <tr><td><b>Name:*</b></td><td><input type="text" name="stuname" required="required"></td></tr>
  <tr><td><b>Reg No:* </b></td><td><input type="text" name="regno" required="required"></td></tr>
  <tr><td><b>Semester:*</b></td>
 <td>   <select name="semester" required="required">
  <option value="1">I</option>
  <option value="2">II</option>
  <option value="3">III</option>
  <option value="4">IV</option>
  <option value="5">V</option>
  <option value="6">VI</option>
  <option value="7">VII</option>
  <option value="8">VIII</option>
</select></td></tr>
<tr><td><b>Degree:*</b></td>
	   <td><select name="degree" required="required">
  <option value="UG">UG</option>
  <option value="PG">PG</option>
  
</select></td></tr>
<tr><td><b>Branch:*</b></td>
   <td><select name="branch" required="required">
  <option value="civil">CIVIL</option>
  <option value="cse">CSE</option>
  <option value="eee">EEE</option>
  <option value="ece">ECE</option>
  <option value="it">IT</option>
  <option value="mech">MECHANICAL</option>
  <option value="mect">MECHATRONICS</option>
  <option value="arch">ARCHITECTURE</option>
</select></td></tr>
<tr><td><b>Admission Category:*</b></td>
  <td> <select name="category" required="required">
  <option value="aid">Aided</option>
  <option value="ss">SS</option>
  <option value="mng">Management</option>
  
</select></td></tr>
<tr><td><b>Parent:*</b></td>
  <td><input type="radio" name="parent" value="single" onclick="check5()"> Single
  <input type="radio" name="parent" value="both"onclick="check4()"> Both<br><br>
 </td></tr> 
<tr><td><b>Father/Mother:*</b></td>
  <td><input type="radio" name="fm" id="fm" value="father" onclick="check6()" disabled="disabled">Father
  <input type="radio" name="fm" id="mm" value="mother" onclick="check8()" disabled="disabled"> Mother<br>
 </td></tr> 

 <tr><td><b>Father's/Guardian's Name:*</b> </td><td><input type="text" name="fname" required="required"></td></tr>
 <tr><td><b>Father's/Guardian's Occupation:</b></td><td><input type="text" name="foccup" id="foccup" disabled="disabled"></td></tr>
 <tr><td><b>Father's/Guardian's Annual Income:</b></td><td><input type="text" name="fincome" id="fincome" disabled="disabled"></td></tr>
 <tr><td><b>Mother's Name:*</b> </td><td><input type="text" name="mname" required="required"></td></tr>
 <tr><td><b>Mother's's Occupation:</b></td><td><input type="text" name="moccup" id="moccup" disabled="disabled"></td></tr>
 <tr><td><b>Mother's's Annual Income:</b> </td><td><input type="text" name="mincome" id="mincome" disabled="disabled"></td></tr>
 <tr><td><b>  % of marks in X std:*</b> </td><td><input type="text" name="sslc" required="required"></td></tr>
<tr><td><b>Lateral Entry:*</b></td>
  <td><input type="radio" name="diplo" value="y" onclick="checkd()"> Yes
  <input type="radio" name="diplo" value="n"onclick="check()"> No<br>
 </td></tr> 

<tr><td><b>  % of marks in XII std/Diploma:*</b> </td><td><input type="text" name="hsc" required="required"></td></tr>
<tr><td><b>  Cut off marks in Plus Two(out of 200):*</b> </td><td><input type="text" name="cutoff" required="required"></td></tr>

<tr><td><b> CGPA till last semester in TCE: </b> </td><td><input type="text" name="cgpa" id="cgpa" disabled="disabled"></td></tr>
<tr><td><b>Do you have any arrears:*</b></td>
<td><input type="radio" name="arr" value="1" onclick="check1()"> Yes
  <input type="radio" name="arr" value="0"" onclick="checka()"> No<br>
 </td></tr> 

<tr><td><b> No.of standing arrears if any:</b> </td><td><input type="text" name="no_arr" id="no_arr" disabled="disabled"></td></tr>
<tr><td><b> % of attendance in last semester:*</b> </td><td><input type="text" name="att"required="required" ></td></tr>
<tr><td><b>Bank Loan Availed: *</b></td>
  <td><input type="radio" name="bank_loan" value="1" onclick="check2()"> Yes
  <input type="radio" name="bank_loan" value="0"onclick="checkl()"> No<br>
 </td></tr>
<tr><td><b>Other Scholarship Availed: *</b></td>
  <td><input type="radio" name="scholarship" value="1" onclick="check3()"> Yes
  <input type="radio" name="scholarship" value="0" onclick="checks()"> No<br>
 </td></tr>
 <tr><td><b> Loan Amount or Scholarship amount(if any):</b> </td><td><input type="text" name="lamt" id="lamt" disabled="disabled"></td></tr>
 <tr><td><b> Bank Name or Scheme of loan (if any):</b> </td><td><input type="text" name="bankname" id="bankname" disabled="disabled"></td></tr>
 <tr><td><b> No of Brothers :*</b> </td><td><input type="text" name="brono" required="required"></td></tr>
 <tr><td><b> Brother's Occupation(if any):</b> </td><td><input type="text" name="brooccup" ></td></tr>
 <tr><td><b> No of sisters: *</b> </td><td><input type="text" name="sisno" required="required"></td></tr>
 <tr><td><b> Sister's Occupation(if any):</b> </td><td><input type="text" name="sisoccup" ></td></tr>
 <tr><td><b> First Graduate in your family: *</b></td>
  <td><input type="radio" name="graduate" value="1"> Yes
  <input type="radio" name="graduate" value="0" > No<br>
 </td></tr>
 <tr><td><b>Contact Address:*</b></td>
 <td> <textarea name="address" rows="7" cols="60" required="required">
</textarea></td></tr>
<tr><td><b>Mobile: *</b> </td><td><input type="text" name="mobile" required="required"></td></tr>
 <tr><td><b>Declaration:*</b></td><td><input type="checkbox" name="decl" value="decl">I hereby declare that the above particulars are true to the best of my knowledge
 </td></tr>
 <tr><td> <input type="submit" formaction="/tce_alumni/db.php" value="Submit"> </td><td><input type="reset"></td></tr>

</table>
</form>
</div>

</body>

</html> 



