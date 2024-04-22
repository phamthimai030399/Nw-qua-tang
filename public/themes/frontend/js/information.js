// Toggle mobile filter
const openNavButton = document.querySelector(".information-toggle-button");

const closeNavButton = document.querySelector(".information-side-close");

const navList = document.querySelector(".information-side");

openNavButton.addEventListener("click", () => {
  navList.classList.add("active");
});

closeNavButton.addEventListener("click", () => {
  navList.classList.remove("active");
});

//Xử lý sự kiện show - hide pass email
const inputAccountPassword = document.querySelector(".account-password input");
const buttonAccountPassword = inputAccountPassword.nextElementSibling;
buttonAccountPassword.addEventListener("click", () => {
  if (inputAccountPassword.getAttribute("type") == "password") {
    inputAccountPassword.setAttribute("type", "text");
  } else {
    inputAccountPassword.setAttribute("type", "password");
  }

  buttonAccountPassword.classList.toggle("hidden-data");
  buttonAccountPassword.classList.toggle("show-data");
});

const inputAccountEmail = document.querySelector(".account-email input");
const buttonAccountEmail = inputAccountEmail.nextElementSibling;
const oldValueEmail = inputAccountEmail.value;
buttonAccountEmail.addEventListener("click", () => {
  if (buttonAccountEmail.classList.contains("show-data")) {
    inputAccountEmail.value = inputAccountEmail.getAttribute("data-value");
  } else {
    inputAccountEmail.value = oldValueEmail;
  }

  buttonAccountEmail.classList.toggle("hidden-data");
  buttonAccountEmail.classList.toggle("show-data");
});
