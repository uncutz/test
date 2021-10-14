function render() {
    const $element = document.createElement('div');
    document
        .querySelector('.sign-up-button')
        .addEventListener('click', function () {
            $element.innerHTML = `<div class="position-absolute align-items-center justify-content-center sign-up-popup">
    <div class="row mt-5 d-flex justify-content-center">
        <div class="d-flex flex-column justify-content-center position-absolute sign-up-field">
            <button type="button" class="btn btn-secondary btn-sm position-absolute close">x</button>
            <label for="first-name">First name:</label>
            <input type="text" id="first-name" class="first-name" name="first-name" placeholder="First Name"><br>
            <label for="last-name">Last name:</label>
            <input type="text" id="last-name" name="last-name" placeholder="Last Name"><br>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" placeholder="Username"><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Email"><br>
            <label for="password1">Password:</label>
            <input type="password" id="password1" name="password1" placeholder="Password"><br>
            <label for="password1">Password-repeat:</label>
            <input type="password" id="password2" name="password2" placeholder="Password-repeat"><br>
            <button type="button" class="btn btn-secondary submit-sign-up">Sign Up</button>
        </div>
    </div>
</div>`;

            $element
                .querySelector('.close')
                .addEventListener('click', function () {
                    //schließt popupSignUp mit -close Button
                    $element.innerHTML = '';
                });

            $element
                .querySelector('.submit-sign-up')
                .addEventListener('click', function () {
                    let firstName = document.querySelector('#first-name').value;
                    let lastName = document.querySelector('#last-name').value;
                    let username = document.querySelector('#username').value;
                    let email = document.querySelector('#email').value;
                    let password1 = document.querySelector('#password1').value;
                    let password2 = document.querySelector('#password2').value;

                    if (
                        firstName === '' ||
                        lastName === '' ||
                        username === '' ||
                        email === '' ||
                        password1 === '' ||
                        password2 === ''
                    ) {
                        alert('Not all inputs filled');
                    } else {
                        document.dispatchEvent(
                            new CustomEvent('sign-up-data', {
                                //gibt Daten weiter
                                detail: {
                                    firstName: firstName,
                                    lastName: lastName,
                                    username: username,
                                    email: email,
                                    password1: password1,
                                    password2: password2,
                                },
                            })
                        );

                        $element.innerHTML = ''; //schließt PopUp
                    }
                });

            return $element.firstChild;
            //document.querySelector('.-sign-up-popup-render').appendChild($element.firstChild); //macht das Popup gerendert wird
        });

    return $element;
}

const popupSignUp = {
    render,
};
export default popupSignUp;
