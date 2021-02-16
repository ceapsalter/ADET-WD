function computeGrade() {
    var prelim = document.getElementById('prelim').value;
    var midterm = document.getElementById('midterm').value;
    var prefinal = document.getElementById('prefinal').value;
    var final = document.getElementById('final').value;
    var numericValue = ' ';
    var verbalDescription = ' ';
    var gradeRegEx = /^([0-9][0-9])+(.[0-9]{1,2})?$/;
    var sum = Number(prelim) + Number(midterm) + Number(prefinal) + Number(final);
    var average = parseFloat(sum) / 4;

    if (gradeRegEx.test(prelim) == false) {
        window.alert ("PRELIM GRADE IS INVALID!");
    } 
    else if (gradeRegEx.test(midterm) == false) {
        window.alert ("MIDTERM GRADE IS INVALID!");
    } 
    else if (gradeRegEx.test(prefinal) == false) {
        window.alert ("PRE-FINAL GRADE IS INVALID!");
    } 
    else if (gradeRegEx.test(final) == false) {
        window.alert ("FINAL GRADE IS INVALID!");
    } 
    else {
        if (average >= 97 && average <= 100) {
            numericValue = '1.00';
            verbalDescription = 'Marked Excellence';
        } else if (average >= 94 && average <= 96) {
            numericValue = '1.25';
            verbalDescription = 'Excellenct';
        } else if (average >= 91 && average <= 93) {
            numericValue = '1.50';
            verbalDescription = 'Superior';
        } else if (average >= 88 && average <= 90) {
            numericValue = '1.75';
            verbalDescription = 'Very Good';
        } else if (average >= 85 && average <= 87) {
            numericValue = '2.00';
            verbalDescription = 'Good';
        } else if (average >= 82 && average <= 84) {
            numericValue = '2.25';
            verbalDescription = 'Thoroughly Satisfactory';
        } else if (average >= 79 && average <= 81) {
            numericValue = '2.50';
            verbalDescription = 'Satisfactory';
        } else if (average >= 76 && average <= 78) {
            numericValue = '2.75';
            verbalDescription = 'Fair';
        } else if (average == 75) {
            numericValue = '3.00';
            verbalDescription = 'Passed';
        } else if (average < 75) {
            numericValue = '5.00';
            verbalDescription = 'Failed';
        }

        console.log('AVERAGE TYPE : ' + typeof (average))
        console.log('AVERAGE : ' + average);
        document.getElementById('numeric').value = 'Numeric Value : ' + numericValue;
        document.getElementById('description').value = 'Verbal Description : ' + verbalDescription;
    }
}
