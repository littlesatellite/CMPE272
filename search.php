<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>searching results</title>
</head>

<body>
    <h1 align='center'>Searching Results</h1>
    
    <p>
        <?php
           
            $first = $_POST['s_firstname'];
            $last  = $_POST['s_lastname'];
            $email = $_POST['s_email'];
            $homephone = $_POST['s_hphone'];
            $cellphone = $_POST['s_cphone'];
        
        
      
            try {
                // Connect to the database.
                $con = new PDO("mysql:host=localhost; dbname=test",                               
                               "deadlock", "sesame");
                $con->setAttribute(PDO::ATTR_ERRMODE,
                                   PDO::ERRMODE_EXCEPTION);

                // Constrain the query.
	  $query = "SELECT * FROM NewUsers ";
	  if (strlen($first) > 0) {
	       $query .= "WHERE UPPER(firstname) like UPPER('$first') ";
	  }
      if (strlen($last) > 0) {
	      $query .= "WHERE UPPER(lastname) like UPPER('$last') ";
	  }
      if (strlen($email) > 0) {
	      $query .= "WHERE UPPER(email) like UPPER('$email') ";
	  }
      if (strlen($homephone) > 0) {
	      $query .= "WHERE UPPER(h_phone) like UPPER('$homephone') ";
	  }
      if (strlen($cellphone) > 0) {
	      $query .= "WHERE UPPER(c_phone) like UPPER('$cellphone') ";
	  }
      
	  else {
	      $query .= "";
	  }
	  //echo $query;

                // We're going to construct an HTML table.
                print "<table align='center' border='1' cellspacing='0' cellpadding='0' >\n";
                
                // Query the database.
	  $data = $con->query($query);
	  $data->setFetchMode(PDO::FETCH_ASSOC);
	  $count = $data->rowCount();
	  if ($count == 0) print "<p>Not found!</p>";
	  else print "<p align='center'>$count results!</p>";
      
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
        ?>
    </p>

</body>
</html>
