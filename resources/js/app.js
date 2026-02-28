import './bootstrap';
// Mobile nav drawer
const hamburger = document.querySelector('.nav-hamburger');
const drawer = document.querySelector('.nav-drawer');
const overlay = document.querySelector('.nav-overlay');
const closeBtn = document.querySelector('.nav-drawer-close');

function openDrawer() {
    drawer?.classList.add('open');
    overlay?.classList.add('open');
    document.body.style.overflow = 'hidden';
}

function closeDrawer() {
    drawer?.classList.remove('open');
    overlay?.classList.remove('open');
    document.body.style.overflow = '';
}

hamburger?.addEventListener('click', openDrawer);
closeBtn?.addEventListener('click', closeDrawer);
overlay?.addEventListener('click', closeDrawer);