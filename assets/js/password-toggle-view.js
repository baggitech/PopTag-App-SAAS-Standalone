let password_toggle_view_initiate = () => {
    document.querySelectorAll('[data-password-toggle-view]').forEach(element => {
        let label = element.querySelector('label');
        let label_html = label.innerHTML;

        /* Create a span element to hold the label text */
        let label_span = document.createElement('span');
        label_span.innerHTML = label_html;

        /* Create small element which will display the current range input value */
        let label_icon = document.createElement('a');
        label_icon.classList.add('text-muted');
        label_icon.setAttribute('role', 'button');
        label_icon.setAttribute('tabindex', '0');
        label_icon.innerHTML = '<i class="fas fa-fw fa-sm fa-eye-slash"></i>'
        label_icon.setAttribute('title', element.getAttribute('data-password-toggle-view-show'));
        label_icon.setAttribute('data-toggle', 'tooltip');
        label_icon.setAttribute('data-tooltip-hide-on-click', '');

        /* Add the event listeners for the eye */
        label_icon.addEventListener('click', event => {
            let input = element.querySelector(`input`);
            input.type = input.type === 'text' ? 'password' : 'text';
            label_icon.innerHTML = input.type === 'text' ? '<i class="fas fa-fw fa-sm fa-eye"></i>' : '<i class="fas fa-fw fa-sm fa-eye-slash"></i>';
            label_icon.setAttribute('title', input.type === 'text' ? element.getAttribute('data-password-toggle-view-hide') : element.getAttribute('data-password-toggle-view-show'));
            label_icon.setAttribute('data-original-title', input.type === 'text' ? element.getAttribute('data-password-toggle-view-hide') : element.getAttribute('data-password-toggle-view-show'));
            tooltips_initiate();
        });

        /* Add new classes to the already existing label */
        label.classList.add('d-flex', 'justify-content-between', 'align-items-center');

        /* Replace existing label with the new generated content */
        label.innerHTML = ``;
        label.appendChild(label_span);
        label.appendChild(label_icon);

        tooltips_initiate();
    });
}

password_toggle_view_initiate();