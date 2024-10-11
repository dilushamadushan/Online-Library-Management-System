const hamBurger = document.querySelector(".toggle-btn");
const profile=document.querySelector("#profile")
const user=document.querySelector("#user")
const article=document.querySelector("#article")
const book=document.querySelector("#book")
const paper=document.querySelector("#past-paper")
const resources=document.querySelector("#resources")

console.log(book);

profile.addEventListener("click",()=>{
  user.style.display="none" 
  article.style.display="none" 
  book.style.display="none" 
  paper.style.display="none" 
  resources.style.display="none" 
})

hamBurger.addEventListener("click", function () {
  document.querySelector("#sidebar").classList.toggle("expand");
});

