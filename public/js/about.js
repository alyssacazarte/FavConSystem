
// ================ for the header ==================

let bar = document.querySelector('.bar')
let topBtn = document.querySelector('.topBtn')
let btn = document.querySelector('.topBtn i')
let contactBtn = document.querySelector('.container')
let btn2 = document.querySelector('.container a')
let nav = document.querySelector('nav ul')

bar.addEventListener('click', () => {
    bar.classList.toggle('active')
    nav.classList.toggle('active')
})

topBtn.addEventListener('click', () => {
    btn.click()
})
contactBtn.addEventListener('click', () => {
    btn2.click()
})


ScrollOut({
    targets: '.img, .aboutText , .box, div.left, div.right'
})
ScrollOut({
    targets: '.header',
    offset: 50
})
// ================ end for the header ==================




// ============== for the modal ====================

 // Get the button element
 var test = document.getElementById("read");

 // Get the modal element
 var modal = document.getElementById("myModal");

 // Get the <span> element that closes the modal
 var closeBtn = document.getElementsByClassName("exit")[0];

 // When the user clicks the button, open the modal
 test.onclick = function () {
     modal.style.display = "block";
 };

 // When the user clicks on <span> (x), close the modal
 closeBtn.onclick = function () {
     modal.style.display = "none";
 };

 // When the user clicks anywhere outside of the modal, close it
 window.onclick = function (event) {
     if (event.target == modal) {
         modal.style.display = "none";
     }
 };