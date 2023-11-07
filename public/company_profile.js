function validForm(){
    var name = document.custom_form.name;
    var email = document.custom_form.email;
    var phone = document.custom_form.phone;
    var message = document.custom_form.message;

    if(name.value == ""){
        name.nextElementSibling.style.display = "block";
        name.style.border = "1px solid #f00";
        return false
    }else{
        name.nextElementSibling.style.display = "none";
        name.style.border = "1px solid transparent";

    }
    if(!email.value.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/) || email.value == ""){
        email.nextElementSibling.style.display = "block";
        email.style.border = "1px solid #f00";
        return false
    }else{
        email.nextElementSibling.style.display = "none";
        email.style.border = "1px solid transparent";

    }
    if(!phone.value.match(/^(\+62|62|0)8[1-9][0-9]{6,9}$/) || phone.value == ""){
        phone.nextElementSibling.style.display = "block";
        phone.style.border = "1px solid #f00";
        return false
    }else{
        phone.nextElementSibling.style.display = "none";
        phone.style.border = "1px solid transparent";

    }
    if(message.value == ""){
        message.nextElementSibling.style.display = "block";
        message.style.border = "1px solid #f00";
        return false
    }else{
        message.nextElementSibling.style.display = "none";
        message.style.border = "1px solid transparent";

    }
}
