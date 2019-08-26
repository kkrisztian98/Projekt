var $ = function (id) {
    return document.getElementById(id);
}

function CheckData()
{

    var termek = $("termekfj").value;
    var kepnev = $("kepnev").value;

    if(termek  == "" && kepnev == "")
    {


        $("errtefj").innerText = "Add meg az termékfajta nevét";
        $("errtefj").style.color = "red";
        document.querySelector(".termekfj").style.borderColor = "#f00";
        $("errkepnev").innerText = "Add meg az termékfajta ábrázoló kép nevét";
        $("errkepnev").style.color = "red";
        document.querySelector(".kepnev").style.borderColor = "#f00";
        return false;
    }

     if(termek.trim() == "") {
         $("errtefj").innerText = "Add meg az termékfajta nevét";
         $("errtefj").style.color = "red";
         document.querySelector(".termekfj").style.borderColor = "#f00";
        return false;
    }
    else if(kepnev.trim() == "") {
        $("errkepnev").innerText = "Add meg az alkatrészt ábrázoló kép nevét";
        $("errkepnev").style.color = "red";
        document.querySelector(".kepnev").style.borderColor = "#f00";
        return false;
    }

    if( termek != "" && kepnev != "")
    {
        sendData();
        return false;
    }
}



function CheckData2()
{

    var termek = $("termekfj").value;
    var kepnev = $("kepnev").value;



    if(termek  != "")
    {
        $("errtefj").innerText = "";
        document.querySelector(".termekfj").style.borderColor = "#A9A9A9";
    }
    if(kepnev  != "")
    {
        $("errkepnev").innerText = "";
        document.querySelector(".kepnev").style.borderColor = "#A9A9A9";

    }
}

//AJAX küldés
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
    var termek = $("termekfj").value;
    var kepnev = $("kepnev").value;

    xmlhttp.open("POST","termekfaHA.php", true);
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp.send("termek="+termek+"&kepnev="+kepnev);
}