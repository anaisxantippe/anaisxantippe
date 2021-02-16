var vnom = new RegExp(/^[A-Za-z-ïÏîÎêÊâÂèÈéÉëËàÀòÒôÔöÖñÑçüÜùÙ ]+$/)
var vprenom = new RegExp(/^[A-Za-z-ïÏîÎêÊâÂèÈéÉëËàÀòÒôÔöÖñÑçüÜùÙ ]+$/)
var vcp = new RegExp(/^[0-9]{5}+$/)
var vadress = new RegExp(/^[A-Za-z-ïÏîÎêÊâÂèÈéÉëËàÀòÒôÔöÖñÑçüÜùÙ ,]+$/)
var vcity = new RegExp(/^[A-Za-z-ïÏîÎêÊâÂèÈéÉëËàÀòÒôÔöÖñÑçüÜùÙ ]+$/)

function checkForm(form)
{
    if(form.lastName.value == "") {
        document.getElementById("1").style.color = "#ff0000";
        document.getElementById("1").innerHTML = "Remplissez le champ s'il vous plait";
        form.lastName.focus();
        return false;
    }
    if(!vnom.test(form.lastName.value)) {
        document.getElementById("1").style.color = "#ff0000";
        document.getElementById("1").innerHTML = "N'utilisez que des minuscules, majuscules ou accents s'il vous plait";
        form.lastName.focus();
        return false;
    }
    // 
    if(form.firstName.value == "") {
        document.getElementById("2").style.color = "#ff0000";
        document.getElementById("2").innerHTML = "Remplissez le champ s'il vous plait";
        form.firstName.focus();
        return false;
    }
    if(!vprenom.test(form.firstName.value)) {
        document.getElementById("2").style.color = "#ff0000";
        document.getElementById("2").innerHTML = "N'utilisez que des minuscules, majuscules ou accents s'il vous plait";
        form.firstName.focus();
        return false;
    }
    
    if(form.cp.value == "") {
        document.getElementById("3").style.color = "#ff0000";
        document.getElementById("3").innerHTML = "Remplissez le champ s'il vous plait";
        form.cp.focus();
        return false;
    }
    if(!vcp.test(form.cp.value)) {
        document.getElementById("3").style.color = "#ff0000";
        document.getElementById("3").innerHTML = "N'utilisez que des chiffres s'il vous plait";
        form.cp.focus();
        return false;
    }
    //
    if(form.adress.value == "") {
        document.getElementById("4").style.color = "#ff0000";
        document.getElementById("4").innerHTML = "Remplissez le champ s'il vous plait";
        form.adress.focus();
        return false;
    }
    if(!vadress.test(form.adress.value)) {
        document.getElementById("4").style.color = "#ff0000";
        document.getElementById("4").innerHTML = "N'utilisez que des minuscules, majuscules ou accents s'il vous plait";
        form.adress.focus();
        return false;
    }
    //
    if(form.city.value == "") {
        document.getElementById("5").style.color = "#ff0000";
        document.getElementById("5").innerHTML = "Remplissez le champ s'il vous plait";
        form.city.focus();
        return false;
    }
    if(!vcity.test(form.city.value)) {
        document.getElementById("5").style.color = "#ff0000";
        document.getElementById("5").innerHTML = "N'utilisez que des minuscules, majuscules ou accents s'il vous plait";
        form.city.focus();
        return false;
    }
    //
    if(form.question.value == "") {
        document.getElementById("6").style.color = "#ff0000";
        document.getElementById("6").innerHTML = "Remplissez le champ s'il vous plait";
        form.question.focus();
        return false;
    }
    return true;
}