<?php
$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'adm';
$conn= mysqli_connect($server, $username, $password, $dbname);
session_start();
if (!isset($_SESSION['user'])) {
    echo "<script>window.open('login.php','_parent');</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="fonts/fontawesome/css/all.css">
     <link rel="shortcut icon" href="images/shortlogo.png">
</head>
<body>
    <div class="container">
        <div class="nav">
            <div class="hamburger"> 
                <div class="one"></div>
                <div class="two"></div>
                <div class="three"></div>
            </div>
            <div class="topicon">
                <div class="admin">
                    Admin Panel
                </div>
                <ul>
                    <li><span><i class="fas fa-search"></i></span></li>
                    <li><span><i class="fas fa-bell"></i></span></li>
                    <li><span><i class="fas fa-user"></i></span>
                        <div class="profile"><!--<i class="fa fa-sort-asc" ></i> --->
                        <a href="#" onclick="dash()"><i class="fa fa-microchip" style="padding-right: 5px"></i>My Dashboard</a>
                        <a href="#" onclick="Profile()"><i class="fas fa-user" style="padding-right: 5px"></i>My Profile</a>
                        <a href="logout.php"><i class="fas fa-sign-out-alt" style="padding-right: 5px"></i>Logout</a>
                        </div>
                    </li>
                    
                </ul>   
            </div>
        </div>
        <div class="leftsidebar">
            <ul> 
                <li><a href="#" onclick="dash()" class="active"><span class="icon"><i class="fa fa-th"></i></span><span class="title">Dashboard</span></a></li>
                <li><a href="#" onclick="Approve()"><span class="icon"><i class="fa fa-edit"></i></span><span class="title">Approve / Reject Events</span></a></li>
                <li><a href="#" onclick="AddClubs()"><span class="icon"><i class="fa fa-calendar"></i></span><span class="title">Add Clubs</span></a></li>
                <li><a href="#" onclick="mfunction()"><span class="icon"><i class="fa fa-edit"></i></span><span class="title">Rejected Events</span></a></li>
                <li><a href="#" onclick="Request()"><span class="icon"><i class="fa fa-calendar"></i></span><span class="title">Approved Events</span></a></li>
                <li><a href="#" onclick="Documents()"><span class="icon"><i class="far fa-address-book"></i></span><span class="title">Documents</span></a></li>
                <li><a href="#" onclick="Payments()"><span class="icon"><i class="fa fa-credit-card"></i></span><span class="title">Payments</span></a></li>
                <li><a href="#" onclick="Profile()"><span class="icon"><i class="fas fa-user"></i></span><span class="title">My Profile</span></a></li>
                <li><a href="logout.php"><span class="icon"><i class="fas fa-sign-out-alt"></i></span><span class="title">Logout</span></a></li>
            </ul>
        </div>
        <div class="alltext" id="etext">
            <div class="tdesh"><span>Total Income<i class="fa fa-cubes" style="font-size:48px;color:#002D81;padding-left: 8px "></i><br>100</span>
            </div>
            <div class="tdesh tdesh1"><span>Buy Tickets<i class="fa fa-server" style="font-size:48px;color:#002D81;padding-left:8px; "></i><br>50</span>
                
            </div>
            <div class="tdesh"><span>Total Students<i class="fas fa-users" style="font-size:48px;color:#002D81;padding-left:8px;"></i><br>80%</span>
                
            </div>
            <div class="tdesh"><span>Total Tickets<i class="fas fa-comment" style="font-size:48px;color:#002D81;padding-left:8px;"></i><br>90</span>
                
            </div>
            <div class="tdesh">
                <span>Total Tickets<i class="fa fa-tags" style="font-size:48px;color:#002D81;padding-left:8px;"><!--#BBC3D1 --></i><br>90</span>
            </div>
            <div class="cname">
                <h2 style="text-align: center; background-color: #BBC3D1;">All Club Name</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Club Names</th>
                            <th>Email Id</th>
                            <th>Total Members</th>
                            <th>Total Events</th>
                            <th>Contacts</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-column="Club Names">Abacus</td>
                            <td data-column="Email Id">xyz.@gmail.com</td>
                            <td data-column="Total Members">10</td>
                            <td data-column="Total Events">50</td>
                            <td data-column="Contacts">123456789</td>
                        </tr>
                        <tr>
                            <td data-column="Club Names">PI Club</td>
                            <td data-column="Email Id">xyz.@gmail.com</td>
                            <td data-column="Total Members">18</td>
                            <td data-column="Total Events">50</td>
                            <td data-column="Contacts">1234567980</td>
                        </tr>
                        <tr>
                            <td data-column="Club Names">Literario</td>
                            <td data-column="Email Id">xyz.@gmail.com</td>
                            <td data-column="Total Members">14</td>
                            <td data-column="Total Events">50</td>
                            <td data-column="Contacts">1234567890</td>
                        </tr>
                        <tr>
                            <td data-column="Club Names">E-Cell</td>
                            <td data-column="Email Id">xyz.@gmail.com</td>
                            <td data-column="Total Members">11</td>
                            <td data-column="Total Events">50</td>
                            <td data-column="Contacts">1234567890</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="content1">
                <h2>Upcoming Events</h2>
                <div class="cposter">
                    <img src="images/3.jpg" height="300px">
                    <h3>TechnoWeb</h3>
                    <p class="title"><i class="fa fa-calendar"></i> 15 Feb 2020 10:00 AM</p>
                    <p>Club Name</p>
                    <div>
                        <a href="#"><i class="fa fa-instagram"></i></a>  
                        <a href="#"><i class="fa fa-linkedin"></i></a>  
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </div>
                        <button class="button">Buy Now</button>
                </div>
                <div class="cposter">
                    <img src="images/3.jpg" height="300px">
                    <h3>TechnoWeb</h3>
                    <p class="title"><i class="fa fa-calendar"></i> 15 Feb 2020 10:00 AM</p>
                    <p>Club Name</p>
                    <div>
                        <a href="#"><i class="fa fa-instagram"></i></a>  
                        <a href="#"><i class="fa fa-linkedin"></i></a>  
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </div>
                        <button class="button">Buy Now</button>
                </div>
                <div class="cposter">
                    <img src="images/3.jpg" height="300px">
                    <h3>TechnoWeb</h3>
                    <p class="title"><i class="fa fa-calendar"></i> 15 Feb 2020 10:00 AM</p>
                    <p>Club Name</p>
                    <div>
                        <a href="#"><i class="fa fa-instagram"></i></a>  
                        <a href="#"><i class="fa fa-linkedin"></i></a>  
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </div>
                        <button class="button">Buy Now</button>
                </div>
            </div>
        </div>
        <!--- ======================================= Approve / Reject Events ================================ --->
        <div class="alltext" id="Approve">
            <div class="capprove">
                <h2 style="text-align: center; background-color: #efefef; padding: 10px;">Approve / Reject Events</h2>
                <div class="pos1">
                    <img src="images/3.jpg" width="215px">
                    <h3>TechnoWeb</h3>
                    <p class="title"><i class="fa fa-calendar"></i> 15 Feb 2020 10:00 AM</p>
                    <p>Club Name</p>
                    <p>last date- 21/05/2020</p>
                    <div>
                        <a href="#"><i class="fa fa-instagram"></i></a>  
                        <a href="#"><i class="fa fa-linkedin"></i></a>  
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </div>
                    <div style="margin-bottom: 10px;padding: 10px;">
                        <a href="#" style="float: left; color: green; text-decoration: none; ">Approve</a>
                        <a href="#" style="float: right; color: red; text-decoration: none; ">Reject</a>
                    </div>
                </div>
                <div class="pos1">
                    <img src="images/3.jpg" width="215px">
                    <h3>TechnoWeb</h3>
                    <p class="title"><i class="fa fa-calendar"></i> 15 Feb 2020 10:00 AM</p>
                    <p>Club Name</p>
                    <p>last date- 21/05/2020</p>
                    <div>
                        <a href="#"><i class="fa fa-instagram"></i></a>  
                        <a href="#"><i class="fa fa-linkedin"></i></a>  
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </div>
                    <div style="margin-bottom: 10px;padding: 10px;">
                        <a href="#" style="float: left; color: green; text-decoration: none; ">Approve</a>
                        <a href="#" style="float: right; color: red; text-decoration: none; ">Reject</a>
                    </div>
                </div>
                <div class="pos1">
                    <img src="images/3.jpg" width="215px">
                    <h3>TechnoWeb</h3>
                    <p class="title"><i class="fa fa-calendar"></i> 15 Feb 2020 10:00 AM</p>
                    <p>Club Name</p>
                    <p>last date- 21/05/2020</p>
                    <div>
                        <a href="#"><i class="fa fa-instagram"></i></a>  
                        <a href="#"><i class="fa fa-linkedin"></i></a>  
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </div>
                    <div style="margin-bottom: 10px;padding: 10px;">
                        <a href="#" style="float: left; color: green; text-decoration: none; ">Approve</a>
                        <a href="#" style="float: right; color: red; text-decoration: none; ">Reject</a>
                    </div>
                </div>
                <div class="pos1">
                    <img src="images/3.jpg" width="215px">
                    <h3>TechnoWeb</h3>
                    <p class="title"><i class="fa fa-calendar"></i> 15 Feb 2020 10:00 AM</p>
                    <p>Club Name</p>
                    <p>last date- 21/05/2020</p>
                    <div>
                        <a href="#"><i class="fa fa-instagram"></i></a>  
                        <a href="#"><i class="fa fa-linkedin"></i></a>  
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </div>
                    <div style="margin-bottom: 10px;padding: 10px;">
                        <a href="#" style="float: left; color: green; text-decoration: none; ">Approve</a>
                        <a href="#" style="float: right; color: red; text-decoration: none; ">Reject</a>
                    </div>
                </div>
                <div class="pos1">
                    <img src="images/3.jpg" width="215px">
                    <h3>TechnoWeb</h3>
                    <p class="title"><i class="fa fa-calendar"></i> 15 Feb 2020 10:00 AM</p>
                    <p>Club Name</p>
                    <p>last date- 21/05/2020</p>
                    <div>
                        <a href="#"><i class="fa fa-instagram"></i></a>  
                        <a href="#"><i class="fa fa-linkedin"></i></a>  
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </div>
                    <div style="margin-bottom: 10px;padding: 10px;">
                        <a href="#" style="float: left; color: green; text-decoration: none; ">Approve</a>
                        <a href="#" style="float: right; color: red; text-decoration: none; ">Reject</a>
                    </div>
                </div>
                <div class="pos1">
                    <img src="images/3.jpg" width="215px">
                    <h3>TechnoWeb</h3>
                    <p class="title"><i class="fa fa-calendar"></i> 15 Feb 2020 10:00 AM</p>
                    <p>Club Name</p>
                    <p>last date- 21/05/2020</p>
                    <div>
                        <a href="#"><i class="fa fa-instagram"></i></a>  
                        <a href="#"><i class="fa fa-linkedin"></i></a>  
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </div>
                    <div style="margin-bottom: 10px;padding: 10px;">
                        <a href="#" style="float: left; color: green; text-decoration: none; ">Approve</a>
                        <a href="#" style="float: right; color: red; text-decoration: none; ">Reject</a>
                    </div>
                </div>
            </div>
        </div>
        <!--- ==================================== ADDCLUB ======================================== ---> 
        <div class="alltext" id="AddClubs">
            <div class="content" style="padding:10px;">
                <form action="main.php" method="POST" enctype="multipart/form-data" >
                    <fieldset style="padding:20px;">
                    <legend style="text-align: center;"><h2>ADD NEW CLUB</h2></legend>
                    Club Name : <input type="text" name="name" required><br>
                    Password : <input type="text" name="name" required><br>
                    Club Email Address : <input type="email" id="email" pattern=".@globex.com" size="30"><br>
                    Club Mobile Number : <input type="Mobile Number" name="phone" required><br>
                    <div name="submit" class="btn1"><a href="#" style="color: #FFF;">Submit</a></div>
            </fieldset></form>
            </div>
        </div>
        <!--- =======================================Rejected Events================================ --->
        <div class="alltext" id="btn">
            <div class="capprove">
                <h2 style="text-align: center; background-color: #efefef; padding: 10px;">Rejected Events</h2>
                <div class="pos1">
                    <img src="images/3.jpg" width="215px">
                    <h3>TechnoWeb</h3>
                    <p class="title"><i class="fa fa-calendar"></i> 15 Feb 2020 10:00 AM</p>
                    <p>Club Name</p>
                    <p>last date- 21/05/2020</p>
                    <div>
                        <a href="#"><i class="fa fa-instagram"></i></a>  
                        <a href="#"><i class="fa fa-linkedin"></i></a>  
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- =======================================  Approved Events  ============================== --->
        <div class="alltext" id="Request">
            <div class="capprove">
                <h2 style="text-align: center; background-color: #efefef; padding: 10px;">Approved Events</h2>
                <div class="pos1">
                    <img src="images/3.jpg" width="215px">
                    <h3>TechnoWeb</h3>
                    <p class="title"><i class="fa fa-calendar"></i> 15 Feb 2020 10:00 AM</p>
                    <p>Club Name</p>
                    <p>last date- 21/05/2020</p>
                    <div>
                        <a href="#"><i class="fa fa-instagram"></i></a>  
                        <a href="#"><i class="fa fa-linkedin"></i></a>  
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!--- ============================================ List of all clubs ========================= --->
        <div class="alltext" id="Documents">
            <div class="content">
                Lorem ipsum dolor.
            </div><div class="content">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut sapiente adipisci nemo atque eligendi reprehenderit minima blanditiis eum quae aspernatur!
            </div><div class="content">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut sapiente adipisci nemo atque eligendi reprehenderit minima blanditiis eum quae aspernatur!
            </div><div class="content">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut sapiente adipisci nemo atque eligendi reprehenderit minima blanditiis eum quae aspernatur!
            </div>
            <div class="content">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut sapiente adipisci nemo atque eligendi reprehenderit minima blanditiis eum quae aspernatur!
            </div><div class="content">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut sapiente adipisci nemo atque eligendi reprehenderit minima blanditiis eum quae aspernatur!
            </div><div class="content">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut sapiente adipisci nemo atque eligendi reprehenderit minima blanditiis eum quae aspernatur!
            </div>
        </div>
        <!--- ============================================ Payments ========================= --->
        <div class="alltext" id="Payments">
            <div class="content">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut sapiente adipisci nemo atque eligendi reprehenderit minima blanditiis  
            </div>
            <div class="content">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut sapiente adipisci nemo atque eligendi reprehenderit minima blanditiis eum quae aspernatur!
            </div>
            <div class="content">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut sapiente adipisci nemo atque eligendi reprehenderit minima blanditiis eum quae aspernatur!
            </div>
            <div class="content">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut sapiente adipisci nemo atque eligendi reprehenderit minima blanditiis eum quae aspernatur!
            </div>
        </div>
        <!--- ============================================ Profile ========================== --->
        <div class="alltext" id="Profile" style="padding-left: 5px; padding-right: 0;margin-right: 0;  margin-top: 40px;">
            <h2 style="background-color: #efefef; padding: 10px; font-size: 32px;">Profile Settings</h2>
            <div class="cprofile" style="margin-right: 0;margin-top: 0;"> 
                <div class="profile1">
                    <form action="index.php" method="POST" class="Changepsw">
                        <h3 style="padding-bottom: 20px; font-size: 24px;">Profile Information</h3>
                        <label class="Chpsw">Username</label>
                        <p class="Chpswbox"><i class="fas fa-user" style="font-size:30px; padding:10px;"></i><input type="name" name="name" placeholder="YASH SINGHAL"  class="input1" fixed></p>                       
                        <label for="name" class="Chpsw">Password</label>
                        <p class="Chpswbox"><i class="fa fa-edit" style="font-size:30px; padding:10px;"></i> <input type="password" placeholder="Password" name="psw" class="input" required><br></p>
                        <label for="name" class="Chpsw">Website link</label>
                        <p class="Chpswbox"><i class="fas fa-user" style="font-size:30px; padding:10px;"></i> <input type="url" name="url" placeholder="https://example.com" class="input" pattern="https://.*" ></p>
                        <label for="name" class="Chpsw">Clubpanel link</label>
                        <p class="Chpswbox"><i class="fas fa-user" style="font-size:30px; padding:10px;"></i> <input type="url" name="url" placeholder="Clubpanel link" class="input"></p>
                    </form>
                </div>
                <div class="profile2">
                    <form action="index.php" method="POST" class="Changepsw">
                        <h3 style="padding-bottom: 20px; font-size: 24px;">Password Change</h3>
                        <label for="name" class="Chpsw">Old Password<br></label>
                        <p class="Chpswbox"><i class="fa fa-edit" style="font-size:30px; padding:10px;"></i> <input type="password" placeholder="Enter Current Password" name="psw" required><br></p>
                        <label for="name" class="Chpsw">New Password<br></label>
                        <p class="Chpswbox"><i class="fa fa-edit" style="font-size:30px; padding:10px;"></i> <input type="password" placeholder="Enter New Password" name="psw" required><br></p>
                        <label for="name" class="Chpsw">Repeat Password<br></label>
                        <p class="Chpswbox"><i class="fa fa-edit" style="font-size:30px; padding:10px;"></i> <input type="password" placeholder="Enter Repeat Password" name="psw" required><br></p>
                        <div name="submit" class="btn1"><a href="#" style="color: #FFF;">Submit</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script>
        $(document).ready(function(){
            $(".hamburger").click(function(){
               $(".container").toggleClass("collapse");
            });
        });
    </script>
    <script type="text/javascript">
        function dash() {
            document.getElementById('etext').style.display = "block";
            document.getElementById('Approve').style.display = "none";
            document.getElementById('AddClubs').style.display = "none";
            document.getElementById('btn').style.display = "none";
            document.getElementById('Request').style.display = "none";
            document.getElementById('Documents').style.display = "none";
            document.getElementById('Payments').style.display = "none";
            document.getElementById('Profile').style.display = "none";
        }
        function Approve() {
            document.getElementById('etext').style.display = "none";
            document.getElementById('Approve').style.display = "block";
            document.getElementById('AddClubs').style.display = "none";
            document.getElementById('btn').style.display = "none";
            document.getElementById('Request').style.display = "none";
            document.getElementById('Documents').style.display = "none";
            document.getElementById('Payments').style.display = "none";
            document.getElementById('Profile').style.display = "none";
        }
        function AddClubs() {
            document.getElementById('etext').style.display = "none";
            document.getElementById('Approve').style.display = "none";
            document.getElementById('AddClubs').style.display = "block";
            document.getElementById('btn').style.display = "none";
            document.getElementById('Request').style.display = "none";
            document.getElementById('Documents').style.display = "none";
            document.getElementById('Payments').style.display = "none";
            document.getElementById('Profile').style.display = "none";
        }
        function mfunction() {
            document.getElementById('etext').style.display = "none";
            document.getElementById('Approve').style.display = "none";
            document.getElementById('AddClubs').style.display = "none";
            document.getElementById('btn').style.display = "block";
            document.getElementById('Request').style.display = "none";
            document.getElementById('Documents').style.display = "none";
            document.getElementById('Payments').style.display = "none";
            document.getElementById('Profile').style.display = "none";
        }
        function Request() {
            document.getElementById('etext').style.display = "none";
            document.getElementById('Approve').style.display = "none";
            document.getElementById('AddClubs').style.display = "none";
            document.getElementById('btn').style.display = "none";
            document.getElementById('Request').style.display = "block";
            document.getElementById('Documents').style.display = "none";
            document.getElementById('Payments').style.display = "none";
            document.getElementById('Profile').style.display = "none";
        }
        function Documents() {
            document.getElementById('etext').style.display = "none";
            document.getElementById('Approve').style.display = "none";
            document.getElementById('AddClubs').style.display = "none";
            document.getElementById('btn').style.display = "none";
            document.getElementById('Request').style.display = "none";
            document.getElementById('Documents').style.display = "block";
            document.getElementById('Payments').style.display = "none";
            document.getElementById('Profile').style.display = "none";
        }
        function Payments() {
            document.getElementById('etext').style.display = "none";
            document.getElementById('Approve').style.display = "none";
            document.getElementById('AddClubs').style.display = "none";
            document.getElementById('btn').style.display = "none";
            document.getElementById('Request').style.display = "none";
            document.getElementById('Documents').style.display = "none";
            document.getElementById('Payments').style.display = "block";
            document.getElementById('Profile').style.display = "none";
        }
        function Profile() {
            document.getElementById('etext').style.display = "none";
            document.getElementById('Approve').style.display = "none";
            document.getElementById('AddClubs').style.display = "none";
            document.getElementById('btn').style.display = "none";
            document.getElementById('Request').style.display = "none";
            document.getElementById('Documents').style.display = "none";
            document.getElementById('Payments').style.display = "none";
            document.getElementById('Profile').style.display = "block";
        }
    </script>
</body>
</html>