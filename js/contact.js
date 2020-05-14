function formValidation(){
    var name = document.getElementById("name").value;
    var number = document.getElementById("phoneNumber").value;
    var email = document.getElementById("emailAddress").value;
    var message = document.getElementById("message").value;
    var error_msg = document.getElementById("error_message");   
    var text;
    
    error_msg.style.padding = "10px";

    if(name == ''){
        text="Please enter your name";
        error_msg.innerHTML = text;
        return false;
    }
    else if(name.length < 5){
        text="Please Enter Valid Name";
        error_msg.innerHTML = text;
        return false;
    }
    else if(number == ''){
        text="Please enter your phone number";
        error_msg.innerHTML = text;
        return false;
    }
    else if(number.length < 9){
        text="Please Enter Valid Phone Number";
        error_msg.innerHTML = text;
        return false;
    }
    else if(email == ''){
        text="Please enter your email";
        error_msg.innerHTML = text;
        return false;
    }
    else if(!email.includes('@') || !email.includes('.')){
        text = "Please Email must contain '@' and ' . '";
        error_msg.innerHTML = text;
        return false;
    }
    else if(message == ''){
        text="Please enter your message";
        error_msg.innerHTML = text;
        return false;
    }
    else{

        return true;
    }

}