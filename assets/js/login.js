const form=document.querySelector("#form")
const user=document.querySelector("#user")
const pwd=document.querySelector("#pwd")
const icon=document.querySelector("#icon-pwd")
const user_icon=document.querySelector("#user-icon")
const error=document.querySelector(".error")

form.addEventListener("submit",(e)=>{
   
    e.preventDefault()
    if (!validateForm()) return
    const xhr = new XMLHttpRequest();
            xhr.open("POST", "user-login.php", true);
            xhr.onload = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        const data = xhr.responseText.trim();
                        if (data === "success") {
                            window.location.href = "user-account.php";
                        } else {
                            setError(data);
                        }
                    }
                }
            };
            xhr.send(`name=${encodeURIComponent(user.value)}&pwd=${encodeURIComponent(pwd.value)}`);
        });

function validateForm(){
    let isValid=true
    const userVal=user.value.trim()
    const pwdVal=pwd.value.trim()

    if(userVal===""||pwdVal===""){
        setError("Two feilds must be filled!")
        isValid=false
    }
    else if(pwdVal.length < 10){
        setError("Invalid Password!")
        isValid=false
    }
    else if(!/[a-z]/.test(pwdVal)){
        setError("Invalid Password!")
        isValid=false
    }
    else if(!/[A-Z]/.test(pwdVal)){
        setError("Invalid Password!")
        isValid=false
    }
    else if(!/[0-9]/.test(pwdVal)){
        setError("Invalid Password!")
        isValid=false
    }
    else if(!/[^a-zA-Z0-9]/.test(pwdVal)){
        setError("Invalid Password!")
        isValid=false
    }
    else if(pwdVal.length < 10||!/[a-z]/.test(pwdVal)||!/[A-Z]/.test(pwdVal)||!/[0-9]/.test(pwdVal)||!/[^a-zA-Z0-9]/.test(pwdVal)){
        setError("Invalid Password!")
        isValid=false
    }
    
    else{
        setError("")   
         error.style.display="none"
    }
    return isValid   
}

const setError=function(message){
    error.style.display="block"
    error.innerHTML=message;
}

icon.addEventListener("click",()=>{
    if(pwd.type=="password"){
        pwd.type="text"
        icon.src="assets/media/admin-page/eye-open.png"
    }
    else{
        pwd.type="password"
        icon.src="assets/media/admin-page/eye-close.png"
    }
})
    
