function validateForm() {
    var name = document.getElementsByTagName('input')[0].value;
    var email = document.getElementsByTagName('input')[1].value;
    // var male = document.getElementsByTagName('input')[2].value;
    // var female = document.getElementsByTagName('input')[3].value;
    // var other = document.getElementsByTagName('input')[4].value;

    var male = document.getElementsByName("Gender")[0].checked;
    var female = document.getElementsByName("Gender")[1].checked;
    var other = document.getElementsByName("Gender")[2].checked;
    

    var date = document.getElementsByTagName('date')[5];

    var fileio = document.getElementsByTagName('input')[6].value;

    var allowedFormat =  /(\.jpg|\.png|\.jpeg)$/i;
    
    if(name == "") {
        alert("Name field is required");
        return false;
    } else if(email == "") {
        alert('Email field is required');
        return false;
    } else if(!male && !female && !other) {
        alert("Please Select your Gender");
        return false;
    } else if(date.value == "") {
        alert('Please enter your Date of Birth');
        return false;
    } else if(!allowedFormat.exec(fileio)){
        alert('ONLY JPG/JPEG OR PNG IS VALID');
        return false;
    }
}
