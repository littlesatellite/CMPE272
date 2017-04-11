<html>

<style>

form{
    margin-top:12%;
    margin-left:0;
    }
    h2{
    margin-left:45%;
    }
    input{
    width: 100%;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    }
button{

    background-color: #a9e3d0;
    color: white;
    padding: 17px 20px;
    margin: 15px 0;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    width: 49%;
    display:inline;
}
button:hover {
    opacity: 0.7;
}
</style>

<form id="f1" action="search.php" method="post">

<h2>Search Criteria:</h2>
   
<table id="registertable" border="0px" align="center" border="0px" cellspacing="0" cellpadding="5px"> 

<tr> 
<td align="right"> 
First Name: 
</td> 
<td align="left"> 
<input id="firstname" type="text" name="s_firstname" placeholder="search ..." autofocus/> 
</td> 
</tr>

<tr> 
<td align="right"> 
Last Name: 
</td> 
<td align="left"> 
<input id="lastname" type="text" name="s_lastname" placeholder="search ..."> 
</td> 
</tr> 

   
<tr> 
<td align="right"> 
Email Address: 
</td> 
<td align="left"> 
<input type="email" name="s_email" placeholder="search ..."> 
</td> 
</tr> 
    
<tr> 
<td align="right"> 
Home Phone: 
</td> 
<td align="left"> 
<input type="text" name="s_hphone" placeholder="search ..."> 
</td> 
</tr>
    
<tr> 
<td align="right"> 
Cell Phone: 
</td> 
<td align="left"> 
<input type="text" name="s_cphone" placeholder="search ..."> 
</td> 
</tr>

<tr> 
<td align="right"> 

</td> 
<td align="left"> 
<button  type="submit" name="NewUser" value="Submit">Submit</button> 
<button  type="reset" name="back" value="back" onClick="window.open('userpage.html')">Back</button> 
</td> 
</tr>
 
<!--
<tr> 
<td align="right">
</td> 
<td align="left"> 
<button  type="reset" name="back" value="back" onClick="window.open('userpage.html')">Back</button> 
</td> 
</tr>
-->
    
    

    </table>
</form>
</html>