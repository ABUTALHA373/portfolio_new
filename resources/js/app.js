import './bootstrap';


let collapseButton1 = document.getElementById('collapse_button1');
let collapseItem1 = document.getElementById('nav_and_hero');

let collapseButtonAbout = document.getElementById('collapse_button_about');
let collapseItemAbout = document.getElementById('about');

let collapseButtonEducation = document.getElementById('collapse_button_education');
let collapseItemEducation = document.getElementById('education');

let collapseButtonServices = document.getElementById('collapse_button_services');
let collapseItemServices = document.getElementById('services');

let collapseButtonContact = document.getElementById('collapse_button_contacts');
let collapseItemContact = document.getElementById('contacts');

let collapseButtonSocial = document.getElementById('collapse_button_social');
let collapseItemSocial = document.getElementById('social_links');

//admin items collapse
document.addEventListener('DOMContentLoaded', function () {
    // Set the initial max heights for all collapsible items
    setMaxHeights();

    // Set up event listeners for each collapse button
    collapseButton1.onclick = function () {
        toggleAdminItems(collapseButton1, collapseItem1);
    };

    collapseButtonAbout.onclick = function () {
        toggleAdminItems(collapseButtonAbout, collapseItemAbout);
    };

    collapseButtonEducation.onclick = function () {
        toggleAdminItems(collapseButtonEducation, collapseItemEducation);
    };

    collapseButtonServices.onclick = function () {
        toggleAdminItems(collapseButtonServices, collapseItemServices);
    };

    collapseButtonContact.onclick = function () {
        toggleAdminItems(collapseButtonContact, collapseItemContact);
    };

    collapseButtonSocial.onclick = function () {
        toggleAdminItems(collapseButtonSocial, collapseItemSocial);
    };

    // Adjust max heights on window resize
    window.addEventListener('resize', setMaxHeights);

    // Function to set max heights based on current content and screen size
    function setMaxHeights() {
        collapseItem1.style.maxHeight = collapseItem1.scrollHeight + 'px';
        collapseItemAbout.style.maxHeight = collapseItemAbout.scrollHeight + 'px';
        collapseItemEducation.style.maxHeight = collapseItemEducation.scrollHeight + 'px';
        collapseItemServices.style.maxHeight = collapseItemServices.scrollHeight + 'px';
        collapseItemContact.style.maxHeight = collapseItemContact.scrollHeight + 'px';
        collapseItemSocial.style.maxHeight = collapseItemSocial.scrollHeight + 'px';
    }

    // Toggle function for collapsible items
    function toggleAdminItems(button, item) {
        if (item.classList.contains('max-h-0')) {
            // Expand the item
            item.classList.remove('max-h-0');
            item.style.maxHeight = item.scrollHeight + 'px';
            button.classList.add('rotate-180');
        } else {
            // Collapse the item
            item.classList.add('max-h-0');
            item.style.maxHeight = '0';
            button.classList.remove('rotate-180');
        }
    }
});






