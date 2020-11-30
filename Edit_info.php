<html>
   
   <head>
      <title>Update a Record in MySQL Database</title>
   </head>
   
   <body>
      <?php
         if(isset($_POST['update'])) {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "car4rent";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }

            if("" != trim($_POST['email'])){    //check if empty
                $email = $_POST['email'];
                $sql = "UPDATE users SET email= '".$email."' WHERE user_id = 1110";
                if ($conn->query($sql) === TRUE) {
                echo "email updated successfully";
                header( "refresh:3;url=http://localhost/fully-funtional-website-main/user-interface.php" );
                } else {
                echo "Error updating record: " . $conn->error;
                header( "refresh:3;url=http://localhost/fully-funtional-website-main/user-interface.php" );
                }
            }
            elseif("" != trim($_POST['address'])){
                $address = $_POST['address'];
                $sql = "UPDATE users SET address= '".$address."' WHERE user_id = 1110";
                if ($conn->query($sql) === TRUE) {
                echo "address updated successfully";
                } else {header( "refresh:3;url=http://localhost/fully-funtional-website-main/user-interface.php" );
                echo "Error updating record: " . $conn->error;
                }

            }
            else{
                header("Refresh:0");
            } 
            
            $conn->close();
         }else {
            ?> 

            <?php 
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "car4rent";
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            $sql = "SELECT * FROM users WHERE user_id = 1110";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $address = $row["address"];
            $email = $row["email"];
            ?>




               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table width = "400" border =" 0" cellspacing = "1" 
                     cellpadding = "2">
                  
                     <tr>
                        <td width = "100">Change Address:</td>
                        <td><input name = "address" type = "text" 
                           id = "address" value = "<?php echo $address ?>"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100">Change email:</td>
                        <td><input name = "email" type = "text" 
                           id = "email" value = "<?php echo $email ?>"></td>
                     </tr>


                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "update" type = "submit" 
                              id = "update" value = "Update">
                        </td>
                     </tr>
                  
                  </table>
               </form>
               <?php $conn->close(); ?>
            <?php
         }
      ?>
      
   </body>
</html>