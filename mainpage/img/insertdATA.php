<?php

//connect database
$dsn = "mysql:host=localhost; dbname=adm;";
$db_user = "root";
$db_password = "";

try{
	// Create Connection
	$conn = new PDO($dsn, $db_user, $db_password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
	echo "<h1 style='font-size:	70px;''>Server Busy</h1>";
	exit();
}

// insert data

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$course = $_POST['course'];
	$year = $_POST['year'];
	$rollno = $_POST['rollno'];
	$mobno = $_POST['mobno'];
	$email = $_POST['email'];

	
	//check duplicate Email id
	$dup_email = "SELECT * FROM stdreg WHERE email='$email'";
	$result = $conn->query($dup_email);
	$count = $result->rowCount();
	if ($count == 1) {
		echo "<script type='text/javascript'>alert('This Email is already registered.');</script>";
		$conn = null;
		echo "<script type='text/javascript'>window.open('insertdata.php','_parent');</script>";
	}

	$sql = "INSERT INTO stdreg (name,course,year,rollno,mobno,email) VALUES ('$name','$course','$year','$rollno','$mobno','$email')";
		if($conn->exec($sql)){
		echo "<script type='text/javascript'>alert('You are registered Successfully.');</script>";
		$conn = null;
		echo "<script type='text/javascript'>window.open('insertdata.php','_parent');</script>";
		}
		else{
		echo "<script type='text/javascript'>alert('Sorry! Error in Registering You, Please try again!');</script>";
		$conn = null;
		echo "<script type='text/javascript'>window.open('insertdata.php','_parent');</script>";
		}
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/form.css">
    <title>Registration Form</title>
  </head>
  <body onresize="mFunction()">
    <div class="header">
      <nav>
        <div class="top">
          <a href="#"><img src="img/easytickets.png" height="80px"></a>
          <ul>
            <li style="float:right;padding-top:18px;">
              <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
            </li>
            <div id="myLinks">
              <li class="mobmenu"><a href="index.php">HOME</a></li>
              <li class="dropdown mobmenu">
                <a href="javascript:void(0)" class="dropbtn">EVENTS</a>
                <div class="panel">
                  <div class="in-list">
                    <a href="#">Upcoming Events</a>
                    <a href="#">Ongoing Events</a>
                    <a href="#">Recent Events</a>
                    <a href="#">All Events</a>
                  </div>
                </div>
              </li>
              <li class="dropdown mobmenu">
                <a href="javascript:void(0)" class="dropbtn">CATEGORY</a>
                <div class="panel">
                  <div class="in-list">
                    <a href="#">Technical Events</a>
                    <a href="#">Cultural Events</a>
                    <a href="#">TEDx Events</a>
                    <a href="#">Workshops</a>
                    <a href="#">Sports</a>
                    <a href="#">Conference</a>
                  </div>
                </div>
              </li>
              <li class="mobmenu"><a href="#">SPONSORS</a></li>
              <li class="mobmenu"><a href="#contact">CONTACT</a></li>
            </div>
          </ul>
        </div>
      </nav>
    </header>
<!--- =============================================== Register =========================================== ---> 
    <div id="form">
      <form action="insertdata.php" method="POST">
        <h2 style="text-align: center;">Club Name</h2>
        <fieldset style="border-radius:5px;">
          <legend>Fill your details :</legend>
          Name: <input type="text" placeholder="Enter your Name" name="name" required><br /><br />
          Course: <input type="text" placeholder="Enter your Course" name="course" required><br /><br />
          Select your Year:
          <select name="year">
            <option selected>Year</option>
            <option value="1st">1</option>
            <option value="2nd">2</option>
            <option value="3rd">3</option>
            <option value="4th">4</option>
          </select><br /><br />
          University Roll No.:<input type="text" placeholder="Your university Roll No." name="rollno" required><br /><br />
          Mobile Number: <input type="text" placeholder="Mobile Number" name="mobno"><br /><br />
          Email Address: <input type="text" placeholder="Email Address" name="email"><br /><br />
          <input type="submit" name="submit" id="button" value="submit">
        </fieldset>
      </form>
    </div>
    <div style="background-color:#1a1a1a;">
      <div class="footer">
        <h1>For any kind of query, suggestion Feel free to Contact Us</h1>
        <div class="row">
          <div class="f-left">
            <h2>Useful Links</h2>
            <a href="#">Add your event</a>
            <a href="#">Advertise</a>
            <a href="#">Support</a>
            <a href="#">About Us</a>
          </div>
          <div  class="f-middle">
            <h2>About Us</h2>
            kgrhg ruigh fugybnb nbnbn bnbn  bnbnb nbnbn  uhbttt ttfdyu  gggg gghyfud
          </div>
          <div class="f-right">
            <h2 id="contact">Contact Us</h2>
            <p><i class="fa fa-phone"></i>(+91) 9761305144</p>
            <a href="#">Event Tickets</a>
          </div>
        </div><hr>
        © 2020 All Rights Reserved. <a href="#"> Privacy Policy</a> | <a href="#">Terms of Use</a> | <a href="#">Give us feedback</a>
      </div>
    </div>
  </body>
  <script>
  function mFunction() {
  var x = document.getElementById("myLinks");
  var acc = document.getElementsByClassName("mobmenu");    
  var w = window.outerWidth;
  if(w > 900) {
    x.style.display = "block";
    for(i=0;i<acc.length;i++) {
      acc[i].style.display = "inline-block";
    }
  }
  if(w < 900) {
    x.style.display = "none";
    for(i=0;i<acc.length;i++) {
      acc[i].style.display = "none";
    }
  }
}

function myFunction() {
  var x = document.getElementById("myLinks");
  var acc = document.getElementsByClassName("mobmenu");
  if (x.style.display === "block") {
    x.style.display = "none";
  } 
  else {
    x.style.display = "block";
    for(i=0;i<acc.length;i++) {
      acc[i].style.display = "block";
    }
  }
}

var accord = document.getElementsByClassName("dropbtn");
for (var i = 0; i < accord.length; i++) {
  accord[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
</html>