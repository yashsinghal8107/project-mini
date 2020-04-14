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

var modal = document.getElementById('id01');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}