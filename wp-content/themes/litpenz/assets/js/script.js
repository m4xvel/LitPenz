var btn_ctg = document.getElementById('сatalog__button');
var catalog = document.getElementById('catalog__pop-up');

btn_ctg.addEventListener('click', function () {
    if (catalog.style.display == 'none') {
        catalog.style.display = 'block';
    } else {
        catalog.style.display = 'none';
    }
});