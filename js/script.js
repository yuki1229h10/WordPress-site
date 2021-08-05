/**
 * hm-menu
 */
document.addEventListener('DOMContentLoaded', function () {
  document.getElementById('header__hm-btn').addEventListener('click', function () {
    this.classList.toggle('active');
    document.getElementById('header__hm-menu').classList.toggle('active');
  });
});


/**
 * アコーディオンメニュー
 */
document.addEventListener("DOMContentLoaded", () => {
  const title = document.querySelectorAll('.js-accordion-title');

  for (let i = 0; i < title.length; i++) {
    let titleEach = title[i];
    let content = titleEach.nextElementSibling;
    titleEach.addEventListener('click', () => {
      titleEach.classList.toggle('is-active');
      content.classList.toggle('is-open');
    });
  }
});