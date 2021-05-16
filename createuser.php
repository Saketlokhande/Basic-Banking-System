<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="createuser.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body{
            background-image:url('https://www.technology-solved.com/wp-content/uploads/2019/04/technology-to-reduce-stress-image.png');
            background-size:cover;
        }
        
    </style>
</head>

<body input>
<?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Hurray! User created');
                               window.location='transfermoney.php';
                     </script>";
                    
    }
  }
?>
<div class="create-container">
    <div class="content">
    <a href="index.html"></a>
            <form class="app-form" method="post">
                <h2>Create a User</h2>
                <div class="app-form-group">
                <input class="app-form-control input" placeholder="NAME" type="text" name="name" required>
                </div>
                <div class="app-form-group">
                <input class="app-form-control input" placeholder="EMAIL" type="email" name="email" required>
                </div>
                <div class="app-form-group">
                <input class="app-form-control input" placeholder="BALANCE" type="number" name="balance" required>
                </div>
                <br>
                <div class="app-form-group button">
                <input class="app-form-button btns1" type="submit" value="CREATE" name="submit"></input>
                <input class="app-form-button btns2" type="reset" value="RESET" name="reset"></input>
                </div>
            </form>
            </div>
            <footer>
                <p>&copy 2021. Made by <b>Saket Lokhande</b></p>
            </footer>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</body>
</html>