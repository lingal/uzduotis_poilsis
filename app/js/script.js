const filterBtns = document.querySelectorAll('.filter-btn');
const durationElements = document.querySelectorAll('.stay-duration');
const priceRangeEl = document.querySelector('.price-filter');
const priceValueEl = document.querySelector('.price-value');
const productPrice = document.querySelectorAll('.price');



function getMaxValue() {
  const maxValue = [...productPrice].map((price) => price.innerHTML * 1);
  return Math.max(...maxValue);
}

function getPriceValue(e) {
  let price = e.currentTarget.value;
  priceValueEl.textContent = price;
}

function stayDuration() {
  durationElements.forEach((item) => {
    const durationLength = Number(item.children[1].innerHTML);
    if (durationLength > 1) {
      return (item.children[2].innerHTML = ' nakvynės');
    } else {
      return (item.children[2].innerHTML = ' nakvynė');
    }
  });
}

priceRangeEl.max = getMaxValue();
priceRangeEl.value = getMaxValue();
priceValueEl.textContent = priceRangeEl.value;

priceRangeEl.addEventListener('change', getPriceValue);

stayDuration();

filterBtns.forEach((btn) => {
  btn.addEventListener('click', (e) => {
    const filter = e.currentTarget.parentElement.parentElement;
    // console.log(filter);
    filter.classList.toggle('show-filters');
  });
});
