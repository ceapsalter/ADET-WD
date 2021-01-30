var calcu = document.getElementsById("display");

function inputOne(){
    var one = document.getElementById("one").value;
    display.value += one.value;
}

function clearInput(){
    var clear = document.getElementById("clear");
    display.value = '';
}
