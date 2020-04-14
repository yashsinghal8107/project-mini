<!DOCTYPE html>
<html>
<head>
    <title>Club Panel</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="fonts/fontawesome/css/all.css">
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
                        <a href="#"><i class="fa fa-microchip" style="padding-right: 5px"></i>My Dashboard</a>
                        <a href="#"><i class="fas fa-user" style="padding-right: 5px"></i>My Profile</a>
                        <a href="#"><i class="fas fa-sign-out-alt" style="padding-right: 5px"></i>Logout</a>
                        </div>
                    </li>
                    
                </ul>   
            </div>
        </div>
        <div class="leftsidebar">
            <ul> 
                <li><a href="#" onclick="dash()" class="active"><span class="icon"><i class="fa fa-th"></i></span><span class="title">Dashboard</span></a></li>
                <li><a href="#" onclick="AddEvents()"><span class="icon"><i class="fa fa-calendar"></i></span><span class="title">Add Events</span></a></li>
                <li><a href="#" onclick="Approve()"><span class="icon"><i class="fa fa-edit"></i></span><span class="title">Approve / Reject Events</span></a></li>
                <li><a href="#"><span class="icon"><i class="far fa-address-book"></i></span><span class="title">Documents</span></a></li>
                <li><a href="#"><span class="icon"><i class="fas fa-users"></i></span><span class="title">Team Details</span></a></li>
                <li><a href="#"><span class="icon"><i class="fa fa-credit-card"></i></span><span class="title">Payments</span></a></li>
                <li><a href="#"><span class="icon"><i class="fas fa-user"></i></span><span class="title">My Profile</span></a></li>
                <li><a href="#"><span class="icon"><i class="fas fa-sign-out-alt"></i></span><span class="title">Logout</span></a></li>
            </ul>
        </div>
        <div class="alltext" id="etext">
            <div class="content">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut sapiente adipisci nemo atque eligendi reprehenderit minima blanditiis eum quae aspernatur!
            </div>
            <div class="content">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut sapiente adipisci nemo atque eligendi reprehenderit minima blanditiis eum quae aspernatur!
            </div><div class="content">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut sapiente adipisci nemo atque eligendi reprehenderit minima blanditiis eum quae aspernatur!
            </div>
        </div>
        <div class="alltext">
            <div class="content1" id="btn">
                <form action="main.php" method="POST" enctype="multipart/form-data">
                    <fieldset>
                    <legend style="padding-bottom: 20px;"><h2>EVENT UPLOAD</h2></legend>
                    <p><span>Event Name / Fest Name : <input type="text" name="name" required></span>
                        <span>Club Name : <input type="text" name="name" required></span>
                    </p>
                        
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
                        <span>Number of Attendees Expected : <input type="text" name="name"></span></p>
                        <p><span>Registration Fees : <input type="text" name="Fees" required></span>
                            <span>Deadlines for Registration : <input type="text" name="Deadlines"></span></p>
                        
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
                        <p><span>Description :-</span></p><p><span><textarea name="message" rows="5" cols="80"></textarea></span></p> 

                        
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
                        <p><span><input type="file" id="upload" name="image" accept="image/png, image/jpeg"></span></p>

                        <p><span style=" text-align: center;"><input type="submit" value="Submit" style="padding: 10px ;"></span>
                        <span  style="text-align: center;"><input type="reset" value="Clear"  style="padding: 10px;"></span></p>
                    
               </fieldset> </form>
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
            document.getElementById('btn').style.display = "none";
        }
        function AddEvents() {
            document.getElementById('etext').style.display = "none";
            document.getElementById('btn').style.display = "block";
        }
    </script>
</body>
</html>
