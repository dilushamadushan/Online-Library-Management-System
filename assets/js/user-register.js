const form=document.querySelector("#form")
const user=document.querySelector("#name")
const mail=document.querySelector("#mail")
const mobile=document.querySelector("#mobile")
const addr=document.querySelector("#addr")
const pwd=document.querySelector("#pwd")
const cpwd=document.querySelector("#cpwd")

form.addEventListener("submit",(event)=>{
    if(!validateForm()){
        event.preventDefault()
    }
    else{
        window.location.href="../Online-Library-Management-System/users/user-login.php"
    }
})

function validateForm(){
    const userVal=user.value.trim()
    const mailVal=mail.value.trim()
    const mobileVal=mobile.value.trim()
    const addrVal=addr.value.trim()
    const pwdVal=pwd.value.trim()
    const cpwdVal=cpwd.value.trim()

    let isValid=true
    if (userVal == "" || mailVal =="" || pwdVal =="" || cpwdVal =="" || addrVal=="" || mobileVal=="") {
        setError("All fields should be filled!")
        isValid = false
    }
    else if(mobileVal.length != 10 || isNaN(Number(mobileVal))) {
        setError("Invalid Mobile number!")
        isValid = false
    }
    else if(pwdVal.length < 10){
        setError("Password must be in 10 digit!")
        isValid=false
    }
    else if(!/[a-z]/.test(pwdVal)){
        setError("Password Must included a small letter!")
        isValid=false
    }
    else if(!/[A-Z]/.test(pwdVal)){
        setError("Password Must included a capital letter!")
        isValid=false
    }
    else if(!/[0-9]/.test(pwdVal)){
        setError("Password Must included a Number!")
        isValid=false
    }
    else if(!/[^a-zA-Z0-9]/.test(pwdVal)){
        setError("Password Must included a Special character!")
        isValid=false
    }
    else if(pwdVal!==cpwdVal){
        setError("Passwords dosn't match!")
        isValid=false
    }
    return isValid
}

function setError(message){
    const error=document.querySelector(".error")
    error.innerHTML=message
    error.style.display="block"

}
const validateEmail = (email) => {
    return String(email)
      .toLowerCase()
      .match(
        /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
      );
  };

  const iconpwd=document.getElementById("icon-pwd")
  const iconcpwd=document.getElementById("icon-cpwd")

  iconpwd.addEventListener("click",()=>{
    const pwd=document.querySelector("#pwd")

    if(pwd.type=="password"){
        pwd.type="text"
        iconpwd.src="../assets/media/admin-page/eye-open.png"
    }
    else{
        pwd.type="password"
        iconpwd.src="../assets/media/admin-page/eye-close.png"
    }
  })
  iconcpwd.addEventListener("click",()=>{
    const cpwd=document.querySelector("#cpwd")

    if(cpwd.type=="password"){
        cpwd.type="text"
        iconcpwd.src="../assets/media/admin-page/eye-open.png"
    }
    else{
        cpwd.type="password"
        iconcpwd.src="../assets/media/admin-page/eye-close.png"
    }
  })