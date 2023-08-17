function checkCred() {
    let haveErrors = false;
    const usernameValue = document.getElementById("userid").value;
    const userpasswordValue = document.getElementById("password").value;
    if (usernameValue === "" || userpasswordValue === "") {
        haveErrors = true;
        document.getElementById("errors").innerHTML = "Username or password cannot be empty";
    }

    if (!haveErrors) {
        //console.log("Here");
        document.forms[0].submit();
    }
}