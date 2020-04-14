<?php
$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'adm';
$conn= mysqli_connect($server, $username, $password, $dbname);
session_start();
if (!isset($_SESSION['user1'])) {
    echo "<script>window.open('signin.php','_parent');</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Club Panel</title>
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
                    Club Panel
                </div>
                <ul>
                    <li><span><i class="fas fa-search"></i></span></li>
                    <li><span><i class="fas fa-bell"></i></span></li>
                    <li><span><i class="fas fa-user"></i></span>
                        <div class="profile"><!--<i class="fa fa-sort-asc" ></i> --->
                        <a href="#" onclick="dash()"><i class="fa fa-microchip" style="padding-right: 5px"></i>My Dashboard</a>
                        <a href="#" onclick="Profile()"><i class="fas fa-user" style="padding-right: 5px"></i>My Profile</a>
                        <a href="signout.php"><i class="fas fa-sign-out-alt" style="padding-right: 5px"></i>Logout</a>
                        </div>
                    </li>
                    
                </ul>   
            </div>
        </div>
        <div class="leftsidebar">
            <ul> 
                <li><a href="#" onclick="dash()" class="active"><span class="icon"><i class="fa fa-th"></i></span><span class="title">Dashboard</span></a></li>
                <li><a href="#" onclick="AddClubs()"><span class="icon"><i class="fa fa-calendar"></i></span><span class="title">Add Events</span></a></li>
                <li><a href="#" onclick="Approve()"><span class="icon"><i class="fa fa-edit"></i></span><span class="title">Events Records</span></a></li>
                <li><a href="#" onclick="mfunction()"><span class="icon"><i class="fa fa-edit"></i></span><span class="title">Rejected Events</span></a></li>
                <li><a href="#" onclick="Request()"><span class="icon"><i class="fa fa-calendar"></i></span><span class="title">Approved Events</span></a></li>
                <li><a href="#" onclick="Documents()"><span class="icon"><i class="far fa-address-book"></i></span><span class="title">Documents</span></a></li>
                <li><a href="#" onclick="Payments()"><span class="icon"><i class="fa fa-credit-card"></i></span><span class="title">Payments</span></a></li>
                <li><a href="#" onclick="Profile()"><span class="icon"><i class="fas fa-user"></i></span><span class="title">My Profile</span></a></li>
                <li><a href="signout.php"><span class="icon"><i class="fas fa-sign-out-alt"></i></span><span class="title">Logout</span></a></li>
            </ul>
        </div>
        <div class="alltext" id="etext">
            <div class="tdesh"><span>Total Events<i class="fa fa-cubes" style="font-size:48px;color:#002D81;padding-left: 8px "></i><br>10/20</span>
            </div>
            <div class="tdesh tdesh1"><span>Buy Tickets<i class="fa fa-server" style="font-size:48px;color:#002D81;padding-left:8px; "></i><br>50</span>
                
            </div>
            <div class="tdesh"><span>Total Students<i class="fas fa-users" style="font-size:48px;color:#002D81;padding-left:8px;"></i><br>80%</span>
                
            </div>
            <div class="tdesh"><span>other<i class="fas fa-comment" style="font-size:48px;color:#002D81;padding-left:8px;"></i><br>90</span>
                
            </div>
            <div class="tdesh">
                <span>Total Tickets<i class="fa fa-tags" style="font-size:48px;color:#002D81;padding-left:8px;"><!--#BBC3D1 --></i><br>90</span>
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
        <!--- ==================================== ADDEVENTS ======================================== ---> 
        <div class="alltext" id="AddClubs">
            <div class="content" id="btn1" style="padding:10px;">
                <fieldset style="width: auto;">
                    <legend style="padding-bottom: 20px; text-align: center;"><h2>EVENT UPLOAD</h2></legend>
                    <form action="main.php" method="POST" enctype="multipart/form-data">
                        <p><span>Event Name / Fest Name : <input type="text" name="name" required></span>
                            <span>Club Name : <input type="text" name="name" required></span></p>
                        
                        <div class="evselect">
                            <h3 style="padding-left:20px;">Event Type :-</h3>
                            <div class="evname">
                                <input type="checkbox" value="Yes" name="call">Technical<br>
                                <input type="checkbox" value="Yes" name="call">Online Events<br>
                                <input type="checkbox" value="Yes" name="call">Sports<br>
                                <input type="checkbox" value="Yes" name="call">TEDx<br>
                                <input type="checkbox" value="Yes" name="call">Internship<br>
                            </div>
                            <div class="evname">
                                <input type="checkbox" value="Yes" name="call">Conferences<br>
                                <input type="checkbox" value="Yes" name="call">Cultural<br>
                                <input type="checkbox" value="Yes" name="call">Entrepreneurship<br>
                                <input type="checkbox" value="Yes" name="call">Youth Summit<br>
                                <input type="checkbox" value="Yes" name="call">Faculty Development Program<br>
                            </div>
                            <div class="evname">
                                <input type="checkbox" value="Yes" name="call">Workshop<br>
                                <input type="checkbox" value="Yes" name="call">Hacking<br>
                                <input type="checkbox" value="Yes" name="call">Conclave<br>
                                <input type="checkbox" value="Yes" name="call">Pharma<br>
                                <input type="checkbox" value="Yes" name="call">Others<br>
                            </div>
                        </div>
                        <p><span>Event Guests : <input type="text" name="name"></span>
                        <span>Number of Attendees Expected : <input type="text" name="name" required></span></p>
                        <p><span>Registration Fees : <input type="text" name="Fees" required></span>
                            <span>Deadlines for Registration : <input type="text" name="Deadlines" required></span></p>
                        
                        <!-- Fest Department -->
                        <div class="evselect">
                            <h3 style="padding-left:20px;">Departments:-</h3>
                            <div class="evname">
                                <input type="radio" class="radiosize" value="Yes" name="Department">CSE<br>
                                <input type="radio" class="radiosize" value="Yes" name="Department">IT<br>
                                <input type="radio" class="radiosize" value="Yes" name="Department">MCA<br>
                                <input type="radio" class="radiosize" value="Yes" name="Department">Mechanical<br>
                                <input type="radio" class="radiosize" value="Yes" name="Department">MBA<br>
                            </div>
                            <div class="evname">
                                <input type="radio" class="radiosize" value="Yes" name="Department">EEE<br>
                                <input type="radio" class="radiosize" value="Yes" name="Department">Pharmacy<br>
                                <input type="radio" class="radiosize" value="Yes" name="Department">Aerospace<br>
                                <input type="radio" class="radiosize" value="Yes" name="Department">Law<br>
                                <input type="radio" class="radiosize" value="Yes" name="Department">BBA<br>
                            </div>
                            <div class="evname">
                                <input type="radio" class="radiosize" value="Yes" name="Department">Polytechnic<br>
                                <input type="radio" class="radiosize" value="Yes" name="Department">Civil<br>
                                <input type="radio" class="radiosize" value="Yes" name="Department">Automobile<br>
                                <input type="radio" class="radiosize" value="Yes" name="Department">Agricultural<br>
                                <input type="radio" class="radiosize" value="Yes" name="Department">Aeronautical<br>
                            </div>
                        </div>
                        <p><span>Description :-</span></p><p><span><textarea name="message" required></textarea></span></p> 

                        
                        <p><span>Event Website :<input type="url" name="url" placeholder="https://example.com" pattern="https://.*" size="30" ></span>
                            <span>Event Registration URL :<input type="url" name="url" placeholder="https://example.com" pattern="https://.*" size="30" ></span></p>
                        
                        <p><span>Facebook Link :<input type="url" name="url" placeholder="https://example.com" pattern="https://.*" size="30" ></span>
                        <span>Instagram Link :<input type="url" name="url" placeholder="https://example.com" pattern="https://.*" size="30" ></span></p>
                        <p><span>Other Social Media Link :<input type="url" name="url" placeholder="https://example.com" pattern="https://.*" size="30" ></span>
                        <span>Android App Link :<input type="url" name="url" placeholder="https://example.com" pattern="https://.*" size="30" ><br><br></span></p>
                        
                        <h3 style="padding-left:20px; margin: 10px;">Interested to receive Marketing Calls on following Categories :-</h3>
                        <p><span><input type="checkbox" value="Sponsors" class="radiosize" name="Sponsor">Sponsorships :</span>
                        <span><input type="checkbox" value="Sponsors" class="radiosize" name="Sponsor">Organise Workshops :</span>
                        <span><input type="checkbox" value="Sponsors" class="radiosize" name="Sponsor">Merchandise :</span>
                        <span><input type="checkbox" value="Sponsors" class="radiosize" name="Sponsor">Others :</span></p>
                        <p><span><label for="upload">Event logo/Banner upload (allowed formats - jpg, png ) *File size should be less than 1.5MB</label></span></p>
                        <p><span><input type="file" id="upload" name="image" accept="image/png, image/jpeg" required></span></p>

                        <p><span style=" text-align: center;"><input type="submit" value="Submit" style="padding: 10px ;"></span>
                        <span  style="text-align: center;"><input type="reset" value="Clear"  style="padding: 10px;"></span></p>
                    </form>
                </fieldset>
            </div>
        </div>
        <!--- ======================================= Events Records ================================ --->
        <div class="alltext" id="Approve">
            <div class="capprove">
                <h2 style="text-align: center; background-color: #efefef; padding: 10px;">Events Records</h2>
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
                        <a href="#" style="float: left; color: white; text-decoration: none; ">Approve</a>
                        <a href="#" style="float: right; color: white; text-decoration: none; ">Reject</a>
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
                        <a href="#" style="float: left; color: white; text-decoration: none; ">Approve</a>
                        <a href="#" style="float: right; color: white; text-decoration: none; ">Reject</a>
                    </div>
                </div>
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