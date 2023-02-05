<?php
$conn = mysqli_connect("localhost","root","","hostel");
if($conn){
    if(isset($_POST["submit"])){
        $fullname = $_POST["fullname"];
        $work = $_POST["work"];
        $department = $_POST["department"];
        $address = $_POST["address"];
        $dob = $_POST["dob"];
        $admissiondate = $_POST["admissiondate"];
        $email = $_POST["email"];
        $password = $_POST["password"];
    
        $file = $_FILES['photo']['name'];
        $file_tem_loc = $_FILES['photo']['tmp_name'];
        $file_store = "../uploads/".$file;
        if(strlen($file) < 30) {
            if (move_uploaded_file($file_tem_loc,$file_store)) {
                $query = "INSERT INTO `candidates`(`ID`, `FULLNAME`, `WORK`, `DEPARTMENT`, `ADDRESS`, `DOB`, `ADMISSION DATE`, `EMAIL`, `PASSWORD`, `FILE`, `ROOM NO`) VALUES ('','$fullname','$work','$department','$address','$dob','$admissiondate','$email','$password','$file','')";
                $run = mysqli_query($conn,$query);
                if($run) {
                    echo "<script> alert('Admission confirmed...'); </script>";
                    echo "<script> location.href='../index.html'; </script>";
                }
                else {
                    echo "Server err...";
                }   
            }
            else {
                echo "File Not Uploaded...";
            }

        }
        else{
            echo "rename your image file...";
        }

    }
    else {
        echo "something went wrong...";
    }
}
else {
    echo "database not connected";
}
?>