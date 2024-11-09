function modal({modalToggle, modalBg, modalMain}) {
    const toggleButton = document.getElementById(modalToggle);
    const modal = document.getElementById(modalBg);
    const modalBody = document.getElementById(modalMain);
    const closeButton = modal.querySelector('[aria-hidden="true"]');

    function showModal() {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.style.overflow = 'hidden';
    }

    function hideModal() {
        modal.classList.remove('flex');
        modal.classList.add('hidden');
        document.body.style.overflow = '';
    }

    toggleButton.addEventListener('click', showModal);
    closeButton.addEventListener('click', hideModal);

    window.addEventListener('click', function (e) {
        if (e.target === modal) {
            hideModal();
        }
    });
}


// project 1 modal
// modal({
//     modalToggle: "modalBtnProject1",    // ID of the button to open modal
//     modalBg: "modalBgProject1",      // ID of the modal background
//     modalMain: "modalBodyProject1",    // ID of the main modal
// });


/* structure of modal
modal({
    modalToggle: "button it to open modal",
    modalBg: "modal background div id"
    modalMain: "modal main body with title and everything"
});

aria-hidden="true"   // add this attribute for close button into modal body
*/
