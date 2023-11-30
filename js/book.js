var but1 = document.getElementById('navigation__item-1');
var but2 = document.getElementById('navigation__item-2');
var text = document.getElementById('text_book');
var reviews = document.getElementById('reviews');
var underline = document.getElementById('underline');

but1.style.color = 'white';

function setUnderline(element) {
    var elementRect = element.getBoundingClientRect();
    underline.style.width = elementRect.width + 'px';
    underline.style.transform = 'translateX(' + (elementRect.left - but1.offsetLeft) + 'px)';
}

setTimeout(function () {
  setUnderline(but1);
}, 0);

but1.addEventListener('click', function () {
  if (but2.style.color === 'white') {
      reviews.style.display = 'none';
      text.style.display = 'flex';
      but1.style.color = 'white';
      but2.style.color = '#959595';

      // Устанавливаем новые размеры и позицию для underline
      setTimeout(function () {
          setUnderline(but1);
      }, 0);
  }
});

but2.addEventListener('click', function () {
  if (but1.style.color === 'white') {
      reviews.style.display = 'block';
      text.style.display = 'none';
      but2.style.color = 'white';
      but1.style.color = '#959595';

      // Устанавливаем новые размеры и позицию для underline
      setTimeout(function () {
          setUnderline(but2);
      }, 0);
  }
});