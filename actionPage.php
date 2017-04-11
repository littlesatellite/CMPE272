    <?php
//       extract( $_POST );

     $USERNAME = $_POST['uname'];
     $PASSWORD = $_POST['psw'];
     $NewUser = $_POST['NewUser'];
 

       if($NewUser == "NewUser"){
           require "NewUser.php";
//         if(isset($NewUser))
//           if( !( $file = fopen("password.txt","a")))
//           {
//               print( "<html><head>Error</head><body>could not open password file</body></html>");
//            die();
//           }
//           fputs( $file,"$USERNAME,$PASSWORD\n" );
//           userAdded( $USERNAME );
       }

           else{
            if( !$USERNAME || !$PASSWORD ){
            fieldsBlank();
            die();
       }

               if( !($file = fopen("password.txt","r" ))){
                    print( "<html><head>Error</head><body>could not open password file</body></html>");
                   die();
               }

               $userVerified = 0;

               while( !feof( $file ) && !$userVerified ) {

                   $line = fgets( $file, 255 );
                   $line = chop( $line );
                   $field = explode( ",",$line );
                   if( $USERNAME == "admin" )
                   {
                      $userVerified = 1;
                       
                       if( checkPassword ( $PASSWORD, $field ) == true)
                       {
                           
                           print("<br><br><br><br><br><p style=\"font-family: arial;text-align: center;font-size: 1em; color: black\"><strong>Welcome,Admin!<br>Here is the list of your users:</strong></p>");
                           
                           $myfile = fopen("password.txt", "r") or die("Unable to open file!");
                           
                           $count = 1;
                           if($myfile) {
                           while($readline = fgets( $myfile )) {
                               
                                 $readline = chop( $readline );
                                 $show = explode( ",",$readline );
                                 echo  "     ".$count.".".$show[0]."  ";
                                 $count++;
                              }
                           }
                           
                          fclose($myfile);
                       }
                       
                       else
                           wrongPassword();
                   }

                   else if( $USERNAME == $field[ 0 ] ){
                       $userVerified = 1;

                       if( checkPassword( $PASSWORD, $field ) == true )
                           accessGranted( $USERNAME );
                       else
                           wrongPassword();
                   }
               }

               fclose( $file );

               if( !$userVerified )
                   accessDenied();

           }

           function checkPassword( $userpassword, $filedata )
           {
               if( $userpassword == $filedata[ 1 ] )
                   return true;
               else
                   return false;
           }

           function userAdded( $name )
           {
               print("<br><br><br><br><br><p style=\"font-family: arial;text-align: center;font-size: 1em; color: black\"><strong>Thank you<br>You have added to the user list, $name.<br /> Enjoy the site.</strong></p>"
              );

           }

           function accessGranted( $name )
           {
                print("<br><br><br><br><br><p style=\"font-family: arial;text-align: center;font-size: 1em; color: black\"><strong>Thank you<br>Permission has been granted, $name.<br /> Enjoy the site.</strong></p>" );
           }

           function wrongPassword()
           {
               print( "<br><br><br><br><br><p style=\"font-family: arial;text-align: center;font-size: 1em; color: black\"><strong>Access Denied<br>You entered the invalid password.<br /> Access has been denied.</strong></p>"
           );
           }

           function accessDenied()
           {
               print( "<br><br><br><br><br><p style=\"font-family: arial;text-align: center;font-size: 1em; color: black\"><strong>Access Denied<br>You were denied Access has been denied access to this server.</strong></p>"
           );
           }

           function fieldsBlank()
           {
               print( "<br><br><br><br><br><p style=\"font-family: arial;text-align: center;font-size: 1em; color: black\"><strong>Access Denied<br>Please fill in all form fields.</strong></p>"
          );
           }
    ?>
