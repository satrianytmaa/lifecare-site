// script.js


// Modal script
// var modal = document.getElementById("myModal");
// var contactName = document.getElementById("contact_name");
// var contactIssue = document.getElementById("contact_issue");

// document.getElementById("buttonAlert").addEventListener("click", function() {
//     var fullName = document.getElementById("fullName").value;
//     var fullIssue = document.getElementById("subject").value;


//     contactName.innerHTML = "<h4>Hi, " + fullName + "</h4>";
//     contactIssue.innerHTML = "<p>Your subject: " + fullIssue  + "</p>";
    
//     // Show the modal
//     modal.style.display = "block";
// });

// document.getElementsByClassName("close")[0].addEventListener("click", function() {
//     modal.style.display = "none";
// });

// window.addEventListener("click", function(event) {
//     if (event.target == modal) {
//         modal.style.display = "none";
//     }
// });


// // Form filling validation
// document.addEventListener('DOMContentLoaded', function () {
//     const buttonAlert = document.getElementById('buttonAlert');
//     const inputs = document.querySelectorAll('input, textarea');

//     function checkInputs() {
//         let allFilled = true;
//         inputs.forEach(input => {
//             if (!input.value.trim()) {
//                 allFilled = false;
//             }
//         });

//         buttonAlert.disabled = !allFilled;
//     }

//     inputs.forEach(input => {
//         input.addEventListener('input', checkInputs);
//     });
// });


    // Modal script
    var modal = document.getElementById("myModal");
    var contactName = document.getElementById("contact_name");
    var contactIssue = document.getElementById("contact_issue");

    document.getElementById("buttonAlert").addEventListener("click", function() {
        var fullName = document.getElementById("fullName").value;
        var fullIssue = document.getElementById("subject").value;

        contactName.innerHTML = "<h4>Hi, " + fullName + "</h4>";
        contactIssue.innerHTML = "<p>Your subject: " + fullIssue  + "</p>";

        // Show the modal
        modal.style.display = "block";

        // Redirect ke halaman form setelah menampilkan modal
        window.location.href = "/lifecare-site/index/contact.php";
    });

    // Event listener untuk buttonAlert di modal
    document.getElementById("buttonAlertModal").addEventListener("click", function() {
        // Redirect ke halaman form setelah menutup modal
        window.location.href = "/lifecare-site/index/contact.php";
    });

    document.getElementsByClassName("close")[0].addEventListener("click", function() {
        modal.style.display = "none";
    });

    window.addEventListener("click", function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    });

    // Form filling validation
    document.addEventListener('DOMContentLoaded', function () {
        const buttonAlert = document.getElementById('buttonAlert');
        const inputs = document.querySelectorAll('input, textarea');

        function checkInputs() {
            let allFilled = true;
            inputs.forEach(input => {
                if (!input.value.trim()) {
                    allFilled = false;
                }
            });

            buttonAlert.disabled = !allFilled;
        }

        inputs.forEach(input => {
            input.addEventListener('input', checkInputs);
        });
    });

