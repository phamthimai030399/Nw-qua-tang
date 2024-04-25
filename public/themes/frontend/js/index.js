const buttonsCollapseMenu = document.querySelectorAll(".close-sub-nav");
Array.from(buttonsCollapseMenu).forEach((button) => {
  button.addEventListener("click", () => {
    button.parentElement
      .querySelector(".nav-item")
      .classList.toggle("nav-item-bold");
    console.log(button.parentElement);
  });
});

const inputs = document.querySelectorAll("input");
Array.from(inputs).forEach((input) => {
  const placeHolderCurrent = input.getAttribute("placeholder");
  input.addEventListener("focus", function () {
    this.setAttribute("placeholder", "");
    const clearInput = this.parentElement.querySelector(".clear-input");

    if (clearInput) {
      //Xử lý sự kiện khi thay đổi input hiển thị nút X
      clearInput.classList.remove("d-none");
      this.addEventListener("input", function () {
        if (this.value == "") {
          clearInput.querySelector(".clear-input svg path").style.fill =
            "#c8c8c8";
        } else {
          clearInput.querySelector(".clear-input svg path").style.fill = "#000";
        }
      });

      //Xử lý sự kiện khi clear input
      clearInput.addEventListener("click", () => {
        clearInput.previousElementSibling.value = "";
        clearInput.querySelector("svg path").style.fill = "#c8c8c8";
        input.focus();
      });
    }
    this.addEventListener("focusout", function (e) {
      this.setAttribute("placeholder", placeHolderCurrent);
      if (this.value == "") {
        this.style.outline = "none";
      }
    });

    //Xử lý sự kiện khi click ra ngoài ô input khác
    window.addEventListener("click", (e) => {
      if (
        e.target.parentElement == input.parentElement ||
        e.target.parentElement.parentElement == input.parentElement ||
        e.target.parentElement.parentElement.parentElement ==
          input.parentElement
      ) {
        return false;
      } else {
        if (clearInput) {
          clearInput.classList.add("d-none");
        }
      }
    });
  });
});

// password show/hide
const passwordInputs = document.querySelectorAll(".password-input");
Array.from(passwordInputs).forEach((passwordInput) => {
  passwordInput.addEventListener("click", function () {
    const input = this.parentElement.querySelector("input");
    console.log(input.type);
    if (input.type == "password") {
      input.setAttribute("type", "text");
    } else {
      input.setAttribute("type", "password");
    }
  });
});

//quantity
const plusbtn = document.querySelectorAll(".plus");
plusbtn.forEach((plus) => {
  plus.addEventListener("click", () => {
    const quantity = plus.parentElement.querySelector(".qty");
    if (quantity.value) {
      quantity.value = parseInt(quantity.value) + 1;
    } else quantity.value = 0;
  });
});
const minusbtn = document.querySelectorAll(".minus");
minusbtn.forEach((minus) => {
  minus.addEventListener("click", () => {
    const quantity = minus.parentElement.querySelector(".qty");
    if (parseInt(quantity.value) > 0) {
      quantity.value = parseInt(quantity.value) - 1;
    } else quantity.value = 0;
  });
});

const swiperTopbar = new Swiper(".header-topbar-slider", {
  loop: true,
  speed: 1000,
  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
  },
});

const swiperRelated = new Swiper(".related-slider", {
  direction: "horizontal",
  slidesPerView: 1,
  spaceBetween: 10,
  speed: 800,
  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
  },
  breakpoints: {
    480: {
      slidesPerView: 2,
      spaceBetween: 10,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 15,
    },
    992: {
      autoplay: false,
      slidesPerView: 4,
      spaceBetween: 26,
    },
  },
  navigation: {
    nextEl: ".related-next",
    prevEl: ".related-prev",
  },
});

const quickviewImg = new Swiper(".quickview-img-slider", {
  loop: true,
  spaceBetween: 8,
  slidesPerView: "auto",
  freeMode: true,
  watchSlidesProgress: true,
  speed: 800,
  breakpoints: {
    992: {
      direction: "vertical",
      slidesPerView: 6,
    },
  },
});
const quickviewThumb = new Swiper(".quickview-thumb", {
  loop: true,
  spaceBetween: 10,
  speed: 800,
  navigation: {
    nextEl: ".quickview-img-next",
    prevEl: ".quickview-img-prev",
  },
  thumbs: {
    swiper: quickviewImg,
  },
});

// click wishlist, add to cart
const popupCart = document.querySelector("#fhm-cart-popup");
const productWishlist = document.querySelectorAll(".product-wishlist");
if (popupCart && productWishlist) {
  Array.from(productWishlist).forEach((btn) => {
    btn.addEventListener("click", () => {
      const tabWishlist = popupCart.querySelector("#pills-wishlist-tab");
      tabWishlist.click();
    });
  });
}
const productInfoWishlist = document.querySelectorAll(".product-info-wishlist");
if (popupCart && productInfoWishlist) {
  Array.from(productInfoWishlist).forEach((btn) => {
    btn.addEventListener("click", () => {
      const tabWishlist = popupCart.querySelector("#pills-wishlist-tab");
      tabWishlist.click();
    });
  });
}

const addToCart = document.querySelectorAll(".add-cart");
if (popupCart && addToCart) {
  Array.from(addToCart).forEach((btn) => {
    btn.addEventListener("click", () => {
      const tabCart = popupCart.querySelector("#pills-cart-tab");
      tabCart.click();
    });
  });
}

