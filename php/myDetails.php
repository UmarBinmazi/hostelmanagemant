<?php
session_start();
if(!isset($_SESSION["user"])){
    echo "
    <script>
        alert('Please login...');
        location.href = '../login.html';
    </script>
    ";
    die();
}

$conn = mysqli_connect("localhost","root","","hostel");
$email = $_SESSION["user"];
$query=" SELECT * FROM `candidates` WHERE `EMAIL` like '$email' ";
$run = mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyDetails-VIP Hostel Ambad</title>
</head>
<style>
    body{
        margin: 0;
        padding: 0;
        background-color: rgb(2, 7, 17);
        color:white;
        font-family:verdana;
    }
    header{
        padding:30px;
        text-align:center;
        font-size:2.5rem;
        font-weight:bolder;
        background:black;
    }
    .container{
        padding:30px;
        width:80%;
        margin:auto;
        display: flex;
        flex-direction: column;
        gap: 25px;
    }
    input{
        width: 100%;
        height:35px;
        padding-left: 20px;
        border: none;
        font-size: 13pt;
        color:white;
        background:transparent;
        border-left:3px solid aqua;
    }
    label{
        color:aqua;
        font-size:10pt;
    }
    footer{
        background:black;
        padding:20px;
        text-align:center;
    }
    @media screen and (max-width:750px){
        .container{
            width:100%;
        }
    }
</style>
<body>
    <header>
        My Details
    </header>
    <main>
        <div class="container">
            <?php
                if ($run){
                    while($row=$run->fetch_assoc()){
                    ?>
                    <div class="form-field">
                        <label>FULLNAME</label>
                        <input type="text" value="<?php echo $row['FULLNAME'];?>" disabled>
                    </div>
                    <div class="form-field">
                        <label>EMAIL</label>
                        <input type="text" value="<?php echo $row['EMAIL'];?>" disabled>
                    </div>
                    <div class="form-field">
                        <label>WORK</label>
                        <input type="text" value="<?php echo $row['WORK'];?>" disabled>
                    </div>
                    <div class="form-field">
                        <label>DEPARTMENT</label>
                        <input type="text" value="<?php echo $row['DEPARTMENT'];?>" disabled>
                    </div>
                    <div class="form-field">
                        <label>ADDRESS</label>
                        <input type="text" value="<?php echo $row['ADDRESS'];?>" disabled>
                    </div>
                    <div class="form-field">
                        <label>DOB</label>
                        <input type="text" value="<?php echo $row['DOB'];?>" disabled>
                    </div>
                    <div class="form-field">
                        <label>ADMISSION DATE</label>
                        <input type="text" value="<?php echo $row['ADMISSION DATE'];?>" disabled>
                    </div>
                    <div class="form-field">
                        <?php
                                if($row['ROOM NO']==0){
                                    echo "
                                        <label>ROOM NO</label><br>
                                        <input style='color:green' value='Please deposit your money to allocate room no...' disabled>
                                    ";
                                }else
                                {
                                    $roomno = $row['ROOM NO'];
                                    echo "
                                        <label>ROOM NO</label><br>
                                        <input value='$roomno' disabled>
                                    ";
                                }

                        ?>   
                    </div>
                    <?php
                    }
                }
            ?>
        </div>
    </main>
    <footer>
            108-B, V.I.P Hostel,
            Maha Laxmi Nagar, Pachod Road,
            Ambad-431204 
    </footer>
</body>
</html>