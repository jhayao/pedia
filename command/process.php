<?php   
    include_once("connection.php");
    //Login
    if (isset($_POST["login"])) {
        $username = $_POST["username"];
        $pass = md5($_POST["password"]);
        $query = "select * from users where username = '$username' and password = '$pass'";
        $result = $con->query($query);
        if($result)
        {
            if($rowcount=$result->num_rows)
            {
                echo "success";
                $_SESSION['username']=$username;
            }
            else
            {
                echo "failed";
            } 
        }
        else
        {
            echo  $con -> error;
        }
    }
    //signup
    if (isset($_POST["signup"])) {
        $username = $_POST["username"];
        $pass = md5($_POST["password"]);
        $name = $_POST["name"];
        $user = $_POST["userType"];
        $query = "insert into users values(null,'$name','$username','$pass','$user')";
        $result = $con->query($query);
        if($result)
        {
            echo "success";
        }
        else
        {
            echo  $con -> error;
        }
    }

    //add Patient
    if (isset($_POST["addPatient"])) {
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $mname = $_POST["mname"];
        $suffix = $_POST["suffix"];
        $contact = $_POST["contact"];
        $address = $_POST["address"];
        $bday = $_POST["bday"];
        $query = "INSERT INTO `patients`(`id`, `lname`, `fname`, `mname`, `suffix`, `bday`, `contact`, `address`) VALUES (null,'$lname','$fname','$mname','$suffix','$bday','$contact','$address')";
        $result = $con->query($query);
        if($result)
        {
            echo "success";
        }
        else
        {
            echo  $con -> error;
        }
    }
    if(isset($_POST["logout"]))
    {
        session_destroy();
    }
?>