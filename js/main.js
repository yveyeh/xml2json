// $(document).on('contextmenu', (e) => {
//     // prevent right-click
//     e.preventDefault()
// });

// $(window).on('keydown', (e) => {
//     // prevent F12 from opening the console
//     if (e.keyCode==123) {
//         return false;
//     } 
//     // prevent Inspect
//     else if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
//         return false; 
//     }
//     // prevent Print
//     else if (e.ctrlKey && e.keyCode == 80) {
//         return false;
//     }
//     // prevent Save as
//     else if (e.ctrlKey && e.keyCode == 83) {
//         return false;
//     }
//     // prevent View page source
//     else if (e.ctrlKey && e.keyCode == 85) {
//         return false;
//     }
// });

$('[name="keys"]').on('input', () => {
    toggleSubmitButton()
})

$('[name="file"]').on('input', () => {
    toggleSubmitButton()
})

/**
 * Toggles the disabled state of the submit button.
 * @returns void
 */
function toggleSubmitButton() {
    ($('[name="keys"]').val() != "" && $('[name="file"]').val() != "") 
    ? $('#btn-convert').removeAttr('disabled') 
    : $('#btn-convert').attr('disabled', 'disabled')
}