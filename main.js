const body = document.querySelector("body");
const navbar = document.querySelector(".navbar");
const menuBtn = document.querySelector(".menu-btn");
const cancelBtn = document.querySelector(".cancel-btn");
menuBtn.onclick = () => {
  navbar.classList.add("show");
  menuBtn.classList.add("hide");
  body.classList.add("disabled");
}
cancelBtn.onclick = () => {
  body.classList.remove("disabled");
  navbar.classList.remove("show");
  menuBtn.classList.remove("hide");
}
window.onscroll = () => {
  this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
}

// window.location.href = "finals"

//EDIT 2023

const mainSection = document.querySelector(".main-section");
const aboutSchoolVideo = document.querySelector(".about-school");
const aboutCupVideo = document.querySelector(".about-cup");


document.addEventListener("scroll", () => {
  if (window.scrollY == mainSection.scrollTop + mainSection.offsetHeight) {

  }
});