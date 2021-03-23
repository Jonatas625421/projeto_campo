function validate_login() { 

    var form = document.getElementById("form");
    var email = document.getElementsByName("email")[0];
    var password = document.getElementsByName("password")[0];

    if(email.value == '' || password.value == ''){  
        alert("Complete os campos");
        return;  
    }
     
    form.submit();		
}


