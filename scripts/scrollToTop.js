// Start scroll to top function
const scrollBtn = document.querySelector(".scrl-btn");

const btnVisibility = () => {
  if (window.scrollY > 20) {
      scrollBtn.style.visibility = "visible";
  } else {
      scrollBtn.style.visibility = "hidden";
  }
};

document.addEventListener("scroll", () => {
  btnVisibility();
});

scrollBtn.addEventListener("click", () => {
  window.scrollTo({
      top: 0,
      behavior: "smooth"
  });
});
// End scroll to top function