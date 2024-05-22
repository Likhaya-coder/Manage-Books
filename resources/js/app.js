import './bootstrap';

const hurmburger = document.querySelector('#hurmburger');
const mobileNav = document.querySelector('#mobile-nav');

hurmburger.addEventListener('click', () => {
    if (!mobileNav.classList.contains('block')) {
        mobileNav.classList.remove('hidden');
        mobileNav.classList.add('block');
    } else if (mobileNav.classList.contains('block')) {
        mobileNav.classList.remove('block');
        mobileNav.classList.add('hidden');
    }
})