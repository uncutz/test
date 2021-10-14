// Get the template for the sign in popup
const templatePopupSignIn = document.getElementById('template-sign-in-popup');

const empty = document.createElement('div');

function render() {
    const $element = document.createElement('div');

    // Create a popup when clicking on the sign in button
    document
        .querySelector('.sign-in-button')
        .addEventListener('click', function () {
            // Clone the template for the sign in popup

            /** @type {HTMLElement} */
            var popup = templatePopupSignIn.content.cloneNode(true); // templatePopupSignIn

            // Close popup when clicking on close button
            popup
                .querySelector('.close')
                .addEventListener('click', function () {
                    closePopup();
                    return empty; // optional
                });

            popup
                .querySelector('.submit-sign-in')
                .addEventListener('click', checkSignIn); // TODO why is popup.querySelector not working inside here?

            // TODO add error messages
            function checkSignIn() {
                /** @type {String} */
                let username = document.querySelector('#username').value;
                /** @type {String} */
                let email = document.querySelector('#email').value;
                /** @type {String} */
                let password = document.querySelector('#password1').value;

                console.log(`username: ${username}`);
                console.log(`email: ${email}`);
                console.log(`password: ${password}`);

                if (username === '' && email === '') {
                    return;
                }

                if (password === '') {
                    return;
                }

                if (email) {
                    // See https://stackoverflow.com/questions/46155/how-to-validate-an-email-address-in-javascript
                    const regex_email =
                        /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                    // regex_email = /[a-z0-9]+@[a-z0-9]+.[a-z]+/gi;

                    if (email.match(regex_email)) {
                        // loginWithUserEmail(email, password);
                    }
                } else {
                    // loginWithUserName(username, password);
                }

                // TODO just close if login succeded
                closePopup();
            }

            function closePopup() {
                $element.innerHTML = '';
            }

            // TODO Username/email + Password check
            function login() {
                console.log('Logging in...');
            }

            // Append the clone to the element
            $element.appendChild(popup);
        });

    return $element;
}

const popupSignIn = {
    render,
};
export default popupSignIn;
