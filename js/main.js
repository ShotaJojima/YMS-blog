const hamburger = document.querySelector('.m_hamburger');
const hamburgerBar1 = document.querySelector('.m_hamburger-bar1');
const hamburgerBar2 = document.querySelector('.m_hamburger-bar2');
const hamburgerText = document.querySelector('.m_hamburger_text');
const nav = document.querySelector('.m_nav');

hamburger.addEventListener('click', () => {
    hamburgerBar1.classList.toggle('m_hamburger-bar1__active');
    hamburgerBar2.classList.toggle('m_hamburger-bar2__active');
    hamburgerText.classList.toggle('m_hamburger_text__active');
    nav.classList.toggle('m_nav__active');
});

window.onscroll = () => {
    hamburger.classList.remove("m_hamburger__dl")
};


const button = document.querySelector('.m_button');

button.addEventListener('mousedown', () => {
    button.classList.add('m_button__active');
});

button.addEventListener('mouseup', () => {
    button.classList.remove('m_button__active');
});