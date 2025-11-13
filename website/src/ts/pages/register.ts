import { sendRequest } from "../module/sendRequests/sendrequest.js";
import type IUser from "../common/interfaces/IUser.js";

function login() {
    const email = document.getElementById("email") as HTMLInputElement;
    const phonenumber = document.getElementById("phonenumber") as HTMLInputElement;
    const username = document.getElementById("username") as HTMLInputElement;
    const password = document.getElementById("password") as HTMLInputElement;
    const age = document.getElementById("age") as HTMLInputElement;

    const user: IUser = {email: email.value, phonenumber: phonenumber.value, username: username.value, password: password.value, age: parseInt(age.value)};
    sendRequest("POST", "http://localhost:8000/api/login", JSON.stringify(user));
}

function register() {

}

window.addEventListener("load", () => {
    let loginButton = document.getElementById("login") as HTMLInputElement;
    let registerButton = document.getElementById("register") as HTMLInputElement;

    loginButton.addEventListener("click", login);
    registerButton.addEventListener("click", register)
});