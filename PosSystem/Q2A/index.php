<?php
session_start();
//print_r($_SESSION);
    if(isset($_SESSION['username'])){
        echo "<h1> Welcome {$_SESSION['username']}<h1>";
 echo "<a href='logout.php'>logout</a>";
    }
    else{
        echo "Not Logged in";
    }
?>