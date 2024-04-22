// Range slider
const filterRangeSlider = document.querySelector(
  ".products-filter-range-slider"
);

const filterRangeSliderInputMin = document.querySelector(
  ".products-filter-range-input .min"
);
const filterRangeSliderInputMax = document.querySelector(
  ".products-filter-range-input .max"
);

rangeSlider(filterRangeSlider, {
  // min value
  min: 0,
  // max value
  max: 100,
  // step size
  step: 1,
  // set input value
  value: [0, 100],
  onInput: function (valueSet) {
    filterRangeSliderInputMin.value = valueSet[0];
    filterRangeSliderInputMax.value = valueSet[1];
  },
});

// Change range slider input value
const changeValue = () => {
  rangeSlider(filterRangeSlider).value([
    filterRangeSliderInputMin.value,
    filterRangeSliderInputMax.value,
  ]);
};

// Set default value input
filterRangeSliderInputMin.value = 0;
filterRangeSliderInputMax.value = 100;

// Toggle mobile filter
const openFilterButton = document.querySelector(".products-filter-toggle");

const closeFilterButton = document.querySelector(".products-filter-close");

const productFilterList = document.querySelector(".products-filter-list");

openFilterButton.addEventListener("click", () => {
  productFilterList.classList.add("active");
});

closeFilterButton.addEventListener("click", () => {
  productFilterList.classList.remove("active");
});

// clear all checkbox
const clearBtn = document.querySelectorAll(".clear-button");
Array.from(clearBtn).forEach((btn) => {
  btn.addEventListener("click", function () {
    checkList = this.parentElement.querySelectorAll('input[type="checkbox"]');
    Array.from(checkList).forEach((check) => {
      check.checked = false;
    });
  });
});

// Mode product
const modeBtn = Array.prototype.slice.call(
  document.querySelectorAll('input[name="mode"]')
);
modeBtn.forEach((radio) => {
  radio.addEventListener("click", (e) => {
    const products = Array.prototype.slice.call(
      document.querySelectorAll(".products-container .product")
    );
    const productContainer = document.querySelector(".products-container");
    if (e.target.value == "mode-row") {
      productContainer.classList.add("products-row");
      products.forEach((product) => product.classList.add("product-row"));
    } else {
      productContainer.classList.remove("products-row");
      products.forEach((product) => product.classList.remove("product-row"));
    }
  });
});

// Show more content
const showMore = document.querySelector(".products-guide-btn");
showMore.addEventListener("click", () => {
  document.querySelector(".products-guide-content").classList.toggle("show");
  const contentBtn = showMore.querySelector("span");
  if (contentBtn.innerHTML == "Show More") {
    contentBtn.innerHTML = "Hide";
  } else contentBtn.innerHTML = "Show More";
});
