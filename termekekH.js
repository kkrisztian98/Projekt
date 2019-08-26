var $ = function (id) {
    return document.getElementById(id);
}
function CheckData()
{
    var termekv = $("termekv").value;
    var termek = $("ter").value;
    var gyarto = $("gyar").value;
    var ar = $("ar").value;
    var leiras = $("lei").value;
    var szin = $("szin").value;
    var kepnev = $("kepnev").value;
    var pont = $("pont").value;

    if(termekv == "0" && termek == ""  && gyarto == "" && ar == ""  && leiras  == "" && szin == "" && kepnev == "" && pont == "" )
    {
        $("errtkv").innerText = "Add meg a terméktítust";
        $("errtkv").style.color = "red";
        document.querySelector(".termekv").style.borderColor = "#f00";

        $("errt").innerText = "Add meg a terméknevét";
        $("errt").style.color = "red";
        document.querySelector(".ter").style.borderColor = "#f00";

        $("errgyar").innerText = "Add meg a gyértót";
        $("errgyar").style.color = "red";
        document.querySelector(".gyar").style.borderColor = "#f00";

        $("errar").innerText = "Add meg az árát";
        $("errar").style.color = "red";
        document.querySelector(".ar").style.borderColor = "#f00";

        $("errlei").innerText = "Add meg a leírást";
        $("errlei").style.color = "red";
        document.querySelector(".lei").style.borderColor = "#f00";

        $("errsz").innerText = "Add meg a szint";
        $("errsz").style.color = "red";
        document.querySelector(".szin").style.borderColor = "#f00";

        $("errkepnev").innerText = "Add meg az terméket ábrázoló kép nevét";
        $("errkepnev").style.color = "red";
        document.querySelector(".kepnev").style.borderColor = "#f00";

        $("errp").innerText = "Add meg a pontot";
        $("errp").style.color = "red";
        document.querySelector(".pont").style.borderColor = "#f00";
        return false;
    }




    if(termekv == "") {
        $("errtkv").innerText = "Add meg a terméktítust";
        $("errtkv").style.color = "red";
        document.querySelector(".termekv").style.borderColor = "#f00";
        return false;
    }
    else if(termek.trim() == "") {
        $("errt").innerText = "Add meg a terméknevét";
        $("errt").style.color = "red";
        document.querySelector(".ter").style.borderColor = "#f00";
        return false;
    }
    else if(gyarto.trim() == "") {
    $("errgyar").innerText = "Add meg a gyértót";
    $("errgyar").style.color = "red";
    document.querySelector(".gyar").style.borderColor = "#f00";

    return false;
    }
    else if(ar.trim() == "") {
        $("errar").innerText = "Add meg az alkatrész árát";
        $("errar").style.color = "red";
        document.querySelector(".ar").style.borderColor = "#f00";
        return false;
    }
    else if(leiras.trim() == "") {
        $("errlei").innerText = "Add meg a leírást";
        $("errlei").style.color = "red";
        document.querySelector(".lei").style.borderColor = "#f00";

        return false;
    }
    else if(szin.trim() == "") {
        $("errsz").innerText = "Add meg a szint";
        $("errsz").style.color = "red";
        document.querySelector(".szin").style.borderColor = "#f00";

        return false;
    }
    else if(kepnev.trim() == "") {
        $("errkepnev").innerText = "Add meg az alkatrészt ábrázoló kép nevét";
        $("errkepnev").style.color = "red";
        document.querySelector(".kepnev").style.borderColor = "#f00";
        return false;
    }
    else if(pont == "") {
        $("errp").innerText = "Add meg a pontot";
        $("errp").style.color = "red";
        document.querySelector(".pont").style.borderColor = "#f00";
        return false;
    }

    if(termekv != "" && termek != ""  && gyarto != "" && ar != ""  && leiras  != "" && szin != "" && kepnev != "" && pont != "")
    {
        sendData();
        return false;
    }
}

function CheckData3() {
    var termekv=$("termekv").value;


    if(termekv != ""){
        $("errtkv").innerText = "";
        document.querySelector(".termekv").style.borderColor = "#fff";
    }



}
function CheckData4() {
    var pont = $("pont").value;
 if(pont != "")
    {
        $("errp").innerText = "";
        document.querySelector(".pont").style.borderColor = "#A9A9A9";

    }
}

function CheckData2()
{

    var termek = $("ter").value;
    var gyarto = $("gyar").value;
    var ar = $("ar").value;
    var leiras = $("lei").value;
    var szin = $("szin").value;
    var kepnev = $("kepnev").value;

    if(termek != "")
    {
        $("errt").innerText = "";
        document.querySelector(".ter").style.borderColor = "#A9A9A9";

    }
    if(gyarto != "")
    {
        $("errgyar").innerText = "";
        document.querySelector(".gyar").style.borderColor = "#A9A9A9";

    }

    if(ar != "")
    {
        $("errar").innerText = "";
        document.querySelector(".ar").style.borderColor = "#A9A9A9";

    }
    if(leiras  != "")
    {
        $("errlei").innerText = "";
        document.querySelector(".lei").style.borderColor = "#A9A9A9";
    }
    if(szin != "")
    {
        $("errsz").innerText = "";
        document.querySelector(".szin").style.borderColor = "#A9A9A9";

    }
    if(kepnev  != "")
    {
        $("errkepnev").innerText = "";
        document.querySelector(".kepnev").style.borderColor = "#A9A9A9";

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

    var termekv = $("termekv").value;
    var termek = $("ter").value;
    var gyarto = $("gyar").value;
    var ar = $("ar").value;
    var leiras = $("lei").value;
    var szin = $("szin").value;
    var kepnev = $("kepnev").value;
    var pont = $("pont").value;

    xmlhttp.open("POST","termekekHA.php", true);
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp.send("termekv="+termekv+"&termek="+termek+"&gyarto="+gyarto+"&ar="+ar+"&leiras="+leiras+"&szin="+szin+"&kepnev="+kepnev+"&pont="+pont);
}