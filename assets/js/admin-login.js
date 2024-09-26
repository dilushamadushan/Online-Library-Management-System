const form=document.querySelector("#form")
const user=document.querySelector("#user")
const pwd=document.querySelector("#pwd")
const icon=document.querySelector("#icon-pwd")

form.addEventListener("submit",(e)=>{
    if(validateForm()){
        window.location.href="../admin-page.php"
    }
    else{
        e.preventDefault()
    }
})
function validateForm(){
    let isValid=true
    const userVal=user.value.trim()
    const pwdVal=pwd.value.trim()

    if(userVal===""||pwdVal===""){
        setError("Two feilds must be filled!")
        isValid=false
    }
    else if(pwdVal.length < 10||!/[a-z]/.test(pwdVal)||!/[A-Z]/.test(pwdVal)||!/[0-9]/.test(pwdVal)||!/[^a-zA-Z0-9]/.test(pwdVal)){
        setError("Invalid Password!")
        isValid=false
    }
    
    else{
        setError("")   
    }
    return isValid   
}

const setError=function(message){
    const error=document.querySelector(".error")
    error.style.display="block"
    error.innerHTML=message;
}

icon.addEventListener("click",()=>{
    if(pwd.type=="password"){
        pwd.type="text"
        icon.src="../assets/media/admin-page/eye-open.png"
    }
    else{
        pwd.type="password"
        icon.src="../assets/media/admin-page/eye-close.png"
    }
})
    
