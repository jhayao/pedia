<?php   
    include("connection.php");
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
?>