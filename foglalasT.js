var $ = function (id) {
    return document.getElementById(id);
}

function CheckData(){
    var date = $("date").value;
    if(date == ""){
        $("errt").innerText = "Add meg a dátumot";
        $("errt").style.color = "red";
        document.querySelector(".date").style.borderColor = "#f00";
        return false;
    }

    if(date != isNaN() )
    {
        sendData();
        return false;
    }
}
function CheckData2() {
    var date = $("date").value;

    if(date != isNaN()){
        $("errt").innerText = "";
        document.querySelector(".date").style.borderColor = "#fff";
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

    var date = $("date").value;


    xmlhttp.open("POST","fogTA.php", true);
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp.send("id="+date);
}


