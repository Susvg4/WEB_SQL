
var countDownDate = new Date("Sep 30, 2022 12:00:00").getTime();
var x = setInterval(function() {
  var now = new Date().getTime();
  var distance = countDownDate - now;
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  document.getElementById("coundown").innerHTML = days + "يوم " + hours + "ساعة "
  + minutes + "دقيقة " + seconds + "ثانية ";
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("coundown").innerHTML = "لقد وصلت متاخراًُ";
  }
}, 1000);


//برمجية اختيار الرابح
const win = document.querySelector("#winner");
const cards = document.querySelector("#cards");

win.addEventListener('click', function(){
    cards.style.display = 'flex';

}); 


// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
} 
