
    
    <?php
   
        $severname = "localhost";
        $username = "root";
        $password = "";
        $dbname = "demo";
        //connection
        $con  = new mysqli($severname, $username, $password, $dbname);

        //check connection

        if(!$con){
            die('cannot connect' . mysql_error());
        }

        else{
            echo "connected";
        }

        $sql = "INSERT INTO demo
                (user,pass)
          VALUES('$_POST[fname]', '$_POST[lname]' )";

        if(!mysqli_query($sql, $con)){
            die('Error :' . mysql_error());
        }

        echo " 1 Record added";
        $con->close();

    
    ?>
