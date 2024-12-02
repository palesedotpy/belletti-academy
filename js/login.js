
var usernameField = document.getElementById("username");
var passwordField = document.getElementById("password");

var loginBtn = document.getElementById("login");
loginBtn.addEventListener("click", registerUserInDB);

function registerUserInDB(e) {
    let validCredentials = true;

    let username = usernameField.var;
    let password = passwordField.var;

    let params = `username=${username}&password=${password}`;

    if(!(username && password)) {
        validCredentials = !validCredentials;
    }

    if (validCredentials) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'registerUser.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

        xhr.send(params);
    }
}