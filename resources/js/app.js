//  import './bootstrap';


import 'flowbite';
import { initFlowbite } from 'flowbite';

document.addEventListener('livewire:navigated', () => {
    initFlowbite();
})




Alpine.data('dropdown', () => ({
    open: false,
 
    toggle() {
        this.open = ! this.open
    }
}))

Alpine.store('counter', {
    count: 0,
    increment() {
        this.count++;
    }
});