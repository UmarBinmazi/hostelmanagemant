<?php
$conn = mysqli_connect("localhost","root","","hostel");
session_start();
if(!isset($_SESSION["admin"])){
    header("location:index.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard- VIP Hostel</title>
</head>
<style>
    body{
        margin: 0;
        padding: 0;
        background-color: rgb(2, 7, 17);
        color: aliceblue;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
    ::-webkit-scrollbar{
        width: 1px;
    }
    header{
        padding-right: 10px;
        background: black;
        display: flex;
        align-items: center;
        place-content: space-between;
    }
    header .logo img {
        height: 90px;
    }
    header nav a{
        padding: 7px;
        color:aliceblue;
        text-decoration: none;
    }
    header nav a:hover{
        color: rgb(32, 224, 224);
    }

    .container{
        padding: 20px 0;
        width: 80%;
        margin: auto;
        overflow-x: scroll;
    }
    footer{
        padding: 20px;
        position: relative;
        display: flex;
        flex-direction: row;
        place-content: center;
        gap: 30px;
        background-color: #000000;
    }
    footer .col{
        display: flex;
        flex-direction: column;
    }
    footer a{
        text-decoration: none;
        color: aliceblue;
    }
    @media screen and (max-width:750px){
        .container{
            width:98%;
        }
        footer{
            flex-direction: column;
        }
    }
</style>
<body>
<header>
        <div class="logo"> <img src="../Images/logo.png" alt="" loading="lazy"></div>
        <nav>
        <a href="../index.html">Home</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>
    <main>
        <div class="container">
            <?php
            $query="SELECT * FROM `candidates`";
            $run = mysqli_query($conn,$query);
                if ($run){
                    echo"<table cellspacing='0' cellpadding='10' style='width:100%; font-size:11pt;'>";
                    echo"
                    <tr style='background:gray'>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>WORK</th>
                        <th>DEPARTMENT</th>
                        <th>ADDRESS</th>
                        <th>DOB</th>
                        <th>ADMISSION DATE</th>
                        <th>ROOM NO</th>
                    </tr>
                    ";

                    while($row=$run->fetch_assoc()){
                        ?>
                        <tr>
                            <td><?php echo $row['ID'];?></td>
                            <td><?php echo $row['FULLNAME'];?></td>
                            <td><?php echo $row['WORK'];?></td>
                            <td><?php echo $row['DEPARTMENT'];?></td>
                            <td><?php echo $row['ADDRESS'];?></td>
                            <td><?php echo $row['DOB'];?></td>
                            <td><?php echo $row['ADMISSION DATE'];?></td>
                            <td><?php echo $row['ROOM NO'];?></td>
                        </tr> 
                    <?php 
                    }
                    echo"</table>";
                }?>
        </div>
    </main>
    <footer>
    <div class="col">
            <h4>Address :</h4>
            108-B, V.I.P Hostel,<br>
            Maha Laxmi Nagar, Pachod Road,<br>
            Ambad-431204 
        </div>
        <div class="col">
            <h4>Get In Touch :</h4>
            <a href="https://wa.me/9175829471">WhatsApp</a>
            <a href="https://www.instagram.com/umarbm1007">Instagram</a>
            <a href="https://www.facebook.com/Umar Binmazi">Facebook</a>
        </div>
    </footer>
</body>
</html>