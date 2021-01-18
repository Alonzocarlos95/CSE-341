
let but1 = document.getElementById("b1");
but1.addEventListener("click", showAlert);

let but2 = document.getElementById("b2");
but2.addEventListener("click", changeColor);

function showAlert() {
    alert("Clicked!");
}

function changeColor() {
    debugger;
    let newColor = document.getElementById('txtColor').value;
    //document.getElementById('div1').setAttribute("style","background-color: #157F1F;");
    let divStyle = document.getElementById('div1');
    divStyle.style.backgroundColor = newColor;
}

let inputColor = document.getElementById('txtColor');
inputColor.value = "#";

