const hamBurger = document.querySelector(".toggle-btn");
// const profile=document.querySelector("#profile")
// const user=document.querySelector("#user")
// const article=document.querySelector("#article")
// const book=document.querySelector("#book")
// const paper=document.querySelector("#past-paper")
// const resources=document.querySelector("#resources")



hamBurger.addEventListener("click", function () {
  document.querySelector("#sidebar").classList.toggle("expand");
});

