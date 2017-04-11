<?php

     $USERNAME = $_POST['uname'];
     $PASSWORD = $_POST['psw'];
     $NewUser = $_POST['NewUser'];

if($NewUser == "NewUser"){
require "NewUser.php";
    }
    
else if($NewUser == "Submit")
{
  if( !$USERNAME || !$PASSWORD ){
            fieldsBlank();
            die();
  }
 else{

  CheckUser($USERNAME,$PASSWORD);
     
}
}


function CheckUser($username,$password){
 define('HOST','localhost');
 define('USERNAME', 'deadlock');
 define('PASSWORD','sesame');
 define('DB','test');
 

/* check connection */
 $con = mysqli_connect(HOST,USERNAME,PASSWORD,DB);


 if (mysqli_connect_errno()) {
  printf("Connect failed: %s\n", mysqli_connect_error());
  exit();
}
    
$query = "SELECT * FROM NewUsers WHERE firstname = '$username' and password = '$password' ";

$r = mysqli_query($con,$query);
    
if (mysqli_num_rows($r)) {
    if($username == "admin")
    {
        try {
                // Connect to the database.
                $con = new PDO("mysql:host=localhost; dbname=test",                               
                               "deadlock", "sesame");
                $con->setAttribute(PDO::ATTR_ERRMODE,
                                   PDO::ERRMODE_EXCEPTION);

                // Constrain the query.
	             $query = "SELECT firstname,lastname,email,b_year,b_day,b_month,address,c_phone,h_phone
                 FROM NewUsers ";
            
                        print "<table align='center' border='1' cellspacing='0' cellpadding='0' >\n";
                
                // Query the database.
	  $data = $con->query($query);
	  $data->setFetchMode(PDO::FETCH_ASSOC);
      
	  $doHeader = true;
	  foreach ($data as $row) {

	      // The header row before the first data row.
	      if ($doHeader) {
	          print "    <tr>\n";
	          foreach ($row as $name => $value) {
	              print "    <th>$name</th>\n";
	          }
	          print "    </tr>\n";
	          $doHeader = false;
	      }

	      // Data row.
	      print "    <tr>\n";
	      foreach ($row as $name => $value) {
	         print "        <td>$value</td>\n";

	      }
	      print "        </tr>\n";
             }

            print "    </table>\n";
            }
        catch(PDOException $ex) {
                echo 'ERROR: '.$ex->getMessage();
            }    


    }
    else
    {
    accessGranted( $username );
    }
}
else{
    wrongPassword();
     
}
 
}
/* Create table doesn't return a resultset */
        
function wrongPassword()
           {
               print( "<br><br><br><br><br><p style=\"font-family: arial;text-align: center;font-size: 1em; color: black\"><strong>Access Denied<br>You entered the invalid password.<br /> Access has been denied.</strong></p>"
           );
           }
function accessGranted( $name )
           {
                print("<br><br><br><br><br><p style=\"font-family: arial;text-align: center;font-size: 1em; color: black\"><strong>Thank you<br>Permission has been granted, $name.<br /> Enjoy the site.</strong></p>" );
           }
function fieldsBlank()
           {
               print( "<br><br><br><br><br><p style=\"font-family: arial;text-align: center;font-size: 1em; color: black\"><strong>Access Denied<br>Please fill in all form fields.</strong></p>"
          );
           }
    

?>