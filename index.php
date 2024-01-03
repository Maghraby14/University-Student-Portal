<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.getElementById("regform").addEventListener("submit", function (event) {
                var regNumber = document.getElementById("regno").value;
                var password = document.getElementById("pass").value;
                var errorElement = document.getElementById("error");
                errorElement.innerHTML = "";
                if (!/^\d{8}$/.test(regNumber)) {
                    errorElement.innerHTML = "Registration number must contain 8 numeric characters.";
                    event.preventDefault();
                    return;
                }

                if (!/^\d{6}$/.test(password)) {
                    errorElement.innerHTML = "Password must contain 6 numeric characters.";
                    event.preventDefault();
                    return;
                }

            });
        });
    </script>
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="icon" href="./images/pngwing.com.png"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>AASTMT Student Portal</title>
</head>
<body>
    <div id="background">
        <div id="form">
            <form id="regform" method="post" action="includes/login.inc.php">
                <div id="info">
                    <img src="./images/pngwing.com.png" alt="">
                <h2>
                   <span>Student</span>  Portal
                </h2>
                </div>
                
                <h2>Registration</h2>
                <button ><a href="./registration.php" style="color:white;">Open Registration</a></button>
                
                <h2>Login</h2>
                <input type='search' placeholder="Registration Number" class="in" id="regno"  name="stdid" />
                <br />
                <input type='password' placeholder="Password" class="in" id="pass"  name="stdpass"/>
                <br />
                <p class="error" id="error"></p>
                <div>
                    <input type="checkbox" name="Remember" />
                <label for="Remember">Remember Me</label>
                </div>
                <br />
                <input type='submit' value='Login' class="in submit" name="submit"/>
                <br />
                <p>
                    Change Password? Click <a href="./newPassword.php">here</a> to update your password
                </p>
            </form>
        </div>
        
    </div>
    

</body>
</html>