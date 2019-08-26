
function CheckData()
{

    var nev = $("nev").value;
    var vnev = $("vnev").value;
    var date = $("date").value;
    var time = $("time").value;
    var termek = $("termekk").value;

    if( nev == ""&& vnev == "" && date == "" && time== ""&&termek == "" )
    {


        $("errn").innerText = "Add meg a nevét";
        $("errn").style.color = "red";
        document.querySelector(".nev").style.borderColor = "#f00";

        $("errvn").innerText = "Add meg a vezetéknevét";
        $("errvn").style.color = "red";
        document.querySelector(".vnev").style.borderColor = "#f00";

        $("errd").innerText = "Add meg a dátumot";
        $("errd").style.color = "red";
        document.querySelector(".date").style.borderColor = "#f00";

        $("erri").innerText = "Add meg az időt";
        $("erri").style.color = "red";
        document.querySelector(".time").style.borderColor = "#f00";

        $("errt").innerText = "Add meg a terméket nevét";
        $("errt").style.color = "red";
        document.querySelector(".termekk").style.borderColor = "#f00";

        return false;
    }

    if(nev.trim() == "") {
        $("errn").innerText = "Add meg a nevét";
        $("errn").style.color = "red";
        document.querySelector(".nev").style.borderColor = "#f00";
        return false;
    }
     if(vnev.trim() == "") {
        $("errvn").innerText = "Add meg a vezetéknevét";
        $("errvn").style.color = "red";
        document.querySelector(".vnev").style.borderColor = "#f00";
        return false;
    }

     if(date == "") {
            $("errd").innerText = "Add meg a dátumot";
            $("errd").style.color = "red";
            document.querySelector(".date").style.borderColor = "#f00";
            return false;
    }
         if(time == "") {
            $("erri").innerText = "Add meg az időt";
            $("erri").style.color = "red";
            document.querySelector(".time").style.borderColor = "#f00";
            return false;
        }
         if(termek == "") {
            $("errt").innerText = "Add meg a terméket nevét";
            $("errt").style.color = "red";
            document.querySelector(".termekk").style.borderColor = "#f00";
            return false;
        }

    if(  nev != ""&& vnev != "" && date != "" && time != "" &&termek != "" )
    {
        sendData();
        return false;
    }
}



function CheckData2()
{
    var nev = $("nev").value;
    var vnev = $("vnev").value;
    var date = $("date").value;
    var time = $("time").value;



    if(nev  != "")
    {
        $("errn").innerText = "";
        document.querySelector(".nev").style.borderColor = "#A9A9A9";
    }
    if(vnev  != "")
    {
        $("errvn").innerText = "";
        document.querySelector(".vnev").style.borderColor = "#A9A9A9";

    }
    if(date  != "")
    {
        $("errd").innerText = "";
        document.querySelector(".date").style.borderColor = "#A9A9A9";

    }
    if(time  != "")
    {
        $("errt").innerText = "";
        document.querySelector(".tme").style.borderColor = "#A9A9A9";

    }
}
function CheckData3() {
    var termek = $("termekk").value;


    if (termek != "") {
        $("errt").innerText = "";
        document.querySelector(".termekk").style.borderColor = "#fff";
    }


}
    function sendData() {
        var xmlhttp;
        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        }

        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.querySelector("html").innerHTML = xmlhttp.responseText;
            }
        };
        var nev = $("nev").value;
        var vnev = $("vnev").value;
        var date = $("date").value;
        var time = $("time").value;
        var termek = $("termekk").value;

        xmlhttp.open("POST", "foglalas2.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("nev=" + nev + "&vnev="+vnev+ "&date="+date+ "&time="+ time+ "&termek="+termek);
    }
