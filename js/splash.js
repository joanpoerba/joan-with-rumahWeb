const container = document.querySelector(".wrapper");
const splash = document.querySelector(".splash");
const logoRw = document.querySelector("img");

container.style.display = "none";
splash.style.display = "flex";
logoRw.style.opacity = "0";

setTimeout(() => {
  logoRw.style.opacity = "1";
  logoRw.style.transition = "1s";
}, 500);

setTimeout(() => {
  splash.style.display = "none";
  container.style.display = "block";
}, 2000);

const body = document.body;
const toggle = document.querySelector(".humbergerWrapper");
const header = document.querySelector("header");

toggle.addEventListener("click", () => {
  body.classList.toggle("sidebarOn");
});

feather.replace();