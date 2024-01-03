<?php
if(isset($_POST['submit'])){
require "dbh.inc.php";
$stdid=$_POST['stdid'];
$pass=$_POST['stdpass'];
if(empty($stdid)  || empty($pass)){
    header('Location: ../index.php?error=emptyfields');

    exit();
}
else{
    $sql = "SELECT * FROM students WHERE ID=? OR  Password=?;";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header('Location: ../index.php?error=sqlerror');

    exit();
    }
    else{
        mysqli_stmt_bind_param($stmt,"is",$stdid,$pass);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if($row = mysqli_fetch_assoc($result)){

            $passcheck=password_verify($pass,$row['Password']);
            
            if($pass !== $row['Password']){
                header('Location: ../index.php?error=wrongpass');

                exit();
            }
            else if($pass == $row['Password']){
                session_start();
                
                $_SESSION['userID']= $row['Id'];
                if (isset($_POST['Remember']) && $_POST['Remember'] === 'on') {
                    $cookie_name = 'user_id';
                    $cookie_value = $row['Id'];
                    $cookie_pass = 'user_pass';
                    $cookie_val = $row['Password'];
                    // Set cookie to expire after one hour (3600 seconds)
                    setcookie($cookie_name, $cookie_value, time() + 3600, "/");
                    setcookie($cookie_pass, $cookie_val, time() + 3600, "/");
                }

                header('Location: ../HomePage.php?success='.$_SESSION['userID']);

                exit();
            }

        }
        else{
            header('Location: ../index.php?error=wrongpass');

            exit();
        }

    }

}
}
else{
    header('Location: ../index.php');
    exit();
}