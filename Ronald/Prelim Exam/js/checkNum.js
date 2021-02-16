function checking(){
    var fNum = document.getElementById('firstNumber').value;
    var sNum = document.getElementById('secondNumber').value;
    var total = Number(fNum) + Number(sNum);
    
    if(fNum == 100){
        document.getElementById('result').innerHTML = 'TRUE';
        document.getElementById('fNum').innerHTML = 'First number is 100';
    }
    else if (sNum == 100){
        document.getElementById('result').innerHTML = 'TRUE';
        document.getElementById('sNum').innerHTML = 'Second number is 100';
    }
    else if(total = 100){
        document.getElementById('result').innerHTML = 'TRUE';    
        document.getElementById('total').innerHTML = 'Total of Two Numbers is 100';
    }
    else{
        document.getElementById('result').innerHTML = 'FALSE';
        document.getElementById('fNum').innerHTML = 'First Number is ' + fNum;
        document.getElementById('sNum').innerHTML = 'Second Number is ' + sNum;
    }
}