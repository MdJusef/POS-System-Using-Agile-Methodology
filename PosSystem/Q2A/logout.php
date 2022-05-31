<?php
    session_start();
    setcookie("username","",time()-60*60*24);
    session_destroy();

    echo "<a href='login.php'>Go to home page</a>";
?>