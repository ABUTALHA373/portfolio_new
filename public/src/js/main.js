// collapsible Menu

var menuIcon = document.getElementById('menu-icon');
var hamburgerIcon = document.getElementById('hamburger-icon');
var xIcon = document.getElementById('x-icon');
const collapsibleMenu = document.getElementById('collapsible-menu');
const header = document.querySelector('nav');
var menuLinks = document.querySelectorAll('#collapsible-menu a');


// Toggle function for menu and icons
menuIcon.onclick = function (event) {
    event.stopPropagation();  // Prevent this click from triggering the document click event

    const isMenuOpen = collapsibleMenu.style.height !== '0px';
    if (isMenuOpen) {
        // Collapse the menu
        collapsibleMenu.style.height = '0px';
        hamburgerIcon.classList.toggle('hidden');
        xIcon.classList.toggle('hidden');
    } else {
        // Expand the menu
        collapsibleMenu.style.height = collapsibleMenu.scrollHeight + 'px';
        hamburgerIcon.classList.toggle('hidden');
        xIcon.classList.toggle('hidden');
    }
};

// Close the menu when clicking outside of the header
document.onclick = function (event) {
    const isClickInside = header.contains(event.target);  // Check if the click is inside the header

    if (!isClickInside) {
        // Collapse the menu if open
        const isMenuOpen = collapsibleMenu.style.height !== '0px';
        if (isMenuOpen) {
            collapsibleMenu.style.height = '0px';
            hamburgerIcon.classList.toggle('hidden');
            xIcon.classList.toggle('hidden');
        }
    }
};

menuLinks.forEach(link => {
    link.onclick = function () {
        const isMenuOpen = collapsibleMenu.style.height !== '0px';
        if (isMenuOpen) {
            collapsibleMenu.style.height = '0px';
            hamburgerIcon.classList.toggle('hidden');
            xIcon.classList.toggle('hidden');
        }
    };
});

//Collapsible menu

//about section tabs
function openTab(evt, tabName) {
    // Hide all tabcontent
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].classList.add("hidden");
    }

    // Remove active class from all tablinks
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].classList.remove("bg-primary", "text-white");
        tablinks[i].classList.add(
            "bg-transparent",
            "text-primary",
            "hover:bg-primary",
            "hover:text-white"
        );
    }

    // Show the current tab, and add active class to the button
    document.getElementById(tabName).classList.remove("hidden");
    evt.currentTarget.classList.remove(
        "bg-transparent",
        "text-primary",
        "hover:bg-primary",
        "hover:text-white"
    );
    evt.currentTarget.classList.add("bg-primary", "text-white");
}

//about section tabs

//netlify form handle
const handleSubmit = (event) => {
    event.preventDefault();

    const myForm = event.target;
    const formData = new FormData(myForm);

    fetch("/", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: new URLSearchParams(formData).toString(),
    })
        .then(() => {
            Swal.fire({
                icon: "success",
                title: "Your message has been delivered.",
                showConfirmButton: false,
                timer: 1500
            }),
                myForm.reset();
        })
        .catch((error) => Swal.fire({
            icon: "error",
            title: "Something Wrong!",
            showConfirmButton: false,
            timer: 1500
        }));
};

document
    .querySelector("form")
    .addEventListener("submit", handleSubmit);
//netlify form handle



