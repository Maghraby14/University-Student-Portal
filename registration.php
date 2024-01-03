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
                if (!/^\d{6}$/.test(regNumber)) {
                    errorElement.innerHTML = "Password must contain 6 numeric characters.";
                    event.preventDefault();
                    return;
                }

                if (!/^\d{6}$/.test(password)) {
                    errorElement.innerHTML = "Password must contain 6 numeric characters.";
                    event.preventDefault();
                    return;
                }
                
                if (password !== regNumber) {
                alert('Passwords do not match. Please enter the same password.');
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
            <form id="regform" method="post" action="includes/regi.inc.php">
                <div id="info">
                    <img src="./images/pngwing.com.png" alt="">
                <h2>
                   <span>Student</span>  Portal
                </h2>
                </div>
                
                <h2>Login</h2>
                <button ><a href='./index.php' style="color:white;">Open Login</a></button>
                
                <h2>Registration</h2>
                <input type='search' placeholder="Name" class="in" id="regn"  name="name"/>
                <br />
                <input type='search' placeholder="Email" class="in" id="regnoo"  name="email"/>
                <br />
                <input type='number' placeholder="Phone" class="in" id="regno"  name="number"/>
                <br />
                <input type='password' placeholder="Password" class="in" id="reg"  name="pass"/>
                <br />
                <label>Gender:</label>
                  <input type="radio" id="male" name="gender" value="male" >
        <label for="male">Male</label>
        
        <input type="radio" id="female" name="gender" value="female" >
        <label for="female">Female</label>
                <p class="error" id="error"></p>
              
                <br />
                
                <input type='submit' value='Register' class="in submit" name="submit"/>
            </form>
        </div>
        
    </div>
    

</body>
</html>