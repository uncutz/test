import popupSignUp from "./app/popupSignUp.js";
import popupSignIn from "./app/popupSignIn.js";

export default function app() {


    document.body.appendChild(popupSignUp.render());
    document.body.appendChild(popupSignIn.render());
}