// Attempt to toggle submit button on input of keys.
$('[name="keys"]').on('input', () => toggleSubmitButton())
// Attempt to toggle submit button on file upload.
$('[name="file"]').on('input', () => toggleSubmitButton())

/**
 * Toggles the state (`disabled`/`enabled: 'not disabled'`) of the submit button.
 * @returns void
 */
let toggleSubmitButton = () => ($('[name="keys"]').val() != "" && $('[name="file"]').val() != "") ? $('#btn-convert').removeAttr('disabled') : $('#btn-convert').attr('disabled', 'disabled')