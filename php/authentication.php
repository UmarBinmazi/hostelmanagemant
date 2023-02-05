<?php
$conn = mysqli_connect("localhost","root","","hostel");
if($conn){
    if(isset($_POST["login"])){
        $email = $_POST["email"];
        $password = $_POST["password"];
        $query=" SELECT * FROM `candidates` WHERE `PASSWORD` like '$password' and `EMAIL` like '$email'";
        $run = mysqli_query($conn,$query);

        if($run){
            if($run->num_rows > 0)
            {
                session_start();
                $_SESSION["user"] = $email;
                header("location:myDetails.php");
                die();
            }else{
                echo "details not found";
            }
        }
        else{
            echo "Server Err...";
        }

    }else{
        echo "Something went wrong";
    }
}else{
    echo "Connection is not established";
}

?>