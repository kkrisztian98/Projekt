window.addEventListener('load', function () {
    document.getElementById('forma').addEventListener('submit', function (e) {
        e.preventDefault();
        if (checkForm()) this.submit();
    });
});

//Roviditeshez szolgáló függvény
var $ = function (id) {
    return document.getElementById(id);
}

var checkForm = function () {
    //Ha isValid true abban az esetben nem történik kiiratás
    $('errfelh').innerHTML = '';
    $('errjel').innerHTML = '';
    var isValid = true;
    //Amennyiben üresek a mezők kiirásra kerülnek a következők valamit az isValid false értéket ad majd vissza
    if ($('felh').value == '') {
        $('errfelh').innerHTML = 'Adja meg a felhasználónevét';
        $("errfelh").style.color = "red";
        isValid = false;
    }

    if ($('jelszo').value == '') {
        $('errjel').innerHTML = 'Adja meg a jelszavát';
        $("errjel").style.color = "red";
        isValid = false;
    }
    return isValid;
}
