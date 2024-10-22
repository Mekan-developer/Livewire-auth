// import './bootstrap';

// import Alpine from 'alpinejs'
// window.Alpine = Alpine
// Alpine.start()



import 'flowbite';
import { initFlowbite } from 'flowbite';

document.addEventListener('livewire:navigated', () => {
    initFlowbite();
})