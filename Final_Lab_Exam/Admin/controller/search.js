function searchAuthor(){

    var username = document.getElementById("username").value;
    var xhttp = new XMLHttpRequest();

    xhttp.open("POST", "../views/dashboard.php?username="+username, true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send('username='+username);
    // xhttp.setRequestHeader()
    // xhttp.send("name="+name+"&&username="+username);
    //document.getElementById("result").innerHTML = xhttp.responseText;

    xhttp.onreadystatechange = function(){

        if(this.readyState == 4 && this.status == 200){
            //alert(this.responseText);
            document.getElementById("search-result").innerHTML = this.responseText;
        }
    }



}