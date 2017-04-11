<DOCTYPE html>
<html> 
<head> 
<title>registeration</title>

<style>
h2{
 
    margin-top:40px;
    margin-bottom: 10px;
    margin-left:48%;
}
.test
    {
        width:246px; height:80px;padding:20px 20px; margin-left:80%;
        margin-top: 20px;position:absolute; font-size:12px;background-color: #a9e3d0;
    }
    
.test span
    {
    width:0; height:0;  overflow:hidden;
    position:absolute;color:#a9e3d0;
    }
    
.test span.bot{
    border-width:20px; 
    border-style:solid; 
    border-color:#ffffff #a9e3d0 #a9e3d0 #ffffff; 
    left:-40px; 
    top:40px;
}
        
.test span.top{
    border-width:10px 20px; 
    border-style:dashed solid solid dashed; 
    border-color:transparent #ffffff #ffffff transparent; 
    left:-40px; 
    top:60px;
}

    
input{
    width: 100%;
    padding: 5px 5px;
    margin: 3px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
    
input[type=submit],input[type=reset]{
    background-color: #a9e3d0;
    color: white;
    padding: 14px 20px;
    margin: 10px 0;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    width: 49.5%;
}
    
input[type=reset]{
float:right;
}

    meter{
        width: 100%;
    }

    </style>



<script type="text/javascript"> 
function passwd(){ 
var pass = document.getElementById("password").value;
var result = getStrength(pass);

if(pass.length == 0){
    document.getElementById("meter").value = 0;
   
}
else
if (result < 2) { 
document.getElementById("meter").value = 2; 

} 
else 
if (result <=4 ) { 
document.getElementById("meter").value = 4; 

} 
else 
if (result <=6 ) { 
document.getElementById("meter").value = 6; 
 
} 
else 
if (result <=8 ) { 
document.getElementById("meter").value = 8; 
 
} 
else { 
document.getElementById("meter").value = 10; 

}
        
} 
</script> 

<script>
function  check(){
        var pass = document.getElementById("password").value;
        var pass_v = document.getElementById("v_password").value;
        if(pass != pass_v)
            {
                window.alert("please enter again!");
            }
    }
</script>
   
<script>
function getStrength(pass){
    intScore = 0; 
   
    var l_1 = document.getElementById("mark1");
    var l_2 = document.getElementById("mark2");
    var l_3 = document.getElementById("mark3");
    var l_4 = document.getElementById("mark4");
    var l_5 = document.getElementById("mark5");

    
   
    if (pass.match(/[a-z]/))  
    {  
        intScore = intScore+2;
        l_2.style.display= "inline";
    } 
    else if(!pass.match(/[a-z]/))
    {
        l_2.style.display="none";
    }
    if (pass.match(/[A-Z]/))
    {  
        intScore = intScore+2; 
        l_1.style.display= "inline";
    } 
    else if(!pass.match(/[A-Z]/))
    {
        l_1.style.display= "none";  
    }
    if (pass.match(/[0-9]/))
    {  
        intScore = intScore+2;
       l_3.style.display= "inline";
    } 
    else if(!pass.match(/[0-9]/))
    {  
       l_3.style.display= "none";
    } 
    if (pass.match(/[!,@#$%^&*?_~]/)) 
    {  
        intScore = intScore+2;  
    } 
    if(pass.length > 8)
        {
           intScore = intScore+2;
            l_4.style.display= "inline";
        }
    else  if(pass.length <= 8)
        {
            l_4.style.display= "none";
        }
    if(pass.match(/[a-z]/) && pass.match(/[A-Z]/) && pass.match(/[0-9]/) && pass.match(/[@-_.]/))
    {   
        intScore = intScore+2;
        l_5.style.display= "inline";  
    }
    else if(!(pass.match(/[a-z]/) )||!(pass.match(/[A-Z]/) )|| !(pass.match(/[0-9]/) )|| !(pass.match(/[@-_.]/)))
    {  
        l_5.style.display= "none";  
    }
    
    return intScore;  
}  
            
</script>
    
    
    
</head> 
    
<h2>Registration</h2>
    
<form id="f1" action="AddNewUser.php" method="post">
    
<body>
<div id="1" style="position: relative; top: 45px; z-index: 3;"> 

    <div class="test">
    <span class="bot"></span>
    <span class="top"></span>
        <lable id="mark1" hidden>&#10004</lable><label id="label1">1 upper-case letter</label><br>
        <lable id="mark2" hidden>&#10004</lable><label id="label2">1 lower-case letter</label><br>
        <lable id="mark3" hidden>&#10004</lable><label id="label3">1 number</label><br>
        <lable id="mark4" hidden>&#10004</lable><label id="label4">8 or more characters</label><br>
        <lable id="mark5" hidden>&#10004</lable><label id="label5">uses only these English characters:A-z,0-9,@,-,_</label><br>
            

</div>
     
<table align="center" cellspacing="0" class="table">

   

<tr> 
<td> 
<table id="registertable" border="0px" align="center" border="0px" cellspacing="0" cellpadding="5px"> 
<tr> 
<tr> 
<td align="right"> 
First Name: 
</td> 
<td align="left"> 
<input id="ID" type="text" name="firstname" placeholder="first name" required autofocus/> 
</td> 
</tr>

<tr> 
<td align="right"> 
Last Name: 
</td> 
<td align="left"> 
<input id="ID" type="text" name="lastname" placeholder="last name" required/> 
</td> 
</tr> 
    
<tr> 
<td align="right"> 
Password:
</td> 
<td align="left">
    <input type="password" id="password" name="password" placeholder="password"   required onkeyup="passwd()" />
  <span id="tip"></span>
</td> 
</tr>

<tr> 
<td align="right"> 
Strength:
</td> 
<td align="left">
    <meter min="1" max="10" low="5" high="8" value="0" id="meter"></meter>
</td> 
</tr>
        
<tr> 
<td align="right"> 
Verify Password: 
</td> 
<td align="left"> 
<input type="password" id="v_password"  placeholder="verify password" required onmouseout="check()"/>
</td> 
</tr>
    
<tr> 
<td align="right"> 
Email Address: 
</td> 
<td align="left"> 
<input type="email" name="email" placeholder="email address" required/> 
</td> 
</tr> 
    
<tr> 
<td align="right"> 
Birthday: 
</td> 
<td align="left"> 
<select name="DOBMonth">
	<option> - Month - </option>
	<option value="January">January</option>
	<option value="Febuary">Febuary</option>
	<option value="March">March</option>
	<option value="April">April</option>
	<option value="May">May</option>
	<option value="June">June</option>
	<option value="July">July</option>
	<option value="August">August</option>
	<option value="September">September</option>
	<option value="October">October</option>
	<option value="November">November</option>
	<option value="December">December</option>
</select>

<select name="DOBDay">
	<option> - Day - </option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
	<option value="21">21</option>
	<option value="22">22</option>
	<option value="23">23</option>
	<option value="24">24</option>
	<option value="25">25</option>
	<option value="26">26</option>
	<option value="27">27</option>
	<option value="28">28</option>
	<option value="29">29</option>
	<option value="30">30</option>
	<option value="31">31</option>
</select>

<select name="DOBYear">
	<option> - Year - </option>
    <option value="2010">2010</option>
    <option value="2009">2009</option>
    <option value="2008">2008</option>
    <option value="2007">2007</option>
    <option value="2006">2006</option>
    <option value="2005">2005</option>
    <option value="2004">2004</option>
    <option value="2003">2003</option>
    <option value="2002">2002</option>
    <option value="2001">2001</option>
    <option value="2000">2000</option>
    <option value="1999">1999</option>
    <option value="1998">1998</option>
    <option value="1997">1997</option>
    <option value="1996">1996</option>
    <option value="1995">1995</option>
    <option value="1994">1994</option>
	<option value="1993">1993</option>
	<option value="1992">1992</option>
	<option value="1991">1991</option>
	<option value="1990">1990</option>
	<option value="1989">1989</option>
	<option value="1988">1988</option>
	<option value="1987">1987</option>
	<option value="1986">1986</option>
	<option value="1985">1985</option>
	<option value="1984">1984</option>
	<option value="1983">1983</option>
	<option value="1982">1982</option>
	<option value="1981">1981</option>
	<option value="1980">1980</option>
	<option value="1979">1979</option>
	<option value="1978">1978</option>
	<option value="1977">1977</option>
	<option value="1976">1976</option>
	<option value="1975">1975</option>
	<option value="1974">1974</option>
	<option value="1973">1973</option>
	<option value="1972">1972</option>
	<option value="1971">1971</option>
	<option value="1970">1970</option>
	<option value="1969">1969</option>
	
	
	
</select> 
</td> 
</tr> 

<tr> 
<td align="right"> 
Home Phone: 
</td> 
<td align="left"> 
<input type="tel" name="phone1" placeholder="enter home phone" required/> 
</td> 
</tr>
    
<tr> 
<td align="right"> 
Cell Phone: 
</td> 
<td align="left"> 
<input type="tel" name="phone2"  placeholder="enter cell phone" required/> 
</td> 
</tr>
 

<tr>
<td align="right">
Address:
</td>
<td align="left">
<input type="text" name="address" placeholder="address" required/>  
</td>
</tr>
    
    
<tr>
<td align="right"> 
Security Question:
</td>
<td>
<SELECT NAME="number" >
<OPTION SELECTED VALUE="">--please choose--</OPTION>
    <OPTION VALUE="1">What is your favorite color?</OPTION>
    <OPTION VALUE="2">What is your first pet's name?</OPTION>
    <OPTION VALUE="3">Where did you born?</OPTION>
    <OPTION VALUE="4">Which year did you attend high school?</OPTION>
    <OPTION VALUE="5">Which year did you graduate from university?</OPTION>
    </SELECT>
</td>
</tr>
    
<tr> 
<td align="right"> 
Security Answer: 
</td>
<td align="left"> 
<input type="text" name="username"  required/> 
</td> 
</tr>
    
<tr>
<td align="right"> 
Security Question:
</td>
<td>
<SELECT NAME="number" >
<OPTION SELECTED VALUE="">--please choose--</OPTION>
    <OPTION VALUE="1">What is your favorite color?</OPTION>
    <OPTION VALUE="2">What is your first pet's name?</OPTION>
    <OPTION VALUE="3">Where did you born?</OPTION>
    <OPTION VALUE="4">Which year did you attend high school?</OPTION>
    <OPTION VALUE="5">Which year did you graduate from university?</OPTION>
    </SELECT>
</td>
</tr>
    
<tr> 
<td align="right"> 
Security Answer: 
</td>
<td align="left"> 
<input type="text" name="username"  required/> 
</td> 
</tr>
    
    

    
<tr>
    <td></td>
    <td align="left">
<input type="submit"  value="Register" id="Register" class="button" />
<input type="reset" value="Cancel" id="Cancel" class="button" onClick="window.open('index.html')" />

        
  </td>
</tr>


</table> 
</td>
    </tr>
    </table>
     </div>
    </body>
    </form>
 
 
</html>