<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session & Cookies</title>
</head>
<body>
    <form action="login.php"method="post">
        <div class="">
            <label for="">Username</label>
            <input type="text"name="userName"placeholder="Enter Username">
        </div>
        <div class="">
            <label for="">Password</label>
            <input type="password"name="password">
        </div>
        <div>
            <input type="checkbox"name="rem">
        </div>
        <div class="div">
            <input type="submit"name="login">
        </div>
    </form>

    <?php

        session_start();
        
        if(isset ($_POST['login'])){
            $userName = $_POST['userName'];
            $password = $_POST['password'];

            $query = "select * from user where username = '$userName' and 
            password = '$password'";
            $connection = mysqli_connect("localhost","root","","Mydb1");
            $answer = mysqli_query($connection,$query);

            $userName = "";
            $password = "";
            $name = "";
            if(mysqli_num_rows($answer)>0){
                $row = mysqli_fetch_assoc($answer);
                $userName = $row['username'];
                $password = $row['password'];
                $name = $row['username'];
            }
            if($name!=""){
                $_SESSION['username'] = $name;
            if(isset($_post['rem'])){
                setcookie('username',$name,time() + 60*60*24);
               //  
            }
            header('location:index.php');

            }  
        else
            echo "user not found";
        }
    ?>
    
</body>
</html>