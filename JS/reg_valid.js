const form_reg = document.getElementById('reg_form');
const f_name = document.getElementById('f_name');
const f_name_element = document.getElementById('f_name_element');
const email = document.getElementById('email');
const email_element = document.getElementById('email_element');
const reg_password = document.getElementById('reg_password');
const reg_con_email = document.getElementById('reg_con_email');
const con_email_element = document.getElementById('con_email_element');
const reg_con_password = document.getElementById('reg_con_password');
const con_password_element = document.getElementById('con_password_element');
const errorElement = document.getElementById('error_reg');

form_reg.addEventListener('submit', e => {
    let message = [];

    if(f_name.value === '' || f_name.value==null ){
        message.push("First name is required");
        f_name_element.style.border = '1px solid #BE1E2E';
    }else if(!(userId.value.match(/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/))){
        message.push("Invalid User ID");
        userIdEle.style.border = '1px solid #BE1E2E';
    }else if(logPassword.value === '' || logPassword==null){
        userIdEle.style.border = '1px solid green';
        logPasswordEle.style.border = '1px solid #BE1E2E';
        message.push("Password is required");
    }else{
        form_reg.submit();
    }

    if(message.length>0){
        e.preventDefault();
        errorElement.style.display = 'block';
        errorElement.innerText = message.join(', ');
    }
});
