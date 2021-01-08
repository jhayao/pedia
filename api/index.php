<?php
 include_once('../command/connection.php');
 if (!$con -> connect_errno) {
    echo "Connected to Database\n";
  }


 if (isset($_POST["celsius"])) {
    date_default_timezone_set('Asia/Kolkata');  // for other timezones, refer:- https://www.php.net/manual/en/timezones.asia.php
    $d = date("Y-m-d");
    $t = date("H:i:s");
    $celsius = $_POST["celsius"];
    $fahrenheit = $_POST["fahrenheit"];
    $query = "INSERT INTO `room_temperature`(`id`, `celcius`, `fahrenheit`, `time`, `date`) VALUES (null,'$celsius','$fahrenheit','$t','$d')";
    $result = $con->query($query);
    if($result)
    {
        echo "Value Inserted"; 
    }
    else
    {
        echo  $con -> error;
    }
}


?>