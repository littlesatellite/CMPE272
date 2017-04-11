<?php
$con = mysqli_connect(HOST,USERNAME,PASSWORD,DB);
 
if (mysqli_connect_errno()) {
  printf("Connect failed: %s\n", mysqli_connect_error());
  exit();
}
 
 $firstname = $_POST['firstname'];
 $lastname = $_POST['lastname'];
 $password = $_POST['password'];
 $email = $_POST['email'];
 $birthday_m = $_POST['DOBMonth'];
 $birthday_d = $_POST['DOBDay'];
 $birthday_y = $_POST['DOBYear'];
 $homephone = $_POST['phone1'];
 $cellphone = $_POST['phone2'];
 $address = $_POST['address'];

 
 $sql = "insert into NewUsers(firstname,lastname,password,email,b_month,h_phone,c_phone,address,b_year,b_day) values ('$firstname','$lastname','$password','$email','$birthday_m','$homephone',' $cellphone','$address','$birthday_y','$birthday_d')";


 $result = mysqli_query($con, $sql);

if ( false===$result ) {
  printf("error: %s\n", mysqli_error($con));
}
else {
  print( "<br><br><br><br><br><p style=\"font-family: arial;text-align: center;font-size: 1em; color: black\"><strong>Thank you,  $firstname <br>You have successfully registered!</strong></p>"
           );;
}

?>
