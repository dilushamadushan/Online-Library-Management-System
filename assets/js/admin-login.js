const form=document.querySelector("#form")
const user=document.querySelector("#user")
const pwd=document.querySelector("#pwd")

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

    return isValid
    
}

const setError=function(message){
    const error=document.querySelector(".error")
    error.innerHTML=message;
}