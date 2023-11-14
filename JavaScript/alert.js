// script.js

var modal = document.getElementById("myModal");
var outputDiv = document.getElementById("output");

document.getElementById("buttonAlert").addEventListener("click", function() {
    var fullName = document.getElementById("fullName").value;


    outputDiv.innerHTML = "<h4>Hi " + fullName + ", Thank you for reaching us, we will send you a respond as soon as possible</h4>";
    
    // Show the modal
    modal.style.display = "block";
});

document.getElementsByClassName("close")[0].addEventListener("click", function() {
    modal.style.display = "none";
});

window.addEventListener("click", function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
});
