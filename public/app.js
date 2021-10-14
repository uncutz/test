import popupSignUp from '/module/app/popupSignUp.js';
import popupSignIn from '/module/app/popupSignIn.js';

import test from "./module/app/API.js";

export default function App() {

    this.run = function (){
        document.body.appendChild(popupSignUp.render());
        document.body.appendChild(popupSignIn.render());
        document.querySelector('.-submit').addEventListener('click', ()=>test())
    }
}
