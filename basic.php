<!DOCTYPE html>
<html>
<body>


 
 <html>
 <head>
 <style type="text/css">
 h2, p{
     color:red;
     font-style:italic;
 }
 </style>
 </head>
<body>
<?php 
  echo"<h2>Hello Maimalee</h2>";
    //looping body

    for($x =0; $x<=100; $x++){
        echo"<p>Number $x </p>";
       // echo "<br>";
    }

    
      for($x=0; $x<=20; $x++){
      echo $x;
      echo"</br></br>";
    }
    echo"</br>";
    $numbers = array(1,2,3,4,5);
    foreach($numbers as $value){
      echo "Value is $value </br></br>";
    }
$today = "fri";
$d = $today;
switch ($d)
{
  case "mon":
    echo"Today is monday";
  break;

  case "tue":
    echo"Today is tuesday";
  break;

  case "wed":
    echo"Today is wednesday";
  break;

  case "thu":
    echo"Today is thursday";
  break;

  case "fri":
    echo"<p>Today is friday</p>";
  break;
}

 ?>
</body>
 
</html>
