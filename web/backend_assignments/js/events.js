let valArrow = 1;
document.getElementById('listOfApps').style.display = 'none';

let selected = document.getElementById('drop');
selected.onclick = function(){
    if (valArrow == 1){
    document.getElementById('listOfApps').style.display = 'block';
    document.getElementById('arrowDirection').style.transform = 'rotate(45deg)';
    valArrow = 2;
}
else {
    document.getElementById('listOfApps').style.display = 'none';
    document.getElementById('arrowDirection').style.transform = 'rotate(-45deg)';

    valArrow = 1;
}
   
}