function getCurrentDate(){
    
    var date = new Date();
    
    var currentDate1 = (date.getMonth()+1) + ' - ' + date.getDate() + ' - ' + date.getFullYear();
    
    var currentDate2 = (date.getMonth()+1) + ' / ' + date.getDate() + ' / ' + date.getFullYear();
    
    var currentDate3 = date.getDate() + ' - ' + (date.getMonth()+1) + ' - ' + date.getFullYear();
    
    var currentDate4 = date.getDate() + ' / ' + (date.getMonth()+1) + ' / ' + date.getFullYear();
    
    document.getElementById('cDate1').innerHTML = currentDate1;
    
    document.getElementById('cDate2').innerHTML = currentDate2;
    
    document.getElementById('cDate3').innerHTML = currentDate3;
    
    document.getElementById('cDate4').innerHTML = currentDate4;
}