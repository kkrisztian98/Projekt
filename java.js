window.addEventListener('load', function () {
    document.getElementById('flogin').addEventListener('submit', function (e) {
        e.preventDefault();
        if (checkForm()) this.submit();
    });
});


var $ = function (id) {
    return document.getElementById(id);
}

var checkForm = function () {

    $('error1').innerHTML = '';
    $('error2').innerHTML = '';
    var isValid = true;

    if ($('user').value == '') {
        $('error1').innerHTML = 'Adja meg a felhasználónevét';
        $("error1").style.color = "red";
        isValid = false;
    }

    if ($('pass').value == '') {
        $('error2').innerHTML = 'Adja meg a jelszavát';
        $("error2").style.color = "red";
        isValid = false;
    }
    return isValid;
}
