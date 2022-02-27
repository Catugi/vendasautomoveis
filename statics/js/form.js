var modal = document.getElementById('id01');

window.onclick = function (event) {
    if (event.target == modal)
    {
        modal.style.display = "none";
    }
}
function checkuncheckEspecial() {
    if (document.getElementById("especial").checked === true)
    {
        document.getElementById("assistente").checked = false;
    }

}

function checkuncheckAssistente() {
    if (document.getElementById("assistente").checked === true)
    {
        document.getElementById("especial").checked = false;
    }
}
function hideAssistente() {

}

function hideEspecial() {


}