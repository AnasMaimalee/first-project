<?php

if(isset($_POST['submitted'])){
    include('connect-mysql.php');


$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['emailaddress'];

$sqlinsert = "INSERT INTO myDetails
(firstname, lastname, email)
VALUES($fname, $lname, $email)";

if(!mysqli_query($conn, $sqlinsert)){
    die("Error Inserting New Record");
    }   
    else{
        $record = " 1 Record Added";
    } 
}
?>

<html>
<head>
<title>insert data-to-database</title>
</head>
<body>
    <form method="post" action="insert-data.php">
        <input type="hidden" name="submitted" value="true" />

        <fieldset>
            <legend>New People</legend>

                <label>Fisrt Name<input type="text" name="fname" /></label>
                <br>
                <label>Last Name<input type="text" name="lname" /></label>
                <br>
                <label>Email<input type="email" name="emailaddress" /></label>

        </fieldset>
    <br>
                <input type="submit" value="Add New Record " />
    </form>
<?php
    
    

?>

</body>
</html>