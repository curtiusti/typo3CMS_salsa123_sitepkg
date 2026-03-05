console.log('WE LOVE SALSA UN DOS TRES');

//toggle hamburger menu
document.addEventListener('DOMContentLoaded', function() {
    const btn = document.querySelector('.mobile-menu-button');
    const menu = document.querySelector('.mobile-menu');

    if (btn && menu) {
        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    }
});