<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Ticket Page</title>
  <style>
* {box-sizing: border-box;}
body {
	margin:0;
	padding:0;
	background-color:#fff;
}
.header {
  margin: 0;
  padding: 0;
  background-color: black;
  height:80px;
  width: 100%;
}
nav .top {
  position:relative;
  display:inline-block;
  width:100%;
  font-family: 'Concert One', cursive;
}
nav .top img:first-child {
  position:absolute;
  padding:10px 0px 0px 10px;
}
nav .top ul {
  margin: 0;
  list-style-type:none;
  text-align:center;
  padding-top:10px;
}
nav .top ul #myLinks {
  padding-top: 10px;
}
nav .top ul li {
  display:inline-block;
  padding:5px;
  font-size: 24px;
  text-align: center;
  color: white;
}
nav .top ul a {
  text-decoration:none;
  color: #FFFFFF;
}
nav .top ul a:hover {
  color: #0397FE;
}
nav .top ul .dropdown {
  position: relative;
  display: inline-block;
}
.dropdown:hover .panel {
  display: block;
}
nav .top ul .panel {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 200px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
nav .top ul .panel a {
  color: black;
  padding: 6px 8px;
  text-align: left;
  display: block;
}
nav .top ul .panel .in-list a:hover {
  color: #0397FE;
}
nav + h1 {
  text-align:center;
  font-size:50px;
  padding-top:0px;
}
@media screen and (max-width:900px) {
  nav {
  background-color: black;
  }
  nav .top {
    display:inline-block;
  }
  nav .top img:first-child {
    padding-bottom: 10px;
  }
  nav .top ul {
    padding-top:0px;
  }
  nav .top ul li:first-child {
  display:inline;
  }
  nav .top ul li {
    float: none;
  }
  nav .top ul #myLinks {
    padding-top: 80px;
  }
  nav .top ul #myLinks li {
  display:none;
  }
  nav .top ul li a, .dropdown .dropbtn {
    display:block;
    text-align:left;
    padding:6px 10px;
  }
  nav .top ul .panel {
    max-height: 0;
    overflow: hidden;
    background-color: black;
    transition: max-height 0.2s ease-out;
    display:block;
    position:relative;
  }
  nav .top ul .in-list {
    width:100%;
  }
  nav .top ul .in-list a {
    color:#8E9296;
  }
  .dropdown:hover .panel {
    display: block;
    position: relative;
  }
}
@media screen and (min-width:900px) {
  nav .top ul li:first-child {
    display:none;
  }
  nav .top ul #myLinks li {
    display:inline-block;
  }
}
.row:after {
  content:"";
  display:block;
  clear: both;
}
.footer {
  padding:20px 20px 5px 20px;
  background:#1a1a1a;
  color:white;
  margin:0 auto;
  max-width: 100%;
  text-align:center;
}
.footer .row a {
  text-decoration:none;
  font-size:20px;
  padding:5px 5px 10px 5px;
  display:block;
  color:#8E9296;
}
.footer .f-left {
  width:33%;
  float:left;
}
.footer .f-middle {
  width:33%;
  float:left;
  padding: 0px 70px;
}
.footer .f-right {
  width:33%;
  float:left;
}
.footer .f-right .fa-phone {
  margin-right:5px;
}
@media screen and (max-width:600px) {
  .footer .f-left, .footer .f-middle, .footer .f-right {
    width:100%;
  }
}
div.event-details {
	padding:20px;
	background-color:#E1E1E1;
	margin:0 auto;
	width:60%;
	margin-top:17px;
}
div.event-details img{
	display:inline-block;
	text-align: center;
	width:100%;
	max-height:620px;
}
div.event-details p{
	font-size: 20px;
	width:100%;
}
div.event-details p+a {
	display: block;
	text-decoration: none;
	text-align: center;
	cursor: pointer;
	background-color:green;
	color: white;
	padding:10px 16px;
	margin:0 auto;
}
@media screen and (max-width:900px)  {	
	div.event-details {
		width:100%;
		margin-top:0px;
	}
}
	</style>
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
              <li class="mobmenu"><a href="#">HOME</a></li>
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
    <div class="event-details">
	<img src="img/1.jpg">
<p>Dear all, Greetings from <b>BCA-O-CRATES(Abacus Society)!!</b><br>
<b>BCA-O-Crates</b> is organizing 2 days workshop on <b>Techno Web</b> website development.<br>
Day one of workshop will be on html, css and 2nd day on php and javascript.<br>
So, hurry up guys! What are you waiting for, don't let this chance go!<br>
<b>Fees :</b><br>
Abacus Member : Rs. 20<br>
Non-Abacus Member : Rs. 40<br>
<b>Venue :</b><br>
Academic Block X, Room No. 330<br>
Date & Time : 22 & 23 Jan 2020 | 1:30 - 3:30 PM<br>
<b>Coordinators :</b><br>
Anuj Arora<br>
+91 79414666<br>
Yash Singhal<br>
+91 64974646<br>
</p><a href="Form.php">Pay Now</a>
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
</body>
</html>