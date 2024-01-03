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
            var notificationsButton = document.getElementById("notificationsButton");
            var notificationsContainer = document.getElementById("notificationsContainer");

            notificationsButton.addEventListener("click", function () {
                // Toggle visibility of notifications container
                notificationsContainer.style.display = notificationsContainer.style.display === "none" ? "block" : "none";
            });

            // Close notifications container when clicking outside of it
            document.addEventListener("click", function (event) {
                if (!notificationsButton.contains(event.target) && !notificationsContainer.contains(event.target)) {
                    notificationsContainer.style.display = "none";
                }
            });
        });
    </script>
    <link rel="stylesheet" href="./styles/homepage.css">
    <link rel="stylesheet" href="./styles/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-
    BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
    crossorigin="anonymous">
    <link rel="icon" href="./images/pngwing.com.png"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<title>AASTMT Student Portal</title>
</head>
<body>
    <header class="header " style="position: fixed; width: 100%; z-index: 10;">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <img src="./images/pngwing.com.png" alt="" srcset="" style="margin-right: 15px;">
              <a class="navbar-brand" href="#"><span style="font-weight: bold;">Student</span> Portal</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">News</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Change Language
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">English</a></li>
                      <li><a class="dropdown-item" href="#">Arabic</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Another language</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    
                    <a class="nav-link " >FeedBack</a>
                  </li>
                  
                </ul>
                <form class="d-flex" role="search">
                  
                  
                    
                        <a href="#" id="notificationsButton" data-toggle="popover" title="Notifications" data-content="Your Reasults of AI Have been Realeased"><img src="./images/notification.png" alt="" srcset="" style=" margin-top: 7px; margin-left: 10px;"></a>
                        <div id="notificationsContainer">
                            <div class="notification">New message received</div>
                            <div class="notification">You have a meeting at 2 PM</div>
                            <div class="notification">Your Reasults of AI Have been Realeased</div>
                    </div>
                    
                </form>
              </div>
            </div>
          </nav> 
          
    </header>
    <div class="sid-ul side-nav" >
        <ul class="nav flex-column h-100 justify-content-around ">
            <li class="nav-item d-flex side">
              <img src="./images/dashboard (1).png" alt=""><a class="nav-link active white" aria-current="page" href="#" style="color: white;">Dashboard</a>
            </li>
            <li class="nav-item d-flex side">
                <img src="./images/online-course.png" alt="">
              <a class="nav-link white" href="#" style="color: white;">Courses</a>
            </li>
            <li class="nav-item d-flex side">
                <img src="./images/evaluation.png" alt="">
              <a class="nav-link white" href="./Results.php" style="color: white;">Results</a>
            </li>
            <li class="nav-item d-flex side">
                <img src="./images/user.png" alt="">
                <a class="nav-link white" href="#" style="color: white;">Profile</a>
              </li>
              
              
              <li class="nav-item d-flex side">
                <img src="./images/room.png" alt="">
                <a class="nav-link white" href="#" style="color: white;">Student appeal</a>
              </li>
              <li class="nav-item d-flex side">
                <img src="./images/logout.png" alt="">
                <a class="nav-link white" href="./index.php" style="color: white;">Logout</a>
              </li>
            
          </ul>
    </div>
   
    <div class=" m-0  w-100">
<div class="row  w-100">
    <div class="col-2 bg-dark  shadow-colmn" >

    </div>
    <div class="col-10  h-100 mid-col" style="margin-top:70px">
        <div class="row  justify-content-around welcome-div"  style="background-color: #1c2959; color: #e5e8ef;">
            <div class="col d-flex flex-column justify-content-around" > 
                <div>
                    <p>September 18,2023</p>
                </div>
                <div>
                    <?php
                    
                    $servername = 'localhost';
$dbUsername="root";
$dbpass="";
$dbname='university';
$conn = mysqli_connect($servername,$dbUsername,$dbpass,$dbname);
if(!$conn){
    die("Could not connect to".mysqli_connect_error());
}
                    $sql = "SELECT name FROM students WHERE Id = ?";
                    $stmt = $conn->prepare($sql);
                    
                    // Bind parameter
                    $stmt->bind_param("i", $_SESSION['userID']);
                    
                    // Execute the statement
                    if ($stmt->execute()) {
                        // Bind the result variable
                        $stmt->bind_result($name);
                    
                        // Fetch the result
                        if ($stmt->fetch()) {
                            echo "<h3>Welcome back $name</h3>";
                        } else {
                            echo "No record found for ID ".$_SESSION['userID'];
                        }
                    } else {
                        echo "Error retrieving data: " . $stmt->error;
                    }
                    
                    ?>
                    
                    <p>Always stay updated in your student portal</p>
                </div>
            </div>
            <div class="col d-flex justify-content-end " width="20%">
                <img class="img-fluid rounded-circle prof-img" src="./images/johm-kann-71NgiXcdTzE-unsplash.jpg"   >
            </div>
        </div>
    </div>
