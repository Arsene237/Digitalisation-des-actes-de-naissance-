function verif() {
    var p = document.getElementById("psd").value;
    var m = document.getElementById("pwd").value;
    if (p == "") {
        alert("Please, enter your pseudo!!");
        p.focus();
        return false;
    } else {
        alert("Please, enter your password!!");
        m.focus();
        return false;
    }
    return true;
}