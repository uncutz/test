function render() {
    const $element = document.createElement('div');
    document.querySelector('.-sign-in-button').addEventListener('click', function () {

        $element.innerHTML = `<div class="position-absolute align-items-center justify-content-center -sign-in-popup">
    <div class="row mt-5 d-flex justify-content-center">
        <div class="d-flex flex-column justify-content-center position-absolute -sign-in-field">
            <button type="button" class="btn btn-secondary btn-sm position-absolute -close">x</button>
             <label for="username">Username:</label>
            <input type="text" id="username" name="username" placeholder="Username"><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Email"><br>
            <label for="password1">Password:</label>
            <input type="password" id="password1" name="password1" placeholder="Password"><br>
            <label for="password1">Password-repeat:</label>
            <button type="button" class="btn btn-secondary -submit-sign-in">Sign Up</button>
        </div>
    </div>
</div>`;


        $element.querySelector('.-close').addEventListener('click', function () { //schließt popupSignUp mit -close Button
            $element.innerHTML = '';
        })


        $element.querySelector('.-submit-sign-in').addEventListener('click', function () {
            let username = document.querySelector('#username').value;
            let email = document.querySelector('#email').value;
            let password1 = document.querySelector('#password1').value;

            if (
                username === '' &&
                email === '' &&
                password1 === ''

            ) {
                alert('Not all inputs filled');
            } else {
                document.dispatchEvent(new CustomEvent('sign-in-data', { //gibt Daten weiter
                    detail: {
                        username: username,
                        email: email,
                        password1: password1,
                    }
                }))

                $element.innerHTML = '';//schließt PopUp
            }


        })


        return $element.firstChild; //macht das Popup ausgegeben wird
    })

    return $element;
}


const popupSignIn = {
    render
}
export default popupSignIn