// import './bootstrap';
import 'flowbite';


const themeToggleBtn = document.getElementById('theme-toggle');
const darkIcon = document.getElementById('theme-toggle-dark-icon');
const lightIcon = document.getElementById('theme-toggle-light-icon');
const currentTheme = localStorage.getItem('theme') ? localStorage.getItem('theme') : 'light';

if (currentTheme === 'dark') {
    document.documentElement.classList.add('dark');
    darkIcon.classList.remove('hidden');
} else {
    lightIcon.classList.remove('hidden');
}

themeToggleBtn.addEventListener('click', () => {
    document.documentElement.classList.toggle('dark');
    if (document.documentElement.classList.contains('dark')) {
        localStorage.setItem('theme', 'dark');
        darkIcon.classList.remove('hidden');
        lightIcon.classList.add('hidden');
    } else {
        localStorage.setItem('theme', 'light');
        darkIcon.classList.add('hidden');
        lightIcon.classList.remove('hidden');
    }
});