</div>
    </div>
    <div class=" m-0  w-100">
        <div class="row  w-100">
            
            <div class="col-2 bg-dark  shadow-colmn" >

            </div>
            <div class="col-6  h-100 mid-col" style="margin-top:10px">
                
               <div class="row">
                
                <div class="d-flex flex-row justify-content-between align-items-center">
                    <h3>Saturday</h3> 
                    <a href="" style="text-decoration: none;">My Schedule ></a></div>
                </div>
                <div class="row d-flex flex-row justify-content-around " style="margin-bottom:12px;" >
                    <div class="col d-flex flex-column sched-table " style="flex-grow: 1; ">
                        <table >
                            <tr>
                                <th>10:30 AM</th>
                                <th>12:30 PM</th>
                            </tr>
                            <tr col-span="2" class="text-center">
                                <td >CC 511 <br> Intro to Artificial Intelligence</td>
                            </tr>
                            <tr col-span="2">
                                <td class="text-center">كرمه محمد جابر فتح االله</td>
                            </tr>
                            <tr>
                                <td>Room# 310g</td>
                                <td>Lecture</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col d-flex flex-column sched-table" style="flex-grow: 1; ">
                        <table>
                            <tr>
                                <th>10:30 AM</th>
                                <th>12:30 PM</th>
                            </tr>
                            <tr col-span="2">
                                <td class="text-center">CC 511 <br> Intro to Artificial Intelligence</td>
                            </tr>
                            <tr col-span="2">
                                <td class="text-center">كرمه محمد جابر فتح االله</td>
                            </tr>
                            <tr>
                                <td>Room# 310g</td>
                                <td>Lecture</td>
                            </tr>
                        </table>
                    </div>
                </div>
               
                    <div class="row d-flex flex-row justify-content-around" >
                        <div class="col d-flex flex-column sched-table  " style="flex-grow: 1; ">
                            <table >
                                <tr>
                                    <th>10:30 AM</th>
                                    <th>12:30 PM</th>
                                </tr>
                                <tr col-span="2" class="text-center">
                                    <td >CC 511 <br> Intro to Artificial Intelligence</td>
                                </tr>
                                <tr col-span="2">
                                    <td class="text-center">كرمه محمد جابر فتح االله</td>
                                </tr>
                                <tr>
                                    <td>Room# 310g</td>
                                    <td>Lecture</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col d-flex flex-column sched-table" style="flex-grow: 1; ">
                            <table>
                                <tr>
                                    <th>10:30 AM</th>
                                    <th>12:30 PM</th>
                                </tr>
                                <tr col-span="2">
                                    <td class="text-center">CC 511 <br> Intro to Artificial Intelligence</td>
                                </tr>
                                <tr col-span="2">
                                    <td class="text-center">كرمه محمد جابر فتح االله</td>
                                </tr>
                                <tr>
                                    <td>Room# 310g</td>
                                    <td>Lecture</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="row d-flex flex-row justify-content-around">
                
                        <div class="d-flex flex-row justify-content-between align-items-center" style="margin-top: 12px;">
                            <h3>Enrolled Courses</h3> 
                            <a href="" style="text-decoration: none;">See All ></a></div>
                        </div>
                    <div class="row d-flex flex-row " style="margin-top: 12px;">
                        
                        <div class="col d-flex flex-row align-items-center justify-content-between course-tab" style="flex-grow: 1; ">
                            <div class="d-flex flex-column">
                                <h3 >Artificial Intelligence</h3>
                            <button class="btn btn-warning">View</button>
                            </div>
                            <div class="d-flex">
                                <img src="./images/ebook.png " alt="" class="course-img">
                            </div>
                            
                        </div>
                        <div class="col d-flex flex-row align-items-center justify-content-between course-tab" style="flex-grow: 1; ">
                            <div class="d-flex flex-column">
                                <h3>Web Development</h3>
                            <button class="btn btn-warning">View</button>
                            </div>
                            <div class="d-flex">
                                <img src="./images/ebook.png" alt="" class="course-img">
                            </div>
                            
                        </div>
                        
                        
                        
                    </div>
                    <div class="row d-flex flex-row " style="margin-top: 12px;">
                        
                        <div class="col d-flex flex-row align-items-center justify-content-between course-tab" style="flex-grow: 1; ">
                            <div class="d-flex flex-column">
                                <h3 >Advanced Networks</h3>
                            <button class="btn btn-warning">View</button>
                            </div>
                            <div class="d-flex">
                                <img src="./images/ebook.png " alt="" class="course-img">
                            </div>
                            
                        </div>
                        <div class="col d-flex flex-row align-items-center justify-content-between course-tab" style="flex-grow: 1; ">
                            <div class="d-flex flex-column">
                                <h3>Enviromental</h3>
                            <button class="btn btn-warning">View</button>
                            </div>
                            <div class="d-flex">
                                <img src="./images/ebook.png" alt="" class="course-img">
                            </div>
                            
                        </div>
                        
                        
                        
                    </div>
                

            </div>
            <div class="col-4  last-col" style=" margin-top:10px;">
                <div class="row d-flex flex-row justify-content-around">
                
                    <div class="d-flex flex-row justify-content-between align-items-center" style="margin-top: 12px;">
                        <h3>Instructors</h3> 
                        <a href="" style="text-decoration: none;">See All ></a></div>
                    </div>
               <div class="row d-flex flex-row justify-content-around">
                <div class="col ">
                    <div class="ins-img" style="background-image: url('./images/pexels-andrea-piacquadio-774909.jpg');">

                    </div>                    
                </div>
                <div class="col ">
                    <div class="ins-img" style="background-image: url('./images/pexels-chloe-1043473.jpg'); ">

                    </div>                    
                </div>
                <div class="col ">
                    <div class="ins-img" style="background-image: url('./images/pexels-daniel-xavier-1239288.jpg'); ">

                    </div>                    
                </div>
                <div class="col ">
                    <div class="ins-img" style="background-image: url('./images/pexels-natasha-lois-4689912.jpg'); ">

                    </div>                    
                </div>

               </div>
               <div class="row d-flex flex-row justify-content-around">
                
                <div class="d-flex flex-row justify-content-between align-items-center" style="margin-top: 12px;">
                    <h4>Announcments</h4> 
                    <a href="" style="text-decoration: none;">></a></div>
                </div>
                <div class="row d-flex flex-row">
                    <div>
                        <h6>Exam Schedule</h6>
                    </div>
                </div>
                <div class="row d-flex flex-row justify-content-around">
                    <div class="col d-flex flex-column justify-content-between align-items-center w-100 ">
                        <table class="w-100">
                            <tr>
                            <th>Day</th>
                            <th>Time</th>
                            <th>Room#</th>
                            </tr>
                            <tr>
                                <td>Sunday</td>
                            <td>12:30 AM</td>
                            <td>309G</td>
                            </tr>
                            <tr>
                                <td>Monday</td>
                                <td>12:30 AM</td>
                                <td>309G</td>
                            </tr>
                            <tr>
                                    <td>Thuresday</td>
                                    <td>12:30 AM</td>
                                    <td>309G</td>
                            </tr>
                            <tr>
                                        <td>Friday</td>
                                        <td>12:30 AM</td>
                                        <td>309G</td>
                                    
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row d-flex flex-row justify-content-around">
                
                    <div class="d-flex flex-row justify-content-between align-items-center" style="margin-top: 12px;">
                        <h3>Modules</h3> 
                        <a href="" style="text-decoration: none;">See All ></a></div>
                    </div>
                    
                      
                       
                    <div class="row d-flex flex-row justify-content-around" style="margin-top: 10px;">
                        <div class="col d-flex flex-row align-items-center set-container" style="background-color: #e5e8ef; margin-right: 5px;">
                            <div class="set-img" style="background-image: url('./images/settings.png');  ">
        
                            </div>  
                            <h5><a href="./GpaCalculator.php" style="text-decoration: none; color: black;">Invoices</a></h5>                 
                        </div>
                        <div class="col d-flex flex-row align-items-center set-container" style="background-color: #e5e8ef; margin-right: 5px;">
                            <div class="set-img" style="background-image: url('./images/settings.png'); ">
        
                            </div>  
                            <h5>E-Payment</h5>                    
                        </div>
                        
                        
        
                       </div>
                       <div class="row d-flex flex-row justify-content-around" style="margin-top: 10px;">
                        <div class="col d-flex flex-row align-items-center set-container" style="background-color: #e5e8ef; margin-right: 5px;">
                            <div class="set-img" style="background-image: url('./images/settings.png');  ">
        
                            </div>  
                            <h5><a href="./GpaCalculator.php" style="text-decoration: none; color: black;">GPA Calculator</a></h5>                 
                        </div>
                        <div class="col d-flex flex-row align-items-center set-container" style="background-color: #e5e8ef; margin-right: 5px;">
                            <div class="set-img" style="background-image: url('./images/settings.png'); ">
        
                            </div>  
                            <h5>Transcript</h5>                    
                        </div>
                        
                        
        
                       </div>
                       <div class="row d-flex flex-row justify-content-around" style="margin-top: 10px;">
                        <div class="col d-flex flex-row align-items-center set-container" style="background-color: #e5e8ef; margin-right: 5px;">
                            <div class="set-img" style="background-image: url('./images/settings.png');  ">
        
                            </div>  
                            <h5><a href="./GpaCalculator.php" style="text-decoration: none; color: black;">Minor Study</a></h5>                 
                        </div>
                        <div class="col d-flex flex-row align-items-center set-container" style="background-color: #e5e8ef; margin-right: 5px;">
                            <div class="set-img" style="background-image: url('./images/settings.png'); ">
        
                            </div>  
                            <h5>Moodle</h5>                    
                        </div>
                        
                        
        
                       </div>
                       
                




            </div>
        </div>
        

    </div>
    



<script src="./code/jquery-3.7.1.min.js"></script>
<script src="./code/popper.min.js"></script>
<script src="./code/bootstrap.js"></script>
</body>
</html>