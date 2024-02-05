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
function openModal(name, email, phone, inquiry, date) {
    var userDataDiv = document.getElementById("userData");
    userDataDiv.innerHTML = `
            <h2>${name}</h2>
            <div style="padding:10px; text-align:center">
            <a class="icon" href="mailto://${email}"><i class="uil uil-envelope-alt"></i></a>
            <a class="icon" href="tel://${phone}"><i class="uil uil-phone-alt"></i></a>
            </div>
            <p class="inquiry">${inquiry}</p>
            <p class="date">${date}</p>
            <a href="#" class="delete-btn">Delete</a>
            `;
    modal.style.display = "block";
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
        openModal(name, email, phone, inquiry, date);
    });
});

// Close the modal if the user clicks outside of it
window.addEventListener("click", function (event) {
    if (event.target == modal) {
        closeModal();
    }
});