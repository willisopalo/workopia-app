const hanburger = document.getElementById('hamburger');

hanburger.addEventListener('click', function () {
    const menu = document.getElementById('mobile-menu');
    menu.classList.toggle('hidden');
})