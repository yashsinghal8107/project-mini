<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Event Ticket Booking System</title>
  </head>
  <body onresize="mFunction()">
    <div class="img">
      <nav>
        <div class="top">
          <a href="#"><img src="img/easytickets.png" height="80px"></a>
          <ul>
            <li style="float:right;padding-top:18px;">
              <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
            </li>
            <button onclick="document.getElementById('id01').style.display='block'">Log In</button>
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
      <h1>Event Master</h1>
    </div>
    <div id="id01" class="modal">
      <form class="modal-content animate" action="/action_page.php" method="post">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        </div>
        <h1 style="text-align: center";>Sign In</h1>
        <div class="container">
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="uname" required>
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
          <label><input type="checkbox" name="remember"> Remember me</label> 
          <span class="psw">Forgot <a href="#">password?</a></span>
          <button type="submit">Sign In</button>
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        </div>
      </form>
    </div>
    <div style="margin:60px;text-align:center;font-size:30px;font-family:'Prata';">
      <h2>Heading</h2>
      <p style="padding:0px 45px;word-spacing:2px;">
        "Whatever you do, do it well. Do it so well that when people see you do it they will want to come back and see you do it again and they will want to bring others and show them how well you do what you do.”
                                      -Walt Disney
      </p>
    </div>
    <div class="poster-div">
      <h2>Upcoming Events</h2>
      <div class="poster-coll">
        <img src="img/9.jpg">
        <h2>TechnoWeb</h2>
        <p class="title"><i class="fa fa-calendar"></i> 15 Feb 2020 10:00 AM</p>
        <p>Last Date- 21/05/2020</p>
        <div>
          <a href="#"><i class="fa fa-instagram"></i></a>  
          <a href="#"><i class="fa fa-linkedin"></i></a>  
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="ticketpage.php"><i class="fa fa-twitter"></i></a>
        </div>
        <button onclick="window.location.href = 'ticketpage.php';" target="_blank">Buy Now</button>
      </div>
      <div class="poster-coll">
        <img src="img/8.jpg">
        <h2>TechnoWeb</h2>
        <p class="title"><i class="fa fa-calendar"></i> 15 Feb 2020 10:00 AM</p>
        <p>Last Date- 21/05/2020</p>
        <div>
          <a href="#"><i class="fa fa-instagram"></i></a>  
          <a href="#"><i class="fa fa-linkedin"></i></a>  
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
        </div>
        <button onclick="window.location.href = 'ticketpage.php';">Buy Now</button>
      </div>
      <div class="poster-coll">
        <img src="img/4.jpg">
        <h2>TechnoWeb</h2>
        <p class="title"><i class="fa fa-calendar"></i> 15 Feb 2020 10:00 AM</p>
        <p>Last Date- 21/05/2020</p>
        <div>
          <a href="#"><i class="fa fa-instagram"></i></a>  
          <a href="#"><i class="fa fa-linkedin"></i></a>  
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
        </div>
        <button onclick="window.location.href = 'ticketpage.php';">Buy Now</button>
      </div>
      <div class="poster-coll">
        <img src="img/6.jpg">
        <h2>TechnoWeb</h2>
        <p class="title"><i class="fa fa-calendar"></i> 15 Feb 2020 10:00 AM</p>
        <p>Last Date- 21/05/2020</p>
        <div>
          <a href="#"><i class="fa fa-instagram"></i></a>  
          <a href="#"><i class="fa fa-linkedin"></i></a>  
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
        </div>
        <button onclick="window.location.href = 'ticketpage.php';" >Buy Now</button>
      </div>
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
          Event Ticket Booking System is a tie-up and a consortium of the college campus festivals in GLA UNIVERSITY.
          Our aim is to connect students from campuse all over GLA UNIVERSITY by making them aware of Technical, Cultural, Management Fests, Workshops, Conferences,organized by college in India.
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
    <script src="js/index.js"></script>
  </body>
</html>