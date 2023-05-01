const form_login = document.getElementById('log_form');
const userId = document.getElementById('user_id');
const userIdEle = document.getElementById('user_id_element');
const logPassword = document.getElementById('log_password');
const logPasswordEle = document.getElementById('log_pass_element');
const errorElement = document.getElementById('error');


form_login.addEventListener('submit', e => {
    let message = [];

    if(userId.value === '' || userId.value==null ){
        message.push("User ID is required");
        userIdEle.style.border = '1px solid #BE1E2E';
    }else if(!(userId.value.match(/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/))){
        message.push("Invalid User ID");
        userIdEle.style.border = '1px solid #BE1E2E';
    }else if(logPassword.value === '' || logPassword==null){
        userIdEle.style.border = '1px solid #888888';
        logPasswordEle.style.border = '1px solid #BE1E2E';
        message.push("Password is required");
    }else{
        form_login.submit();
    }

    if(message.length>0){
        e.preventDefault();
        errorElement.style.display = 'block';
        errorElement.innerText = message;
    }
});

const form_reg = document.getElementById('reg_form');
const f_name = document.getElementById('f_name');
const f_name_element = document.getElementById('f_name_element');
const email = document.getElementById('email');
const email_element = document.getElementById('email_element');
const reg_password = document.getElementById('reg_password');
const reg_password_element = document.getElementById('reg_password_element');
const reg_con_email = document.getElementById('reg_con_email');
const con_email_element = document.getElementById('con_email_element');
const reg_con_password = document.getElementById('reg_con_password');
const con_password_element = document.getElementById('con_password_element');
const errorElement2 = document.getElementById('error_reg');

form_reg.addEventListener('submit', e => {
    let message = [];

    if(f_name.value === '' || f_name.value==null ){
        message.push("First name is required");
        f_name_element.style.border = '1px solid #BE1E2E';

    }else if(email.value === '' || email.value==null){
        f_name_element.style.border = '1px solid #888888';
        message.push("Email is required");
        email_element.style.border = '1px solid #BE1E2E';

    }else if(!(email.value.match(/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/))){
        f_name_element.style.border = '1px solid #888888';
        message.push("Invalid E mail");
        email_element.style.border = '1px solid #BE1E2E';

    }else if(reg_con_email.value==='' || reg_con_email.value==null){
        email_element.style.border = '1px solid #888888';
        message.push("Confirm Email is required");
        con_email_element.style.border = '1px solid #BE1E2E';

    }else if(!(reg_con_email.value.match(/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/))){
        email_element.style.border = '1px solid #888888';
        message.push("Invalid E mail");
        con_email_element.style.border = '1px solid #BE1E2E';

    }else if(email.value != reg_con_email.value){
        f_name_element.style.border = '1px solid #888888';
        message.push("Emails mismatched");
        email_element.style.border = '1px solid #BE1E2E';
        con_email_element.style.border = '1px solid #BE1E2E';

    }else if(reg_password.value === '' || reg_password.value==null){
        email_element.style.border = '1px solid #888888';
        con_email_element.style.border = '1px solid #888888';
        message.push("Password is required");
        reg_password_element.style.border = '1px solid #BE1E2E';
        
    }else if(reg_con_password.value === '' || reg_con_password.value==null){
        reg_password_element.style.border = '1px solid #888888';
        message.push("Confirm Password is required");
        con_password_element.style.border = '1px solid #BE1E2E';
    }else if(reg_password.value != reg_con_password.value){
        f_name_element.style.border = '1px solid #888888';
        message.push("Passwords mismatched");
        reg_password_element.style.border = '1px solid #BE1E2E';
        con_password_element.style.border = '1px solid #BE1E2E';
    }else{
        form_reg.submit();
    }

    if(message.length>0){
        e.preventDefault();
        errorElement2.style.display = 'block';
        errorElement2.innerText = message;
    }
});


