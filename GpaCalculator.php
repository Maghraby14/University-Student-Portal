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
            document.getElementById("calculatebutton").addEventListener("click", function (event) {
                var Grade = document.getElementsByClassName("grade");
                var point = document.getElementsByClassName("pt");
                var mark1 = parseFloat(document.getElementById("mark1").value);

         
                var mark2 = parseFloat(document.getElementById("mark2").value);

          
                var mark3 = parseFloat(document.getElementById("mark3").value);

         
                var mark4 = parseFloat(document.getElementById("mark4").value);

        
                var mark5 = parseFloat(document.getElementById("mark5").value);

                var mark6 = parseFloat(document.getElementById("mark6").value);


                


function calculateAndDisplayResults(mark1,point,Grade){
if(mark1 <= 100 && mark1 >=95){
 
 point.innerHTML="12";
 Grade.innerHTML="A+";
 event.preventDefault();
 return 12;
}
else if(mark1 <=94 && mark1 >= 90){
 point.innerHTML="11.5";
 Grade.innerHTML="A";
 event.preventDefault();
 return 11.5;
}
else if(mark1 <= 89 && mark1 >= 85){
 point.innerHTML="11";
 Grade.innerHTML="A-";
 event.preventDefault();
 return 11;
}else if(mark1 <= 84 && mark1 >= 80){
 point.innerHTML="10";
 Grade.innerHTML="B+";
 event.preventDefault();
 return 10;
}else if(mark1 <= 79 && mark1 >=75){
 point.innerHTML="9";
 Grade.innerHTML="B";
 event.preventDefault();
 return 9;
}else if(mark1 <=74 && mark1 >= 70){
 point.innerHTML="8";
 Grade.innerHTML="B-";
 event.preventDefault();
 return 8;
}else if(mark1 <=69 && mark1 >= 65){
 point.innerHTML="7";
 Grade.innerHTML="C+";
 event.preventDefault();
 return 7;
}else if(mark1 <=64 && mark1 >=60){
 point.innerHTML="6";
 Grade.innerHTML="C";
 event.preventDefault();
 return 6;
}else if(mark1 <=59 && mark1 >= 55){
 point.innerHTML="5";
 Grade.innerHTML="C-";
 event.preventDefault();
 return 5;
}else if(mark1 <=54 && mark1 >= 52){
 point.innerHTML="4";
 Grade.innerHTML="D+";
 event.preventDefault();
 return 4;
}else if(mark1 <=51 && mark1 >= 50){
 point.innerHTML="3";
 Grade.innerHTML="D";
 event.preventDefault();
 return 3;
}else if(mark1 < 50 ){
 point.innerHTML="0";
 Grade.innerHTML="F";
 event.preventDefault();
 return 0;
}
else if(isNaN(mark1)){
    point.innerHTML="0";
 Grade.innerHTML="F";
 event.preventDefault();
 return 0;   
}


}

let Expectedtot=0;
let Expectedload=18;
let ExpectedROund=0;
let ExpectedGPA=0;
let Pts=0;


var x =calculateAndDisplayResults(mark1,point[0],Grade[0]);
var y=calculateAndDisplayResults(mark2,point[1],Grade[1]);
var z=calculateAndDisplayResults(mark3,point[2],Grade[2]);
var a= calculateAndDisplayResults(mark4,point[3],Grade[3]);
var b=calculateAndDisplayResults(mark5,point[4],Grade[4]);
var c=calculateAndDisplayResults(mark6,point[5],Grade[5]);
var arr=[]
arr.push(x);
arr.push(y);
arr.push(z);
arr.push(a);
arr.push(b);
arr.push(c);
arr.forEach(element => {
    if (element >0)
    {
Expectedtot +=3;
    }
    Pts+=element;
});
ExpectedGPA = Pts/Expectedload;
ExpectedROund = Math.round(ExpectedGPA);
function setexpected(e1,e2,e3,e4,e5) {
     exp_total = document.getElementById("Expected_total").innerHTML=e1;
     exp_gpa = document.getElementById("Expected_Gpa").innerHTML=e2;
     exp_round = document.getElementById("Expected_Rounded").innerHTML=e3;
     exp_load = document.getElementById("Expected_Load").innerHTML=e4;
     exp_pts = document.getElementById("Expected_Pts").innerHTML=e5;
}
setexpected(Expectedtot,ExpectedGPA,ExpectedROund,Expectedload,Pts);
function setcomm(e1,e2,e3,e4,e5){
    var act_tot =parseFloat(document.getElementById("Actual_Tot").innerHTML);
    var act_gpa =parseFloat(document.getElementById("Actual_gpa").innerHTML);
    var act_rou =parseFloat(document.getElementById("Actual_rou").innerHTML);
    var act_load =parseFloat(document.getElementById("Actual_load").innerHTML);
    var act_pts =parseFloat(document.getElementById("Actual_pts").innerHTML);

console.log(act_tot,act_gpa,act_rou,act_load);

     exp_com1=document.getElementById("com_tot").innerHTML=e1+act_tot;
     exp_com4=document.getElementById("com_load").innerHTML=e4+act_load;
     exp_com5=document.getElementById("com_pts").innerHTML =e5+act_pts;

     exp_com2=document.getElementById("com_gpa").innerHTML=exp_com5/exp_com4;
     exp_com3=document.getElementById("com_rou").innerHTML=Math.round(exp_com2);
     
}
setcomm(Expectedtot,ExpectedGPA,ExpectedROund,Expectedload,Pts);
                
            });
        });
    </script>
    <link rel="stylesheet" href="./styles/results.css">
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
                    <a class="nav-link active" aria-current="page" href="./HomePage.php">Home</a>
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
                <form class="d-flex" role="search" id="form">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                  
                    
                    <a href="#" data-toggle="popover" title="Notifications" data-content="Your Reasults of AI Have been Realeased"><img src="./images/notification.png" alt="" srcset="" style=" margin-top: 7px; margin-left: 10px;"></a>
                  
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
    <div class=" m-0 h-100 w-100">
        <div class="row  w-100">
            
            <div class="col-2   shadow-colmn" style="background-color: transparent;" >

            </div>
            <div class="col-10  h-100 mid-col" style="margin-top:59px">
                <div class="row ">
                    <div class="col">
                        <h2>GPA Calculator</h2>
                        <div class="d-flex flex-row justify-content-between"><h5>Name: Moahmed Nasser El-Maghraby </h5> <h5>Registration Number:19102722</h5></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <form action="" class="d-flex flex-column align-items-center">
                            <table style="text-align: center; width: 100%;  background-color:#e5e8ef; border-radius: 10px;  margin-bottom:10px;">
                            
                                <tbody >
                                    <tr >
                                        <th colspan="4">NE 466 <br> Enviromental Science</th>
                                        <th rowspan="2" ><span class="grade">U</span></th>
                                        
                                    </tr>
                                    <tr>
                                        <td>Hours<br> 3.0</td>
                                        <td>Calculation Option <br><select name="" id="">
                                            <option value="Grading System">Grading System</option>
                                            <option value="Pass/Fail">Pass/Fail</option>
                                            <option value="Incomplete">I-Incomplete</option>
                                            <option value="Incomplete">W-Withdrawal</option>
                                        </select></td>
                                        <td>Mark<br> <input type="number" name="mark1" id="mark1"></td>
                                        <td>Points <br> <span class="pt">-</span></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table style="text-align: center; width: 100%;  background-color:#e5e8ef; border-radius: 10px;  margin-bottom:10px;">
                            
                                <tbody >
                                    <tr >
                                        <th colspan="4">CC 501 <br> Senoir Project I</th>
                                        <th rowspan="2"><span class="grade">U</span></th>
                                        
                                    </tr>
                                    <tr>
                                        <td>Hours<br> 3.0</td>
                                        <td>Calculation Option <br><select name="" id="">
                                            <option value="Grading System">Grading System</option>
                                            <option value="Pass/Fail">Pass/Fail</option>
                                            <option value="Incomplete">I-Incomplete</option>
                                            <option value="Incomplete">W-Withdrawal</option>
                                        </select></td>
                                        <td>Mark<br> <input type="number" name="mark2" id="mark2"></td>
                                        <td>Points <br> <span class="pt">-</span></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table style="text-align: center; width: 100%;  background-color:#e5e8ef; border-radius: 10px;  margin-bottom:10px;">
                            
                                <tbody >
                                    <tr >
                                        <th colspan="4">CC 511 <br> Intro to AI</th>
                                        <th rowspan="2"><span class="grade">U</span></th>
                                        
                                    </tr>
                                    <tr>
                                        <td>Hours<br> 3.0</td>
                                        <td>Calculation Option <br><select name="" id="">
                                            <option value="Grading System">Grading System</option>
                                            <option value="Pass/Fail">Pass/Fail</option>
                                            <option value="Incomplete">I-Incomplete</option>
                                            <option value="Incomplete">W-Withdrawal</option>
                                        </select></td>
                                        <td>Mark<br> <input type="number" name="mark3" id="mark3"></td>
                                        <td>Points <br> <span class="pt">-</span></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table style="text-align: center; width: 100%;  background-color:#e5e8ef; border-radius: 10px;  margin-bottom:10px;">
                            
                                <tbody >
                                    <tr >
                                        <th colspan="4">CC 516 <br> Pattern Recognition</th>
                                        <th rowspan="2"><span class="grade">U</span></th>
                                        
                                    </tr>
                                    <tr>
                                        <td>Hours<br> 3.0</td>
                                        <td>Calculation Option <br><select name="" id="">
                                            <option value="Grading System">Grading System</option>
                                            <option value="Pass/Fail">Pass/Fail</option>
                                            <option value="Incomplete">I-Incomplete</option>
                                            <option value="Incomplete">W-Withdrawal</option>
                                        </select></td>
                                        <td>Mark<br> <input type="number" name="mark4" id="mark4"></td>
                                        <td>Points <br> <span class="pt">-</span></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table style="text-align: center; width: 100%;  background-color:#e5e8ef; border-radius: 10px;  margin-bottom:10px;">
                            
                                <tbody >
                                    <tr >
                                        <th colspan="4">CC 531 <br> Advanced Networks</th>
                                        <th rowspan="2"><span class="grade">U</span></th>
                                        
                                    </tr>
                                    <tr>
                                        <td>Hours<br> 3.0</td>
                                        <td>Calculation Option <br><select name="" id="">
                                            <option value="Grading System">Grading System</option>
                                            <option value="Pass/Fail">Pass/Fail</option>
                                            <option value="Incomplete">I-Incomplete</option>
                                            <option value="Incomplete">W-Withdrawal</option>
                                        </select></td>
                                        <td>Mark<br> <input type="number" name="mark5" id="mark5"></td>
                                        <td>Points <br> <span class="pt">-</span></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table style="text-align: center; width: 100%;  background-color:#e5e8ef; border-radius: 10px;  margin-bottom:10px;">
                            
                                <tbody >
                                    <tr >
                                        <th colspan="4">CC 552 <br> Web development</th>
                                        <th rowspan="2"><span class="grade">U</span></th>
                                        
                                    </tr>
                                    <tr>
                                        <td>Hours<br> 3.0</td>
                                        <td>Calculation Option <br><select name="" id="">
                                            <option value="Grading System">Grading System</option>
                                            <option value="Pass/Fail">Pass/Fail</option>
                                            <option value="Incomplete">I-Incomplete</option>
                                            <option value="Incomplete">W-Withdrawal</option>
                                        </select></td>
                                        <td>Mark<br> <input type="number" name="mark6" id="mark6"></td>
                                        <td>Points <br> <span class="pt">-</span></td>
                                    </tr>
                                </tbody>
                            </table>
                            <button class="btn btn-warning" type="button"  width="300" height="300" id="calculatebutton" >Calculate</button>
                        </form>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <table style="text-align: center; width: 100%;  background-color:#1c2959; border-radius: 10px;  margin-top:10px; color: #e5e8ef; margin-bottom: 10px;">
                            <tbody>
                                <tr>
                                    <th></th>
                                    <th>Total Hrs</th>
                                    <th>GPA</th>
                                    <th>Ronded GPA</th>
                                    <th>Load</th>
                                    <th>Points</th>
                                </tr>
                                <tr>
                                    <td>Cumulative GPA</td>
                                    <td id="Actual_Tot">144.0</td>
                                    <td id="Actual_gpa">3.8324354353</td>
                                    <td id="Actual_rou">3.83</td>
                                    <td id="Actual_load">144.0</td>
                                    <td id="Actual_pts">551.8</td>
                                </tr>
                                <tr>
                                    <td>Expected GPA</td>
                                    <td id="Expected_total"></td>
                                    <td id="Expected_Gpa"></td>
                                    <td id="Expected_Rounded"></td>
                                    <td id="Expected_Load"></td>
                                    <td id="Expected_Pts"></td>
                                </tr>
                                <tr>
                                    <td>Expected Cumulative</td>
                                    <td id="com_tot"></td>
                                    <td id="com_gpa"></td>
                                    <td id="com_rou"></td>
                                    <td id="com_load"></td>
                                    <td id="com_pts"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        

    </div>
    



<script src="./code/jquery-3.7.1.min.js"></script>
<script src="./code/popper.min.js"></script>
<script src="./code/bootstrap.js"></script>
</body>
</html>