// const quickviewPopup = new bootstrap.Modal(
//   document.getElementById("fhm-quickview-popup")
// );
// // close quick view wishlist when click quick view wishlist (detail-wishlist)
// const quickviewWishlist = document.querySelectorAll(".detail-thumb-wishlist");
// if (quickviewWishlist) {
//   const tabWishlist = popupCart.querySelector("#pills-wishlist-tab");
//   Array.from(quickviewWishlist).forEach((wishlist) => {
//     wishlist.addEventListener("click", () => {
//       quickviewPopup.hide();
//       tabWishlist.click();
//     });
//   });
// }
// close quick view when click add to cart
const quickviewCart = document.querySelector(".quickview-add-cart");
if (quickviewCart) {
  const tabCart = popupCart.querySelector("#pills-cart-tab");
  quickviewCart.addEventListener("click", () => {
    tabCart.click();
    console.log("2");
    quickviewPopup.hide();
  });
}

// password strength
const password = document.getElementById("password-register");
const lineCheck = document.querySelector(".password-strength");
const resultCheckStrength = document.querySelector(".password-strength span");
const strength = [
  {
    level: "weak",
    test: /[a-z]/,
  },
  {
    level: "good",
    test: /^(?=.*[0-9])(?=.*[a-z]).*$/,
  },
  {
    level: "strong",
    test: /^(?=.*[0-9])(?=.*[a-zA-Z])(?=.*[@!#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]).*$/,
  },
];

if (password && resultCheckStrength && strength) {
  let value;
  password.addEventListener("input", () => {
    value = password.value;
    resultCheckStrength.innerHTML = "too short";
    let level = "";
    if (value.length >= 6) {
      strength.forEach((el) => {
        lineCheck.classList.remove(el.level);
        el.test.test(value) && (level = el.level);
      });
      lineCheck.classList.add(level);
      resultCheckStrength.innerHTML = level;
    } else {
      strength.forEach((el) => {
        lineCheck.classList.remove(el.level);
      });
      resultCheckStrength.innerHTML = "too short";
    }
  });
}

// open promotion popup
const buttonPopupSale = document.querySelector(".promotion-btn");
if (buttonPopupSale) {
  setTimeout(() => {
    buttonPopupSale.click();
    buttonPopupSale.classList.remove("d-none");
  }, 1000);
}

$(document).ready(function () {
  $(document).on("click", ".btn-login", function (event) {
    event.preventDefault();
    let _this = $(this);
    _this.prop("disabled", true);
    let form = $("#fhm-login-popup form");
    var formData = form.serializeArray();
    let action = form.attr("action");
    let method = form.attr("method");
    $.ajax({
      url: action,
      type: method,
      data: formData,
      success: function (xhr, textStatus, errorThrown) {
        $("#fhm-login-popup").modal("hide");
        // $("#box-login").html(data);
        $("[data-bs-target='#fhm-login-popup']").removeAttr(
          "data-bs-target data-bs-toggle"
        );
        $("#icon-login").addClass("d-none");
        $("#icon-logout").removeClass("d-none");
        $(".user-name").html(xhr?.data?.name);
        setTimeout(function () {
          alert("Đăng nhập thành công");
        });
      },
      error: function (xhr, textStatus, errorThrown) {
        // Kiểm tra nếu mã trạng thái là 401 Unauthorized và là JSON
        if (xhr.responseJSON) {
          if (xhr.responseJSON.status == "success") {
            $("#fhm-login-popup .notification .success").html(
              xhr.responseJSON.message
            );
          } else {
            $("#fhm-login-popup .notification .error").html(
              xhr.responseJSON.message
            );
          }
        } else {
          // Xử lý lỗi khác nếu có
          alert("Lỗi: " + textStatus);
        }
        _this.prop("disabled", false);
      },
    });
  });

  $(document).on("click", ".btn-register", function (event) {
    event.preventDefault();
    let _this = $(this);
    _this.prop("disabled", true);
    let form = $("#fhm-register-popup form");
    var formData = form.serializeArray();
    let action = form.attr("action");
    let method = form.attr("method");
    $.ajax({
      url: action,
      type: method,
      data: formData,
      success: function (data, textStatus, errorThrown) {
        $("#fhm-register-popup").modal("hide");
        setTimeout(function () {
          $("#fhm-login-popup .notification .success").html(data?.message);
          $("#fhm-login-popup .notification .error").html("");
          $("#fhm-login-popup").modal("show");
        });
      },
      error: function (data, textStatus, errorThrown) {
        // Kiểm tra nếu mã trạng thái là 401 Unauthorized và là JSON
        if (data) {
          if (data.status == "success") {
            $("#fhm-login-popup .notification .success").html(data.message);
            $("#fhm-login-popup .notification .error").html("");
          } else {
            $("#fhm-register-popup .notification .error").html(data.message);
            $("#fhm-register-popup .notification .success").html("");
          }
        } else {
          // Xử lý lỗi khác nếu có
          alert("Lỗi: " + textStatus);
        }
        _this.prop("disabled", false);
      },
    });
  });

  $(document).on(
    "change",
    ".products-filter-list input[type=checkbox]",
    function (event) {
      handleFilter();
    }
  );
  $(document).on("click", "#dropdown-user", function (event) {
    event.preventDefault();
    $(".acount-info-home").toggleClass("d-none");
  });
});

function handleFilter() {
  var url = new URL(window.location.href);
  url.searchParams.forEach(function (value, key) {
    if (key !== "keyword") {
      url.searchParams.delete(key);
    }
  });
  var checked = $(".products-filter-list input[type=checkbox]:checked");
  var checkedValues = checked
    .map(function () {
      return {
        name: this.name,
        value: this.value,
      };
    })
    .get();
  checkedValues.forEach(function (item) {
    url.searchParams.append(item.name, item.value);
  });
  window.location.href = url.href.replaceAll("%5B%5D", "[]");
}
