document.addEventListener("DOMContentLoaded", function () {
    window.addEventListener("load", function () {
        document.getElementById("preloader").style.display = "none";
    });
});

const body = document.querySelector('body');
const modeToggle = body.querySelector('.mode-toggle');
const sidebarToggle = body.querySelector('.sidebar-toggle');
const sidebar = body.querySelector('nav');

let getMode = localStorage.getItem("mode");
if (getMode && getMode === "dark") {
    body.classList.toggle('dark');
}

let getStatus = localStorage.getItem('status');
if (getStatus && getStatus === "close") {
    sidebar.classList.toggle("close");
}

modeToggle.addEventListener('click', () => {
    body.classList.toggle('dark');
    if (body.classList.contains('dark')) {
        localStorage.setItem("mode", "dark");
    } else {
        localStorage.setItem("mode", "light");
    }
});

sidebarToggle.addEventListener('click', () => {
    sidebar.classList.toggle("close");
    if (sidebar.classList.contains('close')) {
        localStorage.setItem("status", "close");
    } else {
        localStorage.setItem("status", "open");
    }
})

/* view messages */

var viewButtons = document.querySelectorAll('.view-btn');
var usersName = document.querySelectorAll('.users-name');
var usersEmail = document.querySelectorAll('.users-email');
var usersPhone = document.querySelectorAll('.users-phone');
var usersInquiry = document.querySelectorAll('.users-inquiry');
var dates = document.querySelectorAll('.date');
// Get the modal
var modal = document.getElementById("myModal");

// Get the close button
var closeBtn = document.querySelector(".close");

// Function to open the modal
function openModal(name, email, phone, inquiry, date, id) {
    var userDataDiv = document.getElementById("userData");
    userDataDiv.innerHTML = `
            <h2>${name}</h2>
            <div style="padding:10px; text-align:center">
            <a class="icon" href="mailto://${email}"><i class="uil uil-envelope-alt"></i></a>
            <a class="icon" href="tel://${phone}"><i class="uil uil-phone-alt"></i></a>
            <a class="icon" href="" onclick=whatsapp(${phone})><img src="../images/whatapp-logo.png" style="width: 30px;"></a>
            </div>
            <p class="inquiry">${inquiry}</p>
            <p class="date">${date}</p>
            <a href="../controllers/AppController.php?action=deleteRequest&request_id=${id}" class="delete-btn" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
            `;
    modal.style.display = "block";
}

function detectmob() {
    return navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || navigator.userAgent.match(/Windows Phone/i) ? true : false
}
function whatsapp(mobile) {
    let url = detectmob() === true ? "https://api.whatsapp.com/send" : "https://web.whatsapp.com/send";
    let w_m = url + "?phone=+91" + mobile + "&text=*Hi, Sir!*";
    window.open(w_m, "_blank").focus();
}

// Function to close the modal
function closeModal() {
    modal.style.display = "none";
}

// Assign event listener to close button
closeBtn.addEventListener("click", closeModal);

// Assign event listener to each view button
viewButtons.forEach(function (button, index) {
    button.addEventListener('click', function () {
        let name = usersName[index].innerText;
        let email = usersEmail[index].innerText;
        let phone = usersPhone[index].innerText;
        let inquiry = usersInquiry[index].innerText;
        let date = dates[index].innerText;
        let id = button.getAttribute('value');
        openModal(name, email, phone, inquiry, date, id);

    });
});

// Close the modal if the user clicks outside of it
window.addEventListener("click", function (event) {
    if (event.target == modal) {
        closeModal();
    }
});