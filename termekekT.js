var $ = function (id) {
    return document.getElementById(id);
}

function CheckData(){
    var termek = $("term").value;
    if(termek == ""){
        $("errt").innerText = "Add meg az termeknevét";
        $("errt").style.color = "red";
        document.querySelector(".term").style.borderColor = "#f00";
        return false;
    }

    if(termek != isNaN() )
    {
        sendData();
        return false;
    }
}
function CheckData2() {
    var termek=$("term").value;

    if(termek != isNaN()){
        $("errt").innerText = "";
        document.querySelector(".term").style.borderColor = "#fff";
    }
}

function sendData()
{
    var xmlhttp;
    if(window.XMLHttpRequest)
    {
        xmlhttp = new XMLHttpRequest();
    }

    xmlhttp.onreadystatechange = function () {
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
            document.querySelector("html").innerHTML = xmlhttp.responseText;
        }
    };

    var termek=$("term").value;


    xmlhttp.open("POST","termekekTA.php", true);
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp.send("termek="+termek);
}


