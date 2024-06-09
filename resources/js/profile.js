const profileMenuButton = document.querySelector('#user-menu-button');
const active = document.querySelector('#active');

profileMenuButton.addEventListener('click', () => {
    if (!active.classList.contains('block')) {
        active.classList.add('block');
        active.classList.remove('hidden');
    } else if (active.classList.contains('block')) {
        active.classList.remove('block');
        active.classList.add('hidden');
    }
});